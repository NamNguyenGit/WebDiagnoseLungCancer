<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Http\Requests\importexcelRequest;
use Maatwebsite\Excel\Facades\Excel;

class UserImportController extends Controller
{
    public function show()
    {
        return view('clients.import');
    }

    public function store(importexcelRequest $request)
    {
        $file = $request -> file('file')->store('import');

     

       (new UsersImport) -> import($file);
        
        return back()->withStatus('Excel file imported successfully');
    }
}
