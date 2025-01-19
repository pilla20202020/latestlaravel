@extends ('frontend.layouts.app')
@section('content')


  <!-- Event -->

  <div class="untree_co-hero overlay" style="background-image: url({{asset('assets/images/hero_bg.jpg')}});">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <h1 class="mb-4  mt-5 pt-5 heading text-white" data-aos="fade-up" data-aos-delay="100">Our Events</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <div class="untree_co-section">
    <div class="container">
      

      @if ($events->isNotEmpty())
      <div class="events-slider owl-carousel" data-aos="fade-up" data-aos-delay="100">
        @foreach($events as $event)
        <div class="row align-items-center justify-content-between">
         
            <div class="col-lg-6">
              <a href="{{ route('events.detail', $event->slug) }}"><img src="{{asset($event->image_path)}}" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-5">
              {{-- <span class="event-price d-block">$200.99</span> --}}
              <h3 class="mb-4">{{$event->title}}</h3>
              <p class="mb-4">{!!$event->content!!}</p>
              {{-- <ul class="list-unstyled ul-check">
                <li>Away behind the word</li>
                <li>Bookmarksgrove right at the coast</li>
                <li>Separated they live</li>
              </ul> --}}
            </div>
          
        </div>
        @endforeach
        
      </div>
      @endif
    </div>
  </div>
  <!-- Event -->


   
@endsection