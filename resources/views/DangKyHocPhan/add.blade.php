@extends('layouts.main')
@section('content')
    <h1>Đăng ký học phần</h1>
    <form action="{{ url("dangkyhocphan/insert") }}" method="post">
        @csrf
        <div class="form-group">
            
            <label for="sinh_vien_id">Tên sinh viên</label>           
            <select name="sinh_vien_id" id="sinh_vien_id" class="form-control">
                    @foreach ($sinh_vien as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach               
            </select>
        </div>
        <div class="form-group">
            <label for="name" class="form-check-inline">Tên học phần</label>
            @foreach ($hoc_phan as $item)
            <br/>
            
            <input type="checkbox" name="hoc_phan_id[]" id="name" class="form-check-input" value="{{ $item->id }}">{{ $item->name }}
            @endforeach          
        </div>
        <button type="submit" class="btn btn-info">Đăng ký</button>
    </form>
@endsection