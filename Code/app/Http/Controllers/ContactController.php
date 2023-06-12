<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function AdminContact(){
        $contacts = Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }

    public function AdminAddContact(){
        return view('admin.contact.create');
    }

    public function AdminStoreContact(Request $request){
        Contact::insert([
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('admin.contact')->with('success','Insert Contact Berhasil Dilakukan');

    }

    public function Contact(){
        $contacts = DB::table('contacts')->first();
        return view('users.kontak.contact',compact('contacts'));
    }

    public function ContactForm(Request $request){
        ContactForm::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('contact')->with('success','Pesan Kamu Sudah Terkirim');
    }

    public function AdminMessage(){
        $messages = ContactForm::all();
        return view('admin.contact.message',compact('messages'));
    }

    public function deleteMessage($id)
    {
        // Kode logika untuk menghapus data berdasarkan ID
        
        // Contoh: Menghapus data berdasarkan ID
        $message = ContactForm::find($id);
        if ($message) {
            $message->delete();
            // Tambahkan logika lainnya jika diperlukan
        }
        
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function editContact($id)
    {
        $contact = Contact::find($id);
        if ($contact) {
            return view('admin.contact.edit_contact', compact('contact'));
        } else {
        }
    }
    
    public function deleteContact($id)
    {
        $contact = Contact::find($id);
        if ($contact) {
            $contact->delete();
        }
        
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function updateContact(Request $request, $id)
    {
        // Kode logika untuk update data berdasarkan ID
        
        // Validasi input form
        $request->validate([
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'created_at' => Carbon::now()

        ]);
        
        // Cari data Contact berdasarkan ID
        $contact = Contact::find($id);
        if ($contact) {
            // Update data dengan nilai yang baru
            $contact->address = $request->address;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            // Tambahkan logika lainnya jika diperlukan
            $contact->save();
            
            return redirect()
            ->route('admin.contact')
            ->with('success', 'Update Struktur successfully');
        } else {
            // Tambahkan logika lainnya jika data tidak ditemukan
        }
    }
    

}
 