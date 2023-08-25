<?php
	include('../inc/common.php');

	function syncElements() { 
		$postParameters = json_decode(file_get_contents('php://input'), true);
      $col = $postParameters["column"];
      $db = $postParameters["database"];

      $query = "SELECT '$col', COUNT('$col') FROM '$db' GROUP BY '$col' HAVING COUNT('$col') > 1;";
      $result = mysqli_query($GLOBALS['dbConnect'], $query);
      $total = mysqli_num_rows($result);
      $response = [];

      if($total > 0) {
         while($data = mysqli_fetch_assoc($result)) {
            $res[] = $data;
         }

         $response = array(
            'status' => 1,
            'total' => $total,
            'records' => $res
         );
      }

      header('Content-Type: application/json');
      echo json_encode($response);
   }

   syncElements();
?>