@extends('layouts.app')

<link href="{{ asset('css/product.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Poppins:300,600&display=swap"
  rel="stylesheet" />

@section('title', $product->name)

@section('content')
<nav>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active">Products</li>
    </ol>
</nav>
<div class="product">
    <div class="container">
        <div class="row">
            <div class="product-image">
                <img src="{{ asset('images/PRODUCTS/'.$product->name.'.png')}}" alt="yolo">
            </div>
            <div class="product-details">
                <h2>{{ $product->name }}</h2>
                <h3>{{ $product->details }}</h3>
                <h3>RM {{ $product->price }}</h3>
                <p>{{ $product->description }}</p>
                <form action="{{ route('cart.store')}}" method="POST">
                    {{{ csrf_field() }}}
                    <input type="hidden" name="id" value="{{ $product->id}}">
                    <input type="hidden" name="name" value="{{ $product->name}}">
                    <input type="hidden" name="price" value="{{ $product->price}}">
                    <p>Quantity</p>
                    <input type="number" name="qty" value="{{ $product->quantity }}">
                    <div class="cart-button">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>      
@endsection