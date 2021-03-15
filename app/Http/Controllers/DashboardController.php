<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $currentUser = Auth::user();
        return view("dashboard.dashboard",['name'=>$currentUser->name]);
    }
    public function menu()
    {
        $currentUser = Auth::user();
        $items = array(
            'itemlist' =>  DB::table('comidas')->get(),
          );
        return view('dashboard.menu')->with(['items'=>$items,'name'=>$currentUser->name]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function showProfile()
    {
        $_user = Auth::user();
        return view("Perfil",['name'=>$_user]);
    }
    public function edit()
    {
        $_user = Auth::user();
        return view("EditarPerfil",['name'=>$_user]);
    }
    public function editPerfil(Request $request)
    {   
        $_user = Auth::user();
        $UpUser = User::find($_user->id);
        $UpUser->name = $request->nombre;
        #$UpUser->email = $request->email;
        $UpUser->save();
       
        return view("Perfil",['name'=>$UpUser]);
    }
}
