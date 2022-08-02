<?php

namespace App\Http\Controllers;

use App\Models\KategoriBlog;
use Illuminate\Http\Request;

class KategoriBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriblog = KategoriBlog::all();
        return view('admin.kategoriblog.index', compact('kategoriblog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriblog = KategoriBlog::all();
        return view('admin.kategoriblog.create', compact('kategoriblog'));
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
            'kategori' => 'required'
        ]);

        KategoriBlog::create($validated);
        return redirect()->route('kategoriblog.index')->with('success', 'Kategori berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriBlog  $kategoriBlog
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriBlog $kategoriblog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriBlog  $kategoriBlog
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriBlog $kategoriblog)
    {
        return view('admin.kategoriblog.edit', compact('kategoriblog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriBlog  $kategoriBlog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriBlog $kategoriblog)
    {
        $rules = [
            'kategori' => 'required'
        ];

        $validated = $request->validate($rules);

        $kategoriblog->update($validated);
        return redirect()->route('kategoriblog.index')->with('success', 'kategori berhasil dii ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriBlog  $kategoriBlog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $kategoriblog;
        $kategoriblog = KategoriBlog::find($id);
        $kategoriblog->delete();
        return redirect()->route('kategoriblog.index')->with('success', 'Kategori berhasil dihapus');
    }
}
