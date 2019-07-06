@extends('layouts.master')
@section('content')
    <section class="page_slider">
        <div class="flexslider vertical home_slider">
            <ul class="slides">
                <li class="ds s-overlay cover-image text-center">
							<span class="social-icons animate" data-animation="fadeInUp">
								<a href="https://www.facebook.com/Holidaymontenegro-1036397043232878/?ref=bookmarks" class="fa fa-facebook bg-light border-icon rounded-icon" title="facebook"></a>
								`<a href="https://twitter.com/karadagdatatil" class="fa fa-twitter bg-light border-icon rounded-icon" title="twitter"></a>
{{--								<a href="#" class="fa fa-google-plus bg-light border-icon rounded-icon" title="google"></a>--}}
							</span>
                    <video muted loop id="myVideo">
                        <source src="images/Travel_Stock_Footage_Reel-HD_4K_Royalty-free.mp4" data-time="74" type="video/mp4">
                    </video>
                    <img src="images/slide01.jpg" alt="img">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro_layers_wrapper intro_text_bottom">
                                    <div class="intro_layers">
                                        <div class="intro-layer">
                                            <span class="small-text color-main3">we are hiking and outdoor club</span>
                                        </div>
                                        <div class="intro-layer mt-10">
                                            <h2><span class="semibold">Let's Enjoy</span> the Wonders of the Nature <span class="semibold">Together</span></h2>
                                        </div>
                                        <div class="divider-35 hidden-below-sm"></div>
                                        <div class="intro-layer hidden-below-sm">
                                            <p>Prosciutto tail venison burgdoggen hamburger frankfurter pork picanha landjaeger. Chicken ham hock picanha meatloaf kielbasa sausage bresaol</p>
                                        </div>
                                        <div class="divider-xl-50"></div>
                                        <div class="divider-30 hidden-xl"></div>
                                        <div class="intro-layer ">
                                            <button class="btn-play">
                                                <i class="fa fa-play"></i>
                                                <i class="fa fa-pause"></i>
                                            </button>
                                        </div>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container-fluid -->
                </li>
                <li class="ds s-overlay cover-image text-center">
							<span class="social-icons animate" data-animation="fadeInUp">
								<a href="https://www.facebook.com/Holidaymontenegro-1036397043232878/?ref=bookmarks" class="fa fa-facebook bg-light border-icon rounded-icon" title="facebook"></a>
								<a href="#" class="fa fa-twitter bg-light border-icon rounded-icon" title="twitter"></a>
{{--								<a href="#" class="fa fa-google-plus bg-light border-icon rounded-icon" title="google"></a>--}}
							</span>
                    <img src="images/slide02.jpg" alt="img">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro_layers_wrapper intro_text_bottom">
                                    <div class="intro_layers">
                                        <div class="intro-layer">
                                            <span class="small-text color-main3">we are hiking and outdoor club</span>
                                        </div>
                                        <div class="intro-layer mt-10">
                                            <h2><span class="semibold">It Feels Good</span> to Be Lost In
                                                The Right <span class="semibold">Direction</span></h2>
                                        </div>
                                        <div class="divider-35 hidden-below-sm"></div>
                                        <div class="intro-layer hidden-below-sm">
                                            <p>Prosciutto tail venison burgdoggen hamburger frankfurter pork picanha landjaeger. Chicken ham hock picanha meatloaf kielbasa sausage bresaol</p>
                                        </div>
                                        <div class="divider-xl-50"></div>
                                        <div class="divider-30 hidden-xl"></div>
                                        <div class="intro-layer ">
                                            <a href="about.html" class="btn btn-maincolor">about us</a>
                                        </div>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container-fluid -->
                </li>
                <li class="ds s-overlay cover-image text-center">
							<span class="social-icons animate" data-animation="fadeInUp">
								<a href="https://www.facebook.com/Holidaymontenegro-1036397043232878/?ref=bookmarks" class="fa fa-facebook bg-light border-icon rounded-icon" title="facebook"></a>
								<a href="#" class="fa fa-twitter bg-light border-icon rounded-icon" title="twitter"></a>
{{--								<a href="#" class="fa fa-google-plus bg-light border-icon rounded-icon" title="google"></a>--}}
							</span>
                    <img src="images/slide03.jpg" alt="img">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro_layers_wrapper intro_text_bottom">
                                    <div class="intro_layers">
                                        <div class="intro-layer">
                                            <span class="small-text color-main3">we are hiking and outdoor club</span>
                                        </div>
                                        <div class="intro-layer mt-10">
                                            <h2><span class="semibold">It's Time</span> to Start Your
                                                Amazing <span class="semibold">Adventures</span></h2>
                                        </div>
                                        <div class="divider-35 hidden-below-sm"></div>
                                        <div class="intro-layer hidden-below-sm">
                                            <p>Prosciutto tail venison burgdoggen hamburger frankfurter pork picanha landjaeger. Chicken ham hock picanha meatloaf kielbasa sausage bresaol</p>
                                        </div>
                                        <div class="divider-xl-50"></div>
                                        <div class="divider-30 hidden-xl"></div>
                                        <div class="intro-layer ">
                                            <a href="booking.html" class="btn btn-maincolor">book trip</a>
                                        </div>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container-fluid -->
                </li>
            </ul>
        </div> <!-- eof flexslider -->
    </section>
    <section id="about" class="ls s-pb-45 s-pt-80 s-pt-md-120 s-pb-md-75 s-pb-xl-45 s-pt-xl-40 about-section">
        <div class="divider-80 d-none d-xl-block"></div>
        <div class="image_cover"></div>
        <div class="container">
            <div class="row d-flex justify-content-start">
                <div class="col-12 col-lg-7 col-xl-6 ">
                    <p class="top-subtitle">Discover story</p>
                    <h3 class="section-heading">Of the Holiday Montenegro <span class="back">about</span></h3>
                    <p>
{{--                        Kevin ribeye pork loin tenderloin, <span class="underline">spare ribs corned beef chicken.</span> Pancetta pork venison cupim bresaola.--}}
                        If you prefer active holiday, Montenegro is perfect place, because of very wide offer of tours that contain various types of activities.
                        From <span class="underline">adrenaline</span> activities, to very nice hiking or biking tours.
                        One is certain, everyone can find proper <span class="underline">entertainment</span> in Montenegro.
                    </p>

                    <p class="mt--5">
{{--                        Rump shoulder ribeye. Ribeye turducken pastrami, hamburger shoulder--}}
{{--                        <span class="underline">burgdoggen cupim</span> turkey.--}}
{{--                        Jerky beef ribs biltong cupim turducken ribeye swine kevin pork chop shankle frankfurter.--}}
{{--                        Turkey cupim alcatra, pork loin turducken.--}}
{{--                        <span class="links-maincolor3">--}}
{{--                            <a class="more" href="blog-single-@@type.html">read more<i class="fa fa-level-down" aria-hidden="true"></i></a>--}}
{{--                        </span>--}}
                        From Montenegro Coast over Central region to the North region, there is so many fantastic places for active holiday.
                        Our Tourist agency in Montenegro is specialised for great activities service and many unique tours.
                    </p>

                    <ul class="list-styled color-darkgrey mt-30">
                        <li>Cruising Destination Ideas</li>
                        <li>Deluxe Moderate And Value Disney</li>
                        <li>France On The Road</li>
                    </ul>
                </div>
                <div class="divider-60 d-none d-xl-block"></div>
            </div>
        </div>
    </section>
    <section id="team" class="ls team-section s-pt-65 s-pb-80 s-pb-md-120 s-pt-md-105 s-pb-xl-160 s-pt-xl-145 c-mb-30">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="top-subtitle">Amazing staff</p>
                    <h3 class="section-heading d-inline-block">Meet Our Team <span class="back">team</span></h3>
                    <div class="mt--15"></div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="vertical-item content-padding text-center">
                        <div class="item-media">
                            <img src="images/team/01.jpg" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content hero-bg">
                            <h5>
                                <a href="team-single.html">Connor Willis</a>
                            </h5>

                            <p class="small-text mb-2 color-main3">
                                Cortina, Italy
                            </p>
                            <p class="social-icons">

                                <a href="https://www.facebook.com/Holidaymontenegro-1036397043232878/?ref=bookmarks" class="fa fa-facebook" title="facebook"></a>
                                <a href="#" class="fa fa-twitter" title="twitter"></a>
{{--                                <a href="#" class="fa fa-google-plus" title="google"></a>--}}

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="vertical-item content-padding text-center">
                        <div class="item-media">
                            <img src="images/team/02.jpg" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content hero-bg">
                            <h5>
                                <a href="team-single.html">Brent Wright</a>
                            </h5>

                            <p class="small-text mb-2 color-main3">
                                Chamon, France
                            </p>
                            <p class="social-icons">

                                <a href="#" class="fa fa-facebook" title="facebook"></a>
                                <a href="#" class="fa fa-twitter" title="twitter"></a>
                                <a href="#" class="fa fa-google-plus" title="google"></a>

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="vertical-item content-padding text-center">
                        <div class="item-media">
                            <img src="images/team/03.jpg" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content hero-bg">
                            <h5>
                                <a href="team-single.html">Joshua Mendez</a>
                            </h5>

                            <p class="small-text mb-2 color-main3">
                                Kitzbüh, Austria
                            </p>
                            <p class="social-icons">

                                <a href="#" class="fa fa-facebook" title="facebook"></a>
                                <a href="#" class="fa fa-twitter" title="twitter"></a>
                                <a href="#" class="fa fa-google-plus" title="google"></a>

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="vertical-item content-padding text-center">
                        <div class="item-media">
                            <img src="images/team/04.jpg" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content hero-bg">
                            <h5>
                                <a href="team-single.html">Andre Saunders</a>
                            </h5>

                            <p class="small-text mb-2 color-main3">
                                Bentin, USA
                            </p>
                            <p class="social-icons">

                                <a href="#" class="fa fa-facebook" title="facebook"></a>
                                <a href="#" class="fa fa-twitter" title="twitter"></a>
                                <a href="#" class="fa fa-google-plus" title="google"></a>

                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="mt--30"></div>
        </div>
    </section>
    <section id="quote" class="ds s-pt-80 s-pb-130 s-pt-md-115 s-pb-md-195 s-pt-xl-125 s-pb-xl-160 s-parallax s-overlay  testimonials-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel" data-loop="false" data-margin="30" data-nav="false" data-dots="true" data-center="false" data-items="1" data-autoplay="true" data-responsive-xs="1" data-responsive-sm="1" data-responsive-md="1" data-responsive-lg="1">
                        <div class="row">
                            <div class="col-12 col-xl-6">
                                <blockquote class="quote-item text-center">
                                    <h5>Elmer Morrison</h5>
                                    <p class="small-text color-main3">
                                        Manager
                                    </p>

                                    <span class="quote-icon"><img src="images/quote.png" alt="img"></span>

                                    <p>
                                        Bresaola pancetta jowl turkey shank, chuck porchetta tenderloin hamburger picanha ground round!
                                    </p>
                                    <div class="divider-30 hidden-above-md"></div>
                                    <div class="divider-30 hidden-below-md"></div>
                                    <div>
{{--                                        <img src="images/signature.png" alt="img">--}}
                                    </div>
                                </blockquote>
                            </div>
                            <div class="col-lg-6 d-none d-xl-block">
                                <img class="pl-lg-3" src="images/quote_1.jpg" alt="img">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-6">
                                <blockquote class="quote-item text-center">
                                    <h5>Andre Franklin</h5>
                                    <p class="small-text color-main3">
                                        Manager
                                    </p>

                                    <span class="quote-icon"><img src="images/quote.png" alt="img"></span>

                                    <p>
                                        Strip steak alcatra chuck rump cow tri-tip short loin fatback pancetta jowl pork belly doner short ribs steak alcatra.
                                    </p>
                                    <div class="divider-30 hidden-above-md"></div>
                                    <div class="divider-30 hidden-below-md"></div>
                                    <div>
{{--                                        <img src="images/signature.png" alt="img">--}}
                                    </div>
                                </blockquote>
                            </div>
                            <div class="col-lg-6 d-none d-xl-block">
                                <img class="pl-lg-3" src="images/quote_2.jpg" alt="img">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-6">
                                <blockquote class="quote-item text-center">
                                    <h5>Mittie Robertson</h5>
                                    <p class="small-text color-main3">
                                        Manager
                                    </p>

                                    <span class="quote-icon"><img src="images/quote.png" alt="img"></span>

                                    <p>
                                        Tail strip steak beef pancetta short loin pork burgdoggen doner venison meatball turducken steak beef pancetta.
                                    </p>
                                    <div class="divider-30 hidden-above-md"></div>
                                    <div class="divider-30 hidden-below-md"></div>
                                    <div>
{{--                                        <img src="images/signature.png" alt="img">--}}
                                    </div>
                                </blockquote>
                            </div>
                            <div class="col-lg-6 d-none d-xl-block">
                                <img class="pl-lg-3" src="images/quote_3.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
