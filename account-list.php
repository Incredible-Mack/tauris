<?php include "inc-header.php"; ?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
<div class="post d-flex flex-column-fluid" id="kt_post">
<div id="kt_content_container" class="container-xxl">

<div class="d-flex flex-wrap flex-stack mb-4 mt-10 ps-5">
<h3 class="fw-bolder my-2">Account</h3>
</div>
								
<div class="card">
<div class="card-header border-0 pt-6">
<div class="card-title">
<div class="d-flex align-items-center position-relative my-1">
<span class="svg-icon svg-icon-1 position-absolute ms-6">
<i class="fa fa-search" aria-hidden="true"></i>
</span>
<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Organizations" />
</div>
</div>
<div class="card-toolbar">
<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
<div class="w-150px me-3">
<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
<option></option>
<option value="all">All</option>
<option value="active">Active</option>
<option value="Suspended">Suspended</option>
</select>
</div>
</div>
</div>
</div>
<div class="card-body pt-0">
<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
<thead>
<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
<th class="w-10px pe-2">
<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
</div>
</th>
<th class="min-w-125px">Organization Name</th>
<th class="min-w-125px">Email</th>
<th class="min-w-125px">Status</th>
<th class="min-w-125px">Created Date</th>
<th class="text-end min-w-70px">Actions</th>
</tr>
</thead>
<tbody class="fw-bold text-gray-600">
<tr>
<td>
<div class="form-check form-check-sm form-check-custom form-check-solid">
<input class="form-check-input" type="checkbox" value="1" />
</div>
</td>
<td>
<a href="<?php echo $domain ; ?>account-view.php" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
</td>
<td>
<a href="#" class="text-gray-600 text-hover-primary mb-1">smith@kpmg.com</a>
</td>
<td>
<div class="badge badge-light-success">active</div>
</td>
<td>25 Jul 2022, 8:43 pm</td>
<td class="text-end">
<a href="<?php echo $domain ; ?>account-view.php" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">View
<i class="fa fa-eye" aria-hidden="true"></i> </a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<?php include "inc-drawer-organization.php"; ?>
</div>
</div>
</div>
<?php include "inc-footer.php"; ?>