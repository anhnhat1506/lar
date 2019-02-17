@extends('layouts.main')
@section('content')
    <h1>Them Moi Chuyen Bay</h1>
    <form action="{{ url("chuyenbay/insert") }}" method="post">
        @csrf
        <div class="form-group">
            <label for="ten_chuyen_bay">Ten Chuyen Bay(*)</label>
            <input type="text" name="ten_chuyen_bay" id="ten_chuyen_bay" class="form-control" value="{{ old("ten_chuyen_bay") }}"/>
        </div>
        <div class="form-group">
            <label for="gia_chuyen">Gia Chuyen Bay(*)</label>
            <input type="number" name="gia_chuyen" id="gia_chuyen" class="form-control" value="{{ old("gia_chuyen") }}"/>
        </div>
        <div class="form-group">
            <label for="chat_luong">Chat Luong(*)</label>
            <input type="text" name="chat_luong" id="chat_luong" class="form-control" value="{{ old("chat_luong") }}">
        </div>
        <button type="submit" class="btn btn-primary">Them chuyen bay</button>
    </form>
@endsection