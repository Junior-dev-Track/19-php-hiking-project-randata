<?php require_once "includes/tag-header.php" ?>

<main>
    <h1>Page Subscribe</h1>

    <h2>Formulaire d'inscription</h2>

    <form action="/" method="POST">
        <label for="first_name">Prénom:</label><br>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Nom:</label><br>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="nick_name">Surnom:</label><br>
        <input type="text" id="nick_name" name="nick_name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Mot de passe:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="S'inscrire">
    </form>
</main>

<?php require_once "includes/tag-footer.php" ?>