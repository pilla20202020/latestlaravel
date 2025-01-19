	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Quick Links</h3>
                    <p><a href="{{route('homepage')}}">Home</a></p>
					<p ><a href="{{route('menu')}}">Menu</a></p>
					<p ><a href="{{route('about')}}">About Us</a></p>
                    <p ><a href="{{route('contact')}}">Contact Us </a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">{{setting('address')}}</p>
					<p class="lead"><a href="mailto:{{setting('email')}}">{{setting('email')}}</a></p>
					<p><a href="#"> <a href="tel:{{setting('phone')}}">{{setting('phone')}}</a></p>
					<ul class="list-inline f-social">
                        @if(setting('facebook') !=null)
						<li class="list-inline-item"><a href="{{setting('facebook')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						@endif

                        @if(setting('twitter') !=null)
                        <li class="list-inline-item"><a href="{{setting('twitter')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        @endif

                        @if(setting('instagram') !=null)
						<li class="list-inline-item"><a href="{{setting('instagram')}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        @endif
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
			</div>
		</div>

		
	</footer>
	<!-- End Footer -->

{{-- <!-- START FOOTER -->
<footer class="bg_blue_dark footer_dark">
    <div class="top_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div >
                        <a href="{{route('homepage')}}">
                            <img class="footer_logo img img-fluid" class="bg-white" src="{{ asset('assets/images/logo.png') }}">
                        </a> 
                    </div>
                    <!-- <p>Phasellus blandit massa enim. elit id varius nunc. Lorem ipsum dolor sit amet, consectetur industry.</p> -->
                    <ul class="p-0">
                        <div class="blog_text">
                                <h4 class="mt-2">About Monty's</h4>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                        
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-6 mb-4 mb-lg-0">
                    <h6 class="widget_title">Recent Events</h6>
                    <ul class="list_none widget_links links_style1 p-0">
                        @foreach($allevents as $event)
                        <li><a href="{{ route('events.detail', $event->slug) }}">{{$event->title}}</a></li>
                        @endforeach
                    </ul>
                </div>


                <div class="col-lg-3 col-md-6 col-6 mb-4 mb-lg-0">
                    <h6 class="widget_title">Quick Links</h6>
                    <ul class="list_none widget_links links_style1 p-0">
                        <li><a href="{{route('homepage')}}">Home</a></li>
                            <li><a href="{{url('about')}}">About</a></li>
                        <li><a href="{{url('gallery')}}">Gallery</a></li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </div>

                
                
                <div class="col-lg-3 col-md-6 col-6 mb-4 mb-lg-0">
                <h6 class="widget_title">Contact Us</h6>
                

                    <ul class="mt-3 contact_info contact_info_light list_none p-0">
                        <li>
                            <span class="fas fa-fax"></span>
                            <a>{{setting('fax')}}</a>
                        </li>
                        <li>
                            <span class="fas fa-envelope"></span>
                            <a href="mailto:{{setting('email')}}">{{setting('email')}}</a>
                        </li>
                        <li>
                            <span class="fas fa-phone"></span>
                            <a href="tel:{{setting('phone')}}">{{setting('phone')}}</a>
                        </li>
                    </ul>
                    <div class="widget">
                      <h3>Connect</h3>
                      <ul class="list-unstyled social">
                        @if(setting('instagram') !=null)
                        <li><a href="{{setting('instagram')}}"><span class="fab fa-instagram"></span></a></li>
                        @endif
                        @if(setting('twitter') !=null)
                        <li><a href="{{setting('twitter')}}"><span class="fab fa-twitter"></span></a></li>
                        @endif
                        @if(setting('facebook') !=null)
                        <li><a href="{{setting('facebook')}}"><span class="fab fa-facebook"></span></a></li>
                        @endif
                      </ul>
                    </div>
                </div>
              
            </div>
        </div>
    </div>

</footer>
<!-- END FOOTER --> --}}

  
<!-- END FOOTER -->
