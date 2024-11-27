<?php
$users = [
    'rahuldk' => 'rlkbkdktsrs@8',
    'akshithaa' => 'akshithaa',
    'kabir' => 'kabir',
    'jeeva' => 'jeeva',
    'aishwar' => 'aishwar',
    'deepshitha' => 'deepshitha'
];

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($users[$username]) && $users[$username] === $password) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: ../index.php");
} else {
    echo "Invalid login credentials!";
}
?>
