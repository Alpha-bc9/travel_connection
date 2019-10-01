<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function guardLogin(Request $request,$guard){
       

       return $this->validate($request,
            [
                'email'=>'required|email',
                'password'=>'required|min:6'
          
            


            ]);
    }

    public function CompanyLoginform()
    {
        // dd(Config::get('constants.guards.company'));

        return view('auth.login',[
            'url'=>Config::get('constants.guards.company')
        ]);
    }

    public function CompanyLogin(Request $request)
    {
        //dd($request);
        if ($this->guardLogin($request,Config::get('constants.guards.company'))) {
           return redirect()->route('booking.index');
        }
        return back()->withInput($request->only('email','remember'));
    }
    
    
}
