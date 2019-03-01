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
        @php
            var_dump(session()->get('cart'));
        @endphp
        <table class="table table-bordered">
                <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Main photo</th>
                        <th></td>
                </thead>
                <tbody>
                @foreach ($products as $key => $value)
                        <tr>
                                <td>{{$value->id}}</td>
                                <td>{{ $value->name }}</td>
                                <td><img src="{{ $value->image }}"/></td>
                                <td>
                                        <form action="{{ url("cart/add_to_cart") }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $value->id }}"/>
                                                <button type="submit">ADD TO CART</button>
                                        </form>
                                </td>
                        </tr>
                @endforeach
                </tbody>
        </table>
@endsection


