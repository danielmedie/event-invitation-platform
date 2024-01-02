<?php
// Kolla om det finns en POST-förfrågan och om inbjudningskoden är skickad
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['invitation_code'])) {
    $invitation_code = $_POST['invitation_code'];

    include 'db_connection.php'; 

    $sql = "SELECT * FROM invitations WHERE invitation_code = '$invitation_code'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Inbjudningskoden är giltig
        echo "Inbjudningskoden är giltig! Användaren har tillgång till bröllopsinformationen.";
    } else {
        // Inbjudningskoden är ogiltig
        echo "Ogiltig inbjudningskod. Försök igen.";
    }

    // Stäng anslutningen till databasen efter användning
    $conn->close();
} else {
    // Inga data skickades via POST-förfrågan
    echo "Ingen inbjudningskod skickades.";
}
?>
