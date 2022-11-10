<?php include "database.php"?>
<?php
    $avviso="";

    if(isset($_POST['submit'])){
            /* $nome=$_POST['nome'];
            $cognome=$_POST['cognome'];
            $email=$_POST['email'];
            $password=$_POST['password']; */

            $name = $connessione->real_escape_string ($_POST['nome']);
            $surname = $connessione->real_escape_string ($_POST['cognome']);
            $email = $connessione->real_escape_string ($_POST['email']);
            $password = $connessione->real_escape_string ($_POST['password']);
            
    

    if(!empty($nome)&&!empty($cognome)&&!empty($email)&&!empty($password)){

        $query="INSERT INTO utenti (nome,cognome,email, password) VALUES ('$name','$surname','$email','$password')";

        $creaUtenti = mysqli_query($connessione,$query);

        if($creaUtenti){
            die('query fallita'.mysqli_error($connessione));
        }
        
        $avviso="Dati inseriti correttamente";
            echo $avviso;
        }else{
        $avviso="i dati sono vuoti";
            echo $avviso;
        }
    }
    
?>

