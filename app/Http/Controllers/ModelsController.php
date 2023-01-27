<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\models;
use App\Models\make;
class ModelsController extends Controller
{
     public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        return view('backend.models.index')->with('models' , models::paginate(15));
    }

    public function create() {
        return view('backend.models.create')->with('makes' , make::get());
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'string|required|max:191',
        ]);
        $newMake = new models($request->all());
        $newMake->save();
        return back()->with('success',translate('تم الحفظ بنجاح'));
    }

    public function edit($id) {
        return view('backend.models.edit')->with(
            ['model' => models::findOrFail($id), 'makes' => make::get()]
        );
    }

    public function update(Request $request) {
        $request->validate([
            'name' => 'string|required|max:191',
        ]);
        $make =  models::findOrFail($request->id);
        $make->update($request->all());
        return back()->with('success',translate('تم الحفظ بنجاح'));
    }

    public function destroy($id) {
        $make = models::findOrFail($id);
        $make->delete();
        return back()->with('success',translate('تم الحذف بنجاح'));
    }
}
