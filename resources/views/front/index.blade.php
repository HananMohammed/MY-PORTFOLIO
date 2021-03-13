@extends('front.layouts.app')
@section('title',__('front.home'))
@section('content')
    @include('front.slider.index')
    <main id="main">
        @include('front.about.index')
        @include('front.services.index')
    </main>
  @endsection
