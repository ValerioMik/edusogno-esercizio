<?php
    require_once('database.php');

    $nome = $connessione->real_escape_string($_POST('email')) ;
    $cognome =$connessione->real_escape_string( $_POST('email'));
    $email =$connessione->real_escape_string( $_POST('email'));
    $password =$connessione->real_escape_string( $_POST('password'));

    $sql = "INSERT INTO utenti (nome,cognome,email,password) VALUES('$nome','$cognome','$email','$password')";

   if ($connessione->query($sql)== true) {
    echo " registrazione andata a buon fine";
   }else{
    echo " Ops errore durante la registrazione $sql". $connessione->error;
   }
?>
