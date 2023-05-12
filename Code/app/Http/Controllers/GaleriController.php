<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class GaleriController extends Controller
{
    public function HomeGaleri()    {
        $galeris = Galeri::get();

        return view('admin.galeri.index', compact('galeris'));
    }

    public function AddGaleri()
    {
        return view('admin.galeri.create');
    }

    public function StoreGaleri(Request $request)
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
        $up_location = 'image/galeri/';

        // memasukan ke folder image/slider
        $last_img = $up_location . $img_name;
        // menjalankan perintah diatas
        // $brand_image->move($up_location, $img_name);

        // menyesuaikan sizenya dengan tamplate dengan caara mengecek fotonya dan ke properties berapa size yang ditetapkan defautlnya
        Image::make($slider_image)
            ->resize(1920, 1088)
            ->save($up_location . $img_name);

        Galeri::insert([
            // title disesuaikan dari form input

            'image' => $last_img,
            'created_at' => Carbon::now(),
        ]);

        return redirect()
            ->route('home.galeri')
            ->with('success', 'insert galeri successfully');
    }

    public function Edit($id)
    {
        $galeris = Galeri::find($id);

        return view('admin.galeri.edit', compact('galeris'));
    }

    public function Update(Request $request, $id)
    {

        $old_image = $request->old_image;

        $slider_image = $request->file('image');

        if ($slider_image) {
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($slider_image->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $up_location = 'image/galeri/';
            $last_img = $up_location . $img_name;
            $slider_image->move($up_location, $img_name);

            // Hapus file old_image mengggunakan fucntion unlink
            unlink($old_image);

            //   jadi brand model harus menspesifikan id baru diupdate
            Galeri::find($id)->update([
                'image' => $last_img,
                'created_at' => Carbon::now(),
            ]);

            return redirect()
                ->route('home.galeri')
                ->with('success', 'Update galeri successfully');
        } else {
            //   jadi brand model harus menspesifikan id baru diupdate
            Galeri::find($id)->update([
                'created_at' => Carbon::now(),
            ]);

            return redirect()
                ->route('home.galeri')
                ->with('success', 'Update galeri successfully');
        }
    }

    public function Delete($id)
    {
        // Menghapus file image pada folder public
        $image = Galeri::find($id);
        $old_image = $image->image;
        unlink($old_image);

        // Menghapus datanya pada table brands
        Galeri::find($id)->delete();

        return redirect()
            ->back()
            ->with('success', 'galeri Deleted Successfully');
    }
}
