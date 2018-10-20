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

    public function hasPermission($permission) //name of permission as a parameter like $canPost
    {
      return (bool) $this->permissions->{$permission};
    }

    public function isAdmin()
    {
      return $this->hasPermission('is_admin');
    }

    public function permissions()
    {
        return $this->hasOne('App\Models\UserPermission', 'user_id');
    }

}
