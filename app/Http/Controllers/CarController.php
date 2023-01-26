<?php

namespace App\Http\Controllers;

use App\Exports\CarsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\car;
use App\Models\models;
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
       return view('backend.cars.create')->with('models',$models);
    }

    public function store(Request $request)
    {
        $new_car = new car($request->all());
       
        $imageName = time().'.'.$request->thumbnail->extension();   
        $request->thumbnail->move(public_path('images'), $imageName);
        $new_car->thumbnail = $imageName ;
        $new_car->save();
        return redirect('/dashboard/car-index')->with('success' ,'Car Saved Succefully');

    }

    public function edit($id)
    {
        $car = car::findOrFail($id);
        $models = models::all();
        return view('backend.cars.update')->with(['car'=>$car , 'models'=>$models]);
    }


    public function update(request $request )
    {
        $car = car::findOrFail($request->id);
        $car->update($request->all());
        $imageName = time().'.'.$request->thumbnail->extension();   
        $request->thumbnail->move(public_path('images'), $imageName);
        $car->thumbnail = $imageName ;
        $car->save();
        return redirect('/dashboard/car-index')->with('success' ,'Car Updated Succefully');
    }

    public function destroy($id)
    {
        $car = car::findOrFail($id);
        $car->delete();
        return redirect('/dashboard/car-index')->with('danger' ,'Car Deleted Succefully');
    }

}
