<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
</head>
<body>
<h1>profile</h1>
<div class="container">
	<div class="row">
		
		<div class="col-md-4">
			@if ($users)
				@foreach ($users as $user)
					{{$user->name}}
					{{$user->email}}
				@endforeach
			@endif


		</div>
		<div class="col-md-8">
			@if ($data)
		@foreach ($data as $Tdata)
			{{$Tdata->costName}}

		@endforeach
		{{$data->links()}}
	@endif

		</div>

	</div>
</div>
	

</body>
</html>