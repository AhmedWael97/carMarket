<?php

namespace App\Http\Controllers;

use App\Exports\CarsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\car;
use App\Models\models;
use App\Imports\CarsImport;

class CarController extends Controller
{
    public function importExcel() {
        Excel::import(new CarsImport, 'users.xlsx');

        return redirect('/')->with('success', 'All good!');
    }

    public function export()
    {
        return Excel::download(new CarsExport, 'cars.xlsx');
    }


    public function index()
    {
        $cars= car::all();
        return view('backend.cars.index')->with('cars',$cars);
    }

    public function create()
    {
       $models = models::all();
       return view('backend.cars.create')->with('models',$models);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'thumbnail_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->thumbnail_image->extension();
        $request->thumbnail_image->move(public_path('images/thumbnails'), $imageName);
        $new_car = new car($request->all());
        $new_car->save();
        return redirect('/dashboard/car-create')->with('success' ,'Car Saved Succefully');

    }

    public function edit($id)
    {
        $car = car::where('id',$id);
        return view('backend.cars.update')->with('car',$car);
    }


    public function update(request $request)
    {
        $car = car::findOrFail($request->id);
        $car->model_id = $request->model_id;
        $car->brand_id = $request->brand_id;
        $car->name = $request->name;
        $car->price = $request->price;
        $car->discount_price = $request->discount_price;
        $car->from_discount_date = $request->from_discount_date;
        $car->to_discount_date = $request->to_discount_date;
        $car->qty = $request->qty;
        $car->warrenty = $request->warrenty;
        $car->engine_capacity = $request->engine_capacity;
        $car->horse_power = $request->horse_power;
        $car->max_speed = $request->max_speed;
        $car->acceleration = $request->acceleration;
        $car->transmission_type = $request->transmission_type;
        $car->fuel = $request->fuel;
        $car->litre_per_km = $request->litre_per_km;
        $car->country = $request->country;
        $car->assembly_country = $request->assembly_country;
        $car->length = $request->length;
        $car->width = $request->width;
        $car->height = $request->height;
        $car->height_from_ground = $request->height_from_ground;
        $car->wheele_speed = $request->wheele_speed;
        $car->trunk_size = $request->trunk_size;
        $car->no_of_seats = $request->no_of_seats;
        $car->traction_type = $request->traction_type;
        $car->no_of_cylinder = $request->no_of_cylinder;
        $car->fuel_tank = $request->fuel_tank;
        $car->capacity = $request->capacity;
        $car->torque_of_newton = $request->torque_of_newton;
        $car->insurance_price = $request->insurance_price;
        $car->register_price = $request->register_price;
        $car->comforts = $request->comforts;
        $car->windows = $request->windows;
        $car->sound_system = $request->sound_system;
        $car->safety = $request->safety;
        $car->other_features = $request->other_features;
        $car->save();
        return back()->with('success' ,'Car Updated Succefully');
    }

    public function destroy($id)
    {
        $car = car::findOrFail($id);
        $car->delete();
        return back()->with('success' ,'Car Deleted Succefully');
    }

}
