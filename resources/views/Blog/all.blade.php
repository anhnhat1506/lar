@extends('layouts.main')
@section('title', 'Blog All title')
@section('sidebar')
    This is the blog.all sidebar.
@show

@section('content')
    @include('subviews.status')
    <ul>
        @foreach ($blogs as $key => $value)
            <li>{{ $value }}</li>
        @endforeach
    </ul>
    @php
        var_dump($blogs);
        foreach ($blogs as $k=>$v){

        }
    @endphp
    <script>
        var app = @json($blogs);
    </script>
@endsection
