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
<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
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
<form id="kt_modal_new_target_form" class="form" action="#">
<!--begin::Heading-->

<!--end::Heading-->
<!--begin::Input group-->
<div class="d-flex flex-column mb-8 fv-row">
<!--begin::Label-->
<label class="d-flex align-items-center fs-6 fw-bold mb-2">
<span class="required">Task Title</span>
<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a task name for future usage and reference"></i>
</label>
<!--end::Label-->
<input type="text" class="form-control form-control-solid" placeholder="Enter Task Title" name="target_title" />
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="d-flex flex-column mb-8">
<label class="fs-6 fw-bold mb-2">Task Details</label>
<textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Task Details"></textarea>
</div>
<!--end::Input group-->

<div class="d-flex flex-column mb-8">
<label class="fs-6 fw-bold mb-2">Project Name</label>
<div class=" col-md-9">
<select class="form-select form-select-solid">
<option value="" data-select2-id="select2-data-134-36y3">Select Project </option>
<option value="2" data-select2-id="select2-data-134-36y3">Water Project</option>
<option value="3" data-select2-id="select2-data-134-36y3">Electrical Project</option>
</select>
</div>
</div>

<!--begin::Input group-->
<div class="row g-9 mb-8">
<!--begin::Col-->
<div class="col-md-12 fv-row">
<label class="form-label">Assign Team</label>

<input class="" value="" id="kt_tagify_users" />
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
<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" type="date" />
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
<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" type="date" />
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
<input type="number" class="form-control form-control-solid" placeholder="Enter Task Duration" name="target_duration" />
</div>						

<div class="d-flex flex-column mb-8">
<label class="fs-6 fw-bold mb-2">Project Status</label>
<div class=" col-md-9">
<select class="form-select form-select-solid">
<option value="" data-select2-id="select2-data-134-36y3">Select Project Status </option>
<option value="2" data-select2-id="select2-data-134-36y3">Yet to start</option>
<option value="3" data-select2-id="select2-data-134-36y3">In Progress</option>
<option value="3" data-select2-id="select2-data-134-36y3">Completed</option>
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