<?php

//URL : http://localhost/Test/sample4.php?width=6&height=10


$width = $_GET["width"];
$height = $_GET["height"];

$area = $width * $height;
$perimeter = 2 * ($width + $height);

echo "사각형의 넓이 : " . $area . "<br/>";
echo "사각형의 둘레 : " . $perimeter . "<br/>";

?>
