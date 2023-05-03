<?php

namespace App\Http\Controllers;
use App\Models\contactus;
use Illuminate\Http\Request;

class contactuscontroller extends Controller
{
    public function Admincontactus(){
        $contactuses = contactus::all();
        return view('admin.contactus.index',compact('contactuses'));
    }
}
