Quando creiamo una pagina php che deve collegarsi ad un database
il primo passaggio da fare è 
1. Creare delle variabili per la nostra connessione

$nomevariabile= ' nome campo dal form con attributo name '

2. creare la connessione con metodo mysqli 
$conn = new mysqli($host, $user, $password, $dbname);

3. creare la query

4. chiudere la connessione $conn->close();





$sql= insert into donatore ( cod_fiscale, nome, cognome, 

values ($cod_fiscale, $nome, $cognome)
        


)