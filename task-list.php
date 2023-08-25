<?php include "inc-header.php"; ?>
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1"> Tasks</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span class="h-20px border-gray-300 border-start mx-4"></span>
									<!--end::Separator-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="<?php echo $domain; ?>index.php" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">Tasks</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center gap-2 gap-lg-3">
								
									<!--begin::Secondary button-->
									<!--end::Secondary button-->
									<!--begin::Primary button-->
									<a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Task</a>
									<!--end::Primary button-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
						
								<!--begin::Tab Content-->
								<div class="tab-content">
									<!--begin::Table-->
								<div id="kt_profile_overview_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
<div class="table-responsive">
<table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder dataTable no-footer">
<!--begin::Table head-->
<thead class="fs-7 text-gray-400 text-uppercase">
<tr><th class="min-w-250px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Target: activate to sort column ascending" style="width: 0px;">Tasks</th><th class="min-w-90px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Section: activate to sort column ascending" style="width: 0px;">Projects</th><th class="min-w-150px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Due Date: activate to sort column ascending" style="width: 0px;">Due Date</th><th class="min-w-90px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Members: activate to sort column ascending" style="width: 0px;">Team Members</th><th class="min-w-90px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th><th class="min-w-50px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 0px;">Action</th></tr>
</thead>
<!--end::Table head-->
<!--begin::Table body-->
<tbody class="fs-6">
<!--begin::Table row-->

<!--end::Table row-->
<tr class="odd">
<td class="fw-bolder">
<a href="<?php echo $domain ; ?>task-view.php" class="text-gray-900 text-hover-primary">Meeting with customer</a>
</td>
<td data-order="Invalid date">
<span class="badge badge-light fw-bold me-auto">UI Design</span>
</td>
<td>Feb 23, 2020</td>
<td>
<!--begin::Members-->
<div class="symbol-group symbol-hover fs-8">
<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Melody Macy">
<img alt="Pic" src="<?php echo $domain ; ?>assets/media/avatars/300-2.jpg">
</div>
<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="John Mixin">
<img alt="Pic" src="<?php echo $domain ; ?>assets/media/avatars/300-14.jpg">
</div>
<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Susan Redwood">
<span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
</div>
</div>
<!--end::Members-->
</td>
<td>
<span class="badge badge-light-primary fw-bolder me-auto">In Progress</span>
</td>
<td class="text-end">
<a href="<?php echo $domain ; ?>task-view.php" class="btn btn-bg-light btn-active-color-primary btn-sm">View Project Tasks</a>
</td>
</tr>

<tr class="even">
<td class="fw-bolder">
<a href="<?php echo $domain ; ?>task-view.php" class="text-gray-900 text-hover-primary">User Module Testing</a>
</td>
<td data-order="Invalid date">
<span class="badge badge-light fw-bold me-auto">Phase 2.6 QA</span>
</td>
<td>Apr 16, 2020</td>
<td>
<!--begin::Members-->
<div class="symbol-group symbol-hover fs-8">
<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Alan Warden">
<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
</div>
<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Robin Watterman">
<span class="symbol-label bg-success text-inverse-success fw-bolder">R</span>
</div>
</div>
<!--end::Members-->
</td>
<td>
<span class="badge badge-light-success fw-bolder me-auto">Completed</span>
</td>
<td class="text-end">
<a href="<?php echo $domain ; ?>task-view.php" class="btn btn-bg-light btn-active-color-primary btn-sm">View Project Tasks</a>
</td>
</tr>


</tbody>
<!--end::Table body-->
</table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"></div></div></div>
									<!--end::Table-->
								
								</div>
								<!--end::Tab Content-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
<?php include "inc-drawer-task.php"; ?>
<?php include "inc-footer.php"; ?>