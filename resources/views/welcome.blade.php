@extends('layout.layout')

@section('contents')

      <div class="location" id="home">
          <h1 id="home">Daily</h1>
          <div class="box">
            @foreach ($data as $d)
           
            <a href="detail"><img src="img/cover/{{$d->cover}}" ></a>
           
            @endforeach
            
          </div>
          
      </div>
      

      <h1 id="myList">Trending</h1>
      <div class="box">
        <a href=""><img src="../image/cover/4.jpg" ></a>
        <a href=""><img src="../image/cover/5.jpg" ></a>
        <a href=""><img src="../image/cover/6.jpg" ></a>
        <a href=""><img src="../image/cover/7.jpg" ></a>
        <a href=""><img src="../image/cover/8.jpeg" ></a>
        <a href=""><img src="../image/cover/9.jpg" ></a>
        <a href=""><img src="../image/cover/10.jpg" ></a>

      </div>
      
      <h1 id="tvShows">Novel</h1>
      <div class="box">
        @foreach ($nov as $o)
        
        <a href="detail"><img src="img/cover/{{$o->cover}}" ></a>
        
        @endforeach
      </div>

      <h1 id="tvShows">Edukasi</h1>
      <div class="box">
        @foreach ($edu as $p)
       
        <a href="detail"><img src="img/cover/{{$p->cover}}" ></a>
       
        @endforeach
      </div>
      

      <h1 id="originals">Khusus</h1>
      <div class="box">
        @foreach ($kus as $t)
        
        <a href="detail"><img src="img/cover/{{$t->cover}}" ></a>
        
        @endforeach
      </div>

@endsection