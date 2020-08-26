<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;
use Illuminate\Support\Facades\Auth;

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
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
       session(['user'=>$user->name]);
       foreach ( $user->roles as $role) {
           if($role->type == 3)
           {
               
                session(['role'=>'Admin']);
                return redirect('/');
           }
           elseif( $role->type == 2){
                session(['role'=>'Seller']);
                return redirect('/');
           }
           else{
                session(['role'=>'User']);
                return redirect('/');
           }
       }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
