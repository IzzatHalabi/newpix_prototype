@extends('layouts.app')

@section('content')

<div class="container">
	<div class="w-75 m-auto">
		<p class="font-weight-bold" style="font-size: 20px"> Payment History </p>
		<hr>
		<div class="card">
			<table class="table table-hover shopping-cart-wrap">
				<thead class="">
					<tr>
						<th> Receipt Code </th>
						<th> Date </th>
						<th> Name </th>
						<th> Amount </th>
					</tr>
				</thead>
				<tbody>
					@if ($receipts->count() > 0)
					@foreach ($receipts as $receipt)	
						{{ $output->newReceipt($receipt) }}
						<tr>
							<td> 
								<a href="{{ route('receipts.show', $receipt->id) }}"> {{ $output->subject('receipt_code') }} </a> 
							</td>
							<td> {{ $receipt->created_at->format('jS F, Y') }} </td>
							<td> {{ $output->subject('buyer_name') }} </td>
							<td> RM {{ number_format($output->subject('total_price'), 2) }} </td>
						</tr>
					@endforeach
					@else
						<tr>
							<td colspan="4"> No payment recorded yet. </td>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div> <!-- card.// -->

</div> 
<!--container end.//-->

@endsection
