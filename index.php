<?php 
	session_start();
	if(!isset($_SESSION['email'])){ header('location:sign-in.php');}
?>
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
<h2 class="fs-2 fw-bold mt-5"> Dashboard </h2>
<!--end::Heading-->
</div>
<!--end::Toolbar-->

<!--begin::Col-->
<div class="row g-5 g-xl-10">
<!--begin::Lists Widget 19-->
<div class="col-xl-12">
<!--begin::Heading-->
<div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-150px mb-5" style="background: #81D4FA;">
</div>
<!--end::Heading-->
<!--begin::Body-->
<div class="card card-body mt-n20 mb-10">
<!--begin::Stats-->
<div class="mt-n20 position-relative">
<!--begin::Row-->
<div class="row g-5 g-xl-10">

<!--begin::Col-->
<div class="col-xl-4">
<!--begin::Items-->
<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5 d-flex align-items-center">


<div class="symbol symbol-50px me-5 mb-0">
<span class="symbol-label">
<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
<span class="svg-icon svg-icon-1 svg-icon-primary">
<i class="fa fa-handshake fs-1"></i>
</span>
<!--end::Svg Icon-->
</span>
</div>

<div class="m-0">
<!--begin::Number-->
<span class="text-gray-700 fw-boldest d-block fs-2qx lh-1 ls-n1 mb-1">11</span>
<!--end::Number-->
<!--begin::Desc-->
<span class="text-gray-800 fs-3">CONTRACTS</span>
<!--end::Desc-->
</div>
<!--end::Stats-->
</div>
<!--end::Items-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col-xl-4">

<!--begin::Items-->
<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5 d-flex align-items-center">


<div class="symbol symbol-50px me-5 mb-0">
<span class="symbol-label">
<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
<span class="svg-icon svg-icon-1 svg-icon-primary">
<i class="fas fa-cogs fs-1"></i>
</span>
<!--end::Svg Icon-->
</span>
</div>


<div class="m-0">
<!--begin::Number-->
<span class="text-gray-700 fw-boldest d-block fs-2qx lh-1 ls-n1 mb-1">36</span>
<!--end::Number-->
<!--begin::Desc-->
<span class="text-gray-800 fs-3">PROJECTS</span>
<!--end::Desc-->
</div>
<!--end::Stats-->
</div>
<!--end::Items-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col-xl-4">
<!--begin::Items-->
<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5 d-flex align-items-center">


<div class="symbol symbol-50px me-5 mb-0">
<span class="symbol-label">
<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
<span class="svg-icon svg-icon-1 svg-icon-primary">
<i class="fas fa-dollar-sign fs-1"></i>
</span>
<!--end::Svg Icon-->
</span>
</div>


<div class="m-0">
<!--begin::Number-->
<span class="text-gray-700 fw-boldest d-block fs-2qx lh-1 ls-n1 mb-1">$ 470,000</span>
<!--end::Number-->
<!--begin::Desc-->
<span class="text-gray-800 fs-3">BUDGET</span>
<!--end::Desc-->
</div>
<!--end::Stats-->
</div>
<!--end::Items-->
</div>
<!--end::Col-->

</div>
<!--end::Row-->
</div>
<!--end::Stats-->
</div>
<!--end::Body-->
</div>
<!--end::Lists Widget 19-->
</div>
<!--end::Col-->


<!--begin::Row-->
<div class="row g-5 g-xl-10">
<!--begin::Col-->
<div class="col-xl-12">
<!--begin::Row-->
<div class="row g-5 g-xl-10">
<!--begin::Col-->
<div class="col-xl-4 mb-xl-10">



<!--begin::Mixed Widget 3-->
<div class="card card-xl-stretch">
<!--begin::Beader-->
<div class="card-header border-0 py-5">
<h3 class="card-title align-items-start flex-column">
<span class="card-label fw-bolder fs-3 mb-1">Project Overview</span>
</h3>


</div>
<!--end::Header-->
<!--begin::Body-->
<div class="card-body p-0 d-flex flex-column">
<!--begin::Stats-->
<div class="card-p pt-5 bg-body flex-grow-1">
<!--begin::Row-->
<div class="row g-0">
<!--begin::Col-->
<div class="col mr-8">
<!--begin::Label-->
<div class="fs-7 text-muted fw-bold">ACTIVE PROJECTS</div>
<!--end::Label-->
<!--begin::Stat-->
<div class="d-flex align-items-center">
<div class="fs-4 fw-bolder">20</div>
<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->

<!--end::Svg Icon-->
</div>
<!--end::Stat-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col">
<!--begin::Label-->
<div class="fs-7 text-muted fw-bold">BUDGET</div>
<!--end::Label-->
<!--begin::Stat-->
<div class="fs-4 fw-bolder">$233,600</div>
<!--end::Stat-->
</div>
<!--end::Col-->
</div>
<!--end::Row-->
<!--begin::Row-->
<div class="row g-0 mt-8">
<!--begin::Col-->
<div class="col mr-8">
<!--begin::Label-->
<div class="fs-7 text-muted fw-bold">SPENDING</div>
<!--end::Label-->
<!--begin::Stat-->
<div class="fs-4 fw-bolder">$29,004</div>
<!--end::Stat-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col">
<!--begin::Label-->
<div class="fs-7 text-muted fw-bold">BALANCE</div>
<!--end::Label-->
<!--begin::Stat-->
<div class="d-flex align-items-center">
<div class="fs-4 fw-bolder">$1,480,00</div>
<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->

<!--end::Svg Icon-->
</div>
<!--end::Stat-->
</div>
<!--end::Col-->
</div>
<!--end::Row-->
</div>
<!--end::Stats-->
<!--begin::Chart-->
<div class="mixed-widget-3-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
<!--end::Chart-->
</div>
<!--end::Body-->
</div>
<!--end::Mixed Widget 3-->



</div>
<!--end::Col-->


<!--begin::Col-->
<div class="col-xl-4 mb-xl-10">




<!--begin::Mixed Widget 3-->
<div class="card card-xl-stretch">
<!--begin::Beader-->
<div class="card-header border-0 py-5">
<h3 class="card-title align-items-start flex-column">
<span class="card-label fw-bolder fs-3 mb-1">All Tasks Overview</span>
</h3>
</div>
<!--end::Header-->
<!--begin::Body-->
<div class="card-body p-0 d-flex flex-column">
<!--begin::Stats-->
<div class="card-p pt-5 bg-body flex-grow-1">
<!--begin::Row-->
<div class="row g-0">
<!--begin::Col-->
<div class="col mr-8">
<!--begin::Label-->
<div class="fs-7 text-muted fw-bold">ACTIVE TASKS</div>
<!--end::Label-->
<!--begin::Stat-->
<div class="d-flex align-items-center">
<div class="fs-4 fw-bolder">250</div>

