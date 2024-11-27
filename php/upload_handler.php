<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.html");
    exit;
}

$target_dir = "../uploads/";

// Check if uploads directory exists, create if not
if (!file_exists($target_dir)) {
    if (!mkdir($target_dir, 0777, true)) {
        die("Failed to create upload directory.");
    }
}

// Check if any files are uploaded
if (empty($_FILES['photos']['name'][0]) && empty($_FILES['videos']['name'][0])) {
    die("No files selected for upload.");
}

// Process photo uploads
foreach ($_FILES['photos']['tmp_name'] as $key => $tmp_name) {
    if ($tmp_name) {
        $file_name = basename($_FILES['photos']['name'][$key]);
        $target_file = $target_dir . $file_name;

        if (move_uploaded_file($tmp_name, $target_file)) {
            echo "Photo uploaded: $file_name<br>";
        } else {
            echo "Failed to upload photo: $file_name<br>";
        }
    }
}

// Process video uploads
foreach ($_FILES['videos']['tmp_name'] as $key => $tmp_name) {
    if ($tmp_name) {
        $file_name = basename($_FILES['videos']['name'][$key]);
        $target_file = $target_dir . $file_name;

        if (move_uploaded_file($tmp_name, $target_file)) {
            echo "Video uploaded: $file_name<br>";
        } else {
            echo "Failed to upload video: $file_name<br>";
        }
    }
}

echo "<script>alert('Files uploaded successfully!'); window.location='../index.html';</script>";
?>
