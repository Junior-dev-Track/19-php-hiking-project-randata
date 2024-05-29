<?php

use models\Database;

$data = new Database;
?>


<main>
    <h1>Page Index</h1>
    <?php echo $data->get_all_hikes() ?>
</main>