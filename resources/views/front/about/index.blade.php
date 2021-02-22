@extends('front.layouts.app')
@section('title','About US')
@section('content')
    @include('front.about.banner.index')
    <section class="w3l-wecome-content-6" @if(app()->getLocale() == 'ar') dir="ltr" @endif>
        <!-- /content-6-section -->
        <div class="ab-content-6-mian py-5">
            <div class="container py-lg-5">
                <div class="welcome-grids row">
                    <div class="col-lg-6 mb-lg-0 mb-5">
                        <h3 class="hny-title">{{$data["about"]->title}}</h3>
                            {!! $data["about"]->text !!}
                        <div class="read">
                            <a href="#" class="read-more btn">@lang('front.shop-now')</a>
                        </div>
                    </div>
                    <div class="col-lg-6 welcome-image">
                        <img src="{{asset_public('storage/uploads/'.$data["about"]->image)}}" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </div>
    </section>
    <section class="w3l-specification-6">
        <!-- /specification-6-->
        <div class="specification-6-mian py-5">
            <div class="container py-lg-5">
                <div class="row story-6-grids text-left">
                    <div class="col-lg-5 story-gd">
                        <img src="{{asset_public('front/assets/images/excited.png')}}" class="img-fluid" alt="/" style="max-width: 110% !important; position: relative;top: 27px;height: 550px;left: 60px;">
                    </div>
                    <div class="col-lg-7 story-gd pl-lg-4">
                        <h3 class="hny-title">@lang('front.what-we')<span>@lang('front.offer')</span></h3>
                        <p>@lang('front.ostora-for-industry')</p>

                        <div class="row story-info-content mt-md-5 mt-4">

                            <div class="col-md-6 story-info">
                                <h5> <a href="javascript:void(0)">@lang('front.Visit-Factory')</a></h5>
                                <p>@lang('front.visit-store')</p>


                            </div>
                            <div class="col-md-6 story-info">
                                <h5> <a href="javascript:void(0)">@lang('front.Ostora-vision')</a></h5>
                                <p>@lang('front.company-offer')</p>
                            </div>
                            <div class="col-md-6 story-info">
                                <h5> <a href="javascript:void(0)">@lang('front.Ostora-mission')</a></h5>
                                <p>@lang('front.company-needs')</p>
                            </div>
                            <div class="col-md-6 story-info">
                                <h5> <a href="javascript:void(0)">@lang('front.Ostora-unique')</a></h5>
                                <p>@lang('front.Ostora-unique-text')</p>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- //specification-6-->

    <section class="w3l-services-6">
        <!-- /content-6-section -->
        <div class="services-grids-6 py-5">
            <div class="container py-lg-5">
                <div class="row w3-icon-grid-gap1">
                    <div class="col-md-6 w3-icon-grid1">
                        <a href="#link">
                            <span class="fa fa-codepen" aria-hidden="true"></span>
                            <h3>Let your footwear do the talking</h3>
                            <div class="clearfix"></div>
                        </a>
                        <p>Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
                    </div>
                    <div class="col-md-6 w3-icon-grid1">
                        <a href="#link">
                            <span class="fa fa-mobile" aria-hidden="true"></span>
                            <h3>Trendy celebrity collections</h3>
                            <div class="clearfix"></div>
                        </a>
                        <p>Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
                    </div>
                    <div class="col-md-6 w3-icon-grid1">
                        <a href="#link">
                            <span class="fa fa-hourglass" aria-hidden="true"></span>
                            <h3>Animation</h3>
                            <div class="clearfix"></div>
                        </a>
                        <p>Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
                    </div>
                    <div class="col-md-6 w3-icon-grid1">
                        <a href="#link">
                            <span class="fa fa-modx" aria-hidden="true"></span>
                            <h3>Vast collection of Sports shoes</h3>
                            <div class="clearfix"></div>
                        </a>
                        <p>Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
                    </div>
                    <div class="col-md-6 w3-icon-grid1">
                        <a href="#link">
                            <span class="fa fa-bar-chart" aria-hidden="true"></span>
                            <h3>Uniquely designed collection</h3>
                            <div class="clearfix"></div>
                        </a>
                        <p>Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
                    </div>
                    <div class="col-md-6 w3-icon-grid1">
                        <a href="#link">
                            <span class="fa fa-shopping-bag" aria-hidden="true"></span>
                            <h3>
                                High Quality Footwear</h3>
                            <div class="clearfix"></div>
                        </a>
                        <p>Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- //content-6-section -->
    <section class="features-4">
        <div class="features4-block py-5">
            <div class="container py-lg-5">
                <h6>We are the best</h6>
                <h3 class="hny-title text-center">What We <span>Offering</span></h3>

                <div class="features4-grids text-center row mt-5">
                    <div class="col-lg-3 col-md-6 features4-grid">
                        <div class="features4-grid-inn">
                            <span class="fa fa-bullhorn icon-fea4" aria-hidden="true"></span>
                            <h5><a href="#URL">Call Us Anytime</a></h5>
                            <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 features4-grid sec-features4-grid">
                        <div class="features4-grid-inn">
                            <span class="fa fa-truck icon-fea4" aria-hidden="true"></span>
                            <h5><a href="#URL">Free Shipping</a></h5>
                            <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 features4-grid">
                        <div class="features4-grid-inn">
                            <span class="fa fa-recycle icon-fea4" aria-hidden="true"></span>
                            <h5><a href="#URL">Free Returns</a></h5>
                            <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 features4-grid">
                        <div class="features4-grid-inn">
                            <span class="fa fa-money icon-fea4" aria-hidden="true"></span>
                            <h5><a href="#URL">Secured Payments</a></h5>
                            <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-4 -->

    <!--/team-sec-->
    <section class="w3l-team-main">
        <div class="team py-5">
            <div class="container py-lg-5">
                <h3 class="hny-title text-center">
                    Meet the  <span>Team</span></h3>
                <div class="row team-row mt-5">
                    <div class="col-lg-4 col-sm-6 mb-lg-0 mb-4 team-wrapper position-relative">
                        <a href="#"><img src="{{asset_public('front/assets/images/team1.jpg')}}" class="team_member img-fluid" alt="Team Member"></a>
                        <div class="team_info mt-3 position-absolute">
                            <h3><a href="#" class="team_name">Suzan Lois</a></h3>
                            <span class="team_role">Founder & CEO</span>
                            <ul class="team-social mt-3">
                                <li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end team member -->

                    <div class="col-lg-4 col-sm-6 mb-lg-0 mb-4 team-wrapper position-relative">
                        <a href="#"><img src="{{asset_public('front/assets/images/team2.jpg')}}" class="team_member img-fluid" alt="Team Member"></a>
                        <div class="team_info mt-3 position-absolute">
                            <h3><a href="#" class="team_name">Suzan Kin</a></h3>
                            <span class="team_role">Designer</span>
                            <ul class="team-social mt-3">
                                <li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end team member -->
                    <div class="col-lg-4 col-sm-6 team-wrapper position-relative">
                        <a href="#"><img src="{{asset_public('front/assets/images/team3.jpg')}}" class="team_member img-fluid" alt="Team Member"></a>
                        <div class="team_info mt-3 position-absolute">
                            <h3><a href="#" class="team_name">Kin Lois</a></h3>
                            <span class="team_role">Marketing</span>
                            <ul class="team-social mt-3">
                                <li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end team member -->
                </div>
            </div>
    </section>
    <!--//team-sec-->

@endsection

