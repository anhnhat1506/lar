@extends('layouts.main')
@section('content')
    <form action="{{ url("sach_nxb/update") }}" method="post">
        @csrf
        <div class="form-group">
            <input type="hidden" name="sach_id" value="{{ $sach->id }}">
            <label for="name">Ten NXB</label>
            <ul>
                @foreach ($nxb as $item)
                    @if (in_array($item->id,$all_nxb_id_of_sach))
                        <li>
                            <input type="checkbox" checked name="nxb_id[]" id="name" class="form-check-input" value="{{ $item->id }}">{{ $item->name }}
                        </li>
                    @else
                        <li>
                            <input type="checkbox" name="nxb_id[]" id="name" class="form-check-input" value="{{ $item->id }}">{{ $item->name }}
                        </li>
                    @endif                   
                @endforeach
            </ul>
        </div>   
        <button type="submit" class="btn btn-primary">Them DS Nxb</button>
    </form>
@endsection