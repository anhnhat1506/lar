@extends('layouts.main')
@section('content')
    <h1>Form them hoc sinh</h1>
    <form action="{{ url("hocsinh/add") }}" method="POST">
        @csrf
        <input  type="text" name="ten_hoc_sinh" value=""/>
        <button type="submit">Them hoc sinh</button>
    </form>
@endsection