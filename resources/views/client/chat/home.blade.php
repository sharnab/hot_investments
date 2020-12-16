@extends('client.layouts.client')
{{-- @section('extra_css') --}}
{{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/metronic') }}/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/> --}}

{{-- @section('content') --}}
{{-- @endsection --}}

@extends('client.layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="user-wrapper">
                    <ul class="users">
                        @foreach($userData['data'] as $user)
                            <li class="user" id="{{ $user['id'] }}">
                                {{--will show unread count notification--}}
                                {{-- @if($user->unread)
                                    <span class="pending">{{ $user->unread }}</span>
                                @endif --}}

                                <div class="media">
                                    <div class="media-left">
                                        {{-- <img src="{{ $user->photo }}" alt="" class="media-object"> --}}
                                        <img src="{{ $user['photo'] }}" alt="" class="media-object">
                                    </div>

                                    <div class="media-body">
                                        <p class="name">{{ $user['name'] }}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md-8" id="messages">

            </div>
        </div>
    </div>
@endsection
