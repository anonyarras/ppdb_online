<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Biodata;
use App\Models\Pembayaran;
use PhpParser\Node\Stmt\TryCatch;

class Peserta_controller extends Controller
{
    public function index(){
        $title = 'Data Peserta';
        $data = User::withCount('biodata_r')->whereNull('role')->orderBy('name','asc')->get();
        $data = User::withCount('bayar_r')->whereNull('role')->orderBy('name','asc')->get();
        return view('dashboard.peserta.index',compact('title','data'));

    }
    public function diverifikasi(){
        $title = 'Data Peserta Terverifikasi';
        $data = User::withCount('biodata_r')->where('is_verifikasi',1)->orderBy('name','asc')->get();
        return view('dashboard.peserta.index',compact('title','data'));
    }
    public function belum_verifikasi(){
        $title = 'Data Peserta Yang Belum Terverifikasi';
        $data = User::withCount('biodata_r')->whereNull('is_verifikasi')->orderBy('name','asc')->get();
        return view('dashboard.peserta.index',compact('title','data'));
    }
    public function edit($id){
        $title = 'Edit Data Peserta';
        $dt = User::with('biodata_r')->find($id);
        return view('dashboard.peserta.edit',compact('title','dt'));
    }
    public function update(Request $request,$id){
        try{
            //update table user
            $user['email'] = $request->email;
            $user['name'] = $request->name;
            $user['nisn'] = $request->nisn;
            $user['updated_at'] = date('Y-m-d H:i:s');

            $file = $request->file('photo');
            if($file){
                $nama_file = $file->getClientOriginalName();
                $file->move('uploads/',$nama_file);
                $user['photo'] = 'uploads/'.$nama_file;

            }
            User::where('id',$id)->update($user);
            //update table biodata_r
            $ijazah = $request->file('foto_ijazah');
            if($ijazah){
            $nama_file ='ijazah-'.md5('$id').'.'.$ijazah->getClientOriginalName();
            $ijazah->move('biodata_files',$nama_file);
            $biodata['foto_ijazah'] = 'biodata_files/'.$nama_file;
        }
        $raport = $request->file('foto_raport');
        if($raport){
            $nama_file ='raport-'.md5('$id').'.'.$raport->getClientOriginalName();
            $raport->move('biodata_files',$nama_file);
            $biodata['foto_raport'] = 'biodata_files/'.$nama_file;
        }
        $biodata['no_hp'] = $request->no_hp;
        $biodata['alamat'] = $request->alamat;
        $biodata['tempat_lahir'] = $request->tempat_lahir;
        $biodata['tanggal_lahir'] = $request->tanggal_lahir;
        $biodata['jenis_kelamin'] = $request->jenis_kelamin;
        $biodata['nama_ayah']  =  $request->nama_ayah;
        $biodata['nama_ibu'] = $request->nama_ibu;
        $biodata['alamat_ortu'] = $request->alamat_ortu;
        $biodata['no_tlp_ortu'] = $request->no_tlp_ortu;
        // $data['created_at'] = date('Y-m-d H:i:s');
        $biodata['updated_at'] = date('Y-m-d H:i:s');

        Biodata::where('users',$id)->update($biodata);
        \Session::flash('berhasil','Data Behasil di Update');

        } catch(\Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->back();
    }
    public function delete($id){
        try{
            User::where('id',$id)->delete();

            \Session::flash('berhasil','Data Berhasil Di Hapus');

        }catch(\Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->back();
    }
    public function lulus($id){
        try{
            User::where('id',$id)->update([
                'is_lulus' => 1
            ]);
            \Session::flash('berhasil','Peserta Berhasil Diluluskan');

        }
        catch(\Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect('peserta');
    }
}
