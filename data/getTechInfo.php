<?php
header("Content-Type:application/json");
$array = [];

$array[] = [
"name"=>"JS",
"level"=>"9"
];

$array[] = [
"name"=>"HTML",
"level"=>"5"
];


$array[] = [
"name"=>"CSS",
"level"=>"8"
];


echo json_encode($array);
?>