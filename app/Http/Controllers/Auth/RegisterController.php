<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class RegisterController extends Controller
{
    public function Register1(Request $request){

        $newuser = $request->validate([
            'name'     => 'required|max:50',
            'email'    => 'required|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'location' => 'required',
            'type'     => 'required',
        ]);

        $newuser['password'] = Hash::make($newuser['password']);
        $newuser['category'] = 'vendor';

        $user = User::create($newuser);

        $success['token']    = $user->createToken('user' , ['app:all'])->plainTextToken;
        $success['name']     = $user->name;
        $success['email']    = $user->email;
        $success['location'] = $user->location;
        $success['category'] = $user->category;
        $success['type']     = $user->type;
        $success['success']  = true;
        

        return response()->json($success, 200);

    }



    public function Register2(Request $request){

        $newuser = $request->validate([
            'name'     => 'required|max:50',
            'email'    => 'required|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'location' => 'required',
        ]);

        $newuser['password'] = Hash::make($newuser['password']);
        $newuser['category'] = 'user';

        $user = User::create($newuser);

        $success['token']    = $user->createToken('user' , ['app:all'])->plainTextToken;
        $success['name']     = $user->name;
        $success['email']    = $user->email;
        $success['location'] = $user->location;
        $success['success']  = true;
        

        return response()->json($success, 200);

    }



}
