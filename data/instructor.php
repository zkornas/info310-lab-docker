<?php
session_start();

$alertMessage = "";

if (!isset($_SESSION["instructor_name"])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit_announcement"])) {
    $instructorName = $_SESSION["instructor_name"];
    $messageText = $_POST["message_text"];

    $servername = "sql";
    $username = "admin";
    $password = "password";
    $dbname = "info310_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO announcements (instructor, message_text) VALUES ('$instructorName', '$messageText');";

    if ($conn->multi_query($sql)) {
        do {
            if ($result = $conn->store_result()) {
                $result->free();
            }
        } while ($conn->next_result());

        $alertMessage = "Announcement successfully submitted!";
    } else {
        $alertMessage = "Error submitting announcement. Please try again.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INFO 310 - Instructor Page</title>
    <link rel="stylesheet" href="instructor.css">
</head>
<body>
    <div class="hero-text">
        <?php
        echo "<h1>Welcome back, {$_SESSION["instructor_name"]}!</h1>";
        ?>
        <script>
            <?php if ($alertMessage): ?>
                alert("<?php echo $alertMessage; ?>");
            <?php endif; ?>
        </script>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h2>Add Announcement</h2>
            <label for="message_text">Message:</label><br>
            <textarea id="message_text" name="message_text" rows="4" cols="50" required></textarea><br>
            <input type="submit" name="submit_announcement" value="Submit Announcement">
        </form>
        <button onclick="window.location.href = 'index.php';">Log out</button>
    </div>
</body>
</html>
