<?php include "inc-header.php"; ?>

<?php
	// include('../inc/common.php');
   
	$url = $domain."tauris_api/v2/api/contracts.php?page=1";
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    )
    );
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    $response;
    
    $response = json_decode($response, true);
    // $message = $response['message'];
    
    
    function convert_date($date){
        $dateString = $date;
        $timestamp = strtotime($dateString);
        $formattedDate = date('jS F, Y', $timestamp);
    return $formattedDate; 
    
    }

?>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">





			<!--begin::Toolbar-->
			<div class="d-flex flex-wrap flex-stack my-5">
				<!--begin::Heading-->
				<h2 class="fs-2 fw-bold mt-5">Contract </h2>
				<!--end::Heading-->

			</div>
			<!--end::Toolbar-->






			<!--begin::Contacts-->
			<div class="row g-6 g-xl-9">

<?php foreach ($response as $value) {     
       // ob_start(); // Start output buffering to capture HTML content?>
				<!--begin::Col-->
				<div class="col-md-6 col-xxl-4">
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column p-4">
							<!--begin::Wrapper-->
							<div class="mb-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-75px symbol-circle">
									<img src="<?php echo $domain; ?>assets/media/svg/brand-logos/volicity-9.svg"
										alt="image" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Name-->
							<div class="fs-6 fw-bolder text-center text-gray-700">Contract ID: <?php echo $value['contract_id']?>
								<!--begin::Position-->
								<div class="fw-bold text-gray-400 mb-6">Contract Date:  <?php echo convert_date($value['start_date']); ?> </div>
								<!--end::Position-->

								<!--begin::contract status-->
								<div class="fw-bold text-gray-400 mb-6">Contract Status:
									<span class="badge badge-light-success me-auto"></span>
								</div>
								<!--end::contract status-->

							</div>
							<!--end::Name-->

							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div
									class="border border-info border-dashed rounded min-w-300px py-3 px-4 mx-3 mb-3 bg-light-primary">
									<div class="fs-2 fw-bolder text-gray-700">Budget : <?php echo $value['budget']?></div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->


							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div
									class="border border-info border-dashed rounded min-w-300px py-3 px-4 mx-3 mb-3 bg-light-danger">
									<div class="fs-2 fw-bolder text-gray-700">Budget Spent : <?php echo $value['budget_spent']?></div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->


							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div
									class="border border-info border-dashed rounded min-w-300px py-3 px-4 mx-3 mb-3 bg-light-success">
									<div class="fs-2 fw-bolder text-gray-700">Budget Balance :  <?php echo $value['budget'] - $value['budget_spent']?> </div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->



							<div class="row mb-8 min-w-300px">
								<div class="col-xl-12">
									<div class="fs-6 fw-bold mt-2 mb-3">Spending Progress</div>
								</div>
								<div class="col-xl-12">
									<div class="d-flex flex-column">
										<?php 
											$spendingProgress = ($value['budget_spent'] / $value['budget']) * 100;

											$roundedProgress = round($spendingProgress);
										?>
										<div class="h-8px bg-light rounded mb-3">
											<div class="bg-success rounded h-8px" role="progressbar" style="width:<?php echo $roundedProgress?>%;"
												aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>



							<!--begin:: duration-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div
									class="border border-gray-300 border-dashed rounded min-w-125px py-1 px-1 mx-2 mb-1">
									<div class="fs-6 fw-bolder text-gray-700">Start date
										<br>
										<div class="fw-bold text-gray-400 fs-8"><?php echo convert_date($value['start_date']); ?></div>
									</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div
									class="border border-gray-300 border-dashed rounded min-w-125px py-1 px-1 mx-2 mb-1">
									<div class="fs-6 fw-bolder text-gray-700">End date
										<br>
										<div class="fw-bold text-gray-400 fs-8"><?php echo convert_date($value['end_date']); ?></div>
									</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::duration-->

							<!--begin::Link-->
							<a href="<?php echo $domain; ?>contracts-details.php?contract_id=<?= $value['contract_id'] ?>"
								class="btn btn-sm btn-light-primary fw-bolder">More details</a>
							<!--end::Link-->
						</div>
						<!--begin::Card body-->

					</div>
				</div>
				<!--end::Col-->
<?php } ?>
			</div>
			<!--end::Contacts-->

		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
<!--end::Content-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php include "inc-footer.php"; ?>