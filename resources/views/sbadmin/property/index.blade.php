@extends('sbadmin.layout')
@section('extra_css')
<!-- Custom styles for this page -->
<link href="{{ asset('template/sbadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Property</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        	<div class="row justify-content-between">
        		<div class="col-4">
        		<h6 class="m-0 font-weight-bold text-primary">All Property</h6>
        		</div>
        		<div class="col-4" align="right">
        			<a href="{{ route('property.create') }}" class="btn btn-primary btn-sm">Add New</a>
        		</div>
        	</div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                	<th>Sl.</th>
					<th>Title</th>
					<th>Description</th>
					<th>Location</th>
					<th>Photos</th>
					<th>Price</th>
					<th>Hotlevel</th>
					<th>Seller Name</th>
                    <th>Status</th>
					<th>Action</th>
                </tr>
              </thead>
              <tbody>
              	<!-- @for($i=1;$i<=1;$i++)
                <tr>
                  	<td>{{$i}}</td>
                  	<td>Apartment</td>
                  	<td>Apartment with good neighbours</td>
                  	<td>
                  		<p><b>Description:</b> Vegas, USA</p>
                    	<p><b>Address:</b> 301 Biscayne Blvd, Vegas, FL 33132, US</p>
                   	</td>
                  	<td>
                  		<img style="height: 120px;width: 150px;" src="http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/img/property/property-1599129553314-986956640.jpeg">
                  		<img style="height: 120px;width: 150px;" src="http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/img/property/property-1599129557009-735220991.jpeg">
                  	</td>
                  	<td>$15000</td>
                  	<td>4</td>
                  	<td>Zac Bliton</td>
                  	<td>Approved</td>
                </tr>
                @endfor -->
                <?php $i=1; ?>
                @foreach($propertyList as $property)
                <tr>
                  	<td>{{ $i++ }}</td>
                  	<td>{{ $property['title'] }}</td>
                  	<td>{{ $property['description'] }}</td>
                  	<td>
                  		<p><b>Description:</b> {{ $property['location']['description'] }}</p>
                    	<p><b>Address:</b> {{ $property['location']['address'] }}</p>
                   	</td>
                  	<td>
                		@foreach($property['photos'] as $photo)
                  		<img style="height: 120px;width: 150px;" src="http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/{{$photo}}">
                		@endforeach
                  	</td>
                  	<td>${{ $property['price'] }}</td>
                  	<td>{{ $property['hotLevel'] }}</td>
                  	<td>{{ $property['seller']['name'] }}</td>
                    <td>{{ $property['approved'] ? 'Approved' : 'Not Approved' }}</td>
                  	<td>
                       <a href="{{ route('property.approve',$property['id']) }}">approve</a> 
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
@endsection
@section('extra_js')
<!-- Page level plugins -->
<script src="{{ asset('template/sbadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('template/sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Page level custom scripts -->
<script src="{{ asset('template/sbadmin/js/demo/datatables-demo.js')}}"></script>
@endsection