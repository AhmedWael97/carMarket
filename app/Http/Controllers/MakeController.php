<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\make;
class MakeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        return view('backend.makes.index')->with('makes' , make::paginate(15));
    }

    public function create() {
        return view('backend.makes.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'string|required|max:191',
            'logo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);


        $newMake = new make($request->all());
        if($request->has('logo')) {
            $image_path = $request->file('logo')->store('image', 'public');
            $newMake->logo = $image_path;
        }
        $newMake->save();
        return back()->with('success',translate('تم الحفظ بنجاح'));
    }

    public function edit($id) {
        return view('backend.makes.edit')->with('make' , make::findOrFail($id));
    }

    public function update(Request $request) {
        $request->validate([
            'name' => 'string|required|max:191',
            'logo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $make =  make::findOrFail($request->id);
        $make->update($request->all());

        if($request->has('logo')) {
            $image_path = $request->file('logo')->store('image', 'public');
            $make->image_path = $image_path;
        }

        return back()->with('success',translate('تم الحفظ بنجاح'));
    }

    public function destroy($id) {
        $make = make::findOrFail($id);
        $make->delete();
        return back()->with('success',translate('تم الحذف بنجاح'));
    }
}
