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
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Price * Quantity thanh_tien</th>
                        <th></td>
                </thead>
                <tbody>
                @foreach ($cart['dssp'] as $value)
                        <tr>
                                <td>{{  $value["product_id"] }}</td>
                                <td>{{  $value["product_name"] }}</td>
                                <td><img src="{{ $value["product_image"] }}"/></td>
                                <td>{{  $value["quantity"] }}</td>
                                <td>{{  $value["product_price"] }}</td>
                                <td>{{  $value["thanh_tien"] }}</td>
                                <td></td>
                        </tr>
                @endforeach
                </tbody>
        </table>       
        

        <h1> Total: {{ $cart['total'] }} </h1> 
@endsection


