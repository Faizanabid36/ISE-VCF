@extends('layouts.app')
{{-- Title Section --}}
@section('title','Add new Product')

@section('links')
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('MDB/css/mdb.min.css') }}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('MDB/css/style.css') }}" rel="stylesheet">
  <style type="text/css">
  	body{
		font-family: "Nunito", sans-serif !important;
	}
  </style>

@endsection


{{-- Content Goes Here --}}
@section('content')
		<div class="container row">
			<div class="inner mt-5">
			<header class="special">
	            <h1>Add a new Product</h1>
	          </header>
			</div>
		</div>
{{-- 		???????????????????? --}}
		<form method="post" enctype="multipart/form-data" action="{{ action('ProductController@store') }}">
			<div>
			    <div class="" style="width: 60%;margin: 0px auto;">

			        <!--Body-->
			        <div class="md-form">
			            <input value="{{ old('p_name') }}" name="p_name" type="text" id="form2" class="form-control text-white">
			            <label for="form2">Product Name</label>
			            @if($errors->has('p_name'))
							<p class="alert text-danger">**
								@if($errors->any('p_name'))
									Special Characters not allowed
								@endif
							</p>
						@endif
			        </div>

			        <div class="md-form">
			            <input value="{{ old('num_boxes') }}" name="num_boxes" type="text" id="form4" class="form-control text-white">
			            <label for="form4">Number of Boxes</label>
						@if($errors->has('num_boxes'))
							<p class="alert text-danger">**
								@if($errors->any('num_boxes'))
									Special Characters not allowed
								@endif
							</p>
						@endif
			        </div>
			        <div class="md-form">
						<select name="type" style="font-size:22px" id="form2" class="selectpicker text-white">
							<option style="font-size: 18px" class="text-black pt-5" value="" disabled selected> Select the Type of Product</option>
							<option value="Biscuits" style="font-size: 18px" class="text-black pt-5">
									Plain Biscuit
							</option>
							<option value="Cream Biscuits" style="font-size: 18px" class="text-black pt-5">
									Cream Biscuit
							</option>
							<option value="Cupcakes" style="font-size: 18px" class="text-black pt-5">
									Cupcakes
							</option>
						</select>
						@if($errors->has('type'))
							<p class="alert text-danger" >**
								@if($errors->any('type'))
									Select Type of Product
								@endif
							</p>
						@endif
					</div>

					<div class="md-form">
			            <label for="form4">Product Image</label><br><br>
			            <input value="{{ old('p_img') }}" name="p_img" type="file" id="form4" class="form-control text-white">
			            @if($errors->has('p_img'))
							<p class="alert text-danger">**
								@if($errors->any('p_img'))
									Select an Image
								@endif
							</p>
						@endif
			        </div>

			        <div class="text-center mb-5 ">
			            <button class="btn btn-primary text-white">Add Product</button>
			     	</div>
			     	@csrf
    			</div>
    		</div>
    	</form>






  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('MDB/js/jquery-3.4.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('MDB/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('MDB/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('MDB/js/mdb.min.js') }}"></script>
		</div>
@endsection