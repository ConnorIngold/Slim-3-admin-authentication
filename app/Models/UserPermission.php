<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    protected $table = 'users_permissions';

    protected $fillable = [
          'id_admin'
      ];

    public static $defaults = [
          'is_admin' => false
      ];
}