<!--end::Svg Icon-->
</div>
<!--end::Stat-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col">
<!--begin::Label-->
<div class="fs-7 text-muted fw-bold">IN PROGRESS</div>
<!--end::Label-->
<!--begin::Stat-->
<div class="fs-4 fw-bolder">98 </div>
<!--end::Stat-->
</div>
<!--end::Col-->
</div>
<!--end::Row-->
<!--begin::Row-->
<div class="row g-0 mt-8">
<!--begin::Col-->
<div class="col mr-8">
<!--begin::Label-->
<div class="fs-7 text-muted fw-bold">PENDING</div>
<!--end::Label-->
<!--begin::Stat-->
<div class="fs-4 fw-bolder">155</div>
<!--end::Stat-->
</div>
<!--end::Col-->

</div>
<!--end::Row-->
</div>
<!--end::Stats-->





<!--begin::Block-->
<div class="pt-5">
<div id="kt_docs_flot_pie" class="h-150px"></div>
</div>
<!--end::Block-->






<!--begin::Chart-->
<div class="mixed-widget-3-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
<!--end::Chart-->


</div>
<!--end::Body-->
</div>
<!--end::Mixed Widget 3-->





</div>
<!--end::Col-->


<!--begin::Col-->
<div class="col-xl-4 mb-5 mb-xl-10">





<!--begin::Mixed Widget 3-->
<div class="card card-xl-stretch">
<!--begin::Beader-->
<div class="card-header border-0 py-5">
<h3 class="card-title align-items-start flex-column">
<span class="card-label fw-bolder fs-3 mb-1">Team Members Overview</span>
</h3>
  
</div>
<!--end::Header-->
<!--begin::Body-->
<div class="card-body p-0 d-flex flex-column">
<!--begin::Stats-->
<div class="card-p pt-5 bg-body flex-grow-1">
<!--begin::Row-->
<div class="row g-0">
<!--begin::Col-->
<div class="col mr-8">
<!--begin::Label-->
<div class="fs-7 text-muted fw-bold">TEAM MEMBERS</div>
<!--end::Label-->
<!--begin::Stat-->
<div class="d-flex align-items-center">
<div class="fs-4 fw-bolder">65</div>
<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->

<!--end::Svg Icon-->
</div>
<!--end::Stat-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col">
<!--begin::Label-->
<div class="fs-7 text-muted fw-bold">ON LEAVE TODAY</div>
<!--end::Label-->
<!--begin::Stat-->
<div class="fs-4 fw-bolder">0</div>
<!--end::Stat-->
</div>
<!--end::Col-->
</div>
<!--end::Row-->
<!--begin::Row-->
<div class="row g-0 mt-8">
<!--begin::Col-->
<div class="col mr-8">
<!--begin::Label-->
<div class="fs-7 text-muted fw-bold">MEMBERS CLOCKED IN</div>
<!--end::Label-->
<!--begin::Stat-->
<div class="fs-4 fw-bolder">47</div>
<!--end::Stat-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col">
<!--begin::Label-->
<div class="fs-7 text-muted fw-bold">MEMBERS CLOCKED OUT</div>
<!--end::Label-->
<!--begin::Stat-->
<div class="d-flex align-items-center">
<div class="fs-4 fw-bolder">11</div>
<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->

<!--end::Svg Icon-->
</div>
<!--end::Stat-->
</div>
<!--end::Col-->
</div>
<!--end::Row-->
</div>
<!--end::Stats-->
<!--begin::Chart-->
<div class="mixed-widget-3-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
<!--end::Chart-->
</div>
<!--end::Body-->
</div>
<!--end::Mixed Widget 3-->





</div>
<!--end::Col-->


</div>
<!--end::Row-->

</div>
<!--end::Col-->
</div>
<!--end::Row-->


