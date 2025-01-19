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

<!-- Start blog -->
<div class="blog-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Blog</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-box-inner">
                            <div class="blog-img-box">
                                <img class="img-fluid" src="{{asset('assets/images/blog-img-01.jpg') }}" alt="">
                            </div>
                            <div class="blog-detail">
                                <h4>{{$blog->title}}</h4>
                                <ul>
                                    <li><span>{{$blog->short_description}}</span></li>
                                    
                                </ul>
								<span>{!! Str::limit($blog->content, 350) !!}</span>
                                <a class="btn btn-lg btn-circle btn-outline-new-white" href="{{ route('blogs.detail', $blog->slug) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
				
			</div>
		</div>
	</div>
	<!-- End blog -->
	<!-- End All Pages -->
@endsection