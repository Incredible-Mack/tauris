<?php
session_start();
 if(isset($_SESSION['name'])){}else{ header('location:sign-in.php'); }
$domain = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]"."/tauris/";
?> 
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<head><base href="../">
<title>Tauris</title>
<meta charset="utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Tauris" />
<link rel="shortcut icon" href="<?php echo $domain ; ?>assets/media/logos/favicon_1.ico" />
<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<!--end::Fonts-->
<!--begin::Page Vendor Stylesheets(used by this page)-->
<link href="<?php echo $domain ; ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $domain ; ?>assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
<!--end::Page Vendor Stylesheets-->
<!--begin::Global Stylesheets Bundle(used by all pages)-->
<link href="<?php echo $domain ; ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $domain ; ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
<!--end::Global Stylesheets Bundle-->


<link href="<?php echo $domain ; ?>assets/css/tagify.css" rel="stylesheet"  />
<link href="<?php echo $domain ; ?>assets/css/tagify-user.css" rel="stylesheet" />

</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
<!--begin::Page-->
<div class="page d-flex flex-row flex-column-fluid">
  
<?php include "inc-aside.php"; ?>

<!--begin::Wrapper-->
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
<!--begin::Header-->
<div id="kt_header" style="" class="header align-items-stretch">
<!--begin::Container-->
<div class="container-fluid d-flex align-items-stretch justify-content-between">
<!--begin::Aside mobile toggle-->
<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
<span class="svg-icon svg-icon-1">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</div>
</div>

<!--end::Aside mobile toggle-->
<!--begin::Mobile logo-->
<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
<a href="<?php echo $domain ; ?>index.php" class="d-lg-none">
<img alt="Logo" src="<?php echo $domain ; ?>assets/media/logos/logo-2.svg" class="h-30px" />
</a>
</div>
<!--end::Mobile logo-->
<!--begin::Wrapper-->

<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
<!--begin::Navbar-->
<div class="d-flex align-items-stretch" id="kt_header_nav">

</div>
<!--end::Navbar-->
<!--begin::Toolbar wrapper-->
<div class="d-flex align-items-stretch flex-shrink-0">

<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
<!--begin::Menu wrapper-->
<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
<img src="<?php echo $domain ; ?>assets/media/avatars/300-1.jpg" alt="user">
</div>
<!--begin::User account menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true" style="">
<!--begin::Menu separator-->
<div class="separator my-2"></div>

<div class="menu-item px-5">
<a href="<?php echo $domain ; ?>profile.php" class="menu-link px-5">
<span class="menu-icon">
<i class="fa fa-user"></i>
</span>
My Profile
</a>
</div>

<div class="separator my-2"></div>

<div class="menu-item px-5">
<a href="<?php echo $domain ; ?>signout.php" class="menu-link px-5">
<span class="menu-icon">
<i class="fa fa-power-off"></i>  
</span>
Sign Out</a>
</div>

<div class="separator my-2"></div>
<!--end::Menu separator-->
</div>

</div>


</div>
<!--end::Toolbar wrapper-->
</div>

</div>
<!--end::Wrapper-->
</div>
<!--end::Header-->