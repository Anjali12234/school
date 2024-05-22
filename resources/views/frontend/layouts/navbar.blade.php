  <!--==================================================-->
    <!----- Start Techno Main Menu Area ----->
    <!--==================================================-->
    <div id="sticky-header" class="techno_nav_manu d-md-none d-lg-block d-sm-none d-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="menu">
                    <a href="index.html" class="logo"><img class="down"
                            src="{{ officeSetting()->institute_logo ?? '' }}" alt=""> <img class="main_sticky"
                            src="{{ officeSetting()->institute_logo ?? '' }}" alt=""></a>
                    <ul class="clearfix">
                        <li><a href="{{ route('index') }}">Home</a>
                        </li>
                        <li><a href="{{ route('about') }}">About</a>
                        </li>
                        <li><a href="{{ route('course') }}">Courses</a>
                        </li>
                        <li><a href="{{ route('service') }}">Services</a>
                        </li>
                        <li><a href="{{ route('gallery')}}">Gallery</a>
                        </li>
                        <li><a href="{{ route('team') }}">Team</a>
                        {{-- <li><a href="{{route('contact')}}">Contact</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Techno Mobile Menu Area -->
    <div class="mobile-menu-area d-sm-block d-md-block d-lg-none">
        <div class="mobile-menu">
            <nav class="techno_menu">
                <ul class="clearfix">
                    <li><a href="{{ route('index') }}">Home</a>
                    </li>
                    <li><a href="{{ route('about') }}">About</a>
                    </li>
                    <li><a href="{{ route('course') }}">Courses</a>
                    </li>
                    <li><a href="{{ route('gallery')}}">Gallery</a>
                    </li>
                    <li><a href="{{ route('team') }}">Team</a>

                </ul>
            </nav>
        </div>
    </div>

    <!--==================================================-->
    <!----- End Techno Main Menu Area ----->
    <!--==================================================-->
