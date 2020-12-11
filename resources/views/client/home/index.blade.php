@extends('client.layouts.client')
@section('extra_css')
{{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/metronic') }}/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/> --}}
@endsection
@section('content')
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<link rel="stylesheet" href="{{url('assets')}}/client/css/contents.css" type="text/css" />

    <!-- /.preloader -->
    <div id="app">
        <menubar></menubar>
        <div class="container">
            <SellerEntries></SellerEntries>
        </div>
    </div>

    {{-- <div id="preloader"></div>
    <div class="theme-layout">
        <div class="inner-head overlap">
            <div style="background: url({{url('assets/client/img/parallax1.jpg')}}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="inner-content">
                    <span><i class="ti ti-home"></i></span>
                    <h2>PROPERTIES - LSIT </h2>
                    <ul>
                        <li><a href="index.html" title="">HOME</a></li>
                        <li><a href="propertiees.html" title="">PROPERTIES - LSIT </a></li>
                    </ul>
                </div>
            </div>
        </div><!-- inner Head --> --}}

        {{-- <propertyloader></propertyloader> --}}
    {{-- </div> --}}

    {{-- <script src="{{mix('hotinvestments.com/public/js/app.js')}}"></script> --}}
    <script src="{{asset('/js/app.js')}}"></script>
