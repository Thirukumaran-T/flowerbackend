<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$data = file_get_contents("data/products.json");
echo $data;
?>
