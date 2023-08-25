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
<h2 class="fs-2 fw-bold my-2">Project List <br>
<span class="fs-6 text-gray-400">This page contains all the project for this account</span>
</h2>
<!--end::Heading-->
<!--begin::Controls-->
<div class="d-flex flex-wrap my-1">
<!--begin::Select wrtextbbfbfbfbrapper-->
<div class="m-0">

</div>
<!--end::Select wrapper-->
</div>
<!--end::Controls-->
</div>
<!--end::Toolbar-->






<!--begin::Stats-->
<div class="row g-6 g-xl-9">


<div class="col-lg-6 col-xxl-12">
<div class="card h-100">
<div class="card-body p-2">


<div class="col col-xxl-3">
<div class="border border-dashed border-gray-300 text-center min-w-175px rounded pt-4 pb-2 my-3  bg-light-success ps-5 pe-5">
<span class="fs-lg-2 fs-2hx fw-bold d-block">Projects</span>
<div class="fs-lg-2hx fs-2hx fw-bolder" data-kt-countup="true" data-kt-countup-value="20000000" data-kt-countup-prefix="">0</div>
</div>
</div>





<!--begin::Col-->
<div class="col col-xxl-3">
<div class="border border-dashed border-gray-300 text-center min-w-150px rounded pt-4 pb-2 my-3  bg-light-primary ps-5 pe-5">
<span class="fs-lg-2 fs-2hx fw-bold d-block">BUDGET</span>
<div class="fs-lg-2hx fs-2hx fw-bolder" data-kt-countup="true" data-kt-countup-value="45000000" data-kt-countup-prefix="$">0</div>
</div>
</div>
<!--end::Col-->



<!--begin::Col-->
<div class="col col-xxl-3">
<div class="border border-dashed border-gray-300 text-center min-w-150px rounded pt-4 pb-2 my-3  bg-light-danger ps-5 pe-5">
<span class="fs-lg-2 fs-2hx fw-bold d-block"> SPENDING</span>
<div class="fs-lg-2hx fs-2hx fw-bolder" data-kt-countup="true" data-kt-countup-value="25000000" data-kt-countup-prefix="$">0</div>
</div>
</div>
<!--end::Col-->




<!--begin::Col-->
<div class="col col-xxl-3">
<div class="border border-dashed border-gray-300 text-center min-w-175px rounded pt-4 pb-2 my-3  bg-light-success ps-5 pe-5">
<span class="fs-lg-2 fs-2hx fw-bold d-block">BALANCE</span>
<div class="fs-lg-2hx fs-2hx fw-bolder" data-kt-countup="true" data-kt-countup-value="20000000" data-kt-countup-prefix="$">0</div>
</div>
</div>
<!--end::Col-->

</div>
</div>
<!--end::Clients-->
</div>

</div>

<!--end::Stats-->


<!--begin::Row-->
<div class="row g-6 g-xl-9 mt-10">


<!--begin::Col-->
<div class="col-md-6 col-xl-4">
<!--begin::Card-->
<div class="card border-hover-primary">

<!--begin:: Card body-->
<div class="card-body p-9">
<!--begin::Name-->
<a href="<?php echo $domain ; ?>project-view.php" >
<div class="fs-2 fw-bolder text-dark">Nine Cloud</div>
</a>
<!--end::Name-->



<p class="text-gray-600 fw-bold fs-5 mt-1 mb-3">Project Manager: Steve Hart</p>
<p class="text-gray-600 fw-bold fs-5 mt-1 mb-3">Contract id: #100095  </p>
<div class="border border-info border-dashed rounded min-w-250px py-2 px-2 mx-0 mb-3 bg-light-primary">
<div class="fs-2 fw-bolder text-gray-700">Budget : $45,000,000</div>
</div>
<p class="text-gray-600 fw-bold fs-5 mt-1 mb-7">Status: <span class="badge badge-light-success me-auto">Active</span> </p>




