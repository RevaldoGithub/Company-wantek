@extends('homepage.layouts')
@section('blog')
active
@endsection
@section('content')

{!! $blog->content !!}

@endsection