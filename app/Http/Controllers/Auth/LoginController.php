<?php

namespace App\Http\Controllers\Auth;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request){

        $validated = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $credentails = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        if(Auth()->attempt($credentails)){
            $user = Auth::user();
            $user->tokens()->delete();

            $success['token']    = $user->createToken(request()->userAgent())->plainTextToken;
            $success['id']       = $user->id;
            $success['email']    = $user->email;
            $success['name']     = $user->name;
            $success['success']  = true;

            return response()->json($success, 200);
                
        }else{
            return response()->json(['error'=> 'failed on login'] ,401);
        }

    }


    public function logout(Request $request){
        
        auth()->user()->tokens()->delete();

        return [
            'message' => 'logout'
        ];
    }
    
    
}
