<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Models\ExportUser;
use App\Http\Requests\importexcelRequest;
use App\Mail\PatientMail;
use App\Models\patients;
use Illuminate\Support\Facades\Mail;
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
        $edit = $file = $request->file('file')->store('import');
        (new UsersImport)->import($file);
        if ($edit) {
            return redirect()->route('clients.import')->with('success', 'Post successful');
        } else {
            return redirect()->route('clients.import')->with('fail', 'Post file');
        }
    }

    public function mailplace ($id) {
        return view('manager.excel.mailplace',compact('id'));
    }


    public function mail(Request $request)
    {
        $id = $request->id;
        $content = $request->content;
        $user = ExportUser::where('id', $id)->first();
        $email = $user->email;
        $patient = new patients();
        $patient -> email = $email;
        $patient -> content = $content;
        
        Mail::send('manager.Mail.mail', ['content' => $content], function ($m) use ($email) {
            $m -> from('blackkaise06012001@gmail.com','Nguyen Hoang Nam');
            $m -> to($email)->subject('Advice From Doctor');
        });
       

        return redirect()->route('excel.index');
    }
}
