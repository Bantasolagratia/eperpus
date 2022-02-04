<?php

namespace App\Http\Controllers;
use App\Models\buku;
use App\Models\khusus;
use App\Models\izinkhusus;
use App\Models\suka;
use App\Models\antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
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
           $buku = khusus::all();
            
            return view('Admin.bukuAdmin',['bukus'=> $bukus,'buku'=>$buku]);
        }


        public function detail($ISBN){
            $data= buku::find($ISBN);
            $datas= khusus::find($ISBN);
    
            return view('detail',['data'=> $data,'datas'=>$datas]);
        }
        public function detailUser($ISBN){
            $data= buku::find($ISBN);
            
            return view('user/detailUser',['data'=> $data]);
        }
        public function detailUser2($ISBN){
            $datak= khusus::find($ISBN);
            
            return view('user/detailUser2',['datak'=> $datak]);
        }

       
        public function ajukan(Request $request){
            
            $aj = new izinkhusus;
            $aj->ISBN = $request->ISBN;
            $aj->id_user = Session::get('id');
            $aj->save();
           
            return redirect('berandaUser');
        }

        public function disukai(Request $request){
            
            $aj = new suka;
            $aj->ISBN = $request->ISBN;
            $aj->id_user = Session::get('id');
            $aj->save();
           
            return redirect('berandaUser');
        }
        public function antrian(Request $request){
            
            $aj = new antrian;
            $aj->ISBN = $request->ISBN;
            $aj->id_user = Session::get('id');
            $aj->save();
           
            return redirect('berandaUser');
        }

        public function innerjoinizinkhusus(){
            $testInner = DB::table('izinkhusus')
            ->join('khusus', 'khusus.ISBN', '=', 'izinkhusus.ISBN')
            ->join('user', 'user.id_user', '=', 'izinkhusus.id_user')
            
            ->select('*')
            ->get();

            dd($testInner);
        }
       public function lix(){
        $dis = DB::table('suka')
        ->Where('id_user','LIKE','%' . Session::get('id') . '%')
        ->get();
            return view('profil/index',['dis'=>$dis]);

       }
  
}
