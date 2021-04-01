<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\User;
use App\Models\Profile_sekolah;
use Illuminate\Support\Facades\Auth;

class Pembayaran_controller extends Controller
{
    public function index(){
        $title = 'Update Pembayaran';
        $user_id = Auth::user()->id;
        $dt = Pembayaran::where('users',\Auth::user()->id)->first();
        $cek = Pembayaran::where('users',\Auth::user()->id)->count();
        $cek_bayar = Pembayaran::where('users',$user_id)->count();
        if($cek_bayar == 1){
            $bayar = 'Bukti Pembayaran Sudah Di Upload';
        }
        else{
            $bayar = 'Harap Upload Bukti Pembayaran';
        }
        return view('dashboard.pembayaran.index',compact('title','dt','cek','cek_bayar','bayar'));
    }
    public function store(Request $request, $id){
        $file = $request->file('bukti');
        if($file){
            $nama_file ='bukti-'.''.md5('$id').'.'.$file->getClientOriginalExtension();
            $file->move('pembayaran',$nama_file);
            $data['bukti'] = 'pembayaran/'.$nama_file;
        }
        $data['users'] = $id;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        Pembayaran::insert($data);
        \Session::flash('berhasil','data berhasil di inputkan');
        return redirect()->back();
    }
    public function update(Request $request, $id){
        $file = $request->file('bukti');
        if($file){
            $nama_file ='bukti-'.''.md5('$id').'.'.$file->getClientOriginalExtension();
            $file->move('pembayaran',$nama_file);
            $data['bukti'] = 'pembayaran/'.$nama_file;
        }
        // $data['users'] = $id;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        Pembayaran::where('users',$id)->update($data);
        \Session::flash('berhasil','data berhasil di Update');
        return redirect()->back();
    }
}
