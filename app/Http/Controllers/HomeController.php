<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Biodata;
use App\User;
use Illuminate\Support\Facades\Crypt;
use App\MasterBentuk;
use App\Category;
use App\Inovasi;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        return view("home");
    }

}
