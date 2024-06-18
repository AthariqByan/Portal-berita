<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Kategori;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::with('kategori')->get(); // Eager load kategori
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all(); // Mengambil semua data kategori
        return view('news.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'isi' => 'required',
            'id_kategori' => 'required|integer',
        ]);

        $imageName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);

        $news = new News();
        $news->name = $validatedData['name'];
        $news->gambar = $imageName;
        $news->isi = $validatedData['isi'];
        $news->id_kategori = $validatedData['id_kategori'];

        if ($news->save()) {
            return redirect()->route('admin.news.index')->with('success', 'Berita berhasil ditambahkan');
        } else {
            return redirect()->route('admin.news.create')
                ->withInput()
                ->with('failed', 'Berita gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $kategoris = Kategori::all(); // Mengambil semua data kategori untuk dropdown
        return view('news.edit', compact('news', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'isi' => 'required',
            'id_kategori' => 'required|integer',
        ]);

        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $news->gambar = $imageName;
        }

        $news->name = $validatedData['name'];
        $news->isi = $validatedData['isi'];
        $news->id_kategori = $validatedData['id_kategori'];
        if ($news->save()) {
            return redirect()->route('admin.news.index')->with('success', 'Berita berhasil diedit');
        } else {
            return redirect()->route('admin.news.create')
                ->withInput()
                ->with('failed', 'Berita gagal diedit');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Data berhasil dihapus');
    }
}
