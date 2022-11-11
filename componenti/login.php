<?php
    require_once('database.php');

    $email =$connessione->real_escape_string( $_POST('email'));
    $password =$connessione->real_escape_string( $_POST('password'));
    $hased_password = password_hash($password,PASSWORD_DEFAULT);

    $sql = "INSERT INTO utenti (nome,cognome,email,password) VALUES('$nome','$cognome','$email','$hased_password')";

   if ($_SERVER ["REQUEST_METHOD"]=="POST") {
    $sql_select = "SELECT * FROM utenti WHERE email = '$email'";
    if ($result = $connessione-> query($sql_select)) {
        if ($result->num_rows == 1) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(password_verify($row['password'],$password,$row['password'])){
                session_start();

                $_SESSION['loggato']= true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];

                header("location: ../areaprivata.php");
            }else{
                echo "la password non e corretta";
            }
        }else{
            echo "non esistono account con questa email";
        }
    }else{
        echo "errore di login";
    }
    $connessione->close();
   }
?>