<form action="./componenti/register.php" method="post">
        <h1>Login</h1>
        <div>
            <label for="email">Inserisci Email:</label>
            <input type="email" name="email" id="email" required placeholder="nome@esempio.com">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <section>
            <button type="submit">Login</button>
            <footer>Non Hai un account? <a href="index.php">Registrati</a></footer>

        </section>
</form>