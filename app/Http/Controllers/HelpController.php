<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\pertanyaan;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ruler()
    {   
        
            // $forum = DB::table('pertanyaan')
            //     ->select('nomor_diskusi', DB::raw('count(*) as total'))             
            //     // ->select('*')
            //     ->groupBy('nomor_diskusi')
            //     ->select()
            //     ->get();

            // $forum = pertanyaan::select("*", DB::raw("count(*) as total"))
            // ->groupBy(DB::raw("nomor_diskusi"))
            // ->get();       
           
            $pertanyaan = DB::table("pertanyaan")
            ->where('tipe', 'pertanyaan')
            ->get();
            $jawaban = DB::table("pertanyaan")
            ->where('tipe', 'jawaban')
            ->get();
        return view('help.index',['pertanyaan'=> $pertanyaan, 'jawaban' => $jawaban]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nanyak(Request $request)
    {   
        $quest = new pertanyaan;
        $quest->content = $request->content;
        $quest->tipe = $request->tipe;
        $quest->nomor_diskusi = rand(10,100);
        $quest->save();

        return redirect('help');
        
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
     * @param  \App\Models\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function showQu(){    
        
        
        $tanya =pertanyaan::all();
        
        return view('Admin.berandaAdmin',['tanya'=> $tanya]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function edit(Help $help)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Help  $help
     * @return \Illuminate\Http\Response
     */
   
    public function jawablah($id){     
        
        $data = pertanyaan::findOrFail($id);

        return view('admin/jawab', compact('data'));
    }
    
    public function kasihpaham(Request $request)
    {   
        $quest = new pertanyaan;
        $quest->content = $request->content;
        $quest->tipe = $request->tipe;
        $quest->nomor_diskusi = $request->nomor_diskusi;
        $quest->id_user = 0;
        $quest->save();

        return redirect('berandaAdmin');
        
    }

    public function deleteTanya($id){    
        
        pertanyaan::find($id)->delete();
    
        return redirect('berandaAdmin');
    }

    

}
