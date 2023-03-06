@extends('front.layouts.master')

@section('content')
    <!-- Jumbotron Header -->
        <header class="jumbotron my-4">
            <h5 class="display-3"><strong>Best For Laundry Services</strong></h5>
            <p class="display-4"><strong>Highly Professional Staff</strong></p>
            <p class="display-4">&nbsp;</p>
        </header>
    @if ( session()->has('msg') )
        <div class="alert alert-success">{{ session()->get('msg') }}</div>
    @endif

    <div class="row text-center">
        <div class="col" style="background-color: #46C6CE; color: black; font-weight: bold; font-size: 24px; margin: 0px 15px 15px; padding: 10px 10px; border-radius: 5px;">
            Wash Services
        </div>
    </div>

    <div class="row text-center">
        @foreach ($products as $product)
        @if ( $product->category == "wash" )
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{ url('/uploads') . '/' . $product->image }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">
                       {{ $product->description }}
                    </p>
                </div>
                <div class="card-footer">
                    <strong>${{ $product->price }}</strong> &nbsp;
                    <form action="{{ route('cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                    <button type="submit" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Add To
                        Cart</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>

    <div class="row text-center">
        <div class="col" style="background-color: #46C6CE; color: black; font-weight: bold; font-size: 24px; margin: 0px 15px 15px; padding: 10px 10px; border-radius: 5px;">
            Iron Services
        </div>
    </div>

    <div class="row text-center">
        @foreach ($products as $product)
        @if ( $product->category == "iron" )
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{ url('/uploads') . '/' . $product->image }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">
                       {{ $product->description }}
                    </p>
                </div>
                <div class="card-footer">
                    <strong>${{ $product->price }}</strong> &nbsp;
                    <form action="{{ route('cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                    <button type="submit" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Add To
                        Cart</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>

    <div class="row text-center">
        <div class="col" style="background-color: #46C6CE; color: black; font-weight: bold; font-size: 24px; margin: 0px 15px 15px; padding: 10px 10px; border-radius: 5px;">
            Shoe Polish Services
        </div>
    </div>

    <div class="row text-center">
        @foreach ($products as $product)
        @if ( $product->category == "shoe" )
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{ url('/uploads') . '/' . $product->image }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">
                       {{ $product->description }}
                    </p>
                </div>
                <div class="card-footer">
                    <strong>${{ $product->price }}</strong> &nbsp;
                    <form action="{{ route('cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                    <button type="submit" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Add To
                        Cart</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>

    <div class="row text-center">
        <div class="col" style="background-color: #46C6CE; color: black; font-weight: bold; font-size: 24px; margin: 0px 15px 15px; padding: 10px 10px; border-radius: 5px;">
            Dry Cleaning Services
        </div>
    </div>

    <div class="row text-center">
        @foreach ($products as $product)
        @if ( $product->category == "dry" )
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{ url('/uploads') . '/' . $product->image }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">
                       {{ $product->description }}
                    </p>
                </div>
                <div class="card-footer">
                    <strong>${{ $product->price }}</strong> &nbsp;
                    <form action="{{ route('cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                    <button type="submit" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Add To
                        Cart</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
@endsection