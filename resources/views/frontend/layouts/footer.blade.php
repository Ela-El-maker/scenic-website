@php
    $footerCompany = \App\Models\FooterCompanyInfo::all();
    $footerProducts = \App\Models\FooterProducts::all();
    $footerSocial =  \App\Models\FooterSocial::all();
    $footerSupport =  \App\Models\FooterSupport::all();

@endphp

<footer class="site-footer slanted-footer">

    <a href="#top" class="smoothscroll scroll-top">
      <span class="icon-keyboard_arrow_up"></span>
    </a>

    <div class="container">
      <div class="row mb-5">
        <div class="col-6 col-md-3 mb-4 mb-md-0">
          <h3>Products</h3>
          <ul class="list-unstyled">
            @foreach ($footerProducts as $one)
              <li><a href="{{$one->url}}">{{$one->name}}</a></li>
            @endforeach
            
            
          </ul>
        </div>
        <div class="col-6 col-md-3 mb-4 mb-md-0">
          <h3>Company</h3>
          <ul class="list-unstyled">
            @foreach ($footerCompany as $two)
              <li><a href="{{$two->url}}">{{$two->name}}</a></li>
            @endforeach
            
            
          </ul>
        </div>
        <div class="col-6 col-md-3 mb-4 mb-md-0">
          <h3>Support</h3>
          <ul class="list-unstyled">
            @foreach ($footerSupport as $three)
              <li><a href="{{$three->url}}">{{$three->name}}</a></li>
            
            @endforeach
            
          </ul>
        </div>
        <div class="col-6 col-md-3 mb-4 mb-md-0">
          <h3>Contact Us</h3>
          <div class="footer-social">
            @foreach ($footerSocial as $four)
            <a href="{{$four->url}}"><span class="{{$four->icon}}"></span></a>
              
            @endforeach

          </div>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-12">
          <p class="copyright"><small class="block">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </small></p>
        </div>
      </div>
    </div>
  </footer>