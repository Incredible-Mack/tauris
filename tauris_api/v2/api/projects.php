<?php
include('../inc/common.php');
session_start();

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






$proid = $_SESSION['project_id'];

if(isset($_GET['project_id'])){
   

    $project_id = $_GET['project_id'];
    $query = "SELECT projects.project_id, projects.status AS projectStatus, teams.id, projects.start_date, projects.project_name, projects.budget, assigned_teams.email, projects.budget_spent, project_tasks.*, teams.avatar FROM project_tasks JOIN projects ON project_tasks.project_id = projects.project_id JOIN assigned_teams ON project_tasks.task_id = assigned_teams.task_id JOIN teams ON assigned_teams.email = teams.email WHERE projects.project_id = '$project_id'";

    $result = mysqli_query($GLOBALS['dbConnect'], $query);

    if ($result) {
         $project_id = $_GET['project_id'];
            $projects = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $contract_data = array(
                    'message' => 'success',
                    'task' => $row["task"],
                    'project_status' => $row["projectStatus"],
                    'end_date' => convert_date($row["end_date"]),
                    'status' => $row["status"],
                    'task_id' => $row["task_id"],
                    'start_date' => convert_date($row['start_date']),
                    'project_name' => $row['project_name'],
                    'project_id' => $row['project_id'],
                    'description' => $row['description'],
                    'teams_id' => $row['id'],
                    'avatar' => $row["avatar"],
                    'budget' => $row["budget"],
                    'budget_spent' => $row["budget_spent"],
                );
                $projects[] = $contract_data;
            }

            echo json_encode($projects);
        } else {
            echo json_encode(array('message' => 'An error occurred.'));
    }
}


if($_GET['data'] === 'files'){
    $query = "SELECT projects_files.* FROM projects_files JOIN projects ON projects_files.project_id = projects.project_id WHERE projects_files.project_id = '$proid' GROUP BY projects.project_id, projects_files.title";

    $result = mysqli_query($GLOBALS['dbConnect'], $query);

    if ($result) {
        $contracts = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $contract_data = array(
                'message' => 'success',
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
    $query = "SELECT projects_notes.* FROM projects_notes JOIN projects ON projects_notes.project_id = projects.project_id WHERE projects_notes.project_id = '$proid' GROUP BY projects_notes.details";

    $result = mysqli_query($GLOBALS['dbConnect'], $query);

    if ($result) {
        $contracts = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $contract_data = array(
                'message' => 'success',
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


if($_GET['data'] === 'teamsmember'){
    $query = "SELECT teams.*, assigned_teams.name, assigned_teams.task_id FROM teams JOIN assigned_teams ON teams.email = assigned_teams.email JOIN project_tasks ON assigned_teams.task_id = project_tasks.task_id WHERE project_tasks.project_id = '$proid' GROUP BY teams.id";

    $result = mysqli_query($GLOBALS['dbConnect'], $query);
    
    if ($result) {
        $contracts = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $contract_data = array(
                'message' => 'success',
                'fullname' => $row["fullname"],
                'email' => $row["email"],
                'role' => $row["role"],
                'teams_id' => $row['id'],
                'phonenumber' => $row["phonenumber"],
                'avatar' => $row["avatar"],
                'status' => $row["status"],

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



