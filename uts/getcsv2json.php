<?php

function csvToJson($csvUrl) {
    $csvData = [];
    
    $fp = fopen($csvUrl, 'r');
    $headers = fgetcsv($fp); // Get column headers

    $data = array();
    while (($row = fgetcsv($fp))) {
        $data[] = array_combine($headers, $row);
    }

    // return json_encode($jsonArray);
    fclose($fp);
    print_r($data);
    return $data;
}

$csvUrl = 'datapribadi.csv';
$jsonData = csvToJson($csvUrl);

header('Content-Type: application/json');
?>
