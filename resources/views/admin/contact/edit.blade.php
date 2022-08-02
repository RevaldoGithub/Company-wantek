@extends('admin.layout')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
            </div>
            <div class="pull-right">
                <a href="\contact" class="btn btn-primary">
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

    <form action="{{ route('contact.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat :</strong>
                    <input type="text" name="alamat" class="form-control" placeholder="alamat" value="{{ $contact->alamat }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Telp :</strong>
                    <input type="text" name="no_telp" class="form-control" placeholder="no_telp" value="{{ $contact->no_telp }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email :</strong>
                    <input type="text" name="email" class="form-control" placeholder="email" value="{{ $contact->email }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Website :</strong>
                    <input type="text" name="website" class="form-control" placeholder="website" value="{{ $contact->website }}">
                </div>
            </div>
        </div>


        <div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('Yakin di Edit?')">Submit</button>
        </div>
    </form>
</section>

@endsection