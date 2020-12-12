<!-- chat.blade.php -->

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

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chats</div>
                <div class="card-body">
                   Chats
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card">
                <div class="card-header">Users</div>
                <div class="card-body">
                   Users
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
