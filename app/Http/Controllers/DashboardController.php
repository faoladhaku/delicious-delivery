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
}
