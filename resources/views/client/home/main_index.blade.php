@extends('client.layouts.client')
@section('extra_css')
{{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/metronic') }}/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/> --}}
@endsection
@section('content')
    

    <!-- /.preloader -->
    <div id="preloader"></div>
    <div class="theme-layout">

        <div id="rev_slider-wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" >
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>


                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2000"
                            data-saveperformance="on"  data-title="Ken Burns Slide">
                            <!-- MAIN IMAGE -->
                            <img src="{{url('/uploads/slides/home2.jpg')}}"  alt="2" data-lazyload="{{url('/uploads/slides/home2.jpg')}}"
                                 data-bgposition="right top" data-kenburns="off" data-duration="12000"
                                 data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100"
                                 data-bgpositionend="center bottom">
                            <div class="tp-caption tentered_white_huge lft tp-resizeme"
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="130" data-hoffset="0" data-x="center"
                                 style="">
                                <img alt="" src="{{url('/uploads/sellers/4.png')}}" style="width: 110px; height: 110px;">
                            </div>
                            <div class="tp-caption tentered_white_huge lft tp-resizeme"
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="272" data-hoffset="0" data-x="center"
                                 style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                 font-weight: 400;">
                                Single Family Residential
                            </div>
                            <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300"
                                 data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="320"
                                 data-hoffset="0" data-x="center"
                                 style="color: #fff; font-size: 13px; text-transform: uppercase; letter-spacing: 10px;">
                                <i class="fa fa-map-marker"> </i> Not caroliana 234
                            </div>
                            <div class="tp-caption tentered_white_huge lft tp-resizeme"
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="365" data-hoffset="0" data-x="center"
                                 style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                 font-family: Montserrat; font-weight: 400;">
                                345000 $
                            </div>
                            <a href="property.html" class="pull-left tp-caption lfb tp-resizeme rs-parallaxlevel-0"
                               data-x="center"
                               data-y="420"
                               data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;
                               scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                               data-speed="500"
                               data-start="1200"
                               data-easing="Power3.easeInOut"
                               data-splitin="none"
                               data-splitout="none"
                               data-elementdelay="0.1"
                               data-endelementdelay="0.1"
                               data-linktoslide="next"
                               style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;padding:15px 28px;
                               color: #fff;text-transform: uppercase;
                               border: none; background:#000;
                               font-size: 12px; letter-spacing: 3px;
                               font-family: Montserrat; border-radius: 0px;
                               display: table; transition: .4s;">More Details</a>

                        </li>


                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2000"
                            data-saveperformance="on"  data-title="Ken Burns Slide">
                            <!-- MAIN IMAGE -->
                            <img src="{{url('/uploads/slides/home1.jpg')}}"  alt="2" data-lazyload="{{url('/uploads/slides/home1.jpg')}}"
                                 data-bgposition="right top" data-kenburns="off" data-duration="12000"
                                 data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100"
                                 data-bgpositionend="center bottom">
                            <div class="tp-caption tentered_white_huge lft tp-resizeme"
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="130" data-hoffset="0" data-x="center"
                                 style="">
                                <img alt="" src="{{url('/uploads/sellers/3.png')}}" style="width: 110px; height: 110px;">
                            </div>
                            <div class="tp-caption tentered_white_huge lft tp-resizeme"
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="272" data-hoffset="0" data-x="center"
                                 style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                 font-weight: 400;">
                                Single Family Residential
                            </div>
                            <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300"
                                 data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="320"
                                 data-hoffset="0" data-x="center"
                                 style="color: #fff; font-size: 13px; text-transform: uppercase; letter-spacing: 10px;">
                                <i class="fa fa-map-marker"> </i> Not caroliana 234
                            </div>
                            <div class="tp-caption tentered_white_huge lft tp-resizeme"
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="365" data-hoffset="0" data-x="center"
                                 style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                 font-family: Montserrat; font-weight: 400;">
                                345000 $
                            </div>
                            <a href="property.html" class="pull-left tp-caption lfb tp-resizeme rs-parallaxlevel-0"
                               data-x="center"
                               data-y="420"
                               data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;
                               scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                               data-speed="500"
                               data-start="1200"
                               data-easing="Power3.easeInOut"
                               data-splitin="none"
                               data-splitout="none"
                               data-elementdelay="0.1"
                               data-endelementdelay="0.1"
                               data-linktoslide="next"
                               style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;padding:15px 28px;
                               color: #fff;text-transform: uppercase;
                               border: none; background:#000;
                               font-size: 12px; letter-spacing: 3px;
                               font-family: Montserrat; border-radius: 0px;
                               display: table; transition: .4s;">More Details</a>

                        </li>



                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2000"
                            data-saveperformance="on"  data-title="Ken Burns Slide">
                            <!-- MAIN IMAGE -->
                            <img src="{{url('/uploads/slides/home3.jpg')}}"  alt="2" data-lazyload="{{url('/uploads/slides/home3.jpg')}}"
                                 data-bgposition="right top" data-kenburns="off" data-duration="12000"
                                 data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100"
                                 data-bgpositionend="center bottom">
                            <div class="tp-caption tentered_white_huge lft tp-resizeme"
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="130" data-hoffset="0" data-x="center"
                                 style="">
                                <img alt="" src="{{url('/uploads/sellers/3.png')}}" style="width: 110px; height: 110px;">
                            </div>
                            <div class="tp-caption tentered_white_huge lft tp-resizeme"
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="272" data-hoffset="0" data-x="center"
                                 style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                 font-weight: 400;">
                                Single Family Residential
                            </div>
                            <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300"
                                 data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="320"
                                 data-hoffset="0" data-x="center"
                                 style="color: #fff; font-size: 13px; text-transform: uppercase; letter-spacing: 10px;">
                                <i class="fa fa-map-marker"> </i> Not caroliana 234
                            </div>
                            <div class="tp-caption tentered_white_huge lft tp-resizeme"
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="365" data-hoffset="0" data-x="center"
                                 style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                 font-family: Montserrat; font-weight: 400;">
                                345000 $
                            </div>
                            <a href="property.html" class="pull-left tp-caption lfb tp-resizeme rs-parallaxlevel-0"
                               data-x="center"
                               data-y="420"
                               data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;
                               scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                               data-speed="500"
                               data-start="1200"
                               data-easing="Power3.easeInOut"
                               data-splitin="none"
                               data-splitout="none"
                               data-elementdelay="0.1"
                               data-endelementdelay="0.1"
                               data-linktoslide="next"
                               style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;padding:15px 28px;
                               color: #fff;text-transform: uppercase;
                               border: none; background:#000;
                               font-size: 12px; letter-spacing: 3px;
                               font-family: Montserrat; border-radius: 0px;
                               display: table; transition: .4s;">More Details</a>

                        </li>
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->

        <section class="horizontal-search">
            <div class="container">
                <div class="">
                    <div class="search-form">
                        <form action="properties.html"  method="get" class="form-inline">
                            <div class="search-form-content">
                                <div class="search-form-field">
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                        <div class="label-select">
                                            <select class="form-control" name="s_location">
                                                <option>All Locations</option>
                                                <option>Tokyo</option>
                                                <option>New Jersey</option>
                                                <option>New York</option>
                                                <option>Paris</option>
                                                <option>Marrakech</option>
                                                <option>lille</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                        <div class="label-select">
                                            <select class="form-control" name="s_sub_location">
                                                <option>All Sub-locations</option>
                                                <option>Central New York</option>
                                                <option>GreenVille</option>
                                                <option>Long Island</option>
                                                <option>New York City</option>
                                                <option>West Side</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                        <div class="label-select">
                                            <select class="form-control" name="s_cat">
                                                <option>All Categories </option>
                                                <option>Apartment</option>
                                                <option>Load</option>
                                                <option>Office Building</option>
                                                <option>House</option>
                                                <option>Villa</option>
                                                <option>Retail</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                        <div class="label-select">
                                            <select class="form-control" name="s_statu">
                                                <option> All Status </option>
                                                <option>Open house</option>
                                                <option>Rent </option>
                                                <option>Boy</option>
                                                <option>used</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                        <div class="label-select">
                                            <select class="form-control">
                                                <option>No. of Bedrooms</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                        <div class="label-select">
                                            <select class="form-control">
                                                <option>No. of Bed</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                        <span class="gprice-label">Price</span>
                                        <input type="text" class="span2" value="" data-slider-min="0"
                                               data-slider-max="600" data-slider-step="5"
                                               data-slider-value="[0,450]" id="price-range" >
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                        <span class="garea-label">Area</span>
                                        <input type="text" class="span2" value="" data-slider-min="0"
                                               data-slider-max="600" data-slider-step="5"
                                               data-slider-value="[50,450]" id="property-geo" >
                                    </div>
                                </div>
                            </div>
                            <div class="search-form-submit">
                                <button type="submit" class="btn-search">Search</button>
                            </div>
                        </form>
                    </div><!-- Services Sec -->

                </div>
            </div>
        </section>

        <section class="block remove-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading4">
                            <h2>RECENT PROPERTIES</h2>
                            <span>Lorem ipsum dolor</span>
                        </div>
                        <div class="properties-sec">
                            <div class="carousel-prop">
                                <div class="properties-box">
                                    <div class="properties-thumb">
                                        <img src="{{url('/uploads/property/property1.jpg')}}" alt="" />
                                        <span class="spn-status"> For Rent </span>
                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                        <span class="spn-save spn-fire" style="margin-top: 18%"> <i class="glyphicon glyphicon-fire"></i> </span>
                                        <ul class="property-info">
                                            <li>
                                                <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-bed"></i><span>  5   </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-building"> </i> <span>3   </span>
                                            </li>
                                        </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="{{url('/uploads/sellers/4.png')}}" title="Camilė">
                                            </a>
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>
                                    </div>
                                    <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                    <span class="price">$340000</span>
                                </div>
                                <div class="properties-box">
                                    <div class="properties-thumb">
                                        <img src="{{url('/uploads/property/property2.jpg')}}" alt="" />
                                        <span class="spn-status"> For Rent </span>
                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                        <span class="spn-save spn-fire" style="margin-top: 18%"> <i class="glyphicon glyphicon-fire"></i> </span>
                                        <ul class="property-info">
                                            <li>
                                                <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-bed"></i><span>  5   </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-building"> </i> <span>3   </span>
                                            </li>
                                        </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="{{url('/uploads/sellers/3.png')}}" title="Camilė">
                                            </a>
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                    </div>
                                    <h3><a href="#" title="New York Villa">New York Villa</a></h3>
                                    <span class="price">$3400000</span>
                                </div>
                                <div class="properties-box">
                                    <div class="properties-thumb">
                                        <img src="{{url('/uploads/property/property3.jpg')}}" alt="" />
                                        <span class="spn-status"> For Rent </span>
                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                        <span class="spn-save spn-fire" style="margin-top: 18%"> <i class="glyphicon glyphicon-fire"></i> </span>
                                        <ul class="property-info">
                                            <li>
                                                <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-bed"></i><span>  5   </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-building"> </i> <span>3   </span>
                                            </li>
                                        </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="{{url('/uploads/sellers/1.png')}}" title="Camilė">
                                            </a>
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                    </div>
                                    <h3><a href="property.html" title="">The Helux villa</a></h3>
                                    <span class="price">$300000</span>
                                </div>
                                <div class="properties-box">
                                    <div class="properties-thumb">
                                        <img src="{{url('/uploads/property/property4.jpg')}}" alt="" />
                                        <span class="spn-status"> For Rent </span>
                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                        <span class="spn-save spn-fire" style="margin-top: 18%"> <i class="glyphicon glyphicon-fire"></i> </span>
                                        <ul class="property-info">
                                            <li>
                                                <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-bed"></i><span>  5   </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-building"> </i> <span>3   </span>
                                            </li>
                                        </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="{{url('/uploads/sellers/2.png')}}" title="Camilė">
                                            </a>
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                    </div>
                                    <h3><a href="property.html" title="">The Helux villa</a></h3>
                                    <span class="price">$34.00</span>
                                </div>
                                <div class="properties-box">
                                    <div class="properties-thumb">
                                        <img src="{{url('/uploads/property/property5.jpg')}}" alt="" />
                                        <span class="spn-status"> For Rent </span>
                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                        <span class="spn-save spn-fire" style="margin-top: 18%"> <i class="glyphicon glyphicon-fire"></i> </span>
                                        <ul class="property-info">
                                            <li>
                                                <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-bed"></i><span>  5   </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-building"> </i> <span>3   </span>
                                            </li>
                                        </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="{{url('/uploads/sellers/4.png')}}" title="Camilė">
                                            </a>
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                    </div>
                                    <h3><a href="property.html" title="">The Helux villa</a></h3>
                                    <span class="price">$9000000</span>
                                </div>
                            </div><!-- Carousel -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="block">
            <div style="background: url({{url('/uploads/page/call-to-action-bg.jpg')}}) repeat scroll 50% 422.28px transparent; background-attachment: fixed;" class="parallax scrolly-invisible  whitish"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="properties-text-bar">
                            <h3>Sell or Rent  <span> Properties </span>Quickly ! </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare porttitor diam<br/> a accumsan justo laoreet suscipit. Maecenas at bibendum nunc</p>
                            <a href="#" title="" class="flat-btn">Join us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="properties-sec">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="{{url('/uploads/property/property4.jpg')}}" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li>
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-bed"></i><span>  5   </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-building"> </i> <span>3   </span>
                                                </li>
                                            </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="{{url('/uploads/sellers/4.png')}}" title="Camilė">
                                            </a>
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                        </div>
                                        <h3><a href="property.html" title="">The Helux villa</a></h3>
                                        <span class="price">$444000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="{{url('/uploads/property/property3.jpg')}}" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li>
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-bed"></i><span>  5   </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-building"> </i> <span>3   </span>
                                                </li>
                                            </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="{{url('/uploads/sellers/1.png')}}" title="Camilė">
                                            </a>
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                        </div>
                                        <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                        <span class="price">$789000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="{{url('/uploads/property/property2.jpg')}}" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li>
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-bed"></i><span>  5   </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-building"> </i> <span>3   </span>
                                                </li>
                                            </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="{{url('/uploads/sellers/2.png')}}" title="Camilė">
                                            </a>
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                        </div>
                                        <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                        <span class="price">$380000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="{{url('/uploads/property//property4.jpg')}}" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li>
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-bed"></i><span>  5   </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-building"> </i> <span>3   </span>
                                                </li>
                                            </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="{{url('/uploads/sellers/4.png')}}" title="Camilė">
                                            </a>
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                        </div>
                                        <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                        <span class="price">$1000000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="{{url('/uploads/property/property5.jpg')}}" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li>
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-bed"></i><span>  5   </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-building"> </i> <span>3   </span>
                                                </li>
                                            </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="{{url('/uploads/sellers/3.png')}}" title="Camilė">
                                            </a>
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                        </div>
                                        <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                        <span class="price">$500000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="{{url('/uploads/property/property3.jpg')}}" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li>
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-bed"></i><span>  5   </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-building"> </i> <span>3   </span>
                                                </li>
                                            </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="{{url('/uploads/sellers/2.png')}}" title="Camilė">
                                            </a>
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                        </div>
                                        <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                        <span class="price">$340000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <section class="top-line">
                <div style="background: url({{url('/uploads/page/footer.jpg')}}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax blackish"></div><!-- PARALLAX BACKGROUND IMAGE -->
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 column">
                            <div class="about_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> links</h2>
                                </div><!-- heading -->

                                <span><i class="fa fa-envelope"></i>yourcompany@gmail.com</span>
                                <span><i class="fa fa-phone"></i>0888 (29999996)</span>
                                <span><i class="fa fa-location-arrow"></i>1234 Tokyo shibuia , WI 54115</span>
                                <ul class="social-btns">
                                    <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-tumblr"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 column">
                            <div class="links_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> links</h2>
                                </div><!-- heading -->
                                <ul>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Home</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> About us</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 column">
                            <div class="links_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> Places</h2>
                                </div><!-- heading -->
                                <ul>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Lorem ipsum </a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Closest ipsum </a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Lorem dolom </a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Positioned ipl</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 column">
                            <div class="subscribe_widget widget">
                                <div class="heading1">
                                    <h2><span>Subscribe</span> Us</h2>
                                </div><!-- heading -->
                                <p>Positioning the closest positioned for abs positioning</p>
                                <form>
                                    <label><input type="text" placeholder="TYPE YOUR EMAIL" /></label>
                                    <button type="submit" class="flat-btn"><i class="ti ti-email"></i></button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <div class="bottom-line">
                <div class="container">
                    <span>Copyright All Right Reserved {{date('Y')}} <a href="#" title="">Hot Investments</a></span>
                    <ul>
                        <li><a title="" href="#">HOME</a></li>
                        <li><a title="" href="#">ABOUT</a></li>
                        <li><a title="" href="#">PROPERTIES</a></li>
                        <li><a title="" href="#">BLOG</a></li>
                        <li><a title="" href="#">CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="scrollToTop"><i class="ti ti-arrow-circle-up"></i></a>
        </footer>
    </div>

    <!-- Script -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            "use strict";
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 16000,
                startwidth: 1170,
                startheight: 700,
                hideThumbs: 200,
                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,
                navigationType: "bullet",
                navigationArrows: "solo",
                navigationStyle: "preview1",
                touchenabled: "on",
                onHoverStop: "on",
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
                keyboardNavigation: "off",
                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",
                spinner: "spinner4",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                forceFullWidth: "off",
                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                videoJsPath: "rs-plugin/videojs/",
                fullScreenOffsetContainer: ""
            });

            $(".carousel-prop").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: true,
                dots: true,
                nav: false,
                items: 4,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false
                    }
                }
            });

            $(".carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: false,
                dots: false,
                nav: true,
                margin: 0,
                items: 3
            });

            $(".carousel-client").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: false,
                dots: false,
                nav: true,
                margin: 30,
                items: 5,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: true
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: false
                    }
                }
            });

        });
    </script>
</body>
