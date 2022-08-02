<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Dashboard;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\KategoriBlog;
use App\Models\KategoriGallery;
use App\Models\Visitor;



class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::count();
        $gallery = Gallery::count();
        $testimonial = Testimonial::count();
        $blog = Blog::count();
        $slider = Slider::count();
        $kategori_b = KategoriBlog::count();
        $kategori_g = KategoriGallery::count();

        $visit_t = Visitor::count();
        $visit_d = Visitor::where('visit_date', date('Y-m-d'))->count();

        return view('admin.dashboard', compact('service', 'gallery', 'testimonial', 'blog', 'slider', 'kategori_b', 'kategori_g', 'visit_t', 'visit_d'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
