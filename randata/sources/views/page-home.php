<?php

use controllers\Subscribe;
use models\Database;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $nickName = $_POST['nick_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new Subscribe();
    $result = $user->register($firstName, $lastName, $nickName, $email, $password);

    echo $result;
}

$database = new Database;
?>

<?php require_once "includes/tag-header.php" ?>

<main class="coucou">
    <h1>Page Home</h1>
    <?php echo $database->get_all_hikes() ?>
</main>

<?php require_once "includes/tag-footer.php" ?>