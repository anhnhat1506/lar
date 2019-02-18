@extends('layouts.main')
@section('content')
    <h1>Danh sach ban gai</h1>
    <a href="{{ url("bangai/add")}}" class="btn btn-warning">Them moi ban gai cu</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Ten ban gai</th>
                <th>Chi phi cua</th>
                <th>Cam giac</th>
                <th>Chinh sua</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ds_ban_gai as $key=>$item)
                <tr>
                    <td>{{ $item->ten_ban_gai }}</td>
                    <td>{{ $item->chi_phi_cua }}</td>
                    <td>{{ $item->cam_giac }}</td>
                    <td>
                        <a href="{{ url("bangai/edit/".$item->id) }}" class="btn btn-info">Sua thong tin</a>
                        <form action="{{ url("bangai/delete") }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}"/>
                            <button type="submit" class="btn btn-danger">Xoa</button>
                        </form>
                    </td>
                </tr>    
            @endforeach
        </tbody>
    </table>
@endsection