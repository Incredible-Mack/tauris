<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function updateProfilePhoto() {
		$postParameters = json_decode(file_get_contents('php://input'), true);
		$id = $postParameters["id"];
		$old = $postParameters["old"];
		$base64 = $postParameters["photoData"];
		$avatar = convertBase64ToImage($base64, $id, $old);

		$query = "UPDATE bets_user SET avatar = '$avatar' WHERE id = $id";
			if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('update_query', null);
			}
			
		$response = array(
			'avatar' => $avatar
		);

		doSuccess($response, null);
	}

	function convertBase64ToImage($base64, $id, $old) {
		$file_name = md5($id.rand()).'.png';
		$bin = base64_decode($base64);
		$image = imageCreateFromString($bin);
		if (!$image) {
			die('Base64 value is not a valid image');
		}

		$img_file = 'avatar/'.$file_name;
		imagepng($image, $img_file, 0);


		///////// Delete previous profile photo //////////
		$file_pointer = 'avatar/'.$old; 
			if (!unlink($file_pointer)) { 
				// do nothing; 
			}else{ 
				// do nothing; 
			} 
		///////// Finish Deleting previous profile photo //////////


		return $file_name;
	}

	updateProfilePhoto(); // Make call and return response
?>