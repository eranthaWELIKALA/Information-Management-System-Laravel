@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <label for="sAdmission">Enter Admission Number</label>
			<input class="form-conttrol" type="text" name="sAdmission">
			<hr>
			<label for="sFirstname">Enter Firstanme</label>
			<input class="form-conttrol" type="text" name="sFirstname">
			<hr>
			<label for="sLasstname">Enter Lastanme</label>
			<input class="form-conttrol" type="text" name="sLastname">

                
            </div>
        </div>
    </div>
</div> -->
<br><br>
<div class="row" >
	<div class="col-md-6 offset-md-3">
		<div class="container" style="background-color: white;border-radius: 20px">
			<div class="panel panel-default"><br>
				<form method="POST" action="/profile/viewA/">
					@csrf
					<div class="form-group">
						<div class="row">
								<div class="col-md-5"><label class="pull-right" for="sAdmission">Enter Admission Number</label></div>
								<div class="col-md-6"><input class="form-control" type="text" name="sAdmission"></div>
								<div class="col-md-1"><button class="form-control"><i class="fa fa-search"></i></button></div>
						</div>
					</div>
				</form><hr style="background-color: black">
				<form method="POST" action="/profile/viewF/">
					@csrf
					<div class="form-group">
						<div class="row">
							<div class="col-md-5"><label class="pull-right" for="sFirstname">Enter Firstanme</label></div>
							<div class="col-md-6"><input class="form-control" type="text" name="sFirstname"></div>
							<div class="col-md-1"><button class="form-control"><i class="fa fa-search"></i></button></div>
						</div>
					</div>
				</form><hr style="background-color: black">
				<form method="POST" action="/profile/viewL/">
					@csrf
					<div class="form-group">
						<div class="row">
							<div class="col-md-5"><label class="pull-right" for="sLastname">Enter Lastanme</label></div>
							<div class="col-md-6"><input class="form-control" type="text" name="sLastname"></div>
							<div class="col-md-1"><button class="form-control"><i class="fa fa-search"></i></button></div>
						</div>
					</div>
				</form><br>
			</div>
		</div>
	</div>
</div>

@endsection