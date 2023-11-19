<?php
session_start(); // Start the session for storing login status

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Database connection details
    $db_host = "sql"; // Assuming your MySQL container is named "sql"
    $db_user = "admin";
    $db_password = "password";
    $db_name = "info310_db";

    // Create a database connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to check login credentials
    $sql = "SELECT * FROM login_info WHERE username = '$username' AND pass = '$password'";
    $result = $conn->query($sql);

    // Check if the login is successful
    if ($result->num_rows > 0) {
        // Store user information in the session
        $_SESSION["username"] = $username;

        // Redirect to the instructor page
        header("Location: instructor.html");
        exit();
    } else {
        // Display an error message if login fails
        echo "Invalid username or password.";
    }

    // Close the database connection
    $conn->close();
}
?>
