<section class="site-section about-us-section" id="about-us-section">
    <div class="container">

        <div class="row mb-5 pt-0 site-section">
            <div class="col-md-6 align-self-center">
                <h3 class="section-title-sub text-primary">{{$about->title}}</h3>
                <h2 class="section-title mb-4">{{$about->sub_title}}</h2>

                <p>{!!$about->description!!}</p>
                {{-- <p class="mt-4"><a href="#" class="spepcial_link">Read more about us</a></p> --}}
            </div>
            <div class="col-md-5 ml-auto img-overlap">
                <div class="img-1"><img src="{{asset($about->image_1)}}" alt="Image" class="img-fluid img-shadow"></div>
                <div class="img-2"><img src="{{asset($about->image_2)}}" alt="Image" class="img-fluid img-shadow"></div>
            </div>
        </div>

        <div class="row pb-0 border-top pt-5 block__19738 section-counter">

            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <span class="icon-line-mobile mr-3"></span>
                    <strong class="number" data-number="2393">0</strong>
                </div>
                <span class="caption">Completed Projects</span>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <span class="icon-line-lightbulb mr-3"></span>
                    <strong class="number" data-number="54">0</strong>
                </div>
                <span class="caption">Winners &amp; Awards</span>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <span class="icon-line-trophy mr-3"></span>
                    <strong class="number" data-number="120">0</strong>
                </div>
                <span class="caption">Number of Team</span>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <span class="icon-line-puzzle mr-3"></span>
                    <strong class="number" data-number="550">0</strong>
                </div>
                <span class="caption">Line of Codes</span>
            </div>


        </div>

    </div>
</section>