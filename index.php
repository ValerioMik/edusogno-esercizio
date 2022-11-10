<?php include "database.php" ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edusogno</title>
</head>

<body>
        <main>
            <!--form per il login -->
            <form action="login.php" method="post">
                <h1>Login</h1>
                <div>
                    <label for="email">Inserisci Email:</label>
                    <input type="text" name="username" id="username">
                </div>
                <div>
                    <label for="password">Inserisci Password:</label>
                    <input type="password" name="password" id="password">
                </div>
                <section>
                    <button type="submit">Login</button>
                    <a href="../edusogno-esercizio/componenti/newAccountRegistrazione.php">Register</a>
                </section>
            </form>
        </main>
</body>

</html>