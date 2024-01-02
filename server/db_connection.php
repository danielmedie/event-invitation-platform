<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "event-invitation-platform";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // Logga att anslutningen lyckades
  error_log("Connected successfully", 0);
  // Echo för att bekräfta anslutningen
  echo "Connected successfully";
} catch(PDOException $e) {
  // Visa felmeddelande om anslutningen misslyckas
  echo "Connection failed: " . $e->getMessage();
  // Logga att anslutningen misslyckades
  error_log("Connection failed: " . $e->getMessage(), 0);
}

?>
