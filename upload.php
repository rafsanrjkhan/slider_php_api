<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadDir = 'uploads/'; // Directory where images will be stored
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        echo 'File is valid, and was successfully uploaded.';
    } else {
        echo 'Upload failed.';
    }
}
?>
