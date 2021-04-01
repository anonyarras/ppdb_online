<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\User;
use App\Models\Profile_sekolah;
use Illuminate\Support\Facades\Auth;

use PDF;

class Biodata_controller extends Controller
{
    public function index(){
        $title = 'Update Biodata';
        $user_id = Auth::user()->id;
        $dt = Biodata::where('users',\Auth::user()->id)->first();
        $cek = Biodata::where('users',\Auth::user()->id)->count();
        $cek_lulus = User::find($user_id);
        if($cek_lulus->is_lulus ==1){
            $lulus = 'Anda Sudah Lulus PPDB Online';
        }
        else{
            $lulus = 'Mohon Maaf Status Anda Masih Di Tinjau';
        }
        return view('dashboard.biodata.index',compact('title','dt','cek','cek_lulus','lulus'));
    }
    public function store(Request $request,$id){
        $this->validate($request,[
            'no_hp'=>'required',
            'nama_ayah'=>'required',
            'nama_ibu'=>'required',
            'no_tlp_ortu'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'jenis_kelamin'=>'required',
        ]);
        $file = $request->file('foto_ijazah');
        if($file){
            $nama_file ='ijazah-'.''.md5('$id').'.'.$file->getClientOriginalExtension();
            $file->move('biodata_files',$nama_file);
            $data['foto_ijazah'] = 'biodata_files/'.$nama_file;
        }
        $file = $request->file('foto_raport');
        if($file){
            $nama_file ='raport-'.md5('$id').'.'.$file->getClientOriginalExtension();
            $file->move('biodata_files',$nama_file);
            $data['foto_raport'] = 'biodata_files/'.$nama_file;
        }
        $data['users'] = $id;
        $data['no_hp'] = $request->no_hp;
        $data['alamat'] = $request->alamat;
        $data['tempat_lahir'] = $request->tempat_lahir;
        $data['tanggal_lahir'] = $request->tanggal_lahir;
        $data['jenis_kelamin'] = $request->jenis_kelamin;
        $data['nama_ayah']  =  $request->nama_ayah;
        $data['nama_ibu'] = $request->nama_ibu;
        $data['alamat_ortu'] = $request->alamat_ortu;
        $data['no_tlp_ortu'] = $request->no_tlp_ortu;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        Biodata::insert($data);
        \Session::flash('berhasil','data berhasil di inputkan');
        return redirect()->back();
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'no_hp'=>'required',
            'nama_ayah'=>'required',
            'nama_ibu'=>'required',
            'no_tlp_ortu'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'jenis_kelamin'=>'required',
        ]);
        // $data['users'] = $id;
        $file = $request->file('foto_ijazah');
        if($file){
            $nama_file ='ijazah-'.md5('$id').'.'.$file->getClientOriginalExtension();
            $file->move('biodata_files',$nama_file);
            $data['foto_ijazah'] = 'biodata_files/'.$nama_file;
        }
        $file = $request->file('foto_raport');
        if($file){
            $nama_file ='raport-'.md5('$id').'.'.$file->getClientOriginalExtension();
            $file->move('biodata_files',$nama_file);
            $data['foto_raport'] = 'biodata_files/'.$nama_file;
        }
        $data['no_hp'] = $request->no_hp;
        $data['alamat'] = $request->alamat;
        $data['tempat_lahir'] = $request->tempat_lahir;
        $data['tanggal_lahir'] = $request->tanggal_lahir;
        $data['jenis_kelamin'] = $request->jenis_kelamin;
        $data['nama_ayah']  =  $request->nama_ayah;
        $data['nama_ibu'] = $request->nama_ibu;
        $data['alamat_ortu'] = $request->alamat_ortu;
        $data['no_tlp_ortu'] = $request->no_tlp_ortu;
        // $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        Biodata::where('users',$id)->update($data);
        \Session::flash('berhasil','data berhasil di Update');
        return redirect()->back();
    }
    public function cetak(){
            $sk = Profile_sekolah::first();
            $dt = User::where('id',\Auth::user()->id)->with('biodata_r')->first();
            $pdf = PDF::loadview('dashboard.biodata.pdf',compact('dt','sk'))->setPaper('a4','landscape');
            return $pdf->stream();

        return redirect->back();
    }
}
