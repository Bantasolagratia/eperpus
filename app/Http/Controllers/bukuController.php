<?php

namespace App\Http\Controllers;
use App\Models\buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class bukuController extends Controller
{
        public function tambahbuku(request $request){
            $buku = new buku;
            $buku->ISBN = $request->ISBN;
            $buku->judul = $request->judul;
            $buku->pengarang = $request->pengarang;
            $buku->penerbit = $request->penerbit;
            $buku->tahun = $request->tahun;
            $buku->sinopsis= $request->sinopsis;
            $buku->kategori = $request->kategori;

            $file = $request->file('file_buku');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('img/file_buku',$newName);
            $buku->file_buku = $newName;

            $file = $request->file('cover');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('img/cover',$newName);
            $buku->cover = $newName;
            
            $buku->save();
            return redirect('/tambahBuku');
            
            
        }

        public function showbooks(){    
        
        
            $bukus =buku::all();
            
            return view('Admin.bukuAdmin',['bukus'=> $bukus]);
        }




  
}
