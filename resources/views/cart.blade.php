@extends('layouts.app')

<link href="./css/cart.css" rel="stylesheet">

@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">CART</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        @if (session()->has('success_message'))
            <div class="message pl-3 py-3">
                <h3>{{ session()->get('success_message')}}</h3>
            </div>     
        @endif
    </div>
    <div class="row">
        @if (Cart::count() > 0)
        <h3 class="pl-3 py-3">{{ Cart::count() }} item(s) in Cart</h3>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Cart::content() as $item)
                        <tr>
                        <td><a href="{{ route('home.show', $item->model->slug)}}"><img src="{{ asset('images/PRODUCTS/'.$item->model->name.'.png')}}" /></a></td>
                        <td><a href="{{ route('home.show', $item->model->slug)}}">{{ $item->model->name}}</a></td>
                            <td>In stock</td>
                        <td><input class="form-control" type="text" value="{{ $item->qty }}" /></td>
                        <td class="text-right">RM {{ $item->model->price }}</td>
                            <td class="text-right">
                            <form action="{{ route('cart.destroy', $item->rowId)}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE')}}
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>RM {{ Cart::subtotal()}}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="{{ route('home.index')}}"><button class="btn btn-lg btn-block btn-primary">Continue Shopping</button></a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                <a href="{{ route('order.index')}}"><button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button></a>
                </div>
            </div>
        </div>
        @else       
            <div class="col mb-2">
                <div class="row py-1">
                    <div class="col mb-2">
                        <h3>No items in Cart</h3>
                    </div>        
                </div>
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="{{ route('home.index')}}"><button class="btn btn-lg btn-primary">Continue Shopping</button></a>
                    </div>
                </div>
            </div>
        @endif   
    </div>
</div>
@endsection