@extends ('admin.layout')
@section('content')


<div class="content">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Service</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('service.create') }}"> Create</a>
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
    <table class="table table-bordered table-striped" id="table_id">
        <thead>

            <tr>
                <th>No.</th>
                <th>Image</th>
                <th>Judul</th>
                <th>Content</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($service as $srvc)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ asset('storage/' . $srvc->img ) }}" alt="No Image" class="img-fluid" style="width: 250px;"></td>
                <td>{{ $srvc->judul }}</td>
                <td><?= substr($srvc->content, 0, 100) ?></td>
                <td>

                    <form action="{{ route('service.destroy',$srvc->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('service.edit',$srvc->id) }}">
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