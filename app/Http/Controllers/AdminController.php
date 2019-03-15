<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Requestproblem;
use App\Status;
use Auth;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $notify = DB::select("SELECT COUNT(*) AS total FROM requestproblems WHERE status = 0");
        $problemslist = \App\Requestproblem::where('status', '=', 0)->get();
        $problemslistworking = \App\Requestproblem::where('status', '=', 1)->get();
        return view('admin', compact('problemslist', 'problemslistworking', 'notify'));
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
        $problemslists->authorities = Auth::user()->name;
        $problemslists->save();
        return redirect()->back();
    }

    public function status_cancel($id)
    {
        $problemslistworkings = \App\Requestproblem::find($id);
        $problemslistworkings->status = "0";
        $problemslistworkings->authorities = null;
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
