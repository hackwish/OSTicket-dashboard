<?php 
//setting header to json
header('Content-Type: application/json');

include 'controller_select_estados.php';

$data = array();
foreach ($result as $row) {
  $data[] = $row;
}
  $result->close();
  $conn->close();

print json_encode($data);


 ?>