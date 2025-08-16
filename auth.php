<?php
// auth.php
session_start(); // Continue the session

// 1. Aiven Database Connection Details
$db_host = 'mysql-2da5d484-snsctcse-5e1f.c.aivencloud.com';
$db_user = 'avnadmin';
$db_pass = 'AVNS_5OP6XXy0AD0bh_ZHxeE';
$db_name = 'defaultdb';
$db_port = 20122;

// IMPORTANT: Set the path to the CA certificate you downloaded
$ssl_ca_path = 'ca.pem';

// 2. Create a secure SSL connection
$conn = mysqli_init();
if (!$conn) {
    die("mysqli_init failed");
}

mysqli_ssl_set($conn, NULL, NULL, $ssl_ca_path, NULL, NULL);

if (!mysqli_real_connect($conn, $db_host, $db_user, $db_pass, $db_name, $db_port)) {
    die("Connection failed: " . mysqli_connect_error());
}

// -- From here, the rest of your code stays the same! --

// 3. Get data from the form
$username = $_POST['username'];
$password = $_POST['password'];

// 4. Prepare SQL statement to prevent SQL injection
$stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
// ...and so on.