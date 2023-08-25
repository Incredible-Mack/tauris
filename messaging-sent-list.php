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
<h2 class="fs-2 fw-bold mt-5">Sent </h2>
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

</div>
<!--end::Actions-->
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
<!--begin::Settings-->
<span>
<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
<!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
<span class="svg-icon svg-icon-2 m-0">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect x="10" y="10" width="4" height="4" rx="2" fill="currentColor" />
<rect x="17" y="10" width="4" height="4" rx="2" fill="currentColor" />
<rect x="3" y="10" width="4" height="4" rx="2" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</a>
<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-250px py-4" data-kt-menu="true">
<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
<!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
<span class="svg-icon svg-icon-3 me-3">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z" fill="currentColor" />
<path opacity="0.3" d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z" fill="currentColor" />
<path opacity="0.3" d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z" fill="currentColor" />
<path opacity="0.3" d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->New Group</a>
</div>
<!--end::Menu item-->
<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
<span class="svg-icon svg-icon-3 me-3">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
<path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->Contacts</a>
</div>
<!--end::Menu item-->
<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
<!--begin::Svg Icon | path: icons/duotune/communication/com014.svg-->
<span class="svg-icon svg-icon-3 me-3">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="currentColor" />
<rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="currentColor" />
<path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="currentColor" />
<rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->Groups
<span class="badge badge-light-primary ms-auto">new</span></a>
</div>
<!--end::Menu item-->
<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
<!--begin::Svg Icon | path: icons/duotune/abstract/abs030.svg-->
<span class="svg-icon svg-icon-3 me-3">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M4.5 7C5.88071 7 7 5.88071 7 4.5C7 3.11929 5.88071 2 4.5 2C3.11929 2 2 3.11929 2 4.5C2 5.88071 3.11929 7 4.5 7Z" fill="currentColor" />
<path opacity="0.3" d="M14 4.5C14 5.9 12.9 7 11.5 7C10.1 7 9 5.9 9 4.5C9 3.1 10.1 2 11.5 2C12.9 2 14 3.1 14 4.5ZM18.5 2C17.1 2 16 3.1 16 4.5C16 5.9 17.1 7 18.5 7C19.9 7 21 5.9 21 4.5C21 3.1 19.9 2 18.5 2ZM4.5 9C3.1 9 2 10.1 2 11.5C2 12.9 3.1 14 4.5 14C5.9 14 7 12.9 7 11.5C7 10.1 5.9 9 4.5 9ZM11.5 9C10.1 9 9 10.1 9 11.5C9 12.9 10.1 14 11.5 14C12.9 14 14 12.9 14 11.5C14 10.1 12.9 9 11.5 9ZM18.5 9C17.1 9 16 10.1 16 11.5C16 12.9 17.1 14 18.5 14C19.9 14 21 12.9 21 11.5C21 10.1 19.9 9 18.5 9ZM4.5 16C3.1 16 2 17.1 2 18.5C2 19.9 3.1 21 4.5 21C5.9 21 7 19.9 7 18.5C7 17.1 5.9 16 4.5 16ZM11.5 16C10.1 16 9 17.1 9 18.5C9 19.9 10.1 21 11.5 21C12.9 21 14 19.9 14 18.5C14 17.1 12.9 16 11.5 16ZM18.5 16C17.1 16 16 17.1 16 18.5C16 19.9 17.1 21 18.5 21C19.9 21 21 19.9 21 18.5C21 17.1 19.9 16 18.5 16Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->Calls</a>
</div>
<!--end::Menu item-->
<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
<span class="svg-icon svg-icon-3 me-3">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="currentColor" />
<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->Settings</a>
</div>
<!--end::Menu item-->
<div class="separator my-5"></div>
<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
<span class="svg-icon svg-icon-3 me-3">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->Help</a>
</div>
<!--end::Menu item-->
<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
<span class="svg-icon svg-icon-3 me-3">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor" />
<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->Privacy
<span class="badge badge-light-danger ms-auto">5</span></a>
</div>
<!--end::Menu item-->
</div>
<!--end::Menu-->
</span>
<!--end::Settings-->
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
<span class="symbol-label" style="background-image:url(assets/media/avatars/300-1.jpg)"></span>
</div>
<!--end::Avatar-->
<!--begin::Name-->
<span class="fw-bold">Max Smith</span>
<!--end::Name-->
</a>
</td>
<!--end::Author-->
<!--begin::Title-->
<td>
<div class="text-dark mb-1">
<!--begin::Heading-->
<a href="<?php echo $domain ; ?>messaging-reply.php" class="text-dark">
<span class="fw-bolder">Your iBuy.com grocery shopping confirmation</span>
<span class="fw-bolder d-none d-md-inine">-</span>
<span class="d-none d-md-inine text-muted">Please make sure that you have one of the following cards with you when we deliver your order...</span>
</a>
<!--end::Heading-->
</div>
</td>
<!--end::Title-->
<!--begin::Date-->
<td class="w-100px text-end fs-7 pe-9">
<span class="fw-bold">day ago</span>
</td>
<!--end::Date-->
</tr>
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
<span class="symbol-label" style="background-image:url(assets/media/avatars/300-5.jpg)"></span>
</div>
<!--end::Avatar-->
<!--begin::Name-->
<span class="fw-bold">Sean Bean</span>
<!--end::Name-->
</a>
</td>
<!--end::Author-->
<!--begin::Title-->
<td>
<div class="text-dark mb-1">
<!--begin::Heading-->
<a href="<?php echo $domain ; ?>messaging-reply.php" class="text-dark">
<span class="fw-bolder">Your Order #224820998666029 has been Confirmed</span>
<span class="fw-bolder d-none d-md-inine">-</span>
<span class="d-none d-md-inine text-muted">Your Order #224820998666029 has been placed on Saturday, 29 June</span>
</a>
<!--end::Heading-->
</div>
</td>
<!--end::Title-->
<!--begin::Date-->
<td class="w-100px text-end fs-7 pe-9">
<span class="fw-bold text-muted">11:20 PM</span>
</td>
<!--end::Date-->
</tr>
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
<span class="symbol-label" style="background-image:url(assets/media/avatars/300-25.jpg)"></span>
</div>
<!--end::Avatar-->
<!--begin::Name-->
<span class="fw-bold">Brian Cox</span>
<!--end::Name-->
</a>
</td>
<!--end::Author-->
<!--begin::Title-->
<td>
<div class="text-dark mb-1">
<!--begin::Heading-->
<a href="<?php echo $domain ; ?>messaging-reply.php" class="text-dark">
<span class="fw-bolder">Payment Notification DLOP2329KD</span>
<span class="fw-bolder d-none d-md-inine">-</span>
<span class="d-none d-md-inine text-muted">Your payment of 4500USD to AirCar has been authorized and confirmed, thank you your account. This...</span>
</a>
<!--end::Heading-->
</div>
<!--begin::Badges-->
<div class="badge badge-light-danger">new</div>
<!--end::Badges-->
</td>
<!--end::Title-->
<!--begin::Date-->
<td class="w-100px text-end fs-7 pe-9">
<span class="fw-bold text-muted">2 days ago</span>
</td>
<!--end::Date-->
</tr>
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
<div class="symbol-label bg-light-warning">
<span class="text-warning">C</span>
</div>
</div>
<!--end::Avatar-->
<!--begin::Name-->
<span class="fw-bold">Mikaela Collins</span>
<!--end::Name-->
</a>
</td>
<!--end::Author-->
<!--begin::Title-->
<td>
<div class="text-dark mb-1">
<!--begin::Heading-->
<a href="<?php echo $domain ; ?>messaging-reply.php" class="text-dark">
<span class="fw-bolder">Congratulations on your iRun Coach subscription</span>
<span class="fw-bolder d-none d-md-inine">-</span>
<span class="d-none d-md-inine text-muted">Congratulations on your iRun Coach subscription. You made no space for excuses and you</span>
</a>
<!--end::Heading-->
</div>
</td>
<!--end::Title-->
<!--begin::Date-->
<td class="w-100px text-end fs-7 pe-9">
<span class="fw-bold text-muted">July 25</span>
</td>
<!--end::Date-->
</tr>
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
<span class="symbol-label" style="background-image:url(assets/media/avatars/300-9.jpg)"></span>
</div>
<!--end::Avatar-->
<!--begin::Name-->
<span class="fw-bold">Francis Mitcham</span>
<!--end::Name-->
</a>
</td>
<!--end::Author-->
<!--begin::Title-->
<td>
<div class="text-dark mb-1">
<!--begin::Heading-->
<a href="<?php echo $domain ; ?>messaging-reply.php" class="text-dark">
<span class="fw-bolder">Pay bills &amp; win up to 600$ Cashback!</span>
<span class="fw-bolder d-none d-md-inine">-</span>
<span class="d-none d-md-inine text-muted">Congratulations on your iRun Coach subscription. You made no space for excuses and you decided on a healthier and happier life...</span>
</a>
<!--end::Heading-->
</div>
</td>
<!--end::Title-->
<!--begin::Date-->
<td class="w-100px text-end fs-7 pe-9">
<span class="fw-bold text-muted">July 24</span>
</td>
<!--end::Date-->
</tr>
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
<span class="text-danger">O</span>
</div>
</div>
<!--end::Avatar-->
<!--begin::Name-->
<span class="fw-bold">Olivia Wild</span>
<!--end::Name-->
</a>
</td>
<!--end::Author-->
<!--begin::Title-->
<td>
<div class="text-dark mb-1">
<!--begin::Heading-->
<a href="<?php echo $domain ; ?>messaging-reply.php" class="text-dark">
<span class="fw-bolder">Activate your LIPO Account today</span>
<span class="fw-bolder d-none d-md-inine">-</span>
<span class="d-none d-md-inine text-muted">Thank you for creating a LIPO Account. Please click the link below to activate your account.</span>
</a>
<!--end::Heading-->
</div>
<!--begin::Badges-->
<div class="badge badge-light-warning">task</div>
<!--end::Badges-->
</td>
<!--end::Title-->
<!--begin::Date-->
<td class="w-100px text-end fs-7 pe-9">
<span class="fw-bold text-muted">July 13</span>
</td>
<!--end::Date-->
</tr>
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
<div class="symbol-label bg-light-primary">
<span class="text-primary">N</span>
</div>
</div>
<!--end::Avatar-->
<!--begin::Name-->
<span class="fw-bold">Neil Owen</span>
<!--end::Name-->
</a>
</td>
<!--end::Author-->
<!--begin::Title-->
<td>
<div class="text-dark mb-1">
<!--begin::Heading-->
<a href="<?php echo $domain ; ?>messaging-reply.php" class="text-dark">
<span class="fw-bolder">About your request for PalmLake</span>
<span class="fw-bolder d-none d-md-inine">-</span>
<span class="d-none d-md-inine text-muted">What you requested can't be arranged ahead of time but PalmLake said they'll do their best to accommodate you upon arrival....</span>
</a>
<!--end::Heading-->
</div>
</td>
<!--end::Title-->
<!--begin::Date-->
<td class="w-100px text-end fs-7 pe-9">
<span class="fw-bold text-muted">May 25</span>
</td>
<!--end::Date-->
</tr>
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
<span class="symbol-label" style="background-image:url(assets/media/avatars/300-23.jpg)"></span>
</div>
<!--end::Avatar-->
<!--begin::Name-->
<span class="fw-bold">Dan Wilson</span>
<!--end::Name-->
</a>
</td>
<!--end::Author-->
<!--begin::Title-->
<td>
<div class="text-dark mb-1">
<!--begin::Heading-->
<a href="<?php echo $domain ; ?>messaging-reply.php" class="text-dark">
<span class="fw-bolder">Welcome, Patty</span>
<span class="fw-bolder d-none d-md-inine">-</span>
<span class="d-none d-md-inine text-muted">Discover interesting ideas and unique perspectives. Read, explore and follow your interests. Get personalized recommendations delivered to you....</span>
</a>
<!--end::Heading-->
</div>
</td>
<!--end::Title-->
<!--begin::Date-->
<td class="w-100px text-end fs-7 pe-9">
<span class="fw-bold">April 15</span>
</td>
<!--end::Date-->
</tr>
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
<span class="text-danger">E</span>
</div>
</div>
<!--end::Avatar-->
<!--begin::Name-->
<span class="fw-bold">Emma Bold</span>
<!--end::Name-->
</a>
</td>
<!--end::Author-->
<!--begin::Title-->
<td>
<div class="text-dark mb-1">
<!--begin::Heading-->
<a href="<?php echo $domain ; ?>messaging-reply.php" class="text-dark">
<span class="fw-bolder">Free Video Marketing Guide</span>
<span class="fw-bolder d-none d-md-inine">-</span>
<span class="d-none d-md-inine text-muted">Video has rolled into every marketing platform or channel, leaving...</span>
</a>
<!--end::Heading-->
</div>
<!--begin::Badges-->
<div class="badge badge-light-success">project</div>
<!--end::Badges-->
</td>
<!--end::Title-->
<!--begin::Date-->
<td class="w-100px text-end fs-7 pe-9">
<span class="fw-bold text-muted">April 3</span>
</td>
<!--end::Date-->
</tr>
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
<span class="symbol-label" style="background-image:url(assets/media/avatars/300-12.jpg)"></span>
</div>
<!--end::Avatar-->
<!--begin::Name-->
<span class="fw-bold">Ana Crown</span>
<!--end::Name-->
</a>
</td>
<!--end::Author-->
<!--begin::Title-->
<td>
<div class="text-dark mb-1">
<!--begin::Heading-->
<a href="<?php echo $domain ; ?>messaging-reply.php" class="text-dark">
<span class="fw-bolder">Your iBuy.com grocery shopping confirmation</span>
<span class="fw-bolder d-none d-md-inine">-</span>
<span class="d-none d-md-inine text-muted">Please make sure that you have one of the following cards with you when we deliver your order...</span>
</a>
<!--end::Heading-->
</div>
</td>
<!--end::Title-->
<!--begin::Date-->
<td class="w-100px text-end fs-7 pe-9">
<span class="fw-bold text-muted">March 17</span>
</td>
<!--end::Date-->
</tr>
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
<div class="symbol-label bg-light-info">
<span class="text-info">A</span>
</div>
</div>
<!--end::Avatar-->
<!--begin::Name-->
<span class="fw-bold">Robert Doe</span>
<!--end::Name-->
</a>
</td>
<!--end::Author-->
<!--begin::Title-->
<td>
<div class="text-dark mb-1">
<!--begin::Heading-->
<a href="<?php echo $domain ; ?>messaging-reply.php" class="text-dark">
<span class="fw-bolder">Your Order #224820998666029 has been Confirmed</span>
<span class="fw-bolder d-none d-md-inine">-</span>
<span class="d-none d-md-inine text-muted">Your Order #224820998666029 has been placed on Saturday, 07 March</span>
</a>
<!--end::Heading-->
</div>
</td>
<!--end::Title-->
<!--begin::Date-->
<td class="w-100px text-end fs-7 pe-9">
<span class="fw-bold text-muted">March 12</span>
</td>
<!--end::Date-->
</tr>
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
<span class="symbol-label" style="background-image:url(assets/media/avatars/300-13.jpg)"></span>
</div>
<!--end::Avatar-->
<!--begin::Name-->
<span class="fw-bold">John Miller</span>
<!--end::Name-->
</a>
</td>
<!--end::Author-->
<!--begin::Title-->
<td>
<div class="text-dark mb-1">
<!--begin::Heading-->
<a href="<?php echo $domain ; ?>messaging-reply.php" class="text-dark">
<span class="fw-bolder">Payment Notification DLOP2329KD</span>
<span class="fw-bolder d-none d-md-inine">-</span>
<span class="d-none d-md-inine text-muted">Your payment of 4500USD to AirCar has been authorized and confirmed, thank you your account. This...</span>
</a>
<!--end::Heading-->
</div>
</td>
<!--end::Title-->
<!--begin::Date-->
<td class="w-100px text-end fs-7 pe-9">
<span class="fw-bold text-muted">March 11</span>
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