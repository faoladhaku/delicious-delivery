<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Auth;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Log;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function socialLogin($social)
    {
        return Socialite::driver($social)->redirect();
    }
    public function normalLogin(Request $request)
    {
        /*
        $array = array(
            'name' => $normal->name,
            'email' => $normal->email
        );*/
        
        $credentials = $request->only('email', 'password');
        //dd($request['email']);
        //dd(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']]));
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('dashboard.dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
        //dd("no entre");
        /*
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
        */
    }
    public function handleProviderCallback($social)
   {
       $userSocial = Socialite::driver($social)->stateless()->user();
       //$finduser = DB::table('user')->where(['email' => $userSocial->getEmail()])->first();
       $finduser = User::where(['email' => $userSocial->getEmail()])->first();
       if($finduser){
            //Auth::login($user);
            //Log::info('datanoexistente'.$finduser);
            Auth::login($finduser);   
           //dd($user);
           return redirect()->to('dashboard');
       }else{
            $newuser = new User;
            $newuser->name = $userSocial->getName();
            $newuser->email = $userSocial->getEmail();
            $newuser->save();
            $user1 = User::where(['email' => $userSocial->getEmail()])->first();
            Log::info('datanoexistente'.$user1);
            //dd($user);
            //Auth::login($user,false);
            Auth::login($newuser);
            return redirect('dashboard');
        }
   }
}
