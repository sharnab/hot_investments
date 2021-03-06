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
                        <aside class="col-md-2 column">
                            &nbsp;
                        </aside>

                        <div class="col-md-8 column" style="padding-top: 5%">
                            <div class="heading4">
                                <h2>SUBMIT PROPERTY</h2>
                            </div>
                            {!! Form::open(['route' => 'property_store', 'method'=>'post', 'enctype'=>"multipart/form-data"]) !!}
                            @include('client.properties.form',['submit'=>__('Save')])
                        </div>
                        <aside class="col-md-2 column">
                            &nbsp;
                        </aside>
                    </div>
                </div>
                {{ Form::close() }}
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-->
</div>
@endsection
