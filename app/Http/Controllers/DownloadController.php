<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BeritaGambar;
use App\Struktural;
use App\Dokumen;

class DownloadController extends Controller
{
    public function inovasi($type,$id){
        $inovasi = Inovasi::where('id',$id)->first();
        return response()->download(storage_path("app/public/uploads/master_inovasi/".$inovasi->$type));
    }

    public function berita_gambar($id){
        $inovasi = BeritaGambar::where('id',$id)->first();
        return response()->download(storage_path("app/public/uploads/berita/".$inovasi->file));
    }

    public function foto_struktural($id){
        $inovasi = Struktural::where('id',$id)->first();
        return response()->download(storage_path("app/public/uploads/foto_struktural/".$inovasi->foto));
    }

    public function download_dokumen($id){
        $inovasi = Dokumen::where('id',$id)->first();
        return response()->download(storage_path("app/public/uploads/dokumen/".$inovasi->file));
    }
}
