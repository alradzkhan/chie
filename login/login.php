<?php


$servername = "localhost"; // Replace with your MySQL server name or IP address
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "samplechiedb"; // Replace with the name of your database

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sanitize user input to prevent SQL injection (you should use prepared statements in production)
    $username = $conn->real_escape_string($username);

    // Query to fetch user data by username
    $sql = "SELECT * FROM registration WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["Password"];

        // Verify the entered password against the stored hashed password
        if (password_verify($password, $hashedPassword)) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: ../dashboard/dashboard.php");
            // echo "Login successful!";

            // You can redirect the user to a dashboard or perform other actions here
        } else {
            echo "Login failed. Incorrect password.";
        }
    } else {
        echo "Login failed. User not found.";
    }
}

$conn->close();
?>
