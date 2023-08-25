<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function doCleanup() {
		$postParameters = json_decode(file_get_contents('php://input'), true);

		$query = "SELECT id, name_en FROM bets_quiz_panel_object_item WHERE component_uid IS NULL";
      // echo $query; exit;
		$result = mysqli_query($GLOBALS['dbConnect'], $query);
		$total = 0;
		$response = [];

		if(mysqli_num_rows($result) > 0) { 
			while ($data = mysqli_fetch_assoc($result)) {
				$res = findComponent($data["id"], $data["name_en"]);
				
				if($res) {
					$total = $total + 1;
					$response[] = $res;
				}
			}
		}

		doSuccess($response, $total);
	}

	function findComponent($quiz_object_id, $quiz_object_name) {
		$query = "SELECT id, name_en FROM bets_course_element WHERE name_en = '$quiz_object_name'";
		$result = mysqli_query($GLOBALS['dbConnect'], $query);
		$total = mysqli_num_rows($result);
		$response = [];
		
		if($total > 0) { 
			$data = mysqli_fetch_assoc($result);
         $res = updateQuizObjectItem($quiz_object_id, $data["id"]);
         $data["count"] = $res;
         $response = $data;
		}

		return $response;
	}

   function updateQuizObjectItem($quiz_object_id, $component_uid) {
      $response = 0;
      $query = "UPDATE bets_quiz_panel_object_item SET component_uid = $component_uid WHERE id = $quiz_object_id";
      if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
         triggerError('update_query', null);
      }

      $response = 1;
      
      return $response;
   }

   doCleanup();
?>

