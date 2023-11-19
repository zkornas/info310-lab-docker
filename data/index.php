<html>
<head>
    <title>INFO 310</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hero-text">
        <div class="flex-container">
            <div class="flex-box">
                <h1>Welcome to INFO 310</h1>
                <p>
                    Instructor Portal
                </p>
                <form action="login.php" method="POST">
                    <input type="text" id="username" name="username" placeholder="E-mail..." required> <br>
                    <input type="password" id="password" name="password" placeholder="Password..." required> <br>
                    <br>
                    <input type="submit" value="Log in">
                </form>
                <br>
                <br>
                <p>You can view your grade by entering your Student ID below</p>
                <form action="search.php" method="GET">
                    <input type="text" id="studentId" name="studentId" required>
                    <input type="submit" value="Search">
                </form>
                <br>
                <br>
                <p>Click below to submit feedback!</p>
                <button onclick="window.location.href = 'feedback.html';">Submit Feedback</button>
            </div>
            <div class="flex-box">
                <?php
                $servername = "sql";
                $username = "admin";
                $password = "password";
                $dbname = "info310_db";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM announcements";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<div class='announcements'>";
                    echo "<h2>Announcements</h2>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<p><strong>{$row['instructor']}:</strong><br> {$row['message_text']}</p>";
                    }
                    echo "</div>";
                } else {
                    echo "<p>No announcements available</p>";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>
</body>
</html>
