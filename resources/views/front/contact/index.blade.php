<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>@lang('front.contact')</h2>
            <p>@lang('front.contact-to-start')</p>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="info">
                    <div class="address">
                        <i class="icofont-google-map"></i>
                        <h4>@lang('front.location')</h4>
                        @foreach($data["addresses"] as $address)
                            <p>{{$address->address}}</p>
                        @endforeach
                    </div>

                    <div class="email">
                        <i class="icofont-envelope"></i>
                        <h4>@lang('front.email2')</h4>
                        @foreach($data["emails"] as $email)
                            <p>{{ $email->email }}</p>
                        @endforeach
                    </div>

                    <div class="phone">
                        <i class="icofont-phone"></i>
                        <h4>@lang('front.call')</h4>
                        @foreach($data["phones"] as $phone)
                            <p>{{ $phone->phone }}</p>
                        @endforeach
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110532.72974024108!2d31.44337506520266!3d30.032617220854974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583c1380cba7ef%3A0xd541260e9e06978d!2z2YXYr9mK2YbYqSDZhti12LHYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1613765050187!5m2!1sar!2seg" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" id="contact-form" data-aos="fade-up" data-aos-delay="200">
                <contact-form></contact-form>
            </div>

        </div>

    </div>
</section>
<!-- End Contact Us Section -->

