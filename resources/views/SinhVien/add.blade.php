@extends('layouts.main')
@section('content')
    <h1>Thêm Sinh Viên</h1>
    <form action="{{ url("sinhvien/add") }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Tên sinh viên</label>
            <input type="text" name="name" value="" class="form-control"/>
        </div>        
        <button type="submit" class="btn btn-primary">Them Sinh Vien</button>
        
    </form>
@endsection