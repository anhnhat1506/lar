@extends('layouts.main')
@section('content')
    <h1>Danh Sách Sách, Truyện</h1>
    <a href="{{ url("book/add") }}" class="btn btn-success">Thêm Sản Phẩm Mới</a>
    <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên Sách Truyện</th>
                    <th>Giá Bán</th>
                    <th>Mô Tả</th>
                    <th>Xóa/Sửa</th>
                </tr>
            </thead>
        
        <tbody>
            @foreach ($ds_book as $key=>$item)
                <tr>
                    <td>{{ $item->ten_sach }}</td>
                    <td>{{ $item->gia_ban }}</td>
                    <td>{{ $item->mo_ta }}</td>
                    <td>
                        <!--Sửa Sản Phẩm-->
                        <a href="{{ url("book/edit/".$item->id) }}" class="btn btn-info">Sửa Sản Phẩm</a>
                        <!--Xóa Sản Phẩm-->
                        <form action="{{ url("book/delete") }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}"/>
                            <button type="submit" class="btn btn-primary">Xóa Sản Phẩm</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
</table>
@endsection