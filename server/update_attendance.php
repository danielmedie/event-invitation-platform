<?php

// Anslutning till databasen
include('db_connection.php'); 

$unique_code = $_POST['unique_code'];
$new_status = $_POST['new_status']; 

// Uppdatera närvarostatus i databasen
$sql = "UPDATE attendance SET attendance_status='$new_status' WHERE unique_code='$unique_code'";
if ($conn->query($sql) === TRUE) {
    echo "Närvarostatus uppdaterad";
} else {
    echo "Fel vid uppdatering av närvarostatus: " . $conn->error;
}

// Stäng anslutning till databasen
$conn->close();
?>
