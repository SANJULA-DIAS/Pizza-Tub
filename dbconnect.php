<?php

include 'config.php';

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Prepare and bind the SQL statement for inserting
$stmt = $conn->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

// Set parameters and execute the prepared statement
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if ($stmt->execute()) {
    // Success, redirect to a thank-you page or display a success message
    header("Location: thank-you.html");
} else {
    // Error, display an error message
    echo "Error: " . $stmt->error;
}

// Close the prepared statement and the database connection
$stmt->close();

// Simplified insert statement (for testing purposes)
$sql = "INSERT INTO contact (name, email, message) VALUES ('John Doe', 'johndoe@example.com', 'Hello, this is a test message.')";

if ($conn->query($sql) === TRUE) {
    // Test success
    echo "Test record inserted successfully.";
} else {
    // Test error
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
