<?php include "inc-header.php"; ?>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">


<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
<!--begin::Container-->
<div id="kt_content_container" class="container-xxl">




<!--begin::Toolbar-->
<div class="d-flex flex-wrap flex-stack my-5">
<!--begin::Heading-->
<h2 class="fs-2 fw-bold mt-5">Project List <br>
<span class="fs-6 text-gray-400">This page contains all the project for <strong>Nine Cloud</strong></span>
</h2>
<!--end::Heading-->

</div>
<!--end::Toolbar-->






<!--begin::Stats-->
<div class="row col-xxl-12 mt-10" style="background: white;">


<div class="col-lg-6 col-xxl-3 mt-10 mb-10">
<div class="col">
<div class="border border-dashed border-gray-300 text-center min-w-175px rounded pt-4 pb-2 my-3  bg-light-success ps-5 pe-5">
<span class="fs-lg-2 fs-2hx fw-bold d-block">PROJECTS</span>
<div class="fs-lg-2hx fs-2hx fw-bolder" data-kt-countup="true" data-kt-countup-value="20" data-kt-countup-prefix="">0</div>
</div>
</div>
</div>




<div class="col-lg-6 col-xxl-3 mt-10 mb-10">
<!--begin::Budget-->

<!--begin::Col-->
<div class="col">
<div class="border border-dashed border-gray-300 text-center min-w-150px rounded pt-4 pb-2 my-3  bg-light-primary ps-5 pe-5">
<span class="fs-lg-2 fs-2hx fw-bold d-block">BUDGET</span>
<div class="fs-lg-2hx fs-2hx fw-bolder" data-kt-countup="true" data-kt-countup-value="45000000" data-kt-countup-prefix="$">0</div>
</div>
</div>
<!--end::Col-->

<!--end::Budget-->
</div>



<div class="col-lg-6 col-xxl-3 mt-10 mb-10">
<!--begin::Budget-->

<!--begin::Col-->
<div class="col">
<div class="border border-dashed border-gray-300 text-center min-w-150px rounded pt-4 pb-2 my-3  bg-light-danger ps-5 pe-5">
<span class="fs-lg-2 fs-2hx fw-bold d-block"> SPENDING</span>
<div class="fs-lg-2hx fs-2hx fw-bolder" data-kt-countup="true" data-kt-countup-value="25000000" data-kt-countup-prefix="$">0</div>
</div>
</div>
<!--end::Col-->

<!--end::Budget-->
</div>




<div class="col-lg-6 col-xxl-3 mt-10 mb-10">
<!--begin::Clients-->

<!--begin::Col-->
<div class="col">
<div class="border border-dashed border-gray-300 text-center min-w-175px rounded pt-4 pb-2 my-3  bg-light-success ps-5 pe-5">
<span class="fs-lg-2 fs-2hx fw-bold d-block">BALANCE</span>
<div class="fs-lg-2hx fs-2hx fw-bolder" data-kt-countup="true" data-kt-countup-value="20000000" data-kt-countup-prefix="$">0</div>
</div>
</div>
<!--end::Col-->

<!--end::Clients-->
</div>
</div>

<!--end::Stats-->


<!-- begin::Row -->
<div class="row g-6 g-xl-9 mt-5" id="dataBodyNote">


</div>
<!--end::Row-->


</div>
<!--end::Container-->
</div>
<!--end::Post-->
</div>
<!--end::Content-->



