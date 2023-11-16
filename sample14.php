<?php

$arr = array(1,2,3,4);

$filteredArr = array_filter($arr, function($value){
    return $value % 2 == 0;
});

$reIndexArr = array_values($filteredArr);
print_r($reIndexArr);
echo "<br/>";   

print("1<PRE>");
print_r($reIndexArr);
print("2</PRE>");


?>