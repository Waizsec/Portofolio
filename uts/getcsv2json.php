<?php

function csvToJson($csvUrl) {
    $csvData = [];
    
    $fp = fopen($csvUrl, 'r');
    $headers = fgetcsv($fp); // Get column headers

    $data = array();
    while (($row = fgetcsv($fp))) {
        $data[] = array_combine($headers, $row);
    }
    // fclose($fp);
    // print_r($data);

    // $jsonArray = [];

    // foreach ($data as $row) {
    //     $jsonArrayItem = $row;
    //     $jsonArray[] = $jsonArrayItem;
    // }

    // return json_encode($jsonArray);
    return $data;
}

$csvUrl = 'datapribadi.csv';
$jsonData = csvToJson($csvUrl);

// header('Content-Type: application/json');
?>
