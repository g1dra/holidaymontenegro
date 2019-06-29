
<div class="header_absolute
    @if(Request::is('/'))
    ds home
@endif
    cover-background ds s-overlay s-parallax">
    <!--topline section visible only on small screens|-->

    <section class="page_topline ds s-py-10 c-my-10">

        <div class="container" style="padding: 0;">
{{--            <div class="row">--}}
{{--                <div class="col-md-6 text-center text-lg-left">--}}
{{--                </div>--}}
{{--                <div class="col-md-6 text-center text-lg-right">--}}
{{--                    <ul class="top-includes border-divided">--}}
{{--                        <li class="dropdown-language">--}}
{{--                            <div class="dropdown">--}}
{{--                                <a class="dropdown-toggle" href="#" role="button" id="dropdown-language" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                    <img src="images/flags/us.gif" alt="img">--}}
{{--                                    English--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu ls" aria-labelledby="dropdown-language" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(25px, 18px, 0px);">--}}
{{--                                    <a href="#"><img src="images/flags/de.gif" alt="img"> German</a>--}}
{{--                                    <a href="#"><img src="images/flags/us.gif" alt="img"> English</a>--}}
{{--                                    <a href="#"><img src="images/flags/fr.gif" alt="img"> French</a>--}}
{{--                                    <a href="#"><img src="images/flags/it.gif" alt="img"> Italian</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row align-items-center">
                <div class="col-12 col-md-4 col-xl-4">
                    <div class="media" id="holiday-numbers-holder">
                        <div id = "holiday-icon-holder">
									<span class="icon-styled ">
										<i class="fa color-main2 fa-phone"></i>
									</span>
                        </div>
{{--                        <div class="media-body">--}}
{{--                            <span class="small-text">Booking your trip</span>--}}

{{--                        </div>--}}
                        <div id="holiday-phone-holder">
                            <p> <span class="flag-icon flag-icon-tr"></span> +382 63 493 586</p>
                            <p title="WhatsApp"> <span class="flag-icon flag-icon-tr"></span> +382 63 493 587</p>
                            <p> <span class="flag-icon flag-icon-me"></span> +382 67 094 002</p>
{{--                            <p> <span class="flag-icon flag-icon-me"></span> +382 67 258 232</p>--}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center hidden-below-md" style="margin: 0">
                    <a href="./" >
                        <img src="/images/logo.png" alt="img">
                    </a>
                </div>
                <div class="col-12 col-md-4 col-xl-4">
                    <ul style="text-align: right;">
                        <li class="dropdown-language">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdown-language" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="images/flags/us.gif" alt="img">
                                    English
                                </a>
                                <div class="dropdown-menu ls" aria-labelledby="dropdown-language" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(25px, 18px, 0px);">
                                    <a href="#"><img src="images/flags/tr.gif" alt="img">Turkish</a>

                                </div>
                            </div>
                        </li>
                    </ul>
                    <br>
                    <br>
                    <div class="media">
                        <div class="media-body align-items-end">
                            <span class="small-text">our emailaddress</span>
                            <p>info@holidaymontenegro.com</p>
                        </div>
                        <span class="icon-styled ">
										<i class="fa color-main2 fa-pencil"></i>
									</span>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!--eof topline-->
    <!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
    <header class="page_header ls justify-nav-center">
        <div class="container-fluid">
            <div class="row align-items-lg-end align-items-center">
                <div class="col-10 col-md-4 hidden-above-md d-flex">
                    <a href="./" class="logo">
                        <img src="/images/logo.png" alt="img">
                    </a>

                    <div class="media-wrap">
                        <div class="media">
										<span class="icon-styled ">
											<i class="fa color-main2 fa-phone"></i>
										</span>
                            <div class="media-body">
                                <span class="small-text">Booking your trip</span>
                                <p>3 (800) 234 3695</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body align-items-end">
                                <span class="small-text">our emailaddress</span>
                                <p>mountis@office.com</p>
                            </div>
                            <span class="icon-styled ">
											<i class="fa color-main2 fa-pencil"></i>
										</span>
                        </div>
                    </div>
                </div>
                @include('layouts.navbar')
            </div>
        </div>
        <!-- header toggler -->
        <span class="toggle_menu"><span></span></span>
    </header>

    @yield('bredcrumb')

</div>
