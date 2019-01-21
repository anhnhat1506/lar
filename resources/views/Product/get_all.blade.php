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
        <h1>{{$gia_cao_nhat}}</h1>
        <table>
                <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Main photo</th>
                </thead>
                <tbody>
                @foreach ($products as $key => $value)
                        <tr>
                                <td>{{$value->product_id}}</td>
                                <td>{{$value->name}}</td>
                                <td><img src="http://localhost:81/tmdt/{{$value->main_photo}}"/></td>
                        </tr>
                @endforeach
                </tbody>
        </table>
@endsection


