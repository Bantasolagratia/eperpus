@extends('layout.layout')
@section('contents')

      <form method="post" enctype="multipart/form-data" action="{{url('/nanyak')}}">
        {{ csrf_field() }}
    <div class="location" id="home" style="background:rgba(250,250,250,0.12);">
        <div class="">
            <center><textarea  cols="140"  style="margin-top:70px; height:200px; padding: 10px; background:#C4C4C4;" id="content" name="content" placeholder="masukkan pertanyaan atau masukan..."></textarea></center>
            <input type="hidden" name="tipe" id="tipe" value="pertanyaan">
        </div>
        <div class="mr-4">
            <input type="submit" class="btn2 mt-4 float-right" value="Kirim">
        </div>
    </form>
        <hr height="20px">
        @foreach($pertanyaan as $p)
            <div class="col-md-12 ml-2 row">
                <div class="col-md-12 row">
                    <div>
                        <img src="../image/cover/4.jpg" style="border-radius: 50%; height:60px; width:60px;" >
                    </div>
                        <div>
                            <p>
                                Unknown <br> &nbsp &nbsp{{$p->content}}
                            </p>
                        </div>
            
                </div>
                @foreach($jawaban as $j)
                @if($j->nomor_diskusi == $p->nomor_diskusi)
                <div class="col-md-12 row" style="margin-left:20px">
                    <div>
                        <img src="../image/cover/4.jpg" style="border-radius: 50%; height:60px; width:60px;" >
                    </div>
                        <div>
                            <p>
                                Admin <br> &nbsp &nbsp {{$j->content}}
                            </p>
                        </div>
                </div>
                @endif
                @endforeach
                
            </div>
        @endforeach
        
    </div>

@endsection
