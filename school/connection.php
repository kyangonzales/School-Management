
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<p style='color: green;'>Connected successfully</p>";
} catch(PDOException $e) {
  echo "<p style='color: red;'>Connection failed: " . $e->getMessage() . "</p>";
}
?>