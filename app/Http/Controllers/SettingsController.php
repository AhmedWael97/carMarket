<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Settings;
class SettingsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware("permission:Settings View",['only'=>['index']]);
        $this->middleware("permission:Settings Create",['only'=>['create','store']]);
        $this->middleware("permission:Settings Edit",['only'=>['edit','update']]);
        $this->middleware("permission:Settings Delete",['only'=>['destroy']]);
    }
    public function index() {
        return view('backend.settings.index')->with('settings' , Settings::first());
    }

    public function update(Request $request) {
        $settings = Settings::first();

        $settings->update($request->all());

        if($request->has('site_logo')) {
            //
            $image = time().$request->file('site_logo')->getClientOriginalName();

            $path = $request->file('site_logo')->move(public_path('/assets/settings'),$image);

            $settings->site_logo = $image;
            $settings->save();
        }

        if($request->has('site_fav_icon')) {
            $image = time(). $request->file('site_fav_icon')->getClientOriginalName();

            $request->file('site_fav_icon')->move(public_path('/assets/settings'),$image);

            $settings->site_fav_icon =  $image;
            $settings->save();
        }

        if($request->has('section_subscribe_img')) {
            $image = time().'.' . $request->file('section_subscribe_img')->getClientOriginalExtension();

            $request->file('section_subscribe_img')->move(public_path('/assets/settings'),$image);

            $settings->section_subscribe_img = $image;
            $settings->save();
        }

        //


        if($request->has('section_one_img')) {


            $image =time(). $request->file('section_one_img')->getClientOriginalName();

            $path = $request->file('section_one_img')->move(public_path('/assets/settings'),$image );

            $settings->section_one_img =  $image;
            $settings->save();
        }
        return back()->with('success',translate('تم الحفظ بنجاح'));
    }
}
