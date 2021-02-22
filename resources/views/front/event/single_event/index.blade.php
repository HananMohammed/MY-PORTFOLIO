@extends('front.layouts.app')
@section('title',$event->title_en)
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
                    <h2>{{$event->$title}}</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="{{route('front.homepage')}}">@lang('front.homepage')</a></li>
                    <li><i class="fa fa-chevron-left"></i></li>
                    <li><a href="{{route('front.events')}}">@lang('front.future-event')</a></li>
                    <li><i class="fa fa-chevron-left"></i></li>
                    <li><a href="javascript:void(0)">{{$event->$title}}</a></li>
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
                <div class="ed_event_single_item">
                    <div class="ed_event_single_image">
                        <img src="{{asset_public('front/assets/images/'.$event->image)}}" alt="event image" />
                    </div>
                    <div class="ed_event_single_info">
                        <h2>{{$event->$title}}</h2>
                        <h5>{{$event->$time}}</h5>
                        <p>{{$event->$text}}</p>
                    </div>
                </div>
            </div>
            <!--Sidebar Start-->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="sidebar_wrapper">
{{--                    <aside class="widget widget_button">--}}
{{--                        <a href="#" data-toggle="modal" data-target="#invitation_form" class="ed_btn ed_green">send invitation</a>--}}
{{--                        <div class="modal fade" id="invitation_form">--}}
{{--                            <div class="modal-dialog">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header">--}}
{{--                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>--}}
{{--                                        <h4 class="modal-title">Invitation....</h4>--}}
{{--                                    </div>--}}
{{--                                    <form>--}}
{{--                                        <div class="modal-body">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label class="control-label">Your Name:</label>--}}
{{--                                                <input type="text" class="form-control" >--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label  class="control-label">Message:</label>--}}
{{--                                                <textarea rows="4" cols="50" class="form-control"></textarea>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="modal-footer">--}}
{{--                                            <button type="Submit" class="btn ed_btn ed_orange">send</button>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div><!-- /.modal-content -->--}}
{{--                            </div><!-- /.modal-dialog -->--}}
{{--                        </div><!-- /.modal -->--}}
{{--                    </aside>--}}
                    <aside class="widget widget_categories">
                        <h4 class="widget-title">@lang('front.other_events')</h4>
                        <ul>
                            @foreach($related_Events as $event)
                                <li><a style="font-size: 12px" href="{{route('front.events_single',["id" => $event->id, "slug"=>Illuminate\Support\Str::slug($event->title_en) ])}}"><i class="fa fa-chevron-right"></i>{{$event->$title}}</a></li>
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
<!--Section fifteen Contact form start-->
<div class="ed_event_single_contact_address ed_toppadder70 ed_bottompadder70">
    <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="row">
                <div class="ed_event_single_address_info ed_toppadder50 ed_bottompadder50">
                    <h4 class="ed_bottompadder30">@lang('front.contact info')</h4>
                    <p class="ed_bottompadder40 ed_toppadder10">You can always reach us via following contact details. We will give our best to reach you as possible.</p>
                    <p>@lang('front.Phone:') <span>1-220-090-080</span></p>
                    <p>@lang('front.Email:') <a href="#">info@edutioncollege.gov.co.uk</a></p>
                    <p>@lang('front.Website:') <a href="#">http://www.edutioncollege.gov.co.uk</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="row">
                <div class="ed_event_single_address_map">
                    <div id="map">
                        <div class="full-map2  overFl  ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1727.427552989413!2d31.286964!3d30.0123166!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c2934e8c13c2f8b!2z2KfZhNi02LHZiNmCINin2YPYp9iv2YrZhdmK!5e0!3m2!1sar!2seg!4v1607093101044!5m2!1sar!2seg" width="100%" style="height:350px;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--Section fifteen Contact form start-->
@endSection
