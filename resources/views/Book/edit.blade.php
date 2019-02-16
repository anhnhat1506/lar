@extends('layouts.main')
@section('content')
    <h1>Chỉnh sửa sản phẩm: {{ $book->ten_sach }}</h1>
    <form action="{{ url("book/update") }}" method="post">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id" value="{{ $book->id }}">
                <label for="ten_sach">Tên Sách(*)</label>
                <input type="text" name="ten_sach" id="ten_sach" class="form-control" value="{{ $book->ten_sach }}">
            </div>
            <div class="form-group">
                <label for="gia_ban">Giá Bán(*)</label>
                <input type="number" name="gia_ban" id="gia_ban" class="form-control" value="{{$book->gia_ban}}">
            </div>
            <div class="form-group">
                <label for="mo_ta">Mô Tả(*)</label>
                <textarea name="mo_ta" id="mo_ta" cols="30" rows="10" class="form-control">{{ $book->mo_ta }}</textarea>
            </div>
            <button type="submit" class="btn btn-warning">Chỉnh Sửa Sách Mới</button>
    </form>
@endsection