<!--begin::Info-->
<div class="d-flex flex-wrap mb-5">
<!--begin::Due-->
<div class="border border-gray-300 border-dashed rounded min-w-125px py-2 px-2 me-4 mb-3">
<div class="fs-6 text-gray-600 fw-bolder">May 10, 2023</div>
<div class="fw-bold text-gray-400">Due Date</div>
</div>
<!--end::Due-->
<!--begin::Budget-->
<div class="border border-gray-300 border-dashed rounded min-w-125px py-2 px-2 mb-3">
<div class="fs-6 text-gray-600 fw-bolder">Dec 10, 2023</div>
<div class="fw-bold text-gray-400">Start Date</div>
</div>
<!--end::Budget-->
</div>
<!--end::Info-->

<!--begin::Users-->
<p class="text-gray-600 fw-bold fs-5 mt-1 mb-3 mt-5">Team </p>
<div class="symbol-group symbol-hover">
<!--begin::User-->
<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
</div>

<!--begin::User-->
<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Brian Cox">
<img alt="Pic" src="<?php echo $domain ; ?>assets/media/avatars/300-5.jpg" />
</div>
<!--begin::User-->
</div>
<!--end::Users-->


<!--begin::Progress-->
<p class="text-gray-600 fw-bold fs-5 mt-10 mb-3">Project Progress </p>
<div class="h-4px w-100 bg-light mb-5 mt-5" data-bs-toggle="tooltip" title="This project 30% completed">
<div class="bg-info rounded h-4px" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<!--end::Progress-->
<div class="fs-3 fw-bolder text-dark text-center"><a class="btn btn-primary btn-sm me-3 mt-5" href="<?php echo $domain ; ?>task-view.php" >View Project</a></div>


</div>
<!--end:: Card body-->
</div>
<!--end::Card-->
</div>
<!--end::Col-->



<!--begin::Col-->
<div class="col-md-6 col-xl-4">
<!--begin::Card-->
<div class="card border-hover-primary">

<!--begin:: Card body-->
<div class="card-body p-9">
<!--begin::Name-->
<a href="<?php echo $domain ; ?>project-view.php" >
<div class="fs-2 fw-bolder text-dark">Nine Cloud</div>
</a>
<!--end::Name-->



<p class="text-gray-600 fw-bold fs-5 mt-1 mb-3">Project Manager: Steve Hart</p>
<p class="text-gray-600 fw-bold fs-5 mt-1 mb-3">Contract id: #100095  </p>
<div class="border border-info border-dashed rounded min-w-250px py-2 px-2 mx-0 mb-3 bg-light-primary">
<div class="fs-2 fw-bolder text-gray-700">Budget : $45,000,000</div>
</div>
<p class="text-gray-600 fw-bold fs-5 mt-1 mb-7">Status: <span class="badge badge-light-success me-auto">Active</span> </p>




<!--begin::Info-->
<div class="d-flex flex-wrap mb-5">
<!--begin::Due-->
<div class="border border-gray-300 border-dashed rounded min-w-125px py-2 px-2 me-4 mb-3">
<div class="fs-6 text-gray-600 fw-bolder">May 10, 2023</div>
<div class="fw-bold text-gray-400">Due Date</div>
</div>
<!--end::Due-->
<!--begin::Budget-->
<div class="border border-gray-300 border-dashed rounded min-w-125px py-2 px-2 mb-3">
<div class="fs-6 text-gray-600 fw-bolder">Dec 10, 2023</div>
<div class="fw-bold text-gray-400">Start Date</div>
</div>
<!--end::Budget-->
</div>
<!--end::Info-->

<!--begin::Users-->
<p class="text-gray-600 fw-bold fs-5 mt-1 mb-3 mt-5">Team </p>
<div class="symbol-group symbol-hover">
<!--begin::User-->
<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
</div>

<!--begin::User-->
<!--begin::User-->
<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Brian Cox">
<img alt="Pic" src="<?php echo $domain ; ?>assets/media/avatars/300-5.jpg" />
</div>
<!--begin::User-->
</div>
<!--end::Users-->


<!--begin::Progress-->
<p class="text-gray-600 fw-bold fs-5 mt-10 mb-3">Project Progress </p>
<div class="h-4px w-100 bg-light mb-5 mt-5" data-bs-toggle="tooltip" title="This project 30% completed">
<div class="bg-info rounded h-4px" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<!--end::Progress-->
<div class="fs-3 fw-bolder text-dark text-center"><a class="btn btn-primary btn-sm me-3 mt-5" href="<?php echo $domain ; ?>task-view.php" >View Project</a></div>


</div>
<!--end:: Card body-->
</div>
<!--end::Card-->
</div>
<!--end::Col-->



<!--begin::Col-->
<div class="col-md-6 col-xl-4">
<!--begin::Card-->
<div class="card border-hover-primary">

<!--begin:: Card body-->
<div class="card-body p-9">
<!--begin::Name-->
<a href="<?php echo $domain ; ?>project-view.php" >
<div class="fs-2 fw-bolder text-dark">Nine Cloud</div>
</a>
<!--end::Name-->



<p class="text-gray-600 fw-bold fs-5 mt-1 mb-3">Project Manager: Steve Hart</p>
<p class="text-gray-600 fw-bold fs-5 mt-1 mb-3">Contract id: #100095  </p>
<div class="border border-info border-dashed rounded min-w-250px py-2 px-2 mx-0 mb-3 bg-light-primary">
<div class="fs-2 fw-bolder text-gray-700">Budget : $45,000,000</div>
</div>
<p class="text-gray-600 fw-bold fs-5 mt-1 mb-7">Status: <span class="badge badge-light-success me-auto">Active</span> </p>




<!--begin::Info-->
<div class="d-flex flex-wrap mb-5">
<!--begin::Due-->
<div class="border border-gray-300 border-dashed rounded min-w-125px py-2 px-2 me-4 mb-3">
<div class="fs-6 text-gray-600 fw-bolder">May 10, 2023</div>
<div class="fw-bold text-gray-400">Due Date</div>
</div>
<!--end::Due-->
<!--begin::Budget-->
<div class="border border-gray-300 border-dashed rounded min-w-125px py-2 px-2 mb-3">
<div class="fs-6 text-gray-600 fw-bolder">Dec 10, 2023</div>
<div class="fw-bold text-gray-400">Start Date</div>
</div>
<!--end::Budget-->
</div>
<!--end::Info-->

<!--begin::Users-->
<p class="text-gray-600 fw-bold fs-5 mt-1 mb-3 mt-5">Team </p>
<div class="symbol-group symbol-hover">
<!--begin::User-->
<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
</div>

<!--begin::User-->
<!--begin::User-->
<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Brian Cox">
<img alt="Pic" src="<?php echo $domain ; ?>assets/media/avatars/300-5.jpg" />
</div>
<!--begin::User-->
</div>
<!--end::Users-->


<!--begin::Progress-->
<p class="text-gray-600 fw-bold fs-5 mt-10 mb-3">Project Progress </p>
<div class="h-4px w-100 bg-light mb-5 mt-5" data-bs-toggle="tooltip" title="This project 30% completed">
<div class="bg-info rounded h-4px" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<!--end::Progress-->
<div class="fs-3 fw-bolder text-dark text-center"><a class="btn btn-primary btn-sm me-3 mt-5" href="<?php echo $domain ; ?>task-view.php" >View Project</a></div>


</div>
<!--end:: Card body-->
</div>
<!--end::Card-->
</div>
<!--end::Col-->



</div>
<!--end::Row-->


</div>
<!--end::Container-->
</div>
<!--end::Post-->
</div>
<!--end::Content-->

<?php include "inc-drawer-project.php" ; ?>
<?php include "inc-footer.php"; ?>
