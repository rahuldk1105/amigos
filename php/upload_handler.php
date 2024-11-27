<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.html");
    exit;
}

$target_dir = "../uploads/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

foreach ($_FILES['photos']['tmp_name'] as $key => $tmp_name) {
    $file_name = basename($_FILES['photos']['name'][$key]);
    move_uploaded_file($tmp_name, $target_dir . $file_name);
}

foreach ($_FILES['videos']['tmp_name'] as $key => $tmp_name) {
    $file_name = basename($_FILES['videos']['name'][$key]);
    move_uploaded_file($tmp_name, $target_dir . $file_name);
}

echo "<script>alert('Files uploaded successfully!'); window.location='../index.html';</script>";
?>
