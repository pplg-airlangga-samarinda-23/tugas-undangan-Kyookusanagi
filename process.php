<?php
// Configuration
$dhost = 'localhost';
$username = 'root';
$password = '';
$database = 'undangan';

// Connect to the database
$connection = new mysqli($host, $username,$password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $message = $_POST["message"];
  $kehadiran = $_POST["kehadiran"];

  // Insert the data into the database
  $sql = "INSERT INTO entries (name, message, kehadiran) VALUES ('$name', '$message', '$kehadiran')";
  $conn->query($sql);

  // Close the connection
  $conn->close();

  // Redirect to the guestbook page
  header("Location: index.html#buku_tamu");
  exit;
}
?>