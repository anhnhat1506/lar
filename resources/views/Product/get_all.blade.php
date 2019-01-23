@extends("layouts.main")
@section("style")
        <style>
                img{
                        max-width: 50px;
                }
        </style>
@endsection
@section("content")
        {{-- do khong co autocomplete nen phai tu nho va go tay  --}}
        <table class="table table-bordered">
                <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Main photo</th>
                        <th>Category id</th>
                </thead>
                <tbody>
                @foreach ($products as $key => $value)
                        <tr>
                                <td>{{$value->product_id}}</td>
                                <td><a href="{{ url('product/detail/'.$value->product_id) }}">{{$value->name}}</a></td>
                                <td><img src="{{ url($value->main_photo) }}"/></td>
                                <td>{{$value->category_id}}</td>
                        </tr>
                @endforeach
                </tbody>
        </table>
@endsection


