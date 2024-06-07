<section class="site-section services-section bg-light block__62849" id="services-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
                <h3 class="section-title-sub text-primary">{{$serviceTitle->title}}</h3>
                <h2 class="section-title mb-3">{{$serviceTitle->sub_title}}</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $item)
            <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

                <a href="{{route('show.service', $item->id)}}" class="block__16443 text-center d-block">
                    <span class="custom-icon mx-auto"><span class="{{$item->service_icon}}"></span></span>
                    <h3>{{$item->name}}</h3>
                    <p>{{$item->description}}</p>
                </a>

            </div>
            @endforeach
            
        </div>

        <div class="row">
            {{-- <div class="col-12 text-center">
                <a href="#" class="btn btn-primary btn-md">View All Services</a>
            </div> --}}
        </div>
    </div>
</section>