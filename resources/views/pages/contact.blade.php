@extends('layouts.master')
@section('bredcrumb')
    <section class="page_title ds s-py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <h1 class="bold">Contact</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            FAQ
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="ls contact s-pt-80 s-pt-md-120 s-pt-xl-160 s-pb-60 s-pb-md-100 s-pb-xl-140 c-mb-20 c-gutter-60">
        <div class="container">
            <div class="row mt--5">

                <div data-animation="scaleAppear" class=" col-lg-6  animate">
                    <h4 class="text-left mb-20">
                        Get In Touch
                    </h4>
                    <div class="divider-30 hidden-below-lg"></div>
                    <p>
                        Pastrami boudin bacon, drumstick t-bone short loin venison. Turkey andouille landjaeger venison buffalo cupim ham hock rump tri-tip boudin. Cow ham hock turkey.
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <div class="media">
										<span class="icon-styled ">
											<i class="fa color-main2 fa-phone"></i>
										</span>
                                <div class="media-body">
                                    <span class="small-text">Booking your trip</span>
                                    <p><span class="flag-icon flag-icon-tr"></span>+382 63 493 586 </p>

                                    <span class="small-text">Booking your trip</span>
                                    <p><span class="flag-icon flag-icon-tr"></span> +382 63 493 587</p>

                                    <span class="small-text">Booking your trip</span>
                                    <p><span class="flag-icon flag-icon-me"></span> +382 67 094 002</p>

                                    <span class="small-text">Booking your trip</span>
                                    <p><span class="flag-icon flag-icon-me"></span> +382 67 258 232</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
										<span class="icon-styled ">
											<i class="fa color-main2 fa-map-marker"></i>
										</span>
                                <div class="media-body">
                                    <span class="small-text">our ADDRESS</span>
                                    <p>Bratstva Jedinstva bb</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
										<span class="icon-styled ">
											<i class="fa color-main2 fa-pencil"></i>
										</span>
                                <div class="media-body">
                                    <span class="small-text">EMAIL address</span>
                                    <p>info@holidaymontenegro.com</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
										<span class="icon-styled ">
											<i class="fa color-main2 fa-clock-o"></i>
										</span>
                                <div class="media-body">
                                    <span class="small-text">Working Hours:</span>
                                    <p>Daily: 9 am - 6 pm / 09h - 18h </p>

                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="divider-20 hidden-above-lg"></div>

                <div data-animation="scaleAppear" class=" col-lg-6 animate">
                    <h4 class="text-left mb-35">
                        Contact Form
                    </h4>
                    <form class="contact-form c-mb-20 c-gutter-20" method="post" action="/send-email">
                        @csrf

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group has-placeholder">
                                    <label for="name">Full Name <span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group has-placeholder">
                                    <label for="phone">Phone<span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group has-placeholder">
                                    <label for="email">Email address<span class="required">*</span></label>
                                    <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group has-placeholder">
                                    <label for="subject">Subject<span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-12 mb-0">

                                <div class="form-group has-placeholder">
                                    <label for="message">Message</label>
                                    <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-30">

                            <div class="col-sm-12 text-left">

                                <div class="form-group">
                                    <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">Send Now
                                    </button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
