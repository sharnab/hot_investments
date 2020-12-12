@extends('client.layouts.client')
@section('extra_css')
{{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/metronic') }}/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/> --}}
@endsection
@section('content')
<style>
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
                        <div class="col-md-9 column">
                            <section class="block" style="padding-top: 0%">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-9 column">
                                                    <div class="properties-sec">
                                                        <div class="properties-list">
                                                            <div class="filter-wrapper">
                                                                {{-- <ol class="list-option-filter">
                                                                    <li class="icon-list-view">
                                                                        <div class="option-filter-box">
                                                                            <span class="icon-view grid-style active"><i class="fa fa-th"></i></span>
                                                                            <span class="icon-view fullwidth-style"><i class="fa fa-th-list"></i></span>
                                                                        </div>
                                                                    </li>
                                                                </ol> --}}
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="properties-content">
                                                                <div class="row">
                                                                    @foreach($propertyList as $property)
                                                                    <div class="col-md-4 col-sm-6  col-xs-12">
                                                                        <div class="properties-box">
                                                                            <div class="properties-thumb">
                                                                                <!-- <img src="img/demo/property1.jpg" alt=""> -->
                                                                                <img src="http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/{{$property['photos'][0]}}">
                                                                                <span class="spn-status"> For Rent </span>
                                                                                <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                                                                <ul class="property-info">
                                                                                    <li>
                                                                                        <i class="fa  fa-retweet"> </i> <span>{{ $property['propertySize'] }} sqft </span>
                                                                                    </li>
                                                                                    <li class="li-rl"></li>
                                                                                    <li>
                                                                                        <i class="fa  fa-bed"></i><span>  {{ $property['bedrooms'] }}   </span>
                                                                                    </li>
                                                                                    <li class="li-rl"></li>
                                                                                    <li>
                                                                                        <i class="fa  fa-building"> </i> <span>{{ $property['walkability'] }}   </span>
                                                                                    </li>
                                                                                </ul>
                                                                                <a href="/property/show/{{$property['id']}}" class="proeprty-sh-more btn btn-primary btn-sm" style="width:50%;margin-left:25%;font-size:1em;margin-top:5%;margin-bottom:5%"><i class="ti ti-eye"></i> View</a>

                                                                                <a href="/property/edit/{{$property['id']}}" class="proeprty-sh-more btn btn-info btn-sm" v-if="post.seller.id=='5f50c7a7551ad80ba2263625'" style="width:50%;margin-left:25%;font-size:1em;margin-top:-10%;margin-bottom:5%"><i class="ti ti-pencil-alt"></i> Edit</a>

                                                                                <a href="/property/delete/{{$property['id']}}" class="proeprty-sh-more btn btn-danger btn-sm" v-if="post.seller.id=='5f50c7a7551ad80ba2263625'" style="width:50%;margin-left:25%;font-size:1em;margin-top:20%;margin-bottom:5%"><i class="ti ti-trash"></i> Delete</a>

                                                                            </div>
                                                                            <h3><a href="property.html" title="">{{ $property['title'] }}</a></h3>
                                                                            <span class="price">${{ $property['price'] }}</span>
                                                                        </div><!-- prop Box -->
                                                                    </div>
                                                                    @endforeach
                                                                    {{--
                                                                    <div class="col-md-4 col-sm-6  col-xs-12">
                                                                        <div class="properties-box">
                                                                            <div class="properties-thumb">
                                                                                <img src="img/demo/property1.jpg" alt="">
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

                                                                                <a href="'/property/show/' + post.id" class="proeprty-sh-more btn btn-primary btn-sm" style="width:50%;margin-left:25%;font-size:1em;margin-top:5%;margin-bottom:5%"><i class="ti ti-eye"></i> View</a>

                                                                                <a href="'/property/edit/' + post.id" class="proeprty-sh-more btn btn-info btn-sm" v-if="post.seller.id=='5f50c7a7551ad80ba2263625'" style="width:50%;margin-left:25%;font-size:1em;margin-top:-10%;margin-bottom:5%"><i class="ti ti-pencil-alt"></i> Edit</a>

                                                                                <a href="'/property/delete/' + post.id" class="proeprty-sh-more btn btn-danger btn-sm" v-if="post.seller.id=='5f50c7a7551ad80ba2263625'" style="width:50%;margin-left:25%;font-size:1em;margin-top:20%;margin-bottom:5%"><i class="ti ti-trash"></i> Delete</a>

                                                                            </div>
                                                                            <h3><a href="property.html" title="">The Helux villa</a></h3>
                                                                            <span class="price">$444000</span>
                                                                        </div><!-- prop Box -->
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-6  col-xs-12">
                                                                        <div class="properties-box">
                                                                            <div class="properties-thumb">
                                                                                <img src="img/demo/property1.jpg" alt="">
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
                                                                                <a href="'/property/show/' + post.id" class="proeprty-sh-more btn btn-primary btn-sm" style="width:50%;margin-left:25%;font-size:1em;margin-top:5%;margin-bottom:5%"><i class="ti ti-eye"></i> View</a>

                                                                                <a href="'/property/edit/' + post.id" class="proeprty-sh-more btn btn-info btn-sm" v-if="post.seller.id=='5f50c7a7551ad80ba2263625'" style="width:50%;margin-left:25%;font-size:1em;margin-top:-10%;margin-bottom:5%"><i class="ti ti-pencil-alt"></i> Edit</a>

                                                                                <a href="'/property/delete/' + post.id" class="proeprty-sh-more btn btn-danger btn-sm" v-if="post.seller.id=='5f50c7a7551ad80ba2263625'" style="width:50%;margin-left:25%;font-size:1em;margin-top:20%;margin-bottom:5%"><i class="ti ti-trash"></i> Delete</a>

                                                                            </div>
                                                                            <h3><a href="property.html" title="">The Helux villa</a></h3>
                                                                            <span class="price">$444000</span>
                                                                        </div><!-- prop Box -->
                                                                    </div> 
                                                                    --}}
                                                                </div>
                                                                <ul class="pagination">
                                                                    <li class="disabled"><a href="#" title=""><span>NEXT</span></a></li>
                                                                    <li><a href="#" title="">1</a></li>
                                                                    <li class="active"><a href="#" title="">2</a></li>
                                                                    <li><a href="#" title="">3</a></li>
                                                                    <li><a href="#" title=""><span>PREV</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- Blog Post -->
                                                    </div><!-- Blog POst Sec -->
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <aside class="col-md-3 column">
                            {!! Form::open(['route' => 'property_store', 'method'=>'post', 'enctype'=>"multipart/form-data"]) !!}
                            @include('client.include.search')
                            {{ Form::close() }}
                        </aside>
                    </div>
                </div>
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-->
</div>
@endsection
