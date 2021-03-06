@extends('layouts.main')
@section('content')
<h1>Sửa thông tin sinh vien</h1>
<form action="{{ url("classroom/update_student_proccess") }}" method="post">
    @csrf
    <div class="form-group">
        <input type="hidden" name="id" value="{{ $student->id }}">
        <label for="ten_sv">Tên sinh viên</label>
        <input type="text" name="ten_sv" id="ten_sv" class="form-control" value="{{ $student->ten_sv }}"/>
    </div>
    <div class="form-group">
        <label for="dtb">Điểm trung bình</label>
        <input type="number" name="dtb" id="dtb" class="form-control" value="{{$student->dtb}}"/>
    </div>
    <div class="form-group">
        <label for="class_id">Tên lớp</label>
        <select name="class_id" id="class_id" class="form-control">
                @foreach ($classroom as $item)
                    @if ($item->id == $student->class_id)
                        <option value="{{ $item->id}} selected">{{ $item->ten_lop }}</option>
                    @else 
                        <option value="{{ $item->id }}">{{ $item->ten_lop }}</option> 
                    @endif
                @endforeach
        </select>          
    </div>
    <button type="submit">Them hoc sinh</button>
</form>
@endsection