@extends('frontend.layouts.layout')

@section('content')

    <!-- HOME -->
    <section class="home-section section-hero overlay slanted" id="home-section">

        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
              <h1>{{$blog->title}}</h1>
              <div class="mx-auto w-75">
                {{-- <p class="text-uppercase">Posted by <a href="#" target="_blank" class="text-uppercase">Admin</a> <span class="d-inline-block mx-2">&bullet;</span> <a href="#" class="text-uppercase">08 Apr 2019</a> <span class="d-inline-block mx-2">&bullet;</span> <a href="#" class="text-uppercase">6 Comments</a></p> --}}
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
            <div class="col-md-8 blog-content">
              <div class="description">
                {!!$blog->description!!}
            </div>
              <div class="pt-5">
                <p>Categories:  <a href="javascript:void(0)">{{$blog->getCategory->name}}</a>, Published: <a href="javascript:void(0)">{{date('d M, Y', strtotime($blog->created_at))}}</a></p>
              </div>
  
  
              {{-- <div class="pt-5">
                <h3 class="mb-5">6 Comments</h3>
                <ul class="comment-list">
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/person_2.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>Jacob Smith</h3>
                      <div class="meta">January 9, 2018 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>
                  </li>
  
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/person_3.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>Chris Meyer</h3>
                      <div class="meta">January 9, 2018 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>
  
                    <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_5.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>Chintan Patel</h3>
                          <div class="meta">January 9, 2018 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>
  
  
                        <ul class="children">
                          <li class="comment">
                            <div class="vcard bio">
                              <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                              <h3>Jean Doe</h3>
                              <div class="meta">January 9, 2018 at 2:21pm</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                              <p><a href="#" class="reply">Reply</a></p>
                            </div>
  
                              <ul class="children">
                                <li class="comment">
                                  <div class="vcard bio">
                                    <img src="images/person_4.jpg" alt="Image placeholder">
                                  </div>
                                  <div class="comment-body">
                                    <h3>Ben Afflick</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                  </div>
                                </li>
                              </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
  
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>Jean Doe</h3>
                      <div class="meta">January 9, 2018 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>
                  </li>
                </ul>
                <!-- END comment-list -->
                
                <div class="comment-form-wrap pt-5">
                  <h3 class="mb-5">Leave a comment</h3>
                  <form action="#" class="">
                    <div class="form-group">
                      <label for="name">Name *</label>
                      <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email *</label>
                      <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="website">Website</label>
                      <input type="url" class="form-control" id="website">
                    </div>
  
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Post Comment" class="btn btn-primary btn-md">
                    </div>
  
                  </form>
                </div>
              </div> --}}
  
            </div>
            {{-- <div class="col-md-4 sidebar pl-md-5">
              <div class="sidebar-box">
                <form action="#" class="search-form">
                  <div class="form-group">
                    <span class="icon fa fa-search"></span>
                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                  </div>
                </form>
              </div>
              <div class="sidebar-box">
                <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4 w-50 rounded-circle">
                <h3>About The Author</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
  
              <div class="sidebar-box">
                <div class="categories">
                  <h3>Categories</h3>
                  <li><a href="#">Creatives <span>(12)</span></a></li>
                  <li><a href="#">News <span>(22)</span></a></li>
                  <li><a href="#">Design <span>(37)</span></a></li>
                  <li><a href="#">HTML <span>(42)</span></a></li>
                  <li><a href="#">Web Development <span>(14)</span></a></li>
                </div>
              </div>
              
  
              <div class="sidebar-box">
                <h3>Paragraph</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              </div>
            </div> --}}
          </div>
        </div>
      </section>

@endsection