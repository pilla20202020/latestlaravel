@extends ('frontend.layouts.app')
@section('content')


  <!-- Event -->

  <section class="blog-section bg-grey padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 sm-padding">
                <div class="blog-items single-post row">
                    <img src="{{asset($event->image)}}" alt="{{$event->title}}" class="img-fluid">
                    <h2>{{$event->title}}</h2>
                    <div class="container mt-3">
                        <div class="row">
                            <p>{!!$event->content!!}</p>
                        </div>
                    </div>

                </div>
            </div><!-- Blog Posts -->
            <div class="col-lg-3 sm-padding">
                <div class="sidebar-wrap">
                    <div class="sidebar-widget mb-50">
                        <h4>Events</h4>
                        <ul class="recent-posts">
                            @if (isset($events))
                                @foreach ($events as $event)
                                    <li>
                                        <img src="{{asset($event->image)}}" alt="{{$event->title}}">
                                        <div>
                                            <h4><a href="{{route('event.detail', $event->id)}}">{{$event->title}}</a></h4>
                                            <span class="date" style="font-size: 12px"><i class="ti-calendar"></i> {{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            @endif


                        </ul>
                    </div><!-- Recent Posts -->

                </div><!-- /Sidebar Wrapper -->
            </div>
        </div>
    </div>
</section>



@endsection
