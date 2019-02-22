<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Requestproblem;
use DB;
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
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function problems_list()
    {
        $problemslist = Requestproblem::all();
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
        $problemslist = Requestproblem::find($id);
        return view('problems_edit', compact('problemslist'));
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

 

    public function store(){
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

}
