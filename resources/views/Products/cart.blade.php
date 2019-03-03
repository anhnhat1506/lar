@extends('products.layout')
@section('tittle','Giỏ hàng')
@section('content')
<table id="cart" class="table table-hover table-condensed table-bordered">
        <thead>
        <tr>
            <th style="width:50%;text-align:center">Sản phẩm</th>
            <th style="width:10%">Giá</th>
            <th style="width:8%">Số lượng</th>
            <th style="width:22%" class="text-center">Chi tiết tiền</th>
            <th style="width:10%">Tùy chỉnh</th>
        </tr>
        </thead>
        <tbody>
        <?php $total = 0 ?>
        @if (session('shop_cart'))
            @foreach (session('shop_cart') as $product_id=>$details)
                <?php $total += $details['price'] * $details['quantity'] ?>
                <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs">
                                    @if (isset($details['photo']))
                                        <img src="{{ $details['photo'] }}" style="width:100px; height:100px" alt="..." class="img-responsive"/>
                                    @endif                                    
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">${{ $details['price'] }}</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control text-center quantity" value="{{ $details['quantity'] }}">
                        </td>
                        <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }}</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-sm update-cart" data-id="{{  $product_id }}"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $product_id }}"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
            @endforeach
        @endif        
        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Tổng tiền: {{ $total }} $</strong></td>
        </tr>
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Tổng tiền: {{ $total }} $</strong></td>

        </tr>
        </tfoot>
    </table>
@endsection
@section('scripts')
    <script type="text/javascript">
        $('.update-cart').click(function (e){
            e.preventDefault();
            var ele = $(this); //la cai button da click
            var soluongnhap = ele.parents("tr").find(".quantity").val();
            var product_id = ele.attr("data-id"); //lay trong data-id cua button vua bam
            //data_ajax: chi la 1 object dang key: value,
            var data_ajax = {
                _token: '{{ csrf_token() }}', 
                id: product_id, 
                quantity: soluongnhap
            };

            //goi ajax bang jquery
            $.ajax({
                url:'{{ url("products/update-cart") }}', //route binh thuong
                method: "patch", //phuong thuc truyen http
                data: data_ajax, //du lieu truyen di cua ajax
                success: function (response) { //nhan ve
                    //console.log(response); //tuiong tu var_dump php de phan tich varibles
                    window.location.reload(); //chi don gian la reload lai trang web F5 bang cu phap javascript //tuong duong: location.reload(); 
                   
                }
            })
        })
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Bạn chắc chắn muốn xóa không?")) {
                $.ajax({
                    url: '{{ url('products/remove_product') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection