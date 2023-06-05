<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Sejarah;
use Illuminate\Support\Facades\DB;

class SejarahController extends Controller
{
    public function HomeSejarah(){

        $sejarahs = Sejarah::latest()->get();

        return view('admin.sejarah_desa.index',compact('sejarahs'));
    }


    public function AddSejarah(){
        return view('admin.sejarah_desa.create');
    }
    
    public function StoreSejarah(Request $request){
        Sejarah::insert([ 
            'sejarah_desa' => $request->sejarah_desa,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('home.sejarah')->with('sejarah_desa Successfully Inserted');
    }


    public function Edit($id){
        $Sejarahs = Sejarah::find($id);

        return view('admin.sejarah_desa.edit',compact('Sejarahs'));
    }

    public function Update(Request $request, $id){
        $data = array();
        $data['sejarah_desa'] = collect($request)->get('sejarah_desa');
        DB::table('sejarahs')->where('id',$id)->update($data);    

        return redirect()->route('home.sejarah')->with('success','Update visimisi Successfully');
    
    }

    public function Delete($id){
        

        // Menghapus file image pada folder public
        $sejarah = Sejarah::find($id);
        $sejarah_desa = $sejarah->sejarah_desa;
    
        // Menghapus datanya pada table brands
        Sejarah::find($id)->delete();
    
        return redirect()->back()->with('success', 'Sejarah Berhasil Di Hapus');
        }
}
