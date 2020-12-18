<?php
$user = \Illuminate\Support\Facades\Auth::user();
?>
{{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/metronic') }}/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/> --}}
<link rel="stylesheet" href="{{ url('/') }}/assets/client/fonts/glyphicons/css/glyphicons.min.css" type="text/css" /><!-- Icons -->
<link rel="stylesheet" href="{{url('assets')}}/client/css/selection.css" type="text/css" /><!-- DROPDOWN style -->
<link href={{url("/assets/client/layout/css/star-rating-svg.css")}} rel="stylesheet">
<link rel="stylesheet" href="{{asset('/assets/client/css/bootstrap.min.css')}}" type="text/css" /><!-- Bootstrap -->
<link rel="stylesheet" href="{{asset('/assets/client/fonts/font-awesome/css/font-awesome.min.css')}}" type="text/css" /><!-- Icons -->
<link rel="stylesheet" href="{{asset('/assets/client/fonts/themify-icons/themify-icons.css')}}" type="text/css" /><!-- Icons -->
<link rel="stylesheet" href="{{asset('/assets/client/css/owl.carousel.css')}}" type="text/css" /><!-- Owl Carousal -->
<link rel="stylesheet" href="{{asset('/assets/client/css/price-range.css')}}" type="text/css" /><!-- Owl Carousal -->
{{-- <link rel="stylesheet" href="{{asset('/assets/client/css/lightslider.min.css')}}"> --}}

<link rel="stylesheet" href="{{asset('/assets/client/css/style.css')}}" type="text/css" /><!-- Style -->
<link rel="stylesheet" href="{{asset('/assets/client/css/responsive.css')}}" type="text/css" /><!-- Responsive -->
<link rel="stylesheet" href="{{asset('/assets/client/css/colors.css')}}" type="text/css" /><!-- color -->

<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="{{asset('/assets/client/js/rs-plugin/css/settings.css')}}">
@include('client.layouts.login')
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrsRbcMCwCrRURPbjGpzcF4EMjHYVVDr4&libraries=places"></script> --}}
<div class="page-header navbar navbar-fixed-top" style="margin-top: 0px">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <div class="menu-toggler" style="padding-top: 0px">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                <header class="simple-header for-sticky ">
                    <div class="menu">
                        <div class="container">
                            <div class="logo">
                                <a href="index.html" title="">
                                    <i class="" style="width: 18px; padding-top: 50%">
                                        <img class="homepage-logo" src="{{url('/')}}/assets/global/img/logo.png" style="width:4.5em" />
                                        <strong style="width:200px;"><i class="sub-title">Investment Properties</i></strong>
                                    </i>
                                </a>
                            </div>

                            <div class="popup-client">
                                <span onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-user"></i> Signin / Signup</span>
                            </div>
                            <span class="menu-toggle"><i class="fa fa-bars"></i></span>
                            <nav>
                                <ul>
                                    <li><a href={{route('home')}} title="">HOME</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#" title="">PROPERTIES</a>
                                        <ul>
                                            <li><a href="properties3.html" title="">MY ENTRIES</a></li>
                                            <li><a href="properties.html" title="">BOOKMARKS</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="property.html" title="">MESSAGES</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#" title="">Hello, username</a>
                                        <ul>
                                            <li><a href={{route('profile_edit','5f8f0148a802bc4a96246922'/*$bank['id']*/)}} title="">MY PROFILE</a></li>
                                            <li><a href="properties.html" title="">LOGOUT</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>

                            <!-- modal -->


                            <!-- modal end    -->

                        </div>
                    </div>
                </header>
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE TOP -->
        {{-- <div class="top-header">

        </div> --}}
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
