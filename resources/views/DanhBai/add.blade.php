@extends('layouts.main')
@section('content')
    <h1>Them Nguoi Choi thang moi</h1>
    <form action="{{ url("danhbai/insert") }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="ten_nguoi_thang">Ten nguoi thang(*)</label>
            <input type="text" name="ten_nguoi_thang" id="ten_nguoi_thang" class="form-control" value="{{ old("ten_nguoi_thang") }}"/>
        </div>
        <div class="form-group">
            <label for="tien_thang">Tien thang(*)</label>
            <input type="number" name="tien_thang" id="tien_thang" class="form-control" value="{{ old("tien_thang") }}"/>
        </div>
        <div class="form-group">
            <label for="mo_ta">Mo ta(*)</label>
            <textarea name="mo_ta" id="mo_ta" cols="30" rows="10" class="form-control">{{ old("mo_ta") }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Them nguoi choi thang</button>
    </form>
@endsection