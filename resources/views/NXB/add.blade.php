@extends('layouts.main')
@section('content')
    <form action="{{ url("nxb/insert") }}" method="post">
        <div class="form-group">
            @csrf
            <label for="name">Ten Nha xuat ban</label>
            <input type="text" name="name" id="name" class="form-control"/>
        </div>
        <button type="submit" class="btn btn-danger">Them NXB moi</button>
    </form>
@endsection