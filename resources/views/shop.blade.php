@extends('master')

@section('content')

    <div class="container">

       
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
                                </div>
                            </div> <!-- end caption -->
                        </div> <!-- end thumbnail -->
                    </div> <!-- end col-md-3 -->
                @endforeach
            </div> <!-- end row -->
        @endforeach

    </div> <!-- end container -->

@endsection