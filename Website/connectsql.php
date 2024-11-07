<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customerreservation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$reservationDate = $_POST['reservationDate'];
$contactNumber = $_POST['contactNumber'];
$email = $_POST['email'];

// Prepare and execute SQL query
$sql = "INSERT INTO reservations (firstName, lastName, reservationDate, contactNumber, email)
VALUES ('$firstName', '$lastName', '$reservationDate', '$contactNumber', '$email')";

if ($conn->query($sql) === TRUE) {
    // Redirect to landing page with success message
    echo "<script>
        window.addEventListener('load', function() {
            window.location.href = 'confirmation.php';
        });
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>