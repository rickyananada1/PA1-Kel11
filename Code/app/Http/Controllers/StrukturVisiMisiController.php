<?php

namespace App\Http\Controllers;
use App\Models\StrukturVisiMisi;


use Illuminate\Http\Request;

class StrukturVisiMisiController extends Controller
{
    public function HomeStruktur(){
        $strukturs = StrukturVisiMisi::get();
    
        return view('admin.strukturvisimisi.index',compact('strukturs'));
    }
}
