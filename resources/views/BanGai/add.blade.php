@extends('layouts.main')
@section('content')
    <h1>Them Moi Ban Gai cu</h1>
    <form action="{{ url("bangai/insert") }}" method="POST">
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $messages)
                    <li>{{ $messages }}</li>
                @endforeach
            </ul>
        @endif
        @csrf
        <div class="form-group">
            <label for="ten_ban_gai">Ten ban gai(*)</label>
            <input type="text" name="ten_ban_gai" id="ten_ban_gai" class="form-control" value="{{ old("ten_ban_gai") }}">
        </div>
        <div class="form-group">
            <label for="chi_phi_cua">Chi phi cua(*)</label>
            <input type="number" name="chi_phi_cua" id="chi_phi_cua" class="form-control" value="{{ old("chi_phi_cua") }}">
        </div>
        <div class="form-group">
            <label for="cam_giac">Ten ban gai(*)</label>
            <textarea name="cam_giac" id="cam_giac" cols="30" rows="10" class="form-control">{{ old("cam_giac") }}</textarea>
        </div>
        <button type="submit" class="btn btn-info">Them thong tin ban gai cu</button>
    </form>
@endsection