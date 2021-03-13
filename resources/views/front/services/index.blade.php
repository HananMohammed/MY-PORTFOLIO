<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>@lang('front.our-services')</h2>
            <p>@lang('front.check-out')</p>
        </div>

        <div class="row">
            @foreach($data["services"] as $service)
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon">
                            <div class="service-img-color">
                                <img src="{{asset_public('storage/uploads/'.$service->image)}}" class="img-fluid" alt="seo">
                            </div>
                        </div>
                        <h4 class="title"><a href="#">{{ $service->title }}</a></h4>
                        <p class="description">{!! $service->text !!}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
<!-- End Services Section -->
