@extends('layouts.app')
@extends('includes.header')
@section('content')

<script src="{{ asset('/js/chart_data.js') }}"></script>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="container" style="height: 400px; min-width: 310px"></div>

			</div>
		</div>
		<hr>
	</div>
</section>
@endsection  
