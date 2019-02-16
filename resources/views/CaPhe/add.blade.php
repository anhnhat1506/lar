@extends('layouts.main')
@section('content')
    <h1>Them ca phe</h1>
    <form action="{{ url("caphe/insert") }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="ten_ca_phe">Ten Ca Phe (*)</label>
            <input type="text" name="ten_ca_phe" id="ten_ca_phe" class="form-control" value="{{ old("ten_ca_phe") }}">
        </div>
        <div class="form-group">
            <label for="gia_ban">Gia ban  (*)</label>
            <input type="number" name="gia_ban" id="gia_ban" class="form-control" value="{{ old("gia_ban") }}">
        </div>
        <div class="form-group">
            <label for="mo_ta">Mo ta  (*)</label>
            <textarea name="mo_ta" id="mo_ta" cols="30" rows="10" class="form-control">{{ old("mo_ta") }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Them moi ca phe</button>            
    </form>
@endsection