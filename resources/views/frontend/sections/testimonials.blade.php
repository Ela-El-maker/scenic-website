<section class="site-section" id="next-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                {{-- <h1>{{ $feedbackTitle->title }}</h1>
                <div class="mx-auto w-75">
                    <p>{{ $feedbackTitle->sub_title }}</p>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            @foreach ($feedbacks as $feed)
                <div class="col-lg-6 mb-4">
                    <div class="block__87154">
                        <div class="quote">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <blockquote>
                            <p>{!! $feed->testimony !!}</p>
                        </blockquote>
                        <div class="block__91147 d-flex align-items-center">
                            <figure class="mr-4"><img src="{{ asset($feed->avatar) }}" alt="Image"
                                    class="img-fluid"></figure>
                            <div>
                                <h3>{{ $feed->name }}</h3>
                                <span class="position">{{ $feed->position }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</section>
