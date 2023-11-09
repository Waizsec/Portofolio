<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    function sanitizeInput($input) {
        return htmlspecialchars(trim($input));
    }

    $id = sanitizeInput($_POST['id']);
    $f_name = sanitizeInput($_POST['f_name']);
    $l_name = sanitizeInput($_POST['l_name']);
    $email = sanitizeInput($_POST['email']);
    $email2 = sanitizeInput($_POST['email2']);
    $profesi = sanitizeInput($_POST['profesi']);

    if (empty($id) || empty($f_name) || empty($l_name) || empty($email) || empty($email2) || empty($profesi)) {
        echo "ada yang kosong";
        exit();
    }

    $csv_data = "\n$id, $f_name, $l_name, $email, $email2, $profesi";

    $csv_file = "datapribadi.csv";

    echo $csv_data;

    if (file_put_contents($csv_file, $csv_data, FILE_APPEND) !== false) {
        header("Location: index.php");
    } else {
        echo "Error Inputing Data";
    }
} else {
    echo "This page is for request POST only";
}
?>
