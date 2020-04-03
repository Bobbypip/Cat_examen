<?php
$json = '[{"name":"eggs","price":1},{"name":"coffee","price":9.99},{"name":"rice","price":4.04},{"name":"steak","price":4.04},{"name":"bones","price":3},{"name":"akk","price":4.04},{"name":"abb","price":4.04}]';
$json_arr = json_decode($json, true);
$por_precios = [];

foreach($json_arr as $key => $row){
    $por_precios[$key] = $row['price'];
}

var_dump($por_precios);

array_multisort($por_precios, SORT_ASC, $json_arr);

$json_encode = json_encode($json_arr);
var_dump($json_encode);

//var_dump($json_arr);

/*
foreach($json_arr as $key => $row){
    $por_nombres[$key] = $row['name'];
}

var_dump($por_nombres);

array_multisort($por_nombres, SORT_ASC, $json_arr);

var_dump($json_arr);


var_dump($json_arr[0]['name']);
var_dump(sizeof($json_arr));

for( $i = 0; $i < sizeof($json_arr); $i++ )
{
    array_push($initial_arr, $json_arr[$i]['price']);
    echo($i);
}


asort($initial_arr);
asort($json_arr[$i]);

var_dump($initial_arr);

$json_encode = json_encode($json_arr);
var_dump($json_encode);
*/