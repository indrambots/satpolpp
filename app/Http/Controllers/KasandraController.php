<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasandra;
use DB;

class KasandraController extends Controller
{
    public function index(){
    	$kasandra = Kasandra::find(1);
    	return view('pages.kasandra.index',compact('kasandra'));
    }

    public function search(Request $request){
    	$kasandra = DB::SELECT("SELECT * FROM kasandra WHERE LOWER(urusan_pemerintahan) LIKE '%".strtolower($request->keyword)."%' OR LOWER(jenis_tertib) LIKE '%".strtolower($request->keyword)."%' OR LOWER(perda) LIKE '%".strtolower($request->keyword)."%' OR LOWER(pasal_kewajiban) LIKE '%".strtolower($request->keyword)."%' OR LOWER(kewajiban) LIKE '%".strtolower($request->keyword)."%' OR LOWER(pasal_sanksi_adm) LIKE '%".strtolower($request->keyword)."%' OR LOWER(sanksi_adm) LIKE '%".strtolower($request->keyword)."%' OR LOWER(pasal_sanksi_pidana) LIKE '%".strtolower($request->keyword)."%' OR LOWER(sanksi_pidana) LIKE '%".strtolower($request->keyword)."%' OR LOWER(opd) LIKE '%".strtolower($request->keyword)."%' ");
    	$keyword = $request->keyword;
        $view = (String) view('pages.kasandra.ajax.search', compact('kasandra','keyword'));
        return response()->json(array('html' => $view), 200);
    }
}
