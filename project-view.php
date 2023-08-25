<?php include "inc-header.php";
session_start();
$_SESSION['project_id'] = $_GET['project_id'];
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
canvas {
    margin-top: 20px;
}
</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">




            <!--begin::Toolbar-->
            <div class="d-flex flex-wrap flex-stack my-5">
                <!--begin::Heading-->
                <h2 class="fs-2 fw-bold mt-5 "> <span class='projectName'></span> Details </h2>
                <!--end::Heading-->
            </div>
            <!--end::Toolbar-->




            <!--begin::Navbar-->
            <div class="card mb-6">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap">
                        <!--begin: Pic-->
                        <div class="me-7 mb-4">
                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                <img src="<?php echo $domain; ?>assets/media/svg/brand-logos/volicity-9.svg"
                                    alt="image" />
                                <div
                                    class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px">
                                </div>
                            </div>
                        </div>

                        <!--end::Pic-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <!--begin::User-->
                                <div class="d-flex flex-column">
                                    <!--begin::Name-->
                                    <div class="d-flex align-items-center mb-2">
                                        <a href="#"
                                            class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1 projectName"></a>
                                    </div>
                                    <!--end::Name-->


                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                        <a class="d-flex align-items-center text-gray-800 text-hover-primary me-5 mb-2">Project
                                            ID:&nbsp; <span id='projectIdNumber'> </span> </a>
                                        <a class="d-flex align-items-center text-gray-800 text-hover-primary me-5 mb-2">Project
                                            Date:&nbsp; <span id='projectStartDate'> </span> </a>
                                        <a class="d-flex align-items-center text-gray-800 text-hover-primary mb-2">Project
                                            Status:&nbsp;<span id='projectStatus'> </span> </a>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->

                            </div>
                            <!--end::Title-->
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap flex-stack">

                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">

                                        <div class="row p-0 mb-5 px-9 ps-0 pe-0">
                                            <!--begin::Col-->
                                            <div class="col">
                                                <div
                                                    class="border border-dashed border-gray-300 text-center min-w-150px rounded pt-4 pb-2 my-3  bg-light-primary ps-5 pe-5">
                                                    <span class="fs-lg-2 fs-2hx fw-bold d-block">BUDGET</span>
                                                    <div class="fs-lg-2hx fs-2hx fw-bolder" data-kt-countup="true"
                                                        data-kt-countup-value="" data-kt-countup-prefix="$">0

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col">
                                                <div
                                                    class="border border-dashed border-gray-300 text-center min-w-150px rounded pt-4 pb-2 my-3  bg-light-danger ps-5 pe-5">
                                                    <span class="fs-lg-2 fs-2hx fw-bold d-block"> SPENDING</span>
                                                    <div class="fs-lg-2hx spending fs-2hx fw-bolder"
                                                        data-kt-countup="true" data-kt-countup-value=""
                                                        data-kt-countup-prefix="$">0
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col">
                                                <div
                                                    class="border border-dashed border-gray-300 text-center min-w-175px rounded pt-4 pb-2 my-3  bg-light-success ps-5 pe-5">
                                                    <span class="fs-lg-2 fs-2hx fw-bold d-block">BALANCE</span>
                                                    <div class="fs-lg-2hx balance fs-2hx fw-bolder"
                                                        data-kt-countup="true" data-kt-countup-value=""
                                                        data-kt-countup-prefix="$">0
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Wrapper-->

                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                </div>
            </div>
            <!--end::Navbar-->




            <!--begin::Section-->
            <div class="py-0">

                <!--begin::Block-->
                <div class="py-5">
                    <div class="rounded border p-1">
                        <div class="card shadow">
                            <div class="card-header card-header-stretch">
                                <h2 class="card-title">Project Asset</h2>
                                <div class="card-toolbar">
                                    <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary pb-4 active text-black-400"
                                                data-bs-toggle="tab" href="#projecttasks">
                                                <span class="pe-3"> <i class="fa fa-tasks" aria-hidden="true"></i>
                                                </span> Tasks</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab"
                                                href="#projectfiles" id='getDataButton'>
                                                <span class="pe-3"><i class="fa fa-folder-open" aria-hidden="true"></i>
                                                </span> Files</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab"
                                                href="#projectnotes" id="getNotes">
                                                <span class="pe-3"> <i class="fa fa-sticky-note" aria-hidden="true"></i>
                                                </span> Notes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab"
                                                href="#projectteam" id='getTeamDate'>
                                                <span class="pe-3"> <i class="fa fa-users" aria-hidden="true"></i>
                                                </span> Team</a>
                                        </li>
                                        <!-- <li class="nav-item">
