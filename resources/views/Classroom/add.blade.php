@extends('layouts.main')
@section('content')
<h1>Them lop</h1>
    <form action="{{ url("classroom/insert_class") }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="ten_lop">Ten lop</label>
            <input type="text" name="ten_lop" id="ten_lop" class="form-control" value="{{ old("ten_lop") }}"/>
        </div>
        <div class="form-group">
            <label for="noi_dung_lop">Noi dung lop</label>
            <input type="text" name="noi_dung_lop" id="noi_dung_lop" class="form-control" value="{{ old("noi_dung_lop") }}"/>
        </div>
        <button type="submit" class="btn btn-primary">Them lop</button>
    </form>
@endsection