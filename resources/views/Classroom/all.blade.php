@extends('layouts.main')
@section('content')
    <h1>Thong tin cac lop hoc</h1>
    <a href="{{ url("classroom/add") }}" class="btn btn-primary">Them class</a>
    <a href="{{ url("classroom/add_student") }}" class="btn btn-success">Them Hoc sinh</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tên lớp</th>                           
                <th>Tên học sinh</th>                           
                                        
            </tr>
        </thead>
        <tbody>               
            @foreach ($data as $lop)
                <tr>
                    <td>{{ $lop->ten_lop }}</td> 
                    <td>
                        @foreach ($lop->students as $sv)
                            <p>{{ $sv->ten_sv }}</p>
                            <a href="{{ url("classroom/edit/".$sv->id) }}" class="btn btn-danger">Sửa</a>
                        @endforeach
                    </td>
                    
                </tr>
            @endforeach
            
        </tbody>
    </table>
    
        
    
@endsection