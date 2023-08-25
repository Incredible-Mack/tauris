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
                <h2 class="fs-2 fw-bold mt-5 dataName" >  </h2>
                <!--end::Heading-->

            </div>
            <!--end::Toolbar-->



            <!--begin::Navbar-->
            <div class="card mb-6">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap">
                        <!--begin: Pic-->
                        <div class="me-7 mb-4 flex-grow-1">
                            <!--begin::Card-->
                            <!--begin::Card body-->
                            <!--begin::Summary-->
                            <!--begin::User Info-->
                            <div class="d-flex flex-center flex-column py-5">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-150px symbol-circle mb-7">
                                    <img src="" id='avatar' alt="image" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3 dataName" ></a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="mb-3">
                                    <!--begin::Badge-->
                                    <div class="badge badge-lg badge-light-primary d-inline" id='role'></div>
                                    <!--begin::Badge-->
                                </div>
                                <!--end::Position-->


                                <!--begin::Details item-->
                                <div class="fw-bolder mt-3">Phone: <span class="text-gray-600" id='phonenumber'></span></div>

                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bolder mt-3">Email:
                                    <span class="text-gray-600" id='emailList'>
                                        
                                    </span>
                                </div>


                            </div>
                            <!--end::User Info-->
                            <!--end::Summary-->

                            <!--end::Card body-->
                        </div>

                        <!--end::Pic-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">

                            <?php include "inc-task-stats.php"; ?>


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
                                <h2 class="card-title">User Activity </h2>
                                <div class="card-toolbar">
                                    <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary pb-4 active text-black-400"
                                                data-bs-toggle="tab" href="#projecttasks">
                                                <span class="pe-3"> <i class="fa fa-check-square"
                                                        aria-hidden="true"></i> </span> Completed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab"
                                                href="#projectfiles">
                                                <span class="pe-3"><i class="fa fa-folder-open" aria-hidden="true"></i>
                                                </span> In progress</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab"
                                                href="#projectnotes">
                                                <span class="pe-3"> <i class="fa fa-sticky-note" aria-hidden="true"></i>
                                                </span> Pending</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab"
                                                href="#projectteam">
                                                <span class="pe-3"> <i class="fa fa-users" aria-hidden="true"></i>
                                                </span> Payment History</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab"
                                                href="#projectgrannchart">
                                                <span class="pe-3"> <i class="fa fa-line-chart" aria-hidden="true"></i>
                                                </span> Time Sheet</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">


                                    <div class="tab-pane fade show active" id="projecttasks" role="tabpanel">

                                        <div id="kt_customer_view_statement_table_1_wrapper"
                                            class="dataTables_wrapper dt-bootstrap4 no-footer">


                                            <div class="tab-content">

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
                                                                                    aria-label="Task: activate to sort column ascending"
                                                                                    style="width: 0px;">Task</th>
                                                                                <th class="min-w-90px sorting"
                                                                                    tabindex="0"
                                                                                    aria-controls="kt_profile_overview_table"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Section: activate to sort column ascending"
                                                                                    style="width: 0px;">Section</th>
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
                                                                                    aria-label="Team: activate to sort column ascending"
                                                                                    style="width: 0px;">Team</th>
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
                                                                        <tbody class="fs-6">
                                                                            <!--begin::Table row-->


                                                                            <tr class="even">
                                                                                <td class="fw-bolder">
                                                                                    <a href="#"
                                                                                        class="text-gray-900 text-hover-primary">User
                                                                                        Module Testing</a>
                                                                                </td>
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="badge badge-light fw-bold me-auto">Phase
                                                                                        2.6 QA</span>
                                                                                </td>
                                                                                <td>Apr 16, 2020</td>
                                                                                <td>
                                                                                    <!--begin::Members-->
                                                                                    <div
                                                                                        class="symbol-group symbol-hover fs-8">
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Alan Warden">
                                                                                            <span
                                                                                                class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                                                                                        </div>
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Robin Watterman">
                                                                                            <span
                                                                                                class="symbol-label bg-success text-inverse-success fw-bolder">R</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Members-->
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge badge-light-success fw-bolder me-auto">Completed</span>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <a href="<?php echo $domain ; ?>task-view.php"
                                                                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even">
                                                                                <td class="fw-bolder">
                                                                                    <a href="#"
                                                                                        class="text-gray-900 text-hover-primary">Meeting
                                                                                        with customer</a>
                                                                                </td>
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="badge badge-light fw-bold me-auto">Prototype</span>
                                                                                </td>
                                                                                <td>Oct 28, 2020</td>
                                                                                <td>
                                                                                    <!--begin::Members-->
                                                                                    <div
                                                                                        class="symbol-group symbol-hover fs-8">
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Robin Watterman">
                                                                                            <span
                                                                                                class="symbol-label bg-success text-inverse-success fw-bolder">R</span>
                                                                                        </div>
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Brian Cox">
                                                                                            <img alt="Pic"
                                                                                                src="<?php echo $domain ; ?>assets/media/avatars/300-5.jpg">
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Members-->
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge badge-light-success fw-bolder me-auto">Completed</span>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <a href="<?php echo $domain ; ?>task-view.php"
                                                                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd">
                                                                                <td class="fw-bolder">
                                                                                    <a href="#"
                                                                                        class="text-gray-900 text-hover-primary">Design
                                                                                        main Dashboard</a>
                                                                                </td>
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="badge badge-light fw-bold me-auto">UI
                                                                                        Design</span>
                                                                                </td>
                                                                                <td>Dec 14, 2020</td>
                                                                                <td>
                                                                                    <!--begin::Members-->
                                                                                    <div
                                                                                        class="symbol-group symbol-hover fs-8">
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Melody Macy">
                                                                                            <img alt="Pic"
                                                                                                src="<?php echo $domain ; ?>assets/media/avatars/300-2.jpg">
                                                                                        </div>
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Emma Smith">
                                                                                            <img alt="Pic"
                                                                                                src="<?php echo $domain ; ?>assets/media/avatars/300-6.jpg">
                                                                                        </div>
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Lucy Matthews">
                                                                                            <img alt="Pic"
                                                                                                src="<?php echo $domain ; ?>assets/media/avatars/300-21.jpg">
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Members-->
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge badge-light-success fw-bolder me-auto">Completed</span>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <a href="<?php echo $domain ; ?>task-view.php"
                                                                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                                </td>
                                                                            </tr>



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


                                        <div id="kt_customer_view_statement_table_1_wrapper"
                                            class="dataTables_wrapper dt-bootstrap4 no-footer">


                                            <div class="tab-content">

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
                                                                                    aria-label="Task: activate to sort column ascending"
                                                                                    style="width: 0px;">Task</th>
                                                                                <th class="min-w-90px sorting"
                                                                                    tabindex="0"
                                                                                    aria-controls="kt_profile_overview_table"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Section: activate to sort column ascending"
                                                                                    style="width: 0px;">Section</th>
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
                                                                                    aria-label="Team: activate to sort column ascending"
                                                                                    style="width: 0px;">Team</th>
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

                                                                        <tbody class="fs-6">

                                                                            <tr class="odd">
                                                                                <td class="fw-bolder">
                                                                                    <a href="#"
                                                                                        class="text-gray-900 text-hover-primary">Meeting
                                                                                        with customer</a>
                                                                                </td>
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="badge badge-light fw-bold me-auto">UI
                                                                                        Design</span>
                                                                                </td>
                                                                                <td>Feb 23, 2020</td>
                                                                                <td>

                                                                                    <div
                                                                                        class="symbol-group symbol-hover fs-8">
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Melody Macy">
                                                                                            <img alt="Pic"
                                                                                                src="<?php echo $domain ; ?>assets/media/avatars/300-2.jpg">
                                                                                        </div>
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="John Mixin">
                                                                                            <img alt="Pic"
                                                                                                src="<?php echo $domain ; ?>assets/media/avatars/300-14.jpg">
                                                                                        </div>
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Susan Redwood">
                                                                                            <span
                                                                                                class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                                                                                        </div>
                                                                                    </div>

                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge badge-light-primary fw-bolder me-auto">In
                                                                                        Progress</span>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <a href="<?php echo $domain ; ?>task-view.php"
                                                                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                                </td>
                                                                            </tr>


                                                                            <tr class="even">
                                                                                <td class="fw-bolder">
                                                                                    <a href="#"
                                                                                        class="text-gray-900 text-hover-primary">User
                                                                                        Module Testing</a>
                                                                                </td>
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="badge badge-light fw-bold me-auto">Development</span>
                                                                                </td>
                                                                                <td>Apr 22, 2020</td>
                                                                                <td>
                                                                                    <!--begin::Members-->
                                                                                    <div
                                                                                        class="symbol-group symbol-hover fs-8">
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Francis Mitcham">
                                                                                            <img alt="Pic"
                                                                                                src="<?php echo $domain ; ?>assets/media/avatars/300-20.jpg">
                                                                                        </div>
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Deanna Taylor">
                                                                                            <img alt="Pic"
                                                                                                src="<?php echo $domain ; ?>assets/media/avatars/300-23.jpg">
                                                                                        </div>
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Mikaela Collins">
                                                                                            <span
                                                                                                class="symbol-label bg-info text-inverse-info fw-bolder">M</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Members-->
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge badge-light-primary fw-bolder me-auto">In
                                                                                        Progress</span>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <a href="<?php echo $domain ; ?>task-view.php"
                                                                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                                </td>
                                                                            </tr>

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


                                    <div class="tab-pane fade" id="projectnotes" role="tabpanel">



                                        <div id="kt_customer_view_statement_table_1_wrapper"
                                            class="dataTables_wrapper dt-bootstrap4 no-footer">



                                            <div class="tab-content">

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
                                                                                    aria-label="Task: activate to sort column ascending"
                                                                                    style="width: 0px;">Task</th>
                                                                                <th class="min-w-90px sorting"
                                                                                    tabindex="0"
                                                                                    aria-controls="kt_profile_overview_table"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Section: activate to sort column ascending"
                                                                                    style="width: 0px;">Section</th>
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
                                                                                    aria-label="Team: activate to sort column ascending"
                                                                                    style="width: 0px;">Team</th>
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
                                                                        <tbody class="fs-6">



                                                                            <tr class="odd">
                                                                                <td class="fw-bolder">
                                                                                    <a href="#"
                                                                                        class="text-gray-900 text-hover-primary">Sales
                                                                                        report page</a>
                                                                                </td>
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="badge badge-light fw-bold me-auto">QA</span>
                                                                                </td>
                                                                                <td>Oct 12, 2020</td>
                                                                                <td>
                                                                                    <!--begin::Members-->
                                                                                    <div
                                                                                        class="symbol-group symbol-hover fs-8">
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Melody Macy">
                                                                                            <img alt="Pic"
                                                                                                src="<?php echo $domain ; ?>assets/media/avatars/300-2.jpg">
                                                                                        </div>
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Kristen Goodwin">
                                                                                            <img alt="Pic"
                                                                                                src="<?php echo $domain ; ?>assets/media/avatars/300-9.jpg">
                                                                                        </div>
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Mikaela Collins">
                                                                                            <span
                                                                                                class="symbol-label bg-info text-inverse-info fw-bolder">M</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Members-->
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge badge-light fw-bolder me-auto">Pending</span>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <a href="<?php echo $domain ; ?>task-view.php"
                                                                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                                </td>
                                                                            </tr>


                                                                            <tr class="even">
                                                                                <td class="fw-bolder">
                                                                                    <a href="#"
                                                                                        class="text-gray-900 text-hover-primary">Create
                                                                                        Roles Module</a>
                                                                                </td>
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="badge badge-light fw-bold me-auto">Branding</span>
                                                                                </td>
                                                                                <td>Jul 1, 2020</td>
                                                                                <td>
                                                                                    <!--begin::Members-->
                                                                                    <div
                                                                                        class="symbol-group symbol-hover fs-8">
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Michelle Swanston">
                                                                                            <img alt="Pic"
                                                                                                src="<?php echo $domain ; ?>assets/media/avatars/300-7.jpg">
                                                                                        </div>
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Robin Watterman">
                                                                                            <span
                                                                                                class="symbol-label bg-success text-inverse-success fw-bolder">R</span>
                                                                                        </div>
                                                                                        <div class="symbol symbol-25px symbol-circle"
                                                                                            data-bs-toggle="tooltip"
                                                                                            title=""
                                                                                            data-bs-original-title="Alan Warden">
                                                                                            <span
                                                                                                class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Members-->
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge badge-light fw-bolder me-auto">Pending</span>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <a href="<?php echo $domain ; ?>task-view.php"
                                                                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                                </td>
                                                                            </tr>

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


                                    <div class="tab-pane fade" id="projectteam" role="tabpanel">



                                        <div class="card card-flush">

                                            <!--begin::Card body-->
                                            <div class="card-body pt-3">

                                                <!--begin::Table-->
                                                <div id="kt_file_manager_list_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap4 no-footer">

                                                    <!--begin::Statements-->


                                                    <div id="kt_customer_view_statement_table_1_wrapper"
                                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                        <div class="table-responsive">
                                                            <table id="kt_customer_view_statement_table_1"
                                                                class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-4 dataTable no-footer">
                                                                <!--begin::Table head-->
                                                                <thead class="border-bottom border-gray-200">
                                                                    <!--begin::Table row-->
                                                                    <tr
                                                                        class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                                        <th class="w-200px sorting" tabindex="0"
                                                                            aria-controls="kt_customer_view_statement_table_1"
                                                                            rowspan="1" colspan="1"
                                                                            aria-label="Order ID: activate to sort column ascending"
                                                                            style="width: 20%;">Reference</th>
                                                                        <th class="w-400px sorting" tabindex="0"
                                                                            aria-controls="kt_customer_view_statement_table_1"
                                                                            rowspan="1" colspan="1"
                                                                            aria-label="Amount: activate to sort column ascending"
                                                                            style="width: 40%;">Amount</th>
                                                                        <th class="w-200px sorting" tabindex="0"
                                                                            aria-controls="kt_customer_view_statement_table_1"
                                                                            rowspan="1" colspan="1"
                                                                            aria-label="Details: activate to sort column ascending"
                                                                            style="width: 20%;">Mode</th>
                                                                        <th class="w-200px sorting" tabindex="0"
                                                                            aria-controls="kt_customer_view_statement_table_1"
                                                                            rowspan="1" colspan="1"
                                                                            aria-label="Date: activate to sort column ascending"
                                                                            style="width: 20%;">Date</th>
                                                                    </tr>
                                                                    <!--end::Table row-->
                                                                </thead>
                                                                <tbody>

                                                                    <tr class="odd">
                                                                        <td> <a href="#"
                                                                                class="text-gray-600 text-hover-primary"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#kt_modal_invoice">102445788</a>
                                                                        </td>
                                                                        <td class="text-success">$3000</td>
                                                                        <td><span
                                                                                class="badge badge-light-info">CHECK</span>
                                                                        </td>
                                                                        <td data-order="2021-01-01T00:00:00+01:00">Nov
                                                                            01, 2021</td>
                                                                    </tr>

                                                                    <tr class="even">
                                                                        <td> <a href="#"
                                                                                class="text-gray-600 text-hover-primary"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#kt_modal_invoice">423445721</a>
                                                                        </td>
                                                                        <td class="text-danger">$22960</td>
                                                                        <td><span
                                                                                class="badge badge-light-info">WIRE</span>
                                                                        </td>
                                                                        <td data-order="2021-01-24T00:00:00+01:00">Oct
                                                                            24, 2021</td>
                                                                    </tr>


                                                                    <tr class="even">
                                                                        <td> <a href="#"
                                                                                class="text-gray-600 text-hover-primary"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#kt_modal_invoice">423445721</a>
                                                                        </td>
                                                                        <td class="text-danger">$12260</td>
                                                                        <td><span
                                                                                class="badge badge-light-info">CARD</span>
                                                                        </td>
                                                                        <td data-order="2021-01-24T00:00:00+01:00">Oct
                                                                            24, 2021</td>
                                                                    </tr>


                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                        </div>
                                                    </div>


                                                    <!--end::Statements-->

                                                </div>

                                            </div>

                                        </div>




                                    </div>


                                    <div class="tab-pane fade" id="projectgrannchart" role="tabpanel">



                                        <div class="card card-flush">

                                            <!--begin::Card body-->
                                            <div class="card-body pt-3">

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
                                                                        style="width: 436.312px;">Project</th>
                                                                    <th class="min-w-300px" rowspan="1" colspan="1"
                                                                        style="width: 94.9531px;">Task</th>
                                                                    <th class="min-w-100px" rowspan="1" colspan="1"
                                                                        style="width: 279.234px;">Time Logged (Hours)
                                                                    </th>
                                                                    <th class="min-w-125px" rowspan="1" colspan="1"
                                                                        style="width: 279.234px;">Date</th>
                                                                </tr>

                                                            </thead>

                                                            <tbody class="fw-bold text-gray-600">

                                                                <tr class="odd">
                                                                    <td>
                                                                        Project A
                                                                    </td>
                                                                    <td>Design electrical plan</td>
                                                                    <td data-order="2022-11-10T17:30:00+01:00"> 4 hours
                                                                    </td>
                                                                    <td data-order="2022-11-10T17:30:00+01:00">10 Nov
                                                                        2022, 7:30 am - 10 Nov 2022, 11:30 am</td>
                                                                </tr>

                                                                <tr class="odd">
                                                                    <td>
                                                                        Project A
                                                                    </td>
                                                                    <td>Documentation of processes </td>
                                                                    <td data-order="2022-11-10T17:30:00+01:00"> 6 hours
                                                                    </td>
                                                                    <td data-order="2022-11-10T17:30:00+01:00">15 Nov
                                                                        2022, 1:00 pm - 15 Nov 2022, 7:00 pm</td>
                                                                </tr>

                                                                <tr class="odd">
                                                                    <td>
                                                                        Project B
                                                                    </td>
                                                                    <td>Procure electrical equipment</td>
                                                                    <td data-order="2022-11-10T17:30:00+01:00"> 3 hours
                                                                    </td>
                                                                    <td data-order="2022-11-10T17:30:00+01:00">23 Nov
                                                                        2022, 9:30 am - 23 Nov 2022, 12:30 pm</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>


                                                    </div>

                                                </div>

                                            </div>

                                        </div>




                                    </div>


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

