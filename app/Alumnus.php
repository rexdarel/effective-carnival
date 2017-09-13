<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Alumnus extends Authenticatable
{
    //Mass assignable attributes
  protected $fillable = [
      'firstName', 'lastName', 'username', 'password',
  ];

  //hidden attributes
   protected $hidden = [
       'password', 'remember_token',
   ];

}
