<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\HomeAbout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function HomeAbout()
    {
        $homeAbout = HomeAbout::get();
        return view('admin.home.index', compact('homeAbout'));
    }

    public function AddAbout()
    {
        return view('admin.home.create');
    }

    public function StoreAbout(Request $request)
    {
        // ->file('image') dari input pada form (name="image")
        $slider_image = $request->file('image');

        // Mengenerate uniqid sehingga nama file yang ada di database menjadi berbeda beda namanya
        $name_gen = hexdec(uniqid());
        // Membuat extensi file sesuai dengan yang diupload
        $img_ext = strtolower($slider_image->getClientOriginalExtension());

        // menggabungkan nama dan extensi dari gambar yang diupload
        $img_name = $name_gen . '.' . $img_ext;
        // memasukan directori file ke dalam variable $up_location
        $up_location = 'image/about/';

        // memasukan ke folder image/slider
        $last_img = $up_location . $img_name;
        // menjalankan perintah diatas
        // $brand_image->move($up_location, $img_name);

        // menyesuaikan sizenya dengan tamplate dengan caara mengecek fotonya dan ke properties berapa size yang ditetapkan defautlnya
        Image::make($slider_image)
            ->resize(1920, 1088)
            ->save($up_location . $img_name);

        HomeAbout::insert([
            // title disesuaikan dari form input
            'title'=> $request->title,
            'short_des'=> $request->short_des,
            'long_des'=> $request->long_des,
            'image' => $last_img,
            'created_at' => Carbon::now(),
        ]);

        return redirect()
            ->route('home.about')
            ->with('success', 'insert about successfully');

    }

    public function EditAbout($id)
    {
        $abouts = HomeAbout::find($id);

        return view('admin.home.edit', compact('abouts'));
    }

    public function UpdateAbout(Request $request, $id)
    {
        $old_image = $request->old_image;

        $slider_image = $request->file('image');

        if ($slider_image) {
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($slider_image->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $up_location = 'image/about/';
            $last_img = $up_location . $img_name;
            $slider_image->move($up_location, $img_name);

            // Hapus file old_image mengggunakan fucntion unlink
            unlink($old_image);

            //   jadi brand model harus menspesifikan id baru diupdate
            HomeAbout::find($id)->update([
                'title'=>$request->title,
                'short_des'=>$request->short_des,
                'long_des'=>$request->long_des,
                'image' => $last_img,
                'created_at' => Carbon::now(),
            ]);

            return redirect()
                ->route('home.about')
                ->with('success', 'Update galeri successfully');
        } else {
            //   jadi brand model harus menspesifikan id baru diupdate
            HomeAbout::find($id)->update([
                'title'=>$request->title,
                'short_des'=>$request->short_des,
                'long_des'=>$request->long_des,
                'created_at' => Carbon::now(),
            ]);

            return redirect()
                ->route('home.about')
                ->with('success', 'Update galeri successfully');
        }
    }


    public function DeleteAbout($id)
    {
        // Menghapus file image pada folder public
        $image = HomeAbout::find($id);
        $old_image = $image->image;
        unlink($old_image);

        // Menghapus datanya pada table brands
        HomeAbout::find($id)->delete();

        return redirect()
            ->back()
            ->with('success', 'HomeAbout Berhasil Di Hapus');
    }
}
