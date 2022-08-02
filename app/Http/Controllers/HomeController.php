<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\About;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Models\Visitor;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        $about = About::all();
        $service = Service::limit(6)->get();
        $gallery = Gallery::latest()->limit(4)->get();
        $testimonial = Testimonial::all();
        $blog = Blog::latest()->limit(3)->get();
        $contact = Contact::all();

        $ip_now = $_SERVER['REMOTE_ADDR'];

        $validated = [
            'ip_address' => $ip_now,
            'visit_date' => date('Y-m-d'),
        ];

        Visitor::create($validated);

        return view('homepage.home.index', compact('slider', 'about', 'service', 'gallery', 'testimonial', 'blog', 'contact'));
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
