<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

// Establish database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve user input
$title = $_POST['title'];
$content = $_POST['content'];
$username = $_SESSION['username'];

// Perform SQL query to insert the discussion into the database
$sql = "INSERT INTO discussions (title, content, username) VALUES ('$title', '$content', '$username')";

if (mysqli_query($conn, $sql)) {
  echo "Discussion posted successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
