@extends('frontend.layouts.app')

@section('content')

    <!-- /#slider-Section -->
    <section class="slider-section">
        <div class="slider-wrapper">
            <div id="main-slider" class="nivoSlider">
                @foreach ($sliders as $index => $slider)
                    <img src="{{ asset($slider->image) }}" alt="{{ $slider->title }}" title="#slider-caption-{{ $index + 1 }}" />
                @endforeach
            </div> <!-- /#main-slider -->

            @foreach ($sliders as $index => $slider)
                <div id="slider-caption-{{ $index + 1 }}" class="nivo-html-caption slider-caption">
                    <div class="display-table">
                        <div class="table-cell">
                            <div class="container">
                                <div class="slider-text">
                                    <h1 class="wow cssanimation leFadeInRight sequence">{{ $slider->title }}</h1>
                                    <p class="wow cssanimation fadeInTop" data-wow-delay="1s">{{ $slider->caption }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /#slider-caption-{{ $index + 1 }} -->
            @endforeach
        </div>
    </section>
    <!-- /#slider-Section -->

    <!-- /Promo Section -->
    <section class="promo-section bd-bottom">
        <div class="promo-wrap">
           <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="{{asset('images/icon-1.png')}}" alt="prmo icon">
                            <h3>Make Donetion</h3>
                            <p>Help today because tomorrow you may be the one who needs helping!</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="{{asset('images/icon-2.png')}}" alt="prmo icon">
                            <h3>Fundrising</h3>
                            <p>Help today because tomorrow you may be the one who needs helping! </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="{{asset('images/icon-3.png')}}" alt="prmo icon">
                            <h3>Become A Volunteer</h3>
                            <p>Help today because tomorrow you may be the one who needs helping! </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Promo Section -->


    <!-- /Causes Section -->
    <section class="causes-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Recent Causes</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div><!-- /Section Heading -->
            <div class="causes-wrap row">
                <div class="col-md-4 xs-padding">
                    <div class="causes-content">
                       <div class="causes-thumb">
                            <img src="{{asset('images/causes.jpg')}}" alt="causes">
                            <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">25%</span></div>
                            </div>
                       </div>
                        <div class="causes-details">
                            <h3>First charity activity of this summer.</h3>
                            <p>Help today because tomorrow you may be the one who needs more helping!</p>
                            <div class="donation-box">
                                <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                            </div>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div><!-- /Causes-1 -->
                <div class="col-md-4 xs-padding">
                    <div class="causes-content">
                       <div class="causes-thumb">
                            <img src="{{asset('images/causes.jpg')}}" alt="causes">
                            <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">45%</span></div>
                            </div>
                       </div>
                        <div class="causes-details">
                            <h3>Big charity: build school for poor children.</h3>
                            <p>Help today because tomorrow you may be the one who needs more helping!</p>
                            <div class="donation-box">
                                <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                            </div>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div><!-- /Causes-2 -->
                <div class="col-md-4 xs-padding">
                    <div class="causes-content">
                       <div class="causes-thumb">
                            <img src="{{asset('images/causes.jpg')}}" alt="causes">
                            <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">75%</span></div>
                            </div>
                       </div>
                        <div class="causes-details">
                            <h3>Building clean-water system for rural poor.</h3>
                            <p>Help today because tomorrow you may be the one who needs more helping!</p>
                            <div class="donation-box">
                                <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                            </div>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div><!-- /Causes-3 -->
            </div>
        </div>
    </section><!-- /Causes Section -->


    <!-- /Causes Section -->
    <section class="about-section bd-bottom shape circle padding">
        <div class="container">
            <div class="row">
               <div class="col-md-4 xs-padding">
                    <div class="profile-wrap">
                        <img class="profile" src="{{asset('images/profile.jpeg')}}" alt="profile">
                        <h3>Serap Jangbu Sherpa <span>Founder & Chairman.</span></h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <img src="{{asset('images/sign.jpeg')}}" alt="sign">
                    </div>
                </div>
                <div class="col-md-8 xs-padding">
                    <div class="about-wrap row">
                        <div class="col-md-6 xs-padding">
                            <img src="{{asset('images/history.jpg')}}" alt="about-thumb">
                            <h3>Our History</h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor.</p>
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                        <div class="col-md-6 xs-padding">
                            <img src="{{asset('images/mission.jpeg')}}" alt="about-thumb">
                            <h3>Our Mission</h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor.</p>
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Causes Section -->


    <!-- /Featured Campaigns Section -->
    <section class="campaigns-section bd-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 xs-padding">
                    <div class="campaigns-wrap">
                        <h4>Featured Campaigns</h4>
                        <h2>Featured project to built a School.</h2>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">35%</span></div>
                        </div>
                        <div class="donation-box">
                            <h3><i class="ti-bar-chart"></i>Goal: $450000</h3>
                            <h3><i class="ti-thumb-up"></i>Raised: $55000</h3>
                        </div>
                        <a href="#" class="default-btn">Donate Now</a>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="video-wrap">
                        <img src="{{asset('images/video.jpg')}}" alt="video">
                        <div class="play">
                            <a class="img-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=_IlLwfC2dNc"><i class="ti-control-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Featured Campaigns Section -->

    <!-- /Team Section -->
    <section class="team-section bg-grey bd-bottom circle shape padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Meet Out Volunteers</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div><!-- /Section Heading -->
            <div class="team-wrapper row">
                <div class="col-lg-6 sm-padding">
                    <div class="team-wrap row">
                        @foreach ($volunteers as $volunteer)
                            <div class="col-md-6">
                                <div class="team-details">
                                <img src="{{ asset($volunteer->image) }}" alt="{{ $volunteer->title }}">
                                    <div class="hover">
                                        <h3>{{ $volunteer->title }} <span>{{ $volunteer->position }}</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-1 -->
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="team-content">
                        <h2>Become a Volunteer?</h2>
                        <h3>Join your hand with us for a better life and beautiful future.</h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <ul class="check-list">
                            <li><i class="fa fa-check"></i>We are friendly to each other.</li>
                            <li><i class="fa fa-check"></i>If you join with us,We will give you free training.</li>
                            <li><i class="fa fa-check"></i>Its an opportunity to help poor children.</li>
                            <li><i class="fa fa-check"></i>No goal requirements.</li>
                            <li><i class="fa fa-check"></i>Joining is tottaly free. We dont need any money from you.</li>
                        </ul>
                        <a href="#" class="default-btn">Join With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Team Section -->

    <!-- Counter Section -->
    <section id="counter" class="counter-section">
        <div class="container">
            <ul class="row counters">
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-money"></i>
                        <h3 class="counter">85389</h3>
                        <h4 class="text-white">Money Donated</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-face-smile"></i>
                        <h3 class="counter">10693</h3>
                        <h4 class="text-white">Volunteer Around The World</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-user"></i>
                        <h3 class="counter">50177</h3>
                        <h4 class="text-white">People Impacted</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-comments"></i>
                        <h3 class="counter">669</h3>
                        <h4 class="text-white">Positive Feedbacks</h4>
                    </div>
                </li>
            </ul>
        </div>
    </section><!-- Counter Section -->




    <!-- START SECTION EVENT -->
    <section class="events-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Events</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 col-12">
                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a data-toggle="tab" class="nav-link active" href="#past" role="tab">Past Events</a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="tab" class="nav-link" href="#current" role="tab">Current Events</a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="tab" class="nav-link" href="#upcoming" role="tab">Upcoming Events</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>

            <div class="tab-content">
                <!-- Past Events -->
                <div class="tab-pane active" id="past">
                    <div class="causes-wrap row">
                        @forelse($pastEvents as $event)
                            <div class="col-md-4 xs-padding">
                                <a href="{{ route('event.detail', $event->id) }}">
                                    <div class="causes-content">
                                        <div class="causes-thumb">
                                            <img src="{{ asset($event->image) }}" alt="Event Image">
                                        </div>
                                        <div class="causes-details">
                                            <h3>{{ $event->title }}</h3>
                                            <p>{{ Str::limit($event->meta_description, 100) }}</p>
                                            <p style="font-size:12px"><i class="ti-calendar"></i> {{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</p>
                                            <a href="{{ route('event.detail', $event->id) }}" class="read-more">Read More</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <p class="text-center">No past events found.</p>
                        @endforelse
                    </div>
                </div>

                <!-- Current Events -->
                <div class="tab-pane" id="current">
                    <div class="causes-wrap row">
                        @forelse($currentEvents as $event)
                            <div class="col-md-4 xs-padding">
                                <a href="{{ route('event.detail', $event->id) }}">
                                    <div class="causes-content">
                                        <div class="causes-thumb">
                                            <img src="{{ asset($event->image) }}" alt="Event Image">
                                        </div>
                                        <div class="causes-details">
                                            <h3>{{ $event->title }}</h3>
                                            <p>{{ Str::limit($event->meta_description, 100) }}</p>
                                            <p style="font-size:12px"><i class="ti-calendar"></i> {{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</p>
                                            <a href="{{ route('event.detail', $event->id) }}" class="read-more">Read More</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <p class="text-center">No current events available.</p>
                        @endforelse
                    </div>
                </div>

                <!-- Upcoming Events -->
                <div class="tab-pane" id="upcoming">
                    <div class="causes-wrap row">
                        @forelse($upcomingEvents as $event)
                            <div class="col-md-4 xs-padding">
                                <a href="{{ route('event.detail', $event->id) }}">
                                    <div class="causes-content">
                                        <div class="causes-thumb">
                                            <img src="{{ asset($event->image) }}" alt="Event Image">
                                        </div>
                                        <div class="causes-details">
                                            <h3>{{ $event->title }}</h3>
                                            <p>{{ Str::limit($event->meta_description, 100) }}</p>
                                            <p style="font-size:12px"><i class="ti-calendar"></i> {{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</p>
                                            <a href="{{ route('event.detail', $event->id) }}" class="read-more">Read More</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <p class="text-center">No upcoming events scheduled.</p>
                        @endforelse
                    </div>
                </div>
            </div>

            <a href="{{ route('events') }}" class="default-btn view-all-events">View All Events</a>
        </div>
    </section>
    <!-- START SECTION EVENT -->

    <!-- Testimonial Section -->
    <section class="testimonial-section bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>What People Say</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div><!-- /Section Heading -->
            <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
                @foreach($testimonials as $testimonial)
                    <div class="testimonial-item">
                        {!! $testimonial->content !!} <!-- Display content as HTML -->
                        <div class="testi-footer">
                            <img src="{{ asset($testimonial->image) }}" alt="profile">
                            <h4>{{ $testimonial->title }} <span>{{ $testimonial->position }}</span></h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Testimonial Section -->

    <!-- Testimonial Section -->

    <!-- Blog Section -->
    <section class="blog-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Recent Stories</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div><!-- /Section Heading -->
            <div class="row">
                <div class="col-lg-12 xs-padding">
                    <div class="blog-items grid-list row">
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <img src="{{asset('images/causes-1.jpg')}}" alt="blog post">
                                <div class="blog-content">
                                    <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                    <h3><a href="#">The History of Donation Told</a></h3>
                                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                    <a href="#" class="post-meta">Read More</a>
                                </div>
                            </div>
                        </div><!-- Post 1 -->
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <img src="{{asset('images/causes-2.jpg')}}" alt="blog post">
                                <div class="blog-content">
                                    <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                    <h3><a href="#">Help the Comunity</a></h3>
                                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                    <a href="#" class="post-meta">Read More</a>
                                </div>
                            </div>
                        </div><!-- Post 2 -->
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <img src="{{asset('images/causes-3.jpg')}}" alt="blog post">
                                <div class="blog-content">
                                    <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                    <h3><a href="#">Charity Ever Rule the World?</a></h3>
                                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                    <a href="#" class="post-meta">Read More</a>
                                </div>
                            </div>
                        </div><!-- Post 3 -->
                    </div>
                </div><!-- Blog Posts -->
            </div>
        </div>
    </section><!-- Blog Section -->

    <!-- ./Sponsor Section -->
    <div class="sponsor-section bd-bottom">
        <div class="container">
            <ul id="sponsor-carousel" class="sponsor-items owl-carousel">
                <li class="sponsor-item">
                    <img src="{{asset('images/sponsor-1.png')}}" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{asset('images/sponsor-2.png')}}" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{asset('images/sponsor-3.png')}}" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{asset('images/sponsor-4.png')}}" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{asset('images/sponsor-5.png')}}" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{asset('images/sponsor-1.png')}}" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{asset('images/sponsor-2.png')}}" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{asset('images/sponsor-3.png')}}" alt="sponsor-image">
                </li>
            </ul>
        </div>
    </div><!-- ./Sponsor Section -->

@stop


@push('scripts')
    @if (Illuminate\Support\Facades\Session::has('success'))
        <script>
            $(document).ready(function() {
                Swal.fire(
                    'Form Submitted Successfully',
                    '',
                    'success'
                );
            });
        </script>
    @endif
@endpush
