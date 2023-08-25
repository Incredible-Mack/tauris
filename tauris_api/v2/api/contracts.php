<?php
include('../inc/common.php');
 verifyMethod("GET", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 
header('Content-Type: application/json');

$itemsPerPage = 3;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // Get page from query parameter, default to 1

$startIndex = ($page - 1) * $itemsPerPage;

$query = "SELECT contracts.*, bets_user.username
FROM contracts
JOIN bets_user ON contracts.owner COLLATE utf8mb4_general_ci = bets_user.username COLLATE utf8mb4_general_ci
WHERE bets_user.username = 'Mack' LIMIT $startIndex, $itemsPerPage";

$result = mysqli_query($GLOBALS['dbConnect'], $query);

if ($result) {
    $contracts = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $contract_data = array(
            'message' => 'success',
            'id' => $row["id"],
            'start_date' => $row["start_date"],
            'end_date' => $row["end_date"],
            'contract_id' => $row["contract_id"],
            'budget' => $row["budget"],
            'budget_spent' => $row["budget_spent"],
            'status' => $row["status"],
        );
        $contracts[] = $contract_data;
    }
    
    echo json_encode($contracts);
} else {
    echo json_encode(array('message' => 'An error occurred.'));
}

mysqli_close($GLOBALS['dbConnect']);



?>
