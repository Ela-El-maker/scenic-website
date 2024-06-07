<section class="site-section" id="next-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <a data-fancybox data-ratio="2" href="{{$experience->url}}" class="block__96788">
                    <span class="play-icon"><span class="icon-play"></span></span>
                    <img src="{{asset($experience->image)}}" alt="Image" class="img-fluid img-shadow">
                </a>
            </div>
            <div class="col-lg-5 ml-auto">
                <h3 class="section-title-sub text-primary">{{$experience->sub_title}}</h3>
                <h2 class="section-title mb-3">{{$experience->title}}</h2>
                <p class="lead">{!!$experience->description!!}</p>
            </div>
        </div>
    </div>
</section>