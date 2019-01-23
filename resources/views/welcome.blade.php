@extends("layouts.main")
@section("content")
        @foreach ($foods as $key => $value)
            <li>{{ $value }}</li>
        @endforeach
@endsection