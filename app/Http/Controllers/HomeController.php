<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\make;
use App\Models\models;
use App\Models\car;
use App\Models\subscribers;
use Session;
use Location;

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
                if(count(explode(",",$value)) <= 6) {
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

    public function removeCompare($id) {

            if(Session::has('compares')){
                $value = Session::get('compares');
                $ids = explode(",",$value);
                if(count($ids) == 1  && in_array($id,$ids)) {
                    Session::forget('compares');
                } elseif (count($ids) > 1 && in_array($id,$ids)) {
                    $text = '';
                    foreach($ids as $key=>$el) {
                     if($el != $id) {
                        if($key == 0) {
                            $text = $el;
                        } else {
                            $text = $text . ',' . $el;
                        }
                     }
                    }
                     Session::put('compares',$text);
                }
            }

            return back();
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

    public function removeFavorite($id) {

        if(Session::has('favs')){
            $value = Session::get('favs');
            $ids = explode(",",$value);
            if(count($ids) == 1  && in_array($id,$ids)) {
                Session::forget('favs');
            } elseif (count($ids) > 1 && in_array($id,$ids)) {
                $text = '';
                foreach($ids as $key=>$el) {
                 if($el != $id) {
                    if($key == 0) {
                        $text = $el;
                    } else {
                        $text = $text . ',' . $el;
                    }
                 }
                }
                 Session::put('favs',$text);
            }
        }

        return back();

        return back();
    }


    public function comparePage() {
        return view('frontend.pages.compare');
    }

    public function favPage () {
        return view('frontend.pages.fav');
    }
    public function search(Request $request) {
        $cars = car::where('name','LIKE',"%{$request->name}%")->get();
        $mayYouLike = car::inRandomOrder()->limit(3)->get();

        return view('frontend.pages.search')->with([
            'cars' => $cars,
            'myYouLike' => $mayYouLike,
        ]);
    }

    public function filter(Request $request) {
        return view('frontend.pages.items')->with([
            'items' => car::where(
                [
                    ['name' , 'like' , '%'.$request->car_name.'%'],

                    ['price' , '>' , (int) $request->less_price],
                    ['price' , '<' , (int) $request->max_price],
                ]
            )->get(),
        ]);
    }

    public function saveSubsriber(Request $request) {
        $ip = $request->ip();
        $data = \Location::get($ip);
        $newSubscriber = new subscribers([
            'ip' => $ip,
            'email' => $request->email,
            'country' =>$data ? $data->countryName : null,
            'city' => $data ? $data->cityName : null,
        ]);
        $newSubscriber->save();
        return back();
    }

    public function items() {
        return view('frontend.pages.items')->with([
            'items' => car::get(),
        ]);
    }
}
