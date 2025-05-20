
<?php 

//recupera dati con metodo post
$cod_fiscale=$_POST['cod_fiscale'];

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
//creiamo una query per visualizzare le informazioni corrispondenti
//al codice fiscale

$sql="select cod_fiscale,cognome, nome, data_nascita, luogo_nascita, indirizzo,email";
$sql.=" from donatore where cod_fiscale='$cod_fiscale'";

if ($risultato=$conn->query($sql)) {

    while ($dati=$risultato->fetch_object())
        {
            echo "<h1>Modifica i dati del donatore</h1>";
            echo "<form action=\"aggiornadonatore.php\" method=\"post\">";
            echo "<br/>Codice Fiscale<br/>";
            echo "<input type=\"text\" name=\"cod_fiscale\" value=\"$dati->cod_fiscale\">";
            echo "<br/>Cognome <br/><br/>";
            echo "<input type=\"text\" name=\"cognome\" value=\"$dati->cognome\">";
            echo "<br/>Nome<br/><br/>";
            echo "<input type=\"text\" name=\"nome\" value=\"$dati->nome\">";
            echo "<br/>Data di nascita<br/><br/>";
            echo "<input type=\"text\" name=\"data_nascita\" value=\"$dati->data_nascita\">";
            echo "<br/>Luogo di nascita<br/><br/>";
            echo "<input type=\"text\" name=\"luogo_nascita\" value=\"$dati->luogo_nascita\">";
            echo "<br/>Indirizzo<br/><br/>";
            echo "<input type=\"text\" name=\"indirizzo\" value=\"$dati->indirizzo\">";
            echo "<br/>Indirizzo posta elettronica<br/><br/>";
            echo "<input type=\"text\" name=\"email\" value=\"$dati->email\">";
            echo "<input type=\"submit\" name=\"invia\" value=\"invia\">";
            echo "</form>";

            
        }
//chiudi connessione
            $conn->close();
}
else
        echo ("Connessione non riuscita");





?>