@extends('admin.layout')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Gallery</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('galleris.create') }}"> Create</a>
            </div>
        </div>
    </div>
    <br>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <script type="module">
        import {
            DataTable
        } from "{{asset('asset/js/datatable.js')}}"
        const table = new DataTable("table")
    </script>
    <table class="table table-bordered table-striped" id="about">
        <thead>
            <tr>
                <th>No.</th>
                <th>Image</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Content</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gallery as $glry)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ asset('storage/' . $glry->image ) }}" alt="No Image" class="img-fluid mt-3"></td>
                <td>{{ $glry->judul }}</td>
                <td>{{ $glry->kategori }}</td>
                <td><?= $glry->content ?></td>
                <td>

                    <form action="{{ route('galleris.destroy',$glry->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('galleris.edit',$glry->id) }}">
                            <i class="fas fa-fw fa-pen"></i>
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-fw fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection