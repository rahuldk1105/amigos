<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Amigos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        header nav {
            display: flex;
            gap: 15px;
        }
        header nav a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }
        header nav a:hover {
            text-decoration: underline;
        }
        .banner {
            margin: 20px auto;
            text-align: center;
        }
        .banner img {
            width: 80%;
            max-width: 800px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Amigos</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="upload_photo.php">Upload Photos</a>
            <a href="upload_video.php">Upload Videos</a>
            <a href="php/logout.php">Logout</a>
        </nav>
    </header>
    <div class="banner">
        <img src="images/group_photo.jpg" alt="Group Photo">
    </div>
    <div class="content">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <p>Explore our shared memories and upload your own!</p>
    </div>
</body>
</html>
