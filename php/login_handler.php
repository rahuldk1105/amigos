<?php
session_start();

// Hardcoded credentials for simplicity
$users = [
    'user1' => 'password1',
    'user2' => 'password2',
    'user3' => 'password3',
    'user4' => 'password4',
    'user5' => 'password5',
    'user6' => 'password6',
];

// Get login credentials from POST request
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($users[$username]) && $users[$username] === $password) {
    // Set session and redirect to home page
    $_SESSION['username'] = $username;
    header("Location: index.php");
    exit();
} else {
    // Redirect back to login with an error
    header("Location: login.html?error=1");
    exit();
}
?>
