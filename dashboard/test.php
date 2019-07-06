<?php

$date1=date_create("now");
$date3="2017-12-12";
$date2=date_create($date3);
$diff=date_diff($date1,$date2);
echo $diff->format("%a days");




 ?>
