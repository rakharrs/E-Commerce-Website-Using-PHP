<?php

$servername = "roundhouse.proxy.rlwy.net:36748";
$username = "root";
$password = "LQBeFEOoricWqpgdirGvXHqPUMVewHqi";
$dbname = "railway";
$success;

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $success = new mysqli($servername, $username, $password, $dbname);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
