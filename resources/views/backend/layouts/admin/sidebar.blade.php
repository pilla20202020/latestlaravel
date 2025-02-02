<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="{{ route('dashboard.index') }}" class="waves-effect">
                        <i class="icon-accelerator"></i> <span> Dashboard </span>
                    </a>
                </li>

                {{-- <li>
                    <a href="{{ route('menu.index') }}" class="waves-effect">
                        <i class="icon-share"></i><span> Menu </span>
                    </a>
                </li> --}}

                <li>
                    <a href="{{ route('slider.index') }}" class="waves-effect">
                        <i class="ti-layout-slider-alt"></i><span> Slider </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('page.index') }}" class="waves-effect">
                        <i class="icon-paper-sheet"></i><span> Pages </span>
                    </a>
                </li>



                <li>
                    <a href="{{ route('event.index') }}" class="waves-effect">
                        <i class="fas fa-newspaper"></i><span> Event </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('testimonial.index') }}" class="waves-effect">
                        <i class="icon-paper-sheet"></i><span> Testimonial </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('volunteer.index') }}" class="waves-effect">
                        <i class="fas fa-person-booth"></i><span> Volunteer </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
