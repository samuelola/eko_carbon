<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function signin(Request $request){

        return view("auth.signin");
    }


    protected function login(Request $request, FlasherInterface $flasher){

        $this->validate($request,[

            'email' => 'required|email',
            'password' => 'required|string|min:6',
            
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $remember_token = $request->has('remember_me') ? true : false;

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember_token)) {
            $request->session()->regenerate();

           
       if(Auth::user()->role == 'user' && Auth::user()->is_active == 1 && Auth::user()->kyc_status == 1){

          $flasher->addSuccess('Welcome back'.' '.ucwords(Auth::user()->firstname));
          return  Redirect::intended('/dashboard');
      
         
       }
       elseif(Auth::user()->role == 'user' && Auth::user()->is_active == 1 && Auth::user()->kyc_status == 0){

        $encrypted = Crypt::encryptString(Auth::user()->id);

        $flasher->addSuccess('List Green Projects'.' '.ucwords(Auth::user()->firstname));
        return  Redirect::intended('/listing/'.$encrypted);
       }

       elseif(Auth::user()->role == 'admin' && Auth::user()->is_active == 1 && Auth::user()->kyc_status == 1){

        $flasher->addSuccess('Welcome back'.' '.ucwords(Auth::user()->firstname));

        return  Redirect::intended('/admindashboard');

       }
     
       else{

          $flasher->addSuccess('Your Login is not Successfull!');
          return redirect()->route('signin');
       }
           
        }


        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }

    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/signin');
        // return redirect()->route('login');
    }
}
