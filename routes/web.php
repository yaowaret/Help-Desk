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

Route::get('request_all','Request_ProblemController@request_all')->name('request_all');
// Route::resource('problems','Request_ProblemController');
Route::get('/problems_list', 'Request_ProblemController@problems_list')->name('problems_list');

Route::get('/delete/{id}', 'Request_ProblemController@delete');
Route::get('/problems', 'Request_ProblemController@index')->name('problems');

Route::get('/problems_edit/{id}', 'Request_ProblemController@edit')->name('edit');
Route::get('/update/{id}', 'Request_ProblemController@update')->name('update');
Route::get('problems_edit','Request_ProblemController@problems_edit')->name('problems_edit');


Route::group(['middlewere' => ['web','auth']], function(){
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/home', function(){
      if (Auth::user()->status == 0){
        return view('home');
        }else{
        $users['users'] = \App\User::all();
        return view('adminhome', $users); 
        }
    });
    
    });
