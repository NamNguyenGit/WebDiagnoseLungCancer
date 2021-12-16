<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        $contactus = Contact::all();
        return view('manager.contactus.index', compact('contactus'));
    }
    public function editstatus(Request $request)
    {
        Contact::where('id', $request->id)->update([
            'status' => $request->status,
        ]);
        return redirect()->route('contactus.index');
    }
}
