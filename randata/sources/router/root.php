<?php

use controllers\PageController;

$DIRECTION_PAGE = new PageController();

try {
    $URL = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "/");

    switch ($URL) {
        case "":
            $DIRECTION_PAGE->index();
            break;

        case "subscribe":
            $DIRECTION_PAGE->subscribe();
            break;

        case "login":
            $DIRECTION_PAGE->login();
            break;

        case "logout":
            $DIRECTION_PAGE->logout();
            break;

        default:
            $DIRECTION_PAGE->error_404();
            break;
    }
} catch (Exception $error) {
    $DIRECTION_PAGE->error_500($error->getMessage());
}
