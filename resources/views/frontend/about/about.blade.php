@extends ('frontend.layouts.app')
@section('content')


<!-- Start header -->
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>About Us</h1>
            </div>
        </div>
    </div>
</div>
<!-- End header -->

<!-- Start About -->
<div class="about-section-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 text-center">
                <div class="inner-column">
                    <p>{!!$about->content!!}</p>
                    <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <img src="{{asset($about->image_path)}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!-- End About -->

@endsection