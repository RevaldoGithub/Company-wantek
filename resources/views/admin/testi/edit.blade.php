@extends('admin.layout')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
            </div>
            <div class="pull-right">
                <a href="\testi" class="btn btn-primary">
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

    <form action="{{ route('testimonial.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            @if($testimonial->image)
            <img src="{{ asset('storage/' . $testimonial->image ) }}" alt="No Image" class="img-fluid mt-3 d-block" style="width: 300px; padding-bottom: 10px; border-radius: 5px;">
            @else
            @endif
            <input class="form-control" type="file" id="image" name="image" value="{{ $testimonial->image }}">
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul :</strong>
                    <input type="text" name="judul" class="form-control" placeholder="Judul" value="{{ $testimonial->judul }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Content :</strong>
                    <input id="cntc" type="hidden" name="content" value="{{ $testimonial->content }}">
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