<?php 

$colors = array ("red", "green", "blue", "yellow");

array_push($colors, "purple", "pink");

foreach($colors as $value){
    echo $value . "<br/>";
}

print_r($colors);
?>