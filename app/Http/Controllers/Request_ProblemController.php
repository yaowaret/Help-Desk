<?php

namespace App\Http\Controllers;

use DB;
use App\Requestproblem;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Request_ProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.problems');
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
    public function store(Request $request)
    {
        //return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function problems_list()
    {
        $problemslist = DB::select("select * from requestproblems");
        return view('problems_list', ['problemslist' => $problemslist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $problemslist = DB::select("select * from requestproblems");

        return view('problems_edit', ['problemslist' => $problemslist]);
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
        //
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

     


}
