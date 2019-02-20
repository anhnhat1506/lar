@extends('layouts.main')
@section('content')
    <h1>Thêm Mới</h1>
    <form action="{{ url("book/insert") }}" method="POST">
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>  
                @endforeach
            </ul>   
        @endif
        @csrf
        <div class="form-group">
            <label for="ten_sach">Tên Sách(*)</label>
            <input type="text" name="ten_sach" id="ten_sach" class="form-control" value="{{ old("ten_sach") }}">
        </div>
        <div class="form-group">
            <label for="gia_ban">Giá Bán(*)</label>
            <input type="number" name="gia_ban" id="gia_ban" class="form-control" value="{{ old("gia_ban") }}">
        </div>
        <div class="form-group">
            <label for="mo_ta">Mô Tả(*)</label>
            <textarea name="mo_ta" id="mo_ta" cols="30" rows="10" class="form-control">{{ old("mo_ta") }}</textarea>
        </div>
        <button type="submit" class="btn btn-danger">Thêm Sách Mới</button>
    </form>
@endsection