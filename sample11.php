<?php 

function sigma ($limit){

$sum = 0;
for($i=1; $i<=$limit; $i++){
    $sum = $sum + $i;

} 
return $sum; 
}

echo "10까지의 합은 " . sigma(10) . "입니다<br/>";
echo "100까지의 합은 " . sigma(100) . "입니다<br/>";
echo "1000까지의 합은 " . sigma(1000) . "입니다<br/>";
echo "10000까지의 합은 " . sigma(10000) . "입니다<br/>";

?>