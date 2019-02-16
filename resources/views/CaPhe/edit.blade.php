@extends('layouts.main')
@section('content')
    <h1>Chinh sua ca phe: {{ $ca_phe->ten_ca_phe }}</h1>
    <form action="{{ url("caphe/update") }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $ca_phe->id }}">
        <div class="form-group">
            <label for="ten_ca_phe">Ten Ca Phe (*)</label>
            <input type="text" name="ten_ca_phe" id="ten_ca_phe" class="form-control" value="{{ $ca_phe->ten_ca_phe }}">
        </div>
        <div class="form-group">
            <label for="gia_ban">Gia ban  (*)</label>
            <input type="number" name="gia_ban" id="gia_ban" class="form-control" value="{{$ca_phe->gia_ban }}">
        </div>
        <div class="form-group">
            <label for="mo_ta">Mo ta  (*)</label>
            <textarea name="mo_ta" id="mo_ta" cols="30" rows="10" class="form-control">{{ $ca_phe->mo_ta }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">update ca phe</button>            
    </form>
@endsection