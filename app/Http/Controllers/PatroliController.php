<?php

namespace App\Http\Controllers;

use App\AnggotaPatroli;
use App\Kecamatan;
use App\Kelurahan;
use App\Kota;
use App\KelurahanIndo;
use App\Provinsi;
use App\RegisterPatroli;
use App\RegisterUndangan;
use App\RegisterLuar;
use App\RegisterUmum;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class PatroliController extends Controller
{
    public function test()
    {
        return view('pages.patroli_nataru.test');
    }
    public function index()
    {
        $kota            = Kota::all();
        $jum_desa        = DB::SELECT("SELECT COUNT(*) AS jum FROM master_kelurahan WHERE status_admin = 'DESA'")[0]->jum;
        $jum_kelurahan   = DB::SELECT("SELECT COUNT(*) AS jum FROM master_kelurahan WHERE status_admin = 'KELURAHAN'")[0]->jum;
        $partisipan_desa = DB::SELECT("SELECT
                                        COUNT(*) AS jum
                                    FROM
                                        register_patroli INNER JOIN master_kelurahan ON register_patroli.kode_kel = master_kelurahan.kode_kel
                                        AND register_patroli.kode_kab = master_kelurahan.kode_kab
                                        AND register_patroli.kode_kec = master_kelurahan.kode_kec
                                    WHERE
                                        register_patroli.tahun = 2024 AND register_patroli.id > 0
                                        AND master_kelurahan.status_admin = 'DESA'")[0]->jum;
        $partisipan_kelurahan = DB::SELECT("SELECT
                                            COUNT(*) AS jum
                                        FROM
                                            
                                            register_patroli INNER JOIN master_kelurahan ON register_patroli.kode_kel = master_kelurahan.kode_kel
                                            AND register_patroli.kode_kab = master_kelurahan.kode_kab
                                            AND register_patroli.kode_kec = master_kelurahan.kode_kec
                                        WHERE
                                            register_patroli.tahun = 2024 AND
                                            register_patroli.id > 0
                                            AND master_kelurahan.status_admin = 'KELURAHAN'")[0]->jum;
        $presentase_desa = round($partisipan_desa / $jum_desa * 100, 2);
        $presentase_kelurahan = round($partisipan_kelurahan / $jum_kelurahan * 100, 2);
        $partisipan    = DB::SELECT("SELECT COUNT(*) AS jum FROM register_patroli WHERE id > 0 AND tahun = 2024")[0];
        $presentase    = round($partisipan->jum / 8501 * 100, 2);
        $total_anggota = DB::SELECT("SELECT COUNT(*) AS jum FROM register_patroli INNER JOIN anggota_patroli ON register_patroli.id = anggota_patroli.patroli_id WHERE register_patroli.tahun = 2024 ")[0];
        $undangan = DB::SELECT("SELECT SUM(jumlah_peserta) AS tot FROM register_undangan ")[0]->tot;
        $umum = DB::SELECT("SELECT COUNT(*) AS jum  FROM register_patroli_luar WHERE deleted_at IS NULL AND id > 0 ")[0]->jum;
        return view('pages.patroli_nataru.index', compact('kota', 'partisipan', 'presentase', 'total_anggota','presentase_desa','presentase_kelurahan','jum_desa','jum_kelurahan','partisipan_kelurahan','partisipan_desa','undangan','umum'));
    }

    public function reg()
    {
        $kota = Kota::all();
        return view('pages.patroli_nataru.register', compact('kota'));
    }

    public function reg_kepala()
    {
        $kota = Kota::all();
        return view('pages.patroli_nataru.register_kepala', compact('kota'));
    }

    public function reg_luar()
    {
        $prov = Provinsi::all();
        return view('pages.patroli_nataru.register_luar', compact('prov'));
    }

    public function result_kepala()
    {
        return view('pages.patroli_nataru.result_kepala');
    }

    public function result()
    {
        return view('pages.patroli_nataru.result');
    }

    public function desa()
    {
        $kelurahan = Kelurahan::all();
        $data      = new Collection;
        foreach ($kelurahan as $k):
            $kecamatan = Kecamatan::where('kode_kab', $k->kode_kab)->where('kode_kec', $k->kode_kec)->first();
            dd($k);
            $kota = Kota::where('id', $k->kode_kab)->first();
            $data->push([
                'kota'      => $kota->nama,
                'kecamatan' => $kecamatan->nama,
                'kelurahan' => $k->nama_desa,
            ]);
        endforeach;
        dd($data);
    }

    public function filter_master_prov(Request $request){
        $kota = DB::SELECT("SELECT * FROM kab WHERE id_prov =".$request->prov);
        $kecamatan = DB::SELECT("SELECT * FROM kec WHERE id_prov =".$request->prov." AND id_kab = '".$kota[0]->id_kab."'");
        $kelurahan = DB::SELECT("SELECT * FROM desa WHERE id_prov =".$request->prov." AND id_kab = '".$kota[0]->id_kab."' AND id_kec = '".$kecamatan[0]->id_kec."'");
        $view_kota = (String) view('pages.patroli_nataru.ajax.filter_master_prov', compact('kota'));
        $view_kec = (String) view('pages.patroli_nataru.ajax.filter_master_kota', compact('kecamatan'));
        $view_kel = (String) view('pages.patroli_nataru.ajax.filter_master_kec', compact('kelurahan'));
        return response()->json(array('view_kota' => $view_kota,'view_kec' => $view_kec,'view_kel' => $view_kel));

    }

    public function filter_master_kota(Request $request){
        
        $kecamatan = DB::SELECT("SELECT * FROM kec WHERE id_prov =".$request->prov." AND id_kab = '".$request->kota."'");
        $kelurahan = DB::SELECT("SELECT * FROM desa WHERE id_prov =".$request->prov." AND id_kab = '".$request->kota."' AND id_kec = '".$kecamatan[0]->id_kec."'");
        $view_kec = (String) view('pages.patroli_nataru.ajax.filter_master_kota', compact('kecamatan'));
        $view_kel = (String) view('pages.patroli_nataru.ajax.filter_master_kec', compact('kelurahan'));
        return response()->json(array('view_kec' => $view_kec,'view_kel' => $view_kel));
    }

    public function filter_master_kec(Request $request){
        
        $kelurahan = DB::SELECT("SELECT * FROM desa WHERE id_prov =".$request->prov." AND id_kab = '".$request->kota."' AND id_kec = '".$request->kecamatan."'");
        $view_kel = (String) view('pages.patroli_nataru.ajax.filter_master_kec', compact('kelurahan'));
        return response()->json(array('view_kel' => $view_kel));
    }


    public function filter_kec(Request $request)
    {
        $kecamatan      = Kecamatan::where('kode_kab', $request->kota)->get();
        $kelurahan      = Kelurahan::where('kode_kab', $request->kota)->where('kode_kec', $kecamatan[0]->kode_kec)->get();
        $view_kecamatan = (String) view('pages.patroli_nataru.ajax.filter_kec', compact('kecamatan'));
        $view_kelurahan = (String) view('pages.patroli_nataru.ajax.filter_kel', compact('kelurahan'));
        return response()->json(array('view_kecamatan' => $view_kecamatan, 'view_kelurahan' => $view_kelurahan));
    }

    public function filter_kel(Request $request)
    {
        $kelurahan      = Kelurahan::where('kode_kab', $request->kota)->where('kode_kec', $request->kecamatan)->get();
        $view_kelurahan = (String) view('pages.patroli_nataru.ajax.filter_kel', compact('kelurahan'));
        return response()->json(array('view_kelurahan' => $view_kelurahan));
    }

    public function progress(Request $request)
    {
        $partisipan    = DB::SELECT("SELECT COUNT(*) AS jum FROM register_patroli WHERE register_patroli.tahun = 2024 AND kode_kab = " . $request->kota)[0];
        $jumlah_desa   = DB::SELECT("SELECT COUNT(*) AS jum FROM master_kelurahan WHERE kode_kab = " . $request->kota)[0];
        $total_anggota = DB::SELECT("SELECT COUNT(*) AS jum FROM register_patroli INNER JOIN anggota_patroli ON register_patroli.id = anggota_patroli.patroli_id
WHERE register_patroli.tahun = 2024 AND register_patroli.kode_kab =" . $request->kota)[0];
        $kota       = Kota::find($request->kota);
        $presentase = round($partisipan->jum / $jumlah_desa->jum * 100, 2);
        $result     = new Collection;
        $result->push([
            "jumlah_desa"        => $jumlah_desa->jum,
            "kota_label"         => $kota->nama,
            "presentase"         => $presentase,
            "jumlah_partisipasi" => $partisipan->jum,
            "total_anggota"      => $total_anggota->jum,
        ]);
        return response()->json(array('result' => $result));

    }

    public function progress_datatable()
    {

        $kota     = Kota::all();
        $progress = new Collection;

        foreach ($kota as $k):
            $kel = count(Kelurahan::where('kode_kab', $k->id)->get());
            $reg = count(RegisterPatroli::where('kode_kab', $k->id)->where('tahun','2024')->get());
            $jum_des_only = count(Kelurahan::where('kode_kab', $k->id)->where('status_admin','DESA')->get());
            $jum_kel_only = count(Kelurahan::where('kode_kab', $k->id)->where('status_admin','KELURAHAN')->get());
            $jum_des_ikut = count(DB::SELECT(
                "SELECT
    * 
FROM
    register_patroli
    INNER JOIN master_kelurahan ON register_patroli.kode_kel = master_kelurahan.kode_kel 
AND  register_patroli.kode_kec = master_kelurahan.kode_kec AND
register_patroli.kode_kab = master_kelurahan.kode_kab  WHERE register_patroli.tahun = 2024 AND register_patroli.kode_kab = ".$k->id." AND master_kelurahan.status_admin = 'DESA' "
            ));
            $jum_kel_ikut = count(DB::SELECT(
                "SELECT
    * 
FROM
    register_patroli
    INNER JOIN master_kelurahan ON register_patroli.kode_kel = master_kelurahan.kode_kel 
AND  register_patroli.kode_kec = master_kelurahan.kode_kec AND
register_patroli.kode_kab = master_kelurahan.kode_kab  WHERE register_patroli.tahun = 2024 AND register_patroli.kode_kab = ".$k->id." AND master_kelurahan.status_admin = 'KELURAHAN' "
            ));
            // dd($jum_kel_only);
            $progress->push([
                "kota"       => $k->nama,
                "jum_des"    => $kel,
                "jum_ikut"   => $reg,
                "jum_des_only"   => $jum_des_only,
                "jum_kel_only"   => $jum_kel_only,
                "jum_des_ikut"   => $jum_des_ikut,
                "jum_kel_ikut"   => $jum_kel_ikut,
                "presentase" => round($reg / $kel * 100, 2),
            ]);
        endforeach;
        return DataTables::of($progress)
                ->addColumn('partisipasi_desa', function ($i) {
                    if($i['jum_des_only'] !== 0):
                        return $i['jum_des_ikut']." dari ".$i['jum_des_only']." / ".'<span class="label label-xl label-rounded label-dark" style="min-width: 50px !important;">'.round($i['jum_des_ikut'] / $i['jum_des_only'] * 100, 2)."%".'</span>';
                    else:
                        return 0;
                    endif;
                })
                ->addColumn('partisipasi_kelurahan', function ($i) {
                    if($i['jum_kel_only'] !== 0):
                        return $i['jum_kel_ikut']." dari ".$i['jum_kel_only']." / ".'<span class="label label-xl label-rounded label-dark" style="min-width: 50px !important;">'.round($i['jum_kel_ikut'] / $i['jum_kel_only'] * 100, 2)."%".'</span>';
                    else:
                        return 0;
                    endif;
                })
                ->addColumn('partisipasi_keseluruhan', function($i){
                    return $i['jum_ikut']." dari ".$i['jum_des']." / ".'<span class="label label-xl label-rounded label-dark" style="min-width: 50px !important;">'.$i['presentase']."%".'</span>';
                })
                ->rawColumns(['partisipasi_desa','partisipasi_kelurahan','partisipasi_keseluruhan'])
            ->make(true);
    }

    public function filter_datatable(Request $request)
    {
        if ($request->kota == null):
            $anggota = new Collection;
            $anggota->push([
                'kota'           => 'a',
                'kecamatan'      => 'a',
                'kelurahan'      => 'a',
                'pic'            => null,
                'desa_hp'        => 'A',
                'jumlah_anggota' => 0,
                'username'       => 'a',
            ]);
            return DataTables::of($anggota)
                ->editColumn('pic', function ($i) {
                    return ($i['pic'] == null) ? '<span class="label label-dark label-inline mr-2">BELUM MENDAFTAR</span>' : $i['pic'] . "(" . $i['desa_hp'] . ")";
                })
                ->editColumn('jumlah_anggota', function ($i) {
                    if ($i['jumlah_anggota'] > 0):
                        return '<button type="button" class="btn btn-light-success font-weight-bold mr-2">' . $i['jumlah_anggota'] . '</a>';
                    else:
                        return $i['jumlah_anggota'];
                    endif;
                })->rawColumns(['tautan', 'pic', 'jumlah_anggota'])->
                make(true);
        endif;
        $data = DB::SELECT("SELECT
                                kota.nama AS kota,
                                kecamatan.nama AS kecamatan,
                                kelurahan.nama_desa AS desa,
                                rp.nama AS pic,
                                rp.nohp AS desa_hp,
                                rp.id AS patroli_id,
                                rp.username AS username
                            FROM
                                master_kota kota
                                LEFT JOIN master_kecamatan kecamatan ON kota.id = kecamatan.kode_kab
                                LEFT JOIN master_kelurahan kelurahan ON kecamatan.kode_kec = kelurahan.kode_kec
                                AND kota.id = kelurahan.kode_kab
                                LEFT JOIN register_patroli rp ON kelurahan.kode_kel = rp.kode_kel
                                AND kecamatan.kode_kec = rp.kode_kec
                                AND kota.id = rp.kode_kab
                            WHERE
                                rp.tahun = 2024 AND kota.id = " . $request->kota);
        $anggota = new Collection;
        foreach ($data as $d):
            $jums = 0;
            if ($d->patroli_id !== null):
                $jum_anggota = DB::SELECT("SELECT COUNT(*) AS jum FROM anggota_patroli WHERE patroli_id =" . $d->patroli_id)[0];
                $jums        = $jum_anggota->jum;
            endif;
            $anggota->push([
                'kota'           => $d->kota,
                'kecamatan'      => $d->kecamatan,
                'kelurahan'      => $d->desa,
                'pic'            => $d->pic,
                'desa_hp'        => $d->desa_hp,
                'jumlah_anggota' => $jums,
                'username'       => $d->username,
            ]);
        endforeach;
        return DataTables::of($anggota)
            ->editColumn('pic', function ($i) {
                return ($i['pic'] == null) ? '<span class="label label-dark label-inline mr-2">BELUM MENDAFTAR</span>' : $i['pic'] . "(" . $i['desa_hp'] . ")";
            })
            ->editColumn('jumlah_anggota', function ($i) {
                if ($i['jumlah_anggota'] > 0):
                    return '<button type="button" class="btn btn-light-success font-weight-bold mr-2">' . $i['jumlah_anggota'] . '</a>';
                else:
                    return $i['jumlah_anggota'];
                endif;
            })->rawColumns(['tautan', 'pic', 'jumlah_anggota'])->
            make(true);
    }

    public function undangan_datatable()
    {
        $undangan = RegisterUndangan::all();
        return DataTables::of($undangan)
        ->make(true);
    }

    public function save(Request $request)
    {
       
        $cek = RegisterPatroli::where('kode_kel', $request->kelurahan)->where('kode_kec', $request->kecamatan)->where('kode_kab', $request->kota)->where('tahun',2024)->first();
        if (!empty($cek)):
            return redirect("patroli/result")->with("cek", $cek);
        endif;

        $get       = RegisterPatroli::orderBy('id', 'desc')->first();
        $id        = $get->urut_regis + 1;
        $no        = str_pad($id, 4, "0", STR_PAD_LEFT);
        $kelurahan = Kelurahan::where('kode_kel', $request->kelurahan)->where('kode_kec', $request->kecamatan)->where('kode_kab', $request->kota)->first();
        $username  = $request->kota . "." . $request->kecamatan . "." . $request->kelurahan . "." . $no . " - " . $kelurahan->status_admin . " " . $kelurahan->nama_desa;
        $patroli   = RegisterPatroli::create([
            "username"   => $username,
            "kode_kab"   => $request->kota,
            "kode_kec"   => $request->kecamatan,
            "kode_kel"   => $request->kelurahan,
            "nama"       => $request->nama,
            "nohp"       => $request->nohp,
            "alamat"     => $request->alamat,
            "urut_regis" => $id,
            "email"      => $request->email,
            "tahun"      => 2024,
        ]);
        foreach ($request->satlinmas as $r):
            if ($r !== null):
                AnggotaPatroli::create([
                    'patroli_id' => $patroli->id,
                    'nama'       => $r,
                    'jenis'     => 'SATLINMAS'
                ]);
            endif;
        endforeach;
        foreach ($request->kartar as $r):
            if ($r !== null):
                AnggotaPatroli::create([
                    'patroli_id' => $patroli->id,
                    'nama'       => $r,
                    'jenis'     => 'KARANG TARUNA'
                ]);
            endif;
        endforeach;
        foreach ($request->pkk as $r):
            if ($r !== null):
                AnggotaPatroli::create([
                    'patroli_id' => $patroli->id,
                    'nama'       => $r,
                    'jenis'     => 'PKK'
                ]);
            endif;
        endforeach;
        foreach ($request->masyarakat as $r):
            if ($r !== null):
                AnggotaPatroli::create([
                    'patroli_id' => $patroli->id,
                    'nama'       => $r,
                    'jenis'     => 'MASYARAKAT'
                ]);
            endif;
        endforeach;
        AnggotaPatroli::create([
            'patroli_id' => $patroli->id,
            'nama'       => $request->babinkamtibmas,
            'jenis'     => 'BABINKAMTIBMAS'
        ]);
        AnggotaPatroli::create([
            'patroli_id' => $patroli->id,
            'nama'       => $request->babinsa,
            'jenis'     => 'BABINSA'
        ]);
        $kota = Kota::find($request->kota);
        // $data = array('name' => $request->nama);
        // $data = [
        // 'name' => $data['name'],
        // 'kota' => $kota
        // ];
        
        // Mail::to($request->email)->send(new SendMail($data));
         $wafix = substr_replace($request->nohp,"62",0,1);
        // dd($wafix);
        $curl = curl_init();
        $fixparam = urlencode('Halo *'.$request->nama.'*, terima kasih telah melakukan registerasi dalam kegiatan *SIJALINMAJATARU 2024* yang akan dilaksanakan 31 Desember 2023 mulai pukul 20.00 WIB secara daring melalui ZOOM MEETING dan LIVE YOUTUBE.
Untuk informasi lebih lanjut silahkan gabung dalam grup whatsapp dengan klik ini 
'.$kota->tautan.'
dan dapat pula menghubungi PIC kami *a. n '.$kota->pic.' '.$kota->nohp.'*

Tertanda
*Satuan Polisi Pamong Praja Provinsi Jawa Timur*');
        // dd($fixparam);
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://satpolppjatim.wabot.web.id/send-message?session=wa1&to='.$wafix.'&text='.$fixparam,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
));

$response = curl_exec($curl);
// dd($response);
curl_close($curl);
        return redirect("patroli/result")->with("patroli", $patroli);
    }

    public function save_luar(Request $request){
         $cek = RegisterLuar::where('kode_kel', $request->kelurahan)->where('kode_kec', $request->kecamatan)->where('kode_kab', $request->kota)->where('kode_prov',$request->prov)->first();
        if (!empty($cek)):
            return redirect("patroli/result-luar")->with("cek", $cek);
        endif;
        $get       = RegisterLuar::orderBy('id', 'desc')->first();
        $id        = $get->urut_regis + 1;
        $no        = str_pad($id, 4, "0", STR_PAD_LEFT);
        $kelurahan = KelurahanIndo::where('id_desa', $request->kelurahan)->where('id_kec', $request->kecamatan)->where('id_kab', $request->kota)->where('id_prov',$request->prov)->first();
        $status_admin = ($kelurahan->st_desa == 2) ? 'DESA' : 'KELURAHAN';
        $username  = $kelurahan->id_desa . "." . $no . " - " . $status_admin . " " . $kelurahan->nm_desa;
        $patroli   = RegisterLuar::create([
            "username"   => $username,
            "kode_kab"   => $request->kota,
            "kode_kec"   => $request->kecamatan,
            "kode_kel"   => $request->kelurahan,
            "nama"       => $request->nama,
            "nohp"       => $request->nohp,
            "alamat"     => $request->alamat,
            "urut_regis" => $id,
            "email"      => $request->email,
            "kode_prov"  => $request->prov
        ]);
        foreach ($request->anggota as $r):
            if ($r !== null):
                AnggotaPatroli::create([
                    'patroli_id' => $patroli->id,
                    'nama'       => $r,
                    'jenis'     => 'LUAR'
                ]);
            endif;
        endforeach;
        return redirect('patroli/result-luar')->with("patroli", $patroli);
    }

    public function result_luar(){

        return view('pages.patroli_nataru.result_luar');
    }

    public function save_kepala(Request $request)
    {

        $kota     = Kota::where('nama', $request->kota)->first();
        $username = $kota->id . "_" . strtoupper($request->jabatan) . "_" . $request->kota;
        $reg      = RegisterUndangan::create([
            "kota"     => $request->kota,
            "username" => $username,
            "jabatan"  => $request->jabatan,
            "nama"     => $request->nama,
            "alamat"   => $request->alamat,
            "email"   => $request->email,
            "cp"   => $request->cp,
            "pj"   => $request->pj,
            "lokasi_pemukulan"   => $request->lokasi_pemukulan_kentongan,
            "jumlah_peserta"   => $request->jum_peserta,
        ]);
        return redirect('patroli/result-kepala')->with("reg", $reg);
    }

    public function reg_umum(){

        $kota = DB::SELECT("SELECT * FROM kab ");
        return view('pages.patroli_nataru.register_umum',compact('kota'));
    }

    public function save_umum(Request $request)
    {
        $kota     = DB::SELECT("SELECT * FROM kab WHERE nm_kab = '".$request->kota."'")[0];
        $username = $kota->id_kab . "_" . strtoupper($request->organisasi) . "_" . $request->kota;
        $reg      = RegisterUmum::create([
            "kota"     => $request->kota,
            "username" => $username,
            "organisasi"  => $request->organisasi,
            "nama"     => $request->nama,
            "alamat"   => $request->alamat,
            "email"   => $request->email,
            "cp"   => $request->cp,
            "pj"   => $request->pj,
            "lokasi_pemukulan"   => $request->lokasi_pemukulan_kentongan,
            "jumlah_peserta"   => $request->jum_peserta,
        ]);
        return redirect('patroli/result-umum')->with("reg", $reg);
    }

    public function result_umum(){

        return view('pages.patroli_nataru.result_umum');
    }
}
