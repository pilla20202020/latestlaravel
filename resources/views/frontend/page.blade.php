
@extends ('frontend.layouts.app')
@section('content')


  <!-- Event -->
  <section class="overlay_bg_50">
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>{{$page->title}}</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                    <li class="breadcrumb-item active">{{$page->title}}</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- /Page Header -->


    	<!-- About Section Start -->
        <section class="blog-section bg-grey padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 sm-padding">
                        <div class="blog-items single-post row">
                            @if ($page->image)
                                <img src="{{asset($page->image)}}" alt="{{$page->title}}" class="img-fluid">

                            @endif
                            <h2>{{$page->title}}</h2>
                            <div class="container mt-3">
                                <div class="row">
                                    <p>{!!$page->content!!}</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- Blog Posts -->
                </div>
            </div>
        </section>
@endsection
