<?php

namespace App\Http\Controllers;

use App\Exports\CarsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\car;
use App\Imports\CarsImport;
use Response;
class CarController extends Controller
{
    public function importExcel(Request $request) {
        Excel::import(new CarsImport, $request->file('file')->store('temp'));

        return back()->with('success', 'All good!');
    }

    public function export()
    {
        return Excel::download(new CarsExport, 'cars.csv');
    }


    public function downloadExampleSheet() {
        return response()->download(public_path('/assets/exampleSheets/carExampeImportSheet.csv'),'exampleSheet.csv');
    }

    public function index()
    {
        $cars= car::all();
        return view('backend.cars.index')->with('cars',$cars);
    }

    public function createExcel() {
        $cars= car::all();
        return view('backend.cars.excel')->with('cars',$cars);
    }

    public function create()
    {
       return view('backend.cars.create');
    }

    public function store(Request $request)
    {
        $new_car = new car();
        $new_car->model_id = $request->model_id;
        $new_car->brand_id = $request->brand_id;
        $new_car->name = $request->name;
        $new_car->price = $request->price;
        $new_car->discount_price = $request->discount_price;
        $new_car->from_discount_date = $request->from_discount_date;
        $new_car->to_discount_date = $request->to_discount_date;
        $new_car->qty = $request->qty;
        $new_car->warrenty = $request->warrenty;
        $new_car->engine_capacity = $request->engine_capacity;
        $new_car->horse_power = $request->horse_power;
        $new_car->max_speed = $request->max_speed;
        $new_car->acceleration = $request->acceleration;
        $new_car->transmission_type = $request->transmission_type;
        $new_car->fuel = $request->fuel;
        $new_car->litre_per_km = $request->litre_per_km;
        $new_car->country = $request->country;
        $new_car->assembly_country = $request->assembly_country;
        $new_car->length = $request->length;
        $new_car->width = $request->width;
        $new_car->height = $request->height;
        $new_car->height_from_ground = $request->height_from_ground;
        $new_car->wheele_speed = $request->wheele_speed;
        $new_car->trunk_size = $request->trunk_size;
        $new_car->no_of_seats = $request->no_of_seats;
        $new_car->traction_type = $request->traction_type;
        $new_car->no_of_cylinder = $request->no_of_cylinder;
        $new_car->fuel_tank = $request->fuel_tank;
        $new_car->capacity = $request->capacity;
        $new_car->torque_of_newton = $request->torque_of_newton;
        $new_car->insurance_price = $request->insurance_price;
        $new_car->register_price = $request->register_price;
        $new_car->comforts = $request->comforts;
        $new_car->windows = $request->windows;
        $new_car->sound_system = $request->sound_system;
        $new_car->safety = $request->safety;
        $new_car->other_features = $request->other_features;

        $new_car->save();
        return back()->with('success' ,'Car Saved Succefully');

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
