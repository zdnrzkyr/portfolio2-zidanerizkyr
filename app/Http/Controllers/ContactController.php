<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array(
            'contacts' => Contact::all()
        );
        return view('bukutamu', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->isMethod('POST')){
            $contact = new Contact();
            $contact->Name = $request->Name;
            $contact->Email = $request->Email;
            $contact->Message = $request->Message;
            $contact->save();
            return redirect('/')->with(['success' => 'your message has been sent']);
        }
        return view('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact  = Contact::find($request->id);
        $data = array(
            'contact' => $contact
        );

        if($request->isMethod('post')){
            $contact->Name = $request->Name;
            $contact->Email = $request->Email;
            $contact->Message = $request->Message;
            $contact->save();
            return redirect('/buku-tamu')->with(['success' => 'Update successful']);
        }
        return view('/update',$data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $contact = Contact::find($request->id);
        $contact->delete();
        return redirect('/buku-tamu')->with(['delete' => 'data has been successfully deleted']);
    }

    public function cari(Request $request)
    {
        $data = Contact::where('Name','LIKE','%'.$request->cari.'%')->orwhere('Email','LIKE','%'.$request->cari.'%')->paginate(5);
       
        return view('cari',compact('data'));
    }
}
