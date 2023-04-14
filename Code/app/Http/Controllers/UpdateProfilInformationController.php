<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Laravel\Ui\UiServiceProvider;


class UpdateProfilInformationController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function show_profile(){
        // mengambil semua atribut user yang melakukan login
        $user = Auth::user();
        return view('profil_user',compact('user'));
         
    }

    // update nama den password
    public function edit_profile(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);
        $user = Auth::user();
        $user->update([
            'name'=> $request->name,
            'password' => Hash::make($request->password)
        ]);
        return Redirect::back();
    }

}
