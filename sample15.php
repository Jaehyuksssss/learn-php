<?php

$flowers = array("장미", "수국", "백합", "국화", "튤립");

$key = "수국";

// 위치 찾기
$pos = array_search($key, $flowers);

if ($pos !== false) {
    echo $key . "의 위치는 " . $pos . "입니다.";
} else {
    echo $key . "는 존재하지 않습니다.";
}


// <?php 

// $flowers = array("장미", "수국", "백합", "국화", "튤립");

// $key = "장미";

// //위치찾기

// $pos = array_search($key, $flowers);
// echo $pos;

// if($pos)
// {
//     echo $key . "의 위치는 " . $pos . "입니다.";

// }else{
//     echo $key . "는 존재하지 않습니다.";
// }

// ?>

?>
