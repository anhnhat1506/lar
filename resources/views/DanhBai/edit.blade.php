@extends('layouts.main')
@section('content')
    <h1>Thong tin ban muon doi:</h1>
    <form action="{{ url("danhbai/update") }}" method="post">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id" value="{{ $nguoi_thang->id }}"/>
            <label for="ten_nguoi_thang">Ten nguoi thang</label>
            <input type="text" name="ten_nguoi_thang" id="ten_nguoi_thang" class="form-control" value="{{ $nguoi_thang->ten_nguoi_thang }}"/>
        </div>
        <div class="form-group">
            <label for="tien_thang">Ten nguoi thang</label>
            <input type="number" name="tien_thang" id="tien_thang" class="form-control" value="{{ $nguoi_thang->tien_thang }}"/>
        </div>
        <div class="form-group">
            <label for="mo_ta">Mo ta</label>
            <textarea name="mo_ta" id="mo_ta" cols="30" rows="10" class="form-control">{{ $nguoi_thang->mo_ta }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Thay doi thong tin</button>
    </form>
@endsection