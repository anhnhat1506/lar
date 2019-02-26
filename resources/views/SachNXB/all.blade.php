@extends('layouts.main')
@section('content')
    <h1>DS Sach_nxb</h1>
    <a href="{{ url("sach_nxb/add") }}" class="btn btn-info">Them Moi Sach NXB</a>
    <a href="{{ url("sach/add") }}" class="btn btn-info">Them Sach</a>
    <a href="{{ url("nxb/add") }}" class="btn btn-info">Them NXB</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="success">Ten Sach</th>
                <th class="danger">Ten NXB xuat ban</th>
                <th class="info">Tuy chinh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sach as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>
                    <ol>
                        @foreach ($item->nxbs as $nxb)
                            <li class="success">{{ $nxb->name }}</li>
                        @endforeach
                    </ol>
                </td>
                <td>
                    <a href="{{ url("sach_nxb/edit/".$item->id) }}" class="btn btn-success">Edit</a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection