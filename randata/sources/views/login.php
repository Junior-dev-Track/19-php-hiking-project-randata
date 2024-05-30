<?php

use controllers\Session;

$navigation = new Session();
$navigation->to_login();

require_once "includes/header.php" ?>

<main>
    <h1>Page Login</h1>

    <?php if (!isset($_SESSION["user"])) : ?>
        <form method="POST" action="login">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">Se connecter</button>
        </form>
    <?php else : ?>
        <h2>Bienvenue <?php echo ($_SESSION["first_name"]) ?>!</h2>
    <?php endif; ?>
</main>

<?php require_once "includes/footer.php"; ?>