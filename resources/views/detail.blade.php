@extends('layout.layout')

@section('contents')
      <div class="detail row" id="home">
           <div class="col-md-2">
             <img  src="../img/cover/{{$data->cover}}" width="170px" height="300px">
             <div class="centered">
               
             </div>
          </div>
          <div class="col-md-10 row">
            <div class="col-md-12"><h4>{{$data->judul}}</h4></div>
            <div class="col-md-12">Pengarang :  {{$data->pengarang}}</div>
            <div class="col-md-12">Penerbit :   {{$data->penerbit}}</div>
            <div class="col-md-12">Tahun :      {{$data->tahun}}</div>
            <div class="col-md-12">ISBN :       {{$data->ISBN}}</div>
            <div class="col-md-12">Sinopsis : <br>
            {!!$data->sinopsis!!}</div>
            <div class="col-md-12"><a type="button" href="../img/file_buku/{{$data->file_buku}}">baca</a></div>
          </div>
         
          
      </div>
@endsection