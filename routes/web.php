<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/create', function () {
  return view('welcome');
});

// Route::get('/pegawai', '\App\Http\Controllers\AdminController@index');
// Route::get('/pegawai/create', function () {
//   return view('tambah_user');
// });
// Route::get('user/add_user', 'App\Http\Controllers\AdminController@create')->name('create');

/*
-------------------------------------------------------------------------
*/

Route::get('/petugas', 'App\Http\Controllers\AdminController@lihat');
Route::get('/tambah', 'App\Http\Controllers\AdminController@tambah');
Route::get('users/delete/{id}', 'App\Http\Controllers\AdminController@delete')->name('delete');
Route::get('users/edit/{id}', 'App\Http\Controllers\AdminController@edit_user')->name('edit_user');
Route::get('users/update', 'App\Http\Controllers\AdminController@edit_user_aksi')->name('edit_user
_aksi');
Route::get('users/add_user', 'App\Http\Controllers\AdminController@add_user')->name('add_user');


/*
------------------------------------------------------------------------- petugas masuk.
*/
Route::get('/create', function () {
  return view('welcome');
});

// Route::get('/pegawai', '\App\Http\Controllers\AdminController@index');
// Route::get('/pegawai/create', function () {
//     return view('tambah_kendaraan');
//    });
// Route::get('kendaraan/add_kendaraan', 'App\Http\Controllers\AdminController@creating')->name('creating');

Route::get('/pmasuk', 'App\Http\Controllers\AdminController@melihat'); 
Route::get('/menambah', 'App\Http\Controllers\AdminController@menambah');
Route::get('kendaraan/add_kendaraan', 'App\Http\Controllers\AdminController@add_kendaraan')->name('add_kendaraan');


/*
----------------------------------------------------------------------- petugas ruang.
*/

Route::get('user/add_user', 'App\Http\Controllers\AdminController@add_user')->name('add_user');

/*
-------------------------------------------------------------------------
*/
Route::get('/create', function () {
  return view('welcome');
});

Route::get('/pegawai', '\App\Http\Controllers\AdminController@index');
Route::get('/pegawai/create', function () {
    return view('tambah_kendaraan');
   });
Route::get('kendaraan/add_kendaraan', 'App\Http\Controllers\AdminController@creating')->name('creating');

Route::get('/pruang', 'App\Http\Controllers\ruangController@index'); 
Route::get('pruang/edit/{id}', 'App\Http\Controllers\ruangController@edit_ruang');
Route::get('pruang/update', 'App\Http\Controllers\ruangController@edit_ruang_aksi');

Route::get('/pkeluar', 'App\Http\Controllers\ruangController@lihat_keluar'); 
Route::get('pkeluar/edit/{id}', 'App\Http\Controllers\ruangController@edit_pkeluar');
Route::get('pkeluar/update', 'App\Http\Controllers\ruangController@edit_pkeluar_aksi');


Route::get('/', 'App\Http\Controllers\loginController@index')->name('login');
Route::post('/login', 'App\Http\Controllers\loginController@authenticate');
Route::post('/logout', 'App\Http\Controllers\loginController@logout');


Route::get('/keuangan', 'App\Http\Controllers\keuanganController@keuangan')->name('keuangan');

Route::get('/melihat', 'App\Http\Controllers\AdminController@melihat'); 
Route::get('/menambah', 'App\Http\Controllers\AdminController@menambah');
Route::get('kendaraan/add_kendaraan', 'App\Http\Controllers\AdminController@add_kendaraan')->name('add_kendaraan');

