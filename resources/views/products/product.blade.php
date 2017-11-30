@extends('master')

@section('content')

    <div class="container">
<<<<<<< HEAD
        <p><a href="{{ url('/shop') }}">Shop</a> </p>
        

        <hr>

        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/' . $product->image) }}" alt="product" class="img-responsive">
=======
        <p><a href="{{ url('/shop') }}">Shop</a></p>
        

        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('images/' . $product->image) }}" alt="product" class="img-responsive">
>>>>>>> master
            </div>

            <div class="col-md-8">
                <h3>${{ $product->price }}</h3>
                <form action="{{ url('/cart') }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="submit" class="btn btn-success btn-lg" value="Add to Cart">
                </form>

                <form action="{{ url('/wishlist') }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="submit" class="btn btn-primary btn-lg" value="Add to Wishlist">
                </form>


                <br><br>

                {{ $product->description }}
            </div> <!-- end col-md-8 -->
        </div> <!-- end row -->

        <div class="spacer"></div>

        <div class="row">
            <h3>You may also like...</h3>

            @foreach ($interested as $product)
                <div class="col-md-3">
                    <div class="thumbnail">
                        <div class="caption text-center">
                            <a href="{{ url('shop', [$product->slug]) }}"><img src="{{ asset('img/flowers' . $product->image) }}" alt="product" class="img-responsive"></a>
                            <h3>{{ $product->name }}</h3>
                            <div class="clearfix">
                            <div class="price pull-left"><p>{{ $product->price }}</p></div>
                            <a href="{{ url('shop', [$product->slug]) }}" class="btn btn-success pull-right" role="button">add to Cart</a>
                            </div>
                        </div> <!-- end caption -->

                    </div> <!-- end thumbnail -->
                </div> <!-- end col-md-3 -->
            @endforeach

        </div> <!-- end row -->

        <div class="spacer"></div>


    </div> <!-- end container -->

@endsection