<?php /* ?>
<!--begin::Row-->
<div class="row g-5 g-xl-10">

<!--begin::Col-->
<div class="col-xl-12">
<!--begin::Row-->
<div class="row g-5 g-xl-10">
<!--begin::Col-->
<div class="col-xl-4 mb-xl-10">
<!--begin::Slider Widget 1-->
<div id="kt_sliders_widget_1_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000">
<!--begin::Header-->
<div class="card-header pt-5">
<!--begin::Title-->
<h4 class="card-title d-flex align-items-start flex-column">
<span class="card-label fw-bolder text-gray-800">Today’s Course</span>
<span class="text-gray-400 mt-1 fw-bolder fs-7">4 lessons, 3 hours 45 minutes</span>
</h4>
<!--end::Title-->
<!--begin::Toolbar-->
<div class="card-toolbar">
<!--begin::Carousel Indicators-->
<ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
<li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="0" class="active ms-1"></li>
<li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1" class="ms-1"></li>
<li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="2" class="ms-1"></li>
</ol>
<!--end::Carousel Indicators-->
</div>
<!--end::Toolbar-->
</div>
<!--end::Header-->
<!--begin::Body-->
<div class="card-body pt-6">
<!--begin::Carousel-->
<div class="carousel-inner mt-n5">
<!--begin::Item-->
<div class="carousel-item active show">
<!--begin::Wrapper-->
<div class="d-flex align-items-center mb-5">
<!--begin::Chart-->
<div class="w-80px flex-shrink-0 me-2">
<div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_1" style="height: 100px"></div>
</div>
<!--end::Chart-->
<!--begin::Info-->
<div class="m-0">
<!--begin::Subtitle-->
<h4 class="fw-bolder text-gray-800 mb-3">Ruby on Rails</h4>
<!--end::Subtitle-->
<!--begin::Items-->
<div class="d-flex d-grid gap-5">
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0 me-4">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->3 Topics</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->1 Speakers</span>
<!--end::Section-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->50 Min</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->72 students</span>
<!--end::Section-->
</div>
<!--end::Item-->
</div>
<!--end::Items-->
</div>
<!--end::Info-->
</div>
<!--end::Wrapper-->
<!--begin::Action-->
<div class="mb-1">
<a href="#" class="btn btn-sm btn-light me-2">Skip This</a>
<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Continue</a>
</div>
<!--end::Action-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="carousel-item">
<!--begin::Wrapper-->
<div class="d-flex align-items-center mb-5">
<!--begin::Chart-->
<div class="w-80px flex-shrink-0 me-2">
<div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_2" style="height: 100px"></div>
</div>
<!--end::Chart-->
<!--begin::Info-->
<div class="m-0">
<!--begin::Subtitle-->
<h4 class="fw-bolder text-gray-800 mb-3">Ruby on Rails</h4>
<!--end::Subtitle-->
<!--begin::Items-->
<div class="d-flex d-grid gap-5">
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0 me-4">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->3 Topics</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->1 Speakers</span>
<!--end::Section-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->50 Min</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->72 students</span>
<!--end::Section-->
</div>
<!--end::Item-->
</div>
<!--end::Items-->
</div>
<!--end::Info-->
</div>
<!--end::Wrapper-->
<!--begin::Action-->
<div class="mb-1">
<a href="#" class="btn btn-sm btn-light me-2">Skip This</a>
<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Continue</a>
</div>
<!--end::Action-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="carousel-item">
<!--begin::Wrapper-->
<div class="d-flex align-items-center mb-5">
<!--begin::Chart-->
<div class="w-80px flex-shrink-0 me-2">
<div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_3" style="height: 100px"></div>
</div>
<!--end::Chart-->
<!--begin::Info-->
<div class="m-0">
<!--begin::Subtitle-->
<h4 class="fw-bolder text-gray-800 mb-3">Ruby on Rails</h4>
<!--end::Subtitle-->
<!--begin::Items-->
<div class="d-flex d-grid gap-5">
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0 me-4">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->3 Topics</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->1 Speakers</span>
<!--end::Section-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->50 Min</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->72 students</span>
<!--end::Section-->
</div>
<!--end::Item-->
</div>
<!--end::Items-->
</div>
<!--end::Info-->
</div>
<!--end::Wrapper-->
<!--begin::Action-->
<div class="mb-1">
<a href="#" class="btn btn-sm btn-light me-2">Skip This</a>
<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Continue</a>
</div>
<!--end::Action-->
</div>
<!--end::Item-->
</div>
<!--end::Carousel-->
</div>
<!--end::Body-->
</div>
<!--end::Slider Widget 1-->
</div>
<!--end::Col-->

<!--begin::Col-->
<div class="col-xl-4 mb-xl-10">
<!--begin::Slider Widget 2-->
<div id="kt_sliders_widget_2_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5500">
<!--begin::Header-->
<div class="card-header pt-5">
<!--begin::Title-->
<h4 class="card-title d-flex align-items-start flex-column">
<span class="card-label fw-bolder text-gray-800">Today’s Events</span>
<span class="text-gray-400 mt-1 fw-bolder fs-7">24 events on all activities</span>
</h4>
<!--end::Title-->
<!--begin::Toolbar-->
<div class="card-toolbar">
<!--begin::Carousel Indicators-->
<ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
<li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0" class="active ms-1"></li>
<li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1" class="ms-1"></li>
<li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2" class="ms-1"></li>
</ol>
<!--end::Carousel Indicators-->
</div>
<!--end::Toolbar-->
</div>
<!--end::Header-->
<!--begin::Body-->
<div class="card-body pt-6">
<!--begin::Carousel-->
<div class="carousel-inner">
<!--begin::Item-->
<div class="carousel-item active show">
<!--begin::Wrapper-->
<div class="d-flex align-items-center mb-9">
<!--begin::Symbol-->
<div class="symbol symbol-70px symbol-circle me-5">
<span class="symbol-label bg-light-success">
<!--begin::Svg Icon | path: icons/duotune/abstract/abs025.svg-->
<span class="svg-icon svg-icon-3x svg-icon-success">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M16.925 3.90078V8.00077L12.025 10.8008V5.10078L15.525 3.10078C16.125 2.80078 16.925 3.20078 16.925 3.90078ZM2.525 13.5008L6.025 15.5008L10.925 12.7008L6.025 9.90078L2.525 11.9008C1.825 12.3008 1.825 13.2008 2.525 13.5008ZM18.025 19.7008V15.6008L13.125 12.8008V18.5008L16.625 20.5008C17.225 20.8008 18.025 20.4008 18.025 19.7008Z" fill="currentColor" />
<path opacity="0.3" d="M8.52499 3.10078L12.025 5.10078V10.8008L7.125 8.00077V3.90078C7.125 3.20078 7.92499 2.80078 8.52499 3.10078ZM7.42499 20.5008L10.925 18.5008V12.8008L6.02499 15.6008V19.7008C6.02499 20.4008 6.82499 20.8008 7.42499 20.5008ZM21.525 11.9008L18.025 9.90078L13.125 12.7008L18.025 15.5008L21.525 13.5008C22.225 13.2008 22.225 12.3008 21.525 11.9008Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</span>
</div>
<!--end::Symbol-->
<!--begin::Info-->
<div class="m-0">
<!--begin::Subtitle-->
<h4 class="fw-bolder text-gray-800 mb-3">Ruby on Rails</h4>
<!--end::Subtitle-->
<!--begin::Items-->
<div class="d-flex d-grid gap-5">
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0 me-4">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->5 Topics</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->1 Speakers</span>
<!--end::Section-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->60 Min</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->137 students</span>
<!--end::Section-->
</div>
<!--end::Item-->
</div>
<!--end::Items-->
</div>
<!--end::Info-->
</div>
<!--end::Wrapper-->
<!--begin::Action-->
<div class="mb-1">
<a href="#" class="btn btn-sm btn-light me-2">Details</a>
<a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Join Event</a>
</div>
<!--end::Action-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="carousel-item">
<!--begin::Wrapper-->
<div class="d-flex align-items-center mb-9">
<!--begin::Symbol-->
<div class="symbol symbol-70px symbol-circle me-5">
<span class="symbol-label bg-light-danger">
<!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
<span class="svg-icon svg-icon-3x svg-icon-danger">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M7 20.5L2 17.6V11.8L7 8.90002L12 11.8V17.6L7 20.5ZM21 20.8V18.5L19 17.3L17 18.5V20.8L19 22L21 20.8Z" fill="currentColor" />
<path d="M22 14.1V6L15 2L8 6V14.1L15 18.2L22 14.1Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</span>
</div>
<!--end::Symbol-->
<!--begin::Info-->
<div class="m-0">
<!--begin::Subtitle-->
<h4 class="fw-bolder text-gray-800 mb-3">Ruby on Rails</h4>
<!--end::Subtitle-->
<!--begin::Items-->
<div class="d-flex d-grid gap-5">
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0 me-4">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->12 Topics</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->1 Speakers</span>
<!--end::Section-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->50 Min</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->72 students</span>
<!--end::Section-->
</div>
<!--end::Item-->
</div>
<!--end::Items-->
</div>
<!--end::Info-->
</div>
<!--end::Wrapper-->
<!--begin::Action-->
<div class="mb-1">
<a href="#" class="btn btn-sm btn-light me-2">Details</a>
<a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Join Event</a>
</div>
<!--end::Action-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="carousel-item">
<!--begin::Wrapper-->
<div class="d-flex align-items-center mb-9">
<!--begin::Symbol-->
<div class="symbol symbol-70px symbol-circle me-5">
<span class="symbol-label bg-light-primary">
<!--begin::Svg Icon | path: icons/duotune/abstract/abs038.svg-->
<span class="svg-icon svg-icon-3x svg-icon-primary">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M12.0444 17.9444V12.1444L17.0444 15.0444C18.6444 15.9444 19.1445 18.0444 18.2445 19.6444C17.3445 21.2444 15.2445 21.7444 13.6445 20.8444C12.6445 20.2444 12.0444 19.1444 12.0444 17.9444ZM7.04445 15.0444L12.0444 12.1444L7.04445 9.24445C5.44445 8.34445 3.44444 8.84445 2.44444 10.4444C1.54444 12.0444 2.04445 14.0444 3.64445 15.0444C4.74445 15.6444 6.04445 15.6444 7.04445 15.0444ZM12.0444 6.34444V12.1444L17.0444 9.24445C18.6444 8.34445 19.1445 6.24444 18.2445 4.64444C17.3445 3.04444 15.2445 2.54445 13.6445 3.44445C12.6445 4.04445 12.0444 5.14444 12.0444 6.34444Z" fill="currentColor" />
<path opacity="0.3" d="M7.04443 9.24445C6.04443 8.64445 5.34442 7.54444 5.34442 6.34444C5.34442 4.54444 6.84444 3.04443 8.64444 3.04443C10.4444 3.04443 11.9444 4.54444 11.9444 6.34444V12.1444L7.04443 9.24445ZM17.0444 15.0444C18.0444 15.6444 19.3444 15.6444 20.3444 15.0444C21.9444 14.1444 22.4444 12.0444 21.5444 10.4444C20.6444 8.84444 18.5444 8.34445 16.9444 9.24445L11.9444 12.1444L17.0444 15.0444ZM7.04443 15.0444C6.04443 15.6444 5.34442 16.7444 5.34442 17.9444C5.34442 19.7444 6.84444 21.2444 8.64444 21.2444C10.4444 21.2444 11.9444 19.7444 11.9444 17.9444V12.1444L7.04443 15.0444Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</span>
</div>
<!--end::Symbol-->
<!--begin::Info-->
<div class="m-0">
<!--begin::Subtitle-->
<h4 class="fw-bolder text-gray-800 mb-3">Ruby on Rails</h4>
<!--end::Subtitle-->
<!--begin::Items-->
<div class="d-flex d-grid gap-5">
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0 me-4">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->3 Topics</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->1 Speakers</span>
<!--end::Section-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->50 Min</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->72 students</span>
<!--end::Section-->
</div>
<!--end::Item-->
</div>
<!--end::Items-->
</div>
<!--end::Info-->
</div>
<!--end::Wrapper-->
<!--begin::Action-->
<div class="mb-1">
<a href="#" class="btn btn-sm btn-light me-2">Details</a>
<a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Join Event</a>
</div>
<!--end::Action-->
</div>
<!--end::Item-->
</div>
<!--end::Carousel-->
</div>
<!--end::Body-->
</div>
<!--end::Slider Widget 2-->
</div>
<!--end::Col-->


<!--begin::Col-->
<div class="col-xl-4 mb-5 mb-xl-10">
<!--begin::Slider Widget 2-->
<div id="kt_sliders_widget_2_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5500">
<!--begin::Header-->
<div class="card-header pt-5">
<!--begin::Title-->
<h4 class="card-title d-flex align-items-start flex-column">
<span class="card-label fw-bolder text-gray-800">Today’s Events</span>
<span class="text-gray-400 mt-1 fw-bolder fs-7">24 events on all activities</span>
</h4>
<!--end::Title-->
<!--begin::Toolbar-->
<div class="card-toolbar">
<!--begin::Carousel Indicators-->
<ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
<li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0" class="active ms-1"></li>
<li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1" class="ms-1"></li>
<li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2" class="ms-1"></li>
</ol>
<!--end::Carousel Indicators-->
</div>
<!--end::Toolbar-->
</div>
<!--end::Header-->
<!--begin::Body-->
<div class="card-body pt-6">
<!--begin::Carousel-->
<div class="carousel-inner">
<!--begin::Item-->
<div class="carousel-item active show">
<!--begin::Wrapper-->
<div class="d-flex align-items-center mb-9">
<!--begin::Symbol-->
<div class="symbol symbol-70px symbol-circle me-5">
<span class="symbol-label bg-light-success">
<!--begin::Svg Icon | path: icons/duotune/abstract/abs025.svg-->
<span class="svg-icon svg-icon-3x svg-icon-success">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M16.925 3.90078V8.00077L12.025 10.8008V5.10078L15.525 3.10078C16.125 2.80078 16.925 3.20078 16.925 3.90078ZM2.525 13.5008L6.025 15.5008L10.925 12.7008L6.025 9.90078L2.525 11.9008C1.825 12.3008 1.825 13.2008 2.525 13.5008ZM18.025 19.7008V15.6008L13.125 12.8008V18.5008L16.625 20.5008C17.225 20.8008 18.025 20.4008 18.025 19.7008Z" fill="currentColor" />
<path opacity="0.3" d="M8.52499 3.10078L12.025 5.10078V10.8008L7.125 8.00077V3.90078C7.125 3.20078 7.92499 2.80078 8.52499 3.10078ZM7.42499 20.5008L10.925 18.5008V12.8008L6.02499 15.6008V19.7008C6.02499 20.4008 6.82499 20.8008 7.42499 20.5008ZM21.525 11.9008L18.025 9.90078L13.125 12.7008L18.025 15.5008L21.525 13.5008C22.225 13.2008 22.225 12.3008 21.525 11.9008Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</span>
</div>
<!--end::Symbol-->
<!--begin::Info-->
<div class="m-0">
<!--begin::Subtitle-->
<h4 class="fw-bolder text-gray-800 mb-3">Ruby on Rails</h4>
<!--end::Subtitle-->
<!--begin::Items-->
<div class="d-flex d-grid gap-5">
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0 me-4">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->5 Topics</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->1 Speakers</span>
<!--end::Section-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->60 Min</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->137 students</span>
<!--end::Section-->
</div>
<!--end::Item-->
</div>
<!--end::Items-->
</div>
<!--end::Info-->
</div>
<!--end::Wrapper-->
<!--begin::Action-->
<div class="mb-1">
<a href="#" class="btn btn-sm btn-light me-2">Details</a>
<a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Join Event</a>
</div>
<!--end::Action-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="carousel-item">
<!--begin::Wrapper-->
<div class="d-flex align-items-center mb-9">
<!--begin::Symbol-->
<div class="symbol symbol-70px symbol-circle me-5">
<span class="symbol-label bg-light-danger">
<!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
<span class="svg-icon svg-icon-3x svg-icon-danger">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M7 20.5L2 17.6V11.8L7 8.90002L12 11.8V17.6L7 20.5ZM21 20.8V18.5L19 17.3L17 18.5V20.8L19 22L21 20.8Z" fill="currentColor" />
<path d="M22 14.1V6L15 2L8 6V14.1L15 18.2L22 14.1Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</span>
</div>
<!--end::Symbol-->
<!--begin::Info-->
<div class="m-0">
<!--begin::Subtitle-->
<h4 class="fw-bolder text-gray-800 mb-3">Ruby on Rails</h4>
<!--end::Subtitle-->
<!--begin::Items-->
<div class="d-flex d-grid gap-5">
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0 me-4">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->12 Topics</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->1 Speakers</span>
<!--end::Section-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->50 Min</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->72 students</span>
<!--end::Section-->
</div>
<!--end::Item-->
</div>
<!--end::Items-->
</div>
<!--end::Info-->
</div>
<!--end::Wrapper-->
<!--begin::Action-->
<div class="mb-1">
<a href="#" class="btn btn-sm btn-light me-2">Details</a>
<a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Join Event</a>
</div>
<!--end::Action-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="carousel-item">
<!--begin::Wrapper-->
<div class="d-flex align-items-center mb-9">
<!--begin::Symbol-->
<div class="symbol symbol-70px symbol-circle me-5">
<span class="symbol-label bg-light-primary">
<!--begin::Svg Icon | path: icons/duotune/abstract/abs038.svg-->
<span class="svg-icon svg-icon-3x svg-icon-primary">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M12.0444 17.9444V12.1444L17.0444 15.0444C18.6444 15.9444 19.1445 18.0444 18.2445 19.6444C17.3445 21.2444 15.2445 21.7444 13.6445 20.8444C12.6445 20.2444 12.0444 19.1444 12.0444 17.9444ZM7.04445 15.0444L12.0444 12.1444L7.04445 9.24445C5.44445 8.34445 3.44444 8.84445 2.44444 10.4444C1.54444 12.0444 2.04445 14.0444 3.64445 15.0444C4.74445 15.6444 6.04445 15.6444 7.04445 15.0444ZM12.0444 6.34444V12.1444L17.0444 9.24445C18.6444 8.34445 19.1445 6.24444 18.2445 4.64444C17.3445 3.04444 15.2445 2.54445 13.6445 3.44445C12.6445 4.04445 12.0444 5.14444 12.0444 6.34444Z" fill="currentColor" />
<path opacity="0.3" d="M7.04443 9.24445C6.04443 8.64445 5.34442 7.54444 5.34442 6.34444C5.34442 4.54444 6.84444 3.04443 8.64444 3.04443C10.4444 3.04443 11.9444 4.54444 11.9444 6.34444V12.1444L7.04443 9.24445ZM17.0444 15.0444C18.0444 15.6444 19.3444 15.6444 20.3444 15.0444C21.9444 14.1444 22.4444 12.0444 21.5444 10.4444C20.6444 8.84444 18.5444 8.34445 16.9444 9.24445L11.9444 12.1444L17.0444 15.0444ZM7.04443 15.0444C6.04443 15.6444 5.34442 16.7444 5.34442 17.9444C5.34442 19.7444 6.84444 21.2444 8.64444 21.2444C10.4444 21.2444 11.9444 19.7444 11.9444 17.9444V12.1444L7.04443 15.0444Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</span>
</div>
<!--end::Symbol-->
<!--begin::Info-->
<div class="m-0">
<!--begin::Subtitle-->
<h4 class="fw-bolder text-gray-800 mb-3">Ruby on Rails</h4>
<!--end::Subtitle-->
<!--begin::Items-->
<div class="d-flex d-grid gap-5">
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0 me-4">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->3 Topics</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->1 Speakers</span>
<!--end::Section-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex flex-column flex-shrink-0">
<!--begin::Section-->
<span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->50 Min</span>
<!--end::Section-->
<!--begin::Section-->
<span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
<span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->72 students</span>
<!--end::Section-->
</div>
<!--end::Item-->
</div>
<!--end::Items-->
</div>
<!--end::Info-->
</div>
<!--end::Wrapper-->
<!--begin::Action-->
<div class="mb-1">
<a href="#" class="btn btn-sm btn-light me-2">Details</a>
<a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Join Event</a>
</div>
<!--end::Action-->
</div>
<!--end::Item-->
</div>
<!--end::Carousel-->
</div>
<!--end::Body-->
</div>
<!--end::Slider Widget 2-->
</div>
<!--end::Col-->

</div>
<!--end::Row-->

</div>
<!--end::Col-->
</div>
<!--end::Row-->
<?php */ ?>




