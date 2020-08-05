@extends('layouts.app')

<link href="./css/cart.css" rel="stylesheet">

@section('content')
    <div class="container">
        <div class="row py-3">
            <div class="col mb-2">
                <div class="row py-1">
                    <div class="col mb-2">
                        <h3>Purchase Successful. Thank you!</h3>
                    </div>        
                </div>
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="{{ route('home.index')}}"><button class="btn btn-lg btn-primary">Continue Shopping</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection