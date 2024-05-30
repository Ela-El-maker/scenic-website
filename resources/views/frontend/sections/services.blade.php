<section class="site-section services-section bg-light block__62849" id="services-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
                <h3 class="section-title-sub text-primary">Our Services</h3>
                <h2 class="section-title mb-3">Services</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service)
            <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

                <a href="service-single.html" class="block__16443 text-center d-block">
                    <span class="custom-icon mx-auto"><span class="{{$service->service_icon}}"></span></span>
                    <h3>{{$service->name}}</h3>
                    <p>{{$service->description}}</p>
                </a>

            </div>
            @endforeach
            
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <a href="#" class="btn btn-primary btn-md">View All Services</a>
            </div>
        </div>
    </div>
</section>