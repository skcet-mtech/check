<?php
// login.php
session_start(); // Start the session at the very beginning
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f4; }
        form { background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        input { display: block; width: 100%; padding: 0.5rem; margin-bottom: 1rem; border: 1px solid #ddd; border-radius: 4px; }
        input[type="submit"] { background-color: #007bff; color: white; border: none; cursor: pointer; }
        .error { color: red; margin-bottom: 1rem; }
    </style>
</head>
<body>
    <form action="auth.php" method="post">
        <h2>Inventory Login</h2>

        <?php
        // Display an error message if login failed
        if (isset($_GET['error'])) {
            echo '<p class="error">Wrong username or password!</p>';
        }
        ?>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Login">
    </form>
</body>
</html>