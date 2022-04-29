<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mailes;
use App\Http\Controllers\AgentDashboardController;
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

// Route::get('/',[Mailes::class,'test1']);

Route::get('/', function () {
    return view('home');
})->name('home')->middleware('authCheck');

// login routes
Route::view('/signin','signin')->middleware('authCheck');

// registration routes start

Route::get('/register/userinfo', function () {
    return view('register.userinfo');
})->name('registerBtn')->middleware('authCheck');

// Route::get('/register/userinfo',[Mailes::class,'test1'])->name('registerBtn');

Route::get('/register/userdata/{id}',function($id){
    $i = compact('id');
    return view('register.userdata')->with($i);
})->name('userdata')->middleware('isLoggedIn'); 

Route::get('/register/userdocuments/{id}',function($id){
    $i = compact('id');
    return view('register.userdoc')->with($i);
})->name('userdoc')->middleware('isLoggedIn');

// registration routes end




// Borrower
Route::get('/user/borrower', function(){
    return view('user.borrower.dashboard');
})->middleware('isLoggedIn');
Route::get('/user/lender', function(){
    return view('user.lender.dashboard');
})->middleware('isLoggedIn');


//Agent Routes
Route::view('/agent/signin', 'agent.agentSignin');

Route::get('agent/dashboard',[AgentDashboardController::class,'getAllUsers'])->middleware('isAgentLoggedIn');

Route::get('transaction',[AgentDashboardController::class,'allTransaction'])->middleware('isAgentLoggedIn');

Route::get('request',[AgentDashboardController::class,'request'])->middleware('isAgentLoggedIn');


//transaction for a particular user 
Route::get('userview/transaction/{id}',[AgentDashboardController::class,'userTransaction'])->middleware('isAgentLoggedIn');


// Queries Testing
Route::get('query',function(){
    return view('queries.userquery');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('authCheck');





Route::get('/getTestData', [AgentDashboardController::class,'getTestData']);

Route::get('userview/{id}',[AgentDashboardController::class,'ShowUsersDetails'])->name('userview')->middleware('isAgentLoggedIn');


