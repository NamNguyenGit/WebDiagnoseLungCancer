<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Models\ExportUser;
use App\Http\Requests\importexcelRequest;
use Maatwebsite\Excel\Facades\Excel;

class UserImportController extends Controller
{
    public function index()
    {
        $exportuser = ExportUser::all();
        return view('manager.excel.index', compact('exportuser'));
    }
    public function editstatus(Request $request)
    {
        ExportUser::where('id', $request->id)->update([
            'status' => $request->status,
        ]);
        return redirect()->route('excel.index');
    }


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