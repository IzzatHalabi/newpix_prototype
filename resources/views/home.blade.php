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
                <span> Satisfaction guaranteed.</span>
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
    <div class="row">
      <div class="catalogue">
          <h1>ARORA</h1>
        <div class="catalogue-items">
          <div>
            <img src="./images/ARORA/ARORA-1.jpeg">
          </div>
          <div>
            <img src="./images/ARORA/ARORA-2.jpeg">
          </div>
          <div>
            <img src="./images/ARORA/ARORA-3.jpeg">
          </div>
          <div>
            <img src="./images/ARORA/ARORA-6.png">
          </div>
          <div>
            <img src="./images/ARORA/ARORA-10.png">
          </div>
        </div>
          <h1>ORENSPORT</h1>
          <div class="catalogue-items">
            <div>
              <img src="./images/ORENSPORT/OREN SPORT-20.png">
            </div>
            <div>
              <img src="./images/ORENSPORT/OREN SPORT-28.png">
            </div>
            <div>
              <img src="./images/ORENSPORT/OREN SPORT-30.png">
            </div>
            <div>
              <img src="./images/ORENSPORT/OREN SPORT-34.png">
            </div>
            <div>
              <img src="./images/ORENSPORT/OREN SPORT-38.png">
            </div>
          </div>
          <h1>PANZER</h1>
          <div class="catalogue-items">
            <div>
              <img src="./images/PANZER/PANZER CATALOGUE-4.png">
            </div>
            <div>
              <img src="./images/PANZER/PANZER CATALOGUE-6.png">
            </div>
            <div>
              <img src="./images/PANZER/PANZER CATALOGUE-8.png">
            </div>
            <div>
              <img src="./images/PANZER/PANZER CATALOGUE-9.png">
            </div>
            <div>
              <img src="./images/PANZER/PANZER CATALOGUE-10.png">
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
@endsection