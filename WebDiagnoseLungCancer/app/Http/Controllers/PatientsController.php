<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patients;

class PatientsController extends Controller
{
    //
    public function index()
    {
        $patients = patients::all();
        return view('manager.patients.index', compact('patients'));
    }
}
