 <?php
// Create connection
$conn = new mysqli("localhost", "root","","lcss_web_project");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 