<?php
// URL: http://localhost/Test/sample5.php?seconds=45670

$seconds = $_GET['seconds'];

$temp = $seconds;
$hour = floor($temp / 3600);
$temp = $temp - $hour * 3600;
$minute = floor($temp / 60);
$temp = $temp % 60;
$sec = $temp;

echo $seconds."초는 ".$hour."시간 ".$minute."분 ".$sec."초 입니다.<br/>" ;
?>
