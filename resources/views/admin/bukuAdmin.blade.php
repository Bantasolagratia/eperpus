@extends('layout.layoutAdmin') 
@section('title')

<title>Pengelolaan Buku</title>

@endsection @section('main-content')
<div class="col-lg-5">
	<form class="search-bar" method="POST" role="search" type="submit" action="{{url('/searchTanaman')}}">{{ csrf_field() }}
	<div class="row">
				<div class="col-md-9">
					<input type="text" class="form-control" placeholder="Enter keywords" style="width:100%;" name="term" id="term">
				</div>
				<div class="col-md-3">
				<button type="submit" class="btn btn-secondary btn-round px-5"><i class="icon-magnifier"></i></button>
				</div>
			</div>
		</button>
	</form>
	<br>
</div>




<div class="col-12 col-lg-12 col-xl-12">
	<div class="card">
		<div class="card-header">Not Found
			<div class="card-action">
				<div class="dropdown">
					<a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"> <i class="icon-options"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="/tambahBuku" onclick="javascript:void();">Tambah Buku</a>
					</div>
				</div>
			</div>
		</div>
		<div class="card-body">
		
			Tidak ada data 
		
		</div>
	</div>
</div>




<div class="col-12 col-lg-12 col-xl-12">
	<div class="card">
		<div class="card-header">Data Found
			<div class="card-action">
				<div class="dropdown">
					<a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"> <i class="icon-options"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="/tambahTanamanAdmin" onclick="javascript:void();">Tambah Buku</a>
					</div>
				</div>
			</div>
		</div>
		<div class="card-body">
		
			{{-- @foreach($datas as $data) 
				@if($data->status=='aktif')
				<article class="entry">
					<div style="text-align: center;">
						<img src="img/galery/{{$data->foto_tanaman}}" width='350' height='200' vertical-align: left;>
					</div>
					<h2 class="entry-title">{{$data->nama_tanaman}}</h2>
					<div class="read-more">	<a href="{{ url('/editTanaman',$data->id) }}" class="btn btn-primary">Edit</a>
						<a href="{{ url('/deleteTanaman',$data->id) }}" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-primary">Hapus</a>
					</div>
				</article>
				
				@endif 
			@endforeach   --}}
		
		</div>
	</div>
</div>

@endsection