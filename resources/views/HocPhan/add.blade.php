@extends('layouts.main')
@section('content')
    <h1>Thêm Học Phần</h1>
    <form action="{{ url("hocphan/add") }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Tên học phần</label>
            <input type="text" name="name" value="" class="form-control"/>
        </div>        
        <button type="submit" class="btn btn-primary">Them Học Phần</button>       
    </form>
@endsection