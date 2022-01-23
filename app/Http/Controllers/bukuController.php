<?php

namespace App\Http\Controllers;
use App\buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class bukuController extends Controller
{
        public function tambahbuku(){
            $buku = new buku;
            $buku->ISBN = $request->ISBN;
            $buku->judul = $request->judul;
            $buku->pengarang = $request->pengarang;
            $buku->penerbit = $request->penerbit;
            $buku->tahun = $request->tahun;
            $buku->sinopsis= $request->sinopsis;
            $buku->kategori = $request->kategori;
        }




  
}
