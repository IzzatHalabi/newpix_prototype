@extends('layouts.app')

<link href="./css/banner.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Poppins:300,600&display=swap"
  rel="stylesheet" />

@section('content')
<section class="banner" id="banner">
  <div id="bannerBg" class="banner-bg"></div>
  <div class="container">
    <div class="row">
      <div class="banner-inner" id="bannerInner">
        <div class="content">
          <div class="content-inner">
            <h1>
              <div class="line">
                <span>Affordable.</span>
              </div>
              <div class="line">
                <span>Stylish.</span>
              </div>
              <div class="line">
                <span>Satisfaction guaranteed.</span>
              </div>
            </h1>
          </div>
        </div>
        <div class="image">
          <div class="image-inner">
            <img src="./images/onlineShopping.png" alt="onlineShopping" />
          </div>
        </div>
      </div>
    </div>
    <h1>ARORA</h1>
    <div class="row">  
      <div class="catalogue">
        @foreach ($productsArora as $productArora)
        <div class="catalogue-items">
          <div class="catalogue-image">
          <a href="{{ route('home.show', $productArora->slug)}}"><img src="{{ asset('images/ARORA/'.$productArora->name.'.png')}}"></a>
          </div>
          <div class="catalogue-text">
            <a href="{{ route('home.show', $productArora->slug)}}"><h6>{{ $productArora->name }}</h6></a>
            <h6>RM {{ $productArora->price }}</h6>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <h1>OPENSPORT</h1>
    <div class="row">  
      <div class="catalogue">
        @foreach ($productsOrensport as $productOrensport)
        <div class="catalogue-items">
          <div class="catalogue-image">
          <a href="{{ route('home.show', $productOrensport->slug)}}"><img src="{{ asset('images/ORENSPORT/'.$productOrensport->name.'.png')}}"></a>
          </div>
          <div class="catalogue-text">
            <a href="{{ route('home.show', $productOrensport->slug)}}"><h6>{{ $productOrensport->name }}</h6></a>
            <h6>RM {{ $productOrensport->price }}</h6>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <h1>PANZER</h1>
    <div class="row">  
      <div class="catalogue">
        @foreach ($productsPanzer as $productPanzer)
        <div class="catalogue-items">
          <div class="catalogue-image">
            <a href="{{ route('home.show', $productPanzer->slug)}}"><img src="{{ asset('images/PANZER/'.$productPanzer->name.'.png')}}"></a>
          </div>
          <div class="catalogue-text">
            <a href="{{ route('home.show', $productPanzer->slug)}}"><h6>{{ $productPanzer->name }}</h6></a>
            <h6>RM {{ $productPanzer->price }}</h6>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endsection