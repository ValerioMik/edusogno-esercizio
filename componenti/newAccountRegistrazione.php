<?php include "database.php"?>
<main>
<!--form per la registrazione -->
    <form action="newAccountRegistrazione.php" method="post">
        <h1>Crea il tuo Account</h1>
        <div>
            <label for="nome">inserisci nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Mario">
        </div>
        <div>
            <label for="cognome">inserisci cognome:</label>
            <input type="text" name="cognome" id="cognome" placeholder="Rossi">
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