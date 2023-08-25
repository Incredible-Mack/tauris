<?php
include('../inc/common.php');

verifyMethod("GET", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 
header('Content-Type: application/json');

// $itemsPerPage = 3;
// $page = isset($_GET['page']) ? intval($_GET['page']) : 1; // Get page from query parameter, default to 1

// $startIndex = ($page - 1) * $itemsPerPage;

// $query = "SELECT contract_Disbursement.*, contracts.budget, contracts.budget_spent,contracts.owner,contracts.start_date,contracts.status  FROM contract_Disbursement JOIN contracts ON contract_Disbursement.contract_id = contracts.contract_id WHERE contract_Disbursement.contract_id = '101' LIMIT $startIndex, $itemsPerPage";

$query = "SELECT * FROM `teams`";

$result = mysqli_query($GLOBALS['dbConnect'], $query);

if ($result) {
    $contracts = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $contract_data = array(
            'value' => $row["email"],
            'name' =>  $row["fullname"],
            'avatar' => $row["avatar"],
            'email' =>  $row["email"],
        );
        $contracts[] = $contract_data;
    }

    echo json_encode($contracts);
} else {
    echo json_encode(array('message' => 'An error occurred.'));
}


mysqli_close($GLOBALS['dbConnect']);

?>
