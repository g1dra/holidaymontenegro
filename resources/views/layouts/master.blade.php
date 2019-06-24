@include('layouts.head')

<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a
    href="http://google.com/" class="color-main">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<div class="preloader">
    <div class="preloader_image pulse"></div>
</div>

<!-- search modal -->
@include('layouts.search-modal')

<!-- Unyson messages modal -->
@include('layouts.messages_modal')

<!-- wrappers for visual page editor and boxed version of template -->
<div id="app">
    <div id="canvas">
        <div id="box_wrapper">

            <!-- template sections -->

            @include('layouts.header')

            @yield('content')

            {{--            @include('layouts.sections.page-slider')--}}

            {{--<section id="about"
                     class="ls s-pt-70 s-pb-65 s-pt-md-120 s-pb-md-105 s-pb-xl-85 s-pt-xl-65 about-section overflow-visible">
                <div class="divider-80 d-none d-xl-block"></div>
                <div class="image_cover"></div>
                <div class="container">
                    <div class="row d-flex justify-content-start">
                        <div class="col-12 col-lg-7 col-xl-6 ">
                            <p class="top-subtitle">Discover story</p>
                            <h3 class="section-heading">Of the Mountis Trip <span class="back">story</span></h3>
                            <p>
                                Kevin ribeye pork loin tenderloin, <span
                                    class="underline">spare ribs corned beef chicken.</span> Pancetta pork venison cupim
                                bresaola.
                            </p>

                            <p class="mt--5">
                                Rump shoulder ribeye. Ribeye turducken pastrami, hamburger shoulder <span class="underline">burgdoggen cupim</span>
                                turkey. Jerky beef ribs biltong cupim turducken ribeye swine kevin pork chop shankle
                                frankfurter. Turkey cupim alcatra, pork loin turducken. <span class="links-maincolor3"><a
                                        class="more text-uppercase" href="blog-single-@@type.html">read more<i
                                            class="fa fa-level-down" aria-hidden="true"></i></a></span>
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
            </section>--}}

            {{--<section id="gallery" class="ls ms gallery-section  c-gutter-0 c-mb-0">
                <div class="container-fluid">
                    <div class="row isotope-wrapper" data-filters=".gallery-filters">

                        <div class="col-xl-6 grid-item backpacking hikes adventure_trips d-none d-xl-flex">

                            <div class="vertical-item stamp-wrap gallery-title ">
                                <div class="item-media">
                                    <img src="/images/gallery/01.png" alt="img">
                                </div>
                                <div class="gallery-header stamp">
                                    <div class="text-left content">
                                        <p class="top-subtitle">photo from our clients and their trips</p>
                                        <h3 class="section-heading">From Our Large Gallery<span class="back">Photos</span>
                                        </h3>
                                        <div class="filters gallery-filters small-text text-lg-right">
                                            <a href="#" data-filter="*" class="active selected">All</a>
                                            <a href="#" data-filter=".hikes">Day Hikes</a>
                                            <a href="#" data-filter=".backpacking">Backpacking</a>
                                            <a href="#" data-filter=".adventure_trips">Adventure Trips</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-3 col-md-6 grid-item backpacking hikes adventure_trips">

                            <div class="vertical-item gallery-title text-center ">
                                <div class="item-media gradientdarken-background">
                                    <img src="/images/gallery/01.jpg" alt="img">
                                    <div class="media-links">
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h5 class="mt-4">
                                        <a href="gallery-single.html">See The Unmatched Beauty</a>
                                    </h5>
                                    <div class="links-wrap">
                                        <a class="link-zoom photoswipe-link" title="" href="/images/gallery/01.jpg"></a>
                                        <a class="link-anchor" title="" href="gallery-single.html"></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-3 col-md-6 grid-item backpacking">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="item-media gradientdarken-background">
                                    <img src="/images/gallery/02.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h5 class="mt-4">
                                        <a href="gallery-single.html">Como Mantener Tu Salud</a>
                                    </h5>
                                    <div class="links-wrap">
                                        <a class="link-zoom photoswipe-link" title="" href="/images/gallery/02.jpg"></a>
                                        <a class="link-anchor" title="" href="gallery-single.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 grid-item adventure_trips">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="item-media gradientdarken-background">
                                    <img src="/images/gallery/03.jpg" alt="img">
                                    <div class="media-links">
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h5 class="mt-4">
                                        <a href="gallery-single.html">Last Minute Festive Packages</a>
                                    </h5>
                                    <div class="links-wrap">
                                        <a class="link-zoom photoswipe-link" title="" href="/images/gallery/03.jpg"></a>
                                        <a class="link-anchor" title="" href="gallery-single.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 grid-item hikes">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="item-media gradientdarken-background">
                                    <img src="/images/gallery/04.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h5 class="mt-4">
                                        <a href="gallery-single.html">Cost Cutting Ideas</a>
                                    </h5>
                                    <div class="links-wrap">
                                        <a class="link-zoom photoswipe-link" title="" href="/images/gallery/04.jpg"></a>
                                        <a class="link-anchor" title="" href="gallery-single.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 grid-item adventure_trips">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="item-media gradientdarken-background">
                                    <img src="/images/gallery/05.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h5 class="mt-4">
                                        <a href="gallery-single.html">Take A Romantic Break In A Boutique Hotel</a>
                                    </h5>
                                    <div class="links-wrap">
                                        <a class="link-zoom photoswipe-link" title="" href="/images/gallery/05.jpg"></a>
                                        <a class="link-anchor" title="" href="gallery-single.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 grid-item  backpackinghikes">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="item-media gradientdarken-background">
                                    <img src="/images/gallery/06.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h5 class="mt-4">
                                        <a href="gallery-single.html">Train Travel On Track</a>
                                    </h5>
                                    <div class="links-wrap">
                                        <a class="link-zoom photoswipe-link" title="" href="/images/gallery/06.jpg"></a>
                                        <a class="link-anchor" title="" href="gallery-single.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 grid-item backpacking">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="item-media gradientdarken-background">
                                    <img src="/images/gallery/07.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h5 class="mt-4">
                                        <a href="gallery-single.html">How To Maintain Your Mental</a>
                                    </h5>
                                    <div class="links-wrap">
                                        <a class="link-zoom photoswipe-link" title="" href="/images/gallery/07.jpg"></a>
                                        <a class="link-anchor" title="" href="gallery-single.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 grid-item adventure_trips">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="item-media gradientdarken-background">
                                    <img src="/images/gallery/08.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h5 class="mt-4">
                                        <a href="gallery-single.html">San Diego Vacation Rental</a>
                                    </h5>
                                    <div class="links-wrap">
                                        <a class="link-zoom photoswipe-link" title="" href="/images/gallery/08.jpg"></a>
                                        <a class="link-anchor" title="" href="gallery-single.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 grid-item hikes">

                            <div class="vertical-item gallery-title text-center ">
                                <div class="item-media gradientdarken-background">
                                    <img src="/images/gallery/09.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h5 class="mt-4">
                                        <a href="gallery-single.html">Choose The Perfect</a>
                                    </h5>
                                    <div class="links-wrap">
                                        <a class="link-zoom photoswipe-link" title="" href="/images/gallery/09.jpg"></a>
                                        <a class="link-anchor" title="" href="gallery-single.html"></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-3 col-md-6 grid-item backpacking hikes adventure_trips hidden-below-md">

                            <div class="vertical-item stamp-wrap last gallery-title ">
                                <div class="item-media">
                                    <img src="/images/gallery/00.png" alt="img">
                                </div>
                                <div class="gallery-header stamp view-more">
                                    <div class="text-left">
                                        <a class="text-uppercase" href="gallery-title-4-cols-fullwidth.html">view more
                                            photos</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="mt-30 hidden-above-md"></div>
                    <div class="row">
                        <div class="col-12 text-center d-md-none">
                            <a class="btn btn-maincolor mb-0" href="gallery-title-4-cols-fullwidth.html">view more
                                photos</a>
                        </div>
                    </div>
                    <div class="mb-80 hidden-above-md"></div>
                </div>
            </section>

            <section id="team"
                     class="ls team-section s-pt-65 s-pb-80 s-pb-md-120 s-pt-md-105 s-pb-xl-160 s-pt-xl-145 c-mb-30">
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
                                    <img src="/images/team/01.jpg" alt="img">
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
                                    <img src="/images/team/02.jpg" alt="img">
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
                                    <img src="/images/team/03.jpg" alt="img">
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
                                    <img src="/images/team/04.jpg" alt="img">
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

            <section id="quote"
                     class="ds s-pt-80 s-pb-130 s-pt-md-115 s-pb-md-195 s-pt-xl-125 s-pb-xl-160 s-parallax s-overlay  testimonials-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="owl-carousel" data-loop="false" data-margin="30" data-nav="false" data-dots="true"
                                 data-center="false" data-items="1" data-autoplay="true" data-responsive-xs="1"
                                 data-responsive-sm="1" data-responsive-md="1" data-responsive-lg="1">
                                <div class="row">
                                    <div class="col-12 col-xl-6">
                                        <blockquote class="quote-item text-center">
                                            <h5>Elmer Morrison</h5>
                                            <p class="small-text color-main3">
                                                Manager
                                            </p>

                                            <span class="quote-icon"><img src="/images/quote.png" alt="img"></span>

                                            <p>
                                                Bresaola pancetta jowl turkey shank, chuck porchetta tenderloin hamburger
                                                picanha ground round!
                                            </p>
                                            <div class="divider-30 hidden-above-md"></div>
                                            <div class="divider-30 hidden-below-md"></div>
                                            <div>
                                                <img src="/images/signature.png" alt="img">
                                            </div>
                                        </blockquote>
                                    </div>
                                    <div class="col-lg-6 d-none d-xl-block">
                                        <img class="pl-lg-3" src="/images/quote_1.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-xl-6">
                                        <blockquote class="quote-item text-center">
                                            <h5>Andre Franklin</h5>
                                            <p class="small-text color-main3">
                                                Manager
                                            </p>

                                            <span class="quote-icon"><img src="/images/quote.png" alt="img"></span>

                                            <p>
                                                Strip steak alcatra chuck rump cow tri-tip short loin fatback pancetta jowl
                                                pork belly doner short ribs steak alcatra.
                                            </p>
                                            <div class="divider-30 hidden-above-md"></div>
                                            <div class="divider-30 hidden-below-md"></div>
                                            <div>
                                                <img src="/images/signature.png" alt="img">
                                            </div>
                                        </blockquote>
                                    </div>
                                    <div class="col-lg-6 d-none d-xl-block">
                                        <img class="pl-lg-3" src="/images/quote_2.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-xl-6">
                                        <blockquote class="quote-item text-center">
                                            <h5>Mittie Robertson</h5>
                                            <p class="small-text color-main3">
                                                Manager
                                            </p>

                                            <span class="quote-icon"><img src="/images/quote.png" alt="img"></span>

                                            <p>
                                                Tail strip steak beef pancetta short loin pork burgdoggen doner venison
                                                meatball turducken steak beef pancetta.
                                            </p>
                                            <div class="divider-30 hidden-above-md"></div>
                                            <div class="divider-30 hidden-below-md"></div>
                                            <div>
                                                <img src="/images/signature.png" alt="img">
                                            </div>
                                        </blockquote>
                                    </div>
                                    <div class="col-lg-6 d-none d-xl-block">
                                        <img class="pl-lg-3" src="/images/quote_3.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>--}}

{{--            @include('layouts.sections.trips')--}}

            {{--<section id="news" class="ls section-news s-pb-80 s-pb-md-120 s-pb-xl-160">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="top-subtitle">Our fresh blog</p>
                            <h3 class="section-heading d-inline-block">Latest News<span class="back">blog</span></h3>
                            <div class="mt-15"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="post cover-image ds s-overlay">
                                <img src="/images/news_bg.jpg" alt="img">
                                <div class="item-content">
                                    <h5>
                                        Choose The Perfect Accommodations
                                    </h5>
                                    <p class="item-meta flex-wrap d-flex ">
                                        <span><i class="fa fa-calendar color-main3"></i>19 mar, 18 </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="divider-30 hidden-above-lg"></div>
                            <div id="accordion01" role="tablist">
                                <div class="card">
                                    <div class="card-header post side-item" role="tab" id="collapse01_header">
                                        <div class="item-wrap">
                                            <div class="item-media">
                                                <img src="/images/events/comment_4.jpg" alt="img">
                                            </div>
                                        </div>

                                        <div class="item-content">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" href="#collapse01"
                                                   aria-expanded="false" aria-controls="collapse01">Become A Travel Pro In
                                                    One</a>
                                            </h5>

                                            <p class="item-meta flex-wrap d-flex ">
                                                <span><i class="fa fa-calendar color-main3"></i>20 mar, 18 </span>
                                            </p>
                                        </div>
                                    </div>

                                    <div id="collapse01" class="collapse show" role="tabpanel"
                                         aria-labelledby="collapse01_header" data-parent="#accordion01">
                                        <div class="card-body">
                                            Meatloaf frankfurter pig beef ribs, pork beef tri-tip venison chuck t-bone pork
                                            chop. Pork chop picanha venison meatball. Meatloaf turducken pork loin.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header post side-item" role="tab" id="collapse02_header">
                                        <div class="item-wrap">
                                            <div class="item-media">
                                                <img src="/images/events/comment_5.jpg" alt="img">
                                            </div>
                                        </div>

                                        <div class="item-content">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" href="#collapse02"
                                                   aria-expanded="false" aria-controls="collapse02">Vacation Home Rental
                                                    Success</a>
                                            </h5>

                                            <p class="item-meta flex-wrap d-flex ">
                                                <span><i class="fa fa-calendar color-main3"></i>22 mar, 18 </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div id="collapse02" class="collapse" role="tabpanel"
                                         aria-labelledby="collapse02_header" data-parent="#accordion01">
                                        <div class="card-body">
                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                            coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                            anderson
                                            cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header post side-item" role="tab" id="collapse03_header">
                                        <div class="item-wrap">
                                            <div class="item-media">
                                                <img src="/images/events/comment_6.jpg" alt="img">
                                            </div>
                                        </div>

                                        <div class="item-content">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" href="#collapse03"
                                                   aria-expanded="false" aria-controls="collapse03">Como Mantener Tu
                                                    Salud </a>
                                            </h5>

                                            <p class="item-meta flex-wrap d-flex ">
                                                <span><i class="fa fa-calendar color-main3"></i>27 mar, 18 </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div id="collapse03" class="collapse" role="tabpanel"
                                         aria-labelledby="collapse03_header" data-parent="#accordion01">
                                        <div class="card-body">
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                            you
                                            probably haven't heard of them accusamus labore sustainable sunt aliqua put a
                                            bird on it
                                            squid single-origin coffee shoreditch et.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>--}}

            @include('layouts.footer')


        </div><!-- eof #box_wrapper -->
    </div><!-- eof #canvas -->
</div>

@include('layouts.footer-scripts')


</body>

</html>
