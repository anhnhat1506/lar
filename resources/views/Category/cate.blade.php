@extends('layouts.main')
@section('content')
    <h1>{!! $description !!}</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Category_id</th>
                <th>Name</th>
                <th>Or_number</th>
                <th>img</th>
</tr>
</thead>
<tbody>
@foreach($category as $key =>$value)
    <tr>
        <th>{{$value->category_id}}</th>
        <th><a href="{{url('category/detail/'.$value->category_id)}}">{{$value->name}}</a></th>
        <th>{{$value->o_number}}</th>
        <th><img src="https://cdn4.iconfinder.com/data/icons/iconsimple-logotypes/512/apple-128.png"/></th>
    </tr>
@endforeach
</tbody>
</table>
@endsection