-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 06:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gostore`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` text DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `harga` int(50) DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `berat` int(80) DEFAULT NULL,
  `stok` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `id_kategori`, `harga`, `keterangan`, `gambar`, `berat`, `stok`) VALUES
(12, 'Overdoze sweater', 7, 93000, '\0MAU TAMPIL KECE DENGAN HARGA OKE. MAU TAMPIL KEKINIAN TAPI TAKUT MAHAL. DON\'T WORRY GUYS. DI KAMI KALIAN BISA TAMPIL KEREN GK PAKE MAHAL.\r\nKARNA HARGA YANG KAMI JUAL HARGA RAKYAT KUALITAS KONGLOMERAT<br>\r\nUkuran :<br>\r\n• M   -> Lebar Dada 53cm x Panjang Tangan 60cm x Panjang Badan 68cm<br>\r\n\r\n• L    -> Lebar Dada 55cm x Panjang Tangan 61cm x Panjang Badan 69cm<br>\r\n\r\n• XL  -> Lebar Dada 60cm x Panjang Tangan 62cm x Panjang Badan 70cm Masuk (80 kg)<br>\r\n\r\nReal Pic 100% Barang Sesuai Gambar<br>', 'Gambar_WhatsApp_2023-11-25_pukul_10_04_00_5af0452f1.jpg', 500, 20),
(13, 'HemClo kemeja wanita ', 11, 120000, 'BAHAN CRINKLE AIRFLOW<br>\r\nTekstur lembut, tebal, bahan tidak nerawang, bahan adem dan nyaman buat dipakai sehari2 jahitan rapi, kualitas tidak diragukan lagi.<br>\r\n\r\nKemeja basic bgt, jadi cocok buat dipakai harian, ospek, magang, ujian sidang, cocok juga untuk office look dan acara formal lainnya <br>\r\n\r\nReady 2 varian ya<br>\r\n- model kancing terbuka<br>\r\n- model kancing depannya ya kak..jadi terlihat lebih rapi<br>\r\n\r\nDetail Size :<br>\r\nSize M<br>\r\nLingkar dada 95cm<br>\r\nPanjang lengan 55cm<br>\r\nPnjg baju 65 cm<br>\r\n\r\nSize L<br>\r\nLingkar dada 105cm<br>\r\nPanjang lengan 55cm<br>\r\nPnjg baju 67 cm<br>\r\n\r\nSize XL<br>\r\nLd 110cm<br>\r\nPanjang lengan 56 cm<br>\r\nPanjang baju 68 cm<br>\r\n\r\nsize XXL<br>\r\nLD 120cm<br>\r\nPnjg lengan 58cm<br>\r\nPnjg baju 70cm<br>', 'Gambar_WhatsApp_2023-11-25_pukul_10_08_41_29009aa2.jpg', 500, 10),
(14, 'baju', 3, 60000, 'KAMI MENJUAL PRODUK BERKUALITAS DAN KEPUASAN PEMBELI<br>\r\n\r\nKEMEJA WANITA MODEL TERBARU COCOK UNTUK ACARA KASUAL DAN FORMAL SIS<br>\r\n\r\nKEUNGGULAN PRODUK KAMI :<br>\r\n\r\n✓ JAHITAN RAPIH,HALUS DAN KUAT YA SIS<br>\r\n\r\n✓ LENGAN MANSET ADA KANCINGNYA SIS<br>\r\n\r\n✓ MENGGUNAKAN BAHAN <b>Materia</b> : AIRFLOW CRINCLE <b>100% Original</b> (BAHAN LEMBUT,ADEM ,JATUH DAN NYAMAN SAAT DIPAKAI)<br>\r\n\r\n ✓ MENGGUNAKAN POLA STANDAR YG MEMBUAT BAJU DIPAKAI ENAK SAAT UNTUK BERAKTIFITAS<br>\r\n\r\n✓ PRODUK CACAT, TIDAK SESUAI DESKRIPSI DAN FOTO BISA TUKAR/REFUND<br>\r\n\r\n✓ MENGGUNAKAN KANCING DEPAN FULL HIDUP JADI BISA UNTUK BUSUI YA SIS<br>\r\n', 'Gambar_WhatsApp_2023-11-25_pukul_10_10_18_e2886d3513.jpg', 111, 10),
(15, 'Bianca Blouse ', 11, 70000, 'Blouse yg super keceh , cocok buat kemanapun<br>\r\ncocok banget buat ootd kece, warna2nya super cantik.<br>\r\nterdapat variasi tali di lengan membuat tampilan lebih cantik<br>\r\ntali bisa di atur sendiri sesuai kemauan<br>\r\n Langsung di checkout aja,<br>\r\n\r\n•Material dior crinkle Airflow<br>\r\nKarakteristik Rayon Crinkle Airflow: <br>\r\n\r\nTekstur Berkerut ,Lembut, Tebal, Jatuh, Adem, Tidak menerawang, Tidak Licin, Menyerap Keringat ,Praktis tidak perlu di licin.<br>\r\n\r\nTersedia 6 Ukuran M--L--XL--XXL--3XL--4XL<br>\r\n\r\nM--LD-90-CM-PB-70-CM-P.LENGAN 40CM<br>\r\n\r\n*L--LD-100-CM-PB-70-CM-P.LENGAN 40CM<br>\r\n\r\n*XL--LD-110-CM-PB-75-CM-P.LENGAN 45CM<br>\r\n\r\n*XXL--LD-120-CM-PB-75-CM-P.LENGAN 45CM<br>\r\n\r\n*3XL--LD-130-CM-PB-80-CM-P.LENGAN 50CM<br>\r\n\r\n*4XL--LD-140-CM-PB-80-CM-P.LENGAN 50CM<br>\r\n\r\n✓JAHITAN RAPIH<br>\r\nBAHAN LEMBUT,HALUS,TIDAK MUDAH KUSUT DAN TIDAK MENERAWANG<br>\r\nREALPICT 100%.<br>', 'Gambar_WhatsApp_2023-11-25_pukul_10_13_07_54662c9c.jpg', 500, 5),
(16, 'Kaos distro cardinal', 7, 85000, 'UNISEX ATASAN CASUAL ( Pria )<br>\r\n - Untuk Kualitas Jangan Di Ragukan Lagi Ya !<br>\r\n - MATERIAL 100% COTTON Combed 30s !<br>\r\n - Dengan Bahan 100% Cotton Good High Quality !<br>\r\n - Ketebalan Bahan 30s Standar Distro Mall !<br>\r\n - Kualitas Rib & Bahan Sesuai / Macthing New !<br>\r\n - Jahitan Presisi & Double Line ( Rantai ) !<br>\r\n - Warna Nya Solid, Detil & Finishing Nya Rapi !<br>\r\n - Tidak Luntur / Berbau Ketika Berkeringat !<br>\r\n - Bahan Adem, Dingin Sejuk Di Bawah Matahari !<br>\r\n - Bahan Tebal & Aman Mencuci Dengan Mesin !<br>\r\n\r\n  Size Chart :<br>\r\n  Perkiraan Lebar & Panjang <br>\r\n------------------------------------------------\r\nM 44 cm Lebar x 65 cm Panjang <br>\r\nL 50 cm Lebar x 69 cm Panjang <br>\r\nXL 52 cm Lebar x 71 cm Panjang <br>\r\nXXL 56 cm Lebar x 76 cm Panjang <br>\r\n------------------------------------------------<br>\r\n\r\n Produk 100% Sesuai Dengan Gambar Nya !<br>', 'Gambar_WhatsApp_2023-11-25_pukul_10_15_19_59b1ac04.jpg', 400, 12),
(17, 'Polo shirt distro ', 7, 70000, 'plain official -logo38 -kaos kerah pria-kaos kerah polo logo- kaos kerah M L XL XXL<br>\r\n\r\n\r\nDI bawah adalah detail tentang produk di atas:<br>\r\n\r\n-bisa untuk seragaman<br>\r\n-Polo Shirt Premium Bahan lakos  Pique premium<br>\r\n-Produk Original Produksi Pabrikan<br>\r\n-Bahan mudah menyerap keringat<br>\r\n-Bahan tebal & sisi jahitan<br>\r\n-Samping + bawah sangat rapih.<br>\r\n-Sehingga Sangat Nyaman Di kenakan<br>\r\n-Halus & Lembut,Warna Solid<br>\r\n-Tidak Pudar (Tajam),Tahan Lama<br>\r\n-Kaos sangat bagus untuk menjadi koleksi untuk menemani Aktifitas kalian.<br>\r\n-ukuran kaos:<br>\r\n\r\n   M     : ld 48 cm x pjg 68 cm<br>\r\n   L      : ld 50 cm x pjg 70 cm<br>\r\n   XL    :ld 52 cm x pjg 72 cm<br>\r\n  XXL  :ld 54 cm x pjg 74 cm<br>\r\ntoleransi ukuran 1-2 cm<br>\r\n\r\nKaos ini di design dengan simple dan exclusive dan sangat tepat di gunakan untuk fashion casual', 'Gambar_WhatsApp_2023-11-25_pukul_10_15_52_d7b341e0.jpg', 500, 20),
(18, 'Celana Pria Ori Slimfit', 7, 120000, 'Bahan jatoh, potongan slimfit. Jadi selalu terlihat mewah. \r\nCocok untuk segala aktifitas formal maupun casual \r\n\r\nReady ukuran 27-38 \r\n\r\nTerrsedia 5 varian warna\r\n1. Black\r\n2. light Grey\r\n3. Dark Grey\r\n4. Navy\r\n5. Light Brown\r\n\r\n\r\n==========================\r\n\r\nGARANSI TUKAR SIZE JIKA PRODUK KAMI TIDAK SESUA', 'Gambar_WhatsApp_2023-11-25_pukul_10_17_46_41b9d860.jpg', 500, 20),
(19, 'Celana Pendek Boxer', 11, 80000, 'BROADSHORT COMFY TRENDY<br>\r\nMaterial : diamond knitt ( bagian luar timbul , bagian dalam tidak timbul ) bahan halus & lembut , ringan & nyaman di pakai apalagi buat santai santai di rumah bagian pinggang karet+ tali yg bisa di tarik ulur panjang celana 45-47 cm ( cuttingan di atas lutut )<br>\r\n\r\nUkuran : ALL SIZE (L FIT TO XL)<br>\r\nMasuk bb 45 - 75 kg<br>\r\n\r\nCocok di pakai sehari - hari, di dalam rumah maupun untuk hangout..<br>\r\nPotongan model di atas lutut, Gaya anak muda banget pokonya<br>\r\nTerrsedia 5 varian warna<br>\r\n1. Black<br>\r\n2. light Grey<br>\r\n3. Dark Grey<br>\r\n4. Navy<br>\r\n5. Light Brown<br>\r\n==========================<br>\r\nGARANSI TUKAR SIZE JIKA PRODUK KAMI TIDAK SESUAI<br>', 'Gambar_WhatsApp_2023-11-25_pukul_10_18_47_37cc780c.jpg', 300, 4),
(20, 'Celana kulot wanita ', 11, 130000, 'THE MONSEUR GALLERY (TMG) adalah merek desain independen yang berkomitmen pada desain dan pengembangan kelompok muda. Sambil membantu konsumen untuk lebih membentuk citra kepribadian mode, itu menyampaikan sikap tren anak muda yang beragam, tidak membabi buta mengikuti, dan aktif dan mandiri, menunjukkan tren mode yang menarik dan avant-garde.<br>\r\n\r\nbahan : polyester <br>\r\nTANPA KARET DI BELAKANG<br>\r\n\r\nUkuran:\r\nS 	Panjang celana:101cm		Lingkar pinggang:64cm	Lingkar panggul:90cm<br>\r\nM 	Panjang celana:102cm 		Lingkar pinggang:68cm	Lingkar panggul:94cm<br>\r\nL	Panjang celana:103cm 		Lingkar pinggang:72cm 	Lingkar panggul:98cm<br>', 'Gambar_WhatsApp_2023-11-25_pukul_10_20_03_30a62e26.jpg', 500, 12),
(21, 'Sepatu sneaker pria', 6, 200000, '- Shoes Material<br>\r\n\r\n- Upper: canvas<br>\r\n\r\n- Sole: Rubber<br>\r\n\r\n- Insole: Jersey Foam<br>\r\n\r\n- Construction: Vulcanize<br>\r\n\r\nDetail Size:<br>\r\n\r\n40 = 25 cm<br>\r\n\r\n41 = 25.5 cm<br>\r\n\r\n42 = 26 cm<br>\r\n\r\n43=26.5 cm<br>\r\n\r\n- Sepatu Import 100%.<br>\r\n\r\n- Sepatu Sneakers Kualitas bagus harga terjangkau<br>\r\n\r\n- Sepatu Running, Kaki bergerak leluasa<br>\r\n\r\n- Sepatu Slip on Lembut di dalam,Nyaman saat dipakai<br>\r\n\r\n- Sepatu Anti slip, Tidak pengap, Tidak mudah lepas<br>\r\n\r\n- Sepatu Model simple dan elegan, Trend Fashion<br>', 'Gambar_WhatsApp_2023-11-25_pukul_10_24_31_1d7d3865.jpg', 800, 20),
(22, 'SEPATU WANITA SLIP ON', 5, 180000, 'SEPATU WANITA SLIP ON<br>\r\n- REAL PICT, produk sesuai dengan foto<br>\r\n- Material upper     : Kain kanvas Kualitas Terbaik <br>\r\n- Material Outsole : Karet ( Anti Slip )<br>\r\n- Nyaman Saat Dipakaiv\r\n- Finishing Rapi<br>\r\n- Harga Terjangkau<br>\r\n- Berkualitas, kuat dan awet<br>\r\n- Anti licin dan di desain simple agar nyaman dipakai bahkan untuk berjalan jauh. <br>\r\n- Cocok untuk digunakan di saat santai, bahkan untuk segala aktifitas<br>\r\n- Pilihan tepat bagi anda yg ingin tampil beda...<br>\r\n\r\nTersedia ukuran : 31 s/d 42<br>\r\n\r\nDetail ukuran :<br>\r\n- Size 31 untuk panjang kaki  19,5 cm<br>\r\n- Size 32 untuk panjang kaki  20 cm<br>\r\n- Size 33 untuk panjang kaki  20,5 cm\r\n- Size 34 untuk panjang kaki  21 cm<br>\r\n- Size 35 untuk panjang kaki  22 cm <br>\r\n- Size 36 untuk panjang kaki  22,5 cm<br>\r\n- Size 37 untuk panjang kaki  23 cm<br>\r\n- Size 38 untuk panjang kaki 23,5 cm <br>\r\n- Size 39 untuk panjang kaki  24,5 cm<br>\r\n- Size 40 untuk panjang kaki 25 cm<br>\r\n- Size 41 untuk panjang kaki  25,5 cm<br>\r\n- Size 42 untuk panjang kaki  26,5 cm<br>', 'Gambar_WhatsApp_2023-11-10_pukul_10_01_01_39c53525.jpg', 1000, 4),
(23, 'SEPATU PLEWALKER ', 14, 140000, 'Welcome<br>\r\n- Dropship & Reseller aman <br>\r\n- Jangan lupa Follow Toko & Like Produk kita untuk mendapatkan Diskon dan Update nya<br>\r\n\r\n* Nyaman, Empuk & Anti Slip / Tidak Licin<br>\r\n* Nyaman dipakai oleh si buah hati<br>\r\n* Cocok untuk harian, Acara, Maupun bepergian<br>\r\n* Menggunakan Material/bahan Aman dan Berkualitas<br>\r\n\r\n=>> Panduan Ukuran<br>\r\n- Ukuran 2 insole 11,3 cm (perkiraan 0 - 3 Bulan)<br>\r\n- Ukuran 3 insole 11,6 cm (perkiraan 4 - 6 Bulan)<br>\r\n- Ukuran 4 insole 11,9 cm (perkiraan 7 - 9 Bulan)<br>\r\n- Ukuran 5 insole 12,3 cm (perkiraan 10 - 12 Bulan)<br>', 'Gambar_WhatsApp_2023-11-10_pukul_10_05_16_ef2d6e73.jpg', 600, 20),
(24, 'Baju kaos pdk anak', 3, 90000, 'Bahan : Katun<br>\r\n\r\nDetail size chart :<br>\r\n-size 2; L31cm  P43cm<br>\r\n-size 4; L34cm  P47cm<br>\r\n-size 6; L37cm  P49cm<br>\r\n-size 8; L38cm  P55cm<br>\r\n-size 10; L41cm  P57cm<br>\r\n\r\n-Perkiraan Usia<br>\r\n-Size 2   (1-3 Tahun)<br>\r\n-Size 4   (4-5 Tahun)<br>\r\n-Size 6   (6-7 Tahun)<br>\r\n-Size 8   (8-9 Tahun)<br>\r\n-Size 10  (10-11 Tahun)<br>\r\n\r\n-Untuk Usia Hanya Estimasi, Karena Badan Anak Berbeda-Beda <br>\r\nToleransi Size Eror <br>\r\nHappy Shopping!<br>', 'Gambar_WhatsApp_2023-11-10_pukul_10_07_51_20480406.jpg', 400, 12),
(25, 'Celana Anak Laki-laki ', 3, 130000, 'bahan jeans<br>\r\naplikasi bordir<br>\r\n\r\nsize 2 PC 29cm  LP max 32cm 1-2 tahun<br>\r\nsize 4 PC 31cm LP max 34cm 2-3 tahun<br>\r\nsize 6 PC 33cm LP max 36cm 3-4 tahun<br>\r\nsize 8 PC 36cm LP max 38cm 4-5 tahun<br>\r\nsize 10 PC 38cm LP max 40cm 5-6 tahun<br>\r\nsize 12 PC 40cm LP max 42cm 6-7 Tahun<br>\r\n\r\nPC panjang celana<br>\r\nLP lebar pinggang ( maximal )<br>', 'Gambar_WhatsApp_2023-11-10_pukul_10_09_30_da9ac275.jpg', 400, 20),
(26, 'iPhone 15 Pro Max 512GB', 12, 22000000, '*Fitur : IMEI HP ini sudah terdaftar DPI, sesuai standaroperator Indonesia, dan bisa aktif normal.<br>\r\n*Pengiriman cepat dalam 24 jam setelah pesanandilakukan, yang tercepat dapat tiba dalam 2 hari.<br>\r\n*Jaminan kualitas, inspeksi produk sebelumpengiriman, kemasan aman, garansi produk<br>\r\n*Toko kami sedang melakukan promosi produk baru,Anda dapat membeli produk bagus dengan harga yangsangat murah.<br>\r\n\r\ni15 pro max kapasitas:<br>\r\n512 GB<br>\r\n1 TBUkuran dan Berat<br>\r\nLebar:78,1 mm<br>\r\nTinggi:160,8 mm<br>\r\nTebal:7,65 mmLayar<br>\r\nLayar Super Retina XDR dengan ProMotion<br>\r\nLayar OLED menyeluruh 6,7 inci (diagonal)<br>\r\nResolusi 2778 x 1284 piksel pada 458 ppiTeknologi ProMotion dengan refresh rate adaptif hingga 120 Hz<br>\r\nLayar HDR<br>\r\nTrue Tone<br>\r\nWarna luas (P3)<br>\r\nHaptic Touch<br>\r\nRasio kontras 2.000.000:1 (umum)<br>\r\nKecerahan maks 1.000 nit (umum); kecerahan maks 1.200 nit (HDR)<br>\r\nLapisan oleophobic anti sidik jari<br>\r\nMendukung tampilan berbagai bahasa dan karakter secara bersamaanTahan Cipratan, Air, dan Debu.<br>', 'Gambar_WhatsApp_2023-11-10_pukul_10_13_17_7cec54fa.jpg', 1000, 20),
(27, 'Apple MacBook Pro  M2', 13, 23299000, 'Apple MacBook Pro (13.3 inci, M2, 2022) 8C CPU, 10C GPU, 512GB Garansi Resmi<br>\r\n100% Original Baru dan Segel<br>\r\nUntuk Apple Macbook Resmi Indonesia Model Number ID/A Untuk indonesia dan dapat di klaim Garansi di Seluruh Apple Resmi di Indonesia iBox / Digimap / Story-i / QCD / Apple dll <br>\r\n\r\nMacBook Pro 13 inci lebih andal dari sebelumnya. Bertenaga super berkat chip M2 generasi berikutnya, MacBook Pro ini merupakan laptop pro Apple yang paling portabel, dengan kekuatan baterai hingga 20 jam (2)<br>\r\nChip M2 dengan performa CPU, GPU, dan pembelajaran mesin generasi berikutnya<br>\r\nCPU 8-core dan GPU 10-core yang lebih cepat untuk menyelesaikan berbagai alur kerja yang intens(3)<br>\r\nNeural Engine 16-core untuk berbagai tugas pembelajaran mesin canggih<br>\r\nMemori terintegrasi lebih cepat hingga 24 GB menjadikan segala yang Anda lakukan terasa lancar<br>\r\nPenggabungan gambar ke dalam panorama hingga 43 persen lebih cepat2<br>\r\nPerforma bermain game cepat.<br>', 'Gambar_WhatsApp_2023-11-10_pukul_10_16_58_2087d713.jpg', 2500, 10),
(28, 'Camera canon', 15, 3700000, 'READY MAZEHH<br>\r\nCanon 60D+Lensa Kit 18-55mm<br>\r\nHASIL FOTO BISA CEK DI SLIDE TERAKHIR<br>\r\n@KONDISI<br>\r\n*LCD bersih no vignet<br>\r\n*Layar vlip aman<br>\r\n*Video aman<br>\r\n*Optik bersih <br>\r\n*Karet grip kencang<br>\r\n*Lensa autofokus aman<br>\r\n*Tulisan di body dan lensa masih jelas<br>\r\n*Port di body normal semua<br>\r\n*Flash nyala terang<br>\r\n*AF MF Responsif<br>\r\n\r\n* KELENGKAPAN<br>\r\nBody, Lensa Kit, Cas Original, Baterai Original, Strap Original, Tutup Lensa<br>\r\n\r\n*BONUS<br>\r\nFREE ACC KAMERA : MEMORY SANDISK 16GB, SILICA GEL ANTI JAMUR, KAIN MICROFIBER PEMBERSIH LENSA, ADAPTER MEMORY, TRIPOD MINI, TAS KAMERA (SEMUA BONUS <br>BARANG BARU YA MAZEH).<br>', 'Gambar_WhatsApp_2023-11-10_pukul_10_20_09_a5452715.jpg', 1200, 4),
(29, 'Paket wannafit alat fitness', 4, 220000, 'Paket 5 in 1 didesain khusus untuk anda yang ingin melakukan olahraga yang fokus ke seluruh badan.<br>\r\n\r\nUntuk detail alat satu-persatu dapat dilihat melalui katalog alat satuan.<br>\r\n \r\nSaat paket sampai, Anda akan menerima:<br>\r\n1. 2x Push Up Stand (1pasang)<br>\r\n2. 1x Skipping Fitcoach<br>\r\n3. 1x Hand Grip Adjustable 5 - 60kg<br>\r\n4. 1x AB Wheel<br>\r\n\r\nReal Pic 100% Barang Sesuai Gambar<br>', 'Gambar_WhatsApp_2023-11-25_pukul_11_54_50_5cb6e775.jpg', 3000, 10),
(30, ' Celana chino matrix one ', 7, 157000, 'Lingkar Pinggang 108 cm, Panjang 109 cm, Lebar Paha 36 cm, lebar ujung kaki 21 cm<br>\r\n(TOLERANSI SIZE +- 1 SAMPAI 2 CM)<br>\r\n\r\n- Bahan Lembut, tebal, Strech / Meral 2cm-4cm<br>\r\n- Gambar produk 100% Real Pict <br>\r\n- Bahan cotton scoth premium chino untuk size 36-42 <br>\r\n- Bahan Cotton Twill Combad untuk size 27-34 <br>\r\n- bahan Tidak Luntur <br>\r\n- Model Fitting Slimfit<br>\r\n- Merek matrix one<br>\r\n- Memiliki saku kecil depan bisa digunakan untuk menyimpan handphone<br>', 'Gambar_WhatsApp_2023-11-10_pukul_11_58_56_2bd5d33c.jpg', 500, 12),
(31, 'sneakers casual', 6, 140000, 'Quality: Import<br>\r\nBahan Sole TPR (Thermo Plastic Rubber) Ringan dan tidak licin<br>\r\nInsole Material: Fabric ( Inject )<br>\r\nUpper Material: Canvas<br>\r\nModel sole: Lentur<br>\r\n\r\nDetail Size:<br>\r\n\r\n40: 24,5cm<br>\r\n41: 25,5cm<br>\r\n42: 26cm<br>\r\n43: 27cm<br>\r\n\r\n*\r\n- Sepatu Import 100%<br>\r\n- Sepatu Sneakers Kualitas bagus harga terjangkau<br>\r\n- Sepatu Slip on Lembut di dalam,Nyaman saat dipakai<br>\r\n\r\n\r\n *', 'Gambar_WhatsApp_2023-11-10_pukul_11_58_47_7eb2a3c8.jpg', 600, 8),
(32, 'kemeja wanita laura', 11, 60000, 'Laura Blouse<br>\r\nMATT : POLO LINEN <br>\r\n\r\nPILIHAN SIZE TINGGALIN DICATATAN PESANAN<br>\r\n(karena tidak bisa ditambahkan)<br>\r\n\r\nDetail Size•<br>\r\n• [All Size] Bb 40-70<br>\r\n~ LD : +/- 110 cm<br>\r\n~ P baju : +/- 65-74 cm<br>\r\n~ Lingkar Ketiak : +/- 46 cm<br>\r\n~ Panjang Lengan : +/- 49 cm<br>\r\n\r\n• [Jumbo] Bb 70-80<br>\r\n~ LD : +/- 120 cm<br>\r\n~ P baju : +/- 69-78 cm<br>\r\n~ Lingkar Ketiak : +/- 49 cm<br>\r\n~ Panjang Lengan : +/- 52 cm\r\n\r\nDetail Baju<br>\r\n~Kancing depan aktif (busui)<br>\r\n~Pergelangan Tangan Karet<br>\r\n~Panjang Baju belakang lebih panjang dari depan<br>', 'Gambar_WhatsApp_2023-11-10_pukul_11_58_24_0877d89c.jpg', 1000, 10),
(33, 'celana cutbray scuba ', 11, 50000, ' Kantong di kiri dan kanan <br>\r\nbahan asli good quality <br>\r\nPinggang full karet <br>\r\nMaterial : thick scuba <br>\r\n\r\nCUTBRAY CUBIT SCUBA <br>\r\nFOTO REALPICT YA KAK <br>\r\nBAHAN : SCUBA PREMIUM ( tebal & lembut ) <br>\r\n1. Detail ukuran ; <br>\r\nsize ; STANDAR <br>\r\n- Lingkar pinggang 62cm melar sampai 80cm <br>\r\n- Panjang 94cm <br>\r\n- Muat bb 40-60kg <br>\r\nsize JUMBO : <br>\r\n- Lingkar pinggang 82cm melar sampai 105cm <br>\r\n- Panjang 96cm <br>\r\n- Muat bb 60kg - 80kg <br>\r\n2. Detail produk <br>\r\n- Pinggang full karet jadi melar ya kak <br>\r\n- Varaisi jahitan cubit di bagian depan <br>\r\n- RESLETING depan jadi lebih mudah. <br>\r\n- Menggunakan kain scuba premium dijamin kualitas bagus dan rapih ya lembut sehingga nyaman digunakan seharian <br>\r\nHappy shoping kak .. semoga berkah selalu :) <br>', 'Gambar_WhatsApp_2023-11-10_pukul_11_58_13_a0ec221c.jpg', 400, 10),
(34, 'sneakers wanita ', 5, 78000, 'SEPATU WANITA DENGAN MODEL TERBARU MEMBERIKAN KESAN MEWAH UNTUK PENGGUNA NYA, BISA MENYALA KETIKA GELAP DENGAN CENTER LAMPU ATAU FLASH HP ANDA<br>\r\n\r\nMOHON DI BACA SUPAYA TIDAK KELIRU !!!<br>\r\n\r\nINGAT INI HANYA BISA MENYALA DENGAN CAHAYA LAMPU SAAT GELAP, APABILA TIDAK TERKENA CAHAYA WARNA NYA TIDAK MENYALA TAPI WARNA DASAR HITAM !!!!<br>', 'Gambar_WhatsApp_2023-11-10_pukul_11_58_05_696f603e.jpg', 800, 10),
(35, 'Dress anak perempuan', 3, 99000, '- Bahan Cotton 100%<br>\r\n- Kualitas Premium Grade A<br>\r\n\r\nKODE VARIASI : QZ-132<br>\r\nSIZE CHART :<br>\r\nM/90  Baju Putih lingkar dada: 54cm , P. lengan:28, Lingkar Dada Dress : 60 , Dress Panjang : 40<br>\r\nL/100 Baju Putih lingkar dada: 56 cm , P. lengan: 31 , Lingkar Dada Dress :62 , Dress Panjang: 42<br>\r\nXL/110 Baju Putih lingkar dada: 60cm , P. lengan: 36 , Lingkar Dada Dress : 66 , Dress Panjang: 46<br>\r\nXXL/120 Baju Putih lingkar dada: 62cm , P. lengan: 36,5 , Lingkar Dada Dress : 70  , Dress Panjang : 48<br>\r\nXXXL/130 Baju Putih lingkar dada: 66 , P. lengan:<br>', 'Gambar_WhatsApp_2023-11-10_pukul_11_57_56_cfc735bc.jpg', 600, 10),
(36, 'celana pendek cargo anak', 3, 55000, 'KATUN TWILL / AMERICAN drill premium tebal dan lembut<br>\r\n\r\n* ORDER WARNA RANDOM SESUAI DI FOTO PRODUK YA KAK..<br>\r\n\r\n**UKURAN--<br>\r\n\r\nL : 5 - 7 th<br>\r\nXL: 8 - 10 th<br>\r\nXXL: 11 - 13 th<br>\r\n\r\nDetail Ukuran: <br>\r\n\r\n\r\nL : 5 - 7 thn <br>\r\nPanjang = 42-43 cm<br>\r\nLingkar Paha = 48 cm<br>\r\nLingkar Pinggang = 52cm<br>\r\nLingkar Pinggang sampai melar hingga 76 cm<br>\r\n\r\nXL : 8 - 9 Tahun <br>\r\nLingkar Pinggang : 54 cm ( bisa melar sampai 78 cm) <br>\r\nLebar karet pinggang : 4,5 cm<br>\r\nLingkar Pesak : 60 cm<br>\r\nLingkar pinggul : 88 cm<br>\r\nLingkar pipa ujung : 45 cm<br>\r\nLingkar paha : 51 cm<br>\r\nPanjang celana : 45-46 cm<br>\r\nUntuk berat badan sekitar 30-35 kg<br>', 'Gambar_WhatsApp_2023-11-10_pukul_11_57_45_8864b402.jpg', 500, 10),
(37, 'sneakers children ', 14, 45000, 'Warna : Pink,Ungu<br>\r\nSize : 26, 27, 28, 29, 30, 31, 32, 33, 34, 35 <br>\r\nSize Chart : 26:15.9cm, 27:16.5cm, 28:17.1cm, 29:17.8cm, 30:18.1cm, 31:19.4cm, 32:19.7cm, 33:20.3cm, 34:21.6cm, 35:21.9cm<br>\r\nBahan : Sintetis<br>\r\nAcara : Kasual<br>\r\nBerat : 500 Gram <br>\r\n1 Kg : 2 Pasang<br>', 'Gambar_WhatsApp_2023-11-10_pukul_11_57_36_eec168eb.jpg', 1000, 20),
(38, 'Vivo  ', 12, 2519000, 'READY STOK!!!<br>\r\nBONUS :<br>\r\n1.Olike P1 10000 mAh Powerbank Rp199.000<br>\r\n2.Olike E20s headset Rp39.900<br>\r\n3.Vivo XE160 headset Rp89.000<br>\r\nFULL SET bawaan:<br>\r\nVIVO Y27/Y22/Y17s/Y02T<br>\r\nDokumentasi<br>\r\nKabel USB ke microUSB<br>\r\nPengisi Daya<br>\r\nSIM Ejector<br>\r\nCase Pelindung（Y16 tidak ada ）<br>\r\nLapisan Pelindung Layar (diaplikasikan)<br>\r\n\r\nSELAMAT DATANG DI THREETOONE <br>\r\n\r\nbonus bawaan unit : soft Case+ Antigores ( sudah terpasang ) + headset ( kalau ada )<br>\r\nbonus tambahan dari toko sesuai dengan pilihan yang anda PILIH saat melakukan CHEKOUT.<br>\r\n\r\n* Y27<br>\r\nLayar       6,64 inci<br>\r\nRAM<br>\r\n6GB RAM +6 Extended RAM<br>\r\nStorage<br>\r\n128GB (Memori Eksternal hingga 1TB)<br>\r\nBaterai    5000mAh (TYP)<br>\r\nFast Charging    44W FastCharge<br>\r\n\r\nY22<br>\r\nProsesor<br><br>\r\nHelio G85 Gaming Processo<br>\r\nRAM<br>\r\n6GB + 6GB Extended RAM<br>\r\n4GB + 4GB Extended RAM<br>\r\nPenyimpanan<br>\r\n128GB  (Memori Eksternal 1TB)<br>\r\nBaterai<br>\r\n5000mAh (TYP)<br>\r\nWarna<br>\r\nStarlit Blue / Summer Cyan / Metaverse Green<br>\r\nSistem Operasi<br>\r\nFuntouch OS 12<br>\r\nLayar       6,55 inci<br>\r\nKamera<br>\r\n', 'Gambar_WhatsApp_2023-11-10_pukul_11_57_26_3ea9db2f.jpg', 1000, 10),
(39, 'laptop chromebook flip', 13, 3850000, 'Tipe Prosesor : Intel N3050<br>\r\nMemori : 4 GB<br>\r\nHard Drive/mmc : 32 GB<br>\r\nPort : 2 x USB 3.0<br>\r\n2 x USB Type C<br>\r\n1 x MicroSD Card<br>\r\n1 x 3.5 mm audio dan microphone<br>\r\nNetworking : WLAN Adapter (IEE 802.11ac/b/g/n )<br>\r\nTipe Grafis : High Definition (HD) Intergarted (Radeon R4)<br>\r\nAudio : Integrated (Stereo)<br>\r\nMonitor : 11 Inch LED<br>', 'Gambar_WhatsApp_2023-11-10_pukul_11_57_12_e1d02ff5.jpg', 1500, 10),
(40, 'sbox instax mini 12', 15, 103000, 'Sbox Hardcase Motif Instax Mini 12 Camera Case with Photo Slot Design Crystal PVC Transparent Protector Shell Cover merupakan casing transparan dengan bahan PVC berkualitas yang didesain khusus untuk Instax Mini 12 Camera Anda. Casing ini didesain presisi untuk Instax 12 Anda. Lindungi kamera Anda dari guncangan, debu dan goresan.<br>\r\n\r\nFEATURE<br>\r\nInstax 12 camera case : perfect fit for Fujifilm Instax Mini 12 Instant Film Camera<br>\r\nDesigned with Slot Photo in Back<br>\r\nHard clear plastic protect your fujifilm instax mini 12 camera from drops<br>\r\nAn adjustable detachable bag strap is attached. More conveniently to carry the camera<br>\r\nSuitable for Fujifilm instax Mini 12 camera<br>\r\nMaterial : PVC plastic, transparent, light, dustproof and waterproof<br>\r\nTransparent ultra-hard PVC material<br>\r\nThe camera case is good quality<br>\r\n\r\nSPECIFICATIONS<br>\r\nModel : Hardcase / Crystal Case / Casing Instax Mini 12 Camera<br>\r\nMaterial : Acrylic PVC Plastic<br>\r\nSize : 125 x 115 x 60mm<br>\r\nStyle : Premium transparent<br>', 'Gambar_WhatsApp_2023-11-10_pukul_11_56_57_c62e73aa.jpg', 1000, 20),
(41, ' Speed sit up stand', 4, 67000, 'Tingkat ketinggian sit up ini dapat set dengan 3 pengaturan ketinggian. Dengan begini Anda dapat menyesuaikan tingkat ketinggian untuk mendapatkan kenyamanan maksimal.<br>\r\n\r\nSit Up Stand ini cocok untuk digunakan untuk beberapa jenis lantai berbeda seperti lantai kayu, granite, ceramic tile, marble, dll.<br>\r\n\r\nInformasi produk:<br>\r\nMaterial: Besi, Foam, Rubber<br>\r\nUkuran: 25.5x24x19cm<br>\r\nWarna: Biru, Pink, Hitam<br>\r\nBerat: 1.050g<br>\r\n\r\nSit Up Stand ini merupakan alat yang dapat dapat digunakan untuk menahan kaki ketika melakukan gerakan sit up. Gerakan olahraga lainnya pun dapat dilakukan dengan alat ini. Dilengkapi <br>dengan suction cup yang menempel kuat pada permukaan datar. Dengan begitu kuat untuk menopang berat Anda dan siapapun.<br>', 'Gambar_WhatsApp_2023-11-10_pukul_11_56_40_62cc1cd2.jpg', 2000, 10),
(42, 'KAOS SETELAN AMOND', 7, 150000, ' produksi memakai bahan babyteri, <br>\r\nSangat nyaman di pakai, tebal.<br>\r\ntidak gerah ketika musim panas, cocok untuk di daerah tropis.<br>\r\n.\r\nSpesifikasi = <br>\r\n* Bahan : Babyteri<br>\r\n.\r\nTersedia 3 Warna :<br>\r\n*** Hitam<br>\r\n*** Biru Navy<br>\r\n*** Abu<br>\r\n.\r\nUkuran Tersedia = S-M-L-XL<br>\r\n* Ukuran Detail :<br>\r\n\r\nKaos<br>\r\nM = Panjang 70cm. Lebar 50cm <br>\r\nL = Panjang 73cm. Lebar 53cm<br>\r\nXL = Panjang 74cm. Lebar 55cm <br>\r\n\r\nCelana<br>\r\nM = Panjang 50cm <br>\r\nL = Panjang 52cm<br>\r\nXL = Panjang 54cm<br>', 'Gambar_WhatsApp_2023-11-25_pukul_13_52_43_8e1dd036.jpg', 500, 20),
(43, ' DHIGH', 6, 280, ' DHIGH merupakan sebuah nama yang terinspirasi dari kata Dream High yang memiliki arti Bermimpi tinggi. Karena kami ingin kalian semua untuk selalu berani untuk memiliki mimpi yang tinggi didalam hidup kalian.<br>\r\n\r\nUpper : Premium Faux Leather<br>\r\nLining : Textile<br>\r\nSole : Premium Phylon Rubber<br>\r\nConstruction : High Pressure Cementing<br>\r\n\r\nSize Chart :<br>\r\n36 / 23 CM / US 3<br>\r\n37 / 23,5 CM / US 4\r\n38 / 24 CM / US 5<br>\r\n39 / 25 CM / US 6<br>\r\n40 / 26 CM / US 7<br>\r\n41 / 26,5 CM / US 8<br>\r\n42 / 27 CM / US 9<br>\r\n43 / 27,5 CM / US 10<br>\r\n44 / 28 CM / US 11<br>\r\n45 / 28,5 CM / US 12<br>\r\n\r\nBangga Buatan Indonesia', 'Gambar_WhatsApp_2023-11-25_pukul_13_55_52_a643bf01.jpg', 800, 10),
(44, 'Luxury KANYA SET', 11, 90000, 'pakaian wanita terbaru LUXURY SET<br>\r\n  Materials : <br>\r\nAtasan : Rayon Premium<br>\r\nCelana : Crinkle Airflow<br>\r\n\r\nDetail size Baju : <br>\r\nLingkar dada : 115cm<br>\r\nPanjang Baju : 66cm<br>\r\nPanjang Lengan : 52cm<br>\r\nLingkar Ketiak : 40cm<br>\r\n\r\nDetail size celana : <br>\r\nPanjang Celana : 90cm<br>\r\nLingkar Paha : 64cm<br>\r\n\r\n\r\nSooo, tunggu apa lagi yuk checkout sekarang', 'Gambar_WhatsApp_2023-11-25_pukul_14_01_07_6a9e46d7.jpg', 900, 10),
(45, 'Flat shoes', 11, 115000, 'NAVISA COLLECTION juga memiliki variasi warna yang up to date. Cocok untuk berbagai jenis warna kulit dan tersedia berbagai macam ukuran yang nyaman untuk dipakai. DESKRIPSI PRODUK NAVISA BASIC <br>COLLECTION :<br>\r\n- Kondisi 	: 100% Baru dan Kualitas Tinggi<br>\r\n- Warna 	   	: Hitam/White/Cream/Mocca/Biscuit/Camel/Hijau muda/Salem<br>\r\n- Material 	: Faux Leather  CROCO<br>\r\n- Sole 		: Synthetic PU  <br>\r\n- Outsole        : Rubber <br>\r\n- Tinggi Hak 	: 2 cm <br>\r\n\r\nSIZE CHART  NAVISA COLLECTION ( DISARANKAN UNTUK KAKI LEBAR UNTUK UP SIZE ) <br>\r\nUkuran InSole :<br>\r\n37 : 23 cm<br>\r\n38 : 23,5 cm<br>\r\n39 : 24 cm<br>\r\n40 : 24,5 cm<br>\r\n\r\nUkuran Kaki :<br>\r\n37 : 22 cm<br>\r\n38 : 22,5 cm<br>\r\n39 : 23 cm<br>\r\n40 : 24 cm<br>', 'Gambar_WhatsApp_2023-11-25_pukul_14_10_30_b51df646.jpg', 1000, 4),
(46, 'Bisalo Kaos Anak-Anak', 3, 52000, '====================================================<br>\r\n\r\n\r\nSize (Kaos Anak):<br>\r\nS : LD 60cm<br>\r\n\r\nM : LD 70cm<br>\r\n\r\nL : LD 74cm<br>\r\n\r\nXL : LD 76cm<br>\r\n\r\nXXl : LD 82cm<br>\r\n\r\nUmur Size (Kaos Anak)<br>\r\n\r\nS : 12 - 18bln<br>\r\n\r\nM : 2 - 4thn<br>\r\n\r\nL : 5 - 6thn<br>\r\n\r\nXL : 7 - 8thn<br>\r\n\r\nXXL : 9 - 10thn<br>\r\n\r\n*With Digital Printing (DTF/DIRECT TRANSFER FILM)*<br>\r\n\r\nMore durable<br>\r\n\r\nNot fast<br>\r\n\r\nPurpose image<br>\r\n\r\nCurrent Image Results (3D)\r\n<br>\r\nFine and Soft Material<br>\r\n\r\n#100% Original Cotton#', 'Gambar_WhatsApp_2023-11-25_pukul_14_15_02_e8297c19.jpg', 600, 12),
(47, 'Celana cargo', 3, 78000, 'celana panjang cargo pant 1-13 tahun<br>\r\nbahan japan drill<br>\r\nada 3 warna,hitam,biru,dan mint<br>\r\nBISA PILIH WARNA<br>\r\nestimasi size<br>\r\n\r\nSIZE M 1-3th panjang 29cm, lingkar pinggang 29cm<br>\r\nSIZE L 4-6th panjang 64 cm, lingkar pinggang 38cm<br>\r\nSize XL 7-9h panjang 74cm, lingkar pinggang 42cm<br>\r\nSize XXL 10-12th panjang  84cm, lingkar pinggang 44cm<br>', 'Gambar_WhatsApp_2023-11-25_pukul_14_22_01_06285724.jpg', 400, 10),
(48, 'Sepatu vans oldschool', 14, 153000, 'barang 100% BARU<br>\r\nQualitas terbaik<br><br>\r\nOut sole : SOL KARET (tidak licin saat dipakai)\r\nSepatu : sneakers<br>\r\nBahan : Canvas Berkualitas tinggi Nyaman di gunakan<br>\r\nDapat menyerap keringat\r\nBahan bagian dalam lembut tidak lecet dikaki<br>\r\nKuat, sporty, ringan, nyaman di pakai dan tahan lama<br>\r\nCocok di gunakan untuk pria dan wanita<br>\r\nTipe penutup : Slip-On<br>\r\nBisa digunakan untuk sekolah, kuliah, bepergian, dan menemani kegiatan sehari hari, hangout bareng teman<br>\r\nHarga relatif lebih murah<br>\r\nBisa bayar ditempat<br>\r\nReal pict<br>\r\nPANDUAN SIZE :  26 INSOLE 17.5 CM { 3 SAMPAI 3.5 TAHUN } 27 INSOLE 18 CM { 3.5 SAMPAI 4 TAHUN } 28 INSOLE 18.5 CM { 4 SAMPAI 4.5 TAHUN } 29 INSOLE 19 CM { 4.5 SAMPAI 5 TAHUN } 3O INSOLE 19.5 CM { 5 SAMPAI 5.5 TAHUN } 31 INSOLE 20 CM { 5.5 SAMPAI 6 TAHUN } 32 INSOLE 20.5 { 6 SAMPAI 6.5 TAHUN } 33 INSOLE 21 CM { 6.5 SAMPAI 7 TAHUN } 34 INSOLE 21.5 CM { 7 SAMPAI 8 TAHUN } 35 INSOLE 22 CM { 9 SAMPAI 10 TAHUN }.', 'Gambar_WhatsApp_2023-11-25_pukul_14_28_33_d4301063.jpg', 400, 10),
(49, 'Lenovo Thinkpad E14', 13, 20499000, ' GARANSI RESMI 3 TAHUN LENOVO INDONESIA<br>\r\nSpesifikasi<br>\r\nOperating System Windows® 11 Pro, English<br>\r\nProcessor AMD Ryzen™ 7 5825U (8C / 16T, 2.0 / 4.5GHz, 4MB L2 / 16MB L3)<br>\r\nGraphics Integrated AMD Radeon™ Graphics<br>\r\nChipset AMD SoC Platform\r\nDisplay 14\" FHD (1920x1080) IPS 300nits Anti-glare, 45% NTSC<br>\r\nMemory  16GB (8GB Soldered DDR4-3200 + 8GB SO-DIMM DDR4-3200)<br>\r\nMemory Slots One memory soldered to systemboard, one DDR4 SO-DIMM slot, dual-channel capable<br>\r\nMax Memory Up to 40GB (8GB soldered + 32GB SO-DIMM) DDR4-3200<br>\r\nStorage 1TB SSD M.2 2242 PCIe® 4.0x4 NVMe® Opal 2.0<br>\r\n', 'Gambar_WhatsApp_2023-11-25_pukul_14_39_52_a1d9d9c6.jpg', 2000, 10),
(50, 'Iphone 12  Ibox 256Gb', 12, 15500000, 'Garansi Resmi IBox 12bulan Produk segel(greenpel) <br>\r\n\r\nVarian gb dan warna silahkan diklik<br>\r\n\r\nNew pack / Slim Pack<br>\r\n(Unit dan Kabel)\r\n\r\n100% Garansi resmi<br>\r\n100% Baru dan asli<br>\r\n100% Segel asli greenpeel ( no repack)<br>\r\nRESMI IMEI terdaftar di kemenperin / kominfo<br>\r\n\r\nsi Kotak :<br>\r\n•  dengan iOS 14.<br>\r\n• Kabel USB-C ke Lightning.<br>\r\n• Buku Manual dan Dokumentasi lain.<br>\r\n• Layar Super Retina XDR 6,1 inci <br>\r\n• Chip A14 Bionic<br>\r\n• Kamera depan TrueDepth 12 MP dengan mode Malam, perekaman HDR 4K Dolby Vision <br>\r\n• Level ketahanan air IP68 maksimum 6 meter hingga selama 30 menit).<br>\r\n• lihat panduan pengguna untuk instruksi pembersihan dan pengeringan<br>\r\n•Kerusakan akibat cairan tidak ditanggung dalam garansi.\"<br>\r\n• iOS 14', 'Gambar_WhatsApp_2023-11-25_pukul_14_42_38_dceb2cd1.jpg', 1200, 20),
(51, 'GoPro ', 15, 8404000, 'GoPro Model：HERO<br>\r\nImage Sensor：Other SONY Series<br>\r\nMain Processor ( Maximum HD Support)：Ambarella A12 (4K/30FPS)<br>\r\nCertification：NONE<br>\r\nEffective MegaPixel：About 12MP<br>\r\nOrigin：CN(Origin)\r\nBattery Capacity：1220<br>\r\nBluetooth Support：Yes<br>\r\nSensor Size (inches)：1/2.3 inches<br>\r\nDisplay Screen：Yes<br>\r\nApplication：For Home<br>\r\nWIFI Support：Yes\r\nImage Stabilization：No Image Stabilization<br>\r\nWaterproof：No<br>\r\nNFC Support：No<br>\r\nWideangle：170°<br>\r\nMemory Card Type：MicroSD / TF<br>\r\nModel Number：hero5 black<br>\r\nDisplay Size：2.0\"\r\nAdditional Function：Recording Function<br>\r\nMaximum Aperture：F2.8<br>\r\nTouch Screen：Yes<br>\r\nWeight：101g-150g<br>\r\nNightShot Function：No<br>\r\nVolume：14mm*60mm*44mm\r\nPackage：No<br>\r\nHDMI-compatible Output：No<br>\r\nRemote Control Support：Yes<br>\r\nBuilt-in Memory Size：Non<br>\r\nMemory Card Support：128G<br>\r\nOld and new degree：99', 'Gambar_WhatsApp_2023-11-25_pukul_14_51_51_78d95e48.jpg', 1000, 10),
(52, ' 80011S Treadmill Elektrik', 4, 5478000, 'Spesifikasi kelebihan dan fitur extra 80011S adalah sebagai berikut:<br>\r\nMotor Dinamo 3HP :<br>\r\nDilengkapi Motor Dinamo 3HP yang lebih kuat dan awet. Noise level yang lebih rendah dan halus dengan penggunaan.:<br>\r\nHydraulic Folding System:<br>\r\nSistem pelipatan bermekanisme hidrolik yang mengurangi berat running deck sebesar 80% untuk memudahkan pelipatan keatas. Pada posisi terlipat keatas, terdapat tombol hidrolik yang bisa ditekan untuk menurunkan treadmill secara :<br>otomatis. Lebih aman dan simple.\r\nLCD Monitor Informatif\r\nDilengkapi LCD monitor dengan design minimalis yang dapat menunjukkan statistic olahraga seperti Speed (Kecepatan); Kecepatan, Waktu, Kalori, Detak Jantung.:<br>\r\nPulse Sensor\r\nSensor detak jantung di kedua pegangan treadmill. Pegang kedua sisi untuk menunjukkan statistic pada layar LCD monitor.:<br>\r\nPremium Steel Frame\r\nRangka besi yang dirancang lebih tebal dan kokoh agar pengguna bisa berolahraga sesuka hati tanpa perlu pencemaskan bisa terjadinya kerusak', 'Gambar_WhatsApp_2023-11-25_pukul_14_56_01_81edfa31.jpg', 30000, 10),
(53, 'baju pria rush motif', 7, 60000, 'BAJU KAOS LENGAN PANJANG PRIA DAN WANITA<br>\r\nBahan BABYTERY HALUS, ADEM, DAN NYAMAN<br>\r\nMOTIF SABLON HQ<br>\r\nSIZE M LD-102CM, PJ 66CM<br>\r\nSIZE L LD 104CM, PJ 67CM<br>\r\nSIZE XL LD 110CM, PJ 70CM<br>\r\nGOOD QUALITY<br>\r\nREAL PICT<br>\r\n\r\nTerima kasih!', 'Gambar_WhatsApp_2023-11-25_pukul_11_05_00_4a75c0b8.jpg', 500, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `ket` mediumtext DEFAULT NULL,
  `gambar` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_gambar`
--

INSERT INTO `tb_gambar` (`id_gambar`, `id_brg`, `ket`, `gambar`) VALUES
(1, 2, 'gambar1', 'gambar1.jpg'),
(2, 2, 'gambar2', 'gambar2.jpg'),
(3, 2, 'gambar3', 'gambar3.jpg'),
(4, 2, 'gambar4', 'gambar4.jpg'),
(5, 2, 'gambar5', 'gambar5.jpg'),
(6, 5, 'gambar 1', 'gambar1.jpg'),
(8, 2, 'gambar 6', 'Gambar_WhatsApp_2023-11-10_pukul_10_20_09_609f4343.jpg'),
(10, 11, 'gambar 6', 'Gambar_WhatsApp_2023-11-10_pukul_07_28_35_c44e5649.jpg'),
(11, 11, 'gambar 1', 'Gambar_WhatsApp_2023-11-10_pukul_07_25_29_4224b4f0.jpg'),
(12, 12, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_10_03_51_9d710d11.jpg'),
(13, 13, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_10_08_57_cd2bf469.jpg'),
(14, 14, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_10_10_25_8f76c9e7.jpg'),
(15, 15, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_10_14_29_6f11f7c3.jpg'),
(16, 16, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_10_15_33_82fca278.jpg'),
(17, 17, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_10_16_17_13ba7660.jpg'),
(18, 18, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_10_17_53_1d2e00ab.jpg'),
(19, 19, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_10_18_57_fdc5f707.jpg'),
(20, 20, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_10_20_08_cd801e54.jpg'),
(22, 22, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_10_25_22_9ae0eb0e.jpg'),
(23, 23, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_10_26_14_f8df8a06.jpg'),
(24, 24, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_10_27_41_e9c31f1c.jpg'),
(25, 25, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_10_28_22_4105f801.jpg'),
(26, 26, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_10_30_26_85747549.jpg'),
(27, 27, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_10_35_05_135c0048.jpg'),
(28, 28, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_10_36_00_6d9460bc.jpg'),
(29, 29, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_11_54_51_827aed21.jpg'),
(30, 29, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_11_54_49_fc2a78e0.jpg'),
(31, 29, 'gambar 4', 'Gambar_WhatsApp_2023-11-25_pukul_11_54_50_5cb6e775.jpg'),
(32, 29, 'gambar 5', 'Gambar_WhatsApp_2023-11-25_pukul_11_54_50_29495dd4.jpg'),
(33, 21, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_05_23_947b00ca.jpg'),
(34, 22, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_07_24_358be275.jpg'),
(35, 23, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_07_31_77763729.jpg'),
(36, 24, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_08_23_d4364ff0.jpg'),
(37, 25, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_09_24_846b4b64.jpg'),
(38, 26, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_11_30_6f9f5ae3.jpg'),
(39, 27, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_13_36_ff803465.jpg'),
(40, 28, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_14_28_5593083a.jpg'),
(41, 12, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_16_40_ce6737cd.jpg'),
(42, 13, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_19_04_8a6c9b9c.jpg'),
(43, 14, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_19_55_41323eca.jpg'),
(44, 15, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_21_17_cfb17799.jpg'),
(45, 16, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_22_43_5485a20a.jpg'),
(46, 17, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_25_28_7b6feddb.jpg'),
(47, 18, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_26_31_fc63c112.jpg'),
(48, 19, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_27_20_6c1430c2.jpg'),
(49, 20, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_12_28_24_e2f00cf9.jpg'),
(50, 30, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_11_06_32_1b564176.jpg'),
(51, 31, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_11_10_33_da621316.jpg'),
(52, 32, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_11_15_13_3f95ee99.jpg'),
(53, 33, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_11_16_12_3c35e90f.jpg'),
(54, 34, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_11_17_25_583a3aab.jpg'),
(55, 35, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_11_18_23_001b7dd4.jpg'),
(56, 36, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_11_19_20_c43f177a.jpg'),
(57, 37, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_11_20_17_b6199fa6.jpg'),
(58, 38, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_11_21_32_8d968e27.jpg'),
(59, 39, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_11_22_21_aea9d1e9.jpg'),
(60, 40, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_11_23_39_f4ddd09e.jpg'),
(61, 41, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_11_24_44_2c85e25e.jpg'),
(62, 43, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_13_55_51_7cf3a63e.jpg'),
(63, 44, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_14_01_08_79abab35.jpg'),
(64, 44, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_14_01_08_09d335d3.jpg'),
(65, 45, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_14_10_30_6b6c825a.jpg'),
(66, 45, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_14_10_31_14b63896.jpg'),
(67, 45, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_14_10_31_82d7fb03.jpg'),
(68, 46, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_14_15_02_6fe4acba.jpg'),
(69, 47, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_14_22_01_06285724.jpg'),
(70, 47, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_14_22_00_f4bf3d4a.jpg'),
(71, 47, 'gambar 4', 'Gambar_WhatsApp_2023-11-25_pukul_14_22_01_48f37184.jpg'),
(72, 48, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_14_28_34_bfb653d5.jpg'),
(73, 50, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_14_42_39_4b212df6.jpg'),
(74, 50, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_14_42_39_4b110aea.jpg'),
(75, 51, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_14_51_52_93472389.jpg'),
(76, 52, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_14_56_02_be48d320.jpg'),
(77, 53, 'gambar 2', 'Gambar_WhatsApp_2023-11-25_pukul_14_54_48_45003654.jpg'),
(78, 30, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_14_54_58_c3a978e4.jpg'),
(79, 31, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_14_55_08_7ba14bd0.jpg'),
(80, 32, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_14_55_18_8471c4f0.jpg'),
(81, 33, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_14_56_13_e4d27f20.jpg'),
(82, 34, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_14_56_23_53c5d4ba.jpg'),
(83, 35, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_14_56_32_5a4ca558.jpg'),
(84, 36, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_14_56_41_a61354e9.jpg'),
(85, 37, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_14_56_47_e1144fbf.jpg'),
(86, 38, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_14_56_55_20e3c090.jpg'),
(87, 39, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_14_57_02_b1e18683.jpg'),
(88, 40, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_14_57_21_239fd50c.jpg'),
(89, 41, 'gambar 3', 'Gambar_WhatsApp_2023-11-25_pukul_14_57_29_90798957.jpg'),
(90, 21, 'gambar 2', 'Gambar_WhatsApp_2023-11-10_pukul_09_58_05_e8547427.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(3, 'pakaian anak-anak'),
(4, 'peralatan olahraga'),
(5, 'sepatu wanita'),
(6, 'sepatu pria'),
(7, 'Pakaian Pria'),
(11, 'pakaian wanita'),
(12, 'handphone'),
(13, 'laptop'),
(14, 'sepatu Ank anak'),
(15, 'kamera');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` varchar(255) NOT NULL,
  `nama_pelanggan` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email`, `password`, `telepon`, `alamat`, `foto`) VALUES
('0859a541-9bac-11ee-8fa9-e0db55b866f9', 'Siti Rohmah', 'siti123@gmail.com', '$2y$10$2aZxkp/8w5aL567ip3dzkeA71AFT06Ml/EXXyF8SooGW3Oa0YuH6y', '081234567889', 'alamat saya', NULL),
('34', 'Thomas Alberto', 'thomas@gmail.com', '$2y$10$cJgb1GUB1gGYWGX/mdqkFu3GJBeGrCiPtmu.XyZ1371Q10piFRp6.', '081234567889', 'Jl Kom Yos Sudarso', NULL),
('35', 'admin', 'admin@gmail.com', '$2y$10$pgbtaO9ox136EBjIYK.SHeuAt6AQhikGvSUGdHlKFQsW2V81kahwO', '23123', 'test', NULL),
('37', 'Teguh', 'teguh123@gmail.com', '$2y$10$tH0zHa49MMEUjjahJOa19eqXi4d/ESPwuhYhVZ/RGtSsUSSXSTriO', '08323131', 'test', NULL),
('38', 'Dido Khoirul Rijal', 'dido123@gmail.com', '$2y$10$JatWbVB/UiTpQ1M3wH.WXuULLpoo482DfiU/012/S/ylEbg7PomLy', '081234567889', 'jl. apa adny', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekening`
--

CREATE TABLE `tb_rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(50) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL,
  `ats_nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rekening`
--

INSERT INTO `tb_rekening` (`id_rekening`, `nama_bank`, `no_rek`, `ats_nama`) VALUES
(1, 'BANK BRI', '1234-4567-7890-0123', 'GO STORE'),
(2, 'BANK BNI', '0987-8765-5432', 'GO STORE'),
(3, 'BANK BCA', '123-456-098', 'GO STORE'),
(4, 'BANK MANDIRI', '1111-2222-3333-4444', 'GO STORE'),
(5, 'DANA ', '081234567890', 'GO STORE'),
(6, 'Alfamart/Indomaret', 'Silakan Minta Kepada Admin Kode Pembayaran', 'GO STORE');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rincian_transaksi`
--

CREATE TABLE `tb_rincian_transaksi` (
  `id_rinci` int(50) NOT NULL,
  `no_order` varchar(50) DEFAULT NULL,
  `id_barang` int(25) DEFAULT NULL,
  `qty` int(56) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rincian_transaksi`
--

INSERT INTO `tb_rincian_transaksi` (`id_rinci`, `no_order`, `id_barang`, `qty`) VALUES
(1, '20231122REZSNBMH', 7, 2),
(2, '202311228YLOVEHF', 7, 2),
(3, '202311228YLOVEHF', 9, 1),
(4, '20231122DNIA3C85', 7, 2),
(5, '20231122DNIA3C85', 9, 1),
(6, '20231122DNIA3C85', 6, 1),
(7, '20231122DNIA3C85', 10, 1),
(8, '20231122TU2SPDS1', 6, 1),
(9, '202311222SCPNZOP', 6, 1),
(10, '202311222SCPNZOP', 9, 1),
(11, '20231122QSPCMXUS', 9, 1),
(12, '202311220FYGH48V', 7, 1),
(13, '202311220FYGH48V', 9, 1),
(14, '202311220FYGH48V', 11, 1),
(15, '20231122XPI1L4NE', 11, 1),
(16, '20231123WUPKI1RY', 6, 1),
(17, '20231123WUPKI1RY', 9, 1),
(18, '20231123WUPKI1RY', 10, 1),
(19, '20231127YU5WKJTY', 14, 1),
(20, '20231130P54JBGRS', 12, 1),
(21, '20231130NJOPP9UK', 12, 1),
(22, '20231201YQBIKRLM', 12, 3),
(23, '202312026LRYENSV', 15, 3),
(24, '202312027QEDMMAI', 27, 1),
(25, '20231213ZYDRAK4U', 14, 1),
(26, '20231219IZFYKPME', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_setting`
--

CREATE TABLE `tb_setting` (
  `id` int(1) NOT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `lokasi` varchar(50) NOT NULL,
  `alamat_toko` text DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_setting`
--

INSERT INTO `tb_setting` (`id`, `nama_toko`, `lokasi`, `alamat_toko`, `telepon`) VALUES
(1, 'Go Store', '365', 'jl karet No. 354 Pontianak Barat', '085753651902');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(50) NOT NULL,
  `id_pelanggan` int(255) DEFAULT NULL,
  `no_order` varchar(50) NOT NULL,
  `tgl_order` date DEFAULT NULL,
  `nama_penerima` varchar(100) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kode_pos` varchar(12) DEFAULT NULL,
  `ekpedisi` varchar(50) DEFAULT NULL,
  `paket` varchar(50) DEFAULT NULL,
  `estimasi` varchar(255) DEFAULT NULL,
  `ongkir` int(100) DEFAULT NULL,
  `berat` int(50) DEFAULT NULL,
  `grand_total` int(50) DEFAULT NULL,
  `total_bayar` int(50) DEFAULT NULL,
  `status_bayar` int(3) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL,
  `nama_bank` varchar(50) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL,
  `status_order` int(3) DEFAULT NULL,
  `no_resi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_pelanggan`, `no_order`, `tgl_order`, `nama_penerima`, `telepon`, `provinsi`, `kota`, `alamat`, `kode_pos`, `ekpedisi`, `paket`, `estimasi`, `ongkir`, `berat`, `grand_total`, `total_bayar`, `status_bayar`, `bukti_bayar`, `atas_nama`, `nama_bank`, `no_rek`, `status_order`, `no_resi`) VALUES
(2, 4, '20231122REZSNBMH', '2023-11-22', 'ridho', '081234567889', 'Kalimantan Barat', 'Pontianak', 'jl. sentosa', '11223', 'jne', 'OKE', '3-5 Hari', 80000, 1400, 30000000, 0, 1, 'logo12.png', 'GO STORE', 'BANK BRI', '1234-4567-7890-0123', NULL, NULL),
(3, 4, '20231122REZSNBMH', '2023-11-22', 'ridho', '081234567889', 'Kalimantan Barat', 'Pontianak', 'jl. sentosa', '11223', 'jne', 'OKE', '3-5 Hari', 80000, 1400, 30000000, 0, 1, 'logo11.png', 'GO STORE', 'BANK BRI', '1234-4567-7890-0123', NULL, NULL),
(4, 4, '202311228YLOVEHF', '2023-11-22', 'ridho', '081234567889', 'DKI Jakarta', 'Jakarta Pusat', 'pontianak', '11223', 'jne', 'CTC', '1-2 Hari', 30000, 2900, 30150000, 0, 1, 'bukti14.jpg', 'GO STORE', 'BANK BNI', '0987-8765-5432', NULL, NULL),
(5, 4, '20231122DNIA3C85', '2023-11-22', 'ridho', '081234567889', 'Banten', 'Cilegon', 'jl. sentosa', '11223', 'pos', 'Pos Ekonomi', '7-14 HARI Hari', 37500, 4500, 30500000, 0, 1, 'bukti11.jpg', NULL, 'BANK BRI', '1234-4567-7890-0123', NULL, NULL),
(6, 4, '20231122TU2SPDS1', '2023-11-22', 'ridho', '081234567889', 'Kalimantan Tengah', 'Seruyan', 'jl. sentosa', '11223', 'tiki', 'REG', '4-5 Hari', 90000, 400, 200000, 0, 1, 'bukti13.jpg', NULL, 'BANK BRI', '1234-4567-7890-0123', NULL, NULL),
(7, 5, '202311222SCPNZOP', '2023-11-22', 'siti', '081234567889', 'Kalimantan Barat', 'Pontianak', 'jl. sentosa', '11223', 'pos', 'Pos Reguler', '4 HARI Hari', 74000, 1900, 350000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 5, '20231122QSPCMXUS', '2023-11-22', 'siti', '081234567889', 'Bali', 'Badung', 'jl. sentosa', '11223', 'tiki', 'ECO', '4 Hari', 52000, 1500, 150000, 202000, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 4, '202311220FYGH48V', '2024-12-22', 'ridho', '081234567889', 'Kalimantan Barat', 'Sambas', 'jl. sentosa', '11223', 'jne', 'OKE', '5-7 Hari', 141000, 3200, 15300000, 15441000, 1, 'logo1.png', 'GO STORE', 'BANK BRI', '1234-4567-7890-0123', 3, 'jp2543578'),
(10, 4, '20231122XPI1L4NE', '2023-12-22', 'ridho', '081234567889', 'Bali', 'Badung', 'jl. sentosa', '11223', 'jne', 'OKE', '3-6 Hari', 30000, 1000, 150000, 180000, 1, 'bukti17.jpg', 'GO STORE', 'BANK BRI', '0987-8765-5432', 1, NULL),
(11, 4, '20231123WUPKI1RY', '2023-11-23', 'dimas', '081234567889', 'Bangka Belitung', 'Bangka', 'jl. sentosa', '1111', 'tiki', 'ECO', '4 Hari', 105000, 3100, 500000, 605000, 1, 'bukti16.jpg', 'GO STORE', 'BANK BRI', '1234-4567-7890-0123', 3, 'jp2543578'),
(12, 4, '20231127YU5WKJTY', '2023-11-27', 'dimas', '081234567889', 'Kalimantan Selatan', 'Balangan', 'jl. sentosa', '11223', 'jne', 'OKE', '6-8 Hari', 51000, 111, 60000, 111000, 1, '12221400_DidoKhoirulrijal.png', 'GO STORE', 'BANK BRI', '1234-4567-7890-0123', 1, NULL),
(13, 4, '20231130P54JBGRS', '2023-12-21', 'ridho', '081234567889', 'Bali', 'Badung', 'ggi', '1111', 'jne', 'OKE', '4-5 Hari', 69000, 500, 93000, 162000, 1, '12221400_DidoKhoirulrijal1.png', 'GO STORE', 'BANK BRI', '1234-4567-7890-0123', 1, NULL),
(14, 4, '20231130NJOPP9UK', '2023-12-21', 'ridho', '081234567889', 'Bali', '17', 'pontianak', '11223', 'jne', 'OKE', '4-5 Hari', 45000, 500, 93000, 138000, 1, 'Gambar_WhatsApp_2023-12-01_pukul_13_37_39_907f1e791.jpg', 'Dido Khoirul Rijal', 'BAnk BCA', '1234-4567-7890-0123', 1, NULL),
(15, 4, '20231201YQBIKRLM', '2023-12-21', 'Dido Khoirulrijal', '081234567887', 'Kalimantan Barat', '365', 'jl. Veteran no. 015 kel. sui. beliung kec. pontianak kota Pontianak kalimantan barat kode pos : 1111', '1111', 'jne', 'CTC', '1-2 Hari', 14000, 1500, 279000, 293000, 1, 'Gambar_WhatsApp_2023-12-01_pukul_13_37_39_907f1e79.jpg', 'Dido Khoirul Rijal', 'BAnk BCA', '1234-4567-7890-0123', 3, 'Q548634354DDYY'),
(16, 27, '202312026LRYENSV', '2023-12-02', 'Derza Pronomo', '089512345678', 'Kalimantan Barat', '365', 'jl. Veteran no. 015 kel. sui. beliung kec. pontianak kota Pontianak kalimantan barat kode pos : 1111', '44008', 'jne', 'CTCYES', '1-1 Hari', 20000, 1500, 210000, 230000, 1, 'bukti18.jpg', 'Derza Pronomo', 'BANK BCA', '0987-8765-5432', 3, '651HJG0980012'),
(17, 27, '202312027QEDMMAI', '2023-12-02', 'Derza Pronomo', '081234567889', 'Jawa Barat', '211', 'jl. Veteran no. 015 kel. sui. beliung kec. pontianak kota Pontianak kalimantan barat kode pos : 1111', '11223', 'jne', 'OKE', '3-4 Hari', 105000, 2500, 23299000, 23404000, 0, NULL, NULL, NULL, NULL, 0, NULL),
(18, NULL, '20231213ZYDRAK4U', '2023-12-13', 'derza', '0812345678890', 'Sumatera Barat', '318', '79797t79t', '11223', 'tiki', 'ECO', '4 Hari', 42000, 111, 60000, 102000, 1, 'default.jpg', 'ee', 'BANK BRI', '1234-4567-7890-0123', 1, NULL),
(19, NULL, '20231219IZFYKPME', '2023-12-19', 'Derza Pronomo', '081234567889', 'Kalimantan Barat', '365', 'jl. Veteran no. 015 kel. sui. beliung kec. pontianak kota Pontianak kalimantan barat kode pos : 11223', '11223', 'jne', 'CTC', '1-2 Hari', 7000, 500, 93000, 100000, 1, 'no_image.jpg', 'Derza Pronomo', 'BANK BRI', '1234-4567-7890-0123', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` varchar(225) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `level_user` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `level_user`) VALUES
('01aae10e-9bab-11ee-8fa9-e0db55b866f9', 'SITI ROHMAH', '12221404', '$2y$10$zrv4k70fbh16GldnSD75duGnCdJ0GVw2pp.O3lg8g1sDw/KLFTgxG', 1),
('1b69127e-9e11-11ee-879a-e0db55b866f9', 'Dido Khoirulrijal', '12221400', '$2y$10$FUrBoQUuBgIhVg5qh2IDUek15Ydf0nVw9nn/t.jRTfdkNGbLkEG1G', 1),
('2f81c16c-9bab-11ee-8fa9-e0db55b866f9', 'TEGUH FIRMASYAH', '12221456', '$2y$10$7q2x1fCZTABh3Q91/lwCCeMAqWycjGYMWtBfmyy3tOlnMXbxCDP9G', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_rekening`
--
ALTER TABLE `tb_rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `tb_rincian_transaksi`
--
ALTER TABLE `tb_rincian_transaksi`
  ADD PRIMARY KEY (`id_rinci`);

--
-- Indexes for table `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_rekening`
--
ALTER TABLE `tb_rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_rincian_transaksi`
--
ALTER TABLE `tb_rincian_transaksi`
  MODIFY `id_rinci` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