<a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab" href="#projectgrannchart">
<span class="pe-3"> <i class="bi bi-graph-down" aria-hidden="true"></i>  </span> Grann Chart</a>
</li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">


                                    <div class="tab-pane fade show active" id="projecttasks" role="tabpanel">

                                        <div id="kt_customer_view_statement_table_1_wrapper"
                                            class="dataTables_wrapper dt-bootstrap4 no-footer">


                                            <div class="d-flex flex-wrap flex-stack pt-10 pb-8">
                                                <!--begin::Heading-->
                                                <h3 class="fw-bolder my-2">Tasks</h3>
                                                <!--end::Heading-->
                                                <!--begin::Controls-->
                                                <div class="d-flex flex-wrap my-1">
                                                    <!--begin::Tab nav-->
                                                    <ul class="nav nav-pills me-5">
                                                        <li class="nav-item m-0 me-5">
                                                            <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3"
                                                                data-bs-toggle="tab"
                                                                href="#kt_project_targets_card_pane">
                                                                <span class="svg-icon svg-icon-1">
                                                                    <a class="btn btn-sm btn-primary"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#kt_modal_new_target">
                                                                        <span class="svg-icon svg-icon-2"> <i
                                                                                class="fa fa-plus text-white"></i>
                                                                        </span> New Task</a> </span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item m-0">
                                                            <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3"
                                                                data-bs-toggle="tab"
                                                                href="#kt_project_targets_card_pane">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                        height="24px" viewBox="0 0 24 24">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="5" y="5" width="5" height="5"
                                                                                rx="1" fill="currentColor"></rect>
                                                                            <rect x="14" y="5" width="5" height="5"
                                                                                rx="1" fill="currentColor"
                                                                                opacity="0.3"></rect>
                                                                            <rect x="5" y="14" width="5" height="5"
                                                                                rx="1" fill="currentColor"
                                                                                opacity="0.3"></rect>
                                                                            <rect x="14" y="14" width="5" height="5"
                                                                                rx="1" fill="currentColor"
                                                                                opacity="0.3"></rect>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </li>
                                                        <li class="nav-item m-0">
                                                            <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary active"
                                                                data-bs-toggle="tab"
                                                                href="#kt_project_targets_table_pane">
                                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path
                                                                            d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                                            fill="currentColor"></path>
                                                                        <path opacity="0.3"
                                                                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Tab nav-->

                                                </div>
                                                <!--end::Controls-->



                                            </div>

                                            <div class="tab-content">
                                                <!--begin::Tab pane-->
                                                <div id="kt_project_targets_card_pane" class="tab-pane fade">
                                                    <!--begin::Row-->
                                                    <div class="row g-9">
                                                        <!--begin::Col-->
                                                        <div class="col-md-4 col-lg-12 col-xl-4">
                                                            <!--begin::Col header-->
                                                            <div class="mb-9">
                                                                <div class="d-flex flex-stack">
                                                                    <div class="fw-bolder fs-4">Yet to start
                                                                        <!-- <span class="fs-6 text-gray-400 ms-2">2</span> -->
                                                                    </div>

                                                                </div>
                                                                <div class="h-3px w-100 bg-warning"></div>
                                                            </div>
                                                            <!--end::Col header-->
                                                            <div id='projectpending'></div>

                                                            <a href="#" class="btn btn-primary er w-100 fs-6 px-8 py-4"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_new_target">New Task</a>
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-md-4 col-lg-12 col-xl-4">
                                                            <!--begin::Col header-->
                                                            <div class="mb-9">
                                                                <div class="d-flex flex-stack">
                                                                    <div class="fw-bolder fs-4">In Progress
                                                                        <!-- <span class="fs-6 text-gray-400 ms-2">4</span> -->
                                                                    </div>

                                                                </div>
                                                                <div class="h-3px w-100 bg-primary"></div>
                                                            </div>
                                                            <!--end::Col header-->
                                                            <div id="inprogress"></div>


                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-md-4 col-lg-12 col-xl-4">
                                                            <!--begin::Col header-->
                                                            <div class="mb-9">
                                                                <div class="d-flex flex-stack">
                                                                    <div class="fw-bolder fs-4">Completed
                                                                        <!-- <span class="fs-6 text-gray-400 ms-2">3</span> -->
                                                                    </div>

                                                                </div>
                                                                <div class="h-3px w-100 bg-success"></div>
                                                            </div>
                                                            <div id="completed"></div>
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Tab pane-->
                                                <!--begin::Tab pane-->
                                                <div id="kt_project_targets_table_pane"
                                                    class="tab-pane fade active show">
                                                    <div class="card card-flush">
                                                        <div class="card-body pt-3">
                                                            <!--begin::Table-->
                                                            <div id="kt_profile_overview_table_wrapper"
                                                                class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                <div class="table-responsive">
                                                                    <table id="kt_profile_overview_table"
                                                                        class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder dataTable no-footer">
                                                                        <!--begin::Table head-->
                                                                        <thead
                                                                            class="fs-7 text-gray-400 text-uppercase">
                                                                            <tr>
                                                                                <th class="min-w-250px sorting"
                                                                                    tabindex="0"
                                                                                    aria-controls="kt_profile_overview_table"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Target: activate to sort column ascending"
                                                                                    style="width: 0px;">Task</th>
                                                                                <th class="min-w-150px sorting"
                                                                                    tabindex="0"
                                                                                    aria-controls="kt_profile_overview_table"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Due Date: activate to sort column ascending"
                                                                                    style="width: 0px;">Due Date</th>
                                                                                <th class="min-w-90px sorting"
                                                                                    tabindex="0"
                                                                                    aria-controls="kt_profile_overview_table"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Members: activate to sort column ascending"
                                                                                    style="width: 0px;">Members</th>
                                                                                <th class="min-w-90px sorting"
                                                                                    tabindex="0"
                                                                                    aria-controls="kt_profile_overview_table"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Status: activate to sort column ascending"
                                                                                    style="width: 0px;">Status</th>
                                                                                <th class="min-w-50px sorting"
                                                                                    tabindex="0"
                                                                                    aria-controls="kt_profile_overview_table"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label=": activate to sort column ascending"
                                                                                    style="width: 0px;">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <!--end::Table head-->
                                                                        <!--begin::Table body-->
                                                                        <tbody class="fs-6" id='tasksDataOutput'>
                                                                            <!--begin::Table row-->
                                                                        </tbody>
                                                                        <!--end::Table body-->
                                                                    </table>
                                                                </div>
                                                                <div class="row">
                                                                    <div
                                                                        class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                                                    </div>
                                                                    <div
                                                                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Table-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Tab pane-->
                                            </div>


                                        </div>

                                    </div>


                                    <div class="tab-pane fade" id="projectfiles" role="tabpanel">

                                        <div class="card card-flush">

                                            <!--begin::Card body-->
                                            <div class="card-body">

                                                <!--begin::Table-->
                                                <div id="kt_file_manager_list_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap4 no-footer">

                                                    <div class="table-responsive">

                                                        <table id="kt_file_manager_list"
                                                            data-kt-filemanager-table="files"
                                                            class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
                                                            <!--begin::Table head-->
                                                            <thead>
                                                                <!--begin::Table row-->
                                                                <tr
                                                                    class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th class="min-w-250px sorting_disabled" rowspan="1"
                                                                        colspan="1" style="width: 436.312px;">Name</th>
                                                                    <th class="min-w-10px sorting_disabled" rowspan="1"
                                                                        colspan="1" style="width: 94.9531px;">Size</th>
                                                                    <th class="min-w-125px sorting_disabled" rowspan="1"
                                                                        colspan="1" style="width: 279.234px;">Last
                                                                        Modified</th>
                                                                </tr>
                                                                <!--end::Table row-->
                                                            </thead>
                                                            <!--end::Table head-->
                                                            <!--begin::Table body-->
                                                            <tbody class="fw-bold text-gray-600" id='dataBody'>

                                                            </tbody>
                                                            <!--end::Table body-->
                                                        </table>
                                                    </div>



                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>


                                    </div>


                                    <div class="tab-pane fade" id="projectnotes" role="tabpanel">



                                        <div class="card card-flush">

                                            <!--begin::Card body-->
                                            <div class="card-body">

                                                <!--begin::Table-->
                                                <div id="kt_file_manager_list_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap4 no-footer">

                                                    <div class="table-responsive">

                                                        <table id="kt_file_manager_list"
                                                            data-kt-filemanager-table="files"
                                                            class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
                                                            <!--begin::Table head-->
                                                            <thead>
                                                                <!--begin::Table row-->
                                                                <tr
                                                                    class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th class="min-w-100px" rowspan="1" colspan="1"
                                                                        style="width: 436.312px;">Title</th>
                                                                    <th class="min-w-300px" rowspan="1" colspan="1"
                                                                        style="width: 94.9531px;">Details</th>
                                                                    <th class="min-w-100px" rowspan="1" colspan="1"
                                                                        style="width: 279.234px;">Added By</th>
                                                                    <th class="min-w-125px" rowspan="1" colspan="1"
                                                                        style="width: 279.234px;">Last Modified</th>
                                                                </tr>

                                                            </thead>

                                                            <tbody class="fw-bold text-gray-600" id="dataBodyNote">

                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>




                                    </div>


                                    <div class="tab-pane fade" id="projectteam" role="tabpanel">



                                        <div class="card card-flush">

                                            <!--begin::Card body-->
                                            <div class="card-body">

                                                <!--begin::Table-->
                                                <div id="kt_file_manager_list_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap4 no-footer">

                                                    <div class="table-responsive">
                                                        <!--begin::Card body-->
                                                        <div class="card-body py-4">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle table-row-dashed fs-6 gy-5"
                                                                id="kt_table_users">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <!--begin::Table row-->
                                                                    <tr
                                                                        class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                                        <th class="w-10px pe-2">
                                                                            <div
                                                                                class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" data-kt-check="true"
                                                                                    data-kt-check-target="#kt_table_users .form-check-input"
                                                                                    value="1" />
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
                                                                <tbody class="text-gray-600 fw-bold" id="teamdata">



                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Card body-->

                                                    </div>

                                                </div>

                                            </div>

                                        </div>




                                    </div>


                                    <!-- <div class="tab-pane fade" id="projectgrannchart" role="tabpanel"> -->



                                    <!-- <div class="card card-flush">

