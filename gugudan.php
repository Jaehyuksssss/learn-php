<?php

function gugu($dan) {
    for ($i = 1; $i <= 9; $i++) {
        printf("%d X %d = %d<br/>", $dan, $i, $dan * $i);
    }
}

function gugu2($dan) {
    $result = '';
    for ($i = 1; $i <= 9; $i++) {
        $result = $result . $dan . "X" . $i . "=" . $dan * $i . "<br/>";
    }
    return $result;
}

echo "<h1>구구단 출력함수</h1>";
gugu(2);
echo gugu2(3);

//javascript는 천사였다...
// printf와 print_r의 차이점을 기억하자
?>
