-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jan 2022 pada 08.07
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eperpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` int(11) NOT NULL,
  `ISBN` bigint(20) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `ISBN` bigint(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun` int(255) NOT NULL,
  `sinopsis` mediumtext NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `file_buku` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`ISBN`, `judul`, `pengarang`, `penerbit`, `tahun`, `sinopsis`, `kategori`, `cover`, `file_buku`) VALUES
(80881, 'Aku ini binatang jalang', 'Chairul Anwar', 'Gramedia Pustaka Utama', 1986, '<p>Siapa yang tidak kenal dengan penyair terbesar di Indonesia, Chairil Anwar dengan karya puisinya yang melegenda hingga saat ini dengan judul Aku Ini Binatang Jalang. Kumpulan sajak Chairil Anwar dari tahu 1942-1949 dibukukan dengan judul Aku Ini Binatang Jalang&nbsp; ini terbit pertama kali pada tahun 1986, saat ini merupakan cetakan ke dua puluh tujuh pada Februari 2018.</p>\r\n\r\n<p>Menurut Nirwan Dewanto dalam kata pembuka mengatakan bahwa sajak-sajak Chairil Anwar menyediakan dasar bagi penulisan puisi sampai hari ini. Atau dalam sajak-sajak Indonesia yang terbaik, kita selalu dapat menemukan jejak-jejaknya. Chairil Anwar turut menegakkan sastra dan budaya tulisan.</p>\r\n\r\n<p>Buku ini juga memberikan informasi tentang kumpulan sajak Chairil yang pernah ditampilkan dengan judul versi Deru Campur Debu(DCD), Kerikil Tajam dan Yang Terampas dan Yang Putus (KT), Tiga Menguak Takdir (TMT) dan lain sebagainya. Sajak yang sama bisa tampil dalam versi yang berbeda dengan perbedaan bait-bait dalam dua versi yang ada.</p>\r\n\r\n<p>Selain menampilkan sajak-sajak, dihalaman akhir buku ini terdapat bab yang berisi surat-surat Chairil Anwar kepada H.B Jassin. Surat yang ditujukan kepada Jassin yang beralamat di Paron ini lengkap disertai dengan tanggal, bulan serta tahun pembuatan surat. Hanya ada satu surat yang ada di buku ini namun hingga buku ini dicetak editor tidak berhasil menemukan surat asli dari Chairil ini. Oleh karena itu, yang dimuat adalah kutipan dari buku H.B Jassin yang berjudul Kesusatraan Indonesia Modern dalam Kritik dan Esei II.</p>\r\n\r\n<p>Bagi pecinta syair, buku ini menjadi salah satu buku yang patut dibaca sampai tuntas. Bagi orang awam, tidak sulit mengikuti alur puisi dalam buku ini. Karena di bagian awal khususnya di Kata Pembuka yang disampaikan oleh Nirwan Dewanto diberikan penjelasan tentang puisi atau sajak-sajak yang ditulis oleh Chairil. &nbsp;&nbsp;</p>', 'Sastra edukasi', '327911935.jpg', '13744084.pdf'),
(82719293, 'Teori sastra Indonesia', 'Fokkema', 'Gramedia', 1998, '<p>Ketika kuliah dulu saya berkesempatan belajar bersama beberapa peneliti Badan Pengembangan dan Pembinaan Bahasa Kemendikbud yang melakukan penelitian di Lombok Barat terkait penggunaan bahasa Indonesia di kawasan pariwisata. Ada seorang peneliti yang biasa disapa Pak Anto Lupus.&nbsp;</p>\r\n\r\n<p>Sayang sekali sampai saat ini saya tak tahu nama aslinya dan hilang kontak dengan beliau. Bila tak salah, beliau salah satu pemain film Lupus yang terkenal di tahun 1980-an. Pak Anto asik dalam berdiskusi. Ya, terutama karena beliau sabar menjawab pertanyaan-pertanyaan ajaib khas mahasiswa S-1 yang belum jelas kemana arahnya.&nbsp;</p>\r\n\r\n<p>Konten ini telah tayang di Kompasiana.com dengan judul &quot;Review Buku &quot;Sastra Lisan: Kajian Teori dan Penerapannya dalam Penelitian&quot;&quot;, Klik untuk baca:<br />\r\nhttps://www.kompasiana.com/sayyidati25722/5e0d96bed541df78b963bae2/review-buku-sastra-lisan-kajian-teori-dan-penerapannya-dalam-penelitian</p>\r\n\r\n<p>Kreator: Sayyidati Hajar</p>\r\n\r\n<p>Kompasiana adalah platform blog, setiap konten menjadi tanggungjawab kreator.</p>\r\n\r\n<p>Tulis opini Anda seputar isu terkini di Kompasiana.com</p>', 'Sastra edukasi', '68910216.jpg', '689951680.pdf'),
(9786020649672, 'The star and i', 'Ilana tan', 'Gramedia Widiasarana Indonesia', 2021, '<p>&quot;Kulihat dunia dalam matamu dan masa depan dalam senyummu...&quot;<br />\r\n<br />\r\nSejak kecil, Olivia Mitchell ingin tahu siapa orangtua kandungnya. Jadi, ketika ia mendapat kesempatan bekerja di New York, ia pun menyambarnya tanpa ragu. Namun, mencari seseorang tanpa nama di kota sebesar New York adalah sesuatu yang mustahil. Kini kontrak kerja Olivia akan segera berakhir, dan Olivia menolak pulang ke Inggris sebelum berhasil melacak keberadaan orangtua kandungnya.<br />\r\n<br />\r\nItu berarti ia harus segera mencari pekerjaan baru supaya ia bisa tetap tinggal di New York. Seolah-olah semua itu belum cukup memusingkan, Olivia mendadak bertemu kembali dengan Rex Rankin---sahabat masa kecilnya, sekaligus cinta pertamanya yang gagal---yang muncul untuk menawarkan bantuan.</p>', 'Novel Romance', '22933731.jpg', '521373732.pdf'),
(9786024125189, 'Filosofi Teras', 'henry manampiring', 'kompas', 2018, '<p>Buku ini awalnya menceritakan tentang sebuah survei kekhawatiran nasional yang semakin masif sekaligus menyajikan tentang sekilas kehidupan si penulis yang dipenuhi oleh emosi negatif yang berlebihan. Dalam buku ini dijelaskan bahwa penyebab emosi negatif atau kecemasan yang berlebihan disebabkan oleh rasio atau pola pikir yang keliru. Pada akhirnya, penulisnya menyarankan para pembaca untuk memperbaiki pola pikir yang keliru tersebut, dengan salah satu contohnya ialah menerapkan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Stoikisme\">filsafat Stoa</a>&nbsp;(Stoikisme) yang pada buku tersebut kemudian diterjemahkan sebagai &quot;Filsafat Teras&quot; dalam kehidupan sehari-hari. Dalam buku tersebut,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Stoikisme\">filsafat Stoa</a>&nbsp;digambarkan secara sederhana dengan inti dikotomi kendali nasib manusia, sehingga dari dikotomi kendali tersebut, manusia dapat menentukan hal-hal yang dapat membuatnya bahagia maupun tidak</p>', 'novel', '597317716.png', '642781731.pdf'),
(9786027870413, 'Dilan 1990', 'pidi baiq', 'Mizan Digital Publishing (MDP)', 2014, '<p>Cinta, walaupun sudah berlalu sekian lama, tetap saja, saat dikenang begitu manis.</p>\r\n\r\n<p>Milea, dia kembali ke tahun 1990 untuk menceritakan seorang laki-laki yang pernah menjadi seseorang yang sangat dicintainya, Dilan.</p>\r\n\r\n<p>Laki-laki yang mendekatinya (milea) bukan dengan seikat bunga atau kata-kata manis untuk menarik perhatiannya. Namun, melalui ramalan seperti tergambarkan pada penggalan cerita berikut :</p>\r\n\r\n<p><em>&ldquo;Aku ramal, nanti kita bertemu di kantin.&rdquo;&nbsp;</em>&ndash; Dilan -hlm. 20</p>\r\n\r\n<p>Tapi, sayang sekali ramalannya salah. Hari itu, Miela tidak ke kantin karena ia harus membicarakan urusan kelas dengan kawan-kawannya. Sebuah cara sederhana namun bikin senyum dipilih Dilan untuk kembali menarik perhatian dari Milea. Dian mengirim Piyan untuk menyampaikan suratnya yang isinya :</p>\r\n\r\n<p><em>&ldquo;Milea, ramalanku, kita akan bertemu di kantin. Ternyata salah. Maaf, tapi ingin meramal lagi : besok kita akan bertemu.&rdquo; &nbsp;</em>&ndash; Dilan &ndash; halaman. 22</p>\r\n\r\n<p>Tunggu, besok yang dimaksud oleh dilan itu adalah hari minggu. Ngga mungkin, kan mereka bertemu? Namun, ternyata ramalannya kali ini benar. Dilan datang ke rumah Miela untuk menyampaikan surat undangannya yang isinya :</p>\r\n\r\n<p><em>&ldquo;</em>Bismillahirrahmanirrahim<em>. Dengan nama Allah Yang Maha Pengasih lagiPenyayang. Dengan ini, dengan penuh perasaan, mengundang Milea Adnan untuk sekolah pada : Hari Senin, Selasa, Rabu, Kamis, Jumat, dan Sabtu.&rdquo;</em>&nbsp;&ndash; Dilan &ndash; hlm. 27</p>\r\n\r\n<p>Hal-hal yang sederhana ini nyatanya dapat membuat Milea tersenyum, dan perlahan mulai menaruh perhatiannya kepada Dilan. Sampai-sampai, sebentar dia lupa, ada Beni yaitu pacarnya yang berada di Jakarta.</p>\r\n\r\n<p>Milea tak mau kehilangan Dilan. Baginya, Dilan seperti sesuatu yang selalu dapat membuat hari-harinya penuh warna. Tapi, dia tampak sangat jahat pada Dilan, karena dia mau untuk menerima perhatian dari Dilan, padahal dia sudah ada yang memiliki.</p>\r\n\r\n<p>Sampai pada waktu milea memutuskan hubungannya dengan beni, pacarnya di jakarta. Ia cowok yang sangat emosian dan manja. Karena suatu hal yang ga perlu dijelaskan. Semenjak itu hubugan Dilan dan Milea semakin erat saja.</p>', 'Novel romantis', '911593913.jpeg', '625044543.pdf'),
(9789797809652, 'Kisah tanah Jawa : tikungan maut', 'Kisah tanah jawa', 'Gagas media', 2016, '<p>Jalan yang berkelok dan menanjak, cukup membuatku mual. Sampai pada ujung jalan menanjak, sebuah cahaya lampu menembus dari arah berlawanan. Bunyi klakson terdengar bersahutan di telinga. Sepersekian detik kemudian hantaman pertama merusak bus bagian depan, membuat bus hampir terguling. Seluruh penumpang terlempar keluar dari kursinya. Belum sempat kami membetulkan posisi, dari belakang tiba-tiba datang lagi hantaman kedua. Kondisi bus kini ringsek terhimpit dua truk. Kemudian, terdengar suara ledakan, seketika api dengan cepat membakar bagian depan merambat ke bagian belakang bus. Teriakan kesakitan menyeruak bersama isak tangis yang memutus kehidupan.<br />\r\n(Wati, korban)<br />\r\n<br />\r\n&ldquo;Saya menyaksikan kobaran api begitu besar, ketika serombongan manusia dalam bus itu terpanggang hidup-hidup. Tidak ada bala bantuan.&rdquo; (Saksi &ndash; pedagang pinggir jalan)<br />\r\n<br />\r\nRabu malam, 8 Oktober, 2003, jadi hari terakhir bagi Wati dan juga teman-temannya yang kembali dari study tour ke Bali. Bus mereka terbakar dan meledak setelah dihantam dua truk di dekat pintu PLTU Paiton, Jawa Timur. Tim Kisah Tanah Jawa mendatangi tempat kejadian yang memang dikenal sebagai kawasan rawan kecelakaan ini. Apa yang sebenarnya terjadi?<br />\r\n<br />\r\nBuku Kisah Tanah Jawa: Tikungan Maut mencoba menjawabnya.</p>', 'Novel misteri', '878793627.jpg', '201582803.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `khusus`
--

CREATE TABLE `khusus` (
  `ISBN` bigint(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun` int(255) NOT NULL,
  `sinopsis` mediumtext NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `file_buku` varchar(255) DEFAULT NULL,
  `pengkases` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `khusus`
--

INSERT INTO `khusus` (`ISBN`, `judul`, `pengarang`, `penerbit`, `tahun`, `sinopsis`, `kategori`, `cover`, `file_buku`, `pengkases`) VALUES
(9786029193671, 'Rahasia Dunia Yang Disembunyikan', 'Jonathan Black', 'Pustaka Alvabet', 2015, '<p>Banyak orang mengatakan bahwa sejarah ditulis oleh para pemenang. Hal ini sama sekali tak mengejutkan alias wajar belaka. Tetapi, bagaimana jika sejarah&mdash;atau apa yang kita ketahui sebagai sejarah&mdash;ditulis oleh orang yang salah? Bagaimana jika semua yang telah kita ketahui hanyalah bagian dari cerita yang salah tersebut?</p>\r\n\r\n<p>Dalam buku kontroversial yang sangat tersohor ini, Jonathan Black mengupas secara tajam penelusurannya yang brilian tentang misteri sejarah dunia. Dari mitologi Yunani dan Mesir kuno sampai cerita rakyat Yahudi, dari kultus Kristiani sampai Freemason, dari Karel Agung sampai Don Quixote, dari George Washington sampai Hitler, dan dari pewahyuan Muhammad hingga legenda Seribu Satu Malam, Jonathan menunjukkan bahwa pengetahuan sejarah yang terlanjur mapan perlu dipikirkan kembali secara revolusioner. Dengan pengetahuan alternatif ihwal sejarah dunia selama lebih dari 3.000 tahun, dia mengungkap banyak rahasia besar yang selama ini disembunyikan.</p>\r\n\r\n<p>Buku ini akan membuat Anda mempertanyakan kembali segala sesuatu yang telah diajarkan kepada Anda. Dan, berbagai pengetahuan baru yang diungkapkan sang penulis benar-benar akan membuka dan mencerahkan wawasan Anda.</p>', 'Misteri Khusus', '262003522.jpg', '94890989.pdf', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `nomor_diskusi` int(11) DEFAULT NULL,
  `tipe` varchar(255) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `content` varchar(255) NOT NULL,
  `tipe2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `nomor_diskusi`, `tipe`, `id_user`, `content`, `tipe2`) VALUES
(1, 98, 'pertanyaan', NULL, 'siapa nama ku?', NULL),
(3, 98, 'jawaban', 0, 'mana ku tau', 'jawaban'),
(4, 53, 'pertanyaan', NULL, 'boleh tanya?', NULL),
(5, 15, 'pertanyaan', NULL, 'lambemu?', NULL),
(6, 53, 'jawaban', 0, 'gk', 'jawaban'),
(7, 15, 'jawaban', 0, 'gk', 'jawaban'),
(8, 98, 'jawaban', 0, 'mana ku tau', 'jawaban');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suka`
--

CREATE TABLE `suka` (
  `id_suka` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ISBN_buku` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`) VALUES
(2, 'Banta', 'bn', 'banta@gmail.com', '$2y$10$8ff4VZ/L1RwtvbjjFxZfguJLjOeCFcXkaQ5oKmRWr5em5IvaJ.XQK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indeks untuk tabel `khusus`
--
ALTER TABLE `khusus`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suka`
--
ALTER TABLE `suka`
  ADD PRIMARY KEY (`id_suka`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `suka`
--
ALTER TABLE `suka`
  MODIFY `id_suka` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
