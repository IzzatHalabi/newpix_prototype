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
					@if ($items->count() > 0)
						<span class="badge badge-secondary badge-pill">{{ $items->count()}}</span>
					@endif
				</h4>
				<ul class="list-group mb-3">
					@foreach ($items as $item)
						<li class="list-group-item d-flex justify-content-between lh-condensed">
							<img src="{{ asset( $item->image_url )}}" alt="">
							<div>
								<h6 class="my-0">{{ $item->name }}</h6>
								<small class="text-muted">Quantity: {{ $item->pivot->quantity }}</small>
							</div>
							<div>
								<h6 class="text-muted">RM {{ number_format($item->price, 2) }}</h6>
							</div>
						</li>
					@endforeach
					<li class="list-group-item d-flex justify-content-between">
						<span>Total (RM)</span>
						<strong>RM {{ number_format($totalPrice, 2) }}</strong>
					</li>
				</ul>
			</div>
			<div class="col-md-8 order-md-1">
				<h4 class="mb-3">Billing address</h4>
				<form class="needs-validation" action="{{ route('payments.store')}}" method="POST" novalidate>
					{{ csrf_field() }}
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="firstName">Name</label>
							<input type="text" class="form-control" name="name" placeholder="" value="{{ $user->name }}" required>
							<div class="invalid-feedback">
								Valid name is required.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="lastName">Phone Number</label>
							<input type="text" class="form-control" name="phone" placeholder="" value="{{ $user->phone }}" required>
							<div class="invalid-feedback">
								Valid phone number is required.
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="email">Email <span class="text-muted">(Optional)</span></label>
						<input type="email" class="form-control" name="email" placeholder="you@example.com" value="{{ $user->email }}">
						<div class="invalid-feedback">
							Please enter a valid email address for shipping updates.
						</div>
					</div>

					<div class="mb-3">
						<label for="address">Address</label>
						<input type="text" class="form-control" name="address" value="{{ $user->address }}" required>
						<div class="invalid-feedback">
							Please enter your shipping address.
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