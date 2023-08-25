<?php
	include('../inc/common.php');

	function mergeSimulatorElements() { 
      // $counter_new = 1;
      // $counter_update = 1;
      // $counter_quiz = 0;

      $query = "SELECT * FROM bets_course_element";
      $result = mysqli_query($GLOBALS['dbConnect'], $query);

      while($data = mysqli_fetch_assoc($result)) {
         $component_id = $data["id"];
         $component_name = $data["name_en"];
         doObjectItem($component_id, $component_name);
      }

      $response = array(
         'status' => 1,
         'updated' => $counter_update. ' Records Updated',
         'new_record' => $counter_new. ' New Records Added',
         'total_quiz' => $total_quiz. ' Quizzes Updated',
      );

      header('Content-Type: application/json');
      echo json_encode($response);
   }

   function doObjectItem($component_id, $component_name) {
      $object_id = 14;
      $query = "SELECT * FROM bets_quiz_panel_object_item WHERE name_en = '$component_name'";
      $result = mysqli_query($GLOBALS['dbConnect'], $query);
      
      if(mysqli_num_rows($result) > 0) {
         $data_two = mysqli_fetch_assoc($result);
         $id = $data_two["id"];
         
         $query = "UPDATE bets_quiz_panel_object_item SET component_uid = $component_id WHERE id = $id";
         if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
            triggerError('update_query', null);
         }
         // $counter_update++;

         $quiz_change = checkIfHasQuestion($id); // Change existing Quiz options
         // $total_quiz = $counter_quiz + $quiz_change;

      }else{
         $query = "INSERT INTO bets_quiz_panel_object_item SET object_id = $object_id, name_en = '$component_name', name_es = 'Not Available'";
         // echo $query; exit();
         if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
            triggerError('insert_query', null);
         }
         // $counter_new++;
      }

   }

   function checkIfHasQuestion($component_id) {
      $query = "SELECT * FROM bets_quiz_option WHERE item_list = $id";
      $result = mysqli_query($GLOBALS['dbConnect'], $query);
      // $counter_quiz = 0;
      
      if(mysqli_num_rows($result) > 0) {
         // $counter_quiz = 1;
         while($data = mysqli_fetch_assoc($result)) {
            $id = $data["id"];

            $query = "UPDATE bets_quiz_option SET item_list = $component_id, item_answer = $component_id WHERE id = $id";
            if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
               triggerError('update_query', null);
            }
            // $counter_quiz++;
         }
      }
      // return $counter_quiz;
   }

   mergeSimulatorElements();
?>
