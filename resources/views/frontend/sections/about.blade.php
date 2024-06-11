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

        

    </div>
</section>