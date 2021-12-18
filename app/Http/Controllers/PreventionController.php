<?php

namespace App\Http\Controllers;

use App\Http\Requests\prevention\CreateValidate;
use App\Http\Requests\prevention\UpdateValidate;
use App\Models\Preventions;

class PreventionController extends Controller
{
    public function index()
    {

        $prevention = Preventions::all();
        return view('manager.preventions.index', compact('prevention'));
    }

    public function create()
    {
        return view('manager.symptoms.create');
    }
    public function store(CreateValidate $request)
    {

        $add = Preventions::create([
            'name' => $request->name,
            'refer' => $request->refer,
        ]);
        if ($add) {
            return redirect()->route('preventions.index')->with('success', 'Add successful');
        } else {
            return redirect()->route('preventions.index')->with('fail', 'Add fail');
        }
    }

    public function edit($id)
    {
        $preventions = Preventions::where('id', $id)->first();

        return view('manager.preventions.update', compact('preventions'));
    }

    public function update(UpdateValidate $request)
    {

        $edit = Preventions::where('id', $request->id)->update([
            'name' => $request->name,
            'refer' => $request->refer,
        ]);

        if ($edit) {
            return redirect()->route('preventions.index')->with('success', 'Edit successful');
        } else {
            return redirect()->route('preventions.index')->with('fail', 'Edit fail');
        }
    }
    public function delete($id)
    {
        Preventions::where('id', $id)->delete();
        return redirect()->route('preventions.index');
    }
}
