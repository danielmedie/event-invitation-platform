<?php

// Anslutning till databasen
include('db_connection.php'); // Anpassa denna inkludering till din egen databasanslutningsfil

// Hämta inbjudningar från databasen
$sql = "SELECT * FROM invitations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $invitations = [];
    while ($row = $result->fetch_assoc()) {
        $invitations[] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode($invitations);
} else {
    echo "Inga inbjudningar hittades";
}

// Stäng anslutning till databasen
$conn->close();
?>
