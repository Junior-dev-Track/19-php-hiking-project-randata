<?php
require_once "./vendor/autoload.php";
// require_once './sources/models/Database.php';

use App\models\Database;

$data = new Database();
$data->get_all_hikes();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randata</title>
</head>

<body>
    <h1>Page Index</h1>
</body>

</html>