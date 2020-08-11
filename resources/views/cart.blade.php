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
        @if ($items->count() > 0)
            <h3 class="pl-3 py-3">{{ $items->count() }} item(s) in Cart</h3>
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
                            @foreach ($items as $item)
                                <tr>
                                    <td><a href="{{ route('items.show', $item->id)}}"><img src="{{ asset( $item->image_url )}}" /></a></td>
                                    <td><a href="{{ route('items.show', $item->id)}}">{{ $item->name}}</a></td>
                                    <td>In stock</td>
                                    <td><input class="form-control" type="text" value="{{ $item->pivot->quantity }}" disabled></td>
                                    <td class="text-right">RM {{ number_format($item->price, 2) }}</td>
                                    <td class="text-right">
                                        <form action="{{ route('items.remove-from-cart', $item->id)}}" method="POST">
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
                                <td class="text-right"><strong>RM {{ number_format($totalPrice, 2) }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <a href="{{ route('items.index')}}"><button class="btn btn-lg btn-block btn-primary">Continue Shopping</button></a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                    <a href="{{ route('payments.create')}}"><button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button></a>
                    </div>
                </div>
            </div>
        @else       
            <div class="col mb-2 ">
                <div class="row py-1">
                    <div class="col mb-2 text-center">
                        <h3>No items in Cart</h3>
                    </div>        
                </div>
                <div class="row justify-content-center">
                    <div>
                        <a href="{{ route('items.index')}}"><button class="btn btn-lg btn-primary">Continue Shopping</button></a>
                    </div>
                </div>
            </div>
        @endif   
    </div>
</div>
@endsection