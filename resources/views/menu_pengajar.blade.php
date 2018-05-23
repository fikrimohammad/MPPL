@extends('layouts.app')
@section('content')
		<div class="container">
			
			<h4 class="text-center pt-3 pb-4">MENU PENGAJAR</h4>
			
			<div class="row py-5 justify-content-center">
				<div class="col-sm-3">
					<div class="text-center">
						<a href="pengajar/hasil_seleksi"><img class="card-img-top" src="{{asset('logo/megaphone.png')}}" alt="Card image cap" style="width: 128px; height: 128px;"></a>
					</div>
					<h4 class="text-center pt-4">Pengumuman Seleksi</h4>
				</div>

				<div class="col-sm-3">
					<div class="text-center">
						<a href="pengajar/jadwal_pelatihan"><img class="card-img-top" src="{{asset('logo/calendar.png')}}" alt="Card image cap" style="width: 128px; height: 128px;"></a>
					</div>
					<h4 class="text-center pt-4">Jadwal Pelatihan</h4>
				</div>

				<div class="col-sm-3">
					<div class="text-center">
						<a href="pengajar/materi_pelatihan"><img class="card-img-top" src="{{asset('logo/folder.png')}}" alt="Card image cap" style="width: 128px; height: 128px;"></a>
					</div>
					<h4 class="text-center pt-4">Materi Pelatihan</h4>
				</div>
	
			</div>
			<div class="row py-4 justify-content-center">	
				<div class="col-sm-3">
					<div class="text-center">
						<a href="pengajar/kelompok_pengajar/1"><img class="card-img-top" src="{{asset('logo/team.png')}}" alt="Card image cap" style="width: 128px; height: 128px;"></a>
					</div>
					<h4 class="text-center pt-4">Kelompok & Tempat Penugasan</h4>
				</div>
				<div class="col-sm-3">
					<div class="text-center">
						<a href="{{route('logoutPengajar')}}"><img class="card-img-top" src="{{asset('logo/back-button.png')}}" alt="Card image cap" style="width: 128px; height: 128px;"></a>
					</div>
					<h4 class="text-center pt-4">Keluar</h4>
				</div>			
			</div>
		</div>
@endsection