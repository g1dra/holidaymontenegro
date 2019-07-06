@extends('layouts.master')
@section('bredcrumb')
    <section class="page_title ds s-py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <h1 class="bold">Events</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
{{--                        <li class="breadcrumb-item">--}}
{{--                            <a href="#">Homepage</a>--}}
{{--                        </li>--}}
                        <li class="breadcrumb-item active">
                            Events
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('content')

    <section class="ls routs routs-main s-py-80 s-py-md-120 s-py-xl-160">
        <div class="container-fluid" style="padding-top: 20px;">

            <div class="row">

                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-xl-6">
                            <div class="filters gallery-filters small-text text-lg-right">
                                <a href="#" data-filter="*" class="active selected">All</a>
                                <a href="#" data-filter=".private">PRIVATE TOURS</a>
                                <a href="#" data-filter=".group">GROUP TOURS</a>
                                <a href="#" data-filter=".driving">DRIVING TOURS</a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <form class="routs-form">
                                <div class="form-group has-placeholder">
                                    <label for="location">All locations</label>
                                    <select name="location" id="location">
                                        <option value="" selected="selected">All locations</option>
                                        <option value="Canada">Canada</option>
                                        <option value="USA">USA</option>
                                        <option value="Spain">Spain</option>
                                    </select>
                                </div>
                                <div class="form-group has-placeholder">
                                    <label for="levels">All Levels</label>
                                    <select name="levels" id="levels">
                                        <option value="" selected="selected">All Levels</option>
                                        <option value="low">low</option>
                                        <option value="medium">medium</option>
                                        <option value="high">high</option>
                                    </select>
                                </div>
                                <div class="form-group has-placeholder">
                                    <label for="season">All Seasons</label>
                                    <select name="season" id="season">
                                        <option value="" selected="selected">All Seasons</option>
                                        <option value="winter">winter</option>
                                        <option value="summer">summer</option>
                                        <option value="autumn">autumn</option>
                                        <option value="spring">spring</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row isotope-wrapper masonry-layout c-gutter-0" data-filters=".gallery-filters">

                        <div class="col-xl-3 col-lg-4 col-md-6 private driving">

                            <div class="vertical-item gallery-title text-center ">
                                <div class="price">
                                    <span>from 320$</span>
                                </div>
                                <div class="item-media gradientdarken-background">
                                    <img src="images/routs/01.jpg" alt="img">
                                    <div class="media-links">
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h4 class="mt-4">
                                        <a href="rout-single.html">Mountis Track # 1</a>
                                    </h4>
                                    <span class="small-text subtitle">
												mar 25 - apr 18 / Brent Wright
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

                        <div class="col-xl-3 col-lg-4 col-md-6 group">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="price">
                                    <span>from 129$</span>
                                </div>
                                <div class="item-media gradientdarken-background">
                                    <img src="images/routs/02.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h4 class="mt-4">
                                        <a href="rout-single.html">Mountis Track # 2</a>
                                    </h4>
                                    <span class="small-text subtitle">
												mar 25 - apr 18 / Connor Willis
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

                        <div class="col-xl-3 col-lg-4 col-md-6 driving">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="price">
                                    <span>from 250$</span>
                                </div>
                                <div class="item-media gradientdarken-background">
                                    <img src="images/routs/03.jpg" alt="img">
                                    <div class="media-links">
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h4 class="mt-4">
                                        <a href="rout-single.html">Mountis Track # 3</a>
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

                        <div class="col-xl-3 col-lg-4 col-md-6 private">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="price">
                                    <span>from 230$</span>
                                </div>
                                <div class="item-media gradientdarken-background">
                                    <img src="images/routs/04.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h4 class="mt-4">
                                        <a href="rout-single.html">Mountis Track # 4</a>
                                    </h4>
                                    <span class="small-text subtitle">
												mar 25 - apr 18 / Joshua Mendez
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

                        <div class="col-xl-3 col-lg-4 col-md-6 driving">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="price">
                                    <span>from 320$</span>
                                </div>
                                <div class="item-media gradientdarken-background">
                                    <img src="images/routs/05.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h4 class="mt-4">
                                        <a href="rout-single.html">Mountis Track # 5</a>
                                    </h4>
                                    <span class="small-text subtitle">
												mar 25 - apr 18 / Andre Saunders
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

                        <div class="col-xl-3 col-lg-4 col-md-6 private">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="price">
                                    <span>from 129$</span>
                                </div>
                                <div class="item-media gradientdarken-background">
                                    <img src="images/routs/06.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h4 class="mt-4">
                                        <a href="rout-single.html">Mountis Track # 6</a>
                                    </h4>
                                    <span class="small-text subtitle">
												mar 25 - apr 18 / Brent Wright
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

                        <div class="col-xl-3 col-lg-4 col-md-6 group">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="price">
                                    <span>from 250$</span>
                                </div>
                                <div class="item-media gradientdarken-background">
                                    <img src="images/routs/07.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h4 class="mt-4">
                                        <a href="rout-single.html">Mountis Track # 7</a>
                                    </h4>
                                    <span class="small-text subtitle">
												mar 25 - apr 18 / Joshua Mendez
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

                        <div class="col-xl-3 col-lg-4 col-md-6 driving">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="price">
                                    <span>from 230$</span>
                                </div>
                                <div class="item-media gradientdarken-background">
                                    <img src="images/routs/08.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h4 class="mt-4">
                                        <a href="rout-single.html">Mountis Track # 8</a>
                                    </h4>
                                    <span class="small-text subtitle">
												mar 25 - apr 18 / Andre Saunders
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

                        <div class="col-xl-3 col-lg-4 col-md-6 private">

                            <div class="vertical-item gallery-title text-center ">
                                <div class="item-media gradientdarken-background">
                                    <div class="price">
                                        <span>from 320$</span>
                                    </div>
                                    <img src="images/routs/09.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h4 class="mt-4">
                                        <a href="rout-single.html">Mountis Track # 9</a>
                                    </h4>
                                    <span class="small-text subtitle">
												mar 25 - apr 18 / Andre Saunders
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

                        <div class="col-xl-3 col-lg-4 col-md-6 driving">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="price">
                                    <span>from 129$</span>
                                </div>
                                <div class="item-media gradientdarken-background">
                                    <img src="images/routs/10.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h4 class="mt-4">
                                        <a href="rout-single.html">Mountis Track # 10</a>
                                    </h4>
                                    <span class="small-text subtitle">
												mar 25 - apr 18 / Connor Willis
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

                        <div class="col-xl-3 col-lg-4 col-md-6 private">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="price">
                                    <span>from 250$</span>
                                </div>
                                <div class="item-media gradientdarken-background">
                                    <img src="images/routs/11.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h4 class="mt-4">
                                        <a href="rout-single.html">Mountis Track # 11</a>
                                    </h4>
                                    <span class="small-text subtitle">
												mar 25 - apr 18 / Joshua Mendez
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

                        <div class="col-xl-3 col-lg-4 col-md-6 group">
                            <div class="vertical-item gallery-title text-center ">
                                <div class="price">
                                    <span>from 230$</span>
                                </div>
                                <div class="item-media gradientdarken-background">
                                    <img src="images/routs/12.jpg" alt="img">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h4 class="mt-4">
                                        <a href="rout-single.html">Mountis Track # 12</a>
                                    </h4>
                                    <span class="small-text subtitle">
												mar 25 - apr 18 / Andre Saunders
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

                    </div>
                    <!-- .isotope-wrapper-->

                    <div class="row mt-60">
                        <div class="col-sm-12 text-center">
                            <nav class="navigation pagination " role="navigation">
                                <h2 class="screen-reader-text">Posts navigation</h2>
                                <div class="nav-links">
                                    <a class="prev page-numbers" href="gallery-right.html">
                                        <i class="fa fa-chevron-left"></i>
                                        <span class="screen-reader-text">Previous page</span>
                                    </a>
                                    <span class="page-numbers current">
												<span class="meta-nav screen-reader-text">Page </span>
												1
											</span>
                                    <a class="page-numbers" href="gallery-right.html">
                                        <span class="meta-nav screen-reader-text">Page </span>
                                        ..
                                    </a>
                                    <a class="page-numbers" href="gallery-right.html">
                                        <span class="meta-nav screen-reader-text">Page </span>
                                        5
                                    </a>
                                    <a class="next page-numbers" href="gallery-right.html">
                                        <span class="screen-reader-text">Next page</span>
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection
