@extends('frontend.layouts.layout')

@section('content')
    <!-- HOME -->
    <section class="home-section section-hero image-bg overlay-2 slanted"
        style="background-image: url('{{ asset($portfolio->image) }}')" id="home-section">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 text-center">
                    <h1>{{ $portfolio->title }}</h1>
                    <div class="mx-auto w-75">
                        <p>{{ $portfolio->sub_title }}</p>
                    </div>
                </div>
            </div>
        </div>


        <a href="#next-section" class="smoothscroll scroll-button">
            <span class=" icon-keyboard_arrow_down"></span>
        </a>

    </section>

    <section class="site-section portfolio-single" id="next-section">

        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <p>{!! $portfolio->description !!}</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <strong class="d-block text-black">Client</strong>
                    {{ $portfolio->client }}
                </div>
                <div class="col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <strong class="d-block text-black">Category</strong>
                    {{ $portfolio->category->name }}
                </div>
                <div class="col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <strong class="d-block text-black">Year Started</strong>
                    {{ date('d M, Y', strtotime($portfolio->created_at)) }}
                </div>
                <div class="col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <strong class="d-block text-black">Website URL</strong>
                    <a href="#" class="spepcial_link"><a
                            href="{{ $portfolio->website }}">{{ $portfolio->website }}</a></a>
                </div>
            </div>
            <div class="row mb-5 mt-5">

                <div class="col-lg-6">
                    <figure>
                        <a href="{{ asset($portfolio->image_1) }}" data-fancybox="gallery"><img
                                src="{{ asset($portfolio->image_1) }}" alt="Image" class="img-fluid"></a>
                    </figure>
                    <figure>
                        <a href="{{ asset($portfolio->image_2) }}" data-fancybox="gallery"><img
                                src="{{ asset($portfolio->image_2) }}" alt="Image" class="img-fluid"></a>
                    </figure>
                    <figure class="mb-0">
                        <a href="{{ asset($portfolio->image_3) }}" data-fancybox="gallery"><img
                                src="{{ asset($portfolio->image_3) }}" alt="Image" class="img-fluid"></a>
                    </figure>
                </div>
                <div class="col-lg-5 ml-auto h-100 jm-sticky-top">
                    <div class="mb-5">
                        <h3 class="mb-4 h4">{{ $portfolio->project_sub_title }}</h3>

                        <p class="mb-0">{!! $portfolio->project_description_1 !!}</p>
                    </div>

                    {{-- <div class="block__87154 mb-0">
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
                    </div> --}}

                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2">
                    <figure class="mb-0">
                        <a href="{{ asset($portfolio->image_4) }}" data-fancybox="gallery"><img
                                src="{{ asset($portfolio->image_4) }}" alt="Image" class="img-fluid"></a>
                    </figure>
                </div>
                <div class="col-lg-5 mr-auto h-100 jm-sticky-top  order-2 order-lg-1">

                    <h3 class="mb-4 h4">{{ $portfolio->project_sub_title_1 }}</h3>
                    <p class="mb-0">{!! $portfolio->project_description_1 !!}</p>

                

                </div>
            </div>


        </div>
    </section>
    <section class=" py-3 site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <a href="#" class="py-3 rounded border d-block">Previous Project</a>
                </div>
                <div class="col-md-4 text-center">
                    <a href="#" class="py-3 rounded border d-block">All Projects</a>
                </div>
                <div class="col-md-4 text-center">
                    <a href="#" class="py-3 rounded border d-block">Next Project</a>
                </div>
            </div>
        </div>
    </section>
@endsection
