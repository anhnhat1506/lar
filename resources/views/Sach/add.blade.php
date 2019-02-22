@extends('layouts.main')
@section('content')
<h1>Thêm Sach moi</h1>
<form action="{{ url("sach/insert") }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Tên sach</label>
        <input type="text" name="name" value="" class="form-control"/>
    </div>        
    <button type="submit" class="btn btn-primary">Them Sach</button>
    
</form>
@endsection