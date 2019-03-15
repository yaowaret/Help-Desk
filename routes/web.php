<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('request_all', 'Request_ProblemController@request_all')->name('request_all');
Route::get('/problems_list', 'Request_ProblemController@problems_list')->name('problems_list');

Route::get('/app', 'Request_ProblemController@app');

Route::get('/delete/{id}', 'Request_ProblemController@delete');
Route::get('/problems', 'Request_ProblemController@index')->name('problems');

Route::get('/problems_edit/{id}', 'Request_ProblemController@edit')->name('edit');
Route::get('/update/{id}', 'Request_ProblemController@update')->name('update');
Route::get('problems_edit', 'Request_ProblemController@problems_edit')->name('problems_edit');

Route::post('problemslists/{id}','AdminController@status')->name('problemslists.status');
Route::group(['middlewere' => ['web', 'auth']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', function () {
        if (Auth::user()->status == 0) {
            $user_id = Auth::id();
            $notify = DB::select("SELECT COUNT(*) AS total FROM requestproblems WHERE status = 2 AND user_id = $user_id");
            return view('users.problems', compact('notify'));
        } else {
            $notify = DB::select("SELECT COUNT(*) AS total FROM requestproblems WHERE status = 0");
            $problemslist = \App\Requestproblem::where('status', '=', 0)->get(); 
            $problemslistworking  = \App\Requestproblem::where('status', '=', 1)->get(); 
            return view('admin', compact('problemslist','problemslistworking','notify'));
        }
    });

});

Route::get('/admin', 'AdminController@index');
Route::get('/manage', 'AdminController@manage')->name('manage');

Route::get('/view_problemslist/{id}', 'AdminController@view')->name('view');
// Route::get('/view_problemslist/{id}', 'AdminController@test');

Route::get('/admin/fake_delete/{id}','AdminController@fake_delete');
Route::get('/admin/status/{id}','AdminController@status');
Route::get('/admin/status_cancel/{id}','AdminController@status_cancel');
Route::get('/admin/finish/{id}','AdminController@finish');
Route::get('/user/confirm/{id}','Request_ProblemController@confirm');
Route::get('/user/cancel/{id}','Request_ProblemController@cancel');

Route::get('/profile/{id}', 'Request_ProblemController@profile')->name('profile');