<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Requestproblem;
use App\Status;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        $notify = DB::select("SELECT COUNT(*) AS total FROM requestproblems WHERE status = 0");
        $problemslist = DB::select('select * from requestproblems');
        return view('admin', compact('problemslist', 'notify'));
    }

    public function manage()
    {
        $notify = DB::select("SELECT COUNT(*) AS total FROM requestproblems WHERE status = 0");
        $problemslist = \App\Requestproblem::where('fake_delete', '=', null)->get();
        return view('manage', compact('problemslist', 'notify'));
    }

    public function view($id)
    {
        //   dd($id);
        $notify = DB::select("SELECT COUNT(*) AS total FROM requestproblems WHERE status = 0");
        $problemslist['problemslist'] = \App\Requestproblem::find($id);
        //   return $problemslist;
        //   die();
        return view('view_problemslist', compact('problemslist', 'notify'));
    }

    public function fake_delete($id)
    {
        $fake_delete = \App\Requestproblem::find($id);
        $fake_delete->fake_delete = "1";
        $fake_delete->save();
        return redirect()->route('manage');
    }

    public function status($id)
    {
        $problemslists = status::find($id);
        $problemslists->status = "1";
        $problemslists->save();
        return redirect()->back();
    }

    public function status_cancel($id)
    {
        $problemslistworkings = \App\Requestproblem::find($id);
        $problemslistworkings->status = "0";
        $problemslistworkings->save();
        return redirect()->back();
    }
    public function finish($id)
    {
        $problemslistworkings = \App\Requestproblem::find($id);
        $problemslistworkings->status = "2";
        $problemslistworkings->save();
        return redirect()->back();
    }

}
