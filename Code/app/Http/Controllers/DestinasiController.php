<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function HomeDestinasi(){
        $destinasis = Destinasi::get();
        return view('admin.destinasi.index',compact('destinasis'));
    }

    public function AddDestinasi(){
        return view('admin.destinasi.create');
    }

    public function StoreDestinasi(Request $request){

        // ->file('image') dari input pada form (name="image")
        $team_image = $request->file('image');

        // Mengenerate uniqid sehingga nama file yang ada di database menjadi berbeda beda namanya
        $team_gen = hexdec(uniqid());
        // Membuat extensi file sesuai dengan yang diupload
        $img_ext = strtolower($team_image->getClientOriginalExtension());
    
        // menggabungkan nama dan extensi dari gambar yang diupload
        $img_name = $team_gen. '.' . $img_ext;
        // memasukan directori file ke dalam variable $up_location
        $up_location = 'image/destinasi/';
    
        // memasukan ke folder image/slider
        $last_img = $up_location . $img_name;
        // menjalankan perintah diatas
        // $brand_image->move($up_location, $img_name);
    
        // menyesuaikan sizenya dengan tamplate dengan caara mengecek fotonya dan ke properties berapa size yang ditetapkan defautlnya
        Image::make($team_image)->resize(520,640)->save($up_location.$img_name);
    
        Destinasi::insert([
            // title disesuaikan dari form input
            'title' => $request->title,
            'short_des' => $request->short_des,
            'long_des' => $request->long_des,
            'image'=> $last_img,
            'created_at' => Carbon::now(),
        ]);
    
        return redirect()->route('home.destinasi')->with('success', 'Data Berhasil Dimasukan');

    }



    public function Edit($id){
        $destinasis = Destinasi::find($id);

        return view('admin.destinasi.edit',compact('destinasis'));
    }

    public function Update(Request $request, $id){
        $validateData = $request->validate([
            'title' => 'required|min:4',
            'short_des' => 'required|max:255',
            'long_des' => 'required',
        ]);


    $old_image = $request->old_image;

    $slider_image = $request->file('image');


    if ($slider_image) {
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($slider_image->getClientOriginalExtension());
        $img_name = $name_gen. '.' . $img_ext;
        $up_location = 'image/destinasi/';
        $last_img = $up_location . $img_name;
        $slider_image->move($up_location, $img_name);

    
          // Hapus file old_image mengggunakan fucntion unlink
          unlink($old_image);
    
        //   jadi brand model harus menspesifikan id baru diupdate
        Destinasi::find($id)->update([
            'title' => $request->title,
            'short_des' => $request->short_des,
            'long_des' => $request->long_des,
            'image' => $last_img,
            'created_at' => Carbon::now(),
        ]);
    
    
        return redirect()->route('home.destinasi')->with('success', 'Update Data successfully');
    
    }else {
          //   jadi brand model harus menspesifikan id baru diupdate
          Destinasi::find($id)->update([
            'title' => $request->title,
            'short_des' => $request->short_des,
            'long_des' => $request->long_des,
            'created_at' => Carbon::now(),
        ]); 
    
    
        return redirect()->route('home.destinasi')->with('success', 'Update Data successfully');

    }
    


}


    public function Delete($id){
        

    // Menghapus file image pada folder public
    $image = Destinasi::find($id);
    $old_image = $image->image;
    unlink($old_image);

    // Menghapus datanya pada table brands
    Destinasi::find($id)->delete();

    return redirect()->back()->with('success', 'Data Berhasil Di Hapus');
    }

}
