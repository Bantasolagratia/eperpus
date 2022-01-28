@extends('layout.layoutAdmin')

@section('title')
    <title>Tambah Buku</title>
@endsection

@section('main-content')
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Form Tambah Buku</div>
                        <hr>
                        <form method="post" enctype="multipart/form-data" action="{{url('/kasihpaham')}}">
                        {{ csrf_field() }}
                            <input type="hidden" id="tipe" name="tipe" value="jawaban">
                            <input type="hidden" id="nomor_diskusi" name="nomor_diskusi" value="{{$data->nomor_diskusi}}">
                            <div class="form-group">
                                <label for="input-3">Pertanyaan</label>
                                <p>{{$data->content}}</p>
                            </div>
                            <div class="form-group">
                                <label for="input-3">Jawaban</label>
                                <input type="text" class="form-control form-control-rounded" requried id="content" name="content" placeholder="Masukkan Jawban">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Simpan</button>
                                <button type="cancel"  class="btn btn-secondary btn-round px-5">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--End Row-->
@endsection