@extends('layouts.app')
@extends('includes.header')
@section('content')

<!-- <script src="{{ asset('/js/chart_data.js') }}"></script> -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="container" style="height: 400px; min-width: 310px">			

				</div>
				<div id="container">
					<h3>Reports</h3>
					<div id="reports">
						<form id="reportForm" class="reportForm" action="{{ action('AdminController@show_users') }}" method="GET">
							<input type="submit" id="reportButton" class="btn btn-success" value="Generate Report"></input>
						</form>
						@if ($users)
						<table class="table table-stripped">
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Created At</th>
								<th>Updated At</th>
								<th>User Type</th>
							</tr>

							@foreach($users as $user)
							 <tr>
							 	<td>{{ $user->name }}</td>
							 	<td>{{ $user->email }}</td>
							 	<td>{{ $user->created_at }}</td>
							 	<td>{{ $user->updated_at }}</td>
							 	<td>{{ $user->user_type }}</td>
							 </tr>
							@endforeach
						</table>
						@endif
					</div>
				</div>
			</div>
		</div>
		<hr>
	</div>
</section>
@endsection  
