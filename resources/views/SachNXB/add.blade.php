@extends('layouts.main')
@section('content')
    <form action="{{ url("sach_nxb/insert") }}" method="post">
        @csrf
        <div class="form-group">
            <label for="sach_id">Ten Sach</label>
            <select name="sach_id" id="sach_id" class="form-control">
                @foreach ($sach as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach             
            </select>
        </div>
        <div class="form-group">
            <label for="name">Ten NXB</label>
            <ul>
                @foreach ($nxb as $item)
                    <li>
                        <input type="checkbox" name="nxb_id[]" id="name" class="form-check-input" value="{{ $item->id }}">{{ $item->name }}
                    </li>
                @endforeach
            </ul>
        </div>   
        <button type="submit" class="btn btn-primary">Them DS Nxb</button>
    </form>
@endsection