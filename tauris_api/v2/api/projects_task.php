<?php
include('../inc/common.php');

// verifyMethod("GET", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 
// header('Content-Type: application/json');

//for pagination
// $itemsPerPage = 3;
// $page = isset($_GET['page']) ? intval($_GET['page']) : 1; // Get page from query parameter, default to 1
// $startIndex = ($page - 1) * $itemsPerPage;
// $query = "SELECT projects.*, contracts.budget, contracts.budget_spent,contracts.owner,contracts.start_date,contracts.status  FROM projects JOIN contracts ON projects.contract_id = contracts.contract_id WHERE projects.contract_id = '101' LIMIT $startIndex, $itemsPerPage";

function convert_date($date){
    $dateString = $date;
    $timestamp = strtotime($dateString);
    $formattedDate = date('M jS, Y', $timestamp);
    return $formattedDate; 

}

function get_projects_data(){
    $query = "SELECT projects.*
    FROM projects JOIN contracts ON projects.contract_id = contracts.contract_id WHERE projects.contract_id = '101' ";

    $result = mysqli_query($GLOBALS['dbConnect'], $query);

    if ($result) {
        $projects = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $contract_data = array(
                'message' => 'success',
                'start_date' => convert_date($row["start_date"]),
                'end_date' => convert_date($row["end_date"]),
                'contract_id' => $row["contract_id"],
                'budget' => $row["budget"],
                'status' => $row["status"],
                'project_id' => $row["project_id"],
                'project_name' => $row["project_name"],
                'project_manager' => $row["project_manager"],
            );
            $projects[] = $contract_data;
        }

        echo json_encode($projects);
    } else {
        echo json_encode(array('message' => 'An error occurred.'));
    }
} 

get_projects_data();


mysqli_close($GLOBALS['dbConnect']);


?>