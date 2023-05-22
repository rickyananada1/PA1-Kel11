<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Komentar;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(){
        $forums = Forum::orderBy('created_at','desc')->paginate(10);
        return view('users.forum.index',compact('forums'));
    }

    public function create(Request $request){
        $request->request->add(['user_id'=> auth()->user()->id]); 
        $forums = Forum::create($request->all());
        return redirect()->back()->with('sukses', 'Forum berhasil ditambahkan');
    }
    
    public function view(Forum $forum){
        return view('users.forum.view',compact('forum'));
    }

    public function postkomentar(Request $request){
        $request->request->add(['user_id' => auth()->user()->id]);
        $komentar = Komentar::create($request->all());
        return redirect()->back()->with('success','Komentar berhasil ditambahkan');
    }


    public function destroy($id)
    {
        $komentar = Komentar::find($id);

        // Memeriksa apakah komentar ditemukan
        if (!$komentar) {
            return redirect()->back()->with('error', 'Komentar tidak ditemukan.');
        }

        // Memeriksa apakah pengguna yang sedang login adalah pemilik komentar
        if ($komentar->user_id !== auth()->user()->id) {
            return redirect()->back()->with('error', 'Anda tidak diizinkan menghapus komentar ini.');
        }

        // Hapus komentar
        $komentar->delete();

        return redirect()->back()->with('success', 'Komentar berhasil dihapus.');
    }


    public function edit($id)
    {
        $komentar = Komentar::find($id);

        // Memeriksa apakah komentar ditemukan
        if (!$komentar) {
            return redirect()->back()->with('error', 'Komentar tidak ditemukan.');
        }

        // Memeriksa apakah pengguna yang sedang login adalah pemilik komentar
        if ($komentar->user_id !== auth()->user()->id) {
            return redirect()->back()->with('error', 'Anda tidak diizinkan mengedit komentar ini.');
        }

        return view('users.forum.view', compact('komentar'));
    }

    public function update(Request $request, $id)
    {
        $komentar = Komentar::find($id);

        // Memeriksa apakah komentar ditemukan
        if (!$komentar) {
            return redirect()->back()->with('error', 'Komentar tidak ditemukan.');
        }

        // Memeriksa apakah pengguna yang sedang login adalah pemilik komentar
        if ($komentar->user_id !== auth()->user()->id) {
            return redirect()->back()->with('error', 'Anda tidak diizinkan mengedit komentar ini.');
        }

        // Validasi data yang diterima dari form
        $request->validate([
            'konten' => 'required|string|max:1000',
        ]);

        // Update komentar
        $komentar->konten = $request->konten;
        $komentar->save();

        return redirect()->back()->with('success', 'Komentar berhasil diperbarui.');
    }
    


    public function updateKomentar(Request $request, $id)
    {
        $komentar = Komentar::find($id);

        if ($komentar->user_id === auth()->user()->id) {
            $komentar->konten = $request->input('konten');
            $komentar->save();
        }

        return redirect()->back();
    }


    
    public function editUtama(Forum $forum)
    {
        return view('users.forum.index', compact('forum'));
    }

    public function updateUtama(Request $request, Forum $forum)
    {
        $forum->update($request->all());

        return redirect()->back()->with('success', 'Komentar berhasil diperbarui.');
    }

    public function HapusUtama(Forum $forum)
    {
        $forum->delete();

        return redirect()->back()->with('success', 'Komentar berhasil diperbarui.');
    }


    public function editFORUM(Forum $forum)
    {
        $forum = $forum->find($forum->id);
    
        // Memeriksa apakah forum ditemukan
        if (!$forum) {
            return redirect()->back()->with('error', 'Forum tidak ditemukan.');
        }
    
        // Memeriksa apakah pengguna yang sedang login adalah pemilik forum
        if ($forum->user_id !== auth()->user()->id) {
            return redirect()->back()->with('error', 'Anda tidak diizinkan mengedit forum ini.');
        }
    
        return view('users.forum.view', compact('forum'));
    }
        

    public function updateFORUM(Request $request, Forum $forum)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);

        $forum->update([
            'judul' => $request->judul,
            'konten' => $request->konten,
        ]);

        return redirect()->back()->with('success', 'Forum berhasil diperbarui.');

    }


}

