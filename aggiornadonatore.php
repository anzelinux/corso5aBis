<?php 

//recupera dati con metodo post
$cod_fiscale=$_POST['cod_fiscale'];
$cognome=$_POST['cognome'];
$nome=$_POST['nome'];
$indirizzo=$_POST['indirizzo'];
$data_nascita=$_POST['data_nascita'];
$luogo_nascita=$_POST['luogo_nascita'];
$email=$_POST['email'];

//crea variabili di connessione
$host='localhost';
$user='root';
$pass='';
$db='crowfounding';

//crea un oggetto connessione
$conn= new mysqli($host,$user,$pass,$db);
if ($conn->connect_errno) {
die ("si è verificato un errore nella connessione");
}

$sql= "update donatore set cod_fiscale='$cod_fiscale', indirizzo='$indirizzo', email='$email', cognome='$cognome',nome='$nome',luogo_nascita='$luogo_nascita', data_nascita='$data_nascita'";
$sql.="where cod_fiscale='$cod_fiscale'";
if ($risultato=$conn->query($sql)){

echo ("Modifica avvenuta con successo");

} else

echo ("Errore nella query");

$conn->close();


?>