<script>
  
    function fetchDataNote() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '<?php echo $domain ?>/tauris_api/v2/api/projects_task.php', true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            var records = JSON.parse(xhr.responseText);
            

            var projectBody = document.getElementById('dataBodyNote');
            projectBody.innerHTML = '';
            
            for (var i = 0; i < records.length; i++) {
                var record = records[i];
                console.log(record)
               // var record = record.data; // Extracting the nested 'data' object
                console.log(record)
           
                    const colDiv = document.createElement('div');
                    colDiv.className = 'col-md-6 col-xl-4';

                    // Create a card element with the class "card border-hover-primary"
                    const cardDiv = document.createElement('div');
                    cardDiv.className = 'card border-hover-primary';

                    // Create the card body element
                    const cardBodyDiv = document.createElement('div');
                    cardBodyDiv.className = 'card-body p-9';

                    // Create the project name link
                    const projectNameLink = document.createElement('a');
                    projectNameLink.href = '<?php echo $domain ; ?>project-view.php';
                    const projectNameDiv = document.createElement('div');
                    projectNameDiv.className = 'fs-2 fw-bolder text-dark';
                    projectNameDiv.textContent = record['project_name'];
                    projectNameLink.appendChild(projectNameDiv);

                    // Create the project manager and contract id paragraphs
                    const projectManagerP = document.createElement('p');
                    projectManagerP.className = 'text-gray-600 fw-bold fs-5 mt-1 mb-3';
                    projectManagerP.textContent = 'Project Manager: ' + record['project_manager'];

                    const contractIdP = document.createElement('p');
                    contractIdP.className = 'text-gray-600 fw-bold fs-5 mt-1 mb-3';
                    contractIdP.textContent = 'Contract id: '+ record['contract_id'];

                    // Create the budget div
                    const budgetDiv = document.createElement('div');
                    budgetDiv.className = 'border border-info border-dashed rounded min-w-250px py-2 px-2 mx-0 mb-3 bg-light-primary';
                    const budgetTextDiv = document.createElement('div');
                    budgetTextDiv.className = 'fs-2 fw-bolder text-gray-700';
                    budgetTextDiv.textContent = 'Budget : ' +record['budget'];
                    budgetDiv.appendChild(budgetTextDiv);

                                    // Create the Date Flex Container div
                    const dateFlexDiv = document.createElement('div');
                    dateFlexDiv.className = 'd-flex flex-wrap mb-5';

                    // Create the Due Date div
                    const dueDateDiv = document.createElement('div');
                    dueDateDiv.className = 'border border-gray-300 border-dashed rounded min-w-125px py-2 px-2 me-4 mb-3';
                    const dueDateTextDiv = document.createElement('div');
                    dueDateTextDiv.className = 'fs-6 text-gray-600 fw-bolder';
                    dueDateTextDiv.textContent = record['end_date'];
                    dueDateDiv.appendChild(dueDateTextDiv);
                    const dueDateLabelDiv = document.createElement('div');
                    dueDateLabelDiv.className = 'fw-bold text-gray-400';
                    dueDateLabelDiv.textContent = 'Due Date';
                    dueDateDiv.appendChild(dueDateLabelDiv);

                    // Create the Start Date div
                    const startDateDiv = document.createElement('div');
                    startDateDiv.className = 'border border-gray-300 border-dashed rounded min-w-125px py-2 px-2 mb-3';
                    const startDateTextDiv = document.createElement('div');
                    startDateTextDiv.className = 'fs-6 text-gray-600 fw-bolder';
                    startDateTextDiv.textContent = record['start_date'];
                    startDateDiv.appendChild(startDateTextDiv);
                    const startDateLabelDiv = document.createElement('div');
                    startDateLabelDiv.className = 'fw-bold text-gray-400';
                    startDateLabelDiv.textContent = 'Start Date';
                    startDateDiv.appendChild(startDateLabelDiv);

                    // Append the Due Date and Start Date divs to the Date Flex Container div
                    dateFlexDiv.appendChild(dueDateDiv);
                    dateFlexDiv.appendChild(startDateDiv);

                    const statusText = document.createElement('p')
                    statusText.className = 'text-gray-600 fw-bold fs-5 mt-1 mb-7';
                    statusText.textContent = 'Status:'
                    const statusSpan = document.createElement('span')
                    statusSpan.className = 'badge badge-light-success me-auto'
                    statusSpan.textContent = 'Active'

                    statusText.appendChild(statusSpan)
                  


                    // Create the Team section
                    const teamHeaderP = document.createElement('p');
                    teamHeaderP.className = 'text-gray-600 fw-bold fs-5 mt-1 mb-3 mt-5';
                    teamHeaderP.textContent = 'Team';

                    const teamDiv = document.createElement('div');
                    teamDiv.className = 'symbol-group symbol-hover';
                    // You can add team members here using similar logic to the user symbols in the original HTML.

                    // Create the Project Progress section
                    const progressHeaderP = document.createElement('p');
                    progressHeaderP.className = 'text-gray-600 fw-bold fs-5 mt-10 mb-3';
                    progressHeaderP.textContent = 'Project Progress';

                    const progressBarDiv = document.createElement('div');
                    progressBarDiv.className = 'h-4px w-100 bg-light mb-5 mt-5';
                    const progressInnerDiv = document.createElement('div');
                    progressInnerDiv.className = 'bg-info rounded h-4px';
                    progressInnerDiv.style.width = '30%'; // Set the progress width dynamically
                    progressBarDiv.appendChild(progressInnerDiv);

                    // Create the "View Project" button
                    const viewProjectButton = document.createElement('a');
                    viewProjectButton.className = 'btn btn-primary btn-sm me-3 mt-5';
                    viewProjectButton.href = '<?php echo $domain ; ?>project-view.php?project_id='+record['project_id'];
                    viewProjectButton.textContent = 'View Project';

                    // Append all the elements to the card body
                    cardBodyDiv.appendChild(projectNameLink);
                    cardBodyDiv.appendChild(projectManagerP);
                    cardBodyDiv.appendChild(contractIdP);
                    cardBodyDiv.appendChild(budgetDiv);
                    cardBodyDiv.appendChild(statusText);
                    // cardBodyDiv.appendChild(startDateDiv);
                    cardBodyDiv.appendChild(dateFlexDiv);
                    cardBodyDiv.appendChild(teamHeaderP);
                    cardBodyDiv.appendChild(teamDiv);
                    cardBodyDiv.appendChild(progressHeaderP);
                    cardBodyDiv.appendChild(progressBarDiv);
                    cardBodyDiv.appendChild(viewProjectButton);

                    // Append the card body to the card
                    cardDiv.appendChild(cardBodyDiv);

                    // Append the card to the column
                    colDiv.appendChild(cardDiv);

                    // Finally, add the entire structure to the document
                    projectBody.appendChild(colDiv);
                
             }
        } else {
            console.error('Request failed. Status: ' + xhr.status);
        }
    };

    xhr.send();
}

fetchDataNote()

</script>
<?php include "inc-drawer-project.php" ; ?>
<?php include "inc-footer.php"; ?>
