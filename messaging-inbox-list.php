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
<h2 class="fs-2 fw-bold mt-5">Inbox </h2>
<!--end::Heading-->
</div>
<!--end::Toolbar-->





<!--begin::Inbox App - Messages -->
<div class="d-flex flex-column flex-lg-row">
<!--begin::Sidebar-->
<div class="flex-column flex-lg-row-auto w-100 w-lg-275px mb-10 mb-lg-0">
<!--begin::Sticky aside-->
<div class="card card-flush mb-0" data-kt-sticky="true" data-kt-sticky-name="inbox-aside-sticky" data-kt-sticky-offset="{default: false, xl: '0px'}" data-kt-sticky-width="{lg: '275px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
<!--begin::Aside content-->
<div class="card-body">
<!--begin::Button-->
<a href="<?php echo $domain ; ?>messaging-compose.php" class="btn btn-primary text-uppercase w-100 mb-10">New Message</a>
<!--end::Button-->
<!--begin::Menu-->
<div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary mb-10">
<!--begin::Menu item-->
<div class="menu-item mb-3">
<!--begin::Inbox-->
<a href="<?php echo $domain ; ?>messaging-inbox-list.php">
<span class="menu-link active">
<span class="menu-icon">
<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
<span class="svg-icon svg-icon-2 me-3">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</span>
<span class="menu-title fw-bolder">Inbox</span>
<span class="badge badge-light-success">3</span>
</span>
</a>
<!--end::Inbox-->
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item mb-3">
<!--begin::Sent-->
<a href="<?php echo $domain ; ?>messaging-sent-list.php">
<span class="menu-link">
<span class="menu-icon">
<!--begin::Svg Icon | path: icons/duotune/general/gen016.svg-->
<span class="svg-icon svg-icon-2 me-3">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z" fill="currentColor" />
<path opacity="0.3" d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</span>
<span class="menu-title fw-bolder">Sent</span>
</span>
</a>
<!--end::Sent-->
</div>
<!--end::Menu item-->
</div>
<!--end::Menu-->

</div>
<!--end::Aside content-->
</div>
<!--end::Sticky aside-->
</div>
<!--end::Sidebar-->
<!--begin::Content-->
<div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
<!--begin::Card-->
<div class="card">
<div class="card-header align-items-center py-5 gap-2 gap-md-5">
<!--begin::Actions-->
<div class="d-flex flex-wrap gap-1">
<!--begin::Checkbox-->
<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_inbox_listing .form-check-input" value="1" />
</div>
<!--end::Checkbox-->


<!--begin::Pagination-->
<div class="d-flex align-items-center flex-wrap gap-2">
<!--begin::Search-->
<div class="d-flex align-items-center position-relative">
<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
<span class="svg-icon svg-icon-2 position-absolute ms-4">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
<input type="text" data-kt-inbox-listing-filter="search" class="form-control form-control-sm form-control-solid mw-100 min-w-150px min-w-md-200px ps-12" placeholder="Search Inbox" />
</div>
<!--end::Search-->
<!--begin::Sort-->
<span>
<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="Sort">
<!--begin::Svg Icon | path: icons/duotune/general/gen059.svg-->
<span class="svg-icon svg-icon-2 m-0">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
<rect y="6" width="16" height="3" rx="1.5" fill="currentColor" />
<rect opacity="0.3" y="12" width="8" height="3" rx="1.5" fill="currentColor" />
<rect opacity="0.3" width="12" height="3" rx="1.5" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</a>
<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="filter_newest">Newest</a>
</div>
<!--end::Menu item-->
<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="filter_oldest">Oldest</a>
</div>
<!--end::Menu item-->
<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="filter_unread">Unread</a>
</div>
<!--end::Menu item-->
</div>
<!--end::Menu-->
</span>
<!--end::Sort-->

</div>
<!--end::Pagination-->
</div>
<div class="card-body p-0">
<!--begin::Table-->
<table class="table table-hover table-row-dashed fs-6 gy-5 my-0" id="kt_inbox_listing">
<!--begin::Table head-->
<thead class="d-none">
<tr>
<th>Checkbox</th>
<th>Actions</th>
<th>Author</th>
<th>Title</th>
<th>Date</th>
</tr>
</thead>
<!--end::Table head-->
<!--begin::Table body-->
<tbody>
<tr>
<td class="ps-9">
<!--begin::Checkbox-->
<div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
<input class="form-check-input" type="checkbox" value="1" />
</div>
<!--end::Checkbox-->
</td>
<td class="min-w-80px">
<!--begin::Star-->
<a href="#" class="btn btn-icon btn-color-gray-400 btn-sm btn-active-color-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Star">
<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
<span class="svg-icon svg-icon-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</a>
<!--end::Star-->
<!--begin::Important-->
<a href="#" class="btn btn-icon btn-color-gray-400 btn-sm btn-active-color-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
<!--begin::Svg Icon | path: icons/duotune/general/gen056.svg-->
<span class="svg-icon svg-icon-3 mt-1">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M16.0077 19.2901L12.9293 17.5311C12.3487 17.1993 11.6407 17.1796 11.0426 17.4787L6.89443 19.5528C5.56462 20.2177 4 19.2507 4 17.7639V5C4 3.89543 4.89543 3 6 3H17C18.1046 3 19 3.89543 19 5V17.5536C19 19.0893 17.341 20.052 16.0077 19.2901Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</a>
<!--end::Important-->
</td>
<!--begin::Author-->
<td class="w-150px w-md-175px">
<a href="<?php echo $domain ; ?>messaging-reply.php" class="d-flex align-items-center text-dark">
<!--begin::Avatar-->
<div class="symbol symbol-35px me-3">
<div class="symbol-label bg-light-danger">
<span class="text-danger">M</span>
</div>
</div>
<!--end::Avatar-->
<!--begin::Name-->
<span class="fw-bold">Melody Macy</span>
<!--end::Name-->
</a>
</td>
<!--end::Author-->
<!--begin::Title-->
<td>
<div class="text-dark mb-1">
<!--begin::Heading-->
<a href="<?php echo $domain ; ?>messaging-reply.php" class="text-dark">
<span class="fw-bolder">Digital PPV Customer Confirmation</span>
<span class="fw-bolder d-none d-md-inine">-</span>
<span class="d-none d-md-inine text-muted">Thank you for ordering UFC 240 Holloway vs Edgar Alternate camera angles...</span>
</a>
<!--end::Heading-->
</div>
<!--begin::Badges-->
<div class="badge badge-light-primary">inbox</div>
<div class="badge badge-light-warning">task</div>
<!--end::Badges-->
</td>
<!--end::Title-->
<!--begin::Date-->
<td class="w-100px text-end fs-7 pe-9">
<span class="fw-bold">8:30 PM</span>
</td>
<!--end::Date-->
</tr>

</tbody>
<!--end::Table body-->
</table>
<!--end::Table-->
</div>
</div>
<!--end::Card-->
</div>
<!--end::Content-->
</div>
<!--end::Inbox App - Messages -->
</div>
<!--end::Container-->
</div>
<!--end::Post-->
</div>
<!--end::Content-->

<?php include "inc-footer.php"; ?>