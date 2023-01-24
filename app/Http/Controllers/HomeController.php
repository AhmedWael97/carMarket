<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\make;
use App\Models\models;
class HomeController extends Controller
{
    public function home() {
        return view('frontend.pages.welcome')->with([
            'makes' => make::select('id','name')->get(),
        ]);
    }

    public function getModelsForMake($make_id) {
        return models::where('make_id',$make_id)->select('id','name')->get();
    }
}
