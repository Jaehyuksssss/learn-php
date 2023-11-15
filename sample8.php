<?php 

$work_time=50;
$per_pay= 10000;


$base_pay= $work_time * $per_pay;
$over_pay= 0;

if($work_time > 40){
    $over_pay= ($work_time - 40) * $per_pay * 0.5;

};

echo "당신의 기본급여는 " . $base_pay . "원 입니다<br/>";
echo "당신의 초과수당은 " . $over_pay . "원 입니다<br/>";

?>
