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
        <div class="container-fluid">
            <div class="row">
                <example-component :events="{{$events}}"></example-component>
            </div>
        </div>
    </section>
@endsection
