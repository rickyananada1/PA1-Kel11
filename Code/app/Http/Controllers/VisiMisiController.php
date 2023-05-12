<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisiMisiController extends Controller
{
    public function HomeVisiMisi(){

        $visimisis = VisiMisi::latest()->get();

        return view('admin.visimisi.index',compact('visimisis'));
    }


    public function AddVisiMisi(){
        return view('admin.visimisi.create');
    }
    
    public function StoreVisiMisi(Request $request){
        VisiMisi::insert([ 
            'visi' => $request->short_des,
            'misi' => $request->long_des,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('home.visimisi')->with('visimisi Successfully Inserted');
    }


    public function Edit($id){
        $visimisis = VisiMisi::find($id);

        return view('admin.visimisi.edit',compact('visimisis'));
    }

    public function Update(Request $request, $id){
        $data = array();
        $data['visi'] = collect($request)->get('short_des');
        $data['misi'] = collect($request)->get('long_des');
        DB::table('visi_misis')->where('id',$id)->update($data);    

        return redirect()->route('home.visimisi')->with('success','Update visimisi Successfully');
    
    }

    public function Delete($id){
        

        // Menghapus file image pada folder public
        $visimisi = VisiMisi::find($id);
        $visi = $visimisi->visi;
        $misi = $visimisi->misi;
    
        // Menghapus datanya pada table brands
        VisiMisi::find($id)->delete();
    
        return redirect()->back()->with('success', 'Team Berhasil Di Hapus');
        }
}
