@extends('frontend.layouts.layout')

@section('content')
    <!-- HOME -->
    <section class="home-section section-hero overlay slanted" id="home-section">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 text-center">
                    <h1>{{ $service->name }}</h1>
                    <div class="mx-auto w-75">
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- VIDEO -->
        <div class="video-container">
          <video autoplay loop muted playsinline id="background-video">
            {{-- <source src="{{ asset($oneService->video) }}" type="video/mp4"> --}}
            Your browser does not support the video tag.
        </video>
        </div>

        <a href="#next-section" class="smoothscroll scroll-button">
            <span class=" icon-keyboard_arrow_down"></span>
        </a>

    </section>

    <section class="site-section block__18514" id="next-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mr-auto">
                    <div class="border p-4">
                        {{-- <ul class="list-unstyled block__47528 mb-0">
                  @foreach ($service as $item)
                    <li><span class="active">Graphic Design</span></li>
                  <li><a href="">{{$item->name}}</a></li>
                  @endforeach
                  
                </ul> --}}
                        <!-- VIDEO -->
                        <div class="video-container">
                          <video autoplay loop muted playsinline id="background-video">
                            {{-- <source src="{{ asset($oneService->video) }}" type="video/mp4"> --}}
                            {{-- Your browser does not support the video tag. --}}
                        </video>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <span class="text-primary d-block mb-5"><span class="icon-line-tools display-1"></span></span>
                    <h2 class="mb-4">{{ $service->name }}</h2>
                    <p>{!! $service->description !!}</p>
                    {{-- <p><a href="#" class="btn btn-primary btn-md mt-4">Hire Us, Our Agency</a></p> --}}
                </div>
                {{-- <div class="col-lg-6">
                    <figure>
                        <a href="{{asset($oneService->image)}}" data-fancybox="gallery"><img src="{{asset($oneService->image)}}" alt="Image"
                                class="img-fluid"></a>
                    </figure>
                    <figure>
                        <a href="images/quote.png" data-fancybox="gallery"><img src="images/quote.png" alt="Image"
                                class="img-fluid"></a>
                    </figure>
                    <figure class="mb-0">
                        <a href="images/quote.png" data-fancybox="gallery"><img src="images/quote.png" alt="Image"
                                class="img-fluid"></a>
                    </figure>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade">
                    <h3 class="section-title-sub text-primary">Testimonials</h3>
                    <h2 class="section-title mb-3">Happy People Says</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="block__87154">
                        <span class="quote"><img src="images/quote.png" alt="Image"></span>
                        <blockquote>
                            <p>Ipsum harum assumenda in eum vel eveniet numquam cumque vero vitae enim cupiditate deserunt
                                eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex asperiores
                                quisquam optio nostrum sit</p>
                        </blockquote>
                        <div class="block__91147 d-flex align-items-center">
                            <figure class="mr-4"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure>
                            <div>
                                <h3>Elisabeth Smith</h3>
                                <span class="position">Creative Director</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="block__87154">
                        <span class="quote"><img src="images/quote.png" alt="Image"></span>
                        <blockquote>
                            <p>Ipsum harum assumenda in eum vel eveniet numquam, cumque vero vitae enim cupiditate deserunt
                                eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex asperiores
                                quisquam optio nostrum sit</p>
                        </blockquote>
                        <div class="block__91147 d-flex align-items-center">
                            <figure class="mr-4"><img src="images/person_2.jpg" alt="Image" class="img-fluid"></figure>
                            <div>
                                <h3>Chris Peter</h3>
                                <span class="position">Web Designer</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
