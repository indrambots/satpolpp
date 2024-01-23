<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class LandingController extends Controller
{
    public function index(){
    	$berita = Berita::where('jenis','berita')->whereHas('gambar')->orderBy('id','desc')->limit(3)->get();
    	$gallery = Berita::where('jenis','gallery')->orderBy('id','desc')->limit(3)->get();
        return view('pages.landing.index',compact('berita','gallery'));
    }

    public function portal(){
        return view('pages.landing.portal');
    }
}
