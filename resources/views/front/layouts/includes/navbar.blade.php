<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

        <div class="logo mr-auto">
            <a href="{{route('front.homepage')}}">  <img src="{{asset_public('front/assets/images/hanan.png')}}" ></a>

        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="index.html">@lang('front.home')</a></li>
                <li><a href="#about">@lang('front.about')</a></li>
                <li><a href="#services">@lang('front.services')</a></li>
                <li><a href="#portfolio">@lang('front.project')</a></li>
                <li><a href="#team">@lang('front.team')</a></li>
                <li><a href="#contact">@lang('front.contact')</a></li>
                <li>
                    @if(app()->getLocale() == 'ar')
                        <a rel="alternate" hreflang="{{ app()->getLocale() }}" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                            <span class="symbol symbol-20 lang mr-3">
                            <img src="{{asset_public('front/assets/images/united-states (1).svg')}}">
                            </span>
                         </a>
                    @else
                        <a rel="alternate" hreflang="{{ app()->getLocale() }}" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                           <span class="symbol symbol-20 lang mr-3">
                                <img src="{{asset_public('front/assets/images/egypt.svg')}}">
                           </span>
                        </a>
                    @endif
                </li>
            </ul>
        </nav>
    </div>
</header>
