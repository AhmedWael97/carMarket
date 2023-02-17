<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
class PropertyController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware("permission:Property View",['only'=>['index']]);
        $this->middleware("permission:Property Create",['only'=>['store']]);
        $this->middleware("permission:Property Edit",['only'=>['store']]);
        $this->middleware("permission:Property Delete",['only'=>['destroy']]);
    }

    public function index() {
        return view('backend.properties.index')->with('properties',Property::get());
    }

    public function store(Request $request) {
        if($request->id != 0) {
            $property = Property::findOrFail($request->id);
            $property->update($request->all());

            return back()->with('success',translate('تم الحفظ بنجاح'));
        } else {
            $property = new Property($request->all());
            $property->save();
            return back()->with('success',translate('تم الحفظ بنجاح'));
        }
    }

    public function destroy($id) {
        $property = Property::findOrFail($id);
        $property->delete();

        return back()->with('success',translate('تم الحذف بنجاح'));
    }

    public function changeStatus($propId, $status) {

        $prop = Property::findOrFail($propId);
        $prop->active = $status;
        $prop->save();

        return 1;
    }
}
