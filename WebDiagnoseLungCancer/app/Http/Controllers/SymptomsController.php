<?php

namespace App\Http\Controllers;

use App\Http\Requests\symptom\CrateValidate;
use App\Http\Requests\symptom\UpdateValidate;
use App\Models\Symptoms;

class SymptomsController extends Controller
{
    public function index()
    {

        $symptom = Symptoms::all();
        return view('manager.symptoms.index', compact('symptom'));
    }

    public function create()
    {
        return view('manager.symptoms.create');
    }
    public function store(CrateValidate $request)
    {

        $add = Symptoms::create([
            'name' => $request->name,
            'refer' => $request->refer,
        ]);
        if ($add) {
            return redirect()->route('symptoms.index')->with('success', 'Add successful');
        } else {
            return redirect()->route('symptoms.index')->with('fail', 'Add fail');
        }
    }

    public function edit($id)
    {
        $symptoms = Symptoms::where('id', $id)->first();

        return view('manager.symptoms.update', compact('symptoms'));
    }

    public function update(UpdateValidate $request)
    {

        $edit = Symptoms::where('id', $request->id)->update([
            'name' => $request->name,
            'refer' => $request->refer,
        ]);

        if ($edit) {
            return redirect()->route('symptoms.index')->with('success', 'Edit successful');
        } else {
            return redirect()->route('symptoms.index')->with('fail', 'Edit fail');
        }
    }
    public function delete($id)
    {
        Symptoms::where('id', $id)->delete();
        return redirect()->route('symptoms.index');
    }
}
