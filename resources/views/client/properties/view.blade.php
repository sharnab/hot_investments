@extends('client.layouts.client')
@section('extra_css')
@endsection
@section('content')
<style>
    #myCarousel {margin-left: 30px; margin-right: 30px;}

    .carousel-control {
        top: 50%;
    }
    .carousel-inner {
        width: 940px;
    }
    .carousel-control.left, .carousel-control.right {
        background: none;
        color: @red;
        border: none;
    }
    .carousel-control.left {margin-left: -45px; color: black;}
    .carousel-control.right {margin-right: -45px; color: black;}
    .img_delete_btn {
        cursor: pointer;
        float: right;
        vertical-align: top;
        width: 20px;
        position: absolute;
    }
    #SocialMediaBadges img{
        float:left;
        width:120px;
        height:90px;
        margin:5px;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 150px;
    }
    #SocialMediaBadges img:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }
</style>
<link rel="stylesheet" href="{{url('assets')}}/client/css/contents.css" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('assets') }}/client/layout/css/lightbox.css">

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="container">
                    <div>
                        <section class="block">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-9 column">
                                                <div class="single-post-sec">
                                                    <div class="blog-post property-post">
                                                        <div class="property-gallery">
                                                            <div class="light-slide-item">
                                                                <div class="favorite-and-print">
                                                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                                        </ol>
                                                                        <div id="myCarousel" class="carousel slide"> <!-- slider -->
                                                            				<div class="carousel-inner" style="height: 500px !important;">
                                                                                @foreach($data['photos'] as $key => $slider)
                                                            					<div class="item @if($key == '0'){{'active'}}@endif"> <!-- item 1 -->
                                                            						<img src='{{url("http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/").$slider}}' alt="">
                                                            					</div>
                                                                            @endforeach
                                                            				</div> <!-- end carousel inner -->
                                                            				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                                                            				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                                                            			</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12" style="">
                                                                <div class="pull-left property_name" style="margin-top: 5%; font-weight: bold; ">{{ $data['title'] }}</div>
                                                                <div class="pull-right property_date" style="margin-top: 5%; ">Posted on: 04 Aug 2020 <a class='bookmark' :href="bookmarkProperty()"><i class="fa fa-bookmark"></i></a></div>
                                                            </div>
                                                            <div class="col-md-12 address_block">
                                                                <div class="pull-left property_address" style="font-weight: 400; "><i class='fa fa-map-marker' style="color: #c94046; padding-right: 5px"></i>{{ $data['location']['address'] }}</div>
                                                                <div class="pull-right" style="text-align: right">
                                                                    <img src='../../assets/client/img/flame.jpg' style="width: 2%"></image-rating><span style="margin-bottom: 4px">{{ $data['hotLevel'] }}/5</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="pull-left property_price" style="margin-top: 1%; margin-bottom: 2%; font-weight: 700; ">Price : ${{ $data['price'] }}</div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-xs-12" style="border: 0px solid red; border-radius: 10px; background-color: #f5f5f5">
                                                                <div class="col-md-4 col-xs-4" style="padding-left: 5%; padding-top: 2%; padding-bottom: 2%">
                                                                    <div class="facilities" style="color: #c94046">Property Type</div>
                                                                    <div class="facilities">{{ $data['propertyType'] }}</div>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4" style="padding-left: 7%; padding-top: 2%; padding-bottom: 2%">
                                                                    <div class="facilities" style="color: #c94046">Lot Size</div>
                                                                    <div class="facilities">{{ $data['lotSize'] }} Sqft</div>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4" style="padding-left: 10%; padding-top: 2%; padding-bottom: 2%">
                                                                    <div class="facilities" style="color: #c94046">Property Size</div>
                                                                    <div class="facilities">{{ $data['propertySize'] }} Sqft</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12" style="padding-left: 0px; padding-right: 0px;">
                                                                <div class="col-md-5 col-xs-5 facilities" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%;">
                                                                    <span style="color: #c94046">Location</span>
                                                                    <span class="pull-right" style="padding-right: 5%">{{ $data['location']['description'] }}</span>
                                                                </div>
                                                                <div class="col-md-5 col-xs-5 facilities pull-right" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%;">
                                                                    <span style="color: #c94046">Bedrooms</span>
                                                                    <span class="pull-right" style="padding-right: 5%">{{ $data['bedrooms'] }}</span>
                                                                </div>
                                                                <div class="col-md-5 col-xs-5 facilities" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%; margin-bottom: 2%">
                                                                    <span style="color: #c94046">Walkability</span>
                                                                    <span class="pull-right" style="padding-right: 5%">{{ $data['walkability']}}</span>
                                                                </div>
                                                                <div class="col-md-5 col-xs-5 facilities pull-right" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%;">
                                                                    <span style="color: #c94046">Facing</span>
                                                                    <span class="pull-right" style="padding-right: 5%">{{ $data['facing'] }}</span>
                                                                </div>
                                                                <div class="col-md-5 col-xs-5 facilities pull-right" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%;">
                                                                    <span style="color: #c94046">Total Monthly Rent</span>
                                                                    <span class="pull-right" style="padding-right: 5%">{{ $data['totalMonthlyRent'] }}</span>
                                                                </div>
                                                                <div class="col-md-5 col-xs-5 facilities" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-bottom: 2%">
                                                                    <span style="color: #c94046">Propert Type</span>
                                                                    <span class="pull-right" style="padding-right: 5%">{{ $data['propertyType'] }}</span>
                                                                </div>
                                                                <div class="col-md-5 col-xs-5 facilities pull-right" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%;">
                                                                    <span style="color: #c94046">Building Year</span>
                                                                    <span class="pull-right" style="padding-right: 5%">{{ $data['yearBuilt'] }}</span>
                                                                </div>
                                                                <div class="col-md-5 col-xs-5 facilities" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-bottom: 2%">
                                                                    <span style="color: #c94046">Crime Score</span>
                                                                    <span class="pull-right" style="padding-right: 5%">{{ $data['crimeScore'] }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <p>{{ $data['description'] }}</p>
                                                            </div>
                                                        </div>

                                                        <div class="property-map">
                                                            <div class="heading3">
                                                                <h3>Find this property on the map </h3>
                                                            </div>
                                                            <div class="property_google_map">
                                                                {{-- <gmap-map :center="{lat:parseFloat(laravelData.location.coordinates[0]), lng:parseFloat(laravelData.location.coordinates[1])}" :zoom="7" style="width: 100%; height: 320px">
                                                                    <gmap-marker :position="{lat:parseFloat(laravelData.location.coordinates[0]), lng:parseFloat(laravelData.location.coordinates[1])}" :draggable="false" :clickable="false"></gmap-marker>
                                                                </gmap-map> --}}
                                                            </div>
                                                        </div>

                                                    </div><!-- Blog Post -->
                                                </div><!-- Blog POst Sec -->
                                            {{-- </div> --}}
                                            <aside class="col-md-3 column">

                                                <div class="agent_bg_widget widget">
                                                    <div class="agent_widget">
                                                        <div class="agent_pic">
                                                            <a href="agent.html" title="">
                                                                @if(isset($data['seller']['photo']))
                                                                <img src="{{ url("http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/").$data['seller']['photo'] }}" alt="" />
                                                                @else
                                                                <img src="../../uploads/demo-user.png" alt="" />
                                                                @endif
                                                                <h5>{{ $data['seller']['name'] }}</h5>
                                                            </a>
                                                        </div>

                                                        <!-- <div>
                                                            <span><i class="fa fa-phone"> </i> +1 9090909090</span>
                                                        </div>
                                                        <div>
                                                            <span><i class="fa fa-envelope"> </i> agent@company.com</span>
                                                        </div> -->

                                                        <!-- <a href="agent.html" title="" class="btn contact-agent">Find more</a> -->
                                                        <a href="agent.html" title="" class="btn contact-agent" style="background-color: black; margin: 10px; margin-top: 20px"><i class="fa fa-comments-o"></i> Message Seller</a>
                                                        <a href="agent.html" title="" class="btn contact-agent" style="margin: 10px"><i class="fa fa-money"></i> Make Offer</a>
                                                    </div>
                                                </div><!-- Follow Widget -->

                                            </aside>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-->
</div>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(window).load(function() {
	$('#myCarousel').carousel({
  		interval: 3000
 		})
   	});
</script>
@endsection
