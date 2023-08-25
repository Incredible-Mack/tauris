<?php
include('../inc/common.php');

verifyMethod("GET", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 
header('Content-Type: application/json');

// $itemsPerPage = 3;
// $page = isset($_GET['page']) ? intval($_GET['page']) : 1; // Get page from query parameter, default to 1

// $startIndex = ($page - 1) * $itemsPerPage;

// $query = "SELECT contract_document.*, contracts.budget, contracts.budget_spent,contracts.owner,contracts.start_date,contracts.status  FROM contract_document JOIN contracts ON contract_document.contract_id = contracts.contract_id WHERE contract_document.contract_id = '101' LIMIT $startIndex, $itemsPerPage";

if($_GET['data'] === 'document'){
    $query = "SELECT contract_document.*, contracts.status  
    FROM contract_document JOIN contracts ON contract_document.contract_id = contracts.contract_id WHERE contract_document.contract_id = '101' ";

    $result = mysqli_query($GLOBALS['dbConnect'], $query);

    if ($result) {
        $contracts = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $contract_data = array(
                'message' => 'success',
                'contract_id' => $row["contract_id"],
                'name' => $row["title"],
                'size' => $row["size"],
                'date_modified' => $row["date_modified"],
                
                // 'budget_spent' => $row["budget_spent"],
            );
            $contracts[] = $contract_data;
        }

        echo json_encode($contracts);
    } else {
        echo json_encode(array('message' => 'An error occurred.'));
    }
}


if($_GET['data'] === 'notes'){
    $query = "SELECT contract_note.* FROM contract_note JOIN contracts ON contract_note.contract_id = contracts.contract_id WHERE contract_note.contract_id = '101' ";

    $result = mysqli_query($GLOBALS['dbConnect'], $query);

    if ($result) {
        $contracts = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $contract_data = array(
                'message' => 'success',
                'contract_id' => $row["contract_id"],
                'name' => $row["title"],
                'details' => $row["details"],
                'added_by' => $row["added_by"],
                'date_modified' => $row["date_modified"],
            );
            $contracts[] = $contract_data;
        }

        echo json_encode($contracts);
    } else {
        echo json_encode(array('message' => 'An error occurred.'));
    }
}













mysqli_close($GLOBALS['dbConnect']);



?>
