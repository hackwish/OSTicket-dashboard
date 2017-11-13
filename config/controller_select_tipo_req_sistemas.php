<?php
include 'db.php';

$sql = "
select tkt.topic_id, top.topic, count(tkt.topic_id) as total
from osticket.ost_ticket tkt
inner join osticket.ost_help_topic top
on tkt.topic_id = top.topic_id
WHERE tkt.number like '%SIST%'
group by tkt.topic_id
order by total desc;";

$result = $conn->query($sql) or die('Query failed: ' . mysql_error());

 ?>