<?php

namespace App\Http\Controllers;

use App\Exports\CarsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
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
}
