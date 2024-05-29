<?php

namespace controllers;

class UserAuthController
{

  public function subscribe(string $login, string $email, string $pass)
  {

    //header("location: ./");
  }

  public function showSubscriptionForm()
  {

    include __DIR__ . '/../views/includes/header.view.php';
    include __DIR__ . '/../views/subscription.view.php';
    include __DIR__ . '/../views/includes/footer.view.php';
  }

  public function login()
  {
  }



  public function logout()
  {
  }
}
