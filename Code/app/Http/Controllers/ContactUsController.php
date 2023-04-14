<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ContactUsController extends Controller
{
    public function contactus()
    {
        return view('contact_us');
    }

    public function submitContactUsForm(Request $request)
    {
        // Validasi data yang diterima dari formulir kontak
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Kirim email ke pemilik situs web atau staf yang bertanggung jawab
        Mail::to('youremail@example.com')->send(new ContactUsMail($validatedData));

        return redirect()->back()->with('success', 'Terima kasih telah menghubungi kami!');
    }
}
