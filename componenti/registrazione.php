<?php include "database.php"?>
<?php
    $avviso="";

    if(isset($_POST['submit'])){
            $nome=$_POST['nome'];
            $cognome=$_POST['cognome'];
            $email=$_POST['email'];
            $password=$_POST['password'];
    

    if(!empty($nome)&&!empty($cognome)&&!empty($email)&&!empty($password)){

        $query="INSERT INTO utenti(nome,cognome,email,'password')VALUES('{$nome}','{$cognome}','{$email}','{$password}')";

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

<main>
<!--form per la registrazione -->
    <form action="registrazione.php" method="post">
        <h1>Crea il tuo Account</h1>
        <div>
            <label for="nome">inserisci nome:</label>
            <input type="text" name="nome" id="username" placeholder="Mario">
        </div>
        <div>
            <label for="cognome">inserisci cognome:</label>
            <input type="text" name="cognome" id="username" placeholder="Rossi">
        </div>
        <div>
            <label for="email">inserisci Email:</label>
            <input type="email" name="email" id="email" placeholder="name@example.com">
        </div>
        <div>
            <label for="password">inserisci Password:</label>
            <input type="password" name="password" id="password" placeholder="Scrivi qui">
        </div>
       
        <button type="submit">Registrati</button>
        <footer>Hai gia un account? <a href="../index.php">Accedi</a></footer>
    </form>
</main>