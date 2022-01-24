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
                        <form method="post" enctype="multipart/form-data" action="{{url('/tambahbuku')}}">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="input-1">ISBN</label>
                                <input type="text" class="form-control form-control-rounded" id="ISBN" name="ISBN" placeholder="Nomor seri buku">
                            </div>
                            <div class="form-group">
                                <label for="input-2">Judul</label>
                                <input type="text" class="form-control form-control-rounded" id="judul" name="judul" placeholder="Judul buku">
                            </div>
                            <div class="form-group">
                                <label for="input-3">Pengarang</label>
                                <input type="text" class="form-control form-control-rounded" requried id="pengarang" name="pengarang" placeholder="Nama Pengarang">
                            </div>
                            <div class="form-group">
                                <label for="input-4">Penerbit</label>
                                <input type="text" class="form-control form-control-rounded" id="penerbit" name="penerbit" placeholder="Nama penerbit">
                            </div>
                            <div class="form-group">
                                <label for="input-6">Tahun</label>
                                <input type="text" class="form-control form-control-rounded" id="tahun" name="tahun" placeholder="Tahun terbit">
                            </div>
                            <div class="form-group">
                                <label for="input-6">Kategori</label>
                                <input type="text" class="form-control form-control-rounded" id="kategori" name="kategori" placeholder="Masukkan Kategori dan pisahkan dengan spasi">
                            </div>
                            <div class="form-group">
                                <label for="input-8" class ="col-form-label form-control-label">File Buku</label>
                                <input class="form-control" type="file" id="file_buku" name="file_buku">
                            </div>
                            <div class="form-group">
                                <label for="input-8" class ="col-form-label form-control-label">Cover</label>
                                <input class="form-control" type="file" id="cover" name="cover">
                            </div>
                            <div class="form-group">
                                <label for="input-9">Sinopsis</label>
                                <textarea  type="text" class="ckeditor form-control form-control-rounded" id="sinopsis" name="sinopsis" rows="10" cols="50"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Simpan</button>
                                <button type="submit"  class="btn btn-secondary btn-round px-5">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--End Row-->
@endsection