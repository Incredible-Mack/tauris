<div class="modal fade" tabindex="-1" id="user_tasknotes">
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Project Requirement Update</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="fa fa-window-close" aria-hidden="true"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <p>Kindly note: The requirement for the project has been reviewed and updated.</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>










<!--begin::Modal - Create App-->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Add a Project</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <!--begin::Stepper-->
                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                    id="kt_modal_create_app_stepper">

                    <!--begin::Content-->
                    <div class="flex-row-fluid py-lg-5 px-lg-15">
                        <!--begin::Form-->
                        <!--begin::Step 1-->
                        <div class="current" data-kt-stepper-element="content">
                            <div class="w-100">


                                <form action="#" id="project-form"
                                    class="general-form" role="form" method="post" accept-charset="utf-8"
                                    novalidate="novalidate">
                                    <input type="hidden" name="rise_csrf_token"
                                        value="18b9d9fb9d22e35d7a886872b23c080f">
                                    <div class="modal-body clearfix">
                                        <div class="container-fluid">
                                            <input type="hidden" name="id" value="">
                                            <input type="hidden" name="estimate_id" value="">
                                            <input type="hidden" name="order_id" value="">
                                            <div class="form-group fv-row mb-8">
                                                <div class="row">
                                                    <label for="title" class=" col-md-3">Title</label>
                                                    <div class=" col-md-9">
                                                        <input type="text" name="title" value="" id="title"
                                                            class="form-control form-control-solid" placeholder="Title"
                                                            autofocus="1" data-rule-required="1"
                                                            data-msg-required="This field is required.">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group fv-row mb-8">
                                                <div class="row">
                                                    <label for="project_type" class=" col-md-3">Project type</label>
                                                    <div class=" col-md-9">
                                                        <select class="form-select form-select-solid">
                                                            <option value="" data-select2-id="select2-data-134-36y3">
                                                                Select Project Type</option>
                                                            <option value="2" data-select2-id="select2-data-134-36y3">
                                                                Internal Project</option>
                                                            <option value="3" data-select2-id="select2-data-134-36y3">
                                                                External Project</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group" id="clients-dropdown">
                                                <div class="row">
                                                    <label for="client_id" class=" col-md-3">Organization</label>
                                                    <div class=" col-md-9">
                                                        <select class="form-select form-select-solid"
                                                            data-placeholder="Select Project Type">
                                                            <option value="" data-select2-id="select2-data-134-36y3">
                                                                Select Organization</option>
                                                            <option value="2" data-select2-id="select2-data-134-36y3">
                                                                IBM</option>
                                                            <option value="3" data-select2-id="select2-data-134-36y3">
                                                                DONOR SEE</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group fv-row mb-8">
                                                <div class="row">
                                                    <label for="description" class=" col-md-3">Description</label>
                                                    <div class=" col-md-9">
                                                        <textarea name="description" cols="40" rows="10"
                                                            id="description" class="form-control form-control-solid"
                                                            placeholder="Description" style="height:150px;"
                                                            data-rich-text-editor="1"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group fv-row mb-8">
                                                <div class="row">
                                                    <label for="start_date" class=" col-md-3">Start date</label>
                                                    <div class=" col-md-9">
                                                        <input type="text" name="start_date" value="" id="start_date"
                                                            class="form-control form-control-solid"
                                                            placeholder="Start date" autocomplete="off"
                                                            data-convert-date-format="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group fv-row mb-8">
                                                <div class="row">
                                                    <label for="deadline" class=" col-md-3">Deadline</label>
                                                    <div class=" col-md-9">
                                                        <input type="text" name="deadline" value="" id="deadline"
                                                            class="form-control form-control-solid"
                                                            placeholder="Deadline" autocomplete="off"
                                                            data-convert-date-format="1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group fv-row mb-8">
                                                <div class="row">
                                                    <label for="price" class=" col-md-3">Budget</label>
                                                    <div class=" col-md-9">
                                                        <input type="text" name="price" value="" id="price"
                                                            class="form-control form-control-solid"
                                                            placeholder="Budget">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-primary"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-check-circle icon-16">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg> Save</button>
                                    </div>
                                </form>



                            </div>
                        </div>
                        <!--end::Step 1-->

                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Create App-->











<!--begin::Modal - New Task-->
<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="kt_modal_new_target_form" method='post' action="http://localhost/tauris/tauris_api/v2/api/addtask.php" class="form" >
                    <!--begin::Heading-->

                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Task Title</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                            title="Specify a task name for future usage and reference"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Task Title"
                            name="target_title" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-bold mb-2">Task Details</label>
                        <textarea class="form-control form-control-solid" rows="3" name="target_details"
                            placeholder="Type Task Details"></textarea>
                    </div>
                    <!--end::Input group-->

                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-bold mb-2">Project Name</label>
                        <div class=" col-md-9">
                            <select class="form-select form-select-solid"  name="project" id='projectopt'>
                                <option value="" data-select2-id="select2-data-134-36y3">Select Project </option>
                            </select>
                        </div>
                    </div>

                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="form-label">Assign Team</label>

                            <input name='users-list-tags' style="width: 600px;">
                            <!-- <input class="" value="" id="kt_tagify_users" /> -->
                            <div style="display:none;">
                                <input class="" value="" id="kt_tagify_country" />
                            </div>

                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Start Date</label>
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" placeholder="Select a date"
                                    name="start_date" type="date" />
                                <!--end::Datepicker-->
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2">End Date</label>
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">

                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" placeholder="Select a date"
                                    name="due_date" type="date" />
                                <!--end::Datepicker-->
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->


                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Task Duration (in hours)</span>
                        </label>
                        <!--end::Label-->
                        <input type="number" class="form-control form-control-solid" placeholder="Enter Task Duration"
                            name="target_duration" />
                    </div>

                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-bold mb-2">Project Status</label>
                        <div class=" col-md-9">
                            <select class="form-select form-select-solid" name='project_status'>
                                <option value="" data-select2-id="select2-data-134-36y3">Select Project Status </option>
                                <option value="in progress" data-select2-id="select2-data-134-36y3">Yet to start</option>
                                <option value="pending" data-select2-id="select2-data-134-36y3">In Progress</option>
                                <option value="completed" data-select2-id="select2-data-134-36y3">Completed</option>
                            </select>
                        </div>
                    </div>



                    <!--begin::Actions-->
                    <div class="text-center">

                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Task-->


