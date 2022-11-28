<?php require_once "config.php"; ?>
<html>
    <head>
    </head>
    <body>
        <?php require "menu.php"; ?>
        <h1>Connexion</h1>
        <form method="post" action="signup.php">
            <input type='firstname' name='First_name' />
            <input type='secondename' name='Seconde_name' />
            <input type='pseudo' name='Pseudo' />
            <input type='date' name='date_of_birthday' />
            <input type='email' name='email' />
            <input type='password' name='password' />
            <input type='text' name='login' />
            <input type='submit' value='Me connecter' />
        </form>
    </body>
</html>