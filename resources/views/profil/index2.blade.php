@extends('layout.layoutUser')

@section('contents')
<section class="main-container" >
<div class="row">
    <div class="col-md-2"><h6 class="top">Nama</h6></div>
    <div class="col-md-2"><h6 class="top">Username</h6></div>
    <div class="col-md-2"><h6 class="top">Email</h6></div>
    <div class="col-md-6"></div>
    <div class="col-md-2"><hr class="line lname float-left"></div>
    <div class="col-md-2"><hr class="line lname float-left"></div>
    <div class="col-md-2"><hr class="line lname float-left"></div>
    <div class="col-md-6"></div>
    <div class="col-md-2">
        <h6>{{Session::get('nama')}}</h6>
    </div>
    <div class="col-md-2">
        <h6>{{Session::get('username')}}</h6>
    </div>
    <div class="col-md-2">
        <h6>{{Session::get('email')}}</h6>
    </div>
    <div class="col-md-6"></div>
        <div class="col-md-12"><h6 >Password</h6></div>
        <div class="col-md-12"><hr class="line lname float-left"></div>
        <div class="col-md-12">
            <h6>*************</h6>
        </div>
</div>
<div class="row top">
    <div class="col-sm-1">
        <a href="profil" style="decoration:none; color:white">disukai</a>
    </div>
    <div class="col-sm-1">|</div>
    <div class="col-sm-1">
        <h6><b>readlist</b></h6>
    </div>
    <div class="col-sm-1">|</div>
    <div class="col-sm-1">
        <a href="profil3" style="decoration:none; color:white">khusus</a>
    </div>
    <div class="col-md-12">
        <div class="box">
            @foreach ($dis as $d)
            <a href="../img/file_buku/{{$d->file_buku}}"><img src="../img/cover/{{$d->cover}}" ></a>
            
            @endforeach
        </div>
      </div>
<div>
</section>
@endsection
