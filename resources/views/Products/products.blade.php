@extends('products.layout')
@section('title','Sản Phẩm')
@section('content')
    <div class="container products">
        <div class="row">
            @foreach ($products as $sp)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                            <img src="{{ $sp->photo }}" alt="" width="500" height="300">
                            <div class="caption">
                                <h4>{{ $sp->name }}</h4>
                                <p>{{ str_limit(strtolower($sp->decription),50) }}</p>
                                <p><strong>Price: </strong> {{ $sp->price }}$</p>
                                <p class="btn-holder"><a href="{{ url('products/add-to-cart/'.$sp->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                            </div>
                    </div>
                </div> 
            @endforeach
            
        </div>
    </div>
@endsection