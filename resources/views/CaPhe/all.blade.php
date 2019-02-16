@extends('layouts.main')
@section('content')
    <h1>Danh sach ca phe</h1>
    <a class="btn btn-primary" href="{{ url("caphe/add") }}">Them ca phe</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Ten ca phe</th>
                <th>Gia Ban</th>
                <th>Mo ta</th>
                <th>...</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($ds_caphe as $key=>$item)
                    <tr>
                        <td>{{ $item->ten_ca_phe }}</td>
                        <td>{{ $item->gia_ban }}</td>
                        <td>{{ $item->mo_ta }}</td>
                        <td>
                            <!--edit-->
                            <a href="{{ url("caphe/edit/".$item->id) }}" class="btn btn-default">Edit</a>
                            <!--delete-->
                            <form action="{{ url("caphe/delete") }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}"/>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
@endsection