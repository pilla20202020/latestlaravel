@extends ('frontend.layouts.app')
@section('content')


<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Blog</h1>
            </div>
        </div>
    </div>
</div>
<!-- End All Pages -->

<!-- Start blog details -->
<div class="blog-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @if($blogs)
                <div class="col-xl-12 col-lg-12 col-12">
                    <div class="blog-inner-details-page">
                        <div class="blog-inner-box">
                            <div class="side-blog-img">
                                <img class="img-fluid" src="{{asset($blogs->image_path)}}" alt="">							
                               
                            </div>
                            <div class="inner-blog-detail details-page">
                                <h3>{{$blogs->title}}</h3>
                                <ul>
                                    <li><i class="zmdi zmdi-account"></i>{{$blogs->short_description}}</span></li>
                                </ul>
                                <p>{!!$blogs->content!!}</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endif
    
        </div>
    </div>
</div>
<!-- End details -->
@endsection