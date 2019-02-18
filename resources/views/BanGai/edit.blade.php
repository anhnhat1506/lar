@extends('layouts.main')
@section('content')
    <h1>Chinh sua thong tin ban gai:</h1>
    <form action="{{ url("bangai/update")}}" method="post">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id" value="{{ $ban_gai->id }}">
            <label for="ten_ban_gai">Ten ban gai</label>
            <input type="text" name="ten_ban_gai" id="ten_ban_gai" value="{{ $ban_gai->ten_ban_gai }}" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="chi_phi_cua">Chi phi cua</label>
            <input type="number" name="chi_phi_cua" id="chi_phi_cua" value="{{ $ban_gai->chi_phi_cua }}" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="cam_giac">Cam giac</label>
            <textarea name="cam_giac" id="cam_giac" cols="30" rows="10" class="form-control">{{ $ban_gai->cam_giac }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Chinh sua thong tin</button>
    </form>
@endsection