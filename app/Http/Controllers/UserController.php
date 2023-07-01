<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function update(Request $request, $id){

        $user = User::find($id);

        $validated = $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
        ]);

        $name     = $request->name;
        $email    = $request->email;
        $location = $request->location;

        $user->update([
            'name'      =>$name,
            'location'  =>$location,
            'email'     =>$email,
        ]);

        $user->save();

        $success['email']        = $user->email;
        $success['name']         = $user->name;
        $success['location']     = $user->location;
        $success['success']  = true;

        return response()->json($success, 200);
    }


    public function add_image(Request $request , $id){

        $user = User::find($id);

        // $brand_image = $request->file('profile_image'); 
        $image1      = $request->file('image1'); 
        $image2      = $request->file('image2'); 
        $image3      = $request->file('image3'); 
        $image4      = $request->file('image4'); 

        // _______________________________________________

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($image1->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/images/'; 
        $b_image1 = $img_name;  
        $image1->move($upload_location,$img_name); 

        // _______________________________________________

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($image2->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/images/'; 
        $b_image2 = $img_name;  
        $image2->move($upload_location,$img_name); 
        // _______________________________________________

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($image3->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/images/'; 
        $b_image3 = $img_name; 
        $image3->move($upload_location,$img_name); 
        // _______________________________________________

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($image4->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/images/'; 
        $b_image4 = $img_name; 
        $image4->move($upload_location,$img_name);

        // _______________________________________________
        // _______________________________________________

        $user->update([
            // 'profile_image' => $image0,
            'image1'        => $b_image1,
            'image2'        => $b_image2,
            'image3'        => $b_image3,
            'image4'        => $b_image4
        ]
        );

        $user->save();

        return response()->json([
            'message' => 'the image is save succesfully',
        ] , 200);    
     }

    public function update_pass(Request $request){

        // $user = User::find($id);

        $validated = $request->validate([
            'old_password'  => 'required',
            'password'      => 'required|min:6|confirmed',

        ]);

        $user = $request->user();
        if(Hash::check($request->old_password, $user->password)){
            $user->update([
                'password' =>Hash::make($request->password)
            ]);
            return response()->json([
                'message' => 'pass update',
            ] , 200);
        }else{
            return response()->json([
                'message' => 'old pass does not match',
            ] , 400);
        }
    }


    public function all_garage(){
        $user = User::where('type' , '1')->get();
        return response()->json($user, 200);
    }

    public function all_washing(){
        $user = User::where('type' , '2')->get();
        return response()->json($user, 200);
    }




    public function profile_image(Request $request , $id){


        $validated = $request->validate([
            'profile_image'  => 'required',
        ]);


        $user = User::find($id);

        $brand_image = $request->file('profile_image'); 

 
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($brand_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/images/'; 
        $image0 = $img_name;  
        $brand_image->move($upload_location,$img_name);



        $user->update([
            'profile_image' => $image0,
        ]
        );

        $user->save();

        return response()->json([
            'message' => 'the image is save succesfully',
        ] , 200);    
     }

     public function all_admin(){
        $users = User::where('category' , '0')->get();
        return view('backend_pages.users.all_admin' , compact('users'));
     }

     public function all_users(){
        $users = User::where('category' , 'user')->get();
        return view('backend_pages.users.all_users' , compact('users'));
     }

     public function Maintenance(){
        $users = User::where('type' , '1')->get();
        return view('backend_pages.users.all_Maintenance' , compact('users'));
     }

     public function Laundry(){
        $users = User::where('type' , '2')->get();
        return view('backend_pages.users.all_Laundry' , compact('users'));
     }

     public function delete($id){
        $users = User::find($id);
        $users->delete();

        return redirect()->back();
     }

}
