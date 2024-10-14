<?php

$category = $_GET['category'];
$item = $_GET['item'];

$data_file = file_get_contents('src/json/data.json');
$data = json_decode($data_file, true);

$space = $data[$category][$item];
$space_name = htmlspecialchars($space[key($space)]['name']);
$space_desc = htmlspecialchars($space[key($space)]['description']);
$space_cap = htmlspecialchars($space[key($space)]['capacity']);
$space_price = htmlspecialchars($space[key($space)]['price']);
$space_photos = $space[key($space)]['photos'];

?>