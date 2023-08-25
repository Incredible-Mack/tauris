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

if(isset($_GET['id'])){
   $id = $_GET['id'];
    $query = "SELECT teams.fullname, teams.email, teams.role,teams.phonenumber, assigned_teams.email, 
    teams.avatar,assigned_teams.task_id, project_tasks.status FROM assigned_teams JOIN teams ON 
    assigned_teams.email = teams.email JOIN project_tasks ON assigned_teams.task_id = project_tasks.task_id WHERE teams.id = '$id' GROUP BY assigned_teams.task_id, assigned_teams.email ";

    $result = mysqli_query($GLOBALS['dbConnect'], $query);

    if ($result) {
         $project_id = $_GET['project_id'];
            $projects = array();
            $completed = $assigned = $inprogress = $pending = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                if($row["status"] === 'completed' )
                {
                    $completed = $completed + 1;
                }else if ($row["status"] === 'in progress')
                {
                    $inprogress = $inprogress + 1;   
                }elseif ($row["status"] === 'Pending') 
                {
                    $pending = $pending + 1;
                }
                $assigned += 1; 
                $contract_data = array(
                    'message' => 'success',
                    'fullname' => $row["fullname"],
                    'role' => $row["role"],
                    'phonenumber' => $row["phonenumber"],
                    'avatar' => $row["avatar"],
                    'inprogress'=> $inprogress,
                    'completed' => $completed,
                    'pending' => $pending,
                    'assigned' => $assigned,
                    'email' => $row["email"],
                );
                $projects[] = $contract_data;
            }

            echo json_encode($projects);
        } else {
            echo json_encode(array('message' => 'An error occurred.'));
    }
}





$proid = $_SESSION['project_id'];

if(isset($_GET['project_id'])){
   

    $project_id = $_GET['project_id'];
    $query = "SELECT projects.project_id, projects.budget, projects.budget_spent, project_tasks.*, teams.avatar FROM project_tasks JOIN projects ON project_tasks.project_id = projects.project_id JOIN assigned_teams ON project_tasks.task_id = assigned_teams.task_id JOIN teams ON assigned_teams.email = teams.email WHERE projects.project_id = '$project_id' 
    ";

    $result = mysqli_query($GLOBALS['dbConnect'], $query);

    if ($result) {
         $project_id = $_GET['project_id'];
            $projects = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $contract_data = array(
                    'message' => 'success',
                    'task' => $row["task"],
                    'end_date' => convert_date($row["end_date"]),
                    'status' => $row["status"],
                    'task_id' => $row["task_id"],
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



$query = "SELECT projects.project_id, projects.budget, 
projects.budget_spent, project_tasks.*, teams.avatar
 FROM project_tasks JOIN projects ON project_tasks.project_id 
 = projects.project_id JOIN assigned_teams ON project_tasks.task_id = 
 assigned_teams.task_id JOIN teams ON assigned_teams.email = teams.email 
 WHERE teams.id = '1' 

";



mysqli_close($GLOBALS['dbConnect']);

?>



