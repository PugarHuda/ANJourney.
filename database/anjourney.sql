-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2023 pada 08.31
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anjourney`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activities`
--

CREATE TABLE `activities` (
  `id_activities` int(11) NOT NULL,
  `id_detailtour` int(11) NOT NULL,
  `gambarKategori` varchar(255) NOT NULL,
  `deskripsiKategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `activities`
--

INSERT INTO `activities` (`id_activities`, `id_detailtour`, `gambarKategori`, `deskripsiKategori`) VALUES
(2, 2, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `email`, `password`) VALUES
(1, 'huda', 'musang@gmail.com', 'musangpandan'),
(2, 'anjourney', 'anjourney@gmail.com', 'anjourney');

-- --------------------------------------------------------

--
-- Struktur dari tabel `atraksi`
--

CREATE TABLE `atraksi` (
  `id_atraksi` int(11) NOT NULL,
  `namaKota` varchar(255) NOT NULL,
  `deskripsiAtraksi` varchar(255) NOT NULL,
  `tempatAtraksi` varchar(255) NOT NULL,
  `judulAtraksi` varchar(255) NOT NULL,
  `deskripsiKota` varchar(255) NOT NULL,
  `gambarAtraksi` varchar(255) NOT NULL,
  `gambarKota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `gambarBerita` varchar(255) NOT NULL,
  `judulBerita` varchar(255) NOT NULL,
  `tanggalBerita` date NOT NULL,
  `penguploadBerita` varchar(255) NOT NULL,
  `deskripsiBerita` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `gambarBerita`, `judulBerita`, `tanggalBerita`, `penguploadBerita`, `deskripsiBerita`) VALUES