<?php include "inc-drawer-teams.php"; ?>



<script>
function fetchDataNote() {
	const currentURL = window.location.href;
	const url = new URL(currentURL);
	const teamID = url.searchParams.get('id');
	
	var xhr = new XMLHttpRequest();
	xhr.open('GET', '<?php echo $domain ?>tauris_api/v2/api/team_view.php?id=' + teamID, true);

	xhr.onload = function() {
		if (xhr.status === 200) {
			var records = JSON.parse(xhr.responseText);

			// var tableBody = document.getElementById('dataBodyNote');
			// tableBody.innerHTML = '';
			const len = records.length -  1;
			var record = records[len]
			console.log(record)
			
			var dataNameElements = document.getElementsByClassName('dataName');

// Loop through each element and set the text content
for (var i = 0; i < dataNameElements.length; i++) {
    dataNameElements[i].textContent = record['fullname'];
}

		console.log(record['email'])

			document.getElementById('avatar').setAttribute('src', record['avatar']);
			document.getElementById('phonenumber').textContent = record['phonenumber'];
			document.getElementById('role').textContent = record['role'];
			document.getElementById('emailList').textContent = record['email'];
			
			document.getElementById('assigned').textContent = record['assigned'];
			document.getElementById('completed').textContent = record['completed'];
			document.getElementById('inprogress').textContent = record['inprogress'];
			document.getElementById('pending').textContent = record['pending'];
			
			

			










				
			// }
		} else {
			console.error('Request failed. Status: ' + xhr.status);
		}
	};

	xhr.send();
}


fetchDataNote()
</script>
<?php include "inc-footer.php"; ?>