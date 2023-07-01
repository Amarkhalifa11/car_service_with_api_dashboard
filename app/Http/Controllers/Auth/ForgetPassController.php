<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\ResetPasswordNotification;
use App\Models\User;

class ForgetPassController extends Controller
{
    public function forgetPassword(Request $request){

        $validated = $request->validate([
            'email' => ['required' , 'email' , 'exists:users'],
        ]);

        $input = $request->only('email');
        $user  = User::where('email' , $input)->first();
        $user->notify(new ResetPasswordNotification());
        $success['success'] = true;
        $success['email'] = $user->email;

        return response()->json($success, 200);

    }
}
