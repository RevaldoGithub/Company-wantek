@extends('admin.layout')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.about') }}" class="btn btn-primary">
                    <i class="fas fa-fw fa-arrow-left"></i>
                </a>
            </div>
        </div>
    </div>
    <br>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Maaf Ygy ada masalah saat di input!!</strong>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('about.update', $abouts->id) }}" method="POST" enctype="multipart/form-data" class="container" id="about">

        @csrf

        @method('PATCH')

        <!-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image :</strong>
                    <input type="text" name="image" class="form-control" placeholder="Image" value="{{ $abouts->image }}">
                </div>
            </div>
        </div> -->
        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            @if($abouts->image)
            <img src="{{ asset('storage/' . $abouts->image ) }}" alt="No Image" class="img-fluid mt-3 d-block" style="width: 300px; padding-bottom: 10px; border-radius: 5px;">
            @else
            @endif
            <input class="form-control" type="file" id="image" name="image" value="{{ $abouts->image }}">
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul :</strong>
                    <input type="text" name="judul" class="form-control" placeholder="Judul" value="{{ $abouts->judul }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Years :</strong>
                    <input type="text" name="tahun" class="form-control" placeholder="tahun" value="{{ $abouts->tahun }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Content :</strong>
                    <input id="cntc" type="hidden" name="content" value="{{ $abouts->content }}">
                    <trix-editor input="cntc"></trix-editor>
                </div>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('Yakin di Edit?')">Submit</button>
        </div>
    </form>
</section>

@endsection