begin::Card body
<div class="card-body">

<h1>Gantt Chart</h1>
<canvas id="ganttChart"></canvas>

<script>

</script>

</div>

</div> -->




                                    <!-- </div> -->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Block-->

            </div>
            <!--end::Section-->




        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->


<script>
const distinctValues = [];

function isValueDistinct(value) {
    return distinctValues.indexOf(value) === -1;
}

function fetchTaskNote() {

    // Get the current URL
    const currentURL = window.location.href;
    const url = new URL(currentURL);
    const projectID = url.searchParams.get('project_id');

    var xhr = new XMLHttpRequest();
    xhr.open('GET', '<?php echo $domain ?>tauris_api/v2/api/projects.php?project_id=' + projectID, true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            var records = JSON.parse(xhr.responseText);

            console.log(records)
            var projectName = document.getElementsByClassName('projectName');
            // Loop through each element and set the text content
            for (var i = 0; i < projectName.length; i++) {
                projectName[i].textContent = records[0]['project_name'];
            }

            document.getElementById('projectIdNumber').innerText = records[0]['project_id'];
            document.getElementById('projectStatus').innerText = records[0]['project_status'];
            document.getElementById('projectStartDate').innerText = records[0]['start_date'];

            const projectbudget = document.querySelector('.fs-lg-2hx');
            const budget = records[0]['budget'];
            projectbudget.dataset.ktCountupValue = budget;

            const spending = document.querySelector('.spending');
            const budget_spent = records[0]['budget_spent'];
            spending.dataset.ktCountupValue = budget_spent;

            const projectbalance = document.querySelector('.balance');
            const balance = budget - budget_spent
            projectbalance.dataset.ktCountupValue = balance;

            var tableBody = document.getElementById('tasksDataOutput');
            tableBody.innerHTML = '';
            const selectElement = document.getElementById("projectopt");



            for (var i = 0; i < records.length; i++) {
                var record = records[i];
                console.log(record)

                // if (isValueDistinct(record['task'])) {
                //     distinctValues.push(record['task']);
                //     // Create a new <option> element
                //     const newOption = document.createElement("option");
                //     newOption.value = record['task'];
                //     newOption.textContent = record['task'];;
                //     newOption.setAttribute("data-select2-id", "select2-data-134-36y3");
                //     selectElement.appendChild(newOption);
                //     $(selectElement).select2();
                // }
                // if (isValueDistinct(record['project_name'])) {
                //     distinctValues.push(record['project_name']);
                //     // Create a new <option> element
                    const newOption = document.createElement("option");
                    newOption.value = record['project_name'];
                    newOption.textContent = record['project_name'];;
                    newOption.setAttribute("data-select2-id", "select2-data-134-36y3");
                    selectElement.appendChild(newOption);
                    $(selectElement).select2();
                // }



                // Create the <tr> element with the "odd" class
                const trElement = document.createElement('tr');
                trElement.classList.add('odd');

                // Create the first <td> element with the task name
                const td1Element = document.createElement('td');
                td1Element.classList.add('fw-bolder');
                const taskNameLink = document.createElement('a');
                taskNameLink.href = '#';
                taskNameLink.classList.add('text-gray-900', 'text-hover-primary');
                taskNameLink.textContent = record['task'];
                td1Element.appendChild(taskNameLink);
                trElement.appendChild(td1Element);

                // Create the second <td> element with the date
                const td2Element = document.createElement('td');
                td2Element.textContent = record['end_date'];
                trElement.appendChild(td2Element);

                // Create the third <td> element with the members
                const td3Element = document.createElement('td');
                const symbolGroup = document.createElement('div');
                symbolGroup.classList.add('symbol-group', 'symbol-hover', 'fs-8');

                // Create avatar symbols


                const symbol = document.createElement('div');
                symbol.classList.add('symbol', 'symbol-25px', 'symbol-circle');
                const img = document.createElement('img');
                img.alt = 'Pic';
                img.src = record['avatar'];
                symbol.appendChild(img);
                symbolGroup.appendChild(symbol);

                td3Element.appendChild(symbolGroup);
                trElement.appendChild(td3Element);

                // Create the fourth <td> element with the status badge
                const td4Element = document.createElement('td');
                const statusBadge = document.createElement('span');
                statusBadge.classList.add('badge', 'badge-light-primary', 'fw-bolder', 'me-auto');
                statusBadge.textContent = record['status'];
                td4Element.appendChild(statusBadge);
                trElement.appendChild(td4Element);

                // Create the fifth <td> element with the "View" button
                const td5Element = document.createElement('td');
                const viewLink = document.createElement('a');
                viewLink.href = '<?php echo $domain; ?>team-view.php?id=' + record['teams_id'];
                viewLink.classList.add('btn', 'btn-bg-light', 'btn-active-color-primary', 'btn-sm');
                viewLink.textContent = 'View';
                td5Element.appendChild(viewLink);
                trElement.appendChild(td5Element);

                // Append the entire <tr> to the desired table body

                tableBody.appendChild(trElement);

            }
        } else {
            console.error('Request failed. Status: ' + xhr.status);
        }
    };

    xhr.send();
}

