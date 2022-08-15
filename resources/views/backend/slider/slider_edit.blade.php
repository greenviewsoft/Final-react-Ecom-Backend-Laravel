@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



	<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Slider Edit </div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Slider Edit </li>
							</ol>
						</nav>
					</div>
					



				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
							

	

							<div class="col-lg-8">


								 <form method="post" action="{{ route('slider.update') }}" enctype="multipart/form-data"> 
				@csrf


<input type="hidden" name="id" value="{{ $slider->id }}">

								<div class="card">
									<div class="card-body">
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Edit Slider Name</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text"  name="slider_image"  class="form-control" value="{{ $slider->slider_image }}" />

												@error('slider_image')

                                                <span class="text-danger">{{ $message }}</span>
												@enderror 
											</div>
										</div>
										
										<div class="mb-3">
 <label for="formFile" class="form-label">Edit slider image</label>
		 <input class="form-control" name="slider_image" type="file" id="image">

	 </div>


<div class="mb-3">
	<img id="showImage" src="{{ asset($slider->slider_image) }}" style="width:100px; height: 100px;" >
 
	 </div>

										
										
										</div>
										<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-9 text-secondary">
		<input type="submit" class="btn btn-primary px-4" value="Update Slider">
	</div>
										</div>
									</div>
								</div>
</form>

								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->



<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});	
</script>






@endsection