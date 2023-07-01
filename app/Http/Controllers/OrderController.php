<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function all_order()
    {
        $orders = Order::all();
        return view('backend_pages.order.all_order' , compact('orders'));
    }


    public function add_order(Request $request)
    {
        $validated = $request->validate([
            'car'          => 'required',
            'service_id'   => 'required',
            'price'        => 'required|integer',
            'time'         => 'required',
            'location'     => 'required',
            'phone'        => 'required',
            'emergency'    => 'required',
            'vendor_id'    => 'required',
            'user_id'      => 'required',

        ]);

        $car            = $request->car;
        $service_id     = $request->service_id;
        $price          = $request->price;
        $time           = $request->time;
        $location       = $request->location;
        $phone          = $request->phone;
        $emergency      = $request->emergency;
        $vendor_id      = $request->vendor_id;
        $user_id        = $request->user_id;

        $orders = Order::create([
             'car'         => $car,
             'service_id'  => $service_id,
             'price'       => $price,
             'time'        => $time,
             'location'    => $location,
             'phone'       => $phone,
             'emergency'   => $emergency,
             'vendor_id'   => $vendor_id,
             'user_id'     => $user_id,
         ]);

         $orders->save();

         return response()->json([
            'message' => 'the order is send succesfully',
        ] , 200);  
    }

    public function all_order_user($id)
    {
        $orders = Order::where('user_id' , $id)->get();
        return response()->json($orders, 200);
    }

    public function all_order_vendor($id)
    {
        $orders = Order::where('vendor_id' , $id)->get();
        return response()->json($orders, 200);
    }

    public function update_status(Request $request,$id)
    {

        $validated = $request->validate([
            'status'     => 'required',
        ]);

        $status = $request->status;

        $orders = Order::find($id);

        $orders->update([
            'status' => $status,
        ]);

        return response()->json([
            'message' => 'the ststus is update succesfully',
        ] , 200); 

    }

    public function destroy($id)
    {
        $orders = Order::find($id);
        $orders->delete();
        return redirect()->back();
    }
}
