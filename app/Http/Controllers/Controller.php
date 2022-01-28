<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\buku;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function registerPost(Request $request){    
            
        $this->validate($request,[
            'password'=>'required',
            ]);

    // $password =  Hash::$request->password;
    
    $user = new User;
    // if(Hash::check($password,$user->password)){

    $user->nama = $request->nama;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->password = bcrypt($request->password);
    
    
    
    if($request){
        if($request->password==$request->confirm){
            $user->save();
        }
        else{
            return redirect('/login')->with('alert','password tidak sesuai');
        }
    }
   

    
    return redirect('/login')->with('alert-success');
}
public function getin(Request $request){
    $this->validate($request,[
        'username' =>'required',
        'password'=>'required'
    ]);
    $username = $request->username;
    $password = $request->password;
    

    $data = User::where('username',$username)->first();
    if($data){ //apakah username tersebut ada atau tidak
        if(Hash::check($password,$data->password)){
            // if($password==$data->password){
           
                
                Session::put('id',$data->id);
                Session::put('nama',$data->nama);
                Session::put('username',$data->username);
                Session::put('email',$data->email);
                Session::put('password',$data->password);
                Session::put('login',TRUE);
                
                return redirect('berandaUser');
                           
        }
        else{
            
            return redirect('/login')->with('alert','Password atau Email, Salah !');
        }
   
    }

}

    public function indexing(){
        Session::put('login',FALSE);
        $data = DB::table('buku')
        ->inRandomOrder()
        ->LIMIT(2)
        ->get();

        $edu = DB::table('buku')
        ->Where('kategori','LIKE','%' . 'edukasi' . '%')
        ->get();

        $nov = DB::table('buku')
        ->Where('kategori','LIKE','%' . 'novel' . '%')
        ->get();

        $kus = DB::table('buku')
        ->Where('kategori','LIKE','%' . 'khusus' . '%')
        ->get();

       
        return view('welcome',['data'=> $data,'edu'=>$edu,'nov'=>$nov,'kus'=>$kus]);
    }
    public function indexingUser(){
        $data = DB::table('buku')
        ->inRandomOrder()
        ->LIMIT(3)
        ->get();

        $edu = DB::table('buku')
        ->Where('kategori','LIKE','%' . 'edukasi' . '%')
        ->get();

        $nov = DB::table('buku')
        ->Where('kategori','LIKE','%' . 'novel' . '%')
        ->get();

        $kus = DB::table('khusus')
        ->get();

       
        return view('user/welcome',['data'=> $data,'edu'=>$edu,'nov'=>$nov,'kus'=>$kus]);
    }


    public function logout(){
        Session::flush();
     
        return redirect('login')->with('alert','Kamu sudah logout');
    }

        
}

