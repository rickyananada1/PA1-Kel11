<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\HomeAbout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function HomeAbout(){

        $homeAbout = HomeAbout::latest()->get();

        return view('admin.home.index',compact('homeAbout'));
    }


    public function AddAbout(){
        return view('admin.home.create');
    }
    
    public function StoreAbout(Request $request){
        // ->file('image') dari input pada form (name="image")
        $slider_image = $request->file('image');

        // Mengenerate uniqid sehingga nama file yang ada di database menjadi berbeda beda namanya
        $name_gen = hexdec(uniqid());
        // Membuat extensi file sesuai dengan yang diupload
        $img_ext = strtolower($slider_image->getClientOriginalExtension());

        // menggabungkan nama dan extensi dari gambar yang diupload
        $img_name = $name_gen. '.' . $img_ext;
        // memasukan directori file ke dalam variable $up_location
        $up_location = 'image/about/';

        // memasukan ke folder image/slider
        $last_img = $up_location . $img_name;
        // menjalankan perintah diatas
        // $about_image->move($up_location, $img_name);

        // menyesuaikan sizenya dengan tamplate dengan caara mengecek fotonya dan ke properties berapa size yang ditetapkan defautlnya
        Image::make($slider_image)->resize(1920,1088)->save($up_location.$img_name);


        HomeAbout::insert([
            'title' => $request->title,
            'short_des' => $request->short_des,
            'long_des' => $request->long_des,
            'image'=>$last_img,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('home.about')->with('About Successfully Inserted');
    }


    public function EditAbout($id){
        $abouts = HomeAbout::find($id);

        return view('admin.home.edit',compact('abouts'));
    }

        public function UpdateAbout(Request $request, $id){
            // $data = array();
            // $data['title'] = collect($request)->get('title');
            // $data['short_des'] = collect($request)->get('short_des');
            // $data['long_des'] = collect($request)->get('long_des');
            // DB::table('home_abouts')->where('id',$id)->update($data);    

    // dari input name yang hidden
            $old_image = $request->old_image;

            // dari input name yang baru
        $about_image = $request->file('about_image');


        if ($about_image) {

            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($about_image->getClientOriginalExtension());
            $img_name = $name_gen. '.' . $img_ext;
            $up_location = 'image/about/';
            $last_img = $up_location . $img_name;
            $about_image->move($up_location, $img_name);

        
            // Hapus file old_image mengggunakan fucntion unlink
            unlink($old_image);

            HomeAbout::find($id)->update([

                'title' => $request->title,
                'short_des' => $request->short_des,
                'long_des' => $request->long_des,
                'image' => $last_img,
                'created_at' => Carbon::now(),

            ]);

        }else {
            HomeAbout::find($id)->update([

                'title' => $request->title,
                'short_des' => $request->short_des,
                'long_des' => $request->long_des,
                'created_at' => Carbon::now(),

            ]);

        }
            return redirect()->route('home.about')->with('success','Update Data Successfully');
        
        }

    public function DeleteAbout($id){
        $delete = HomeAbout::find($id)->delete();
        return redirect()->back()->with('success','Delete Data Successfully');
    
    }

}
