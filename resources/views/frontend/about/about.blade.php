@extends ('frontend.layouts.app')
@section('content')


<!-- Start header -->
<section class="overlay_bg_50">
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>About Us</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- End header -->

<!-- Start About -->
<section class="blog-section bg-grey padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 sm-padding">
                <div class="blog-items single-post row">
                    @if ($about->image)
                        <img src="{{asset($about->image)}}" alt="{{$about->title}}" class="img-fluid">

                    @endif
                    <div class="container mt-3">
                        <div class="row">
                            <p>{!!$about->content!!}</p>
                        </div>
                    </div>

                </div>
            </div><!-- Blog Posts -->
        </div>
    </div>
</section>
<!-- End About -->

@endsection
