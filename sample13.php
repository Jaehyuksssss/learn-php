<!DOCTYPE html>
<?php 

$sentence = "<a href='http://www.naver.com'><h1>네이버</h1></a>";

//모든 태그 제거

$result = strip_tags($sentence);

echo $result."<br>";

$result2 = strip_tags($sentence,"<a>");
echo $result2."<br>";

?>