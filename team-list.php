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
                <h2 class="fs-2 fw-bold mt-5">Manage Team </h2>
                <!--end::Heading-->

            </div>
            <!--end::Toolbar-->

            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                        transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-user-table-filter="search"
                                class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
                        </div>
                        <!--end::Search-->


                    </div>
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">

                        <!--begin::Add user-->
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_add_user">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fa fa-plus text-white"></i>
                            </span>
                            <!--end::Svg Icon-->Add New
                        </button>
                        <!--end::Add user-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                            data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px">Name</th>
                                <th class="min-w-125px">Email</th>
                                <th class="min-w-100px">Phone</th>
                                <th class="min-w-125px">Designation</th>
                                <th class="min-w-100px">Status</th>
                                <th class="text-end min-w-125px">Actions</th>
                            </tr>

                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-bold" id='teamdata' >
                         
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->

<?php include "inc-drawer-team.php"; ?>


<script>
function fetchtTeamData() {
	
	var xhr = new XMLHttpRequest();
	xhr.open('GET', '<?php echo $domain ?>/tauris_api/v2/api/manage_team.php', true);

	xhr.onload = function() {
		if (xhr.status === 200) {
			var records = JSON.parse(xhr.responseText);

			var tableBody = document.getElementById('teamdata');
			tableBody.innerHTML = '';
			
			for (var i = 0; i < records.length; i++) {
				var record = records[i];
				console.log(record)
				// Create a <tr> element
				var trElement = document.createElement('tr');

				// Create the checkbox cell
				var checkboxCell = document.createElement('td');
				checkboxCell.innerHTML = `
					<div class="form-check form-check-sm form-check-custom form-check-solid">
						<input class="form-check-input" type="checkbox" value="1" />
					</div>
				`;
								trElement.appendChild(checkboxCell);

								// Create the user cell
								var userCell = document.createElement('td');
								userCell.className = 'd-flex align-items-center';
								userCell.innerHTML = `
					<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
						<a href="#">
							<div class="symbol-label">
								<img src="${record['avatar']}" alt="${record['fullname']}" class="w-100" />
							</div>
						</a>
					</div>
					<div class="d-flex flex-column">
						<a href="<?= $domain ?>team-view.php" class="text-gray-800 text-hover-primary mb-1">${record['fullname']}</a>
					</div>
				`;
				trElement.appendChild(userCell);

				// Create the email cell
				var emailCell = document.createElement('td');
				emailCell.innerHTML = record['email'];
				trElement.appendChild(emailCell);

				// Create the phone number cell
				var phoneNumberCell = document.createElement('td');
				phoneNumberCell.innerHTML = '<div class="badge badge-light fw-bolder">'+ record['phonenumber'] +'</div>';
				trElement.appendChild(phoneNumberCell);

				// Create the role cell
				var roleCell = document.createElement('td');
				roleCell.textContent = record['role'];
				trElement.appendChild(roleCell);

				// Create the status cell
				var statusCell = document.createElement('td');
				statusCell.innerHTML = '<div class="badge badge-light-success fw-bolder">'+record['status']+'</div>';
				trElement.appendChild(statusCell);

				// Create the action cell
				var actionCell = document.createElement('td');
				actionCell.className = 'text-end';
				actionCell.innerHTML = ` <a href="<?= $domain ?>team-view.php?id=${record['id']}" class="btn btn-light btn-active-light-primary btn-sm">
				  <i class="fa fa-eye"></i> View</a><a href="#" class="btn btn-light btn-active-light-primary btn-sm">Edit</a>`;
				trElement.appendChild(actionCell);

				tableBody.appendChild(trElement);

			  
			}
		} else {
			console.error('Request failed. Status: ' + xhr.status);
		}
	};

	xhr.send();
}

fetchtTeamData()

</script>


<?php include "inc-footer-team.php"; ?>