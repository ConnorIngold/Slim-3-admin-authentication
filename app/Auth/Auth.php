<?php

namespace App\Auth;

use App\Models\User;

class Auth
{
  public function attempt($email, $password)
  {

    $user = User::where('email', $email)->first();

    // grab the users email

    if (!$user) {
      return false;
    }
    // if !user return false
    if(password_verify($password, $user->password)){
      $_SESSION['user'] = $user->id;
      return true;
    }


    return false;

        // verify password for that user
    // set into session
  }
}