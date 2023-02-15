<?php

namespace App\Http\Controllers;

use App\Exports\CarsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\car;
use App\Models\models;
use App\Imports\CarsImport;
use App\Models\CarProperty;
use Response;
use App\Models\Property;
class CarController extends Controller
{

     public function __construct() {
        $this->middleware('auth');
        $this->middleware("permission:Cars View",['only'=>['index']]);
        $this->middleware("permission:Cars Create",['only'=>['create','store']]);
        $this->middleware("permission:Cars Edit",['only'=>['edit','update']]);
        $this->middleware("permission:Cars Delete",['only'=>['destroy']]);
    }

    public function importExcel(Request $request) {
        Excel::import(new CarsImport, $request->file('file')->store('temp'));

        return back()->with('success', 'All good!');
    }

    public function export()
    {
        return Excel::download(new CarsExport, 'cars.csv');
    }


    public function downloadExampleSheet() {
        return Excel::download(new CarsExport, 'example.csv');
    }



    public function createExcel() {
        $cars= car::all();
        return view('backend.cars.excel')->with('cars',$cars);
    }








    public function index()
    {
        $cars= car::all();
        return view('backend.cars.index')->with('cars',$cars);
    }

    public function create()
    {
       $models = models::all();
       $properties = Property::all();
       return view('backend.cars.create')->with([
        'models' => $models,
        'properties' => $properties,
       ]);
    }

    public function store(Request $request)
    {
        $new_car = new car($request->all());

        if($request->has('thumbnail')) {
            $imageName = time().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('images'), $imageName);
            $new_car->thumbnail = $imageName ;

        }
        else{
            $new_car->thumbnail = "default.jpg";
        }
        $new_car->save();

        $properties = Property::all();
        foreach($properties as $property){
            $prop = "prop_".$property->id;
            if($request->has($prop) && $request->$prop != null) {
                $newPropForCar = new CarProperty();
                $newPropForCar->car_id = $new_car->id;
                $newPropForCar->property_id = $property->id;
                $newPropForCar->value = $request->$prop;
                $newPropForCar->save();
            }
        }

        return redirect()->route('car-index')->with('success' ,'Car Saved Succefully');

    }

    public function edit($id)
    {
        $car = car::findOrFail($id);
        $models = models::all();
        $properties = Property::all();
        return view('backend.cars.update')->with(['car'=>$car , 'models'=>$models, 'properties' => $properties,]);
    }


    public function update(request $request )
    {
        $car = car::findOrFail($request->id);
        $car->update($request->all());
        if($request->has('thumbnail')){
            $imageName = time().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('images'), $imageName);
            $car->thumbnail = $imageName ;
            $car->save();
        }

        $properties = Property::all();
        foreach($properties as $property){
            $prop = "prop_".$property->id;
            if($request->has($prop) && $request->$prop != null) {
                if(CarProperty::where(['car_id'=>$car->id,'property_id'=>$property->id])->first()) {
                    $newPropForCar =  CarProperty::where(['car_id'=>$car->id,'property_id'=>$property->id])->first();
                    $newPropForCar->value = $request->$prop;
                    $newPropForCar->save();
                } else {
                    $newPropForCar = new CarProperty();
                    $newPropForCar->car_id = $car->id;
                    $newPropForCar->property_id = $property->id;
                    $newPropForCar->value = $request->$prop;
                    $newPropForCar->save();
                }

            }
        }

        return redirect()->route('car-index')->with('success' ,'Car Updated Succefully');
    }

    public function destroy($id)
    {
        $car = car::findOrFail($id);
        $car->delete();
        return redirect()->route('car-index')->with('danger' ,'Car Deleted Succefully');
    }

}
