@extends('layouts.frontend')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card dr-pro-pic">
			<div class="card-body">
				<form method="post" class="card-box">
					<div class="">
						<form class="form-horizontal form-material mb-0">
							<div class="form-group row">
								<div class="col-md-6">
									<label>Name</label>
									<input type="text" placeholder="Enter your full Name" class="form-control" name="name"/>
								</div>
								<div class="col-md-6">
									<label>Phone</label>
									<input type="text" placeholder="Enter your valide phone" class="form-control" name="phone"/>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-3">
									<label>Nid</label>
									<input type="number" placeholder="Enter your Nid card Number" class="form-control" name="nid"/>
								</div>
								<div class="col-md-3">
									<label>Date of birth</label>
									<input type="date" placeholder="Date of birth" class="form-control" name="birthdate" id="Department" />
								</div>
								<div class="col-md-3">
									<label>Gender</label>
									<select class="form-control" name="gender">
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
								<div class="col-md-3">
									<label>Occupation</label>
									<select class="form-control" name="occupation">
										<option>Student</option>
										<option>Job</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0">Registration</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection