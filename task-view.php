<?php include "inc-header.php"; ?>
	<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
							

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
														<img src="<?php echo $domain ; ?>assets/media/avatars/300-6.jpg" alt="image" />
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">Emma Smith</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="mb-3">
														<!--begin::Badge-->
														<div class="badge badge-lg badge-light-primary d-inline">Administrator</div>
														<!--begin::Badge-->
													</div>
													<!--end::Position-->
													
													
													<!--begin::Details item-->
														<div class="fw-bolder mt-3">Phone: <span class="text-gray-600">ID-45453423</span></div>
														
														<!--begin::Details item-->
														<!--begin::Details item-->
														<div class="fw-bolder mt-3">Email:
														<span class="text-gray-600">
														info@keenthemes.com
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
<h2 class="card-title">User Task Assets</h2>
<div class="card-toolbar">
<ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
<li class="nav-item">
<a class="nav-link text-active-primary pb-4 active text-black-400" data-bs-toggle="tab" href="#projecttasksnote">
<span class="pe-3"> <i class="fa fa-check-square" aria-hidden="true"></i> </span> Task Note</a>
</li>
<li class="nav-item">
<a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab" href="#projecttaskfiles">
<span class="pe-3"><i class="fa fa-folder-open" aria-hidden="true"></i> </span> File</a>
</li>
</ul>
</div>
</div>
<div class="card-body">
<div class="tab-content" id="myTabContent">


<div class="tab-pane fade show active" id="projecttasksnote" role="tabpanel">

<div id="kt_customer_view_statement_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">


<div class="table-responsive">

<table id="kt_file_manager_list" data-kt-filemanager-table="files" class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
<!--begin::Table head-->
<thead>
<!--begin::Table row-->
<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
<th class="min-w-100px" rowspan="1" colspan="1" style="width: 436.312px;">Title</th>
<th class="min-w-300px" rowspan="1" colspan="1" style="width: 94.9531px;">Details</th>
<th class="min-w-100px" rowspan="1" colspan="1" style="width: 279.234px;">Added By</th>
<th class="min-w-125px" rowspan="1" colspan="1" style="width: 279.234px;">Last Modified</th>
</tr>

</thead>

<tbody class="fw-bold text-gray-600">

<tr class="odd">
<td>
<a href="#" class="text-gray-800 text-hover-primary" data-bs-toggle="modal" data-bs-target="#user_tasknotes">Project Requirement Update</a>
</td>
<td>Kindly note: The requirement for the project has been reviewed and updated</td>
<td data-order="2022-11-10T17:30:00+01:00">David Well</td>
<td data-order="2022-11-10T17:30:00+01:00">10 Nov 2022, 5:30 pm</td>
</tr>

</tbody>
</table>
</div>




</div>

</div>


<div class="tab-pane fade" id="projecttaskfiles" role="tabpanel">


<div id="kt_customer_view_statement_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">


<div class="table-responsive">

<table id="kt_file_manager_list" data-kt-filemanager-table="files" class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
<!--begin::Table head-->
<thead>
<!--begin::Table row-->
<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
<th class="min-w-250px sorting_disabled" rowspan="1" colspan="1" style="width: 436.312px;">Name</th>
<th class="min-w-10px sorting_disabled" rowspan="1" colspan="1" style="width: 94.9531px;">Size</th>
<th class="min-w-125px sorting_disabled" rowspan="1" colspan="1" style="width: 279.234px;">Last Modified</th>
</tr>
<!--end::Table row-->
</thead>
<!--end::Table head-->
<!--begin::Table body-->
<tbody class="fw-bold text-gray-600">

<tr class="odd">

<td><div class="d-flex align-items-center">
<!--begin::Svg Icon | path: icons/duotune/files/fil003.svg-->
<span class="svg-icon svg-icon-2x svg-icon-primary me-4">
<i class="fa fa-file-pdf fs-1 svg-icon svg-icon-danger" aria-hidden="true"></i>
</span>
<!--end::Svg Icon-->
<a href="#" class="text-gray-800 text-hover-primary">Project Plan</a>
</div>
</td>

<td>489 KB</td>

<td data-order="2022-05-05T14:40:00+01:00">05 May 2022, 2:40 pm</td>

</tr>

<tr class="even">

<td><div class="d-flex align-items-center">
<span class="svg-icon svg-icon-2x svg-icon-primary me-4">
<i class="fa fa-file-excel fs-1 svg-icon svg-icon-excel" aria-hidden="true"></i>
</span>
<a href="#" class="text-gray-800 text-hover-primary">Billing</a>
</div></td>
<td>554 KB</td>
<td data-order="2022-10-25T17:20:00+01:00">25 Oct 2022, 5:20 pm</td>

</tr>

<tr class="odd">
<td><div class="d-flex align-items-center">
<span class="svg-icon svg-icon-2x svg-icon-primary me-4">
<i class="fa fa-file-powerpoint fs-1 svg-icon svg-icon-warning" aria-hidden="true"></i>
</span>
<a href="#" class="text-gray-800 text-hover-primary">Overview</a>
</div></td>
<td>522 KB</td>
<td data-order="2022-11-10T17:30:00+01:00">10 Nov 2022, 5:30 pm</td>
</tr>

</tbody>
<!--end::Table body-->
</table>
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
<?php include "inc-footer.php"; ?>