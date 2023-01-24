<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\make;
use App\Models\models;
use App\Models\car;
class HomeController extends Controller
{
    public function home() {
        return view('frontend.pages.welcome')->with([
            'makes' => make::select('id','name')->get(),
            'newest' => car::orderBy('id','desc')->take(12)->get(),
            'mostViewed' => car::where('views','>',0)->take(12)->get(),
        ]);
    }

    public function getModelsForMake($make_id) {
        return models::where('make_id',$make_id)->select('id','name')->get();
    }

    public function carDetails($id) {
        return view('frontend.pages.car')->with([
            'car' => car::findOrFail($id),
        ]);
    }
}
