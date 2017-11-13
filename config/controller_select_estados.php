<?php
	include 'db.php';

	$sql = "
	select sta.name, count(tkt.status_id) as total
	from osticket.ost_ticket tkt 
	inner join osticket.ost_ticket_status sta
	on tkt.status_id = sta.id
	group by tkt.status_id
	order by total desc;";

	$result = $conn->query($sql) or die('Query failed: ' . mysql_error());

 ?>