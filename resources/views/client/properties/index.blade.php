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
            <property-view></property-view>
        </div>
    </div>

    <script src="{{mix('/js/app.js')}}"></script>
