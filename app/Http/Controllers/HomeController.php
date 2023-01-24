<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\make;
use App\Models\models;
use App\Models\car;
use Session;
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

    public function addToCompare($id) {
        $car = car::findOrFail($id);

            if(Session::has('compares')){
                $value = Session::get('compares');
                if(count(explode(",",$value)) <= 3) {
                    if(!in_array($id,explode(",",$value))) {
                        $value = $value . ',' . $id;
                        Session::put('compares',$value);
                    }
                } else {
                    return 2;
                }

            } else {
                Session::put('compares',$id);
            }

        return 1;
    }

    public function addToFavorite($id) {
        $car = car::findOrFail($id);

            if(Session::has('favs')){
                $value = Session::get('favs');
                if(!in_array($id,explode(",",$value))) {
                    $value = $value . ',' . $id;
                    Session::put('favs',$value);
                }
            } else {
                Session::put('favs',$id);
            }

        return 1;
    }

    public function comparePage() {
        return view('frontend.pages.compare');
    }

    public function favPage () {
        return view('frontend.pages.fav');
    }
    public function search(Request $request) {
        $cars = car::where([
            'make_id' => $request->make,
            'model_id' =>$request->model,
            'year'=> $request->year,
        ])->get();
        $mayYouLike = car::inRandomOrder()->limit(3)->get();

        return view('frontend.pages.search')->with([
            'cars' => $cars,
            'myYouLike' => $mayYouLike,
        ]);
    }
}
