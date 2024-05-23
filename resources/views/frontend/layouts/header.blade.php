  


    <div class="header_top_menu pt-2 pb-2 bg_color">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8">
                    <div class="header_top_menu_address">
                        <div class="header_top_menu_address_inner">
                            <ul>
                                <li><a href="#"><i
                                            class="fa fa-envelope-o"></i>{{ officeSetting()->institute_email ?? '' }}</a>
                                </li>
                                {{-- <li><a href="#"><i class="fa fa-map-marker"></i>{{ officeSetting()->institute_address ??'' }}</a></li> --}}
                                <li><a href="#"><i
                                            class="fa fa-phone"></i>{{ officeSetting()->institute_phone ?? '' }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="header_top_menu_icon">
                        <div class="header_top_menu_icon_inner">
                            <ul>
                                <li><a href="{{ officeSetting()->facebook_url ?? '' }}"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ officeSetting()->twitter_url ?? '' }}"><i
                                            class="fa fa-twitter"></i></a>
                                </li>
                                {{-- <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

