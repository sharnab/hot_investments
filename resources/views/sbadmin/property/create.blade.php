@extends('sbadmin.layout')
@section('extra_css')
<!-- Custom styles for this page -->
@endsection
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Property</h1>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Add New Property</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('property.store') }}" class="form-horizontal" role='form' enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input class="form-control" type="text" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Price</label>
                    <input class="form-control" type="number" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Address</label>
                    <input class="form-control" type="text" placeholder="Address">
                </div>
                <!-- <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label><select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div> -->
                <button type="submit">submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('extra_js')
<!-- Page level plugins -->
@endsection