<!--begin::Row-->
<div class="row g-5 g-xl-8">
<div class="col-xl-4">
<!--begin::List Widget 4-->
<div class="card card-xl-stretch mb-xl-8">
<!--begin::Header-->
<div class="card-header border-0 pt-5">
<h3 class="card-title align-items-start flex-column">
<span class="card-label fw-bolder text-dark">Files and Documents Overview</span>
</h3>
<div class="card-toolbar">
<!--begin::Menu-->
<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
<span class="svg-icon svg-icon-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
		<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
		<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
		<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
	</g>
</svg>
</span>
<!--end::Svg Icon-->
</button>
<!--begin::Menu 3-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
<!--begin::Heading-->
<div class="menu-item px-3">
<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
</div>
<!--end::Heading-->
<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">Create Invoice</a>
</div>
<!--end::Menu item-->
<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link flex-stack px-3">Create Payment
<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
</div>
<!--end::Menu item-->
<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">Generate Bill</a>
</div>
<!--end::Menu item-->
<!--begin::Menu item-->
<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
<a href="#" class="menu-link px-3">
	<span class="menu-title">Subscription</span>
	<span class="menu-arrow"></span>
</a>
<!--begin::Menu sub-->
<div class="menu-sub menu-sub-dropdown w-175px py-4">
	<!--begin::Menu item-->
	<div class="menu-item px-3">
		<a href="#" class="menu-link px-3">Plans</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-3">
		<a href="#" class="menu-link px-3">Billing</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-3">
		<a href="#" class="menu-link px-3">Statements</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu separator-->
	<div class="separator my-2"></div>
	<!--end::Menu separator-->
	<!--begin::Menu item-->
	<div class="menu-item px-3">
		<div class="menu-content px-3">
			<!--begin::Switch-->
			<label class="form-check form-switch form-check-custom form-check-solid">
				<!--begin::Input-->
				<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
				<!--end::Input-->
				<!--end::Label-->
				<span class="form-check-label text-muted fs-6">Recuring</span>
				<!--end::Label-->
			</label>
			<!--end::Switch-->
		</div>
	</div>
	<!--end::Menu item-->
