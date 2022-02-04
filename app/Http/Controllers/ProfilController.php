<?php

namespace App\Http\Controllers;
use App\Models\suka;
use App\Models\buku;
use App\Models\User;
use App\Models\khusus;
use App\Models\izinkhusus;
use App\Models\Profil;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $dis = DB::table('suka')
        ->join('buku', 'buku.ISBN', '=', 'suka.ISBN')
        ->join('user', 'user.id_user', '=', 'suka.id_user')
        ->Where('suka.id_user','LIKE', Session::get('id'))
        ->get();

        
       
        return view('profil.index',['dis'=>$dis]);
    }
    public function index2()
    {   
        $dis = DB::table('antrian')
        ->join('buku', 'buku.ISBN', '=', 'antrian.ISBN')
        ->join('user', 'user.id_user', '=', 'antrian.id_user')
        ->Where('antrian.id_user','LIKE', Session::get('id'))
        ->get();

        
       
        return view('profil.index2',['dis'=>$dis]);
    }
    public function index3()
    {   
        $dis = DB::table('izinkhusus')
        ->join('khusus', 'khusus.ISBN', '=', 'izinkhusus.ISBN')
        ->join('user', 'user.id_user', '=', 'izinkhusus.id_user')
        ->Where('izinkhusus.id_user','LIKE', Session::get('id'))
        ->get();

        
       
        return view('profil.index3',['dis'=>$dis]);
    }
           
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        //
    }
    
}
