<?php

namespace App\Http\Controllers;

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
        $problemslist = DB::select("select * from requestproblems");
     //   $problemslist = DB::table('requestproblems')->where_email('manee@gmail.com')->first();
        return view('problems_list', ['problemslist' => $problemslist]);
    }
    public function delete($id){
        DB::table('requestproblems')->where('id',$id)->delete();
        return redirect()->route('problems_list')->with('succes','ลบข้อมูลเรียบร้อย');
     }

//      public function destroy($id)
//      {
//          $problemslist = Requestproblem::find($id);
//          $problemslist->delete();
//          return redirect()->route('problems_list')->with('success', 'Delete laew jaa');
//      }
}