function component(taskName, description, avatar) {
    const cardDiv = document.createElement("div");
    cardDiv.classList.add("card", "mb-6", "mb-xl-9");

    // Create the card body div with class "card-body"
    const cardBodyDiv = document.createElement("div");
    cardBodyDiv.classList.add("card-body");

    // Create the title div with class "mb-2"
    const titleDiv = document.createElement("div");
    titleDiv.classList.add("mb-2");

    // Create the <a> element for the title with classes and attributes
    const titleLink = document.createElement("a");
    titleLink.href = "#";
    titleLink.classList.add("fs-4", "fw-bolder", "mb-1", "text-gray-900", "text-hover-primary");
    titleLink.textContent = taskName;

    // Append the title <a> element to the title div
    titleDiv.appendChild(titleLink);

    // Create the content div with classes "fs-6", "fw-bold", "text-gray-600", and "mb-5"
    const contentDiv = document.createElement("div");
    contentDiv.classList.add("fs-6", "fw-bold", "text-gray-600", "mb-5");
    contentDiv.textContent = description;

    // Create the footer div with classes "d-flex", "flex-stack", and "flex-wrapr"
    const footerDiv = document.createElement("div");
    footerDiv.classList.add("d-flex", "flex-stack", "flex-wrapr");

    // Create the users div with class "symbol-group" and "symbol-hover"
    const usersDiv = document.createElement("div");
    usersDiv.classList.add("symbol-group", "symbol-hover", "my-1");

    // Create the user symbol div with class "symbol", "symbol-35px", and "symbol-circle"
    const userSymbolDiv = document.createElement("div");
    userSymbolDiv.classList.add("symbol", "symbol-35px", "symbol-circle");
    userSymbolDiv.setAttribute("data-bs-toggle", "tooltip");
    userSymbolDiv.setAttribute("title", "");
    userSymbolDiv.setAttribute("data-bs-original-title", "Melody Macy");

    // Create the user image <img> element with the "src" attribute
    const userImage = document.createElement("img");
    userImage.alt = "Pic";
    userImage.src = avatar; // Replace with the actual image URL

    // Append the user image <img> element to the user symbol div
    userSymbolDiv.appendChild(userImage);

    // Append the user symbol div to the users div
    usersDiv.appendChild(userSymbolDiv);

    // Append the users div to the footer div
    footerDiv.appendChild(usersDiv);

    // Append the content div, footer div, and title div to the card body div
    cardBodyDiv.appendChild(titleDiv);
    cardBodyDiv.appendChild(contentDiv);
    cardBodyDiv.appendChild(footerDiv);

    // Append the card body div to the main card div
    cardDiv.appendChild(cardBodyDiv);

    return cardDiv
}