</div>
<!--end::Menu sub-->
</div>
<!--end::Menu item-->
<!--begin::Menu item-->
<div class="menu-item px-3 my-1">
<a href="#" class="menu-link px-3">Settings</a>
</div>
<!--end::Menu item-->
</div>
<!--end::Menu 3-->
<!--end::Menu-->
</div>
</div>
<!--end::Header-->
<!--begin::Body-->
<div class="card-body pt-5">
<!--begin::Item-->
<div class="d-flex align-items-sm-center mb-7">
<!--begin::Symbol-->
<div class="symbol symbol-50px me-5">
<span class="symbol-label">
<img src="<?php echo $domain ; ?>assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
</span>
</div>
<!--end::Symbol-->
<!--begin::Section-->
<div class="d-flex align-items-center flex-row-fluid flex-wrap">
<div class="flex-grow-1 me-2">
<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Top Authors</a>
<span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
</div>
<span class="badge badge-light fw-bolder my-2">+82$</span>
</div>
<!--end::Section-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex align-items-sm-center mb-7">
<!--begin::Symbol-->
<div class="symbol symbol-50px me-5">
<span class="symbol-label">
<img src="<?php echo $domain ; ?>assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
</span>
</div>
<!--end::Symbol-->
<!--begin::Section-->
<div class="d-flex align-items-center flex-row-fluid flex-wrap">
<div class="flex-grow-1 me-2">
<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Popular Authors</a>
<span class="text-muted fw-bold d-block fs-7">Randy, Steve, Mike</span>
</div>
<span class="badge badge-light fw-bolder my-2">+280$</span>
</div>
<!--end::Section-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex align-items-sm-center mb-7">
<!--begin::Symbol-->
<div class="symbol symbol-50px me-5">
<span class="symbol-label">
<img src="<?php echo $domain ; ?>assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
</span>
</div>
<!--end::Symbol-->
<!--begin::Section-->
<div class="d-flex align-items-center flex-row-fluid flex-wrap">
<div class="flex-grow-1 me-2">
<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">New Users</a>
<span class="text-muted fw-bold d-block fs-7">John, Pat, Jimmy</span>
</div>
<span class="badge badge-light fw-bolder my-2">+4500$</span>
</div>
<!--end::Section-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex align-items-sm-center mb-7">
<!--begin::Symbol-->
<div class="symbol symbol-50px me-5">
<span class="symbol-label">
<img src="<?php echo $domain ; ?>assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
</span>
</div>
<!--end::Symbol-->
<!--begin::Section-->
<div class="d-flex align-items-center flex-row-fluid flex-wrap">
<div class="flex-grow-1 me-2">
<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Active Customers</a>
<span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
</div>
<span class="badge badge-light fw-bolder my-2">+686$</span>
</div>
<!--end::Section-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex align-items-sm-center mb-7">
<!--begin::Symbol-->
<div class="symbol symbol-50px me-5">
<span class="symbol-label">
<img src="<?php echo $domain ; ?>assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
</span>
</div>
<!--end::Symbol-->
<!--begin::Section-->
<div class="d-flex align-items-center flex-row-fluid flex-wrap">
<div class="flex-grow-1 me-2">
<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Bestseller Theme</a>
<span class="text-muted fw-bold d-block fs-7">Disco, Retro, Sports</span>
</div>
<span class="badge badge-light fw-bolder my-2">+726$</span>
</div>
<!--end::Section-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex align-items-sm-center">
<!--begin::Symbol-->
<div class="symbol symbol-50px me-5">
<span class="symbol-label">
<img src="<?php echo $domain ; ?>assets/media/svg/brand-logos/fox-hub.svg" class="h-50 align-self-center" alt="" />
</span>
</div>
<!--end::Symbol-->
<!--begin::Section-->
<div class="d-flex align-items-center flex-row-fluid flex-wrap">
<div class="flex-grow-1 me-2">
<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Fox Broker App</a>
<span class="text-muted fw-bold d-block fs-7">Finance, Corporate, Apps</span>
</div>
<span class="badge badge-light fw-bolder my-2">+145$</span>
</div>
<!--end::Section-->
</div>
<!--end::Item-->
</div>
<!--end::Body-->
</div>
<!--end::List Widget 4-->
</div>
<div class="col-xl-4">
<!--begin::List Widget 5-->
<div class="card card-xl-stretch mb-xl-8">
<!--begin::Header-->
<div class="card-header align-items-center border-0 mt-4">
<h3 class="card-title align-items-start flex-column">
<span class="fw-bolder mb-2 text-dark">Project Timelines</span>
</h3>
<div class="card-toolbar">
<!--begin::Menu-->
<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
<span class="svg-icon svg-icon-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
		<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
		<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
		<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
	</g>
