<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\News;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function HomeNews(){
        $news = News::get();


        return view('admin.news.index',compact('news'));
    }

    public function AddNews(){
        return view('admin.news.create');
    }

    public function StoreNews(Request $request){

        // ->file('image') dari input pada form (name="image")
        $slider_image = $request->file('image');

        // Mengenerate uniqid sehingga nama file yang ada di database menjadi berbeda beda namanya
        $name_gen = hexdec(uniqid());
        // Membuat extensi file sesuai dengan yang diupload
        $img_ext = strtolower($slider_image->getClientOriginalExtension());
    
        // menggabungkan nama dan extensi dari gambar yang diupload
        $img_name = $name_gen. '.' . $img_ext;
        // memasukan directori file ke dalam variable $up_location
        $up_location = 'image/news/';
    
        // memasukan ke folder image/slider
        $last_img = $up_location . $img_name;
        // menjalankan perintah diatas
        // $brand_image->move($up_location, $img_name);
    
        // menyesuaikan sizenya dengan tamplate dengan caara mengecek fotonya dan ke properties berapa size yang ditetapkan defautlnya
        Image::make($slider_image)->resize(1920,1088)->save($up_location.$img_name);
    
        News::insert([
            // title disesuaikan dari form input
            'title' => $request->title,
            'description' => $request->description,
            'image'=> $last_img,
            'created_at' => Carbon::now(),
        ]);
    
        return redirect()->route('home.news')->with('success', 'insert Slider successfully');

    }



    public function Edit($id){
        $news = News::find($id);

        return view('admin.news.edit',compact('news'));
    }

    public function Update(Request $request, $id){
        $validateData = $request->validate([
            'title' => 'required|min:4',
            'description' => 'required',
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
        News::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('home.news')->with('success', 'Update Slider successfully');
    
    }else {
          //   jadi brand model harus menspesifikan id baru diupdate
          News::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('home.news')->with('success', 'Update Slider successfully');

    }
    


    }


    public function Delete($id){
        

    // Menghapus file image pada folder public
    $image = News::find($id);
    $old_image = $image->image;
    unlink($old_image);

    // Menghapus datanya pada table brands
    News::find($id)->delete();

    return redirect()->back()->with('success', 'Brand Deleted Successfully');
    }




}