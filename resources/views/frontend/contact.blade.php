@extends('frontend.layouts.layout')

@section('content')
    <!-- HOME -->
    <section class="home-section section-hero overlay slanted" id="home-section">

        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
              <h1>Contact Us</h1>
              <div class="mx-auto w-75">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae amet ab laboriosam asperiores commodi.</p>
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
  
      <section class="site-section" id="next-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <form action="#" class="">
  
                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">First Name</label>
                    <input type="text" id="fname" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">Last Name</label>
                    <input type="text" id="lname" class="form-control">
                  </div>
                </div>
  
                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label> 
                    <input type="email" id="email" class="form-control">
                  </div>
                </div>
  
                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="subject">Subject</label> 
                    <input type="subject" id="subject" class="form-control">
                  </div>
                </div>
  
                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Message</label> 
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                  </div>
                </div>
  
                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                  </div>
                </div>
  
              </form>
            </div>
            <div class="col-lg-5 ml-auto">
              <div class="p-4 mb-3 bg-white">
                <p class="mb-0 font-weight-bold">Address</p>
                <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>
  
                <p class="mb-0 font-weight-bold">Phone</p>
                <p class="mb-4"><a href="#">+1 232 3235 324</a></p>
  
                <p class="mb-0 font-weight-bold">Email Address</p>
                <p class="mb-0"><a href="#">youremail@domain.com</a></p>
  
              </div>
            </div>
          </div>
        </div>
      </section>
  
@endsection