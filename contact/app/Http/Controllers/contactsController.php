<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacts;

class contactsController extends Controller
{
    public function index(){
        $contacts = contacts::all();
        return view('contacts.index', ['contacts'=>$contacts]);
    }
    public function create(){
        return view('contacts.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'pNumber' => 'required|numeric',
        ]);

        $newcontacts = contacts::create($data);

        return redirect(route('contacts.index'));

    }
}
