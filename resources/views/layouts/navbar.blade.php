<div class="col-lg-12 col-1">
    <!-- main nav start -->
    <div class="nav-wrap">
    <nav class="top-nav">
        <ul class="nav sf-menu sf-js-enabled sf-arrows">


            <li class="{{ Request::is('/home') ? 'active' : '' }}">
                <a href="/home" >HomePage</a>
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <a href="index.html">MultiPage</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="index_static.html">Static Intro</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="index_singlepage.html">Single Page</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
            </li>
{{--            <li class="{{ Request::is('events') ? 'active' : '' }}">--}}
{{--                <a href="/events" >Events</a>--}}
{{--                <ul>--}}


{{--                    <li>--}}
{{--                        <a href="about.html">Boat Tours</a>--}}
{{--                    </li>--}}


{{--                    <!-- features -->--}}
{{--                    <li>--}}
{{--                        <a href="shortcodes_iconbox.html">Jeep Safari</a>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <a href="shortcodes_iconbox.html">Mountain Biking</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="comingsoon.html">Comingsoon</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="404.html">404</a>--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--            </li>--}}
            <li class="{{ Request::is('rent') ? 'active' : '' }}">
                <a href="/events">Adventures</a>
            </li>
            <li class="{{ Request::is('rent_a_car') ? 'active' : '' }}">
                <a href="/rent_a_car">Rent a car</a>
            </li>

            <li class="{{ Request::is('transfers') ? 'active' : '' }}">
                <a href="/transfers">Transfers</a>
            </li>

            <li class="{{ Request::is('apartments') ? 'active' : '' }}">
                <a href="/apartments">Apartments</a>
            </li>


            <li class="{{ Request::is('about') ? 'active' : '' }}">
                <a href="/about">About</a>
            </li>

            <li class="{{ Request::is('faq') ? 'active' : '' }}">
                <a href="/faq">FAQ</a>
            </li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}">
                <a href="/contact">Contact</a>
            </li>

            <!-- eof Gallery -->
            <!-- blog -->

            <!-- eof blog -->
            <!-- shop -->

            <!-- eof shop -->
            <!-- contacts -->

            <!-- eof contacts -->
        </ul>


    </nav>
    </div>
    <!-- eof main nav -->
</div>
