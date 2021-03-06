<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Requestproblem;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;

class Request_ProblemController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $notify = DB::select("SELECT COUNT(*) AS total FROM requestproblems WHERE status = 2 AND user_id = $user_id ");
        return view('users.problems', compact('notify'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('users.problems');
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function problems_list(Request $request)
    {
        $user_id = Auth::id();
        $problemslist = Requestproblem::where('user_id', '=', $user_id)->where('status','!=',3)->get();
        $notify = DB::select("SELECT COUNT(*) AS total FROM requestproblems WHERE status = 2 AND user_id = $user_id");
        return view('problems_list', compact('problemslist', 'notify'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = Auth::id();
        $problemslist = Requestproblem::find($id);
        $notify = DB::select("SELECT COUNT(*) AS total FROM requestproblems WHERE status = 2 AND user_id = $user_id");
        return view('problems_edit', compact('problemslist', 'notify'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestproblem = Requestproblem::find($id);
        $requestproblem->name = $request->name;
        $requestproblem->position = $request->position;
        $requestproblem->location = $request->location;
        $requestproblem->tel = $request->tel;
        $requestproblem->email = $request->email;
        $requestproblem->device = $request->device;
        $requestproblem->device_problem = $request->device_problem;
        $requestproblem->case = $request->case;
        $requestproblem->save();

        return redirect()->route('problems_list')->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('requestproblems')->where('id', $id)->delete();
        return redirect()->route('problems_list')->with('succes', 'ลบข้อมูลเรียบร้อย');
    }


    public function request_all(Request $request)
    {
        $requestproblem = new Requestproblem;
        $requestproblem->user_id = auth()->id();
        $requestproblem->name = $request->name;
        $requestproblem->position = $request->position;
        $requestproblem->location = $request->location;
        $requestproblem->tel = $request->tel;
        $requestproblem->email = $request->email;
        $requestproblem->device = $request->device;
        $requestproblem->device_problem = $request->device_problem;
        $requestproblem->case = $request->case;
        $requestproblem->save();

        return redirect()->route('problems_list')->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'string', 'min:10', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'device' => ['required', 'string', 'max:255'],
            'device_problem' => ['required', 'string', 'max:255'],
            'case' => ['required', 'string', 'max:255'],
        ]);
    }
    public function confirm($id)
    {
        $problemslists = \App\Requestproblem::find($id);
        $problemslists->status = "3";
        $problemslists->save();
        return redirect()->back();
    }
    public function cancel($id)
    {
        $problemslists = \App\Requestproblem::find($id);
        $problemslists->status = "1";
        $problemslists->save();
        return redirect()->back();
    }

    // public function profile($id)
    // {
        
    //     $user_id = Auth::id();
    //     $id = \Auth::user()->id;
    //     $notify = DB::select("SELECT COUNT(*) AS total FROM requestproblems WHERE status = 2 AND user_id = $user_id");
    //     $problemslist = \App\User::find($id);
    //     return view('profile', compact('problemslist','notify'));
    // }
    public function profile(Request $request)
    {
        $id = \Auth::user()->id;
        $user_id = Auth::id();
        $problemslist = \App\User::find($id);
        // return $problemslist;
        $notify = DB::select("SELECT COUNT(*) AS total FROM requestproblems WHERE status = 2 AND user_id = $user_id");
        return view('profile', compact('problemslist','notify'));
    }

      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_profile(Request $request, $id)
    {
        $requestproblem = User::find($id);
        $requestproblem->name = $request->name;
        $requestproblem->position = $request->position;
        $requestproblem->location = $request->location;
        $requestproblem->tel = $request->tel;
        $requestproblem->email = $request->email;
        $requestproblem->save();

        return redirect()->route('view_profile')->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    public function view_profile(Request $request)
    {
        $id = \Auth::user()->id;
        $user_id = Auth::id();
        $problemslist = \App\User::find($id);
        // return $problemslist;
        $notify = DB::select("SELECT COUNT(*) AS total FROM requestproblems WHERE status = 2 AND user_id = $user_id");
        return view('view_profile', compact('problemslist','notify'));
    }

}
