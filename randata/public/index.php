<?php function app()
{
    require_once "./../vendor/autoload.php";
    require_once "../sources/models/Database.php";
    require_once "../sources/controllers/Page.php";
    require_once "../sources/router/root.php";
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randata</title>
    <link rel="stylesheet" href="./styles/reset.css">
</head>

<body>
    <?php echo app() ?>
    <script src="./assets/scritp.js"></script>
</body>

</html>