<?php
// dashboard.php
session_start(); // Must be at the top

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body { font-family: sans-serif; padding: 2rem; }
    </style>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>This is your inventory dashboard. Only logged-in users can see this.</p>

    <a href="logout.php">Logout</a>
</body>
</html>