</svg>
</span>
<!--end::Svg Icon-->
</button>
<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6244766e7bf43">
<!--begin::Header-->
<div class="px-7 py-5">
<div class="fs-5 text-dark fw-bolder">Filter Options</div>
</div>
<!--end::Header-->
<!--begin::Menu separator-->
<div class="separator border-gray-200"></div>
<!--end::Menu separator-->
<!--begin::Form-->
<div class="px-7 py-5">
<!--begin::Input group-->
<div class="mb-10">
	<!--begin::Label-->
	<label class="form-label fw-bold">Status:</label>
	<!--end::Label-->
	<!--begin::Input-->
	<div>
		<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6244766e7bf43" data-allow-clear="true">
			<option></option>
			<option value="1">Approved</option>
			<option value="2">Pending</option>
			<option value="2">In Process</option>
			<option value="2">Rejected</option>
		</select>
	</div>
	<!--end::Input-->
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="mb-10">
	<!--begin::Label-->
	<label class="form-label fw-bold">Member Type:</label>
	<!--end::Label-->
	<!--begin::Options-->
	<div class="d-flex">
		<!--begin::Options-->
		<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
			<input class="form-check-input" type="checkbox" value="1" />
			<span class="form-check-label">Author</span>
		</label>
		<!--end::Options-->
		<!--begin::Options-->
		<label class="form-check form-check-sm form-check-custom form-check-solid">
			<input class="form-check-input" type="checkbox" value="2" checked="checked" />
			<span class="form-check-label">Customer</span>
		</label>
		<!--end::Options-->
	</div>
	<!--end::Options-->
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="mb-10">
	<!--begin::Label-->
	<label class="form-label fw-bold">Notifications:</label>
	<!--end::Label-->
	<!--begin::Switch-->
	<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
		<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
		<label class="form-check-label">Enabled</label>
	</div>
	<!--end::Switch-->
</div>
<!--end::Input group-->
<!--begin::Actions-->
<div class="d-flex justify-content-end">
	<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
	<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
