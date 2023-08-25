
var inputElm = document.querySelector('input[name=users-list-tags]');

function tagTemplate(tagData){
    return `
        <tag title="${tagData.email}"
                contenteditable='false'
                spellcheck='false'
                tabIndex="-1"
                class="tagify__tag ${tagData.class ? tagData.class : ""}"
                ${this.getAttributes(tagData)}>
            <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
            <div>
                <div class='tagify__tag__avatar-wrap'>
                    <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                </div>
                <span class='tagify__tag-text'>${tagData.name}</span>
            </div>
        </tag>
    `
}

function suggestionItemTemplate(tagData){
    return `
        <div ${this.getAttributes(tagData)}
            class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
            tabindex="0"
            role="option">
            ${ tagData.avatar ? `
                <div class='tagify__dropdown__item__avatar-wrap'>
                    <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                </div>` : ''
            }
            <strong>${tagData.name}</strong>
            <span>${tagData.email}</span>
        </div>
    `
}

function dropdownHeaderTemplate(suggestions){
    return `
        <header data-selector='tagify-suggestions-header' class="${this.settings.classNames.dropdownItem} ${this.settings.classNames.dropdownItem}__addAll">
            <div>
                <strong>${this.value.length ? `Add Remaning` : 'Add All'}</strong>
                <a class='remove-all-tags'>Remove all</a>
            </div>
            <span>${suggestions.length} members</span>
        </header>
    `
}


// Get a reference to the input element
var inputElm = document.querySelector('input[name=users-list-tags]');
var protocol = window.location.protocol;
var host = window.location.host;
var path = "/tauris/";

var domain = protocol + "//" + host + path;




// Fetch the whitelist data from API
fetch(domain+'tauris_api/v2/api/get_team.php')
    .then(response => response.json())
    .then(data => {
        // Initialize Tagify with fetched data
        var tagify = new Tagify(inputElm, {
            tagTextProp: 'name',
            skipInvalid: true,
            dropdown: {
                closeOnSelect: false,
                enabled: 0,
                classname: 'users-list',
                searchKeys: ['name', 'email']
            },
            templates: {
                tag: tagTemplate,
                dropdownItem: suggestionItemTemplate,
                dropdownHeader: dropdownHeaderTemplate
            },
            whitelist: data,
            transformTag: (tagData, originalData) => {
                var { name, email } = parseFullValue(tagData.name);
                tagData.name = name;
                tagData.email = email || tagData.email;
            },
            validate({ name, email }) {
                if (!email && name) {
                    var parsed = parseFullValue(name);
                    name = parsed.name;
                    email = parsed.email;
                }
                if (!name) return "Missing name";
                if (!validateEmail(email)) return "Invalid email";
                return true;
            }
        });

        inputElm.addEventListener('tagify:initialized', function () {
            tagify.dropdown.init(); // Initialize the dropdown
        });
  

// The below code is printed as escaped, so please copy this function from:
// https://github.com/yairEO/tagify/blob/master/src/parts/helpers.js#L89-L97
function escapeHTML( s ){
    return typeof s == 'string' ? s
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/`|'/g, "&#039;")
        : s;
}
// The below part is only if you want to split the users into groups, when rendering the suggestions list dropdown:
// (since each user also has a 'team' property)
tagify.dropdown.createListHTML = sugegstionsList  => {
    const teamsOfUsers = sugegstionsList.reduce((acc, suggestion) => {
        const team = suggestion.team || 'Not Assigned';

        if( !acc[team] )
            acc[team] = [suggestion]
        else
            acc[team].push(suggestion)

        return acc
    }, {})

    const getUsersSuggestionsHTML = teamUsers => teamUsers.map((suggestion, idx) => {
        if( typeof suggestion == 'string' || typeof suggestion == 'number' )
            suggestion = {value:suggestion}

        var value = tagify.dropdown.getMappedValue.call(tagify, suggestion)

        suggestion.value = value && typeof value == 'string' ? escapeHTML(value) : value

        return tagify.settings.templates.dropdownItem.apply(tagify, [suggestion]);
    }).join("")


    // assign the user to a group
    return Object.entries(teamsOfUsers).map(([team, teamUsers]) => {
        return `<div class="tagify__dropdown__itemsGroup" data-title="Team ${team}:">${getUsersSuggestionsHTML(teamUsers)}</div>`
    }).join("")
}

// attach events listeners
tagify.on('dropdown:select', onSelectSuggestion) // allows selecting all the suggested (whitelist) items
      .on('edit:start', onEditStart)  // show custom text in the tag while in edit-mode

function onSelectSuggestion(e){
    if( e.detail.event.target.matches('.remove-all-tags')) {
        tagify.removeAllTags()
    }

    // custom class from "dropdownHeaderTemplate"
    else if( e.detail.elm.classList.contains(`${tagify.settings.classNames.dropdownItem}__addAll`) )
        tagify.dropdown.selectAll();
}

function onEditStart({detail:{tag, data}}){
    tagify.setTagTextNode(tag, `${data.name} <${data.email}>`)
}

// https://stackoverflow.com/a/9204568/104380
function validateEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
}

function parseFullValue(value) {
    // https://stackoverflow.com/a/11592042/104380
    var parts = value.split(/<(.*?)>/g),
        name = parts[0].trim(),
        email = parts[1]?.replace(/<(.*?)>/g, '').trim();

    return {name, email}
}

})
.catch(error => console.error('Error fetching whitelist:', error));


