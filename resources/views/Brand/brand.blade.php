@extends("layouts.main")
@section("style")
    <style>
        .td-img img{
            max-width: 300px;
        }
    </style>
@endsection
@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Brand_id</th>
                <th>Name</th>
                <th>Sm_logo</th>
                <th>Banner</th>
                <th>O_number</th>
            </tr>
        </thead>
        <tbody>
        @foreach($brand as $key=>$value)
            <tr>
                <td>{{$value->brand_id}}</td>
                <td><a href="{{ url('brand/detail/'.$value->brand_id) }}">{{$value->name}}</a></td>
                <td><img src="{{url($value->sm_logo)}}"/></td>
                <td class="td-img"><img src="{{url($value->banner)}}"/></td>
                <td>{{$value->o_number}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection