<?php
function sortByPriceAscending(string $jsonString) : string
{
    $json = $jsonString;
    $json_arr = json_decode($json, true);
    $por_precios = [];

    foreach($json_arr as $key => $row){
        $por_precios[$key] = $row['price'];
    }

    array_multisort($por_precios, SORT_ASC, $json_arr);

    $json_encode = json_encode($json_arr);

    return $json_encode;
}

echo sortByPriceAscending('[{"name":"eggs","price":1},{"name":"coffee","price":9.99},{"name":"rice","price":4.04}]');
