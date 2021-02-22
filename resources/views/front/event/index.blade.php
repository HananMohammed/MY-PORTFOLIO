@extends('front.layouts.app')
@section('title',__('front.events'))
@section('content')
    @php
        $text = 'text_'.app()->getLocale();
        $title = 'title_'.app()->getLocale();
        $time = 'time_'.app()->getLocale();
    @endphp
<!--Breadcrumb start-->
<div class="ed_pagetitle">
    <div class="ed_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-6">
                <div class="page_title">
                    <h2>@lang('front.future-event')</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="{{route('front.homepage')}}">@lang('front.homepage')</a></li>
                    <li><i class="fa fa-chevron-left"></i></li>
                    <li><a href="javascript:void(0)">@lang('front.future-event')</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->
<!--Single content start-->
<div class="ed_single_wrapper ed_toppadder80 ed_bottompadder80">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="on_map ed_btn ed_green">@lang('front.show-map')</div>
                        <div class="on_image ed_btn ed_green" style="display:none;">@lang('front.show-img')</div>
                    </div>
                    <!-- Section eleven start -->
                    <div class="ed_event_wrapper">
                        @foreach($events as $event)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ed_event_wrapper_item">
                                <div class="ed_event_wrapper_item_img">
                                    <img src="{{asset_public('front/assets/images/'.$event->image)}}" alt="item1" class="img-responsive">
                                </div>
                                <div class="ed_event_wrapper_item_description">
                                    <h4>{{$event->$title}}</h4>
                                    <span>{{$event->$time}}</span>
                                    <p>{!! substr(strip_tags($event->$text), 0, 150) !!}</p>
                                    <a href="{{route('front.events_single',["id" => $event->id, "slug"=>Illuminate\Support\Str::slug($event->title_en) ])}}" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div>
                        <div class="ed_blog_bottom_pagination">
                            {{$events->links()}}
                        </div>
                    </div>
                </div>
                <!-- Section eleven end -->
            </div>
            <!--Sidebar Start-->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="sidebar_wrapper">
                    <aside class="widget widget_categories">
                        <h4 class="widget-title">@lang('front.other_events')</h4>
                        <ul>
                            @foreach($events as $event)
                                <li><a style="font-size: 12px"  href="{{route('front.events_single',["id" => $event->id, "slug"=>Illuminate\Support\Str::slug($event->title_en) ])}}"><i class="fa fa-chevron-right"></i>{{$event->$title}}</a></li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
            </div>
            <!--Sidebar End-->
        </div>
    </div>
</div>
<!--Single content end-->
<!--skill section start -->
<div class="ed_graysection ed_toppadder90 ed_bottompadder90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="skill_section">
                    <h4><a href="#">See our events gallery</a></h4>
                    <p>We excell in multiple areas, but there are some in which we are absolutely rocking.</p>
                    <span><i class="fa fa-file-image-o"></i></span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="skill_section">
                    <h4><a href="#">Want to be a volunteer? <i class="fa fa-long-arrow-right"></i></a></h4>
                    <p>Not a member yet? You need to download this sign-in sheet and make sure you become one.</p>
                    <span><i class="fa fa-user"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--skill section end -->
@endsection
