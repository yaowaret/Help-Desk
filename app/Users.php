<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'position', 'location', 'tel', 'email', 'password', 'device', 'device_problem', 'status',
    ];

    
    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'name', 'position', 'location', 'tel', 'email', 'password', 'device', 'device_problem', 'case', 'remember_token',
    // ];
}

