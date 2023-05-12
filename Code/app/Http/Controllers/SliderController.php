<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Slider;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function HomeSlider(){
        $sliders = Slider::get();


        return view('admin.slider.index',compact('sliders'));
    }

    public function AddSlider(){
        return view('admin.slider.create');
    }

    public function StoreSlider(Request $request){

        // ->file('image') dari input pada form (name="image")
        $slider_image = $request->file('image');

        // Mengenerate uniqid sehingga nama file yang ada di database menjadi berbeda beda namanya
        $name_gen = hexdec(uniqid());
        // Membuat extensi file sesuai dengan yang diupload
        $img_ext = strtolower($slider_image->getClientOriginalExtension());
    
        // menggabungkan nama dan extensi dari gambar yang diupload
        $img_name = $name_gen. '.' . $img_ext;
        // memasukan directori file ke dalam variable $up_location
        $up_location = 'image/slider/';
    
        // memasukan ke folder image/slider
        $last_img = $up_location . $img_name;
        // menjalankan perintah diatas
        // $brand_image->move($up_location, $img_name);
    
        // menyesuaikan sizenya dengan tamplate dengan caara mengecek fotonya dan ke properties berapa size yang ditetapkan defautlnya
        Image::make($slider_image)->resize(1920,1088)->save($up_location.$img_name);
    
        Slider::insert([
            // title disesuaikan dari form input
            'title' => $request->title,
            'description' => $request->description,
            'image'=> $last_img,
            'created_at' => Carbon::now(),
        ]);
    
        return redirect()->route('home.slider')->with('success', 'insert Slider successfully');

    }



    public function Edit($id){
        $sliders = Slider::find($id);

        return view('admin.slider.edit',compact('sliders'));
    }

    public function Update(Request $request, $id){
        $validateData = $request->validate([
            'title' => 'required|min:4',
            'description' => 'required|max:255',
        ],[
            'title.required' => 'Title Cant Null',
            'title.min' => 'Title harus memiliki setidaknya 255 karakter',
            'description.required' => 'Description Cant Null',
            'description.max' => 'Description harus memiliki setidaknya 255 karakter',
        ]);


    $old_image = $request->old_image;

    $slider_image = $request->file('image');


    if ($slider_image) {

        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($slider_image->getClientOriginalExtension());
        $img_name = $name_gen. '.' . $img_ext;
        $up_location = 'image/slider/';
        $last_img = $up_location . $img_name;
        $slider_image->move($up_location, $img_name);

    
          // Hapus file old_image mengggunakan fucntion unlink
          unlink($old_image);
    
        //   jadi brand model harus menspesifikan id baru diupdate
        Slider::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now(),
        ]);
    
    
        return redirect()->route('home.slider')->with('success', 'Update Slider successfully');
    
    }else {
          //   jadi brand model harus menspesifikan id baru diupdate
          Slider::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);
    
    
        return redirect()->route('home.slider')->with('success', 'Update Slider successfully');

    }
    


}


    public function Delete($id){
        

    // Menghapus file image pada folder public
    $image = Slider::find($id);
    $old_image = $image->image;
    unlink($old_image);

    // Menghapus datanya pada table brands
    Slider::find($id)->delete();

    return redirect()->back()->with('success', 'Brand Deleted Successfully');
    }





    

}