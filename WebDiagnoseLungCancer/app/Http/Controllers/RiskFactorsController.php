<?php

namespace App\Http\Controllers;

use App\Models\RiskFactors;
use Illuminate\Http\Request;

class RiskFactorsController extends Controller
{
    public function index()
    {

        $riskfactor = RiskFactors::all();
        return view('manager.riskfactors.index', compact('riskfactor'));
    }

    public function create()
    {
        return view('manager.riskfactors.create');
    }
    public function store(Request $request)
    {

        $add = RiskFactors::create([
            'name' => $request->name,
            'refer' => $request->refer,
        ]);
        if ($add) {
            return redirect()->route('riskfactors.index')->with('success', 'Add successful');
        } else {
            return redirect()->route('riskfactors.index')->with('fail', 'Add fail');
        }
    }

    public function edit($id)
    {
        $riskfactors = RiskFactors::where('id', $id)->first();

        return view('manager.riskfactors.update', compact('riskfactors'));
    }

    public function update(Request $request)
    {

        $edit = RiskFactors::where('id', $request->id)->update([
            'name' => $request->name,
            'refer' => $request->refer,
        ]);

        if ($edit) {
            return redirect()->route('riskfactors.index')->with('success', 'Edit successful');
        } else {
            return redirect()->route('riskfactors.index')->with('fail', 'Edit fail');
        }
    }
    public function delete($id)
    {
        RiskFactors::where('id', $id)->delete();
        return redirect()->route('riskfactors.index');
    }
}
