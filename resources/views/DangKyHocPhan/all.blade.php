@extends('layouts.main')
@section('content')
    <h1>DS dang ky</h1>
    <a href="{{ url('dangkyhocphan/add') }}" class="btn btn-info">Đăng ký</a>
    <a href="{{ url('sinhvien/add') }}" class="btn btn-info">Thêm Sinh Viên</a>
    <a href="{{ url('hocphan/add') }}" class="btn btn-danger">Thêm học phần</a>
    <table class="table table-bodered">
        <thead>
            <tr>
                <th>Ten sinh vien</th>
                <th>Ten hoc phan</th>
                <th>Tuy chinh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sinh_vien as $item)
                <tr>
                    
                        <td>{{ $item->name }}</td>
                        <td>
                            <ol>
                            @foreach ($item->hoc_phans as $hp)
                                <li>{{ $hp->name }}</li>
                            @endforeach
                            <ol>
                        </td>
                        <td>
                            <a href="{{ url("dangkyhocphan/edit/".$item->id) }}" class="btn btn-info">Edit</a>
                        </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
   
@endsection