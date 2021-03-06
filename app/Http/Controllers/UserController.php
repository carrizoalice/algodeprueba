<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Perfil;

class UserController extends Controller
{
    public function index(Request $request){

        $users = DB::table('users')->simplePaginate(20);

        return view('users.list',compact('users'));
    }

    public function show(Request $request, $id)
    {
        return $id;
    }

    public function self_show(Request $request, $id)
    {
        if (Auth::id() == $id ) {

            $user_data = User::where('id',$id)->get();
            $perfil_data = Perfil::where('user_id', $id);
            
            return view('users.detail', compact('user_data', 'perfil_data'));
        }
        return "false";
       
    }
    public function store_perfil(Request $request, $id)
    {
        return view('home');
    }

}