function fetchTaskGrid() {

    // Get the current URL
    const currentURL = window.location.href;
    const url = new URL(currentURL);
    const projectID = url.searchParams.get('project_id');


    var xhr = new XMLHttpRequest();
    xhr.open('GET', '<?php echo $domain ?>tauris_api/v2/api/projects.php?project_id=' + projectID, true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            var records = JSON.parse(xhr.responseText);

            const pendingContainer = document.getElementById("projectpending");
            const inProgressContainer = document.getElementById("inprogress");
            const completedContainer = document.getElementById("completed");

            records.forEach(record => {
                console.log(record.avatar)

                if (record.status === "pending") {
                    cardElement = component(record.task, record.description, record.avatar) /
                        pendingContainer.appendChild(cardElement);
                } else if (record.status === "in progress") {
                    cardElement = component(record.task, record.description, record.avatar)
                    inProgressContainer.appendChild(cardElement);
                } else if (record.status === "completed") {
                    cardElement = component(record.task, record.description, record.avatar)
                    completedContainer.appendChild(cardElement);
                }
            });

        } else {
            console.error('Request failed. Status: ' + xhr.status);
        }
    };

    xhr.send();
}

fetchTaskGrid()



function fetchDataFile() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '<?php echo $domain ?>/tauris_api/v2/api/projects.php?data=files', true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            var records = JSON.parse(xhr.responseText);

            var tableBody = document.getElementById('dataBody');
            tableBody.innerHTML = '';

            for (var i = 0; i < records.length; i++) {
                var record = records[i];
                console.log(record)
                // var record = record.data; // Extracting the nested 'data' object
                console.log(record)
                var row = document.createElement('tr'); // Create a new table row
                row.classList.add(i % 2 === 0 ? 'even' : 'odd'); // Apply even/odd class

                // First cell with icon and link
                var cell1 = document.createElement('td');
                var iconSpan = document.createElement('span');
                iconSpan.className = 'svg-icon svg-icon-2x svg-icon-primary me-4';
                var icon = document.createElement('i');
                icon.className = 'fa fa-file fs-1 svg-icon svg-icon-excel';
                icon.setAttribute('aria-hidden', 'true');
                iconSpan.appendChild(icon);
                var link = document.createElement('a');
                link.href = '#';
                link.className = 'text-gray-800 text-hover-primary';

                link.textContent = record['name'];
                var div = document.createElement('div');
                div.className = 'd-flex align-items-center';
                div.appendChild(iconSpan);
                div.appendChild(link);
                cell1.appendChild(div);

                // Second cell
                var cell2 = document.createElement('td');
                cell2.textContent = record['size'];;

                // Third cell
                var cell3 = document.createElement('td');
                cell3.textContent = record['date_modified'];
                //record.date; // Assuming you have a 'date' property in record

                row.appendChild(cell1);
                row.appendChild(cell2);
                row.appendChild(cell3);

                tableBody.appendChild(row);
            }
        } else {
            console.error('Request failed. Status: ' + xhr.status);
        }
    };

    xhr.send();
}

