<?php 

function showArray ($array){
for($i=0; $i<count($array); $i++){
    echo $array[$i]."<br/>";
}

}

echo "<br>----함수를 이용한 배열 출력하기 ---<br/>";
$array = Array("가","나","다","라","마");
showArray($array);

?>