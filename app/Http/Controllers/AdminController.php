<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Auth;

class AdminController extends Controller
{
    public function index()
    {
        $problemslist = DB::select('select * from requestproblems');
        return view('admin', ['problemslist' => $problemslist]);
    }

    public function manage()
    {
        $problemslist = \App\Requestproblem::where('fake_delete', '=', null)->get();
        return view('manage', ['problemslist' => $problemslist]);
    }

    public function view($id)
    {
    //   dd($id);
      $problemslist['problemslist'] = \App\Requestproblem::find($id);
    //   return $problemslist;
    //   die();
    return view('view_problemslist', ['problemslist' => $problemslist]);
    }

    public function fake_delete($id) {
        $fake_delete = \App\Requestproblem::find($id);
        $fake_delete->fake_delete = "1";
        $fake_delete->save();
        return redirect()->route('manage');
    }

    
}
