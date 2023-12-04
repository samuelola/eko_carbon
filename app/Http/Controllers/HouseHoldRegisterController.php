<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class HouseHoldRegisterController extends Controller
{
    // public function signup(Request $request){

    //       return view("auth.signup");
    // }

    protected function createe(Request $request, FlasherInterface $flasher){
    
        $data = $request->validate([
            'firstname' => ['required', 'string','min:3', 'max:255'],
            'lastname' => ['required', 'string','min:3', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);    

        $userCount = User::where(['email'=> $data['email']])->count();
        if($userCount>0){
            $flasher->addSuccess('Your Credentials Exist please Login!');
            return redirect()->back();
        }else{
            $user = User::create([

                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => $request->role,
                'is_active' => $request->is_active,
                'kyc_status' => $request->kyc_status,
                
            ]);

        // Manually logging user 
        // Auth::login($user);

        // $flasher->addSuccess('Authentication is successfully!');
        return redirect()->route('householdsignin');  

    }

        

    }


    public function householdlogin(Request $request, FlasherInterface $flasher){

        $this->validate($request,[

            'email' => 'required|email',
            'password' => 'required|string|min:6',
            
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $remember_token = $request->has('remember_me') ? true : false;

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember_token)) {
            $request->session()->regenerate();

           
       if(Auth::user()->role == 'lister' && Auth::user()->is_active == 1 && Auth::user()->kyc_status == 1){

          $flasher->addSuccess('Welcome back'.' '.ucwords(Auth::user()->firstname));
          return  Redirect::intended('/dashboard');
      
         
       }
       elseif(Auth::user()->role == 'user' && Auth::user()->is_active == 1){

        $flasher->addSuccess('Welcome back'.' '.ucwords(Auth::user()->firstname));
        return  Redirect::intended('/listing/');
       }

       elseif(Auth::user()->role == 'admin' && Auth::user()->is_active==1){

        $flasher->addSuccess('Welcome back'.' '.ucwords(Auth::user()->firstname));

        return  Redirect::intended('/admindashboard');

       }

       elseif(Auth::user()->role == 'superadmin' && Auth::user()->is_active == 1){

        $flasher->addSuccess('Welcome back'.' '.ucwords(Auth::user()->firstname));

        return  Redirect::intended('/admindashboard');

       }

       elseif(Auth::user()->role == 'household' && Auth::user()->is_active == 1){

        $flasher->addSuccess('Welcome back'.' '.ucwords(Auth::user()->firstname));

        return  Redirect::intended('/household/dashboard/');

       }

       elseif(Auth::user()->role == 'company' && Auth::user()->is_active == 1){

        $flasher->addSuccess('Welcome back'.' '.ucwords(Auth::user()->firstname));

        return  Redirect::intended('/company/dashboard/');

       }
     
       else{

          $flasher->addSuccess('Your Login is not Successfull!');
          return redirect()->route('companylogin');
       }
           
        }


        return back()->withErrors([
            'email' => 'Wrong Credentials check your inputs.',
        ]);

    }

    

    
}
