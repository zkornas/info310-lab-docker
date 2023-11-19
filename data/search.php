<?php
$studentId = $_GET['studentId'];



$conn = new mysqli('sql', 'admin', 'password', 'gradebook_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM gradebook WHERE student_id = '$studentId'";

/** 
$stmt = $conn->prepare("SELECT * FROM gradebook WHERE student_id = ?");
$stmt->bind_param("s", $studentId); // "s" indicates a string parameter

// Execute the query
$stmt->execute();

// Get the results
$result = $stmt->get_result();
*/

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "First Name: " . $row["first_name"] . "<br>";
        echo "Last Name: " . $row["last_name"] . "<br>";
        echo "Student ID: " . $row["student_id"] . "<br>";
        echo "Grade: " . $row["grade"] . "<br>";
    }
} else {
    echo "No results found for Student ID: $studentId";
}

$conn->close();
?>
