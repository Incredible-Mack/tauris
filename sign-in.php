<?php
$domain = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . "/tauris/";
session_start();
if ($_POST) {

	 $email = $_POST['email'];
	 $password = $_POST['password'];

	//validating input data
	if (empty($email) || empty($password)) {
		$_SESSION['error'] = "<p class='text-danger'> Please enter a valid email and password </p>";
	} else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		$_SESSION['error'] = "<p class='text-danger'>Email or Password might be in correct </p>";
	} else {

		$email = htmlspecialchars($email);
		$password = htmlspecialchars($password);

	
	
		// Create an associative array with the data
		$data = array(
			"email" => $email,
			"password" => $password
		);

		// Convert the array to a JSON string
		$jsonString = json_encode($data);

		// Initialize cURL session
		$curl = curl_init();

		// Set cURL options
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://localhost/tauris/tauris_api/v2/auth/login.php',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => $jsonString, // JSON payload
			CURLOPT_HTTPHEADER => array(
				"Content-Type: application/json"
			),
		));


		$response = curl_exec($curl);
		curl_close($curl);
		$response;
		$response = json_decode($response, true);
		$message = $response['message'];

		if ($message === "Success") {
			$_SESSION['name'] = "Admin Manager";
			$_SESSION['email'] = $email;
			header('Location: index.php');
		} else {
			$_SESSION['error'] = "<p class='text-danger'>Email or Password might be in correct </p>";
		}

	}


}



// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'http://localhost/tauris/tauris_api/v2/auth/login.php',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS =>'{
//   "email": "mackemma96@gmail.com",
//   "password": "12345"
// }',
//   CURLOPT_HTTPHEADER => array(
//     'email: ',
//     'Content-Type: text/plain'
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;


?>



<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
	<base href="../../../">
	<title>Tauris</title>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="" />
	<link rel="shortcut icon" href="<?php echo $domain; ?>assets/media/logos/favicon_1.ico" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?php echo $domain; ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $domain; ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->

</head>

<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
			style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
			<!--begin::Content-->
			<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
				<!--begin::Logo-->
				<a href="" class="mb-12">
					<img alt="Logo" src="<?php echo $domain; ?>assets/media/logos/logo-1-dark.svg" class="h-40px" />
				</a>
				<!--end::Logo-->
				<!--begin::Wrapper-->
				<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
					<!--begin::Form-->
					<form class="form w-100" id='loginForm' method="post" action="<?php echo $domain; ?>sign-in.php">
						<!--begin::Heading-->
						<div class="text-center mb-10">
							<!--begin::Title-->
							<h1 class="text-dark mb-3">Sign In</h1>
							<!--end::Title-->

						</div>
						<!--begin::Heading-->
						<!--begin::Input group-->
						<div class="fv-row mb-10">
							<!-- messageErrorCustom -->
							<?php if (isset($_SESSION['error'])) { ?>
								<div class='text-center' id='messageErrorCustom'>
									<?php echo $_SESSION['error'] ?>
								</div>
								<?php unset($_SESSION['error']);
							} ?>
							<!-- endmessageErrorCustom -->
							<!--begin::Label-->
							<label class="form-label fs-6 fw-bolder text-dark">Email</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input class="form-control form-control-lg form-control-solid" type="text" name="email"
								autocomplete="off" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack mb-2">
								<!--begin::Label-->
								<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
								<!--end::Label-->
								<!--begin::Link-->
								<a href="<?php echo $domain; ?>forgot-password.php"
									class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
								<!--end::Link-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Input-->
							<input class="form-control form-control-lg form-control-solid" type="password"
								name="password" autocomplete="off" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Actions-->
						<div class="text-center">
							<!--begin::Submit button-->
							<button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
								<span class="indicator-label">Login</span>
							</button>
							<!--end::Submit button-->
						</div>
						<!--end::Actions-->
					</form>
					<!--end::Form-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Content-->

		</div>
		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Root-->
	<!--end::Main-->
	<!--begin::Javascript-->
	<script>var hostUrl = "assets/";</script>
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="<?php echo $domain; ?>assets/plugins/global/plugins.bundle.js"></script>
	<script src="<?php echo $domain; ?>assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="<?php echo $domain; ?>assets/js/custom/authentication/sign-in/general.js"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->

	<!-- implementing a custom jquery to handle request -->


</body>
<!--end::Body-->

</html>