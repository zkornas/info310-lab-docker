<?php
$studentId = $_GET['studentId'];

$conn = new mysqli('sql', 'admin', 'password', 'gradebook_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM gradebook WHERE student_id = '$studentId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $resultsHTML = "<div class='search-results'>";
    while ($row = $result->fetch_assoc()) {
        $resultsHTML .= "<div class='result'>";
        $resultsHTML .= "<p>First Name: " . $row["first_name"] . "</p>";
        $resultsHTML .= "<p>Last Name: " . $row["last_name"] . "</p>";
        $resultsHTML .= "<p>Student ID: " . $row["student_id"] . "</p>";
        $resultsHTML .= "<p>Grade: " . $row["grade"] . "</p>";
        $resultsHTML .= "</div>";
    }
    $resultsHTML .= "</div>";
} else {
    $resultsHTML = "<p>No results found for Student ID: $studentId</p>";
}

$conn->close();
?>

<html>
<head>
    <title>INFO 310</title>
    <link rel="stylesheet" href="search.css">
</head>
<body>
    <div class="hero-text">
        <h1>Search Results</h1>
        <br>
        <br>
        <h4>You can view your grade by entering your Student ID below</h4>
        <form action="search.php" method="GET">
            <input type="text" id="studentId" name="studentId" required>
            <input type="submit" value="Search">
        </form>
        <div class="results">
            <br>
            <br>
            <?php echo $resultsHTML; ?>
            <br>
            <br>
        </div>
        <br>
        <br>
        <button onclick="window.location.href = 'index.html';">Home</button>
        <br>
    </div>
</body>
</html>
