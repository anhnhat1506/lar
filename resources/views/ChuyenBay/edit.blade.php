@extends('layouts.main')
@section('content')
    <h1>Chỉnh Sửa Chuyến Bay: {{ $chuyen_bay->ten_chuyen_bay }}</h1>
    <form action="{{ url("chuyenbay/update") }}" method="post">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id" value="{{ $chuyen_bay->id }}">
            <label for="ten_chuyen_bay">Tên Chuyến Bay(*)</label>
            <input type="text" name="ten_chuyen_bay" id="ten_chuyen_bay" class="form-control" value="{{ $chuyen_bay->ten_chuyen_bay }}"/>
        </div>
        <div class="form-group">
            <label for="gia_chuyen">Giá Chuyến Bay(*)</label>
            <input type="number" name="gia_chuyen" id="gia_chuyen" class="form-control" value="{{ $chuyen_bay->gia_chuyen }}"/>
        </div>
        <div class="form-group">
            <label for="chat_luong">Chất Lượng Bay(*)</label>
            <input type="text" name="chat_luong" id="chat_luong" class="form-control" value="{{ $chuyen_bay->chat_luong }}"/>
        </div>
    <button type="submit" class="btn btn-warning">Sửa Chuyến Bay</button>
    </form>
@endsection