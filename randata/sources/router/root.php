<?php

use controllers\Page;

$DIRECTION_PAGE = new Page();

try {
    $URL = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "/");

    match ($URL) {
        ""          => $DIRECTION_PAGE->home(),
        "subscribe" => $DIRECTION_PAGE->subscribe(),
        "login"     => $DIRECTION_PAGE->login(),
        "logout"    => $DIRECTION_PAGE->logout(),
        default     => $DIRECTION_PAGE->error_404(),
    };
} catch (Exception $error) {
    $DIRECTION_PAGE->error_500($error->getMessage());
}
