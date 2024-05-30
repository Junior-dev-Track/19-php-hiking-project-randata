<?php

namespace controllers;

class Page
{
  public function home(): void
  {
    include __DIR__ . "/../views/page-home.php";
  }

  public function login(): void
  {
    include __DIR__ . "/../views/page-login.php";
  }

  public function logout(): void
  {
    include __DIR__ . "/../views/page-logout.php";
  }

  public function subscribe(): void
  {
    include __DIR__ . "/../views/page-subscribe.php";
  }

  public function error_404(): void
  {
    include __DIR__ . "/../views/page-404.php";
  }

  public function error_500($error)
  {
    include __DIR__ . "/../views/page-500.php";
    $error;
  }
}
