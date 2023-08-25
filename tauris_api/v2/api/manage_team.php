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
    $query = "SELECT teams.*, contracts.contract_id, contracts.owner FROM contracts JOIN projects ON contracts.contract_id = projects.contract_id JOIN project_tasks ON projects.project_id = project_tasks.project_id JOIN assigned_teams ON project_tasks.task_id = assigned_teams.task_id JOIN teams ON assigned_teams.email = teams.email WHERE contracts.owner = 'Mack' GROUP BY teams.id;";

    $result = mysqli_query($GLOBALS['dbConnect'], $query);

    if ($result) {
        $projects = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $contract_data = array(
                'message' => 'success',
                'fullname' => $row["fullname"],
                'id' => $row['id'],
                'email' => $row["email"],
                'role' => $row["role"],
                'phonenumber' => $row["phonenumber"],
                'avatar' => $row["avatar"],
                'status' => $row["status"],
                
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