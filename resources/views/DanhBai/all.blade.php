@extends('layouts.main')
@section('content')
    <h1>Danh Sach nguoi thang</h1>
    <a href="{{ url("danhbai/add") }}" class="btn btn-danger">Them nguoi choi thang moi</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Ten nguoi thang</th>
                <th>Tien thang</th>
                <th>Mo ta</th>
                <th>Thao tac sua xoa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ds_nguoi_choi_thang as $key=>$item)            
            <tr>
                <td>{{ $item->ten_nguoi_thang }}</td>
                <td>{{ $item->tien_thang }}</td>
                <td>{{ $item->mo_ta }}</td>
                <td>
                    <a href="{{ url("danhbai/edit/".$item->id) }}" class="btn btn-info">Chinh sua chi tiet</a>
                    <form action="{{ url("danhbai/delete") }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}"/>
                        <button type="submit" class="btn btn-danger">Xoa nguoi thang</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection