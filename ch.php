<?php
include('conn.php');
// Get the username from the form data
$username = $_POST['name'];

// Check if the username already exists in the database
$sql = "SELECT * FROM roses WHERE nam =?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Username already exists, get the date and time it was created
    $row = $result->fetch_assoc();
    $val = date('d-m-Y', strtotime($row['dat']));
    $date = date('s:i:H ', strtotime($row['t']));
    echo "Username already exists. They booked on date $val";
    echo" and time:$date";
} else {
    echo "Username is not available.";
}
$conn->close();

?>