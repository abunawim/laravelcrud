<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return view('backend.contact.show_contact_list')->with('allContactList',$contact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.contact.contact_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'contact_name' => 'required|max:255',
            'contact_description' => 'required',
        ]);

        $contact = new contact;

        if ($request->hasFile('fileimage')) {

            $image = $request->file('fileimage');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);
            $contact->fileimage = $input['imagename'];

        }

        $contact->contact_name = $request->input('contact_name');
        $contact->contact_description = $request->input('contact_description');
        $contact->gender = $request->input('gender');
        $contact->contact_emergency = $request->input('contact_emergency');
        
        $contact->save();
        session()->flash('message','Insert sussfully');
        return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = contact::find($id);
        return view('backend.contact.edit_contact')->with('singleDataEdit',$contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $contact)
    {
        $contact = contact::find($contact);
        if ($request->hasFile('fileimage')) {

            $image = $request->file('fileimage');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);
            $contact->fileimage = $input['imagename'];
        }
        
        $contact->contact_name = $request->input('contact_name');
        $contact->contact_description = $request->input('contact_description');
        $contact->gender = $request->input('gender');
        $contact->contact_emergency = $request->input('contact_emergency');
        
        $contact->update();
        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($contact)
    {
        contact::destroy($contact);
        return redirect()->route('contact.index');
    }
}
