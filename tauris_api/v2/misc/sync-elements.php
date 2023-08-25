<?php
	include('../inc/common.php');

	function syncElements() { 
      $count_new = 1;
      $query = "SELECT id, name_en FROM bets_course_element";
      $result = mysqli_query($GLOBALS['dbConnect'], $query);

      while($data = mysqli_fetch_assoc($result)) {
         $component_id = $data["id"];
         $component_name = $data["name_en"];
         $counter = doObjectItem($component_id, $component_name);
         $count_new = $count_new + (int)$counter;
      }

      $response = array(
         'status' => 1,
         'new_record' => $counter. ' New Records Added'
      );

      header('Content-Type: application/json');
      echo json_encode($response);
   }

   function doObjectItem($component_id, $component_name) {
      $object_id = 14;
      $count = 0;
      $query = "SELECT * FROM bets_quiz_panel_object_item WHERE name_en = '$component_name'";
      $result = mysqli_query($GLOBALS['dbConnect'], $query);
      
      if(mysqli_num_rows($result) == 0) {
         $query = "INSERT INTO bets_quiz_panel_object_item SET component_uid = $component_id, object_id = $object_id, name_en = '$component_name', name_es = 'Not Available'";
         // echo $query; exit();
         if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
            triggerError('insert_query', null);
         }
         $count = 1;
      }

      return $count;
   }

   syncElements();
?>
