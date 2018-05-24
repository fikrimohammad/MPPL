@extends('layouts.app')
@section('content')
	<div class="container">

		<h4 class="text-center pt-3 pb-4">MENU BAGIAN REKRUTMEN</h4>

		@if(isset($message))
			@if($type == 'error')
			<div class="alert alert-danger" role="alert">
				<strong>Error! </strong> {{$message}}
			</div>
				@elseif($type == 'success')
				<div class="alert alert-danger" role="alert">
					<strong>Success! </strong> {{$message}}
				</div>
			@endif
		@endif

		<div class="row py-5 justify-content-center">
			<div class="col-sm-3">
				<div class="text-center">
					<a href="manage-pengajar"><img class="card-img-top" src="{{ asset('logo/exam.png') }}" alt="Card image cap" style="width: 128px; height: 128px;"></a>

				</div>
				<h4 class="text-center pt-4">Data Pengajar Lulus</h4>
			</div>
			<div class="col-sm-3">
				<div class="text-center">
					<a href="{{ route('logout') }}"><img class="card-img-top" src="{{ asset('logo/back-button.png') }}" alt="Card image cap" style="width: 128px; height: 128px;"></a>
				</div>
				<h4 class="text-center pt-4">Keluar</h4>
			</div>
		</div>
	</div>
@endsection