function fetchDataNote() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '<?php echo $domain ?>/tauris_api/v2/api/projects.php?data=notes', true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            var records = JSON.parse(xhr.responseText);

            var tableBody = document.getElementById('dataBodyNote');
            tableBody.innerHTML = '';

            for (var i = 0; i < records.length; i++) {
                var record = records[i];
                console.log(record)
                // var record = record.data; // Extracting the nested 'data' object
                console.log(record)
                var row = document.createElement('tr'); // Create a new table row
                row.classList.add(i % 2 === 0 ? 'even' : 'odd'); // Apply even/odd class

                // First cell with icon and link
                var cell1 = document.createElement('td');
                cell1.textContent = record['name'];


                // Second cell
                var cell2 = document.createElement('td');
                cell2.textContent = record['details'];
                // Third cell
                var cell3 = document.createElement('td');
                cell3.textContent = record['added_by'];

                // forth cell
                var cell4 = document.createElement('td');
                cell4.textContent = record['date_modified'];
                //record.date; // Assuming you have a 'date' property in record

                row.appendChild(cell1);
                row.appendChild(cell2);
                row.appendChild(cell3);
                row.appendChild(cell4);

                tableBody.appendChild(row);
            }
        } else {
            console.error('Request failed. Status: ' + xhr.status);
        }
    };

    xhr.send();
}

