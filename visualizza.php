<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'crowfounding';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}






$codice_fiscale = $_GET['codice_fiscale'];

$sql = "SELECT cod_fiscale, data_nascita, luogo_nascita, indirizzo, email, cognome, nome
        FROM donatore
        WHERE cod_fiscale = '$codice_fiscale'";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head><title>Vedi Caricato</title></head>
<body>
<h2>Visualizza caricato</h2>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>Codice Fiscale: " . $row["cod_fiscale"] . "</p>";
        echo "<p><strong>Nome:</strong> " . $row["nome"] . "</p>";
        echo "<p><strong>Cognome:</strong> " . $row["cognome"] . "</p>";
        echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
        echo "<p><strong>Data di Nascita:</strong> " . $row["data_nascita"] . "</p>";
        echo "<p><strong>Luogo di Nascita:</strong> " . $row["luogo_nascita"] . "</p>";
        echo "<p><strong>Indirizzo:</strong> " . $row["indirizzo"] . "</p>";
    }
} else {
    echo "<p>Nessun risultato trovato per il codice fiscale specificato.</p>";
}

$conn->close();
?>

</body>
</html>
