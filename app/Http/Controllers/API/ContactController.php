<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Contact;
use Validator;
use App\Http\Resources\Contact as ContactResource;

class ContactController extends Controller
{

    public function create()
    {
        return view('contact');
    }
    public function store()
    {

        $contact=new Contact(request(['name','email','subject','message']));

        $contact->save();


        return view('contact');
    }
}