function fetchtTeamData() {

    var xhr = new XMLHttpRequest();
    xhr.open('GET', '<?php echo $domain ?>/tauris_api/v2/api/projects.php?data=teamsmember', true);

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
                        <a href="<?= $domain ?>team-view.php?id=${record['teams_id']}" class="text-gray-800 text-hover-primary mb-1">${record['fullname']}</a>
                    </div>
                `;
                trElement.appendChild(userCell);

                // Create the email cell
                var emailCell = document.createElement('td');
                emailCell.innerHTML = record['email'];
                trElement.appendChild(emailCell);

                // Create the phone number cell
                var phoneNumberCell = document.createElement('td');
                phoneNumberCell.innerHTML = '<div class="badge badge-light fw-bolder">' + record['phonenumber'] +
                    '</div>';
                trElement.appendChild(phoneNumberCell);

                // Create the role cell
                var roleCell = document.createElement('td');
                roleCell.textContent = record['role'];
                trElement.appendChild(roleCell);

                // Create the status cell
                var statusCell = document.createElement('td');
                statusCell.innerHTML = '<div class="badge badge-light-success fw-bolder">' + record['status'] +
                    '</div>';
                trElement.appendChild(statusCell);

                // Create the action cell
                var actionCell = document.createElement('td');
                actionCell.className = 'text-end';
                actionCell.innerHTML =
                    ` <a href="<?= $domain ?>team-view.php?id=${record['teams_id']}" class="btn btn-light btn-active-light-primary btn-sm">
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



var getTeamDate = document.getElementById('getTeamDate');
if (getTeamDate) {
    getTeamDate.addEventListener('click', function() {
        fetchtTeamData.isButtonClicked = true;
        fetchtTeamData();
    });
}


var getNotes = document.getElementById('getNotes');
if (getNotes) {
    getNotes.addEventListener('click', function() {
        fetchDataNote.isButtonClicked = true;
        fetchDataNote();
    });
}


var getDataButton = document.getElementById('getDataButton');
if (getDataButton) {
    getDataButton.addEventListener('click', function() {
        fetchDataFile.isButtonClicked = true; // Mark the button as clicked
        fetchDataFile(); // Trigger the function
    });
}

// Initialize fetchDataNote when the page loads
fetchTaskNote();
</script>



<?php include "inc-drawer-project.php"; ?>
<?php include "inc-footer.php"; ?>