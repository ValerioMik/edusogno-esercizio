<?php 

$host = "127.0.0.1";
$user = "root";
$password = "root";
$db = "edusogno_dbtask";

$connessione = new mysqli ($host,$user,$pwd,$db);

if($connessione) {
   echo"sei connesso";
}else{
    echo 'Errore durante la registrazione di un nuovo account . ' . $connessione->error;
}
?>