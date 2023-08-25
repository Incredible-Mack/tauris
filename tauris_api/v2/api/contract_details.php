<?php
include('../inc/common.php');

verifyMethod("GET", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 
header('Content-Type: application/json');

// $itemsPerPage = 3;
// $page = isset($_GET['page']) ? intval($_GET['page']) : 1; // Get page from query parameter, default to 1

// $startIndex = ($page - 1) * $itemsPerPage;

// $query = "SELECT contract_Disbursement.*, contracts.budget, contracts.budget_spent,contracts.owner,contracts.start_date,contracts.status  FROM contract_Disbursement JOIN contracts ON contract_Disbursement.contract_id = contracts.contract_id WHERE contract_Disbursement.contract_id = '101' LIMIT $startIndex, $itemsPerPage";
$contractId = $_GET['contract_id'];
$query = "SELECT contract_Disbursement.*, contracts.budget, contracts.budget_spent,contracts.owner,contracts.start_date,contracts.status  
FROM contract_Disbursement JOIN contracts ON contract_Disbursement.contract_id = contracts.contract_id 
WHERE contract_Disbursement.contract_id = '$contractId' ";

$result = mysqli_query($GLOBALS['dbConnect'], $query);

if ($result) {
    $contracts = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $contract_data = array(
            'message' => 'success',
            'contract_id' => $row["contract_id"],
            'reference' => $row["reference"],
            'amount' => $row["amount"],
            'payment_mode' => $row["payment_mode"],
            'payment_date' => $row["payment_date"],
            'budget_spent' => $row["budget_spent"],
            'budget' => $row["budget"],
            'owner' => $row["owner"],
            'date' => $row["start_date"],
            'status' => $row['status']
            // 'budget_spent' => $row["budget_spent"],
        );
        $contracts[] = $contract_data;
    }

    echo json_encode($contracts);
} else {
    echo json_encode(array('message' => 'An error occurred.'));
}










mysqli_close($GLOBALS['dbConnect']);



?>
