<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guest_name'])) {
    $guest_name = $_POST['guest_name'];


    include 'db_connection.php'; 

    $sql = "INSERT INTO guests (guest_name) VALUES ('$guest_name')";

    if ($conn->query($sql) === TRUE) {
        echo "Inbjudning skapad framgångsrikt!";
    } else {
        echo "Fel: " . $sql . "<br>" . $conn->error;
    }

    // Stäng anslutningen till databasen efter användning
    $conn->close();
} else {
    // Inga data skickades via POST-förfrågan
    echo "Inget gästnamn skickades.";
}
?>
