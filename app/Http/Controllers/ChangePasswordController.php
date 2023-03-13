<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ChangePasswordController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        $current_password = $request->current_password;
        $new_password = $request->new_password;
        $new_confirm_password = $request->new_confirm_password;
   
        $theuser = User::find(auth()->user()->id)->update(['password'=> Hash::make($new_password)]);

        if($theuser){

            return "Password Changed Successfully";

        }else{

            return "The new confirm password and new password must match.";

        }


   
         
    }
}
