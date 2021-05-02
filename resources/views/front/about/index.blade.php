<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="row justify-content-between">
            <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                <img src="{{asset_public('storage/uploads/'.$data["about"]->image)}}" class="img-fluid img2" alt="" style="height: 400px;" data-aos="zoom-in">
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
                <h3 data-aos="fade-up">{{ $data["about"]->title }}</h3>
                <p data-aos="fade-up" data-aos-delay="100">{!! $data["about"]->text !!}</p>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <svg id="Capa_1"  class="mb-3"  enable-background="new 0 0 512 512" height="70" viewBox="0 0 512 512" width="70" xmlns="http://www.w3.org/2000/svg"><g><g><g><path d="m33.225 101.822c-4.268 0-7.726-3.459-7.726-7.726v-39.087c0-4.268 3.459-7.726 7.726-7.726h22.23c2.476 0 4.802 1.186 6.256 3.191l5.2 7.172c2.504 3.455 1.734 8.286-1.72 10.791-3.454 2.504-8.285 1.734-10.791-1.72l-2.886-3.981h-10.563v31.36c0 4.267-3.458 7.726-7.726 7.726z" fill="#e49542"/></g><g><path d="m96.774 101.822c-4.268 0-7.726-3.459-7.726-7.726v-39.087c0-4.268 3.459-7.726 7.726-7.726h22.231c2.476 0 4.802 1.186 6.256 3.191l5.2 7.172c2.504 3.455 1.734 8.286-1.72 10.791-3.454 2.504-8.285 1.734-10.791-1.72l-2.886-3.981h-10.563v31.36c0 4.267-3.459 7.726-7.727 7.726z" fill="#e49542"/></g><g><path d="m160.325 101.822c-4.268 0-7.726-3.459-7.726-7.726v-39.087c0-4.268 3.459-7.726 7.726-7.726h22.231c2.476 0 4.802 1.187 6.256 3.191l5.199 7.172c2.505 3.456 1.734 8.287-1.72 10.791s-8.287 1.734-10.791-1.72l-2.885-3.981h-10.563v31.36c-.001 4.267-3.46 7.726-7.727 7.726z" fill="#e49542"/></g><g><path d="m223.875 101.822c-4.268 0-7.726-3.459-7.726-7.726v-39.087c0-4.268 3.459-7.726 7.726-7.726h22.23c2.476 0 4.802 1.186 6.256 3.191l5.2 7.172c2.504 3.455 1.734 8.286-1.72 10.791-3.454 2.504-8.285 1.734-10.791-1.72l-2.886-3.981h-10.562v31.36c-.001 4.267-3.459 7.726-7.727 7.726z" fill="#e49542"/></g><g><path d="m287.424 101.822c-4.268 0-7.726-3.459-7.726-7.726v-39.087c0-4.268 3.459-7.726 7.726-7.726h22.231c2.476 0 4.802 1.186 6.256 3.191l5.2 7.172c2.504 3.455 1.734 8.286-1.72 10.791-3.455 2.504-8.285 1.734-10.791-1.72l-2.886-3.981h-10.563v31.36c0 4.267-3.459 7.726-7.727 7.726z" fill="#e49542"/></g></g><path d="m463.436 383.773h-451.647c-6.511 0-11.789-5.278-11.789-11.789v-276.401c0-6.511 5.278-11.789 11.789-11.789h451.647c6.511 0 11.789 5.278 11.789 11.789v276.402c0 6.51-5.278 11.788-11.789 11.788z" fill="#ffe07d"/><path d="m463.436 83.794h-26.27c6.511 0 11.789 5.278 11.789 11.789v276.402c0 6.511-5.278 11.789-11.789 11.789h26.27c6.511 0 11.789-5.278 11.789-11.789v-276.402c0-6.511-5.278-11.789-11.789-11.789z" fill="#ffd064"/><path d="m421.66 193.783h-264.078c-4.752 0-8.604-3.852-8.604-8.604v-29.56c0-4.752 3.852-8.604 8.604-8.604h264.078c4.752 0 8.604 3.852 8.604 8.604v29.56c-.001 4.752-3.853 8.604-8.604 8.604z" fill="#df73c1"/><path d="m421.66 147.016h-21.669c4.752 0 8.603 3.852 8.603 8.603v29.56c0 4.752-3.852 8.603-8.603 8.603h21.669c4.752 0 8.604-3.852 8.604-8.603v-29.56c-.001-4.751-3.852-8.603-8.604-8.603z" fill="#dd4fb1"/><path d="m74.308 225.088-28.805-63.452c-1.041-2.294-.551-4.993 1.23-6.774l28.805-28.805c2.361-2.361 6.189-2.361 8.55 0l28.805 28.805c1.781 1.781 2.271 4.48 1.23 6.774l-28.805 63.452c-2.146 4.729-8.863 4.729-11.01 0z" fill="#e7a561"/><path d="m112.894 154.861-28.806-28.805c-2.361-2.361-6.189-2.361-8.55 0l-10.708 10.708 21.958 21.958c1.781 1.781 2.271 4.48 1.23 6.774l-20.382 44.897 6.671 14.695c2.147 4.729 8.864 4.729 11.011 0l28.805-63.452c1.042-2.294.552-4.993-1.229-6.775z" fill="#e49542"/><g><path d="m427.321 241.51h-275.4c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h275.399c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.725 7.726z" fill="#2b4d66"/></g><g><path d="m427.321 276.709h-275.4c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h275.399c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.725 7.726z" fill="#2b4d66"/></g><g><g><path d="m427.321 332.511h-100.272c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h100.272c4.268 0 7.726 3.459 7.726 7.726s-3.459 7.726-7.726 7.726z" fill="#2b4d66"/></g><g><path d="m252.193 332.511h-100.272c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h100.272c4.268 0 7.726 3.459 7.726 7.726s-3.459 7.726-7.726 7.726z" fill="#2b4d66"/></g></g><g><path d="m96.987 276.709h-34.347c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h34.347c4.268 0 7.726 3.459 7.726 7.726s-3.459 7.726-7.726 7.726z" fill="#2b4d66"/></g><g><path d="m504.719 122.946h-116.664c-1.81 0-3.556.675-4.896 1.892l-30.212 27.447c-4.678 4.25-12.177.931-12.177-5.389v-23.95-115.665c0-4.021 3.26-7.281 7.281-7.281h156.668c4.021 0 7.281 3.26 7.281 7.281v108.383c0 4.022-3.26 7.282-7.281 7.282z" fill="#9dc6fb"/><g><path d="m504.719 0h-29.494c4.021 0 7.281 3.26 7.281 7.281v108.383c0 4.021-3.26 7.281-7.281 7.281h29.494c4.021 0 7.281-3.26 7.281-7.281v-108.383c0-4.021-3.26-7.281-7.281-7.281z" fill="#80b4fb"/></g><g><g><path d="m458.213 51.856h-63.656c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h63.656c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.726 7.726z" fill="#2b4d66"/></g><g><path d="m458.213 86.542h-63.656c-4.268 0-7.726-3.459-7.726-7.726 0-4.268 3.459-7.726 7.726-7.726h63.656c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.726 7.726z" fill="#2b4d66"/></g></g></g><path d="m310.686 427.251h-146.147c-4.827 0-8.739-3.913-8.739-8.739v-34.738h163.625v34.738c0 4.826-3.912 8.739-8.739 8.739z" fill="#dddaec"/><path d="m295.161 383.773v34.738c0 4.827-3.913 8.739-8.739 8.739h24.264c4.826 0 8.739-3.913 8.739-8.739v-34.738z" fill="#d0cee7"/><path d="m288.669 427.251h-102.113v76.327c0 4.652 3.771 8.422 8.422 8.422h85.269c4.652 0 8.422-3.771 8.422-8.422z" fill="#365e7d"/><path d="m186.556 427.251v17.788h58.85c12.625 0 22.86 10.235 22.86 22.86v44.101h11.981c4.652 0 8.422-3.771 8.422-8.422v-76.327z" fill="#2b4d66"/></g></svg>
                        <ul class="list-unstyled">
                            <li class="py-1">
                                <span class="pr-1 contact-svg">
                                    <svg version="1.1" id="Layer_1" fill="#eb5d1e" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" width="8%" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M256,0C161.896,0,85.333,76.563,85.333,170.667c0,28.25,7.063,56.26,20.49,81.104L246.667,506.5
                                                    c1.875,3.396,5.448,5.5,9.333,5.5s7.458-2.104,9.333-5.5l140.896-254.813c13.375-24.76,20.438-52.771,20.438-81.021
                                                    C426.667,76.563,350.104,0,256,0z M256,256c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333
                                                    s85.333,38.281,85.333,85.333C341.333,217.719,303.052,256,256,256z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                @foreach($data["addresses"] as $address)
                                <span style="font-size:13px;font-weight: 600;color: #7a6960;">{{ $address->address }}</span>
                                @endforeach
                            </li>

                            <li class="py-1">
                                <span class="pr-1">
                                <svg version="1.1" id="Capa_1" fill="#eb5d1e" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 230.17 230.17" width="8%" xml:space="preserve">
                                    <g>
                                        <path d="M230,49.585c0-0.263,0.181-0.519,0.169-0.779l-70.24,67.68l70.156,65.518c0.041-0.468-0.085-0.94-0.085-1.418V49.585z"></path>
                                        <path d="M149.207,126.901l-28.674,27.588c-1.451,1.396-3.325,2.096-5.2,2.096c-1.836,0-3.672-0.67-5.113-2.013l-28.596-26.647
                                            L11.01,195.989c1.717,0.617,3.56,1.096,5.49,1.096h197.667c2.866,0,5.554-0.873,7.891-2.175L149.207,126.901z"></path>
                                        <path d="M115.251,138.757L222.447,35.496c-2.427-1.443-5.252-2.411-8.28-2.411H16.5c-3.943,0-7.556,1.531-10.37,3.866
                                            L115.251,138.757z"></path>
                                        <path d="M0,52.1v128.484c0,1.475,0.339,2.897,0.707,4.256l69.738-67.156L0,52.1z"></path>
                                    </g>
                                </svg>
                                </span>
                            @foreach($data["emails"] as $email)
                                <span>
                                    <a href="mailto:{{$email->email}}" style="font-size:13px;font-weight: 600;color: #7a6960;">{{ $email->email }}</a>
                                </span>
                             @endforeach
                            </li>
                            <li class="py-1">
                                    <span class="pr-1">
                                        <svg version="1.1" id="Capa_1" fill="#eb5d1e" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 384 384" width="8%" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M362.667,266.667c-26.56,0-52.267-4.267-76.16-12.16c-7.36-2.347-15.787-0.64-21.653,5.227l-46.933,47.04
                                                        c-60.48-30.72-109.867-80.107-140.587-140.48l46.933-47.147c5.867-5.867,7.573-14.293,5.227-21.653
                                                        c-7.893-23.893-12.16-49.6-12.16-76.16C117.333,9.493,107.84,0,96,0H21.333C9.6,0,0,9.493,0,21.333
                                                        C0,221.653,162.347,384,362.667,384c11.84,0,21.333-9.493,21.333-21.333V288C384,276.16,374.507,266.667,362.667,266.667z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                @foreach($data["phones"] as $phone)
                                <span><a href="tel:{{$phone->phone}}"  @if($loop->index !== 0 ) class = "contact-phone"@endif style="font-size:13px;font-weight: 600;color: #7a6960;">{{ $phone->phone }}</a></span>
                                @endforeach
                            </li>
                        </ul>
                     </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <svg id="Layer_1" class="mb-3" enable-background="new 0 0 510 510" height="70" viewBox="0 0 510 510" width="70" xmlns="http://www.w3.org/2000/svg"><g id="XMLID_3021_"><path id="XMLID_3126_" d="m208.402 313.57c5.639-9.089 46.598-75.106 46.598-75.106l10-16.215-10-12.236s-8.288-5.143-12.746-7.908c-8.946 14.419-64.594 104.108-73.557 118.557 4.457 2.766 8.288 5.143 12.746 7.908v15h73.557l10-16.32-10-13.68s-31.767 0-46.598 0z" fill="#e2dff4"/><path id="XMLID_3125_" d="m328.557 328.57c4.458-2.766 8.289-5.143 12.746-7.908-8.946-14.42-64.593-104.109-73.557-118.557-4.458 2.766-8.288 5.142-12.746 7.908v28.451c5.639 9.089 40.922 65.957 46.598 75.106-14.831 0-31.767 0-46.598 0v30h73.557c0-5.246 0-9.754 0-15z" fill="#bebcdd"/><path id="XMLID_3201_" d="m0 397.486c0 62.031 50.465 112.5 112.5 112.5l15-112.5-15-112.5c-62.031 0-112.5 50.466-112.5 112.5z" fill="#bfe85f"/><path id="XMLID_3197_" d="m225 397.486c0-62.03-50.466-112.5-112.5-112.5v225c62.03 0 112.5-50.464 112.5-112.5z" fill="#00cb76"/><path id="XMLID_3192_" d="m30 397.486c0 20.873 7.845 40.691 21.916 55.924l75.584-55.924-15-82.5c-45.49 0-82.5 37.009-82.5 82.5z" fill="#f9f9f9"/><path id="XMLID_3189_" d="m173.084 453.41c14.05-15.21 21.916-35.019 21.916-55.924 0-45.488-37.008-82.5-82.5-82.5v82.5z" fill="#e2dff4"/><path id="XMLID_3186_" d="m51.916 453.41c15.586 16.873 37.377 26.576 60.584 26.576l15-32.5-15-32.5c-26.664 0-49.812 15.678-60.584 38.424z" fill="#a7cafc"/><path id="XMLID_3140_" d="m173.084 453.41c-10.771-22.746-33.919-38.424-60.584-38.424v65c23.159 0 44.965-9.669 60.584-26.576z" fill="#8493fb"/><path id="XMLID_3109_" d="m65 397.486c0 26.191 21.308 47.5 47.5 47.5l15-47.5-15-47.5c-26.191 0-47.5 21.309-47.5 47.5z" fill="#edbba7"/><path id="XMLID_3089_" d="m160 397.486c0-26.19-21.308-47.5-47.5-47.5v95c.285-.06 18.497 1.147 33.572-13.928 8.601-8.601 13.928-20.476 13.928-33.572z" fill="#e8a38b"/><path id="XMLID_3265_" d="m285 397.486c0 62.031 50.465 112.5 112.5 112.5l15-112.5-15-112.5c-62.031 0-112.5 50.466-112.5 112.5z" fill="#dd4e4e"/><path id="XMLID_3262_" d="m510 397.486c0-62.03-50.466-112.5-112.5-112.5v225c62.03 0 112.5-50.464 112.5-112.5z" fill="#c21456"/><path id="XMLID_3259_" d="m315 397.486c0 20.873 7.845 40.691 21.916 55.924l75.584-55.924-15-82.5c-45.49 0-82.5 37.009-82.5 82.5z" fill="#f9f9f9"/><path id="XMLID_3256_" d="m458.084 453.41c14.05-15.21 21.916-35.019 21.916-55.924 0-45.488-37.008-82.5-82.5-82.5v82.5z" fill="#e2dff4"/><path id="XMLID_3253_" d="m336.916 453.41c15.586 16.873 37.377 26.576 60.584 26.576l15-32.5-15-32.5c-26.664 0-49.811 15.678-60.584 38.424z" fill="#f4d844"/><path id="XMLID_3246_" d="m458.084 453.41c-10.772-22.746-33.919-38.424-60.584-38.424v65c23.159 0 44.965-9.669 60.584-26.576z" fill="#ecbd2c"/><path id="XMLID_3230_" d="m350 397.486c0 26.191 21.308 47.5 47.5 47.5l15-47.5-15-47.5c-26.191 0-47.5 21.309-47.5 47.5z" fill="#edbba7"/><path id="XMLID_3208_" d="m445 397.486c0-26.19-21.308-47.5-47.5-47.5v95c.285-.06 18.497 1.147 33.572-13.928 8.601-8.601 13.928-20.476 13.928-33.572z" fill="#e8a38b"/><g id="XMLID_3019_"><path id="XMLID_3114_" d="m142.5 112.514c0 62.03 50.466 112.5 112.5 112.5l15-112.5-15-112.5c-62.031 0-112.5 50.465-112.5 112.5z" fill="#4e6ba6"/><path id="XMLID_3113_" d="m367.5 112.514c0-62.031-50.466-112.5-112.5-112.5v225c62.031 0 112.5-50.467 112.5-112.5z" fill="#28487a"/><path id="XMLID_3104_" d="m172.5 112.514c0 20.872 7.846 40.69 21.916 55.922l75.584-55.922-15-82.5c-45.489 0-82.5 37.007-82.5 82.5z" fill="#f9f9f9"/><path id="XMLID_3103_" d="m315.584 168.436c14.051-15.209 21.916-35.018 21.916-55.922 0-45.489-37.008-82.5-82.5-82.5v82.5z" fill="#e2dff4"/><path id="XMLID_3088_" d="m194.416 168.436c15.586 16.873 37.378 26.578 60.584 26.578l15-32.5-15-32.5c-26.664 0-49.811 15.676-60.584 38.422z" fill="#dd4e4e"/><path id="XMLID_3087_" d="m315.584 168.436c-10.772-22.744-33.919-38.422-60.584-38.422v65c23.159 0 44.965-9.67 60.584-26.578z" fill="#c21456"/><path id="XMLID_3086_" d="m207.5 112.514c0 26.19 21.308 47.5 47.5 47.5l15-47.5-15-47.5c-26.19 0-47.5 21.307-47.5 47.5z" fill="#edbba7"/><path id="XMLID_3085_" d="m302.5 112.514c0-26.191-21.308-47.5-47.5-47.5v95c.285-.062 18.497 1.146 33.572-13.929 8.601-8.601 13.928-20.476 13.928-33.571z" fill="#e8a38b"/></g></g></svg>
                        <ul class="list-unstyled social-data mt-1">
                            <li>
                                @foreach($data["socialMedia"] as $socialMedia)
                                <a href="{{ $socialMedia->url }}" target="blank" class="social-media">
                                    {!! $socialMedia->icon()->pluck('icon')[0] !!}
                                </a>
                                @endforeach
                            </li>
                        </ul>
                        <a data-aos="fade-up" href="https://drive.google.com/file/d/1dz7jCF0JwCm226RoDZX-erAiQJzm__hA/view?usp=sharing" target="_blank" class="btn-get-started scrollto aos-init aos-animate">@lang('front.download-cv')</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End About Section -->

