@extends('frontend.layouts.app')

@section('content')

    <!-- Start slides -->
    <div id="slides" class="cover-slides">
        <ul class="slides-container">
            @foreach ($sliders as $slide)
                <li class="text-left">
                    <img src="{{ asset($slide->image_path) }}" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="m-b-20"><strong>{{ $slide->title }}</strong></h1>
                                <p class="m-b-40">{{ $slide->caption }}</p>
                                <a class="btn btn-lg btn-circle btn-outline-new-white"
                                    href="{{ route('book') }}">Reservation</a>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End slides -->

    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="heading-title text-center">
                        <h2>About Us</h2>
                    </div>

                    <div class="inner-column">
                        <p>{!! $about->content !!}</p>
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img src="{{ asset($about->image_path) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start QT -->
    <div class="qt-box qt-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <p class="lead ">
                        " If you're not the one cooking, stay out of the way and compliment the chef. "
                    </p>
                    <span class="lead">Michael Strahan</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End QT -->
    <!-- Start Menu -->
    <div class="menu-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Special Menu</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>

            <div class="row inner-menu-box">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                            aria-controls="v-pills-home" aria-selected="true">All</a>
                        @foreach ($categories as $category)
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                href="#{{ $category->slug }}" role="tab" aria-controls="v-pills-profile"
                                aria-selected="false">{{ $category->title }}
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="row">

                                @foreach ($products as $key => $product)
                                    @if($key < 9)
                                    <div class="col-lg-4 col-md-6 special-grid drinks">
                                        <div class="gallery-single fix">
                                            <img src="{{ asset($product->image_path) }}" class="img-fluid" alt="Image">
                                            <div class="why-text">
                                                <h4>{{ $product->title }}</h4>
                                                <h5>Rs.{{ $product->price }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach

                            </div>

                        </div>
                        @foreach ($categories as $category)
                            <div class="tab-pane fade" id="{{ $category->slug }}" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="row">
                                    @foreach ($products as $product)
                                        @if ($product->category->slug == $category->slug)
                                            <div class="col-lg-4 col-md-6 special-grid drinks">
                                                <div class="gallery-single fix">
                                                    <img src="{{ asset($product->image_path) }}" class="img-fluid"
                                                        alt="Image">
                                                    <div class="why-text">
                                                        <h4>{{ $product->title }}</h4>
                                                        <h5>Rs.{{ $product->price }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Menu -->
    <!-- Start Gallery -->
    <div class="gallery-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Gallery</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>
            <div class="tz-gallery">
                <div class="row">
                    @foreach ($galleries as $gallery)
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <a class="lightbox" href="{{ asset($gallery->image_path) }}">
                                <img class="img-fluid" src="{{ asset($gallery->image_path) }}" alt="Gallery Images">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

    <!-- Start Customer Reviews -->
    <div class="customer-reviews-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Customer Reviews</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mr-auto ml-auto text-center">
                    <div id="reviews" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner mt-4">
                            @foreach ($testimonials as $key => $testimonialsData)
                                <div class="carousel-item text-center {{ $key == 0 ? 'active' : '' }}">
                                    <div class="img-box p-1 border rounded-circle m-auto">
                                        <img class="d-block w-100 rounded-circle"
                                            src="{{ asset('assets/images/quotations-button.png') }}" alt="">
                                    </div>
                                    <h5 class="mt-4 mb-0"><strong
                                            class="text-warning text-uppercase">{{ $testimonialsData->title }}</strong>
                                    </h5>
                                    <h6 class="text-dark m-0">{{ $testimonialsData->position }}</h6>
                                    <p class="m-0 pt-3">{!! $testimonialsData->content !!}</p>
                                </div>
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Customer Reviews -->

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
