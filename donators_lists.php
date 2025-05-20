
<?php 

//include 'connessione.php';
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'crowfounding';

//crea un oggetto connessione
$conn = new mysqli($host, $user, $password, $dbname);

//Significato
/*$conn->connect_error è una proprietà dell’oggetto mysqli che contiene il messaggio di errore se la connessione fallisce.

Se non c’è errore, il suo valore è null o una stringa vuota (cioè è valutata come false).

Se c’è un errore, contiene il testo dell’errore, e quindi la condizione è true.

Cosa fa il codice
La struttura if ($conn->connect_error):

Controlla se c’è stato un errore nella connessione al database.

Se sì, esegue il blocco if, che in genere mostra un messaggio di errore o interrompe l’esecuzione con die() o exit.
*/


if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$codice_fiscale = ($_POST['codice_fiscale']);
$nascita = ($_POST['data_nascita']);
$cognome = $_POST['cognome'];
$nome = $_POST['nome'];
$mail = $_POST['mail'];
$indirizzo = $_POST['indirizzo'];
$luogo_nascita = $_POST['luogo_nascita'];
$data_nascita = $_POST['data_nascita'];




$sql = "INSERT INTO donatore (cod_fiscale, data_nascita, luogo_nascita, indirizzo, email, cognome, nome)
VALUES ('$codice_fiscale', '$data_nascita', '$luogo_nascita', '$indirizzo', '$mail', '$cognome', '$nome')";



if ($conn->query($sql) === TRUE) {
    echo "Iscrizione salvata con successo.";
    echo "<h1>Per visualizzare i dati inseriti clicca su visualizza</h1>";
    echo "<a href='visualizza.php?codice_fiscale=$codice_fiscale'>Visualizza</a>";

} else {
    echo "Errore: " . $conn->error; 
}

$conn->close();
?>
