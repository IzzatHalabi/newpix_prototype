@extends('layouts.app')

<link href="./css/faq.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Poppins:300,600&display=swap"
  rel="stylesheet" />

@section('title', "FAQ")

@section('content')

<div class="faq">
    <div class="faq-upper">
        <div class="container">
            <img src="./images/people-image.jpg" alt="">
            <div class="row">
                <h1>FREQUENTLY ASKED QUESTIONS</h1>
                <h4>Want to find out more about our delivery services? How we source our products? The answers to these and more can be found below.</h4>
            </div>
        </div>
        <div class="faq-lower">
            <div class="container">
                <div class="row">
                    <ul>
                        <li>
                            <h5>I cannot find the style, color or size I’m looking for.</h5>
                            <p>The colors and sizes available in the online shop reflect what we currently have in stock at the moment. We might re-stock popular products</p>
                        </li>
                        <li>
                            <h5>Can I change my order?</h5>
                            <p>We start working on your order as soon as it is placed, so there is a very limited time-frame in which you can amend or cancel it. </p>
                        </li>
                        <li>
                            <h5>When do I receive my order?</h5>
                            <p>We dispatch all orders within 24 hrs on working days. Holidays and bank holidays might affect this time. When the order is shipped you receive a shipping confirmation e-mail. </p>
                        </li>
                        <li>
                            <h5>How is my order shipped?</h5>
                            <p>All orders are shipped with FedEx Economy. </p>
                        </li>
                    </ul>
                </div>
            </div>    
        </div>   
    </div>
</div>
@endsection