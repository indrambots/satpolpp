<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function updatePassword(Request $request){
        $users = User::where('username',$request['username'])->first(); 
        $users->password= $request['password'];
        $users->save();
        return redirect('/')->with('message','Password Updated');
    }

    public function index(){
        
        return view('pages.master.user.index');
    }
}
