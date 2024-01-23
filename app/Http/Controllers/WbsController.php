<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wbs;
use Mail;

class WbsController extends Controller
{
    public function index()
    {
        return view('pages.landing.wbs.index');
    }

    public function create()
    {
        return view('pages.landing.wbs.create');
    }

    public function save(Request $request){
        // dd($request->all());
        $path = $request->file('bukti')->getRealPath();
        $ext = $request->bukti->extension();
        $doc = file_get_contents($path);
        $base64 = base64_encode($doc);
        $mime = $request->file('bukti')->getClientMimeType();

        Wbs::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'nama_terlapor' => $request->nama_terlapor,
            'tanggal' => date("Y-m-d", strtotime($request->tanggal)),
            'tempat' => $request->tempat,
            'detail_kegiatan' => $request->detail_kegiatan,
            'bukti' => $base64,
            'ext' => $ext,
            'mime' => $mime
        ]);
      //   $data = array('name'=>"Satpol PP Jatim");
      // Mail::send('mail.wbs', $data, function($message) {
      //    $message->to('indra.prasetya.hening@gmail.com', 'Tutorials Point')->subject
      //       ('Laravel HTML Testing Mail');
      //    $message->from('xyz@gmail.com','Virat Gandhi');
      // });
      // echo "HTML Email Sent. Check your inbox.";
    }
}
