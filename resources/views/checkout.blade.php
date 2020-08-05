@extends('layouts.app')

<link href="./css/checkout.css" rel="stylesheet">
<script>
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          var forms = document.getElementsByClassName('needs-validation');
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    
</script>

@section('content')
<div class="container">
    <div class="py-5">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                @if (Cart::instance('default')->count() > 0)
                                <span class="badge badge-secondary badge-pill">{{ Cart::instance('default')->count()}}</span>
                @endif
              </h4>
              <ul class="list-group mb-3">
                  @foreach (Cart::content() as $item)
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <img src="{{ asset('images/PRODUCTS/'.$item->model->name.'.png')}}" alt="">
                  <div>
                    <h6 class="my-0">{{ $item->model->name}}</h6>
                    <small class="text-muted">Quantity: {{ $item->qty }}</small>
                  </div>
                  <div>
                    <h6 class="text-muted">RM {{ $item->model->price}}</h6>
                  </div>
                </li>
                  @endforeach
                <li class="list-group-item d-flex justify-content-between">
                  <span>Total (RM)</span>
                  <strong>RM {{ Cart::subtotal()}}</strong>
                </li>
              </ul>
            </div>
            <div class="col-md-8 order-md-1">
              <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" action="{{ action('OrderController@store')}}" method="POST" novalidate>
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control" name="name" placeholder="" value="{{ Auth::user()->name }}" required>
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="lastName">Phone Number</label>
                    <input type="text" class="form-control" name="phoneNumber" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid phone number is required.
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="email">Email <span class="text-muted">(Optional)</span></label>
                  <input type="email" class="form-control" name="email" placeholder="you@example.com" value="{{ Auth::user()->email }}">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
        
                <div class="mb-3">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" name="address" placeholder="" required>
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>
        
                <div class="row">
                  <div class="col-md-5 mb-3">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" name="country" placeholder="" required>
                    <div class="invalid-feedback">
                      Please select a valid country.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="state">State</label>
                    <input type="text" class="form-control" name="state" placeholder="" required>
                    <div class="invalid-feedback">
                      Please provide a valid state.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" name="zip" placeholder="" required>
                    <div class="invalid-feedback">
                      Zip code required.
                    </div>
                  </div>
                </div>
                <hr class="mb-3">
        
                <h4 class="mb-3">Payment</h4>
        
                <div class="d-block my-3">
                  <label for="cc-name">Bank name</label>
                    <input type="text" class="form-control" id="cc-bank" placeholder="" required>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="cc-name">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                      Name on card is required
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="cc-number">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback">
                      Credit card number is required
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="cc-expiration">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                      Expiration date required
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="cc-cvv">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                      Security code required
                    </div>
                  </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Place Order</button>
              </form>
            </div>
          </div>
    </div>
</div>
@endsection