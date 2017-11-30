@extends('master')

@section('content')

    <div class="container">

       
<<<<<<< HEAD
        @foreach ($products->chunk(4) as $items)
            <div class="row">
                @foreach ($items as $product)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="caption text-center">
                                <a href="{{ url('shop', [$product->slug]) }}"><img src="{{ asset('images/' . $product->image) }}" alt="product" class="img-responsive"></a>
                                <h3>{{ $product->name }}</h3>
                                <div class="clearfix">
                                <div class="price pull-left"><p>{{ $product->price }}</p></div>
                                <a href="{{ url('shop', [$product->slug]) }}" class="btn btn-success pull-right" role="button">add to Cart</a>
=======
        @foreach ($products->chunk(2) as $items)
            <div class="row">
                @foreach ($items as $products)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="caption text-center">
                                <a href="{{ url('shop', [$products->slug]) }}"><img src="{{ asset('images/' . $products->image) }}" alt="products" class="img-responsive"></a>
                                <h3>{{ $products->name }}</h3>
                                <div class="clearfix">
                                <div class="price pull-left"><p>{{ $products->price }}</p></div>
                                <a href="{{ url('shop', [$products->slug]) }}" class="btn btn-success pull-right" role="button">add to Cart</a>
>>>>>>> master
                                </div>
                            </div> <!-- end caption -->
                        </div> <!-- end thumbnail -->
                    </div> <!-- end col-md-3 -->
                @endforeach
            </div> <!-- end row -->
        @endforeach

    </div> <!-- end container -->

@endsection