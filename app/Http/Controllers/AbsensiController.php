<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acara;

class AbsensiController extends Controller
{
    
    public function index($id){
        $acara = Acara::find($id);
        return view('pages.landing.absensi.index',compact('acara'));
    }

    public function save(Request $request)
    {
        
    }
}
