@extends('layout.layoutuser')

@section('contents')

      <div class="location" id="home">
          <h1 id="home">Daily</h1>
          <div class="box">
            @foreach ($data as $d)
            <a href="{{ url('/detailUser',$d->ISBN) }}"><img src="img/cover/{{$d->cover}}" ></a>
            @endforeach
            
          </div>
          
      </div>
      

      {{-- <h1 id="myList">Trending</h1>
      <div class="box">
        @foreach ($tren as $ter)
        
        <a><img src="img/cover/{{$ter->cover}}" ></a>
        
        @endforeach
      </div> --}}
      
      <h1 id="tvShows">Novel</h1>
      <div class="box">
        @foreach ($nov as $o)
        
        <a href="{{ url('/detailUser',$o->ISBN) }}"><img src="img/cover/{{$o->cover}}" ></a>
        
        @endforeach
      </div>

      <h1 id="tvShows">Edukasi</h1>
      <div class="box">
        @foreach ($edu as $p)
       
        <a href="{{ url('/detailUser',$p->ISBN) }}"><img src="img/cover/{{$p->cover}}" ></a>
       
        @endforeach
      </div>
      

      <h1 id="originals">Khusus</h1>
      <div class="box">
        @foreach ($kus as $t)
        
        <a href="{{ url('detailUser2',$t->ISBN) }}"><img src="img/cover/{{$t->cover}}" ></a>
        
        @endforeach
      </div>

@endsection