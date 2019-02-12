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
    protected $table = 'requestproblem';
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'position', 'location', 'tel', 'email', 'password', 'device', 'device_problem', 'case',
    ];
}

