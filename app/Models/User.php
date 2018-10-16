<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{

  // Eloquent automatically adds an S onto the end
  // of the Class name when checking the db but you
  // can specially define the name of the class if needed

  protected $table = 'users';
  protected $fillable = [
        'email',
        'password',
        'name',
    ];

    // found this fix on stack overflow
    // I pretty sure it states write tables
    // are writtable to the database
    public function setPassword($password)
  	{
  		$this->update([
  			'password' => password_hash($password, PASSWORD_DEFAULT)
  		]);
  	}

}
