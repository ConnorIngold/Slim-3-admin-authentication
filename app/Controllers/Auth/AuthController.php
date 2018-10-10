<?php

namespace App\Controllers\Auth;

use App\Models\User;
use App\Controllers\Controller;

class AuthController extends Controller
{

  public function getSignUp($request, $response)
    // requests the view to to sign up and then gets the response
  {
    return $this->view->render($response, 'auth/signup.twig');

    // return the view to the user
  }

  public function postSignUp($request, $response)
  {


    $user = User::create([
      'email' => $request->getParam('email'),
      'name' => $request->getParam('name'),
      'password' => password_hash($request->getParam('password'), PASSWORD_DEFAULT),
    ]);

    return $response->withRedirect($this->router->pathFor('home'));
    // after the user is created need to redirect to home page
    // can redirect to any other page by creating the route $ setting a name
    // then add then name to inside here pathFor('INSERT_HERE')
  }
}