</div>
<!--end::Actions-->
</div>
<!--end::Form-->
</div>
<!--end::Menu 1-->
<!--end::Menu-->
</div>
</div>
<!--end::Header-->
<!--begin::Body-->
<div class="card-body pt-5">
<!--begin::Timeline-->
<div class="timeline-label">
<!--begin::Item-->
<div class="timeline-item">
<!--begin::Label-->
<div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
<!--end::Label-->
<!--begin::Badge-->
<div class="timeline-badge">
<i class="fa fa-genderless text-warning fs-1"></i>
</div>
<!--end::Badge-->
<!--begin::Text-->
<div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And keep structure</div>
<!--end::Text-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="timeline-item">
<!--begin::Label-->
<div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
<!--end::Label-->
<!--begin::Badge-->
<div class="timeline-badge">
<i class="fa fa-genderless text-success fs-1"></i>
</div>
<!--end::Badge-->
<!--begin::Content-->
<div class="timeline-content d-flex">
<span class="fw-bolder text-gray-800 ps-3">AEOL meeting</span>
</div>
<!--end::Content-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="timeline-item">
<!--begin::Label-->
<div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
<!--end::Label-->
<!--begin::Badge-->
<div class="timeline-badge">
<i class="fa fa-genderless text-danger fs-1"></i>
</div>
<!--end::Badge-->
<!--begin::Desc-->
<div class="timeline-content fw-bolder text-gray-800 ps-3">Make deposit
<a href="#" class="text-primary">USD 700</a>. to ESL</div>
<!--end::Desc-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="timeline-item">
<!--begin::Label-->
<div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
<!--end::Label-->
<!--begin::Badge-->
<div class="timeline-badge">
<i class="fa fa-genderless text-primary fs-1"></i>
</div>
<!--end::Badge-->
<!--begin::Text-->
<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
<!--end::Text-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="timeline-item">
<!--begin::Label-->
<div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
<!--end::Label-->
<!--begin::Badge-->
<div class="timeline-badge">
<i class="fa fa-genderless text-danger fs-1"></i>
</div>
<!--end::Badge-->
<!--begin::Desc-->
<div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
<a href="#" class="text-primary">#XF-2356</a>.</div>
<!--end::Desc-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="timeline-item">
<!--begin::Label-->
<div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
<!--end::Label-->
<!--begin::Badge-->
<div class="timeline-badge">
<i class="fa fa-genderless text-primary fs-1"></i>
</div>
<!--end::Badge-->
<!--begin::Text-->
<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
<!--end::Text-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="timeline-item">
<!--begin::Label-->
<div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
<!--end::Label-->
<!--begin::Badge-->
<div class="timeline-badge">
<i class="fa fa-genderless text-danger fs-1"></i>
</div>
<!--end::Badge-->
<!--begin::Desc-->
<div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
<a href="#" class="text-primary">#XF-2356</a>.</div>
<!--end::Desc-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="timeline-item mb-9">
<!--begin::Label-->
<div class="timeline-label fw-bolder text-gray-800 fs-6">10:30</div>
<!--end::Label-->
<!--begin::Badge-->
<div class="timeline-badge">
<i class="fa fa-genderless text-success fs-1"></i>
</div>
<!--end::Badge-->
<!--begin::Text-->
<div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch preparion meeting</div>
<!--end::Text-->
</div>
<!--end::Item-->
</div>
<!--end::Timeline-->
</div>
<!--end: Card Body-->
</div>
<!--end: List Widget 5-->
</div>
<div class="col-xl-4">
<!--begin::List Widget 6-->
<div class="card card-xl-stretch mb-5 mb-xl-8">
<!--begin::Header-->
<div class="card-header border-0">
<h3 class="card-title fw-bolder text-dark">Notifications</h3>
<div class="card-toolbar">
<!--begin::Menu-->
<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
<span class="svg-icon svg-icon-2">
<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
		<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
		<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
		<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
	</g>
</svg>
</span>
<!--end::Svg Icon-->
</button>
<!--begin::Menu 3-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
<!--begin::Heading-->
<div class="menu-item px-3">
<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
</div>
<!--end::Heading-->
<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">Create Invoice</a>
</div>
<!--end::Menu item-->
<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link flex-stack px-3">Create Payment
<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
</div>
<!--end::Menu item-->
<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">Generate Bill</a>
</div>
<!--end::Menu item-->
<!--begin::Menu item-->
<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
<a href="#" class="menu-link px-3">
	<span class="menu-title">Subscription</span>
	<span class="menu-arrow"></span>
</a>
<!--begin::Menu sub-->
<div class="menu-sub menu-sub-dropdown w-175px py-4">
	<!--begin::Menu item-->
	<div class="menu-item px-3">
		<a href="#" class="menu-link px-3">Plans</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-3">
		<a href="#" class="menu-link px-3">Billing</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-3">
		<a href="#" class="menu-link px-3">Statements</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu separator-->
	<div class="separator my-2"></div>
	<!--end::Menu separator-->
	<!--begin::Menu item-->
	<div class="menu-item px-3">
		<div class="menu-content px-3">
			<!--begin::Switch-->
			<label class="form-check form-switch form-check-custom form-check-solid">
				<!--begin::Input-->
				<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
				<!--end::Input-->
				<!--end::Label-->
				<span class="form-check-label text-muted fs-6">Recuring</span>
				<!--end::Label-->
			</label>
			<!--end::Switch-->
		</div>
	</div>
	<!--end::Menu item-->
</div>
<!--end::Menu sub-->
</div>
<!--end::Menu item-->
<!--begin::Menu item-->
<div class="menu-item px-3 my-1">
<a href="#" class="menu-link px-3">Settings</a>
</div>
<!--end::Menu item-->
</div>
<!--end::Menu 3-->
<!--end::Menu-->
</div>
</div>
<!--end::Header-->
<!--begin::Body-->
<div class="card-body pt-0">
<!--begin::Item-->
<div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
<!--begin::Icon-->
<span class="svg-icon svg-icon-warning me-5">
<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
<span class="svg-icon svg-icon-1">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
	<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
	<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</span>
<!--end::Icon-->
<!--begin::Title-->
<div class="flex-grow-1 me-2">
<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Group lunch celebration</a>
<span class="text-muted fw-bold d-block">Due in 2 Days</span>
</div>
<!--end::Title-->
<!--begin::Lable-->
<span class="fw-bolder text-warning py-1">+28%</span>
<!--end::Lable-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex align-items-center bg-light-success rounded p-5 mb-7">
<!--begin::Icon-->
<span class="svg-icon svg-icon-success me-5">
<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
<span class="svg-icon svg-icon-1">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
	<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
	<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</span>
<!--end::Icon-->
<!--begin::Title-->
<div class="flex-grow-1 me-2">
<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Navigation optimization</a>
<span class="text-muted fw-bold d-block">Due in 2 Days</span>
</div>
<!--end::Title-->
<!--begin::Lable-->
<span class="fw-bolder text-success py-1">+50%</span>
<!--end::Lable-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
<!--begin::Icon-->
<span class="svg-icon svg-icon-danger me-5">
<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
<span class="svg-icon svg-icon-1">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
	<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
	<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</span>
<!--end::Icon-->
<!--begin::Title-->
<div class="flex-grow-1 me-2">
<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Rebrand strategy planning</a>
<span class="text-muted fw-bold d-block">Due in 5 Days</span>
</div>
<!--end::Title-->
<!--begin::Lable-->
<span class="fw-bolder text-danger py-1">-27%</span>
<!--end::Lable-->
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex align-items-center bg-light-info rounded p-5">
<!--begin::Icon-->
<span class="svg-icon svg-icon-info me-5">
<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
<span class="svg-icon svg-icon-1">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
	<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
	<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</span>
<!--end::Icon-->
<!--begin::Title-->
<div class="flex-grow-1 me-2">
<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Product goals strategy</a>
<span class="text-muted fw-bold d-block">Due in 7 Days</span>
</div>
<!--end::Title-->
<!--begin::Lable-->
<span class="fw-bolder text-info py-1">+8%</span>
<!--end::Lable-->
</div>
<!--end::Item-->
</div>
<!--end::Body-->
</div>
<!--end::List Widget 6-->
</div>
</div>
<!--end::Row-->




