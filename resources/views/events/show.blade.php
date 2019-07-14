@extends('layouts.master')
@section('bredcrumb')
    <section class="page_title ds s-py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <h1 class="bold">Adventure {{$event->name}}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/events">Adventures</a>
                        </li>
                        {{--                        <li class="breadcrumb-item">--}}
                        {{--                            <a href="#">Homepage</a>--}}
                        {{--                        </li>--}}
                        <li class="breadcrumb-item active">
                            Adventures
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="ls routs rout-single s-py-80 s-py-md-120 s-py-xl-160">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="row c-gutter-60">

                        <div class="col-md-12 mb-45 col-lg-5">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="price">
                                    <span>from 250</span>
                                </div>
                                <div class="item-media">
                                    <img src="/images/routs/ballet_dancer_statue-_budva-_montenegro.jpg" alt="img">
                                </div>
                                <div class="item-content">
                                    <h4 class="mt-4">
                                        Mountis Track # 3
                                    </h4>
                                    <span class="small-text subtitle">
												mar 30 - apr 8 / Teresa Jefferson
											</span>
                                    <ul class="data-wrap">
                                        <li>
                                            <span class="title">Days</span>
                                            <span class="data">9-11</span>
                                        </li>
                                        <li>
                                            <span class="title">Max Group</span>
                                            <span class="data">15 (1)</span>
                                        </li>
                                        <li>
                                            <span class="title">Avg. Temp </span>
                                            <span class="data">80°F / 25°C</span>
                                        </li>
                                        <li>
                                            <span class="title">Difficultly</span>
                                            <span class="data">low</span>
                                        </li>
                                        <li>
                                            <span class="title">Type</span>
                                            <span class="data">DH/CC</span>
                                        </li>
                                        <li>
                                            <span class="title">Length</span>
                                            <span class="data">123 miles</span>
                                        </li>
                                        <li>
                                            <span class="title">Height</span>
                                            <span class="data">1200 ft+/-</span>
                                        </li>
                                        <li>
                                            <span class="title">Country</span>
                                            <span class="data">Canada</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-7">
                            <div class="mt--25"></div>
                            <h4>About Mountis Track #3</h4>
                            <p>
                                Capicola ham andouille drumstick spare ribs ribeye turducken tri-tip, pork chop pork loin. Filet mignon ball tip ham jowl, alcatra tenderloin burgdoggen pastrami capicola pork belly buffalo. Shankle landjaeger capicola tongue burgdoggen pork doner pig chicken ball tip cow spare.
                            </p>
                            <p>
                                Andouille rump beef ribs, drumstick landjaeger strip steak ground round tri-tip t-bone porchetta fatback venison boudin. Shank kielbasa turducken bacon shoulder. Shank alcatra bacon jowl chicken.
                            </p>

                            <blockquote class="special-quote">

                                <p>
                                    «Drumstick alcatra venison tail t-bone short ribs picanha, bacon capicola swine ham shoulder. Spare ribs ham prosciutto pork loin ribeye.»
                                </p>
                                <h4>Elmer Morrison</h4>
                                <p class="small-text color-main3 text-left">
                                    Manager
                                </p>
                            </blockquote>

                            <p>
                                Tongue buffalo kevin swine, landjaeger bacon kielbasa tri-tip meatball. Prosciutto picanha pig, chicken shoulder porchetta leberkas fatback swine sausage hamburger. Tenderloin pork picanha cow.
                            </p>

                            <div class="row c-gutter-5 mt-50 c-mb-5">
                                <div class="col-sm-6 col-md-3">
                                    <img src="images/routs/13.jpg" alt="img">
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <img src="images/routs/14.jpg" alt="img">
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <img src="images/routs/15.jpg" alt="img">
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <img src="images/routs/16.jpg" alt="img">
                                </div>
                            </div>

                            <form class="c-mb-20 c-gutter-20 mt-50" method="post" action="/">

                                <h4 class="text-normal">Booking a Track</h4>

                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group has-placeholder">
                                            <label for="name">Full Name <span class="required">*</span></label>
                                            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group has-placeholder">
                                            <label for="email">Email address<span class="required">*</span></label>
                                            <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group has-placeholder">
                                            <label for="phone">Phone<span class="required">*</span></label>
                                            <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group has-placeholder">
                                            <label for="days">how many days<span class="required">*</span></label>
                                            <input type="email" aria-required="true" size="30" value="" name="days" id="days" class="form-control" placeholder="how many days">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-sm-12 mb-0">

                                        <div class="form-group has-placeholder">
                                            <label for="message">Message</label>
                                            <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Message..."></textarea>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mt-30">

                                    <div class="col-sm-12">

                                        <div class="form-group">
                                            <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor mb-0">Book Now
                                            </button>

                                        </div>
                                    </div>

                                </div>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@stop
