@extends('layout.layout')

@section('contents')
      <div class="detail row" id="home">
           <div class="col-md-2">
             <img src="../image/cover/1.jpeg" width="170px" height="300px">
             <div class="centered">
               <a href="#">ajukan akses</a><br>
               <a href="#">tambah ke readlist </a><br>
               <a href="#">suka</a>
             </div>
          </div>
          <div class="col-md-10 row">
            <div class="col-md-12"><h4>Sejarah Dunia Yang Disembunyikan</h4></div>
            <div class="col-md-12">Pengarang :Jonathan</div>
            <div class="col-md-12">Pengarang :Jonathan</div>
            <div class="col-md-12">Pengarang :Jonathan</div>
            <div class="col-md-12">Pengarang :Jonathan</div>
            <div class="col-md-12">Sinopsis : <br>
            Banyak orang mengatakan bahwa sejarah ditulis oleh para pemenang. Hal ini sama sekali tak mengejutkan alias wajar belaka. Tetapi, bagaimana jika sejarahÃ¢â‚¬â€atau apa yang kita ketahui sebagai sejarahÃ¢â‚¬â€ditulis oleh orang yang salah? Bagaimana jika semua yang telah kita ketahui hanyalah bagian dari cerita yang salah tersebut?Dalam buku kontroversial yang sangat tersohor ini, Jonathan Black mengupas secara tajam penelusurannya yang brilian tentang misteri sejarah dunia. Dari mitologi Yunani dan Mesir kuno sampai cerita rakyat Yahudi, dari kultus Kristiani sampai Freemason, dari Karel Agung sampai Don Quixote, dari George Washington sampai Hitler, dan dari pewahyuan Muhammad hingga legenda Seribu Satu Malam.
            </div>
          </div>
          <div class="col-md-12  mt-5"><b>alasan akses</b></div>
          <div class="col-md-12 mt-2">
            <textarea class="text_area" placeholder="jelaskan kebutuhan anda..."></textarea>
          </div>
          <div class="col-md-12 mt-2">batas akses</div>
          <div class="col-md-12 mt-2">
            <input type="text" class="input_text" placeholder="masukkan tanggal">
          </div>
          <div class="col-md-12 mt-2">penanggung jawab</div>
          <div class="col-md-12 mt-2">
          <input type="text" class="input_text" placeholder="nama penanggung jawab">
          </div>
          <div class="col-md-12 mt-2">identitas penanggung jawab</div>
          <div class="col-md-12 mt-2">
          <input type="file">
          </div>
          <div class="col-md-12"><input type="submit" class="btn2 mt-4" value="Kirim"></div>
      </div>
@endsection