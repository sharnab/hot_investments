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

    #SocialMediaBadges img {
        float: left;
        width: 120px;
        height: 90px;
        margin: 5px;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 150px;
    }

    #SocialMediaBadges img:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }

    .bookmark {
        background-color: rgba(255, 13, 13, 0.79) !important;
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
                        <div class="col-md-8 column" style="width: 70%">
                            <section class="block" style="padding-top: 0%">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-8 column" style="width: 70%">
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
                                                                                @if(isset($property['photos'][0]))<!-- <img src="img/demo/property1.jpg" alt=""> -->
                                                                                <img src="http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/{{$property['photos'][0]}}">
                                                                                @else
                                                                                <img src="./assets/client/img/no-image.png">
                                                                                @endif
                                                                                <span class="spn-status"> For Rent </span>
                                                                                <span class="spn-save no-bookmark {{ $property['isBookmarked']? 'bookmark':'' }}" data-id="{{ $property['id'] }}" data-bookmark="{{ $property['isBookmarked'] }}"> <i
                                                                                        class="ti ti-heart"></i> </span>
                                                                                <ul class="property-info">
                                                                                    <li>
                                                                                        <i class="fa  fa-retweet"> </i> <span>{{ $property['propertySize'] }} sqft </span>
                                                                                    </li>
                                                                                    <li class="li-rl"></li>
                                                                                    <li>
                                                                                        <i class="fa  fa-bed"></i><span> {{ isset($property['bedrooms'])?$property['bedrooms']:'N/A' }} </span>
                                                                                    </li>
                                                                                    <li class="li-rl"></li>
                                                                                    <li>
                                                                                        <i class="fa  fa-building"> </i> <span>{{ isset($property['walkability'])?$property['walkability']:'N/A' }} </span>
                                                                                    </li>
                                                                                </ul>
                                                                                <a href="{{route('property_show',$property['id'])}}" class="proeprty-sh-more btn btn-primary btn-sm"
                                                                                    style="width:50%;margin-left:25%;font-size:1em;margin-top:5%;margin-bottom:5%"><i class="ti ti-eye"></i> View</a>

                                                                                <a href="{{route('property_edit',$property['id'])}}" class="proeprty-sh-more btn btn-info btn-sm" v-if="post.seller.id=='5f50c7a7551ad80ba2263625'"
                                                                                    style="width:50%;margin-left:25%;font-size:1em;margin-top:-10%;margin-bottom:5%"><i class="ti ti-pencil-alt"></i> Edit</a>

                                                                                <a href="{{route('property_edit',$property['id'])}}" class="proeprty-sh-more btn btn-danger btn-sm" v-if="post.seller.id=='5f50c7a7551ad80ba2263625'"
                                                                                    style="width:50%;margin-left:25%;font-size:1em;margin-top:20%;margin-bottom:5%"><i class="ti ti-trash"></i> Delete</a>

                                                                            </div>
                                                                            <h3><a href="property.html" title="">{{ $property['title'] }}</a></h3>
                                                                            <span class="price">
                                                                                ${{ $property['price'] }}
                                                                                <span style="padding-left: 3.5em">
                                                                                    <img src='./assets/client/img/flame.jpg' style="width: 10%">
                                                                                    <span style="margin-bottom: 4px; color: #c94046; font-size: 0.8em">{{ $property['hotLevel'] }}/5</span>
                                                                                </span>
                                                                            </span>
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
                        <aside class="col-md-4 column" style="width: 30%">
                            @include('client.include.search')
                            {{-- @if (Request::segment(1) == 'my_properties')
                                @include('client.include.seller_info') --}}
                            {{-- {!! Form::open(['route' => 'property_store', 'method'=>'post', 'enctype'=>"multipart/form-data"]) !!} --}}
                            {{-- @else
                                @include('client.include.search')
                            @endif --}}
                            {{-- {{ Form::close() }} --}}
                        </aside>
                    </div>
                </div>
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-->
</div>
@endsection
@section('scripts')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
{{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target.getAttribute('name') == 'loginModal') {
            // modal.style.display = "none";
            setTimeout(function() {
                modal.style.display = "none";
            },200);
        }
    }
    $('.btn-search').on('click', function() {
        console.log('here');
    });
    $('.no-bookmark').on('click', function() {
        var ID = $(this).data('id');
        var isBookmarked = $(this).data('isBookmarked');
        console.log(ID);
        console.log(isBookmarked);
        $.ajax({
            url: "{{ url('property/bookmark') }}",
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify({
                "id": ID,
                "is_bookmarked": isBookmarked,
                _token: "{{ csrf_token() }}"
            }),

            success: function(data) {
                data = JSON.parse(data);
                if (data.status) {
                    if (isBookmarked) {
                        $(this).removeClass("bookmark");
                        $(this).data('isBookmarked', false);
                    } else {
                        $(this).addClass("bookmark");
                        $(this).data('isBookmarked', true);
                    }
                }
                console.log(data);
            },
            error: function() {
                console.log('error.');
            }
        });
    });
</script>
@endsection