<!--begin::Tables Widget 9-->
<div class="card mb-5 mb-xl-8">
<!--begin::Header-->
<div class="card-header border-0 pt-5">
<h3 class="card-title align-items-start flex-column">
<span class="card-label fw-bolder fs-3 mb-1">Members Overview</span>
</h3>

</div>
<!--end::Header-->
<!--begin::Body-->
<div class="card-body py-3">
<!--begin::Table container-->
<div class="table-responsive">
<!--begin::Table-->
<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
<!--begin::Table head-->
<thead>
<tr class="fw-bolder text-muted">
<th class="min-w-200px">Name</th>
<th class="min-w-150px">Assigned Tasks</th>
<th class="min-w-150px">Completed Tasks</th>
<th class="min-w-150px">Tasks in Progress</th>
<th class="min-w-150px">Pending Tasks</th>
<th class="min-w-150px">Progress</th>
</tr>
</thead>
<!--end::Table head-->
<!--begin::Table body-->
<tbody>
<tr>
<td>
<div class="d-flex align-items-center">
<div class="symbol symbol-45px me-5">
<img src="<?php echo $domain ; ?>assets/media/avatars/300-14.jpg" alt="" />
</div>
<div class="d-flex justify-content-start flex-column">
<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a>
<span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
</div>
</div>
</td>
<td>
<span class="badge py-3 px-4 fs-7 badge-light-info">20</span>
</td>
<td>
<span class="badge py-3 px-4 fs-7 badge-light-success">12</span>
</td>
<td>
<span class="badge py-3 px-4 fs-7 badge-light-warning">3</span>
</td>
<td>
<span class="badge py-3 px-4 fs-7 badge-light-danger">5</span>
</td>
<td class="text-end">
<div class="d-flex flex-column w-100 me-2">
<div class="d-flex flex-stack mb-2">
<span class="text-muted me-2 fs-7 fw-bold">50%</span>
</div>
<div class="progress h-6px w-100">
<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</td>

</tr>
<tr>

<td>
<div class="d-flex align-items-center">
<div class="symbol symbol-45px me-5">
<img src="<?php echo $domain ; ?>assets/media/avatars/300-2.jpg" alt="" />
</div>
<div class="d-flex justify-content-start flex-column">
<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Jessie Clarcson</a>
<span class="text-muted fw-bold text-muted d-block fs-7">C#, ASP.NET, MS SQL</span>
</div>
</div>
</td>

<td>
<span class="badge py-3 px-4 fs-7 badge-light-info">20</span>
</td>
<td>
<span class="badge py-3 px-4 fs-7 badge-light-success">12</span>
</td>
<td>
<span class="badge py-3 px-4 fs-7 badge-light-warning">3</span>
</td>
<td>
<span class="badge py-3 px-4 fs-7 badge-light-danger">5</span>
</td>
<td class="text-end">
<div class="d-flex flex-column w-100 me-2">
<div class="d-flex flex-stack mb-2">
<span class="text-muted me-2 fs-7 fw-bold">70%</span>
</div>
<div class="progress h-6px w-100">
<div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</td>

</tr>
<tr>

<td>
<div class="d-flex align-items-center">
<div class="symbol symbol-45px me-5">
<img src="<?php echo $domain ; ?>assets/media/avatars/300-5.jpg" alt="" />
</div>
<div class="d-flex justify-content-start flex-column">
<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Lebron Wayde</a>
<span class="text-muted fw-bold text-muted d-block fs-7">PHP, Laravel, VueJS</span>
</div>
</div>
</td>

<td>
<span class="badge py-3 px-4 fs-7 badge-light-info">20</span>
</td>
<td>
<span class="badge py-3 px-4 fs-7 badge-light-success">12</span>
</td>
<td>
<span class="badge py-3 px-4 fs-7 badge-light-warning">3</span>
</td>
<td>
<span class="badge py-3 px-4 fs-7 badge-light-danger">5</span>
</td>
<td class="text-end">
<div class="d-flex flex-column w-100 me-2">
<div class="d-flex flex-stack mb-2">
<span class="text-muted me-2 fs-7 fw-bold">60%</span>
</div>
<div class="progress h-6px w-100">
<div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</td>


</tr>
<tr>

<td>
<div class="d-flex align-items-center">
<div class="symbol symbol-45px me-5">
<img src="<?php echo $domain ; ?>assets/media/avatars/300-20.jpg" alt="" />
</div>
<div class="d-flex justify-content-start flex-column">
<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Natali Goodwin</a>
<span class="text-muted fw-bold text-muted d-block fs-7">Python, PostgreSQL, ReactJS</span>
</div>
</div>
</td>

<td>
<span class="badge py-3 px-4 fs-7 badge-light-info">20</span>
</td>
<td>
<span class="badge py-3 px-4 fs-7 badge-light-success">12</span>
</td>
<td>
<span class="badge py-3 px-4 fs-7 badge-light-warning">3</span>
</td>
<td>
<span class="badge py-3 px-4 fs-7 badge-light-danger">5</span>
</td>
<td class="text-end">
<div class="d-flex flex-column w-100 me-2">
<div class="d-flex flex-stack mb-2">
<span class="text-muted me-2 fs-7 fw-bold">50%</span>
</div>
<div class="progress h-6px w-100">
<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</td>

</tr>
<tr>

<td>
<div class="d-flex align-items-center">
<div class="symbol symbol-45px me-5">
<img src="<?php echo $domain ; ?>assets/media/avatars/300-23.jpg" alt="" />
</div>
<div class="d-flex justify-content-start flex-column">
<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Kevin Leonard</a>
<span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
</div>
</div>
</td>

<td>
<span class="badge py-3 px-4 fs-7 badge-light-info">20</span>
</td>
<td>
<span class="badge py-3 px-4 fs-7 badge-light-success">12</span>
</td>
<td>
<span class="badge py-3 px-4 fs-7 badge-light-warning">3</span>
</td>
<td>
<span class="badge py-3 px-4 fs-7 badge-light-danger">5</span>
</td>
<td class="text-end">
<div class="d-flex flex-column w-100 me-2">
<div class="d-flex flex-stack mb-2">
<span class="text-muted me-2 fs-7 fw-bold">90%</span>
</div>
<div class="progress h-6px w-100">
<div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</td>


</tr>
</tbody>
<!--end::Table body-->
</table>
<!--end::Table-->
</div>
<!--end::Table container-->
</div>
<!--begin::Body-->
</div>
<!--end::Tables Widget 9-->


</div>
<!--end::Container-->
</div>
<!--end::Post-->
</div>
<!--end::Content-->
	<script src="<?php echo $domain ; ?>assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
	<script src="<?php echo $domain ; ?>assets/plugins/custom/flotcharts/flotcharts.bundle.js"></script>
	<script src="<?php echo $domain ; ?>assets/js/custom/documentation/charts/flotcharts/pie.js"></script>
<?php include "inc-footer.php"; ?>