(16, '1702189300.jpg', 'Suku Batak Ada Berapa? Ini Penjelasan Beserta Penyebaran Wilayah Penuturnya', '2023-12-03', 'ADMIN', 'Masyarakat Batak dikenal sebagai makhluk yang heterogen. Hal itu terbukti dari penyebaran masyarakat Batak di Sumatera Utara.\r\nPenyebaran ini menyebabkan adanya perbedaan di tiap-tiap daerahnya. Selain itu, banyaknya populasi masyarakat Batak yang heterogen menciptakan klasifikasi tersendiri dalam bentuk bagian-bagian kecil lainnya yang disebut sub-etnis.\r\n\r\nLantas tahukah detikers suku Batak ada berapa bagiannya? Serta di mana saja letak bagian kecil-kecil dari suku Batak itu berada?\r\n\r\nBerdasarkan penelitian buku Report of a Journey into the Batak Country, suku Batak telah ada sejak 1800-an. Hal itu dikarenakan adanya masyarakat yang telah hidup dan memiliki kelompok pada tahun 1824 kala para misionaris Nathan Ward, Evans Meers, dan Richard Burton menjelajahi Tanah Batak. Disebutkan bahwa suku Batak menjadi etnis pertama yang mendiami wilayah timur Pulau Sumatera.\r\n\r\nBahkan, orang-orang Batak disebutkan telah ada sejak tahun 1200-an. Pasalnya, Marco Polo pernah menyebutkan pada tahun 1292 jika masyarakat Batak adalah orang-orang yang belum dipengaruhi agama-agama luar.\r\n\r\nSementara menurut laman resmi Universitas Stekom, diduga orang Batak telah melakukan migrasi dan menjadi penduduk tetap di Sumatera Utara sejak zaman logam. Hal itu dikarenakan hingga saat ini belum adanya temuan berupa artefak pada zaman batu muda di wilayah Batak.\r\n\r\nSementara itu, eksistensi suku Batak mulai popular sejak tahun 1926. Saat itu, orang-orang Batak dari berbagai sub etnis sepakat mendirikan Jong Batak.\r\n\r\nAdapun sub-etnis yang tergabung dalam Jong Batak adalah sub etnis Angkola, Pakpak, Mandailing, Karo, Simalungun, dan Karo. Kelima sub etnis ini juga dibenarkan menurut jurnal Kekerabatan Bahasa Batak Toba dengan Bahasa Batak Mandailing karya Farida Meliana Hutabarat dkk bahwa suku Batak terdiri dari 5 sub etnis. Kelima sub etnis tersebut itu meliputi Batak Toba, Batak Simalungun, Batak Karo, Batak Mandailing, dan Batak Pakpak.\r\n'),
(17, '1702189824.jpg', '6 Baju Adat Melayu Riau yang Wajib Kamu Ketahui', '2023-12-12', 'ADMIN', 'Indonesia memiliki berbagai suku yang tersebar di berbagai daerah. Pakaian adat memiliki peran penting untuk mencerminkan identitas masing-masing adat. Pakaian adat memiliki ciri khas yang berbeda setiap daerahnya.\r\nSama seperti suku lainnya, suku Melayu juga memiliki beberapa pakaian adat. Lantas, apa saja baju adat Melayu? Simak penjelasannya berikut ini.\r\n\r\n6  Baju Adat Melayu Riau\r\nDikutip dari tugas akhir yang ditulis oleh Ferri Supreadi dalam Repository Sekolah Tinggi Seni Rupa dan Desain Visi Indonesia, berikut ini 6 baju adat Melayu:\r\n\r\n1. Baju Kurung Teluk Belanga Wanita\r\nBentuk baju kurung teluk belanga memiliki ukuran yang agak longgar dan lapang, lehernya bulat dan dibelah kurang lebih 5 cm. Cara penggunaannya disempurnakan dengan menggunakan kain sarung batik, kain songket, atau kain pelekat. Biasanya baju ini dipakai oleh perempuan tua, setengah baya, dan anak gadis. Pemakaian baju kurung teluk belanga biasanya dilengkapi dengan selendang tipis atau kain tudung lingkup saat berpergian keluar rumah.\r\n\r\n2. Baju Kebaya Labuh\r\nBentuk kebaya labuh panjangnya tiga jari dari bawah lutut atau sampai batas betis, kancingnya sebanyak empat atau lima buah, biasanya memakai kancing ketip. Bentuk kebaya laboh tidak terlalu longgar dan sempit, panjang lengan baju ini sekitar dua jari dari pergelangan tangan sehingga gelang masih bisa terlihat.\r\n\r\n3. Baju Kebaya Pendek\r\nBaju kebaya pendek tidak jauh berbeda dengan kebaya laboh, hanya panjangnya sebatas pinggul dan di ujung baju ada yang mendatar dan agak miring di bagian depan. Baju kebaya pendek tidak terlalu sempit dan longgar. Baju kebaya pendek juga menggunakan kain pelekat.\r\n\r\nKebaya pendek dapat digunakan sehari-hari karena bentuknya praktis. Kebaya pendek juga dapat digunakan saat bekerja di ladang atau di sawah dengan menggunakan kain sarung sebagai pasangannya.\r\n\r\n4. Baju Kurung Teluk Belanga Pria\r\nBentuk baju kurung teluk belanga pria memiliki kerah dan juga kancing. Lengan baju panjang menutup pergelangan '),
(18, '1702190006.jpg', 'Refleksi Keragaman Budaya Indonesia dalam Motif Batik', '2023-12-06', 'ADMIN', 'Organisasi Pendidikan, Ilmu Pengetahuan, dan Kebudayaan Perserikatan Bangsa-Bangsa atau UNESCO menetapkan Batik sebagai Warisan Kemanusiaan untuk Budaya Lisan dan Nonbendawi, pada 2 Oktober 2009. \r\n\r\nSejak saat itu, setiap 2 Oktober diperingati sebagai Hari Batik Nasional melalui Keputusan Presiden Nomor 33 Tahun 2009. \r\n\r\nDilansir Kompas.com, UNESCO mengakui batik sebagai warisan dunia karena memenuhi kriteria, antara lain, kaya dengan simbol dan makna filosofi kehidupan rakyat Indonesia. \r\n\r\nMenurut UNESCO, teknik, simbolisme, dan budaya terkait batik sangat melekat dengan kebudayaan Indonesia. Bahkan, UNESCO menilai masyarakat Indonesia memaknai batik dari prosesi kelahiran sampai kematian. \r\n\r\nBatik juga menjadi refleksi akan keberagaman budaya di Indonesia, yang terlihat dari sejumlah motifnya, seperti pengaruh Arab dalam motif hias yang biasa ditemui di seni kaligrafi. \r\n\r\nAda pula pengaruh Eropa dalam bentuk motif bunga, pengaruh China dalam motif phoenix (burung api), hingga pengaruh India dan Persia dalam motif merak. \r\n\r\nMotif batik \r\n\r\nDikutip dari Kompaspedia, terdapat motif batik yang dianggap populer di Indonesia, yaitu: \r\n\r\nMotif batik Parang Kusumo \r\nMotif ini dianggap melambangkan deburan ombak di lautan yang menghantam batu karang yang maknanya bahwa manusia harus terus berjuang semasa di dunia. Batik dengan motif ini banyak ditemui di Jawa Tengah. \r\nMotif batik Sidomukti \r\nSidomukti sangat terkenal dan biasanya digunakan oleh orangtua mempelai pengantin saat resepsi adat Jawa Yogyakarta dan Solo. Sidomukti memiliki makna, sido artinya menjadi, mukti artinya sejahtera, sehingga melambangkan doa dan harapan menjadi sejahtera. \r\n\r\nMotif batik Lasem \r\nMotif ini merupakan perpaduan budaya lokal dengan Tionghoa, dan diproduksi di daerah Rembang oleh para pembatik keturunan Tionghoa. Motif batik Lasem kental akan budaya Tionghoa dengan warna merah dan motif daun yang menjadi ciri khas masyarakat China. \r\n\r\nMotif batik Mega Mendung \r\nMotif ini menggambark'),
(19, '1702189880.jpg', 'Mengmleng', '2023-11-23', 'ADMIN', 'Ada sebuah kesenian khas yang bernuansa mistis. Konon, tidak sembarang orang yang dapat menaikinya. Apabila nekat, maka bisa tertimpa malapetaka.\r\nMengmleng adalah kesenian daerah asli Ciamis. Dalam bahasa Indonesia, Mengmleng dapat diartikan sebagai kucing besar. \"Mengmleng dalam bahasa Sunda artinya ucing gede (kucing besar). Sebetulnya yang dimainkan pada kegiatan itu kreasi dari Mengmleng, terinspirasi dari barongsai. Kalau yang aslinya, bisa ditunggangi,\" ungkap penggiat budaya, Atus Gusmara. Kesenian Mengmleng biasa ditampilkan dalam acara-acara besar seperti peringatan Agustusan atau kegiatan kebudayaan lainnya. Kesenian ini dimainkan seperti dalam karnaval, sambil ditunggangi oleh seseorang. Konon, tidak sembarang orang yang dapat menaikinya. Hanya keturunan dari Eyang Maharaja Sakti Kawali yang dapat menungganginya. Apabila ada orang lain yang memaksa menaikinya maka akan mendapat malapetaka atau mengalami sakit.\r\n'),
(20, '1702189611.jpg', 'Mengenal Sejarah Tarian Boria di Kepulauan Riau', '2023-12-28', 'ADMIN', 'Di Indonesia, ada berbagai macam kebudayaan yang berasal dari dua budaya atau lebih. Proses akulturasi yang terjadi tidak menyebabkan hilangnya unsur-unsur kebudayaan dari dua atau lebih kelompok masyarakat. Menurut Kamus Besar Bahasa Indonesia (KBBI), akulturasi adalah percampuran dua kebudayaan atau lebih yang saling bertemu dan saling memengaruhi. Salah satu contoh akulturasi budaya di Indonesia adalah Tarian Boria yang ada di Kepulauan Riau. Dikutip dari website resmi Warisan Budaya Takbenda Indonesia, Boria merupakan salah satu dari dampak akulturasi budaya yang terjalin pada masa kesultanan Riau-Lingga dan Pulau Penang, Malaysia. Seyogyanya Boria merupakan bentuk seni pertunjukkan teater yang di dalamnya mencakup aspek tari dan musik.'),
(21, '1702189708.jpg', 'Hari Wayang Nasional 7 November', '2023-12-28', 'ADMIN', 'Indonesia memperingati Hari Wayang Nasional setiap tanggal 7 November. Peringatan tersebut merupakan salah satu peringatan nasional yang penting dalam bulan November ini. Hari Wayang Nasional mungkin belum akrab di telinga masyarakat Indonesia, karena belum lama ditetapkan oleh presiden, lo. Kira-kira bagaimana ya asal usul Hari Wayang Nasional ini? Simak ulasan di bawah ini, yang dikutip dari berbagai sumber. Hari Wayang Nasional adalah peringatan nasional di Indonesia yang jatuh pada setiap tanggal 7 November. Tahun ini, peringatan jatuh pada hari Selasa, 7 November 2023. Peringatan Hari Wayang Nasional menjadi momentum untuk menyadarkan masyarakat Indonesia atas salah satu kebudayaan bangsa, yaitu wayang, sebagaimana dilansir dari laman SMADATA. Selama ini, wayang telah tumbuh dan berkembang menjadi aset budaya nasional dengan nilai yang sangat berharga dalam pembentukan karakter dan jati diri bangsa Indonesia. Sehingga penetapan Hari Wayang Nasional bertujuan untuk meningkatkan rasa kecintaan masyarakat terhadap wayang.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailberita`
--

CREATE TABLE `detailberita` (
  `id_detailBerita` int(11) NOT NULL,
  `judulBerita` varchar(255) NOT NULL,
  `gambarBerita` varchar(255) NOT NULL,
  `deskripsiBerita` varchar(255) NOT NULL,
  `id_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailtour`
--

CREATE TABLE `detailtour` (
  `id_detailtour` int(11) NOT NULL,
  `gambarTour` varchar(255) NOT NULL,
  `namaKota` varchar(255) NOT NULL,
  `namaTour` varchar(255) NOT NULL,
  `ketersediaanTour` enum('Available','Non Available','None') NOT NULL,
  `durasiTour` varchar(255) NOT NULL,
  `hargaTour` varchar(255) NOT NULL,
  `kategoriTour` enum('Tari','Teater','Music','Pameran Visual') NOT NULL,
  `deskripsiTour` varchar(1000) NOT NULL,
  `funFact` varchar(1000) NOT NULL,
  `tanggalPelaksanaan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detailtour`
--

INSERT INTO `detailtour` (`id_detailtour`, `gambarTour`, `namaKota`, `namaTour`, `ketersediaanTour`, `durasiTour`, `hargaTour`, `kategoriTour`, `deskripsiTour`, `funFact`, `tanggalPelaksanaan`) VALUES
(1, '1702174167.jpg', 'TMII', 'PERTUNJUKKAN TARI JAIPONG', 'Available', '2-3 Jam', 'Rp200.000', 'Tari', 'Pertunjukan tari di Jakarta merupakan penampilan yang memukau, menampilkan keberagaman budaya dan seni tari yang khas dari berbagai suku dan etnis yang tinggal di ibu kota Indonesia. Dalam pertunjukan ini, Anda akan menyaksikan kombinasi yang menarik antara tarian tradisional dan modern yang mencerminkan warisan budaya yang kaya dari berbagai daerah di Indonesia.', 'Tari Jaipong lahir pada tahun 1976 di desa Kampung Mekarjaya, Kecamatan Rancakalong, Kabupaten Sumedang, Jawa Barat. Tarian ini diciptakan oleh Haji Suanda, seorang seniman musik dan tari asal Sunda. Penciptaan Jaipong terinspirasi oleh seni tari tradisional Sunda, namun dengan sentuhan modern dan ritme musik yang lebih dinamis. Awalnya, Jaipong dikenal sebagai tarian yang menggabungkan gerakan-gerakan tradisional dengan irama musik modern yang energik. Seiring berjalannya waktu, tarian ini menjadi sangat populer di masyarakat Sunda dan Indonesia pada umumnya. Keunikan dari Jaipong terletak pada gerakan-gerakan tubuh yang dinamis, khas, serta ritme musik yang menggoda untuk menari.', '2023-12-15'),
(2, '1702174147.jpg', 'TMII', 'PERTUNJUKKAN MEMUKAU REOG PONOROGO', 'Available', '2-3 JAM', 'Rp200.000', 'Tari', 'Tur wisata pertunjukan tari di Ponorogo merupakan perjalanan yang memukau ke dalam kearifan lokal Jawa Timur. Peserta tur akan dihadapkan pada pertunjukan Reog Ponorogo, tarian tradisional yang sangat terkenal dari daerah tersebut. Dalam pertunjukan ini, mereka akan disuguhkan dengan kostum-kostum yang megah, topeng singa yang besar, serta gerakan-gerakan yang dramatis dan enerjik. Reog Ponorogo adalah kombinasi unik dari tarian, musik, dan pertunjukan teater yang menampilkan kekuatan, keindahan, dan mitologi lokal. Peserta akan terpesona oleh keanggunan dan kekuatan atraksi ini yang mencerminkan warisan budaya yang kaya dan memiliki nilai simbolis yang mendalam bagi masyarakat Ponorogo. Tur ini memberikan pengalaman yang mendalam dalam memahami seni pertunjukan tradisional yang spektakuler dari Indonesia.', 'Dalam pertunjukan ini, penonton akan disuguhkan dengan kostum-kostum yang megah, topeng singa yang besar, serta gerakan-gerakan yang dramatis dan enerjik. Reog Ponorogo adalah kombinasi unik dari tarian, musik, dan pertunjukan teater yang menampilkan kekuatan, keindahan, dan mitologi lokal. Peserta akan terpesona oleh keanggunan dan kekuatan atraksi ini yang mencerminkan warisan budaya yang kaya dan memiliki nilai simbolis yang mendalam bagi masyarakat Ponorogo.', '2023-12-16'),
(3, '1702174111.jpg', 'Pura Luhur Uluwatu', 'PERTUNJUKKAN TARI API DARI BALI', 'Available', '2-3 JAM', 'Rp300.000', 'Tari', 'Tur wisata pertunjukan tari Kecak adalah pengalaman yang mengesankan di mana pengunjung dapat menyaksikan pertunjukan tari yang spektakuler dan unik di Bali, Indonesia. Kecak adalah pertunjukan tari yang menarik yang melibatkan paduan suara para pria yang duduk dalam lingkaran sambil mengeluarkan suara ', 'Tari Kecak berasal dari Bali, Indonesia, dan merupakan salah satu tarian tradisional yang paling terkenal di pulau ini. Tarian ini diciptakan pada tahun 1930-an oleh seniman terkenal dari Jerman, Walter Spies, bersama dengan seniman musik Bali, Wayan Limbak. Tari Kecak pertama kali dipersembahkan untuk pertunjukan film Jerman yang berjudul \"Island of the Demons\" (Pulau Setan). Tari Kecak awalnya merupakan bagian dari tari ritual atau tarian upacara dalam adat dan kepercayaan Bali, namun seiring waktu, tarian ini berkembang menjadi sebuah pertunjukan seni yang populer bagi wisatawan. Tari Kecak terkenal dengan penggunaan paduan suara laki-laki yang menghasilkan bunyi \"cak\" yang terus menerus, sambil membentuk formasi lingkaran yang mengelilingi api sebagai bagian dari cerita Ramayana.', '2023-12-17'),
(4, '1702174090.jpg', 'CANDI PRAMBANAN', 'PENTAS SENI LUDRUK', 'Available', '2-3 JAM', 'Rp200.000', 'Teater', 'Tur wisata pertunjukan Ludruk adalah pengalaman yang memukau dan mengasyikkan yang memperkenalkan pengunjung kepada seni teater tradisional Jawa Timuran yang disebut Ludruk. Peserta tur akan disuguhi pertunjukan teater Ludruk yang unik dan menghibur yang melibatkan aksi komedi, dialog interaktif, dan permainan peran yang enerjik. Di tengah pertunjukan, para peserta akan merasakan kehangatan budaya lokal saat berinteraksi dengan para aktor, belajar tentang sejarah dan cerita-cerita di balik pertunjukan Ludruk, serta mendalami aspek kultural dari seni pertunjukan tradisional ini.', 'Kalau Betawi punya lenong, Jawa Timur memiliki ludruk. Ludruk sendiri diperankan oleh aktor pria, termasuk para tokoh perempuannya. Ludruk mengangkat kehidupan sehari-hari meski pakaian mereka bertema tradisional. Mereka tidak banyak menggunakan simbolisasi seperti ketoprak. Pertunjukan ludruk selalu diiringi dengan alunan musik tradisional sehingga formatnya saling bergantian antara sesi teatrikal dan sesi musikal. Ludruk banyak digelar di momen-momen penting seperti peringatan kemerdekaan, acara syukuran pemerintah, hingga pernikahan tradisional. Isu yang dibahas biasanya berupa keluhan rakyat jelata seputar kesulitan ekonomi dan kritik pada kebijakan pemerintah secara umum. Namun, dikemas dengan cara humoris yang mengundang gelak tawa walaupun sebenarnya isunya tragis.', '2023-12-18'),
(5, '1702174078.jpg', 'CANDI PRAMBANAN', 'Merasakan Magisnya Wayang Tradisional', 'Available', '2-3 JAM', 'Rp150.000', 'Teater', 'Tur wisata pertunjukan wayang merupakan pengalaman yang memukau yang memperkenalkan pengunjung kepada seni tradisional Indonesia yang khas. Tur ini memungkinkan pengunjung untuk menyaksikan pertunjukan wayang, baik wayang kulit maupun wayang orang, yang merupakan bagian integral dari warisan budaya Indonesia. Dalam pertunjukan ini, para peserta akan menyaksikan keahlian dalang dalam memainkan karakter-karakter wayang, menceritakan kisah-kisah epik, mitos, atau legenda dengan menggunakan boneka wayang yang indah dan detail.', 'Wayang kulit merupakan pertunjukan yang menggunakan boneka kulit yang dipahat dengan detail dan dipasang di balik layar kulit. Dalang, pengatur wayang, memainkan berbagai karakter sambil menceritakan cerita yang sering kali bersumber dari epik Ramayana atau Mahabharata. Suara-suara yang dihasilkan dalang, dialog, dan musik tradisional mengiringi pertunjukan ini. Wayang diyakini memiliki sejarah yang panjang, dengan catatan tertua yang dapat ditemukan pada prasasti dari zaman Kerajaan Mataram Kuno, kira-kira abad ke-8 atau ke-9 Masehi. Pembuatan boneka wayang kulit membutuhkan keterampilan tinggi. Dalang juga harus memiliki kemampuan yang sangat baik dalam memainkan karakter-karakter wayang, memerankan dialog, dan bahkan improvisasi.', '2023-12-19'),
(6, '1702174062.jpg', 'Teater Besar Taman Ismail Marzuki', 'Pesona Teater Nusantara', 'Available', '2-3 JAM', 'Rp200.000', 'Teater', 'Perjalanan yang memukau ke dalam warisan budaya yang kaya di Jakarta. Dalam tur ini, pengunjung akan disuguhkan dengan pertunjukan teater yang mengangkat cerita-cerita rakyat tradisional Betawi, mencerminkan kehidupan dan nilai-nilai yang diperkaya dengan unsur mitologi, kepercayaan lokal, serta kisah-kisah sejarah yang diwariskan dari generasi ke generasi.', 'Teater Rakyat Betawi berkembang dari tradisi hiburan rakyat Betawi yang melibatkan unsur teater, tari, musik, dan cerita-cerita lokal. Ini merupakan hasil akulturasi dari berbagai pengaruh budaya yang masuk ke wilayah Betawi, termasuk budaya Tionghoa, Arab, Portugis, dan Melayu. Pertunjukan teater Betawi seringkali memadukan unsur-unsur komedi, drama, dan musik dengan narasi cerita rakyat atau legenda yang menghibur.', '2023-12-20'),
(7, '1702177160.jpg', 'CANDI PRAMBANAN', 'Harmoni Ekspresi Panggung: Ramayana', 'Available', '2-3 JAM', 'Rp250.000', 'Teater', 'Pertunjukan tari drama epik Ramayana yang dipentaskan di Prambanan, Yogyakarta. Pertunjukan ini menggabungkan elemen seni tari Jawa dengan cerita dari Ramayana dalam latar belakang Candi Prambanan yang megah.', 'Sendratari Ramayana adalah pertunjukan tari drama epik yang mengambil cerita dari kisah Ramayana, salah satu kisah besar dalam mitologi Hindu. Pertunjukan ini memiliki sejarah panjang yang berakar dalam budaya Jawa dan telah menjadi salah satu daya tarik wisata budaya di Indonesia. Sejarah Sendratari Ramayana dapat ditelusuri kembali ke masa pemerintahan Dinasti Mataram di Jawa Tengah, khususnya pada masa pemerintahan Raja Balitung yang memerintah pada abad ke-9. Pertunjukan ini menjadi bentuk seni yang diselenggarakan sebagai wujud penghormatan terhadap Dewa Wisnu, yang diyakini sebagai pelindung Prambanan. Pertunjukan ini biasanya digelar di depan Candi Prambanan yang megah pada malam hari, menciptakan suasana magis dengan pencahayaan yang indah. Sendratari Ramayana melibatkan ratusan penari dan musisi yang menggambarkan kisah cinta dan peperangan antara Rama dan Sita, serta perjuangan Hanuman melawan Rahwana. Para penonton akan terpesona oleh keindahan gerakan tari yang anggun dan d', '2023-12-21'),
(8, '1702173612.jpg', 'CANDI PRAMBANAN', 'Melodi Nusantara: Tur Menelusuri Musik Tradisioanal Pulau Jawa', 'Available', '2-3 JAM', 'Rp300.000', 'Music', 'Tur Menelusuri Musik Tradisional Jawa adalah perjalanan mendalam untuk merasakan keindahan dan keunikan musik tradisional yang khas dari Jawa, Indonesia. Peserta tur akan dibawa dalam perjalanan untuk mengenal beragam alat musik tradisional Jawa seperti gamelan (seperti gamelan pelog dan gamelan slendro), siter, kendang, dan banyak lagi.', '\"Gamelan adalah ansambel musik tradisional Indonesia yang terdiri dari berbagai instrumen perkusi seperti gongs, metallophones, kendang (gendang), dan instrumen lainnya yang terbuat dari logam. Sejarah gamelan berakar dalam kebudayaan Jawa, Bali, dan daerah lain di Indonesia. Asal-usul gamelan tidak diketahui secara pasti, namun diperkirakan telah ada sejak lebih dari 1.000 tahun yang lalu di wilayah Indonesia. Meskipun demikian, gamelan telah menjadi bagian integral dari kehidupan budaya masyarakat Jawa dan Bali selama berabad-abad. Gamelan tidak hanya digunakan sebagai sarana hiburan, tetapi juga memiliki peran penting dalam upacara keagamaan, acara adat, pertunjukan seni tradisional, dan berbagai acara kebudayaan lainnya. Setiap gamelan memiliki struktur dan komposisi yang unik, serta memiliki tanggung jawab sosial, spiritual, dan artistik yang dalam dalam masyarakatnya.\"', '2023-12-22'),
(9, '1702173576.jpg', 'Museum Seni Rupa dan Keramik', 'Pesona Suara Timur Nusantara', 'Available', '2-3 JAM', 'Rp150.000', 'Music', 'Tur \"Pesona Suara Timur Nusantara\" adalah pengalaman yang memukau yang memperkenalkan peserta kepada keindahan dan keragaman musik tradisional dari wilayah Timur Indonesia. Tur ini mengajak peserta untuk mengeksplorasi dan merasakan langsung keunikan dari berbagai jenis musik tradisional yang berasal dari daerah-daerah di Timur Nusantara, seperti Nusa Tenggara Timur, Maluku, Papua, dan sekitarnya.', 'Musik di bagian Indonesia Timur memiliki sejarah yang kaya dan beragam, tercermin dari keanekaragaman budaya dan suku bangsa di wilayah tersebut. Setiap daerah memiliki tradisi musik yang unik, terinspirasi oleh adat istiadat, kepercayaan, dan sejarah lokal. Beberapa contoh musik tradisional di Indonesia Timur antara lain: Musik Kolintang: Musik ini umumnya berasal dari Sulawesi Utara. Kolintang menggunakan rangkaian gong kayu yang disusun secara horizontal dan dimainkan dengan cara dipukul. Biasanya dimainkan dalam ansambel kolintang yang terdiri dari beberapa gong kayu. Musik Sasando: Ditemukan di Nusa Tenggara Timur, Sasando merupakan alat musik tradisional berupa cello mini yang terbuat dari daun lontar sebagai resonator. Sasando dimainkan dengan cara dipetik dan digunakan untuk memainkan lagu-lagu tradisional.', '2023-12-23'),
(10, '1702174311.jpg', 'Teater Besar Taman Ismail Marzuki', 'Alunan Warisan Budaya Kalimantan', 'Available', '2-3 JAM', 'Rp250.000', 'Teater', 'perjalanan yang memukau ke dalam warisan budaya yang kaya di Jakarta. Dalam tur ini, pengunjung akan disuguhkan dengan pertunjukan teater yang mengangkat cerita-cerita rakyat tradisional Betawi, mencerminkan kehidupan dan nilai-nilai yang diperkaya dengan unsur mitologi, kepercayaan lokal, serta kisah-kisah sejarah yang diwariskan dari generasi ke generasi. ', 'Kalimantan memiliki beragam alat musik tradisional yang unik, misalnya, gong sebagai alat musik yang penting bagi banyak suku di Kalimantan Barat dan Kalimantan Tengah, sasando yang berasal dari Suku Sumba di Kalimantan Timur, dan masih banyak lagi. Musik di Kalimantan sering digunakan dalam berbagai upacara adat, ritual keagamaan, dan peristiwa budaya seperti pertunjukan tari, upacara adat suku Dayak, dan perayaan keagamaan. Musik tradisional Kalimantan juga sering dipakai sebagai sarana hiburan dan ekspresi dalam kehidupan sehari-hari masyarakat, baik dalam bentuk pertunjukan musik, tari, maupun nyanyian.', '2023-12-24'),
(11, '1702173258.jpg', 'Museum Ullen Sentalu dan Museum Sonobudoyo ', 'Perjalanan Melewati Harta Karun Yogyakarta', 'Available', '2-3 JAM', 'Rp200.000', 'Pameran Visual', 'Selamat datang dalam tur budaya Yogyakarta! Nikmati pengalaman singkat yang membawa Anda melihat keajaiban sejarah dan seni Jawa. Mulailah dengan Museum Ullen Sentalu yang memukau dengan koleksi seni dan cerita budaya. Selanjutnya, jelajahi Taman Sari, kompleks istana kerajaan yang misterius.', 'Museum Ullen Sentalu didirikan oleh Keluarga Haryono, bangsawan Keraton Yogyakarta yang dekat dengan Keraton Surakarta. Keluarga Haryono merasa terpanggil untuk melestarikan budaya yang bernilai adi luhung. Pada 1990-an, muncul gagasan untuk mendirikan sebuah museum di kaki Gunung Merapi. Gagasan pendirian museum ini diketahui oleh pewaris Mataram Islam, sehingga Keluarga Haryono pun mendapat dukungan penuh dari mereka. Pewaris Kerajaan Mataram yang dimaksud adalah Pakubuwono XII, Paku Alam VIII, Putra Sultan Hamengkubuwono VIII yakni GBPH. Poeger, dan Putri Mangkunegara yang bernama Siti Nurul Kusumawardhani.', '2023-12-25'),
(12, '1702185221.jpg', 'BALI', 'Eksplorasi Karya Seni Lokal Bali', 'Available', '2-3 JAM', 'Rp200.000', 'Pameran Visual', 'Tur Eksplorasi Karya Seni Lokal Bali melalui Ubud Diary adalah pengalaman yang memukau yang mengajak peserta untuk mendalami kekayaan seni dan budaya di Bali, terutama di daerah Ubud yang terkenal dengan seni tradisionalnya. Mengikuti Ubud Diary akan memberikan kesempatan bagi peserta untuk melihat langsung proses pembuatan karya seni, berinteraksi dengan seniman lokal, dan belajar tentang teknik, inspirasi, serta filosofi di balik setiap karya seni yang diproduksi. Tur ini juga akan mengajak peserta untuk menyelami kebudayaan Bali melalui pertunjukan tari, musik, dan ritual budaya yang bisa menjadi inspirasi dalam karya seni mereka sendiri.', 'Menampilkan koleksi lukisan, barang antik dan artefak kayu, Ubud Diary mengadakan pameran reguler dengan lebih dari 20 seniman Bali menampilkan dan mengkhususkan diri dalam gaya Ubud dengan bentuk interpretasi seni mereka sendiri. Di art gallery ini, Anda akan menemukan harmoni seni dan teknologi dimana setiap karya seni memiliki kode QR yang memberikan informasi dan detailnya.', '2023-05-15'),
(13, '1702185198.jpg', 'JAKARTA', 'Jelajahi Seni Rupa Nusantara di Jakarta', 'Available', '2-3 JAM', 'Rp150.000', 'Pameran Visual', 'Tur ini menawarkan pengalaman yang memikat bagi para pengunjung yang ingin memahami kekayaan seni rupa Indonesia. Art1:Museum, salah satu museum seni yang terletak di Jakarta, menjadi tujuan utama dalam tur ini. Peserta tur akan diajak untuk menjelajahi koleksi seni rupa Nusantara yang luar biasa yang dipamerkan di Art1:Museum. Koleksi ini mencakup berbagai karya seni rupa tradisional dan kontemporer dari berbagai daerah di Indonesia, seperti lukisan, patung, karya seni instalasi, dan seni rupa lainnya. Tur ini memungkinkan pengunjung untuk meresapi keindahan, keunikan, dan keragaman seni rupa Nusantara.', 'Art:1 Museum dulu dinamakan Mon Decor yang telah berdiri sejak tahun 1983 sebagai sebuah art gallery Jakarta yang ternama. Lokasinya yang berada di Jalan Rajawali Jakarta Pusat memanggil-manggil pengunjung untuk menikmati karya seni kontemporer. Awalnya Mon Decor hanya menampung kebutuhan pencari karya seni visual untuk dekorasi interior. Pada tahun 2011, Mon Decor memutuskan membuka museum ruang seni dan institut seni serta memamerkan berbagai karya seni yang telah dikumpulkan sejak tahun 1983 untuk mendukung kemajuan seni Indonesia.', '2023-06-10'),
(14, '1702185159.jpg', 'YOGYAKARTA', 'Magical Arts Expedition', 'Available', '5 Hari/4 Malam', 'Rp700.000', 'Pameran Visual', 'Jika Anda seorang pencinta seni pertunjukan pameran visual dan ingin menggabungkan liburan dengan pengalaman seni yang luar biasa, paket tour \"Magical Arts Expedition\" ini adalah pilihan tepat untuk Anda. Dengan destinasi penuh daya tarik seni, setiap langkah perjalanan ini akan memanjakan indra Anda dan memperdalam pemahaman Anda tentang seni pertunjukan.', 'Seni pertunjukan pameran visual menciptakan panggung yang memaparkan keindahan dan keanekaragaman karya seni secara langsung, memperlihatkan keterampilan seniman dan merangsang refleksi estetika penonton. Seni pertunjukan pameran visual tidak hanya menjadi tempat untuk mengeksplorasi keindahan, tetapi juga menjadi sarana untuk menyuarakan pandangan sosial, politik, dan ekologis. Melalui sejarahnya yang panjang, seni pertunjukan pameran visual terus berkembang, mencerminkan evolusi seni dan refleksi dinamika masyarakat.', '2024-01-10'),
(15, '1702185110.jpg', 'BALI', 'Rhythmical Elegance Escape', 'Available', '3 Hari/2 Malam', 'Rp650.000', 'Tari', 'Jika Anda mengidamkan pengalaman tak terlupakan dengan menyelami keindahan dan keberagaman seni pertunjukan tari, ', 'Seni pertunjukan tari memiliki akar yang melintasi waktu dan budaya, menjadi ungkapan unik dari kreativitas dan identitas manusia sepanjang sejarah. Dari zaman prasejarah hingga era modern, tari telah menjadi bahasa universal yang menyampaikan emosi, cerita, dan kebudayaan. Dalam era globalisasi ini, seni pertunjukan tari terus berkembang, menggabungkan unsur-unsur budaya yang beragam. Festival-festival tari internasional dan perkembangan teknologi membuka pintu bagi penonton di seluruh dunia untuk menyaksikan dan menghargai keindahan serta kompleksitas seni pertunjukan tari.', '2023-12-24'),
(16, '1702185065.jpg', 'JAWA BARAT', 'Drama & Eksplorasi Budaya', 'Available', '6 Hari/5 Malam', 'Rp850.000', 'Teater', 'Jika Anda adalah pencinta teater yang haus akan pengalaman seni panggung yang mendalam, \"Drama & Eksplorasi Budaya\" adalah paket tour yang dirancang khusus untuk Anda. Berkeliling dari kota ke kota, tour ini akan membawa Anda dalam perjalanan melalui panggung-panggung teater terkemuka di Indonesia.', 'Seni pertunjukan teater adalah jejak panjang dan kaya dari peradaban manusia yang mencerminkan kreativitas, ekspresi, dan refleksi kehidupan. Dari panggung-panggung kuno hingga teater modern yang inovatif, seni pertunjukan teater terus melangkah maju sebagai sarana yang kuat untuk menyampaikan cerita, memprovokasi pemikiran, dan merayakan keberagaman manusia. Sejarah teater membingkai kisah-kisah manusia dan terus menginspirasi penonton di seluruh dunia.', '2024-01-01'),
(17, '1702185667.jpg', 'SURABAYA', 'Harmony Expedition', 'Available', '5 Hari/4 Malam', 'Rp550.000', 'Teater', 'Jika Anda adalah pencinta teater yang haus akan pengalaman seni panggung yang mendalam, \"Drama & Eksplorasi Budaya\" adalah paket tour yang dirancang khusus untuk Anda. Berkeliling dari kota ke kota, tour ini akan membawa Anda dalam perjalanan melalui panggung-panggung teater terkemuka di Indonesia.', 'Seni pertunjukan musik memiliki warisan panjang yang memperkaya budaya manusia sepanjang peradaban. Zaman kontemporer menandai inklusi genre musik yang semakin beragam dan terhubung secara global. Festival musik internasional, konser, dan platform daring telah menjadi bagian penting dalam mempromosikan dan merayakan keberagaman seni pertunjukan musik di seluruh dunia. Dengan melihat sejarahnya, seni pertunjukan musik terus menghadirkan inspirasi, hiburan, dan merangkul ragam kreativitas manusia.', '2024-01-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailwisata`
--

CREATE TABLE `detailwisata` (
  `id_detailWisata` int(11) NOT NULL,
  `gambarWisata` varchar(255) NOT NULL,
  `judulWisata` varchar(255) NOT NULL,
  `deskripsiWisata` varchar(255) NOT NULL,
  `id_detailtour` int(11) DEFAULT NULL,
  `id_berita` int(11) DEFAULT NULL,
  `kategoriWisata` enum('Tari','Pameran Visual','Teater','Music') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detailwisata`
--

INSERT INTO `detailwisata` (`id_detailWisata`, `gambarWisata`, `judulWisata`, `deskripsiWisata`, `id_detailtour`, `id_berita`, `kategoriWisata`) VALUES
(12, '1702185505.jpg', 'Reog Ponorogo', 'Saksikanlah sebuah seni pertunjukan tradisional dari Jawa Timur, Indonesia, memukau dengan daya tariknya yang begitu kuat dan unik. Dikatakan bahwa Reog Ponorogo bukan sekadar sebuah pertunjukan, melainkan sebuah warisan budaya yang mencerminkan kekayaan ', NULL, NULL, 'Tari'),
(13, '1702185477.jpg', 'Tari Kecak', 'Saksikanlah sebuah keajaiban seni tari yang berasal dari Bali, Indonesia, memikat hati penonton dengan daya tariknya yang unik dan mengagumkan. Salah satu ciri khas tari ini adalah penggunaan vokal ', NULL, NULL, 'Tari'),
(14, '1702185466.jpg', 'Lenong Betawi', 'Saksikanlah sebuah seni pertunjukan tradisional dari masyarakat Betawi di Jakarta, Indonesia, memiliki daya tarik yang khas dan menghibur. Pertunjukan ini tidak hanya menyuguhkan hiburan, tetapi juga mencerminkan kehidupan sehari-hari masyarakat Betawi de', NULL, NULL, 'Teater'),
(15, '1702185455.jpg', 'Ludruk', 'Saksikanlah sebuah seni pertunjukan tradisional dari Jawa Timur, Indonesia, memiliki daya tarik yang unik dan memikat hati penonton dengan kombinasi tarian, komedi, dan dialog yang menghibur. Pertunjukan ini umumnya melibatkan kelompok seniman lokal yang ', NULL, NULL, 'Teater'),
(16, '1702185442.jpg', 'Jaipong', 'Saksikanlah seni tari dan musik tradisional dari Sunda, Jawa Barat, Indonesia, memiliki daya tarik yang memikat dengan keindahan gerakan tari yang energetik dan irama musik yang menghentak. Seni pertunjukan ini menciptakan suasana yang meriah dan penuh se', NULL, NULL, 'Tari'),
(17, '1702185422.jpg', 'Angklung', 'Saksikanlah sebuah seni pertunjukan alat musik tradisional khas Sunda, Indonesia, memiliki daya tarik yang khusus dan mampu menyentuh hati dengan keindahan suara yang lembut dan harmonis. Terbuat dari bambu, angklung menjadi simbol keberagaman budaya dan ', NULL, NULL, ''),
(18, '1702185394.jpg', 'Orkes Gambus', 'Saksikanlah sebuah seni pertunjukan orkes gambus, sebuah warisan budaya musik Arab yang tumbuh dan berkembang di Indonesia, memiliki kaya akan harmoni, melodi indah, dan sentuhan etnis yang memukau. Orkes gambus menggabungkan instrumen-instrumen seperti g', NULL, NULL, ''),
(19, '1702185378.jpg', 'Oprak Alang', 'Saksikanlah sebuah seni pertunjukan Oprak Alang, sebuah warisan budaya Jawa Tengah, Indonesia, memiliki keunikan dengan perpaduan seni musik, tari, dan teater yang menghibur. Oprak Alang sering kali dipertunjukkan dalam rangkaian upacara adat atau perayaa', NULL, NULL, 'Tari'),
(20, '1702185364.jpg', 'Tarling', 'Saksikanlah sebuah Seni pertunjukan Tarling, sebuah seni tradisional yang berasal dari Jawa Barat, Indonesia, memiliki khas unik dengan perpaduan musik, nyanyian, dan teater yang memikat. Tarling menjadi representasi dari kehidupan masyarakat pedesaan Jaw', NULL, NULL, ''),
(21, '1702185353.jpg', 'Mamanda', 'Saksikanlah sebuah Seni pertunjukkan Mamanda, sebuah warisan budaya dari masyarakat Betawi, Jakarta, Indonesia, memiliki keunikan dengan perpaduan musik, tarian, dan teater yang memukau. Mamanda merupakan bentuk hiburan tradisional yang meriah dan khas, m', NULL, NULL, 'Teater'),
(22, '1702185333.jpg', 'Mak Yong', 'Saksikanlah sebuah Seni pertunjukan Mak Yong, warisan budaya dari masyarakat Melayu di Malaysia, memiliki ekspresi yang mendalam dengan perpaduan tarian, musik, dan drama tradisional. Mak Yong tidak hanya sebagai hiburan seni, tetapi juga sebuah bentuk pe', NULL, NULL, 'Teater'),
(23, '1702185321.jpg', 'Wayang Golek', 'Saksikanlah sebuah Seni pertunjukan wayang golek, warisan budaya Jawa Barat, Indonesia, memiliki keunikan yang memukau. Wayang golek, boneka kayu bergerak yang dihidupkan oleh dalang, bukan sekadar pertunjukan, melainkan suatu bentuk seni yang mencakup ke', NULL, NULL, 'Teater'),
(24, '1702185304.jpg', 'Art Jakarta', 'Saksikanlah sebuah seni pertunjukan pameran visual terbesar di Indonesia: Art Jakarta. Dalam sorot cahaya karya seni yang brilian, pameran ini mengundang penonton untuk menyaksikan dan meresapi keindahan yang berkisar dari tradisional hingga kontemporer.', NULL, NULL, 'Pameran Visual'),
(25, '1702185288.jpg', 'Art Jog', 'Saksikanlah sebuah seni pertunjukan Art Jog yang tidak hanya menampilkan karya seni, tetapi juga menciptakan pengalaman seni yang berinteraksi dengan kota itu sendiri. Pameran ini memberikan kesempatan bagi seniman lokal dan internasional untuk berpameran', NULL, NULL, 'Pameran Visual'),
(26, '1702185272.jpg', 'Art Bali Art Fair', 'Saksikanlah sebuah seni pertunjukan Art Bali Art Fair dengan menghadirkan pesona yang tak terlupakan dalam dunia seni pertunjukan pameran visual. Merupakan perhentian seni rupa terkemuka di Pulau Dewata, pameran ini tidak hanya menampilkan keindahan artis', NULL, NULL, 'Pameran Visual'),
(27, '1702185254.jpg', 'Solo International Performing Art (SIPA)', 'Saksikanlah sebuah seni pertunjukan Solo International Performing Art (SIPA) dengan persembahan gemilang seni pertunjukan visual yang memukau di kota Solo, Jawa Tengah. Dalam setiap pergelaran, SIPA membawa daya tarik unik yang memadukan tradisi lokal den', NULL, NULL, 'Pameran Visual');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id_home` int(11) NOT NULL,
  `id_activities` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `id_populartour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ordersummary`
--

CREATE TABLE `ordersummary` (
  `id_orderSummary` int(11) NOT NULL,
  `id_passenger` int(11) NOT NULL,
  `id_payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `passanger`
--

CREATE TABLE `passanger` (
  `id_passenger` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `extras` enum('a','b','c','d') NOT NULL,
  `hargaExtras` varchar(255) NOT NULL,
  `totalPassenger` varchar(255) NOT NULL,
  `humanType` enum('Dewasa','Anak anak','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `hargaTour` varchar(255) NOT NULL,
  `id_passenger` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `populartour`
--

CREATE TABLE `populartour` (
  `id_popularTour` int(11) NOT NULL,
  `id_detailtour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `namaDepan` varchar(255) NOT NULL,
  `namaBelakang` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `NIK` int(45) NOT NULL,
  `noTelepon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `namaDepan`, `namaBelakang`, `email`, `password`, `NIK`, `noTelepon`) VALUES
(1, 'musang', 'pandan', 'musangpandan@gmail.com', 'musangpandan', 33039483, 94738384),
(2, 'raisha', 'riash', 'raisah@gmail.com', '1234', 24353534, 2324234),
(3, 'halo', 'halo', 'halo@gmail.com', 'halo', 330394832, 11231232);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id_activities`),
  ADD KEY `id_detailtour` (`id_detailtour`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `atraksi`
--
ALTER TABLE `atraksi`
  ADD PRIMARY KEY (`id_atraksi`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `detailberita`
--
ALTER TABLE `detailberita`
  ADD PRIMARY KEY (`id_detailBerita`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indeks untuk tabel `detailtour`
--
ALTER TABLE `detailtour`
  ADD PRIMARY KEY (`id_detailtour`);

--
-- Indeks untuk tabel `detailwisata`
--
ALTER TABLE `detailwisata`
  ADD PRIMARY KEY (`id_detailWisata`),
  ADD KEY `id_berita` (`id_berita`),
  ADD KEY `id_detailtour` (`id_detailtour`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id_home`),
  ADD KEY `id_activities` (`id_activities`),
  ADD KEY `id_berita` (`id_berita`),
  ADD KEY `id_populartour` (`id_populartour`);

--
-- Indeks untuk tabel `ordersummary`
--
ALTER TABLE `ordersummary`
  ADD PRIMARY KEY (`id_orderSummary`),
  ADD KEY `id_passenger` (`id_passenger`),
  ADD KEY `id_payment` (`id_payment`);

--
-- Indeks untuk tabel `passanger`
--
ALTER TABLE `passanger`
  ADD PRIMARY KEY (`id_passenger`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `id_passenger` (`id_passenger`);

--
-- Indeks untuk tabel `populartour`
--
ALTER TABLE `populartour`
  ADD PRIMARY KEY (`id_popularTour`),
  ADD KEY `id_detailtour` (`id_detailtour`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activities`
--
ALTER TABLE `activities`
  MODIFY `id_activities` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `atraksi`
--
ALTER TABLE `atraksi`
  MODIFY `id_atraksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `detailberita`
--
ALTER TABLE `detailberita`
  MODIFY `id_detailBerita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detailtour`
--
ALTER TABLE `detailtour`
  MODIFY `id_detailtour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `detailwisata`
--
ALTER TABLE `detailwisata`
  MODIFY `id_detailWisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ordersummary`
--
ALTER TABLE `ordersummary`
  MODIFY `id_orderSummary` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `passanger`
--
ALTER TABLE `passanger`
  MODIFY `id_passenger` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `populartour`
--
ALTER TABLE `populartour`
  MODIFY `id_popularTour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`id_detailtour`) REFERENCES `detailtour` (`id_detailtour`);

--
-- Ketidakleluasaan untuk tabel `detailberita`
--
ALTER TABLE `detailberita`
  ADD CONSTRAINT `detailberita_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`);

--
-- Ketidakleluasaan untuk tabel `detailwisata`
--
ALTER TABLE `detailwisata`
  ADD CONSTRAINT `detailwisata_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`),
  ADD CONSTRAINT `detailwisata_ibfk_2` FOREIGN KEY (`id_detailtour`) REFERENCES `detailtour` (`id_detailtour`);

--
-- Ketidakleluasaan untuk tabel `home`
--
ALTER TABLE `home`
  ADD CONSTRAINT `home_ibfk_1` FOREIGN KEY (`id_activities`) REFERENCES `activities` (`id_activities`),
  ADD CONSTRAINT `home_ibfk_2` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`),
  ADD CONSTRAINT `home_ibfk_3` FOREIGN KEY (`id_populartour`) REFERENCES `populartour` (`id_detailtour`);

--
-- Ketidakleluasaan untuk tabel `ordersummary`
--
ALTER TABLE `ordersummary`
  ADD CONSTRAINT `ordersummary_ibfk_1` FOREIGN KEY (`id_passenger`) REFERENCES `passanger` (`id_passenger`),
  ADD CONSTRAINT `ordersummary_ibfk_2` FOREIGN KEY (`id_payment`) REFERENCES `payment` (`id_payment`);

--
-- Ketidakleluasaan untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id_passenger`) REFERENCES `passanger` (`id_passenger`);

--
-- Ketidakleluasaan untuk tabel `populartour`
--
ALTER TABLE `populartour`
  ADD CONSTRAINT `populartour_ibfk_1` FOREIGN KEY (`id_detailtour`) REFERENCES `detailtour` (`id_detailtour`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
