@extends('layouts.master')
@section('content')
    <section class="ds s-py-80 s-py-md-120 s-overlay mobile s-parallax coming-soon">
        <div class="container">
            <div class="row">

                <div class="d-none d-lg-block divider-70"></div>

                <div class="col-sm-12 text-center">
                    <h2 class=" text-center">
                        Coming Soon!
                    </h2>
                    <div class="d-none d-lg-block divider-90"></div>

                    <div id="comingsoon-countdown" data-date="July 4, 2019 23:59:59"></div>
                    <!--
            use "data-date" attribute with your date value to set date that you need to count to
            <div id="comingsoon-countdown" data-date="March 29, 2018 10:00:00"></div>
        -->

                </div>
                <div class="d-none d-lg-block divider-30"></div>
                <div class="col-md-12 text-center animate" data-animation="fadeInUp">

                    <div class="widget widget_mailchimp">

                        <h3 class="widget-title text-center">Welcome to Holiday Montenegro !!</h3>

                        <p>
                            Subscribe to our Newsletter to be updated.
                            <br>
                            We promise not to spam.
                        </p>

                        <form id="subscribe-form" class="signup m-auto" action="/newsletter" method="post">
                            @csrf
                            <label for="mailchimp_email">
                                <span class="screen-reader-text">Subscribe:</span>
                            </label>

                            <input name="email" type="email" class="form-control mailchimp_email" placeholder="Email Address">

                            <button type="submit" class="search-submit">
                                <span class="screen-reader-text">Subscribe</span>
                            </button>
                            <div class="response">

                            </div>
                        </form>

                    </div>
                </div>
                <div class="d-none d-lg-block divider-60"></div>
            </div>

        </div>
    </section>
    <script>

    </script>
@endsection


