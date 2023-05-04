<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SejarahGaleri;


class SejarahGaleriController extends Controller
{
   public function HomeSejarah (){
    $sejarahs = SejarahGaleri::get();
    
    return view('admin.sejarah_galeri.index',compact('sejarahs'));    
   }
}
