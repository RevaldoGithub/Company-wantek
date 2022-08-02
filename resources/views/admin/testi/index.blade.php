@extends('admin.layout')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Testimonial</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('testi.create') }}"> Create</a>
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
                <th>Name</th>
                <th>Agency</th>
                <th>Image</th>
                <th>Testi</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonial as $test)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $test->name }}</td>
                <td>{{ $test->agency }}</td>
                <td><img src="{{ asset('storage/' . $test->image ) }}" alt="No Image" class="img-fluid mt-3"></td>
                <td><?= substr($test->testimonial, 0, 100) ?></td>
                <td>

                    <form action="{{ route('testi.destroy',$test->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('testi.edit',$test->id) }}">
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