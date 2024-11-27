<?php
// Start the session
session_start();

// Check if a session exists
if (isset($_SESSION['username'])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header("Location: ../login.html");
    exit();
} else {
    // If no session exists, redirect to login page
    header("Location: ../login.html");
    exit();
}
?>
