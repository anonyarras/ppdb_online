<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\DB;

class Berita_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'List Berita';

        $data = Berita::orderBy('created_at','desc')->simplepaginate(10);
        return view('dashboard.berita.index',compact('title','data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Menambah Berita';
        return view('dashboard.berita.add',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul'=>'required',
            'isi'=>'required',
        ]);
        $data['judul'] = $request->judul;
        $data['isi'] = $request->isi;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        $file = $request->file('foto');
        if($file){
            $nama_gambar = 'berita'.md5('id').'.'.$file->getClientOriginalName();
            $file->move('sekolah_img',$nama_gambar);
            $data['foto'] = 'sekolah_img/'.$nama_gambar;
        }

        Berita::insert($data);
        \Session::flash('berhasil','Berita Berhasil Di Update');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dt = Berita::where('id',$id)->first();
        $title = 'Detail Pesan';
        return view('dashboard.berita.edit',compact('title','dt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'judul' => 'required',
            'isi' =>'required',
        ]);
        $dt['judul'] = $request->judul;
        $dt['isi'] = $request->isi;
        // $dt->created_at = date('Y-m-d H:i:s');
        $dt['updated_at'] = date('Y-m-d H:i:s');
        $file = $request->file('foto');
        if($file){
            $nama_gambar = 'berita'.md5('id').'.'.$file->getClientOriginalName();
            $file->move('sekolah_img',$nama_gambar);
            $dt['foto'] = 'sekolah_img/'.$nama_gambar;
        }
        Berita::where('id',$id)->update($dt);

        \Session::flash('berhasil','Berita Berhasil di Update');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Berita::where('id',$id)->delete();

            \Session::flash('berhasil','Data Berhasil Di Hapus');

        }catch(\Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->back();

    }
}
