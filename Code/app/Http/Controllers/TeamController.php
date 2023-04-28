<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Team;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function HomeTeam(){
        $teams = Team::get();


        return view('admin.team.index',compact('teams'));
    }

    public function AddTeam(){
        return view('admin.team.create');
    }

    public function StoreTeam(Request $request){

        // ->file('image') dari input pada form (name="image")
        $team_image = $request->file('image');

        // Mengenerate uniqid sehingga nama file yang ada di database menjadi berbeda beda namanya
        $team_gen = hexdec(uniqid());
        // Membuat extensi file sesuai dengan yang diupload
        $img_ext = strtolower($team_image->getClientOriginalExtension());
    
        // menggabungkan nama dan extensi dari gambar yang diupload
        $img_name = $team_gen. '.' . $img_ext;
        // memasukan directori file ke dalam variable $up_location
        $up_location = 'image/team/';
    
        // memasukan ke folder image/slider
        $last_img = $up_location . $img_name;
        // menjalankan perintah diatas
        // $brand_image->move($up_location, $img_name);
    
        // menyesuaikan sizenya dengan tamplate dengan caara mengecek fotonya dan ke properties berapa size yang ditetapkan defautlnya
        Image::make($team_image)->resize(520,640)->save($up_location.$img_name);
    
        Team::insert([
            // title disesuaikan dari form input
            'name' => $request->name,
            'role' => $request->role,
            'image'=> $last_img,
            'created_at' => Carbon::now(),
        ]);
    
        return redirect()->route('home.team')->with('success', 'Data Berhasil Dimasukan');

    }



    public function Edit($id){
        $teams = Team::find($id);

        return view('admin.team.edit',compact('teams'));
    }

    public function Update(Request $request, $id){
        $validateData = $request->validate([
            'name' => 'required|min:4',
            'role' => 'required|max:100|min:4',
        ],[
            'title.required' => 'Title Tidak Boleh Kosong',
            'title.min' => 'Title harus memiliki setidaknya 4 karakter',
            'role.required' => 'Role Tidak Boleh Kosong',
            'role.max' => 'batas maximal role adalah 50 karakter',
            'role.min' => 'batas minimal role adalah 4 karakter',
        ]);


    $old_image = $request->old_image;

    $slider_image = $request->file('image');


    if ($slider_image) {

        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($slider_image->getClientOriginalExtension());
        $img_name = $name_gen. '.' . $img_ext;
        $up_location = 'image/team/';
        $last_img = $up_location . $img_name;
        $slider_image->move($up_location, $img_name);

    
          // Hapus file old_image mengggunakan fucntion unlink
          unlink($old_image);
    
        //   jadi brand model harus menspesifikan id baru diupdate
        Team::find($id)->update([
            'name' => $request->name,
            'role' => $request->role,
            'image' => $last_img,
            'created_at' => Carbon::now(),
        ]);
    
    
        return redirect()->route('home.team')->with('success', 'Team Berhasil Di Update');
    
    }else {
          //   jadi brand model harus menspesifikan id baru diupdate
          Team::find($id)->update([
            'name' => $request->name,
            'role' => $request->role,
            'created_at' => Carbon::now(),
        ]);
    
        return redirect()->route('home.team')->with('success', 'Team Berhasil Di Update');

    }
    


}


    public function Delete($id){
        

    // Menghapus file image pada folder public
    $image = Team::find($id);
    $old_image = $image->image;
    unlink($old_image);

    // Menghapus datanya pada table brands
    Team::find($id)->delete();

    return redirect()->back()->with('success', 'Team Berhasil Di Hapus');
    }



}
