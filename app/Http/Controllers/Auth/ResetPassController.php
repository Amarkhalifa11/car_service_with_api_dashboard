<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Otp;
use Hash;

class ResetPassController extends Controller
{
    private $otp;

    public function __construct(){
        $this->otp = new Otp;
    }

    public function reset(Request $request){

        $validated = $request->validate([
            'email' => ['required' , 'email' , 'exists:users'],
            'otp'         => ['required' , 'max:6'],
            'password'    => ['required' , 'string' , 'confirmed'],
        ]);

        $otp2 = $this->otp->validate($request->email , $request->otp);
        if(!$otp2->status){
            return response()->json(['error' => $otp2] , 401);
        }
        $user = User::where('email', $request->email)->first();
        $user->update(['password' => Hash::make($request->password)]);
        $user->tokens()->delete();
        $success['success'] = true;

        return response()->json($success, 200);
    }
}
