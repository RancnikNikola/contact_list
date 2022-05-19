<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class FavoriteController extends Controller
{
    public function index() {

         $contacts = Contact::where('favorite', '=', 1)->get();

         return view('contacts.index', [
            'contacts' => $contacts
        ]);
    }
}
