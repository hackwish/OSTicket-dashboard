<?php 

include 'controller_select_staff.php';

    while($row = $result_staff->fetch_assoc()) {
    	$staff_user_id = $row['staff_id'];

   //  	$staff_user = array($row['staff_id'],$row['username']);
   //  	$arrlength = count($staff_user);

   //  	for($x = 0; $x < $arrlength; $x++) {
   //  		echo $staff_user[$x];
	  //   	echo "<br>";
   //  			};


	  //   		while($row = $result_staff_status->fetch_assoc()) {
	  //   			$staff_stat = array($row['status_id'],$row['name']);
	  //   			$arrlengthstat = count($staff_stat);
	    			
	  //   			for($s = 0; $s < $arrlength; $s++) {
		 //    			echo $staff_stat[$s];
			//     		echo "<br>";
			//     	};


			// };
    };

    while($row = $result_staff_status->fetch_assoc()) {  
    	$staff_user_status = $row['name'];
    };  

    echo $staff_user_id;
    echo $staff_user_status;


?>