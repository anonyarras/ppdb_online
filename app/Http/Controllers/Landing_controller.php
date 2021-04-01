<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class Landing_controller extends Controller
{
    //
    public function index(){
        $title = 'List Berita';

        $data = Berita::orderBy('created_at','desc')->simplepaginate(10);
        return view('berita',compact('title','data'));
    }
}
