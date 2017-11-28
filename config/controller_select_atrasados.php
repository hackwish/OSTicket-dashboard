<?php
	include 'db.php';

	$sql = "
		SELECT tkt.staff_id, stf.username, count(tkt.ticket_id) as cant
		FROM osticket.ost_ticket tkt
		left join osticket.ost_staff stf
		on tkt.staff_id = stf.staff_id
		where tkt.isoverdue=1
		group by tkt.staff_id 
		order by cant desc;";

	$result_atrasados_users = $conn->query($sql) or die('Query failed: ' . mysql_error());

 ?>