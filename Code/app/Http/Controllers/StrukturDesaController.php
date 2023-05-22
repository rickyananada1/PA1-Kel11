<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\StrukturDesa;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class StrukturDesaController extends Controller
{
    public function HomeStruktur()    {
        $strukturs = StrukturDesa::get();

        return view('admin.struktur.index', compact('strukturs'));
    }

    public function AddStruktur()
    {
        return view('admin.struktur.create');
    }

    public function StoreStruktur(Request $request)
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
        $up_location = 'image/struktur/';

        // memasukan ke folder image/slider
        $last_img = $up_location . $img_name;
        // menjalankan perintah diatas
        // $brand_image->move($up_location, $img_name);

        // menyesuaikan sizenya dengan tamplate dengan caara mengecek fotonya dan ke properties berapa size yang ditetapkan defautlnya
        Image::make($slider_image)
            ->resize(1920, 1088)
            ->save($up_location . $img_name);

        StrukturDesa::insert([
            // title disesuaikan dari form input

            'image' => $last_img,
            'created_at' => Carbon::now(),
        ]);

        return redirect()
            ->route('home.struktur')
            ->with('success', 'insert Struktur successfully');
    }

    public function Edit($id)
    {
        $strukturs = StrukturDesa::find($id);

        return view('admin.struktur.edit', compact('strukturs'));
    }

    public function Update(Request $request, $id)
    {

        $old_image = $request->old_image;

        $slider_image = $request->file('image');

        if ($slider_image) {
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($slider_image->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $up_location = 'image/struktur/';
            $last_img = $up_location . $img_name;
            $slider_image->move($up_location, $img_name);

            // Hapus file old_image mengggunakan fucntion unlink
            unlink($old_image);

            //   jadi brand model harus menspesifikan id baru diupdate
            StrukturDesa::find($id)->update([
                'image' => $last_img,
                'created_at' => Carbon::now(),
            ]);

            return redirect()
                ->route('home.struktur')
                ->with('success', 'Update Struktur successfully');
        } else {
            //   jadi brand model harus menspesifikan id baru diupdate
            StrukturDesa::find($id)->update([
                'created_at' => Carbon::now(),
            ]);

            return redirect()
                ->route('home.struktur')
                ->with('success', 'Update Struktur successfully');
        }
    }

    public function Delete($id)
    {
        // Menghapus file image pada folder public
        $image = SturkturDesa::find($id);
        $old_image = $image->image;
        unlink($old_image);

        // Menghapus datanya pada table brands
        StrukturDesa::find($id)->delete();

        return redirect()
            ->back()
            ->with('success', 'Struktur Deleted Successfully');
    }


}
