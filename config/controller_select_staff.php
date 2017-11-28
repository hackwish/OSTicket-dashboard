<?php
	include 'db.php';

	//STAFF
	$sql_staff = "SELECT stf.staff_id, stf.username FROM osticket.ost_staff stf;";

	$result_staff = $conn->query($sql_staff) or die('Query failed: ' . mysql_error());

	//ESTADOS TICKETS STAFF
	$sql_staff_status = "
		SELECT tkt.staff_id, tkt.status_id, sta.name 
		FROM osticket.ost_ticket tkt
		INNER JOIN osticket.ost_ticket_status sta
		ON tkt.status_id = sta.id
		WHERE tkt.staff_id=3 AND tkt.staff_id NOT IN(0)
		GROUP BY tkt.staff_id, tkt.status_id;
		";

	$result_staff_status = $conn->query($sql_staff_status) or die('Query failed: ' . mysql_error());

 ?>