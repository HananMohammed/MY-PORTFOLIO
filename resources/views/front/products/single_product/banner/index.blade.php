<section class="w3l-banner-slider-main inner-pagehny">
    <div class="breadcrumb-infhny">
        <div class="top-header-content">
            @include('front.layouts.includes.navbar')
            <div class="breadcrumb-contentnhy">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <h2 class="hny-title text-center">{{$product[0]->title}}</h2>
                        <ol class="breadcrumb mb-0">
                            <li><a href="{{route('front.homepage')}}">@lang('front.homepage')</a>
                                <span class="fa fa-angle-double-right"></span></li>
                            <li class="active">{{$product[0]->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
