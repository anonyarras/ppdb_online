<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\User;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;
class Beranda_controller extends Controller
{
    public function index(){
        $title = 'Halaman Dashboard';

        $user_id = Auth::user()->id;
        $cek = Biodata::where('users',$user_id)->count();
        if($cek == 1){
            $pesan = 'Biodata Telah Di Lengkapi';
        }
        else{
            $pesan = 'Harap Lengkapi Biodata Anda';
        }
        $cek_verifikasi = User::find($user_id);
        if($cek_verifikasi-> is_verifikasi == 1){
            $status = 'Status Sudah Di Verifikasi';
        }
        else{
            $status = 'Belum Di Verifikasi';
        }
        $cek_bayar = Pembayaran::where('users',$user_id)->count();
        if($cek_bayar == 1){
            $bayar = 'Bukti Pembayaran Sudah Di Upload';
        }
        else{
            $bayar = 'Harap Upload Bukti Pembayaran';
        }

        return view('dashboard.beranda.index',compact('title','pesan','cek','status','bayar','cek_bayar'));
    }
}
