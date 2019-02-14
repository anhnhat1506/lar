@extends('layouts.main')
@section('content')
    <h1>Form them sinh vien</h1>
    <form action="{{ url("sinhvien/add") }}" method="POST">
        @csrf
        <input type="text" name="ho_ten" value="" />
        <input type="text" name="nam_sinh" value="" />
        <input type="text" name="lop" value="" />
        <button type="submit">Them Sinh Vien</button>
        <h1>{{ Config::get('app.locale') }}</h1>
        <button type="submit">{{ __('auth.failed') }}</button>
    </form>
@endsection