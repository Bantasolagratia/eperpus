@extends('layout.layout')

@section('contents')
<!-- <div class="location" id="home">
          <h1 id="home">Daily</h1>
          <div class="box">
            <a href="detail"><img src="../image/cover/1.jpeg" ></a>
            <a href=""><img src="../image/cover/2.png" ></a>    
          </div>
      </div> -->

    <div class="location" id="home" style="background:rgba(250,250,250,0.12);">
        <div class="">
            <center><textarea  cols="140"  style="margin-top:70px; height:200px; padding: 10px; background:#C4C4C4;" placeholder="masukkan pertanyaan atau masukan..."></textarea></center>
        </div>
        <div class="mr-4">
            <input type="button" class="btn2 mt-4 float-right" value="Kirim">
        </div>
        <hr height="20px">
    
        <div class="col-md-12 ml-2 row">
            <div class="col-md-12 row">
                <div>
                    <img src="../image/cover/4.jpg" style="border-radius: 50%; height:60px; width:60px;" >
                </div>
                    <div>
                        <p>
                            Nama <br> &nbsp comment
                        </p>
                    </div>
            </div>
            <div class="col-md-12 row" style="margin-left:20px">
                <div>
                    <img src="../image/cover/4.jpg" style="border-radius: 50%; height:60px; width:60px;" >
                </div>
                    <div>
                        <p>
                            Nama <br> &nbsp comment
                        </p>
                    </div>
            </div>
        </div>
        <div class="col-md-12 ml-2 row">
            <div class="col-md-12 row">
                <div>
                    <img src="../image/cover/4.jpg" style="border-radius: 50%; height:60px; width:60px;" >
                </div>
                    <div>
                        <p>
                            Nama <br> &nbsp comment
                        </p>
                    </div>
            </div>
            <div class="col-md-12 row" style="margin-left:20px">
                <div>
                    <img src="../image/cover/4.jpg" style="border-radius: 50%; height:60px; width:60px;" >
                </div>
                    <div>
                        <p>
                            Nama <br> &nbsp comment
                        </p>
                    </div>
            </div>
        </div>
    </div>

@endsection
