@extends('frontend.layouts.layout')

@section('content')
    <!-- HOME -->
    @include('frontend.sections.hero')

    <!-- ABOUT US -->
    @include('frontend.sections.about')

    <!-- SERVICES -->
    @include('frontend.sections.services')

    <!-- PORTFOLIO -->
    @include('frontend.sections.portfolio')
    
    <!-- FEATURE SECTION -->
    @include('frontend.sections.feature')


    @include('frontend.sections.testimonials');
    

    <!-- Blog-Area-Start -->
    @include('frontend.sections.blog')

@endsection
