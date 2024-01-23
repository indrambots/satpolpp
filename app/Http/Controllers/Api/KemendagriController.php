<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Category;
use App\Inovasi;

class KemendagriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function get_inovasi(){
        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.indeks.inovasi.litbang.kemendagri.go.id/crud/iga2020_inovasi?profil_id=77&is_index=1&tahun%5B0%5D=2019&tahun%5B1%5D=2020&tahun%5B2%5D=2021&page=0&per_page=79&pageSize=79&totalCount=79&orderDirection=&search=',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOjU5ODQsImF1ZCI6ImluZGVrcy5pbm92YXNpLmxpdGJhbmcua2VtZW5kYWdyaS5nby5pZCIsInJvbGVzIjpbInB1YmxpYyJdLCJleHAiOjE2NzQ4ODk0NjQsImlhdCI6MTY0Mzc4NTQ2NH0.xrCkV4BUj9KJV9mRgn65jhQFF9gwhfoXEgJVezLuMf8'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$data = json_decode($response);
$data = $data->data;
foreach($data as $d):
    $curl_detail = curl_init();

curl_setopt_array($curl_detail, array(
CURLOPT_URL => 'https://api.indeks.inovasi.litbang.kemendagri.go.id/tuxe/inovasi/detail/'.$d->id,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'GET',
CURLOPT_HTTPHEADER => array(
'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOjU5ODQsImF1ZCI6ImluZGVrcy5pbm92YXNpLmxpdGJhbmcua2VtZW5kYWdyaS5nby5pZCIsInJvbGVzIjpbInB1YmxpYyJdLCJleHAiOjE2NzQ4ODk0NjQsImlhdCI6MTY0Mzc4NTQ2NH0.xrCkV4BUj9KJV9mRgn65jhQFF9gwhfoXEgJVezLuMf8'
),
));

$response_detail = curl_exec($curl_detail);
curl_close($curl_detail);
$inovasi_detail = json_decode($response_detail);
$category = Category::find($inovasi_detail->categories[0]->urusan_pemerintah_id);
    $inovasi = Inovasi::create([
        'nama' => pg_escape_string($inovasi_detail->inovasi->nama),
        'jenis' => pg_escape_string($d->jenis_inovasi),
        'tahapan' => ($d->is_covid == 1) ? 'Uji Coba': 'Penerapan',
        'inisiator' => pg_escape_string($d->inisiator),
        'covid' => ($d->is_covid == 1) ? 'Covid 19': 'Non Covid 19',
        'rancang_bangun' => pg_escape_string($inovasi_detail->inovasi->latar_belakang),
        'tujuan' => pg_escape_string($inovasi_detail->inovasi->tujuan),
        'manfaat' => pg_escape_string($inovasi_detail->inovasi->manfaat),
        'bentuk' => pg_escape_string($inovasi_detail->inovasi->bentuk_inovasi_str),
        'hasil'  => pg_escape_string($d->hasil_inovasi),
        'kategori' => $category->nama,
        'thumbnail' => $inovasi_detail->inovasi->indikator_video->thumbnail_url,
        'youtube_video' => ($inovasi_detail->inovasi->has_video == 0) ? null : $inovasi_detail->inovasi->indikator_video->youtube,
        'video_inovasi' => ($inovasi_detail->inovasi->has_video == 0) ? null : $inovasi_detail->inovasi->indikator_video->file_url,
        'file_profil_bisnis' => $d->profil_bisnis,
        'file_anggaran' => $d->anggaran,
        'pd' => $d->usr_asn->nama_lengkap,
        'waktu_uji_coba' => $d->waktu,
        'waktu_penerapan' => $d->waktu_implementasi,
    ]);
endforeach;
// $category = Category::find($json->categories[0]->urusan_pemerintah_id);
    // $inovasi = Inovasi::create([
    //     'nama' => pg_escape_string($json->inovasi->nama),
    //     'rancang_bangun' => pg_escape_string($json->inovasi->latar_belakang),
    //     'tujuan' => pg_escape_string($json->inovasi->tujuan),
    //     'manfaat' => pg_escape_string($json->inovasi->manfaat),
    //     'bentuk' => pg_escape_string($json->inovasi->bentuk_inovasi_str),
    //     'kategori' => $category->nama,
    //     'thumbnail' => $json->inovasi->indikator_video->thumbnail_url,
    //     'youtube_video' => ($json->inovasi->has_video == 0) ? null : $json->inovasi->indikator_video->youtube,
    //     'video_inovasi' => ($json->inovasi->has_video == 0) ? null : $json->inovasi->indikator_video->file_url,
    // ]);

    return 'success';
    }

    public function get_category(){
        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.indeks.inovasi.litbang.kemendagri.go.id/tuxe/categories',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOjU5ODQsImF1ZCI6ImluZGVrcy5pbm92YXNpLmxpdGJhbmcua2VtZW5kYWdyaS5nby5pZCIsInJvbGVzIjpbInB1YmxpYyJdLCJleHAiOjE2NzQ4ODk0NjQsImlhdCI6MTY0Mzc4NTQ2NH0.xrCkV4BUj9KJV9mRgn65jhQFF9gwhfoXEgJVezLuMf8'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$json = json_decode($response);
foreach($json->categories as $p):
    Category::create([
        'id' => $p->id,
        'nama' => $p->nama
    ]);
endforeach;

    }
}
