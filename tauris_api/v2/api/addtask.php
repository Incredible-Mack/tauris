<?php
include('../inc/common.php');

verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$conn = $GLOBALS['dbConnect'];

 $target_title = $_POST['target_title'];
 $target_details = $_POST['target_details'];
 $project = $_POST['project'];

 $assignTeam = $_POST['users-list-tags'];
 $start_date = $_POST['start_date'];
 $due_date = $_POST['due_date'];

  $target_duration = $_POST['target_duration'];
  $project_status = $_POST['project_status'];

 


  $selectedTagsArray = json_decode($assignTeam, true);
  
function sanitizeInput($input, $conn)
{
    // 1. Check if input is empty
    if (empty($input)) {
        return "Input is empty.";
    }

    // 2. Trim whitespace from input
    $input = trim($input);

    // 3. Strip HTML tags from input
    $input = strip_tags($input);

    // 4. Convert special characters to HTML entities
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    // 5. Perform additional validation if needed
    if (strlen($input) > 0) {
        // Escaping user input before using in SQL queries
        $input = mysqli_real_escape_string($conn, $input);
        return $input;
    } else {
        return false; // or handle the invalid input in an appropriate way
    }
}

$target_duration = sanitizeInput($target_duration, $GLOBALS['dbConnect']);
$assignTeam = sanitizeInput($assignTeam, $GLOBALS['dbConnect']);

$target_title = sanitizeInput($target_title, $GLOBALS['dbConnect']);
$description = sanitizeInput($target_details, $GLOBALS['dbConnect']);
$project = sanitizeInput($project, $GLOBALS['dbConnect']);


$project_id = 301; 
echo $start_date = sanitizeInput($start_date, $GLOBALS['dbConnect']);
$end_date = sanitizeInput($due_date, $GLOBALS['dbConnect']);


$project_status = sanitizeInput($project_status, $GLOBALS['dbConnect']);


$sql = "SELECT * FROM `projects` WHERE project_name =  '$project' LIMIT 1";
$que = mysqli_query($conn, $sql);
if($que)
{
    $row = mysqli_fetch_assoc($que);
    $project_id = $row['project_id'];
}



if ($target_title !== false && $description !== false && $project !== false 
    && $start_date !== false && $end_date !== false && $target_duration !== false && $project_status !== false
) {
    $timestamp = time(); // Current Unix timestamp
    $random_number = mt_rand(1000, 9999); // Random 4-digit number
    $task_id = $timestamp . $random_number;

    // Prepare and bind the parameters for project_tasks table
    $stmt = $conn->prepare("INSERT INTO project_tasks (project_id, task, description, start_date, end_date, status, task_id, duration) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssss", $project_id, $target_title, $description, $start_date, $end_date, $project_status, $task_id, $target_duration);

    // Execute the statement for project_tasks
    if ($stmt->execute()) {
        // Prepare and bind the parameters for assigned_teams table
        $stmt2 = $conn->prepare("INSERT INTO assigned_teams (task_id, email) VALUES (?, ?)");
        $stmt2->bind_param("ss", $task_id, $assignTeam);

        // Loop through the selected tags and insert them into the database
       

        if ($selectedTagsArray) {
            foreach ($selectedTagsArray as $tagData) {
                if (isset($tagData['email'])) {
                    $assignTeam = $tagData['email'];

                    if ($stmt2->execute()) {
                        
                    } else {
                        echo json_encode(array('message' => $stmt2->error));
                    }
                } else {
                    echo json_encode(array('message' => "Please assigne team to the task"));
                }
            }
        } else {
            echo json_encode(array('message' => "Please Try again something went wrong"));
        }


        // Close the statement for assigned_teams
        $stmt2->close();
        echo json_encode(array('success' => "Data inserted successfully."));
    
    } else {
        echo json_encode(array('message' => $stmt->error));
    }

    // Close the statement for project_tasks
    $stmt->close();
    $conn->close(); // Close the database connection
} else {
    echo json_encode(array('message' => 'Please fill all input fields.'));
}




// mysqli_close($GLOBALS['dbConnect']);