@extends('sbadmin.layout')
@section('extra_css')
<!-- Custom styles for this page -->
<link href="{{ asset('template/sbadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Reported Chats</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        	<div class="row justify-content-between">
        		<h6 class="m-0 font-weight-bold text-primary">Reported Chats</h6>
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
					<th>Price</th>
					<th>Seller Name</th>
					<th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                
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