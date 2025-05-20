
<?php include 'connessione.php';





$sql = "SELECT s.nome, s.cognome, c.nome_corso, i.data_iscrizione
        FROM iscrizioni i
        INNER JOIN studenti s ON i.studente_id = s.id
        INNER JOIN corsi c ON i.corso_id = c.id
        ORDER BY i.data_iscrizione DESC";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head><title>Iscrizioni</title></head>
<body>
<h2>Elenco Iscrizioni</h2>
<table border='1'>
    <tr><th>Studente</th><th>Corso</th><th>Data Iscrizione</th></tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['nome'] . ' ' . $row['cognome']; ?></td>
        <td><?php echo $row['nome_corso']; ?></td>
        <td><?php echo $row['data_iscrizione']; ?></td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>
