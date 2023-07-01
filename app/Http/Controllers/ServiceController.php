<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function all_data_user($id)
    {
        $users    =  User::where('id' , $id)->get();
        return response()->json($users , 200);
    }

    public function all_data_service($id)
    {
        $services =  Service::where('user_id' , $id)->get();
        return response()->json($services , 200);
    }

    public function add_service(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required',
            'image'         => 'required',
            'price'         => 'required|integer',
            'description'   => 'required',
            'user_id'      => 'required',

        ]);

        //2 uploade image 
 
        $brand_image = $request->file('image'); 
 
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($brand_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/images/'; 
        $image = $img_name; 
        $brand_image->move($upload_location,$img_name); 



        $name          = $request->name;
        $price         = $request->price;
        $description   = $request->description;
        $user_id       = $request->user_id;

        $service = Service::create([
            'name'           => $name,
            'image'          => $image,
            'price'          => $price,
            'description'    => $description,
            'user_id'        => $user_id,
        ]);

        $service->save();

        return response()->json([
            'message' => 'the service is save succesfully',
        ] , 200); 
    }

    public function all_service()
    {
        $services = Service::all();
        return view('backend_pages.service.all_service' , compact('services'));
    }

    public function edit_service($id)
    {
        $service = Service::find($id);
        return view('backend_pages.service.edit_service' , compact('service'));
    }


    public function update_service(Request $request, $id)
    {
        $validated = $request->validate([
            'name'          => 'required',
            'image'         => 'required',
            'price'         => 'required|integer',

        ]);

        //2 uploade image 
 
        $brand_image = $request->file('image'); 
 
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($brand_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/images/'; 
        $image = $img_name; 
        $brand_image->move($upload_location,$img_name); 



        $name          = $request->name;
        $price         = $request->price;

        $services = Service::find($id);

        $services->update([
            'name'           => $name,
            'image'          => $image,
            'price'          => $price,
        ]);

        $services->save();
        return redirect()->route('dashboard.all_service');

    }

    public function destroy($id)
    {
        $services = Service::find($id);
        $services->delete();

        return redirect()->back();
    }
}
