<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function all_car()
    {
        $cars = Car::all();
        return response()->json($cars, 200);
    }

    public function all_car_show()
    {
        $cars = Car::all();
        return view('backend_pages.car.all_cars' , compact('cars'));
    }


    public function add_car()
    {
        return view('backend_pages.car.add_car');
    }

    public function store_car(Request $request)
    {
        $cars = $request->validate([
            'name'     => 'required',
            'option'   => 'required',
        ]);

        $name   = $request->name;
        $option = $request->option;

        $cars = Car::create([
            'name'   => $name,
            'option' => $option,
        ]);

        $cars->save();
        return redirect()->route('dashboard.all_car_show');
    }

    public function edit_car($id)
    {
        $cars = Car::find($id);
        return view('backend_pages.car.edit_car' , compact('cars'));
    }


    public function update_car(Request $request, $id)
    {
        $cars = $request->validate([
            'name'     => 'required',
            'option'   => 'required',
        ]);

        $name   = $request->name;
        $option = $request->option;

        $cars = Car::find($id);

        $cars->update([
            'name'   => $name,
            'option' => $option,
        ]);

        $cars->save();
        return redirect()->route('dashboard.all_car_show');
    }


    public function destroy($id)
    {
        $cars = Car::find($id);
        $cars->delete();
        return redirect()->route('dashboard.all_car_show');

    }
}
