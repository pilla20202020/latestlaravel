


	<!-- Start header -->
	<div class="site-preloader-wrap">
        <div class="spinner"></div>
    </div><!-- Preloader -->

    <header id="header" class="header-section">
        <div class="top-header">
            <div class="container">
                <div class="top-content-wrap row">
                    <div class="col-sm-8">
                        <ul class="left-info">
                            @if(setting('email') !=null)
                                <li><a href="#"><i class="ti-email"></i> {{setting('email')}}</a></li>
                            @endif

                            @if(setting('phone') !=null)
                                <li><a href="#"><i class="ti-mobile"></i> {{setting('phone')}}</a></li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-sm-4 d-none d-md-block">
                        <ul class="right-info">
                            @if(setting('facebook') !=null)
                                <li><a href="{{setting('facebook')}}"><i class="ti-facebook"></i></a></li>
                            @endif

                            @if(setting('twitter') !=null)
                                <li><a href="{{setting('twitter')}}"><i class="ti-twitter-alt"></i></a></li>
                            @endif

                            @if(setting('instagram') !=null)
                                <li><a href="{{setting('instagram')}}"><i class="ti-instagram"></i></a></li>
                            @endif

                            @if(setting('youtube') !=null)
                                <li><a href="{{setting('youtube')}}"><i class="ti-youtube"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <div class="bottom-content-wrap row">
                    <div class="col-sm-4">
                        <div class="site-branding">
                            <a href="{{route('homepage')}}"><img src="{{asset('backend/assets/images/logo.jpeg')}}" alt="SERAP LEE FOUNDATION" class="logo_img img-fluid"></a>
                        </div>
                    </div>
                   <div class="col-sm-8 text-right">
                       <ul id="mainmenu" class="nav navbar-nav nav-menu">
                            <li><a href="{{route('homepage')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{ route('blogs','recent-cause') }}">Causes</a></li>
                            <li><a href="{{route('events')}}">Event</a></li>
                            <li><a href="{{route('events')}}">Gallery</a></li>
                            {{-- <li><a href="#">Pages</a>
                                <ul>
                                   <li><a href="gallery.html">Gallery</a></li>
                                   <li><a href="team.html">Volunteers</a></li>
                                   <li><a href="404.html">404 Not Found</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li><a href="blog-grid.html">Blog</a>
                                <ul>
                                   <li><a href="blog-grid.html">Blog Grid</a></li>
                                   <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                   <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                   <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li> --}}
                            <li> <a href="{{route('contact')}}">Contact Us</a></li>
                        </ul>
                        {{-- <a href="#" class="default-btn">Donet Now</a> --}}
                   </div>
                </div>
            </div>
        </div>
    </header><!-- /Header Section -->

    <div class="header-height"></div>
	<!-- End header -->

