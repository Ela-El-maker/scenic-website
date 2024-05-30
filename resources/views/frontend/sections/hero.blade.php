<section class="home-section section-hero overlay slanted" id="home-section" style="no-repeat scroll top center/cover">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                <h1>{{$hero->title}}</h1>
                <div class="mx-auto w-75">
                    <p>{{$hero->sub_title}}</p>
                </div>
                <p class="mt-5"><a href="{{$hero->btn_url}}" class="btn btn-outline-white btn-md ">{{$hero->btn_text}}</a></p>
            </div>
        </div>
    </div>

    <!-- VIDEO -->
    <div class="video-container">
        <video autoplay loop muted playsinline id="background-video">
            <source src="{{ asset($hero->video) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <a href="#about-us-section" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
    </a>

</section>