<?php

namespace App\Http\Controllers;

use App\Models\KategoriGallery;
use Illuminate\Http\Request;

class KategorigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategorigallery = KategoriGallery::all();
        return view('admin.kategorigallery.index', compact('kategorigallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategorigallery = KategoriGallery::all();
        return view('admin.kategorigallery.create', compact('kategorigallery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required'
        ]);

        KategoriGallery::create($validated);
        return redirect()->route('kategorigallery.index')->with('success', 'kategori berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriGallery  $kategoriGallery
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriGallery $kategoriGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriGallery  $kategoriGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriGallery $kategorigallery)
    {
        return view('admin.kategorigallery.edit', compact('kategorigallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriGallery  $kategoriGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriGallery $kategorigallery)
    {
        $rules = [
            'category' => 'required'
        ];

        $validated = $request->validate($rules);

        $kategorigallery->update($validated);
        return redirect()->route('kategorigallery.index')->with('success', 'Kategori berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriGallery  $kategoriGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriGallery $kategorigallery)
    {
        $kategorigallery->delete();
        return redirect()->route('kategorigallery.index')->with('success', 'Kategori berhasil di hapus');
    }
}
