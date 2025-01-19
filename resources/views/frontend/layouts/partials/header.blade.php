


	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="{{route('homepage')}}">
					<img src="{{ asset('assets/images/logo.png') }}" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
              @foreach(menus() as $key => $menu)
                <?php
                $hasSub = !$menu->subMenus->isEmpty();
                ?>
                <li class="nav-item  {{($hasSub) ? "dropdown" : ""}} ">
                    <a class="{{($hasSub) ? "dropdown-toggle" : ""}} nav-link" href="{{ url($menu->url) }} "
                      data-toggle="{{($hasSub) ? "dropdown" : ""}}">
                        {{$menu->name}}
                    </a>
                    @if($hasSub)
                        <div class="dropdown-menu">
                            <ul>
                                @foreach($menu->subMenus as $key => $sub)
                                    <li>
                                        <a class="dropdown-item nav-link nav-item"
                                          href="{{url($sub->url)}}">{{ $sub->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </li>
                
            @endforeach
            <li class="nav-item"><a class="nav-link btn btn-lg btn-circle btn-outline-new-white" href="{{route('book')}}">Book a table</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
