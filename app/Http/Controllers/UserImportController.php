<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserImportController extends Controller
{
    public function show()
    {
        return view('clients.import');
    }

    public function store(Request $request)
    {
        $file = $request -> file('file');

        Excel::import(new UsersImport, $file );

        return back()->withStatus('Excel file imported successfully');
    }
}
