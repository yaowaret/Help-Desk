<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requestproblem extends Model
{
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'requestproblems';
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'position', 'location', 'tel', 'email', 'password', 'device', 'device_problem', 'case','user_id',
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

