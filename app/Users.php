<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
  public function roles()
  {
      return $this->hasOne('App\Roles');
  }
}
