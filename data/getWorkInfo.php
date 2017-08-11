<?php
header("Content-Type:application/json");
$array = [];

$array[] = [
"name"=>"大学",
"date"=>"2005-2009"
];

$array[] = [
"name"=>"高中",
"date"=>"2001-2005"
];


$array[] = [
"name"=>"初中",
"date"=>"1999-2001"
];


echo json_encode($array);
?>