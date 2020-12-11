<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>{{config('sys.app_short_name')}} - {{config('sys.app_full_name')}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="{{config('sys.app_full_name')}}"/>

    {{-- <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script> --}}
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{url('assets')}}/client/css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('assets')}}/client/fonts/font-awesome/css/font-awesome.min.css" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="{{url('assets')}}/client/fonts/themify-icons/themify-icons.css" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="{{url('assets')}}/client/css/owl.carousel.css" type="text/css" /><!-- Owl Carousal-->
    <link rel="stylesheet" href="{{url('assets')}}/client/css/price-range.css" type="text/css" /><!-- Owl Carousal -->

    <link rel="stylesheet" href="{{url('assets')}}/client/css/style.css" type="text/css" /><!-- Style -->
    <link rel="stylesheet" href="{{url('assets')}}/client/css/responsive.css" type="text/css" /><!-- Responsive -->
    <link rel="stylesheet" href="{{url('assets')}}/client/css/colors.css" type="text/css" /><!-- color -->

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{url('assets')}}/client/js/rs-plugin/css/settings.css">
    <link href="{{ asset('css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />

    <!-- END THEME STYLES -->
    @yield('extra_css')
    <style type="text/css">
        .btn-back{
            margin-top: 7px;
        }
    </style>

    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-sidebar-closed-hide-logo ppage-sidebar-closed-hide-logo page-footer-fixed">
<!-- BEGIN HEADER -->
@include('client.include.header')
<!-- END HEADER -->
<div class="clearfix"></div>
<!-- BEGIN CONTAINER -->
<div class="page-container" style="padding-top: 124px">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            {{-- @include('client.include.sidebar') --}}
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE HEAD -->
            <!-- END PAGE HEAD -->
            <!-- BEGIN PAGE BREADCRUMB -->
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE CONTENT INNER -->
            @yield('content')
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
{{-- <div class="page-footer">
    <div class="page-footer-inner"> --}}
        @include('client.include.footer')
    {{-- </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div> --}}


<script type="text/javascript" src="{{url('assets')}}/client/js/modernizr.js"></script><!-- Modernizer -->
<script type="text/javascript" src="{{url('assets')}}/client/js/jquery-1.10.2.min.js"></script><!-- Jquery -->
<script type="text/javascript" src="{{url('assets')}}/client/js/bootstrap.min.js"></script><!-- Bootstrap -->
<script type="text/javascript" src="{{url('assets')}}/client/js/owl.carousel.min.js"></script><!-- Owl Carousal -->
<script type="text/javascript" src="{{url('assets')}}/client/js/html5lightbox.js"></script><!-- HTML -->
<script type="text/javascript" src="{{url('assets')}}/client/js/scrolly.js"></script><!-- Parallax -->
<script type="text/javascript" src="{{url('assets')}}/client/js/price-range.js"></script><!-- Parallax -->
<script type="text/javascript" src="{{url('assets')}}/client/js/script.js"></script><!-- Script -->

{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrsRbcMCwCrRURPbjGpzcF4EMjHYVVDr4&libraries=places"></script> --}}
<script src="{{url('assets')}}/client/js/infobox.js"></script><!-- Parallax -->
<script src="{{url('assets')}}/client/js/data.json"></script>
<script src="{{url('assets')}}/client/js/markerclusterer.js"></script>
<script src="{{url('assets')}}/client/js/markers-map.js"></script>

<script type="text/javascript" src="{{url('assets')}}/client/js/modernizr.js"></script><!-- Modernizer -->
<script type="text/javascript" src="{{url('assets')}}/client/js/jquery-1.10.2.min.js"></script><!-- Jquery -->
<script type="text/javascript" src="{{url('assets')}}/client/js/bootstrap.min.js"></script><!-- Bootstrap -->
<script type="text/javascript" src="{{url('assets')}}/client/js/owl.carousel.min.js"></script><!-- Owl Carousal -->
<script type="text/javascript" src="{{url('assets')}}/client/js/html5lightbox.js"></script><!-- HTML -->
<script type="text/javascript" src="{{url('assets')}}/client/js/scrolly.js"></script><!-- Parallax -->
<script type="text/javascript" src="{{url('assets')}}/client/js/price-range.js"></script><!-- Parallax -->
<script type="text/javascript" src="{{url('assets')}}/client/js/script.js"></script><!-- Script -->

<script src="{{asset('assets/client/js/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{asset('assets/client/js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

<script>
    google.maps.event.addDomListener(window, 'load', speedTest.init);
</script>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>

@include('client.include.jq')
@yield('scripts')
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    // jQuery(document).ready(function() {
    //     Metronic.init(); // init metronic core componets
    //     Layout.init();
    //     // ComponentsDropdowns.init();
    //     // TableAdvanced.init();
    // });
    window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
