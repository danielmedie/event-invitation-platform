<?php
// Koden för att hantera gästlistor och närvarostatus

$unique_code = $_GET['unique_code']; // Unik kod från frontend-fråga

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT attendance_status FROM attendance WHERE unique_code='$unique_code'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Närvarostatus: " . $row['attendance_status'];
    }
} else {
    echo "Ingen närvarostatus hittad för den här inbjudan";
}

// Stäng anslutning till databasen
$conn->close();
?>
