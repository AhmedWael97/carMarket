<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\models;
class ModelsController extends Controller
{
    public function index() {
        return view('backend.models.index')->with('makes' , models::paginate(15));
    }

    public function create() {
        return view('backend.models.create');
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
        return view('backend.models.edit')->with('make' , models::findOrFail($id));
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
