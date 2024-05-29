<?php

namespace controllers;

class PageController
{
  public function index()
  {
    include __DIR__ . "/../views/includes/page-header.php";
    include __DIR__ . "/../views/page-index.php";
    include __DIR__ . "/../views/includes/page-footer.php";
  }

  public function login()
  {
    include __DIR__ . "/../views/includes/page-header.php";
    include __DIR__ . "/../views/page-login.php";
    include __DIR__ . "/../views/includes/page-footer.php";
  }

  public function logout()
  {
    include __DIR__ . "/../views/includes/page-header.php";
    include __DIR__ . "/../views/page-logout.php";
    include __DIR__ . "/../views/includes/page-footer.php";
  }

  public function subscribe()
  {
    include __DIR__ . "/../views/includes/page-header.php";
    include __DIR__ . "/../views/page-subscribe.php";
    include __DIR__ . "/../views/includes/page-footer.php";
  }

  public function error_404(): void
  {
    include __DIR__ . "/../views/includes/page-header.php";
    include __DIR__ . "/../views/page-404.php";
    include __DIR__ . "/../views/includes/page-footer.php";
  }

  public function error_500($error)
  {
    include __DIR__ . "/../views/page-500.php";
    $error;
  }
}
