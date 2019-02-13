<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Problems_listController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $problemslist = DB::select('select * from requestproblems');
        return view('problems_list',['problemslist'=>$problemslist]);
    }
    // public function index() {
    //     $users = DB::select('select * from position');
    //     return view('home',['users'=>$users]);
    //  }
}
