<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $db_host = "sql";
    $db_user = "admin";
    $db_password = "password";
    $db_name = "info310_db";

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM login_info WHERE username = '$username' AND pass = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $instructorName = $row["instructor_name"];
        $_SESSION["instructor_name"] = $instructorName;

        header("Location: instructor.php");
        exit();
    } else {
        echo "<script>
                alert('Invalid username or password.');
                window.location.href='index.html';
              </script>";
        exit();
    }

    $conn->close();
}
?>
