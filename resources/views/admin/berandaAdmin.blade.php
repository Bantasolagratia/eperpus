
@extends('layout.layoutAdmin')

@section('title')
    <title>Dashboard</title>
@endsection


@section('main-content')






   

<div class="card">
    <div class="card-header">Pertanyaan
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
                
                <th scope="col">Pertanyaan</th>
                <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tanya as $t)
                @if($t->tipe=='pertanyaan')
                
                    <tr>
                    
                    <td>
                    {{$t->content}}
                    </td>
                    <td>
                        <a href="{{ url('/jawablah',$t->id) }}" class="btn btn-primary">jawab</a>
                        <a href="{{ url('/deleteTanya',$t->id) }}" onclick="return confirm('Anda yakin ingin menghapus buku ini?')" class="btn btn-primary">Hapus</a>
                    </td>
                    </tr>
              
        
        
                    @endif
                    @endforeach  
                </tbody>	
        
    
    </div>
</div>
</div>
  

        

   
      
    
     
     
@endsection