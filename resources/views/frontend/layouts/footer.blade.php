  <!--==================================================-->
    <!----- Start Techno Footer Middle Area ----->
    <!--==================================================-->

    <div class="footer-middle pt-95" style="background-image:url('../assets/frontend/images/call-bg.png'); background-attachment: fixed; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widgets-company-info">
                        <div class="footer-bottom-logo pb-40">
                            <img src="  {{ officeSetting()->institute_logo ?? '' }}"
                                style="height: 90px; width:100px;" alt="" />
                        </div>
                        <div class="company-info-desc">
                            <p>
                                {{ Str::limit(strip_tags(officeSetting()->description ?? ''), $limit = 100, '') }}
                            </p>
                        </div>
                        <div class="follow-company-info pt-3">
                            <div class="follow-company-text mr-3">
                                <a href="#">
                                    <p>Follow Us</p>
                                </a>
                            </div>
                            <div class="follow-company-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widget-nav-menu">
                        <h4 class="widget-title pb-4">Our Services</h4>
                        <div class="menu-quick-link-container ml-4">
                            <ul id="menu-quick-link" class="menu">
                                @foreach (services() as $service)
                                    <li><a href="{{ route('serviceDetail', $service->slug) }}">{{ $service->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widgets-company-info">
                        <h3 class="widget-title pb-4">Institute Address</h3>
                        <div class="footer-social-info">
                            <p><span>Address :</span> {{ officeSetting()->institute_address ?? '' }}</p>
                        </div>
                        <div class="footer-social-info">
                            <p><span>Phone :</span> {{ officeSetting()->institute_phone ?? '' }}</p>
                        </div>
                        <div class="footer-social-info">
                            <p><span>Email :</span> {{ officeSetting()->institute_email ?? '' }}</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div id="em-recent-post-widget">
                        <div class="single-widget-item">
                            <h4 class="widget-title pb-3">Popular Post</h4>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpassionnpj&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                             width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                              allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row footer-bottom mt-70 pt-3 pb-1">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-bottom-content">
                        <div class="footer-bottom-content-copy">
                            <p>© {{ now()->year }} Passion. All Rights Reserved. Developed By <a href="https://anjali12234.github.io/portfolio/" target="_blank">Anjali Sharma &#128156;</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer-bottom-right">
                        <div class="footer-bottom-right-text">
                            <a class="absod" href="#">Privacy Policy </a>
                            <a href="#"> Terms & Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Footer Middle Area ----->
    <!--==================================================-->
