<?php 

include 'controller_select_estados.php';

    while($row = $result->fetch_assoc()) {
        echo $row['name'];
        echo $row['total'];



}
 ?>