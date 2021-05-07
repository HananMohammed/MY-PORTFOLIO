<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-newsletter" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Download App</h4>
                    <p>COOMING SOON</p>

                    <a href="#about" class="btn-get-started" > Download Now </a>



                </div>

            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{route('front.homepage')}}">
                        <img src="{{asset_public('storage/uploads/'.$data["setting"][0]->image)}}" style=" padding: 0;margin: 0;max-height: 56px;" >
                    </a>

                        <div class="footer-contact1">
                            <label for="#addresses"><strong >@lang('front.address')</strong></label>
                            <ul style="list-style-type: none;" id="addresses">
                                @foreach($data["addresses"] as $address)
                                    <li>{{$address->address}}</li>
                                @endforeach
                            </ul>
                        </div>
                    <div  class="footer-contact1">

                        <label for="#phones"><strong>@lang('front.phone')</strong></label>
                        <ul style="list-style-type: none;" id="phones">
                            @foreach($data["phones"] as $phone)
                                <li>
                                    <a href="tel:{{$phone->phone}}" style="font-size:13px;color: #212529;">{{$phone->phone}}</a>
                                </li>
                            @endforeach
                        </ul>
                        <label for="#emails"><strong>@lang('front.email2')</strong></label>
                        <ul style="list-style-type: none;" id="emails">
                            @foreach($data["emails"] as $email)
                                <li>
                                    <a href="mailto:{{$email->email}}" style="font-size:13px;color: #212529;" >{{$email->email}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
                    <h4>@lang('front.useful')</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">@lang('front.home')</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about">@lang('front.about')</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">@lang('front.services')</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">@lang('front.project')</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#team">@lang('front.team')</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#contact">@lang('front.contact')</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
                    <h4>@lang('front.our-services')</h4>
                    <ul>
                        @foreach($data["services"] as $service)
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">{{ $service->title }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="400">
                    <h4>@lang('front.social-network')</h4>
                    <p>@lang('front.specialized')</p>
                    <div class="social-links mt-3">
                        @foreach($data["socialMedia"] as $social)
                             <a href="{{$social->url}}"  target="blank" class="social-media" >  {!! $social->icon()->pluck('icon')[0] !!} </a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Hanan Mohamed</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed and Developed by <a href="{{route('front.homepage')}}">Hanan Mohamed</a>
        </div>
    </div>
</footer>
<!-- End Footer -->
