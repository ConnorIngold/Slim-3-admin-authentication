<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{

  protected $table = 'users';
  // Eloquent automatically adds an S onto the end
  // of the Class name when checking the db but you
  // can specially define the name of the class if needed

}
