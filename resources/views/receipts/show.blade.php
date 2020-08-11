@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong> {{ $output->subject('buyer_name') }} </strong>
                        <br>
                        {{ $output->subject('email') }}
                        <br>
                        {{ $output->subject('address') }}
                        <br>
                        <abbr title="Phone">P:</abbr> {{ $output->subject('phone') }}
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: {{ $receipt->created_at->format('jS F, Y') }}</em>
                    </p>
                    <p>
                        <em>Receipt #: {{ $output->subject('receipt_code') }}</em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center w-100">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>#</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output->items() as $item)
                            <tr>
                                <td class="col-md-9"><em> {{ $item->name }} </em></h4></td>
                                <td class="col-md-1" style="text-align: center"> {{ $item->quantity }} </td>
                                <td class="col-md-1 text-center"> {{ $item->price }} </td>
                                <td class="col-md-1 text-center"> {{ $item->sub_price }} </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong> {{ number_format($output->subject('total_price'), 2) }} </strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('receipts.index') }}" class="btn btn-success btn-lg btn-block">
                    Receipt Listing
                </a></td>
            </div>
        </div>
    </div>
</div>
@endsection