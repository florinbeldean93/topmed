<!DOCTYPE html>
<html>
<head>
	<title>Locations</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('css/custom2.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<style>
		body{
			background-color:skyblue;
			}
	</style>

</head>
<body>

	<div class="container">
		<div class="row">
		    <div class="col-lg-12 margin-tb">					
		        <div class="pull-left">
		            <h2 style="color:white">Locations</h2>
		        </div>
		        <div class="pull-right">
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#create-item">Add Location</button>
		        </div>
		    </div>
		</div>
		<table class="table">
			<thead>
			    <tr>
				<th style="text-align: center; vertical-align: middle">Name</th>
				<th style="text-align: center; vertical-align: middle">Adresa</th>
				<th style="text-align: center; vertical-align: middle">Orar</th>
				<th style="text-align: center; vertical-align: middle">Email</th>
				<th style="text-align: center; vertical-align: middle">Telefon</th>
				<th width="200px" style="text-align: center; vertical-align: middle" >Action</th>
			    </tr>
			</thead>
			<tbody>
			</tbody>
		</table>
		<ul id="pagination" class="pagination-sm"></ul>
		<!-- Create Item Modal -->
		@include('location.create')
		<!-- End of create -->

		<!-- Edit Item Modal -->
		@include('location.edit')
		<!-- End of edit -->

	</div>
	<!-- Scripts -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
	<script type="text/javascript">
		var url = "<?php echo route('locations.index')?>";
	</script>
	<script src="/js/locations.js"></script> 
	<!-- End of scripts -->
</body>
</html>