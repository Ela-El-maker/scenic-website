@extends('frontend.layouts.layout')

@section('content')
    <!-- HOME -->
    <section class="home-section section-hero overlay slanted" id="home-section">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 text-center">
                    <h1>Blogs</h1>
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
                @foreach ($blogs as $blog)
            <div class="col-md-6 col-lg-6 mb-4">
                <div class="block__86547 d-block d-xl-flex align-items-stretch">
                    <figure class="img" style="background-image: url('{{asset($blog->image)}}')">
                    </figure>
                    <div class="h-100">
                        <h3 class="mb-4"><a href="{{route('show.blog', $blog->id)}}">{{$blog->title}}</a></h3>
                        <div class="desc">
                            <p>{!! Str::limit(strip_tags($blog->description), 100) !!}</p>
                        </div>
                        <div class="block__27192 d-flex pt-1 border-top">
                            <a href="{{route('show.blog', $blog->id)}}"><span class="icon-list"></span> {{$blog->getCategory->name}}</a>
                            <a href="{{route('show.blog', $blog->id)}}"><span class="icon-calendar-o"> {{date('d M, Y | H:m', strtotime($blog->created_at))}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
                
            </div>
        </div>
    </section>




@endsection