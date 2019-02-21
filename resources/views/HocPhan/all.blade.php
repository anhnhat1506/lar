@extends('layouts.main')
@section('content')
    <h1>ds hoc phan</h1>
    @foreach ($hoc_phan as $item)
        <p>{{ $item->name }}</p>
    @endforeach
    
@endsection