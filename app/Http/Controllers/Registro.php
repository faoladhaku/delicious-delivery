<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registro extends Controller
{
    public function index(){
        return view(Registro);
    }
    public function create(Request $request){
        $rules = [
			'nombre' => 'required|string|min:3|max:255',
			'email' => 'required|string|email|max:255',
            'password' =>   ['required', 
                            'min:6', 
                            'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/', 
                            'confirmed']
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('Registro')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$user = new user;
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
