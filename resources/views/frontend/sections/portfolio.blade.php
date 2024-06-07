<section class="site-section block__62272" id="portfolio-section">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 text-center" data-aos="fade">
                <h3 class="section-title-sub text-primary">{{ $portfolioTitle->title }}</h3>
                <h2 class="section-title mb-3">{{ $portfolioTitle->sub_title }}</h2>
            </div>
        </div>

        <div class="row justify-content-center mb-5" data-aos="fade-up">
            <div id="filters" class="filters text-center button-group col-md-7">
                <button class="btn btn-primary active" data-filter="*">All Projects</button>

                @foreach ($portfolioCategories as $category)
                    <button class="btn btn-primary" data-filter=".{{ $category->slug }}">{{ $category->name }}</button>
                @endforeach

            </div>
        </div>

        <div id="posts" class="row no-gutter">
            @foreach ($portfolioItems as $item)
                <div  data-wow-delay="0.5s" class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4 {{$item->category->slug}}" >
                    <a href="{{route('show.portfolio', $item->id)}}" class="item-wrap">
                        <span class="icon-add"></span>
                        <img class="img-fluid" src="{{ asset($item->image) }}">
                    </a>
                </div>
            
            @endforeach


        </div>
    </div>

</section>
