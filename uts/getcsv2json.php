<?php
function csv_to_json($file_path) {
    $csv = array_map('str_getcsv', file($file_path));
    $json = json_encode($csv);

    return $json;
}

$csv_file_path = 'datapribadi.csv';

if (file_exists($csv_file_path)) {
    $json_data = csv_to_json($csv_file_path);
    header('Content-Type: application/json');
    echo $json_data;
} else {
    echo 'CSV file not found.';
}
?>
