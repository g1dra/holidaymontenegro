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

            @include('layouts.footer')


        </div><!-- eof #box_wrapper -->
    </div><!-- eof #canvas -->
</div>

@include('layouts.footer-scripts')
@yield('custom-scripts')

</body>

</html>
