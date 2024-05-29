@extends('frontend.layouts.layout')

@section('content')
    <!-- HOME -->
    <section class="home-section section-hero overlay slanted" id="home-section">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 text-center">
                    <h1>Portfolio</h1>
                    <div class="mx-auto w-75">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aperiam eveniet vitae
                            mollitia nemo.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- VIDEO -->
        <div class="video-container">
            <video autoplay loop="true">
                <source type="video/mp4" src="videos/video.mp4">
            </video>
        </div>

        <a href="#next-section" class="smoothscroll scroll-button">
            <span class=" icon-keyboard_arrow_down"></span>
        </a>

    </section>

    <section class="site-section block__45439">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade">
                    <h3 class="section-title-sub text-primary">Read the latest post</h3>
                    <h2 class="section-title mb-3">Blog Posts</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="block__86547 d-block d-xl-flex align-items-stretch">
                        <figure class="img" style="background-image: url('images/sq_img_1.jpg')">
                        </figure>
                        <div class="h-100">
                            <h3 class="mb-4"><a href="#">Undefined: The Third Boolean Values</a></h3>
                            <div class="block__27192 d-flex pt-1 border-top">
                                <a href="#"><span class="icon-person"></span> Jacob Smith</a>
                                <a href="#"><span class="icon-calendar-o"></span> 7 Apr 2019</a>
                                <a href="#"><span class="icon-chat"></span> 2</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="block__86547 d-block d-xl-flex align-items-stretch">
                        <figure class="img" style="background-image: url('images/sq_img_2.jpg')">
                        </figure>
                        <div class="h-100">
                            <h3 class="mb-4"><a href="#">Where Do You Learn HTML & CSS in 2020?</a></h3>
                            <div class="block__27192 d-flex pt-1 border-top">
                                <a href="#"><span class="icon-person"></span> Jacob Smith</a>
                                <a href="#"><span class="icon-calendar-o"></span> 7 Apr 2019</a>
                                <a href="#"><span class="icon-chat"></span> 2</a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="block__86547 d-block d-xl-flex align-items-stretch">
                        <figure class="img" style="background-image: url('images/sq_img_4.jpg')">
                        </figure>
                        <div class="h-100">
                            <h3 class="mb-4"><a href="#">Where Do You Learn HTML & CSS in 2020?</a></h3>
                            <div class="block__27192 d-flex pt-1 border-top">
                                <a href="#"><span class="icon-person"></span> Jacob Smith</a>
                                <a href="#"><span class="icon-calendar-o"></span> 7 Apr 2019</a>
                                <a href="#"><span class="icon-chat"></span> 2</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="block__86547 d-block d-xl-flex align-items-stretch">
                        <figure class="img" style="background-image: url('images/sq_img_5.jpg')">
                        </figure>
                        <div class="h-100">
                            <h3 class="mb-4"><a href="#">Undefined: The Third Boolean Value</a></h3>
                            <div class="block__27192 d-flex pt-1 border-top">
                                <a href="#"><span class="icon-person"></span> Jacob Smith</a>
                                <a href="#"><span class="icon-calendar-o"></span> 7 Apr 2019</a>
                                <a href="#"><span class="icon-chat"></span> 2</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection