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
use App\Models\Country;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\Householdcal;

class companyController extends Controller
{
    public function companylist(Request $request){

        return view('company.companylist');

    }

    public function companysignup(Request $request){

        return view('company.companysignup');
    }

    public function companysignin(Request $request){

        return view('company.companysignin');
    }
    


    protected function companycreate(Request $request, FlasherInterface $flasher){
    
        $data = $request->validate([
            'firstname' => ['required', 'string','min:3', 'max:255'],
            'address' => ['required','string'],
            'rcnumber' => ['required'], 
            'industry' => ['required'],
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
                'address' => $data['address'],
                'rcnumber' => $data['rcnumber'],
                'industry' => $data['industry'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => $request->role,
                'is_active' => $request->is_active,
                'kyc_status' => $request->kyc_status,
                
            ]);

        
        return redirect()->route('companysignin');  

    }

    }

    public function companylogin(Request $request, FlasherInterface $flasher){

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



    public function companydashboard(Request $request){

        return view('company.dashboard');

    }

    public function companyaccount(Request $request){

        $getUpdateUser = User::where('id',Auth::user()->id)->first();

        $allcountry = Country::all();

        return view('company.account',compact('getUpdateUser','allcountry'));
    }

    public function companyemission(Request $request){
        $user_id = Auth::user()->id;

        $alltotalemissions = Householdcal::where('user_id',$user_id)->get();
    
        return view('company.companyemission',compact('alltotalemissions'));

    }


    public function companylogout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/companysignin');
        // return redirect()->route('login');
    }


    
    
}
