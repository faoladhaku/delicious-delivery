<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
class RegisterController extends Controller
{
    public function index(){
        return view('Registro');
    }
    public function create(Request $request){
        $rules = [
			'nombre' => 'required|string|min:3|max:255',
			'email' => 'required|string|email|max:255',
            /*
            'password' =>   ['required', 
                            'min:6', 
                            'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/', 
                            'confirmed']
            */
            'password' => 'required|string|min:3|max:255'
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return back()
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$user = new User;
                $user->name = $data['nombre'];
                $user->email = $data['email'];
				$user->password = $data['password'];
				$user->save();
				return redirect('/')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('/')->with('failed',"operation failed");
			}
		}
    }
}
