@extends('layouts.main')
@section('content')
    <h1>Đăng ký học phần</h1>
    <form action="{{ url("dangkyhocphan/update") }}" method="post">
        @csrf
        <div class="form-group">
            <input type="hidden" name="sinh_vien_id" value="{{ $sinh_vien->id }}"/>
            <label for="sinh_vien_id">hoc phan</label>           
            <div class="form-group">
                    <label for="name" class="form-check-inline">Tên học phần</label>
                    <ul>
                        @foreach ($hoc_phan as $hp)
                            @if(in_array($hp->id,$all_hoc_phan_id_of_sv))
                                <li><input type="checkbox" checked name="hoc_phan_id[]" id="name" class="form-check-input" value="{{ $hp->id }}">{{ $hp->name }}
                            @else
                                <li><input type="checkbox" name="hoc_phan_id[]" id="name" class="form-check-input" value="{{ $hp->id }}">{{ $hp->name }}
                            @endif
                        @endforeach
                   </ul>          
                </div>
        </div>
        
        <button type="submit" class="btn btn-info">Đăng ký</button>
    </form>
@endsection