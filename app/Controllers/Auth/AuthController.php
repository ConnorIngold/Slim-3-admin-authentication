<?php

namespace App\Controllers\Auth;

use App\Models\User;
use App\Controllers\Controller;
use Respect\Validation\Validator as v;

class AuthController extends Controller
{
  public function getSignOut($request, $response)
  {
    $this->auth->logout();

    return $response->withRedirect($this->router->pathFor('home'));
  }

  public function getSignIn($request, $response)
  {
    return $this->view->render($response, 'auth/signin.twig');
  }

  public function postSignIn($request, $response)
  {
    $auth = $this->auth->attempt(
			$request->getParam('email'),
			$request->getParam('password')
		);

    if (!$auth) {
      $this->flash->addMessage('error', 'Incorrect email or password');
      return $response->withRedirect($this->router->pathFor('auth.signin'));
    }

    return $response->withRedirect($this->router->pathFor('home'));
  }

  public function getSignUp($request, $response)
    // requests the view to to sign up and then gets the response
  {

    return $this->view->render($response, 'auth/signup.twig');

    // return the view to the user
  }

  public function postSignUp($request, $response)
  {

    $validation = $this->validator->validate($request, [
        'email' => v::noWhitespace()->notEmpty()->email()->emailAvailable(),
        'name' => v::noWhitespace()->notEmpty()->alpha(),
        'password' => v::noWhitespace()->notEmpty(),
    ]);

    if($validation->failed()){
      // if validation failed we want to redirect back
      return $response->withRedirect($this->router->pathFor('auth.signup'));
    }

    $user = User::create([
      'email' => $request->getParam('email'),
      'name' => $request->getParam('name'),
      'password' => password_hash($request->getParam('password'), PASSWORD_DEFAULT),
    ]);

    $this->flash->addMessage('info', 'You have been signed up');

    // log the user directly in
		$this->auth->attempt($user->email, $request->getParam('password'));

    return $response->withRedirect($this->router->pathFor('home'));
    // after the user is created need to redirect to home page
    // can redirect to any other page by creating the route $ setting a name
    // then add then name to inside here pathFor('INSERT_HERE')
  }
}
