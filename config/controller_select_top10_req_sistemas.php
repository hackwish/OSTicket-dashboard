<?php
include 'db.php';

$sql = "
SELECT tkt.number, usr.name as user, cda.subject, tkt.created, sta.name as status, tkt.status_id
FROM osticket.ost_ticket tkt
inner join osticket.ost_ticket_status sta
on tkt.status_id = sta.id
inner join osticket.ost_user usr
on tkt.user_id=usr.id
inner join osticket.ost_help_topic top
on tkt.topic_id=top.topic_id
inner join osticket.ost_ticket__cdata cda
on tkt.ticket_id=cda.ticket_id
WHERE tkt.number like '%SIST%'
order by tkt.ticket_id desc
limit 10;";

$result = $conn->query($sql) or die('Query failed: ' . mysql_error());

 ?>