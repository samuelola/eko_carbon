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

class RegisterController extends Controller
{
    public function signup(Request $request){

          return view("auth.signup");
    }

    protected function create(Request $request, FlasherInterface $flasher){
    
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
        Auth::login($user);

        $flasher->addSuccess('Your Registration is successfully!');
        return redirect()->route('listing');  

    }

        // $data = $request->validate([
        //     'firstname' => ['required', 'string','min:3', 'max:255'],
        //     'lastname' => ['required', 'string','min:3', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:6', 'confirmed'],
        // ]);

        // $id = User::create([
        //     'firstname' => $data['firstname'],
        //     'lastname' => $data['lastname'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'role' => $request->role,
        //     'is_active' => $request->is_active,
        //     'kyc_status' => $request->kyc_status,
            
        // ])->id;

        // $encrypted = Crypt::encryptString($id);

        // $flasher->addSuccess('Your Registration is successfully!');


        // return redirect()->route('listing',$encrypted);   

    }

    

    
}
