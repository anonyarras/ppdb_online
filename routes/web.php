<?php

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

Route::get('/', function () {
    $title = 'PPDB Online MTS Insan Takwa';
    return view('welcome',compact('title'));
});
Route::get('create-admin',function(){
    \DB::table('users')->insert([
        'role'=>1,
        'name'=>'admin',
        'nisn'=>'1',
        'email'=>'admin@gmail.com',
        'id_registrasi'=>'admin',
        'password'=>bcrypt('arras1aditya'),

    ]);
});
//Pendaftaran
Route::get('ppdb',[App\Http\Controllers\Ppdb_controller::class,'index']);
Route::post('ppdb',[App\Http\Controllers\Ppdb_controller::class,'store']);

Route::group(['middleware'=>'auth'],function(){
    Route::get('dashboard',[App\Http\Controllers\Dashboard\Beranda_controller::class,'index']);
    Route::get('biodata',[App\Http\Controllers\Dashboard\Biodata_controller::class,'index']);
    Route::post('biodata/{users}',[App\Http\Controllers\Dashboard\Biodata_controller::class,'store']);
    Route::patch('biodata/{users}',[App\Http\Controllers\Dashboard\Biodata_controller::class,'update']);
    //cetak biodata
    Route::get('cetak_biodata',[App\Http\Controllers\Dashboard\Biodata_controller::class,'cetak']);
    //verifikasi
    Route::get('verifikasi',[App\Http\Controllers\Dashboard\Verifikasi_controller::class,'index']);
    Route::post('verifikasi',[App\Http\Controllers\Dashboard\Verifikasi_controller::class,'verifikasi']);
    //data peserta
    Route::get('peserta',[App\Http\Controllers\Dashboard\Peserta_controller::class,'index']);
    Route::get('peserta/verifikasi',[App\Http\Controllers\Dashboard\Peserta_controller::class,'diverifikasi']);
    Route::get('peserta/belum-verifikasi',[App\Http\Controllers\Dashboard\Peserta_controller::class,'belum_verifikasi']);
    Route::get('peserta/{id}/edit',[App\Http\Controllers\Dashboard\Peserta_controller::class,'edit']);
    Route::patch('peserta/{id}',[App\Http\Controllers\Dashboard\Peserta_controller::class,'update']);
    Route::delete('peserta/{id}',[App\Http\Controllers\Dashboard\Peserta_controller::class,'delete']);
    Route::get('peserta/{id}/lulus',[App\Http\Controllers\Dashboard\Peserta_controller::class,'lulus']);

    //profile sekolah
    Route::get('profile-sekolah',[App\Http\Controllers\Dashboard\Profile_sekolah_controller::class,'index']);
    Route::patch('profile-sekolah',[App\Http\Controllers\Dashboard\Profile_sekolah_controller::class,'update']);
    //Pesan
    Route::get('pesan/add',[App\Http\Controllers\Dashboard\Pesan_controller::class,'add']);
    Route::post('pesan/add',[App\Http\Controllers\Dashboard\Pesan_controller::class,'store']);
    Route::get('pesan',[App\Http\Controllers\Dashboard\Pesan_controller::class,'index']);
    Route::get('pesan/{id}',[App\Http\Controllers\Dashboard\Pesan_controller::class,'detail']);
    //Berita
    Route::get('berita',[App\Http\Controllers\Dashboard\Berita_controller::class,'index']);
    Route::get('berita/add',[App\Http\Controllers\Dashboard\Berita_controller::class,'create']);
    Route::post('berita/add',[App\Http\Controllers\Dashboard\Berita_controller::class,'store']);
    Route::get('berita/{id}/edit',[App\Http\Controllers\Dashboard\Berita_controller::class,'edit']);
    Route::patch('berita/{id}',[App\Http\Controllers\Dashboard\Berita_controller::class,'update']);
    Route::delete('berita/{id}',[App\Http\Controllers\Dashboard\Berita_controller::class,'destroy']);
    //pembayaran
    Route::get('bayar',[App\Http\Controllers\Dashboard\Pembayaran_controller::class,'index']);
    Route::post('bayar/{users}',[App\Http\Controllers\Dashboard\Pembayaran_controller::class,'store']);
    Route::patch('bayar/{users}',[App\Http\Controllers\Dashboard\Pembayaran_controller::class,'update']);

});

Auth::routes();
Route::get('homeberita',[App\Http\Controllers\Landing_controller::class,'index']);

Route::get('/home',function(){
    return redirect('dashboard');
});
