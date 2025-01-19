
@extends ('frontend.layouts.app')
@section('content')


  <!-- Event -->

  <div class="untree_co-hero overlay" style="background-image: url({{asset('assets/images/hero_bg.jpg')}});">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <h1 class="mb-4  mt-5 pt-5 heading text-white" data-aos="fade-up" data-aos-delay="100">{{$page->title}}</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    	<!-- About Section Start -->
        <section id="about-section">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                    @if($page->image)
                           <div class="about-img">
                                <figure>
                                <img src="{{ asset('assets/images/buddha.jpg') }}">
                                </figure>
                             </div>
                    @endif
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                  <div class="about-txt">
                    <div class="heading">
                      <h2><strong class="text-primary">{{$page->title}}</strong></h2>
                     
                    </div>
                      <p>{!! $page->content !!}</p>
        
        
                  </div>
                </div>
              </div>
            </div>
          </section>
        <!-- About Section End -->
@endsection
