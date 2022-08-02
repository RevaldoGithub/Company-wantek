<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\KategoriGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();

        return view('admin.galleris.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallery = Gallery::all();
        $kategorigallery = KategoriGallery::all();
        return view('admin.galleris.create', compact('gallery', 'kategorigallery'));
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
            'image' => 'image|file|required',
            'judul' => 'required',
            'content' => 'required',
            'kategori' => 'required',
        ]);

        $image = $request->file('image')->store('post-image/gallery');

        $validated['image'] = $image;

        Gallery::create($validated);
        return redirect()->route('galleris.index')->with('success', 'Asik berhasil nih');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $kategorigallery = KategoriGallery::all();
        return view('admin.galleris.edit', compact('gallery', 'kategorigallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $rules = [
            'image' => 'image|file',
            'judul' => 'required',
            'content' => 'required',
            'kategori' => 'required'
        ];

        $validated = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('post-image/gallery');
        };

        $gallery->update($validated);

        return redirect()->route('galleris.index')
            ->with('success', 'Update Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            Storage::delete($gallery->image);
        }
        $gallery->delete($gallery->id);
        return redirect()->route('galleris.index')->with('success', 'Data Berhasil dihapus YGY:)');
    }
}
