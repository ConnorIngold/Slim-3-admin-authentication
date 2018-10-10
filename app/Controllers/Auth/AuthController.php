<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;

class AuthController extends Controller
{

  public function getSignUp($request, $response )
    // requests the view to to sign up and then gets the response
  {
    return $this->view->render($response, 'auth/signup.twig');

    // return the view to the user
  }

  public function postSignUp()
  {
    // code...
  }
}
