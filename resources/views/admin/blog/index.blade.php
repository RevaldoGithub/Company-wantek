@extends('admin.layout')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Blog & News</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blog.create') }}"> Create</a>
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
            @foreach ($blog as $bg)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ asset('storage/' . $bg->image ) }}" alt="No Image" class="img-fluid mt-3" style="width: 300px; border-radius: 5px;"></td>
                <td>{{ $bg->judul }}</td>
                <td>{{ $bg->kategori }}</td>
                <td><?= substr($bg->content, 0, 100) ?></td>
                <td>

                    <form action="{{ route('blog.destroy',$bg->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('blog.edit', $bg->id) }}">
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