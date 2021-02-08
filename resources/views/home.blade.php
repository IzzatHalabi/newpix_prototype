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
								{{-- <span>Affordable.</span> --}}
							</div>
							<div class="line">
								<span>{{ $respond }}</span>
							</div>
							<div class="line">
								{{-- <span>Satisfaction guaranteed.</span> --}}
							</div>
						</h1>
					</div>
				</div>
				<div class="image">
					<div class="image-inner">
						<img src="./images/onlineShopping.png" alt="onlineShopping">
					</div>
				</div>
			</div>
		</div>

        @foreach ($categories as $category)
            <h1> {{ $category->name }} </h1>
            <div class="row">  
                <div class="catalogue">
                @foreach ($category->items as $item)
                    <div class="catalogue-items">
                        <a href="{{ route('items.show', $item->id) }}">
                            <div class="catalogue-image">
                                <img src="{{ asset( $item->image_url ) }}">
                            </div>
                            <div class="catalogue-text">
                                <h6>{{ $item->name }}</h6>
                                <h6>RM {{ number_format($item->price, 2) }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
        @endforeach

	</div>
</section>
@endsection