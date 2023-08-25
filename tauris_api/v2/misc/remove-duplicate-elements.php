<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function doCleanupDuplicate() {
		$postParameters = json_decode(file_get_contents('php://input'), true);

		$query = "SELECT id, name_en FROM bets_quiz_option WHERE item_list IS NOT NULL";
		$result = mysqli_query($GLOBALS['dbConnect'], $query);
		$total = 0;
		$response = [];

		if(mysqli_num_rows($result) > 0) { 
			while ($data = mysqli_fetch_assoc($result)) {
				$res = findComponent($data["item_list"]);
				
				if($res) {
					$sub_total = count($res);
					$total = $total + $sub_total;

					$response[] = $res;
				}
			}
		}

		doSuccess($response, $total);
	}

	function findComponent($component_ids) {
		$query = "SELECT id, name_en FROM bets_quiz_panel_object_item WHERE id IN ($component_ids)";
		// debugModeExit($query);
		$result = mysqli_query($GLOBALS['dbConnect'], $query);
		$total = mysqli_num_rows($result);
		$response = [];
		
		if($total > 0) { 
			while($data = mysqli_fetch_assoc($result)) {
				$res = checkForDuplicate($data["name_en"]);
				
				if($res) {
					$response[] = $res;
				}
			}
		}

		doSuccess($response, $total);
	}

	function checkForDuplicate($component_name) {
		$query = "SELECT id, name_en FROM bets_quiz_panel_object_item WHERE name_en = '$component_name' ORDER BY id ASC";
		$result = mysqli_query($GLOBALS['dbConnect'], $query);
		$total = mysqli_num_rows($result);
		$response = [];

		if($total > 1) { 
			$i = 0;
			while ($data = mysqli_fetch_assoc($result)) {
				$data["item_id"] = $data["id"];
				if($i > 0) {
					$data["item_id"] = $data["id"]." [DELETED]";
					$data["name_en"] = $data["name_en"]." [DELETED]";
					deleteDuplicate($data["id"]);
				}
				
				$response[] = $data;
				$i++;
			}
		}

		return $response;
	}
	
	function deleteDuplicate($component_id) {
		$query = "DELETE FROM bets_quiz_panel_object_item WHERE id = $component_id";
		mysqli_query($GLOBALS['dbConnect'], $query);

		return;
	}

	doCleanupDuplicate();
?>