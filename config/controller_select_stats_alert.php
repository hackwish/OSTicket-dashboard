<?php
include 'db.php';

// RESUMEN HOY

$sql_atrasados_hoy = "
SELECT count(tkt.ticket_id) as ticket FROM osticket.ost_ticket tkt 
where tkt.isoverdue=1 AND tkt.created >= CURDATE() && tkt.created < (CURDATE() + INTERVAL 1 DAY);";

$result_atrasados_hoy = $conn->query($sql_atrasados_hoy) or die('Query failed: ' . mysql_error());

$sql_abiertos_hoy = "
SELECT count(tkt.ticket_id) as ticket FROM osticket.ost_ticket tkt
where tkt.status_id in(1,6,7,8) AND tkt.created >= CURDATE() && tkt.created < (CURDATE() + INTERVAL 1 DAY);";

$result_abiertos_hoy = $conn->query($sql_abiertos_hoy) or die('Query failed: ' . mysql_error());

$sql_cerrados_hoy = "
SELECT count(tkt.ticket_id) as ticket FROM osticket.ost_ticket tkt
where tkt.status_id in(2,3,4) AND tkt.created >= CURDATE() && tkt.created < (CURDATE() + INTERVAL 1 DAY);";

$result_cerrados_hoy = $conn->query($sql_cerrados_hoy) or die('Query failed: ' . mysql_error());

$sql_total_hoy = "
SELECT count(tkt.ticket_id) as ticket FROM osticket.ost_ticket tkt
where tkt.created >= CURDATE() && tkt.created < (CURDATE() + INTERVAL 1 DAY);";

$result_total_hoy = $conn->query($sql_total_hoy) or die('Query failed: ' . mysql_error());

// RESUMEN TOTAL ACUMULADO

$sql_atrasados = "
SELECT count(tkt.ticket_id) as ticket FROM osticket.ost_ticket tkt 
where tkt.isoverdue=1;";

$result_atrasados = $conn->query($sql_atrasados) or die('Query failed: ' . mysql_error());

$sql_abiertos = "
SELECT count(tkt.ticket_id) as ticket FROM osticket.ost_ticket tkt
where tkt.status_id in(1,6,7,8);";

$result_abiertos = $conn->query($sql_abiertos) or die('Query failed: ' . mysql_error());

$sql_cerrados = "
SELECT count(tkt.ticket_id) as ticket FROM osticket.ost_ticket tkt
where tkt.status_id in(2,3,4);";

$result_cerrados = $conn->query($sql_cerrados) or die('Query failed: ' . mysql_error());

$sql_total = "
SELECT count(tkt.ticket_id) as ticket FROM osticket.ost_ticket tkt;";

$result_total = $conn->query($sql_total) or die('Query failed: ' . mysql_error());



 ?>