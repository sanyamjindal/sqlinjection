<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "sanyam";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<script>alert("Login successful!")</script>';
    } else {
        echo '<script>alert("Login failed! Invalid details")</script>';
    }
}

$conn->close();
?>