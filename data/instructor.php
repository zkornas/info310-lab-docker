<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INFO 310 - Instructor Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hero-text">
        <?php
        if (isset($_SESSION["username"])) {
            $username = $_SESSION["username"];
            echo "<h1>Welcome to INFO 310, Instructor!</h1>";
            echo "<p>Hello, $username!</p>";
        } else {
            header("Location: index.html");
            exit();
        }
        ?>
    </div>
</body>
</html>
