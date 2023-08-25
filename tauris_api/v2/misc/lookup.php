<?php
include('../inc/common.php');

verifyMethod("GET", $_SERVER["REQUEST_METHOD"]); // Check Request Method 
verifyParameter($_GET['id']); // Check Get Parameters 

function getOptions()
{
	switch ($_GET['id']) {
		case 'referral':
			$response = getReferral();
			doSuccess($response, 0);
			break;
		case 'interest':
			$response = getInterest();
			doSuccess($response, 0);
			break;
		case 'payment-plan':
			$response = getPaymentPlan();
			doSuccess($response, 0);
			break;

		default:
			$response = array(
				'referral' => getReferral(),
				'interest' => getInterest(),
				'payment-plan' => getPaymentPlan(),
			);
			doSuccess($response, 0);
			break;
	}
}

function getReferral()
{
	$query = "SELECT * FROM bets_option_referral WHERE status = 1 ORDER BY name ASC";
	$result = mysqli_query($GLOBALS['dbConnect'], $query);

	if (mysqli_num_rows($result) > 0) {
		while ($data = mysqli_fetch_assoc($result)) {
			$response[] = $data;
		}
		return $response;
	} else {
		return [];
	}
}

function getInterest()
{
	$query = "SELECT * FROM bets_option_interest WHERE status = 1 ORDER BY name ASC";
	$result = mysqli_query($GLOBALS['dbConnect'], $query);

	if (mysqli_num_rows($result) > 0) {
		while ($data = mysqli_fetch_assoc($result)) {
			$response[] = $data;
		}
		return $response;
	} else {
		return [];
	}
}

function getPaymentPlan()
{
	global $initial_deposit, $default_gateway;

	$query = "SELECT id, plan, description, interest, duration FROM bets_payment_plan WHERE status = 1";
	$result = mysqli_query($GLOBALS['dbConnect'], $query);
	$res = [];

	if (mysqli_num_rows($result) > 0) {
		while ($data = mysqli_fetch_assoc($result)) {
			$res[] = $data;
		}
		$response = array(
			'initial_deposit' => $initial_deposit,
			'default_gateway' => $default_gateway,
			'plan_list' => $res
		);
		return $response;
	} else {
		return [];
	}
}

getOptions(); // Make call and return response