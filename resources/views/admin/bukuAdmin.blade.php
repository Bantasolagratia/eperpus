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
		<div class="card-header">Daftar Buku
			<div class="card-action">
				<div class="dropdown">
					<a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" buku-toggle="dropdown"> <i class="icon-options"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="/tambahBuku" onclick="javascript:void();">Tambah Buku</a>
					</div>
				</div>
			</div>
		</div>
		<div class="card-body">
			<table class="table table-striped">
				<thead>
					<tr>
					
					<th scope="col">Judul</th>
					<th scope="col">aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($bukus as $buku)
					
						<tr>
						
						<td>
						{{$buku->judul}}
						</td>
						<td>
							<a href="{{ url('/editTanaman',$buku->ISBN) }}" class="btn btn-primary">Edit</a>
							<a href="{{ url('/deleteTanaman',$buku->id) }}" onclick="return confirm('Anda yakin ingin menghapus buku ini?')" class="btn btn-primary">Hapus</a>
						</td>
						</tr>
				  
			
			
						
						@endforeach  
					</tbody>	
			
		
		</div>
	</div>
</div>

@endsection