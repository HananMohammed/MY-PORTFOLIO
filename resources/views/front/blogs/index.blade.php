<!-- //content-6-section -->
<section class="w3l-post-grids-6">
    <!-- /post-grids-->
    <div class="post-6-mian py-5">
        <div class="container py-lg-5">
            <h3 class="hny-title text-center mb-0 ">@lang('front.latest-blog') <span>@lang('front.posts')</span></h3>
            <p class="mb-5 text-center">@lang('front.handpick')</p>
            <div class="post-hny-grids row mt-5">
                @foreach($data["blogs"] as $blog)
                <div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
                    <a href="#">
                        <figure>
                            <img class="img-fluid" src="{{asset_public('storage/uploads/'.$blog->image)}}" alt="blog-image">
                        </figure>
                    </a>

                    <div class="blog-thumbhny-caption">
                        <ul class="blog-info-list">
                            <li><a href="javascript:void(0)">{{ $blog->user()->pluck('name')[0] }}</a></li>
                            <li class="date-post" style="padding-right: 15px;">{{ $blog->created_at->format('Y-m-d') }}</li>
                        </ul>
                        <h4><a href="javascript:void(0)">{{$blog->title}}</a></h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
