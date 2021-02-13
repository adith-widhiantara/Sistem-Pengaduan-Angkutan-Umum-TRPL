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
//     return view('beranda');
// });

Auth::routes();

//USER
Route::get('/', 'BerandaController@beranda');
Route::get('/profil', 'ProfilController@profil');
Route::get('/pengaduan', 'PengaduanController@create')->name('pengaduan.create');
Route::post('/pengaduan', 'PengaduanController@store')->name('pengaduan.store');
Route::get('/pengaduan1', 'PengaduanController@index');
Route::get('/pengaduan', 'PengaduanController@index1');
Route::delete('/pengaduan1/{pengaduan1}', 'PengaduanController@destroy')->name('pengaduan1.destroy');
Route::get('/verifikasi1/{verifikasi1}', 'PengaduanController@edit')->name('verifikasi1.edit');
Route::patch('/verifikasi1/{verifikasi1}', 'PengaduanController@update')->name('verifikasi1.update');

Route::get('/profil', 'ProfilController@edit')->name('user.edit');
Route::post('/profil', 'ProfilController@update')->name('user.update');

//DINAS
Route::get('/dinas', 'BerandaController@beranda1');
Route::get('/profil1', 'Profil1Controller@profil1');
Route::get('/buatpengaduan1', 'Pengaduan1Controller@create')->name('buatpengaduan1.create');
Route::post('/buatpengaduan1', 'Pengaduan1Controller@store')->name('buatpengaduan1.store');
Route::get('/tabelpengaduan1', 'Pengaduan1Controller@index');
Route::get('/pengaduan2', 'Pengaduan1Controller@index1');
Route::get('/tabelpengaduan1', 'PengaduanController@index2');
Route::get('/lihatpengaduan1/{lihatpengaduan1}', 'Pengaduan1Controller@show')->name('lihatpengaduan1.show');
Route::get('/ubahpengaduan1/{ubahpengaduan1}', 'Pengaduan1Controller@edit')->name('ubahpengaduan1.edit');
Route::patch('/ubahpengaduan1/{ubahpengaduan1}', 'Pengaduan1Controller@update')->name('ubahpengaduan1.update');
Route::delete('/tabelpengaduan1/{tabelpengaduan1}', 'Pengaduan1Controller@destroy')->name('tabelpengaduan1.destroy');
Route::get('/verifikasi2/{verifikasi2}', 'Pengaduan1Controller@edit1')->name('verifikasi2.edit1');
Route::patch('/verifikasi2/{verifikasi2}', 'Pengaduan1Controller@update1')->name('verifikasi2.update1');
Route::get('/timeline1/{timeline1}', 'PengaduanController@edit1')->name('timeline1.edit1');
Route::patch('/timeline1/{timeline1}', 'PengaduanController@update1')->name('timeline1.update1');

Route::get('/profil1', 'Profil1Controller@edit1')->name('user.edit1');
Route::post('/profil1', 'Profil1Controller@update1')->name('user.update1');

//OWNER
Route::get('/owner', 'BerandaController@beranda2');
Route::get('/profil2', 'Profil2Controller@profil2');
Route::get('/buatpengaduan2', 'Pengaduan2Controller@create')->name('buatpengaduan2.create');
Route::post('/buatpengaduan2', 'Pengaduan2Controller@store')->name('buatpengaduan2.store');
Route::get('/tabelpengaduan2', 'Pengaduan2Controller@index');
Route::get('/pengaduan2', 'PengaduanController@index3');
Route::get('/tabelpengaduan2', 'PengaduanController@index4');
Route::get('/lihatpengaduan2/{lihatpengaduan2}', 'Pengaduan2Controller@show')->name('lihatpengaduan2.show');
Route::get('/ubahpengaduan2/{ubahpengaduan2}', 'Pengaduan2Controller@edit')->name('ubahpengaduan2.edit');
Route::patch('/ubahpengaduan2/{ubahpengaduan2}', 'Pengaduan2Controller@update')->name('ubahpengaduan2.update');
Route::delete('/tabelpengaduan2/{tabelpengaduan2}', 'Pengaduan2Controller@destroy')->name('tabelpengaduan2.destroy');
Route::get('/verifikasi2/{verifikasi2}', 'PengaduanController@edit2')->name('verifikasi2.edit2');
Route::patch('/verifikasi2/{verifikasi2}', 'PengaduanController@update2')->name('verifikasi2.update2');

Route::get('/profil2', 'Profil2Controller@edit2')->name('user.edit2');
Route::post('/profil2', 'Profil2Controller@update2')->name('user.update2');

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/', function () {
        if (Auth::user()->role == 0) {
            return view('beranda');
        } elseif (Auth::user()->role == 1) {
            return redirect('/owner');
        } else {
            $users['users'] = \App\User::all();
            return view('dinas.beranda1', $users);
        }
    });
});



Route::post('/comment', 'CommentController@store')->name('comment.store');

Route::get('/comment/{id}', 'PengaduanController@show')->name('comment.show');

Route::get('/comment1/{id}', 'PengaduanController@show1')->name('comment1.show1');

Route::get('/comment2/{id}', 'Pengaduan1Controller@show1')->name('comment2.show1');
