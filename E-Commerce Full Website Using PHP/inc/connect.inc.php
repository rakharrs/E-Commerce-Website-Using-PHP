<?php

$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "ebuybd";
$success;

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $success = new mysqli($servername, $username, $password, $dbname);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
