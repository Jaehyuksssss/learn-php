<?php 

//URL : http://localhost/Test/sample10.php

$number = Array(10,20,30,40,50);
$result = 0;

foreach( $number as $key => $value){
    echo $key . " : " . $value . "<br/>";
}
//...;을 꼭 쓰자... 안쓰면 에러남
?>