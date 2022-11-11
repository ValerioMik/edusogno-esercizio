
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>Edusogno</title>
</head>

<body >
    <form action="./componenti/register.php" method="POST">
        <h1>Crea il tuo Account</h1>
        <div>
            <label for="nome">Inserisci Nome:</label>
            <input type="text" name="nome" id="nome" required placeholder="Mario">
        </div>
        <div>
            <label for="cognome">Inserisci Cognome:</label>
            <input type="text" name="cognome" id="cognome" required placeholder="Rossi" >
        </div>
        <div>
            <label for="email">Inserisci Email:</label>
            <input type="email" name="email" id="email" required placeholder="nome@esempio.com">
        </div>
        <div>
            <label for="password">Inserisci Password:</label>
            <input type="password" name="password" id="password" required placeholder="iserisci password">
        </div>
        <input type="submit" value="Registrati">
        <footer>Hai gia un account? <a href="login.html">Accedi</a></footer>
    </form>
</body>

</html>