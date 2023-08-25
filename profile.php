<?php include "inc-header.php"; ?>

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
<!--begin::Container-->
<div id="kt_content_container" class="container-xxl">

<!--begin::Navbar-->
<div class="card mb-5 mb-xl-10">
<div class="card-body pt-9 pb-0">
<!--begin::Details-->
<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
<!--begin: Pic-->
<div class="me-7 mb-4">
<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
<img src="<?php echo $domain ; ?>assets/media/avatars/300-1.jpg" alt="image" />
<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>

</div>
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


<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
<!--begin::Card header-->
<div class="card-header cursor-pointer">
<!--begin::Card title-->
<div class="card-title m-0">
<h3 class="fw-bolder m-0">Profile Details</h3>
</div>
<!--end::Card title-->
<!--begin::Action-->
<a href="<?php echo $domain ; ?>profile-edit.php" class="btn btn-primary align-self-center">Edit Profile</a>
<!--end::Action-->
</div>
<!--begin::Card header-->
<!--begin::Card body-->
<div class="card-body p-9">
<!--begin::Row-->
<div class="row mb-7">

<label class="col-lg-4 fw-bold text-muted">Full Name</label>


<div class="col-lg-8">
<span class="fw-bolder fs-6 text-gray-800">Max Smith</span>
</div>

</div>

<div class="row mb-7">

<label class="col-lg-4 fw-bold text-muted">Designation</label>


<div class="col-lg-8 fv-row">
<span class="fw-bold text-gray-800 fs-6">Keenthemes</span>
</div>
</div>

<div class="row mb-7">

<label class="col-lg-4 fw-bold text-muted">Contact Phone
<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>


<div class="col-lg-8 d-flex align-items-center">
<span class="fw-bolder fs-6 text-gray-800 me-2">044 3276 454 935</span>
</div>

</div>

<div class="row mb-7">

<label class="col-lg-4 fw-bold text-muted">Email</label>

<div class="col-lg-8">
<a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">max@kt.com</a>
</div>

</div>

</div>

</div>

</div>

</div>

</div>

<?php include "inc-footer.php"; ?>