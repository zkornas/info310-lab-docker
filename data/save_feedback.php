<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];

    // Save the feedback to a file or database
    $feedbackFile = fopen("feedback.txt", "a") or die("Unable to open file!");
    fwrite($feedbackFile, "Name: $name\nEmail: $email\nSubject: $subject\n\n");
    fclose($feedbackFile);

    // Redirect to a different page on your site
    header("Location: thankyou.html");
    exit();
}
?>
