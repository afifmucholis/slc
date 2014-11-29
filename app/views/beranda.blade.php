@extends ('layout')
@section('title') Beranda @endsection
@section('content')
	<h1>Selamat Datang</h1>         
				<p class="lead">
					SIS learning center adalah ......</p>         
					<p>
						<a class="btn btn-lg btn-success" role="button" href="{{URL::to('daftar')}}">Daftar Sekarang</a>
					</p>    
	@endsection
