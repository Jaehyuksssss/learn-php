<?php 
//URL : http://localhost/Test/sample7.php?member=1 회원
//URL : http://localhost/Test/sample7.php?member=0 비회원

$member = $_GET["member"];

$point = 0;

if($member === 1){
    $point = $point + 1000;
}

echo "당신의 포인트는 현재 " . $point . " 입니다<br/>";

?>