<?php
session_start();
$conn = new mysqli("localhost", "kgelli2", "kgelli2", "kgelli2");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_user_id = $_POST['admin_user_id_login'];
    $admin_password = $_POST['admin_password_login'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM admin_data WHERE admin_user_id = ? AND admin_password = ?");
    $stmt->bind_param("ss", $admin_user_id, $admin_password);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;

    if ($count == 1) {
        $_SESSION['admin_username'] = $admin_user_id;
        $_SESSION['is_admin'] = true;
        header("location: admin_dashboard.php");
    } else {
        header('Location: admin_login.php?error=invalid');
        exit();
    }
    $stmt->close();
}

$conn->close();
