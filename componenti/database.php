<?php 

$host = "127.0.0.1";
$user = "root";
$password = "root";
$db = "edusogno_dbtask";

$connessione = new mysqli ($host,$user,$pwd,$db);

if($connessione) {
   echo"sei connesso al db";
}else{
    echo 'Errore connessione . ' . $connessione->error;
}
?>

