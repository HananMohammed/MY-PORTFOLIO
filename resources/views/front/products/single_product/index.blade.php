@extends('front.layouts.app')
@section('title', $product[0]->title)
@section('content')
    @include('front.products.single_product.banner.index')
    <main class="container">
    <!-- Left Column / Headphones Image -->
    <div class="left-column col-md-6" >
      <img data-image="red" class="active" src="{{ asset_public('storage/uploads/'.$product[0]->image) }}" alt="" style="width: 350px; hieght:450px;">
    </div>


    <!-- Right Column -->
    <div class="right-column col-offset-md-6" style="margin-left: 500px;margin-bottom:50px;">

      <!-- Product Description -->
      <div class="product-description">
        <h1>{{ $product[0]->title }}</h1>
        <p>{!! $product[0]->text !!}</p>
      </div>

      <!-- Product Configuration -->
      <div class="product-configuration">

        <!-- Product Color -->


        <!-- Cable Configuration -->
        <div class="cable-config">
          <span style="margin-bottom: 10px;">@lang('front.size')</span>

          <div class="cable-choose">
            <button>S</button>
            <button>M</button>
            <button>L</button>
            <button>XL</button>
            <button>2XL</button>
          </div>

          {{-- <a href="#">How to configurate your headphones</a> --}}
        </div>
      </div>

      <!-- Product Pricing -->
      <div class="product-price">
          @if($product[0]->offer != null)
              <span class="price"><del>{{ $product[0]->price."$" }}</del>{{ $product[0]->offer . "$" }}</span>
          @else
              <span class="price">{{ $product[0]->price . "$" }}</span>
          @endif
        <a href="#" class="cart-btn">@lang('front.cart')</a>
      </div>
    </div>
  </main>
  <div></div>
  @endsection
