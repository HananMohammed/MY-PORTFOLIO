@extends('front.layouts.app')
@section('title','Products')
@section('content')
@include('front.products.banner.index')
<!-- Product Detail Start -->
<div class="product-detail">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <section class="w3l-ecommerce-main">
                    <!-- /products-->
                    <div class="ecom-contenthny py-5">
                        <div class="container py-lg-5">
                            <h3 class="hny-title mb-0 text-center">@lang('front.shop-with') <span>@lang('front.us')</span></h3>
                            <p class="text-center">@lang('front.handpick')</p>
                            <!-- /row-->
                            <div class="ecom-products-grids row mt-lg-5 mt-3">
                                @foreach($products as $product)
                                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                                        <div class="product-grid2 transmitv">
                                            <div class="product-image2">
                                                <a href="{{route('front.single-product',["id" => $product->id, "slug" => Str::slug($product->title, '-')])}}">
                                                    <img class="pic-1 img-fluid" src="{{asset_public('storage/uploads/'.$product->image)}}">
                                                    <img class="pic-2 img-fluid" src="{{asset_public('storage/uploads/'.$product->image)}}">
                                                </a>
                                                <ul class="social">
                                                    <li><a href="{{route('front.single-product',["id" => $product->id, "slug" => Str::slug($product->title, '-')])}}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                                    <li><a href="{{ route('front.addToCart', $product->id) }}" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                                    </li>
                                                </ul>
                                                <div class="transmitv single-item">
                                                    <a href="{{ route('front.addToCart', $product->id) }}"  class="transmitv-cart ptransmitv-cart add-to-cart">
                                                        @lang('front.cart')
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="{{route('front.single-product',["id" => $product->id, "slug" => Str::slug($product->title, '-')])}}">{{ $product->title }}</a></h3>
                                                @if($product->offer != null)
                                                    <span class="price"><del>{{ $product->price." EGP" }}</del>{{ $product->offer . " EGP" }}</span>
                                                @else
                                                    <span class="price">{{ $product->price . " EGP" }}</span>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <!-- //row-->
                        </div>
                    </div>
                </section>
                {{ $products->links() }}
            </div>

            <!-- Side Bar Start -->
            <div class="col-lg-4 sidebar">


                <div class="sidebar-widget brands">
                    <h2 class="title">@lang('front.category')</h2>
                    <ul>
                        @foreach($categories as $category)
                        <li><a href="{{route('front.single-category-products',["id" => $category->id, "slug" => Str::slug($category->title, '-')])}}">{{$category->title}}  </a><span>({{$category->category_product_count}})</span></li>
                        @endforeach
                    </ul>
                </div>

            </div>
            <!-- Side Bar End -->
        </div>
    </div>
</div>
<!-- Product Detail End -->
@endsection
