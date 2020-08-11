@extends('layouts.app')

<link href="{{ asset('css/product.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Poppins:300,600&display=swap"
  rel="stylesheet" />

@section('title', $item->name)

@section('content')
    <nav>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('items.index') }}"> Home </a></li>
            <li class="breadcrumb-item active"> Products </li>
        </ol>
    </nav>
    <div class="product">
        <div class="container">
            <div class="row">
                <div class="product-image">
                    <img src="{{ asset( $item->image_url )}}" alt="yolo">
                </div>
                <div class="product-details">
                    <h2>{{ $item->name }}</h2>
                    <h3>{{ $item->details }}</h3>
                    <h3> RM {{ number_format($item->price, 2) }}</h3>
                    <p>{{ $item->description }}</p>
                    <form action="{{ route('items.add-to-cart')}}" method="POST">
                        {{{ csrf_field() }}}
                        <input type="hidden" name="itemId" value="{{ $item->id}}">

                        <p>Quantity</p>
                        <input type="number" id="quantity" name="quantity" min="0" value="{{ $quantity }}">
                        <div class="cart-button">
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>      
@endsection

@section('script')

<script>
    loadQuantity();

    $(document).on('keyup mouseup', '#quantity', function() {                                                                                                                     
        loadQuantity();
    });

    function loadQuantity() {
        if ($('#quantity').val() == 0) {
            $('.btn-primary').attr('disabled','false');
        } else {
            $('.btn-primary').removeAttr('disabled');
        }
    }
</script>

@endsection