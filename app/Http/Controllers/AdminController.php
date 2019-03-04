<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Requestproblem;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $problemslist = DB::select('select * from requestproblems');
        return view('admin',['problemslist'=>$problemslist]);
     }

     public function manage() {
        $problemslist = DB::select('select * from requestproblems');
        return view('manage',['problemslist'=>$problemslist]);
     }
}
