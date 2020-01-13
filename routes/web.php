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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/index0', function () {
    return view('index0');
});

Route::get('/welcome0', function () {
    return view('welcome0');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// ถ้าอยู่ในนี้จะเป็นส่วนของ Admin สามารถเข้าได้ middleware ถึง  });
Route::group(['middleware' => ['auth','admin']], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/role-register','Admin\DashboardController@registered');
    Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}','Admin\DashboardController@registereupdate');
    Route::delete('/role-delete/{id}','Admin\DashboardController@registeredelete');

    // Route::resource('Personnelbmi','PersonnelbmiController');
    Route::post('/addimage','PersonnelbmiController@store')->name('addimage');

    Route::resource('PersonnelBackyard','PersonnelBackyardController');

  });

  Route::resource('Personnel','PersonnelController');
  //เพิ่มข้อมูล bmi


  Route::get('/recommend', function () {
    //แนะนำผู้ใช้งาน
        return view('recommend');
    });

Route::get('/province','DrowController@index');
