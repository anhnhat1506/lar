@extends('layouts.main')
@section('content')
    <h1>Danh sach hoc sinh<h1>
    <a href="{{ url("hocsinh/add") }}">Them hoc sinh</a>
    <br/>
    <a href="{{ route("form_them_hoc_sinh") }}">Them hoc sinh</a>
@endsection