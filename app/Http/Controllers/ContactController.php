<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        return view('contacts.index', [
            'contacts' => Contact::latest()->filter(request(['search']))->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fullname = explode(' ', $request->input('fullname'));

        $attributes = (array_merge($this->validateContact(), [
            'firstname' => $fullname[0],
            'lastname' => $fullname[1],
            
        ]));

        $phonenumbers = $request->input('phonenumber');
        $labels = $request->input('label');

        $merged = array_combine($phonenumbers, $labels);

        $contact = Contact::create($attributes);

        foreach ($merged as $number => $label) {
            $phone = new Phone();
            $phone->name = $number;
            $phone->label = $label;
            $phone->save();
           
            $phone->contact()->sync($contact->id);
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('contacts.show', [
            'contact' => $contact
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', [
            'contact' => $contact
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $fullname = explode(' ', $request->input('fullname'));

        if(isset($attributes['profilephoto'])){
            $attributes['profilephoto'] = request()->file('profilephoto')->store('photos');
        }

        $attributes = (array_merge($this->validateContact(), [
            'firstname' => $fullname[0],
            'lastname' => $fullname[1],
        ]));

        $phonenumbers = $request->input('phonenumber');
        $labels = $request->input('label');

        $merged = array_combine($phonenumbers, $labels);

        if($merged) {
            foreach ($merged as $number => $label) {
                $phone = new Phone();
                $phone->name = $number;
                $phone->label = $label;
                $phone->save();
               
                $phone->contact()->attach($contact->id);
            }
        }
        

        $contact->update($attributes);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect('/');
    }

    public function validateContact(){

       return $attributes = request()->validate([
            'email' => 'required|email',
            'favorite' => '',
            'profilephoto' => 'image'
        ]);
    }


}
