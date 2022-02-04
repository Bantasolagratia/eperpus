@extends('layout.layoutUser')

@section('contents')
      <div class="detail row" id="home">
           <div class="col-md-2">
             <img  src="../img/cover/{{$datak->cover}}" width="170px" height="300px">
             <div class="centered">
               <a href="{{ url('/ajukan',$datak->ISBN) }}">ajukan akses</a><br>
               <a href="{{ url('/antrian',$datak->ISBN) }}">tambah ke readlist </a><br>
               <a href="{{ url('/disukai',$datak->ISBN) }}">suka</a>
             </div>
          </div>
          <div class="col-md-10 row">
            <div class="col-md-12"><h4>{{$datak->judul}}</h4></div>
            <div class="col-md-12">Pengarang :  {{$datak->pengarang}}</div>
            <div class="col-md-12">Penerbit :   {{$datak->penerbit}}</div>
            <div class="col-md-12">Tahun :      {{$datak->tahun}}</div>
            <div class="col-md-12">ISBN :       {{$datak->ISBN}}</div>
            <div class="col-md-12">Sinopsis : <br>
            {!!$datak->sinopsis!!}</div>
          </div>
         
          
      </div>
@endsection