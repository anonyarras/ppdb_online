<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Ppdb_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='PPDB MTS Insan Takwa Bogor';
        return view('ppdb.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi form yg di butuhkan
        $this->validate($request,[
            'nama'=>'required',
            'nisn'=>'required',
            'email'=>'required',

        ]);
        //request isi dri form
        $data['name'] = $request->nama;
        $data['nisn'] = $request->nisn;
        $data['email'] = $request->email;
        $data['password'] = bcrypt('ppdb2021');
        //membuat id registrasi otomatis
        $data['id_registrasi'] = 'REG-'.date('YmdHis');

        //cek photo
        $file = $request->file('photo');
        if($file){
            $file->move('uploads',$file->getClientOriginalName());
            $data['photo'] = 'uploads/'.$file->getClientOriginalName();
        }
        //memasukan data ke database
        User::insert($data);
        //notif jika berhasil di insert
        \Session::flash('berhasil','pendaftaran berhasil dilakukan');
        return redirect('dashboard');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
