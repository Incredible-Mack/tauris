<?php include "inc-header.php"; ?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
<div class="post d-flex flex-column-fluid" id="kt_post">
<div id="kt_content_container" class="container-xxl">




<!--begin::Toolbar-->
<div class="d-flex flex-wrap flex-stack my-5">
<!--begin::Heading-->
<h2 class="fs-2 fw-bold mt-5">Account </h2>
<!--end::Heading-->

</div>
<!--end::Toolbar-->









<div class="d-flex flex-column flex-xl-row">

<div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
<div class="card mb-5 mb-xl-8">
<div class="card-body pt-15">
<div class="d-flex flex-center flex-column mb-5">
<div class="symbol symbol-150px symbol-circle mb-7">
<img src="<?php echo $domain ; ?>assets/media/svg/brand-logos/volicity-9.svg" alt="image" />
</div>
<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">Nine Clouds</a>
</div>

<!--
<div class="d-flex flex-stack fs-4 py-3">
<div class="fw-bolder">Details</div>
<div class="badge badge-light-info d-inline">Premium user</div>
</div>
end::Details toggle
-->
<div class="separator separator-dashed my-3"></div>

<div class="pb-0 fs-6">
<div class="d-flex flex-center flex-column mb-0">
<a href="<?php echo $domain ;?>contracts.php" class="fs-3 text-hover-primary fw-bolder mb-0"> View Contracts </a>

</div>
</div>

</div>
</div>
</div>



<div class="flex-lg-row-fluid ms-lg-5">
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="kt_ecommerce_customer_overview" role="tabpanel">
<div class="card pt-4 mb-6 mb-xl-9">
<div class="card-header border-0">
<div class="card-title">
<h2>Contracts</h2>
</div>
</div>

<div class="card-body pt-0 pb-5">
<table class="table align-middle table-row-dashed gy-5" id="kt_table_customers_payment">
<thead class="border-bottom border-gray-200 fs-7 fw-bolder">
<tr class="text-start text-muted text-uppercase gs-0">
<th class="min-w-100px">order No.</th>
<th>Amount</th>
<th>Status</th>
<th class="min-w-100px">Date</th>
</tr>
</thead>
<tbody class="fs-6 fw-bold text-gray-600">
<tr>
<td>
<a href="<?php echo $domain ;?>contracts-details.php" class="text-gray-600 text-hover-primary mb-1">#14670</a>
</td>
<td>$1,200.00</td>
<td>
<span class="badge badge-light-success">Successful</span>
</td>
<td>14 Dec 2020, 8:43 pm</td>
</tr>
<tr>
<td>
<a href="<?php echo $domain ;?>contracts-details.php" class="text-gray-600 text-hover-primary mb-1">#14750</a>
</td>
<td>$79.00</td>
<td>
<span class="badge badge-light-success">Successful</span>
</td>
<td>01 Dec 2020, 10:12 am</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="kt_ecommerce_customer_overview" role="tabpanel">
<div class="card pt-4 mb-6 mb-xl-9">
<div class="card-header border-0">
<div class="card-title">
<h2>Project</h2>
</div>
</div>
<div class="card-body pt-0 pb-5">
<table class="table align-middle table-row-dashed gy-5" id="kt_table_customers_payment">
<thead class="border-bottom border-gray-200 fs-7 fw-bolder">
<tr class="text-start text-muted text-uppercase gs-0">
<th class="min-w-100px">order No.</th>
<th>Amount</th>
<th>Status</th>
<th class="min-w-100px">Date</th>
</tr>
</thead>
<tbody class="fs-6 fw-bold text-gray-600">
<tr>
<td>
<a href="<?php echo $domain ;?>project-view.php" class="text-gray-600 text-hover-primary mb-1">#14670</a>
</td>
<td>$1,200.00</td>
<td>
<span class="badge badge-light-success">Successful</span>
</td>
<td>14 Dec 2020, 8:43 pm</td>
</tr>
<tr>
<td>
<a href="<?php echo $domain ;?>project-view.php" class="text-gray-600 text-hover-primary mb-1">#14750</a>
</td>
<td>$79.00</td>
<td>
<span class="badge badge-light-success">Successful</span>
</td>
<td>01 Dec 2020, 10:12 am</td>
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
<?php include "inc-footer.php"; ?>