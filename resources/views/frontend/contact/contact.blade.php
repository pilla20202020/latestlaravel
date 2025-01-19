@extends ('frontend.layouts.app')
@section('content')
<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-12">
        <h1>Contact</h1>
      </div>
    </div>
  </div>
</div>
<!-- End All Pages -->

<!-- Start Contact -->
<!--<div class="map-full"></div>-->
<div class="contact-box">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="heading-title text-center">
          <h2>Contact</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        @if(Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            {{Illuminate\Support\Facades\Session::get('success')}}
        </div>
         @endif
          <form method="post" name="enq" action="{{route('send-contact')}}">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                  <div class="help-block with-errors"></div>
                </div>                                 
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                  <div class="help-block with-errors"></div>
                </div> 
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <input type="number" placeholder="Your Phone Number" id="phone" class="form-control" name="phone" required data-error="Please enter your phone number">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group"> 
                  <textarea class="form-control" id="message" name="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="submit-button text-center">
                  <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div> 
                  <div class="clearfix"></div> 
                </div>
              </div>
            </div>            
          </form>
      </div>
      <div class="col-lg-6">
          <img src="{{asset('assets/images/map-web.jpg')}}" alt="Image" class="img-fluid">
      </div>
    </div>
  </div>
</div>
<!-- End Contact -->
@stop

@push('scripts')
<script src="{{asset('assets/js/jquery.mapify.js') }}"></script>
<script>
$('.map-full').mapify({
  points: [
    {
      lat: 40.7143528,
      lng: -74.0059731,
      marker: true,
      title: 'Marker title',
      infoWindow: 'Kaniz Restaurant'
    }
  ]
});	
</script>
@endpush