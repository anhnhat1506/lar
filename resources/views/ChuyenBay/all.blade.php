@extends('layouts.main')
@section('content')
    <h1 style="text-align:center">Danh Sách Chuyến Bay</h1>
    <a href="{{ url("chuyenbay/add") }}" class="btn btn-info">Thêm Mới Chuyến Bay</a>
    <table class="table table-bordered" style="text-align:center">
        <thead>
            <tr>
                <th style="text-align:center;color:violet">Tên Chuyến Bay</th>
                <th style="text-align:center;color:red">Giá Chuyến</th>
                <th style="text-align:center;color:blue">Chất lượng bay</th>
                <th style="text-align:center;color:orange">Xóa/Sửa Chuyến Bay</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ds_chuyen_bay as $key=>$item)
            <tr>
                <td>{{ $item->ten_chuyen_bay }}</td>
                <td>{{ $item->gia_chuyen }}</td>
                <td>{{ $item->chat_luong }}</td>
                <td>
                    <a href="{{ url("chuyenbay/edit/".$item->id) }}" class="btn btn-success">Sửa Chuyến Bay</a>
                    <form action="{{ url("chuyenbay/delete") }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}"/>
                        <button type="submit" class="btn btn-danger">Xóa Chuyến Bay</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection