<?php
$servername = "localhost"; // Replace with your MySQL server name or IP address
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "samplefraskdb"; // Replace with the name of your database

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match. Please try again.";
        exit();
    }

    // Hash the password for security (use a strong hashing algorithm)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statement to insert user data into the database
    $stmt = $conn->prepare("INSERT INTO registration (firstname, lastname, age, username, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $firstname, $lastname, $age, $username, $hashedPassword);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>