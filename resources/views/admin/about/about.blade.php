@extends('admin.layout')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>About</h2>
            </div>
        </div>
    </div>

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
                <th>years</th>
                <th>Content</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($about as $About)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ asset('storage/' . $About->image ) }}" alt="No Image" class="img-fluid mt-3" style="width: 150px;"></td>
                <td>{{ $About->judul }}</td>
                <td>{{ $About->tahun }}</td>
                <td><?= substr($About->content, 0, 150) ?></td>
                <td>

                    <a class="btn btn-primary" href="{{ route('about.edit',$About->id) }}">
                        <i class="fas fa-fw fa-pen"></i>
                    </a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection