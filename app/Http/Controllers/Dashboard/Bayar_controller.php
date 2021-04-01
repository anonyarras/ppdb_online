<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\User;

class Bayar_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'Update Pembayaran';
        $dt = Pembayaran::where('users',\Auth::user()->id)->first();
        $cek = Pembayaran::where('users',\Auth::user()->id)->count();
        return view('dashboard.pembayaran.index',compact('title','dt','cek'));
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
    public function store(Request $request,$id)
    {
        //
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
