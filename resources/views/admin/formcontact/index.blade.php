@extends('admin.layout')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Contact Us</h2>
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
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formcontact as $fc)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $fc->name }}</td>
                <td>{{ $fc->email }}</td>
                <td>{{ $fc->subject }}</td>
                <td>{{ $fc->message }}</td>
                <td>

                    <form action="{{ route('formcontact.destroy',$fc->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('formcontact.edit',$fc->id) }}">
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