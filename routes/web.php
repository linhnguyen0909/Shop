<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

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

// Route::get('/{locale}', function ($locale) {
//     App::setLocale($locale);
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
//Route::get('login', 'Auth\LoginController@index')->name('login');


 Route::get('login', 'Auth\LoginController@index');
 Route::post('post-login', 'Auth\LoginController@postLogin');
 Route::get('registration', 'Auth\LoginController@registration');
 Route::post('post-registration', 'Auth\LoginController@postRegistration');
 Route::get('dashboard', 'Auth\LoginController@dashboard');
 Route::get('logout', 'Auth\LoginController@logout');

Route::resource('users', 'UserController');
Route::resource('/contacts', 'ContactController');
//Route::group(['prefix'=>'{locale}','middleware' => 'localization'], function ($locale) {
//    Route::get('/', function () {
//        return view('welcome');
//    })->name('welcome');
//});
//Route::get('/home',function (){
//    return view('home');
//});


//Route::get('employees', 'EmployeeController@create')->name('employees.create');
//Route::post('employees', 'EmployeeController@store')->name('employees.store');


