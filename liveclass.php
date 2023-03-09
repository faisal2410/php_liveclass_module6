<?php
$date1=date_create("2013-12-10");

$date2=date_create("2013-11-10");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%h hours");
