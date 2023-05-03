<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaanSampahController extends Controller
{


    public function HomeLokasi(){
        $lokasis = PengelolaanSampah::get();
        return view('user.pengelolaansampah',compact('lokasis'));
    }














}
