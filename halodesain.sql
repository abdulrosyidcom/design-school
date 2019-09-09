-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 03:10 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `halodesain`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `author` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `date`, `author`, `created_at`, `updated_at`) VALUES
(2, 'CARA INI BISA MEMPERMUDAH KALIAN BELAJAR DESAIN GRAFIS', '<p>Kumpulkan dan fokuskan niat kalian dalam belajar desain grafis Nah, ini langkah pertama. Kalo pengen nantinya jadi desainer grafis yang jago, udah pasti harus siap belajar terus-menerus dan mendedikasikan hidupnya untuk desain. Kumpulkan niat kalian dan yakinlah kalo dunia desain adalah betul-betul dunia yang pengen kalian jambangin. Setelah ini, kalian harus bertanggung jawab penuh terhadap diri kalian sendiri apakah bakalan tahan berada di dunia ini terus atau nantinya bakalan bosen dan kemudian ditinggalkan begitu aja. Ingat, niat itu penting. Bersabarlah, jangan terburu-buru pengen jadi jago Dalam dunia desain grafis, nggak ada yang namanya jago secara instan. Semuanya butuh perjuangan, butuh pengorbanan, dan butuh latihan secara terus-menerus.</p>\r\n\r\n<p>Jadi, pastikan kalian bersabar dalam membangun skill kalian kelak. Coba deh dilatih kesabarannya dan jangan gampang ngiri kalo ngeliat ada temen desainnya jago banget. Sesungguhnya mereka yang jago desain, artinya jam terbang mereka dalam melakukan itu udah cukup banyak. Tetep sabar dan terus latihan! Cari software desain grafis yang menurut kalian paling mudah dioperasikan atau sedang populer digunakan para desainer. Coba perdalam pengetahuan kalian soal software khusus desain ini. Ada dua perusahaan besar yang mendedikasikan produknya untuk desain. Misalnya Adobe dan Macromedia. Silakan gunakan mana yang menurut kalian paling seru untuk digunakan.</p>\r\n\r\n<p>Khusus Gue pribadi, Gue setia dalam menggunakan Macromedia Fireworks dan sedikit sentuhan dari Adobe Photoshop. Tentukanlah software kesukaan kalian dan jangan takut buat nyoba-nyoba semua tools yang ada di dalam software tersebut. Catatan penting, kalo kalian baru memulai desain, kalian harus fokus menggunakan satu software terlebih dahulu. Jangan sering mengganti-ganti software karena nanti kalian bakalan ngerasa bingung sendiri, akhirnya ngga ada satu pun software yang betul-betul kalian kuasain.</p>\r\n\r\n<p>Kalo udah merasa mampu dan luwes menggunakan software pilihan kalian tersebut, baru deh bisa jajal skill kalian dengan menggunakan software desain yang lainnya. Singkirkan buku-buku tutorial tentang cara menggunakan software design grafis Percaya atau nggak, yang namanya buku tutorial semacam ini nggak berguna sama sekali. Lebih efektif kalo kalian nyoba-nyoba sendiri tools yang ada di dalam suatu software daripada kalian baca cara kerjanya di buku. Semakin banyak error kalian temukan, semakin sering kesalahan kalian lakukan, maka bakalan semakin mengertilah kalian. Kenapa seorang programmer tingkat satu bisa bikin program yang keren? Karena mereka pakai cara coba-coba sendiri. Kalo mereka menggunakan buku tutorial, pastilah hasil yang didapatkan bakalan kaku dan nggak nunjukin identitas si pembuat. Semakin spontan kita membuat sesuatu, semakin berkarakter. Jangan yang sulit-sulit dulu, coba gambar suatu objek sederhana dengan software tersebut Biasanya kalo ngeliat desain poster atau pamflet yang ditempel di tembok-tembok pinggir jalan suka langsung ngiri. Kok bisa sih bikin desain kayak gitu? Ya, bisa dong! Kalian juga bisa, asalkan latihan udah cukup lama.</p>\r\n\r\n<p>Nah, khusus untuk tahap awal, singkirkan pikiran pengen bikin desain yang kerennya setara sama poster itu. Coba aja dulu bikin gambar-gambar dari objek sederhana. Coba gambar gelas, gambar TV, gambar kamera, setahap demi setahap objeknya bakal semakin sulit, dan tanpa sadar kalian udah ningkatin skill kalian. Bersamaan dengan itu juga, kalian bakalan dapet dasar desain yang matang. Misalnya aja, kalian jadi bener-bener ngerti karakteristik dari masing-masing bentuk bangun datar, sampe akhirnya kalian bisa dengan bebas maduin semuanya jadi objek yang halus.</p>\r\n\r\n<p>Misalnya aja gambar di paling bawah postingan ini. Gue bikin dengan memadukan unsur-unsur bangun datar. Gue sama sekali ngga menggunakan tools untuk membengkokkan garis atau apapun juga selain bangun datar lingkaran, persegi, segiilima dan spiral.</p>\r\n', '2018-06-28 14:11:52', 1, '2018-06-30 08:57:00', '2018-06-30 10:57:00'),
(3, '5 Tips Cara Mendesain Logo', '1. Pelajari Apa itu Logo dan Apa yang Diwakilinya\r\nSebelum Anda mendesain logo, Anda harus mengerti apa itu logo, apa yang digambarkannya, dan tujuannya. Logo bukan hanya tanda – sebuah logo merefleksikan merek iklan bisnis melalui penggunaan bentuk, tulisan, warna dan / atau gambar.\r\n\r\nCara Desain / Cara mendesain Logo Perusahaan\r\n\r\n \r\n\r\nLogo berguna untuk mengundang kepercayaan, pengakuan, dan kekaguman terhadap sebuah perusahaan atau produk. Adalah tugas kita sebagai desainer untuk menciptakan logo yang menggambarkan aspek-aspek itu.\r\n\r\n \r\n\r\n2. Tahu Dasar-Dasar Logo yang Efektif\r\nPrinsip mendesign logo\r\n\r\nDengan mengetahui tujuan logo dan apa yang digambarkannya, sekarang Anda harus belajar apa yang membuat sebuah logo menjadi bagus, atau aturan dasar dan prinsip-prinsip cara mendesain logo efektif.\r\n\r\nA. Logo harus sederhana\r\nDesain logo yang sederhana dapat mudah dikenali, serbaguna, dan diingat. Logo bagus menonjolkan sesuatu yang tak disangka atau unik tanpa harus berlebihan.\r\n\r\nB. Logo harus mudah diingat\r\nSelain prinsip kesederhanaan, daya ingat juga penting. Desain Logo efektif harus mudah diingat. Hal ini dapat dicapai dengan memiliki logo sederhana namun sesuai.\r\n\r\nC. Logo harus bertahan lama\r\nLogo efektif harus bertahan lama. Akankah logo tersebut masih tetap efektif dalam 10, 20, 50 tahun ke depan?\r\n\r\nD. Logo harus serbaguna\r\nLogo efektif harus dapat digunakan dalam berbagi medium dan aplikasi. Untuk alasan ini, logo seharusnya didesain dalam format vector, supaya ukurannya dapat ubah-ubah. Logo juga harus terdiri dari satu warna saja.\r\n\r\nE. Logo harus sesuai Cara Anda menempatkan logo harus sesuai dengan tujuannya. Contohnya, bila Anda mendesain logo untuk toko mainan anak-anak, font dan warna bertema anak-anak akan menjadi pilihan bagus. Sebaliknya, mereka tidak akan cocok untuk perusahaan hukum.\r\n\r\n \r\n\r\n3. Belajar dari Kesuksesan dan Kegagalan Orang Lain\r\nCara membuat logo perusahaan profesional\r\n\r\nLogo sukses\r\nDengan Anda tahu aturan-aturan dasar dalam cara mendesain logo, Anda bisa membedakan antara logo bagus dan buruk… Dengan mengetahui logo-logo apa saja yang sukses dan kenapa mereka sukses, memberikan kita wawasan apa yang membuat logo menjadi sukses.\r\n\r\nContohnya, lihatlah Nike Swoosh klasik. Logo itu dibuat oleh Caroline Davidson tahun 1971 seharga hanya $35, namun sampai sekarang tetap bertahan, mudah diingat, efektif walau tanpa warna, dan mudah diubah-ubah ukurannya. Kecepatan dan kesederhanaan dapat dicerminkan lewat sayap pada patung Nike, Dewi kemenangan Yunani – sesuatu yang pas untuk iklan pakaian olahraga. Nike adalah satu dari sekian banyak logo sukses. Mungkin Anda bisa mencari tahu logo-logo sukses apa yang lain dan apa yang membuat mereka sukses.\r\n\r\nLogo yang Tidak Begitu Sukses\r\nKita juga dapat mempelajari logo-logo yang tidak begitu sukses, seperti logo-logo ini. Dalam posting di link, beberapa logo dapat menggambarkan hal-hal yang tidak terlihat bagi desainer, atau mereka memang memiliki desain yang buruk.\r\n\r\n \r\n\r\n4. Rancang Proses Cara Mendesain Logo Anda\r\ncara membuat logo secara online\r\n\r\nSekarang Anda tahu apa itu logo, prinsip, aturan, dan apa yang membuat logo sukses. Sekarang Anda bisa langsung memulai proses desain. Ini adalah langkah tersulit dari 5 langkah-langkah. Proses desain logo setiap orang berbeda. Pengalaman biasanya adalah faktor kunci dalam menciptakan proses desain Anda. Tetapi coba Anda cek The Secret Logo Design Process Of Top Logo Designers untuk menambah ide.\r\n\r\nProses desain logo mencakup:\r\n\r\n1. Rancangan singkat desain\r\n2. Research dan brainstorming\r\n3. Sketsa\r\n4. Prototipe dan Pembuatan konsep (lihat langkah kelima)\r\n5. Kirim ke klien untuk review\r\n6. Revisi dan penyelesaian\r\n7. Kirim file ke klien dan berikan layanan pelanggan\r\n\r\nApabila Anda stuck sebelum atau selama proses desain, coba cek artikel How To Boost Your Creativity.\r\n\r\n \r\n\r\n5. Pelajari Software dan Selesaikan Logo\r\n\r\n\r\nSetelah proses desain Anda selesai, gunakan waktu Anda untuk mulai menguasai software (Adobe Illustrator) tapi ingat, Anda tidak bisa mendesain logo hanya dengan berkutat langsung dengan komputer. Sebaiknya lakukan brainstorming dan pengsketsaan dahulu.\r\n\r\nSetelah Anda mengdapatkan ide dan sketsa hasil dari brainstorming, Anda bisa langsung berkutat dengan komputer dan mulai mendigitalisasi logo. Setelah Anda selesai mendigitalisasi, kirimkan hasilnya ke klien Anda, evaluasi, dan akhirnya selesaikan logo. Dengan begitu, Anda telah sukses menciptakan logo professional.\r\n', '2018-06-30 06:33:17', 1, '2018-06-30 08:54:16', '2018-06-30 10:54:16');

-- --------------------------------------------------------

--
-- Table structure for table `class_content`
--

CREATE TABLE `class_content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` int(11) DEFAULT NULL,
  `item_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_content`
--

INSERT INTO `class_content` (`id`, `title`, `video_url`, `content`, `author`, `item_id`, `kelas_id`, `updated_at`, `created_at`) VALUES
(4, 'Apa itu Adobe Photoshop ?', 'https://www.youtube.com/watch?v=5Fd-meG9qkQ', '<p><strong>Adobe Photoshop</strong>, atau biasa disebut&nbsp;<strong>Photoshop</strong>, adalah perangkat lunak editor citra buatan Adobe Systems yang dikhususkan untuk pengeditan foto/gambar dan pembuatan efek. Perangkat lunak ini banyak digunakan oleh&nbsp;<a href="https://id.wikipedia.org/wiki/Fotografer">fotografer</a>&nbsp;<a href="https://id.wikipedia.org/wiki/Digital">digital</a>&nbsp;dan perusahaan&nbsp;<a href="https://id.wikipedia.org/wiki/Iklan">iklan</a>&nbsp;sehingga dianggap sebagai pemimpin pasar (<em>market leader</em>) untuk perangkat lunak pengolah gambar/foto, dan, bersama&nbsp;<a href="https://id.wikipedia.org/wiki/Adobe_Acrobat">Adobe Acrobat</a>, dianggap sebagai produk terbaik yang pernah diproduksi oleh Adobe Systems. Versi kedelapan aplikasi ini disebut dengan nama Photoshop CS (Creative Suite), versi sembilan disebut Adobe Photoshop CS2, versi sepuluh disebut Adobe Photoshop CS3 , versi kesebelas adalah Adobe Photoshop CS4 , versi keduabelas adalah Adobe Photoshop CS5 , dan versi terbaru adalah Adobe Photoshop CC.</p>\r\n', 1, 1, 1, '2018-06-30 09:54:35', '2018-06-30 02:54:35'),
(5, 'Dasar Editing Manipulation Photo?', 'https://www.youtube.com/watch?v=rQRG_B5iKNo', '<p>Edit Foto Manipulasi Keren Kepala Terpotong-potong - Photoshop Tutorial Indonesia<br />\r\n<br />\r\nhalo gan! dalam tutorial kali ini. kita mau bagi sedikit ilmu editing foto yaitu efek kepala terpotong potong dengan menggunakan adobe photoshop. temen2 bisa download foto yang kita gunakan pada link dibawah. kemudian untuk kode warna seperti foto manipulasi diatas, temen2 bisa copas pada kode dibawah link download. selamat mencoba</p>\r\n', 1, 2, 1, '2018-06-30 09:58:51', '2018-06-30 02:58:51'),
(6, 'Cara Mengganti Background Dengan Mudah Di Photoshop', 'https://www.youtube.com/watch?v=rLZqcNaaOzc', '<p>Cara sederhana menganti background dengan Photoshop. Sangat mudah untuk anda pelajari.<br />\r\n(A simple way to replace the background with Photoshop. It&#39;s easy for you to learn.)<br />\r\nBy: FL Pictures</p>\r\n', 1, 3, 1, '2018-06-30 10:02:43', '2018-06-30 08:02:43'),
(7, 'Adobe Illustrator Untuk Pemula', 'https://www.youtube.com/watch?v=3qFySlBXuTs&t=2s', '<p>Pengen bisa desain grafis? atau lagi belajar?<br />\r\nPenasaran dengan adobe illustrator? apasih adobe illustrator itu?<br />\r\n<br />\r\nVideo ini menjelaskan apa itu adobe illustrator, kegunaannya, bedanya dengan corel draw dan penjelasan tampilan adobe illustrator.<br />\r\nCocok untuk kamu yang ingin memulai belajar desain grafis :)</p>\r\n', 1, 5, 2, '2018-06-30 10:10:14', '2018-06-30 03:10:14'),
(8, 'Mengenal Adobe Illustrator (Tools Dasar)', 'https://www.youtube.com/watch?v=pWQ0SKQR_yI', '<p>Video kali ini akan mengenalkan teman-teman dengan beberapa hal dalam Adobe Illustrator yang sering digunakan dalam pembuatan icon set design seperti:<br />\r\n- Selection Tool<br />\r\n- Direct Selection Tool<br />\r\n- Rectangle Tool<br />\r\n- Ellipse Tool<br />\r\n- Polygon Tool<br />\r\n- Align<br />\r\n- Pathfinder<br />\r\ndan lain-lain</p>\r\n', 1, 6, 2, '2018-06-30 10:11:41', '2018-06-30 03:11:41'),
(9, 'Cara Mudah Belajar Pen Tool di Adobe Illustrator ', 'https://www.youtube.com/watch?v=771MoI6-wEA', '<p>Hello guys! Di video kali ini aku mau share gimana cara paling GAMPANG &amp; MUDAH belajar menggunakan PEN TOOL pada Adobe Illustrator.</p>\r\n', 1, 9, 2, '2018-06-30 10:12:22', '2018-06-30 03:12:22'),
(10, 'How to Edit Tone Filter Cool Green', 'https://www.youtube.com/watch?v=McvWVo8rWN0', '<p>Selamat datang di Potret Unik dalam video editing tutorial. Dalam video kali ini adalah tutorial edit Tone Cool Green dengan Adobe Photoshop Lightroomm<br />\r\n<br />\r\nSilahkan simak video tutorialnya, semoga video ini bisa membantu, saya harap kalian enjoy dan berhasil melakukan editing tutorialnya.</p>\r\n', 1, 11, 3, '2018-06-30 10:14:46', '2018-06-30 03:14:46'),
(11, 'Cara Edit Foto Pakai Adobe Lightroom', 'https://www.youtube.com/watch?v=uShNY9-rPng', '<p>di video kali ini saya akan mengajarkan bagaimana cara menggunakan adobe lightroom atau di kenal dengan LR<br />\r\n<br />\r\nsoftware/aplikasi ini merupakan salah satu software terbaik untuk para fotografer. cara pakai nya juga sangat sederhana</p>\r\n', 1, 7, 3, '2018-06-30 10:15:25', '2018-06-30 03:15:25'),
(12, 'Tutorial Editing Photo Color Correction&Grading Menggunakan Adobe Lightroom untuk Pemula', 'https://www.youtube.com/watch?v=pBB8baMUc_c', '<p>di video kali ini saya akan mengajarkan bagaimana cara menggunakan adobe lightroom atau di kenal dengan LR<br />\r\n<br />\r\nsoftware/aplikasi ini merupakan salah satu software terbaik untuk para fotografer. cara pakai nya juga sangat sederhana</p>\r\n', 1, 10, 3, '2018-06-30 10:16:33', '2018-06-30 08:16:33'),
(13, 'Tutorial Pengenalan Basic Adobe In Design', 'https://www.youtube.com/watch?v=Xbb7F7Uva0s', '', 1, 8, 4, '2018-06-30 10:18:35', '2018-06-30 03:18:35'),
(14, 'Tutorial Kursus Adobe InDesign', 'https://www.youtube.com/watch?v=8ag2LrCgGKM', '<p>Belajar Perisian Adobe After InDesign Peringkat Asas dan Pertengahan.</p>\r\n', 1, 12, 4, '2018-06-30 10:19:45', '2018-06-30 03:19:45'),
(15, 'Tutorial Kursus Adobe InDesign', 'https://www.youtube.com/watch?v=33ve1ld1SxA', '', 1, 13, 4, '2018-06-30 10:20:54', '2018-06-30 03:20:54'),
(16, 'ADOBE PREMIERE PRO CC BELAJAR BASIC TUTORIAL', 'ADOBE PREMIERE PRO CC 2015 BASIC TUTORIAL BAHASA INDONESIA #1', '<p>&nbsp;</p>\r\n\r\n<p>ADOBE PREMIERE PRO CC 2015 BASIC TUTORIAL BAHASA INDONESIA #1<br />\r\nBELAJAR EDITING VIDEO MENGGUNAKAN ADOBE PREMIERE PRO CC 2015 UNTUK PEMULA<br />\r\nDASAR DASAR EDITING VIDEO MENGGUNAKAN ADOBE PREMIERE PRO CC 2015 UNTUK PEMULA<br />\r\n&nbsp;</p>\r\n', 1, 14, 8, '2018-06-30 10:22:38', '2018-06-30 03:22:38'),
(17, 'Create an intro sequence in Premiere Pro ', 'https://www.youtube.com/watch?v=ox9KCU4MRXo', '<p>&nbsp;</p>\r\n\r\n<p>This week we&#39;ll experiment again with Adobe Premiere Pro as we&#39;re creating an intro sequence to introduce the actors before the film or series starts. What&#39;s so special about this tutorial is that we do everything inside Premiere Pro.<br />\r\n<br />\r\nWe&#39;ll start by masking out the actress as we like to have her come loose from the background. This creates a parallax effects which adds more dynamics as the clip will turn into a still with the frame hold option.<br />\r\n&nbsp;</p>\r\n', 1, 15, 8, '2018-06-30 10:23:08', '2018-06-30 03:23:08'),
(18, 'Quick Tutorial | Premiere Pro - Cara Membuat Outro Seperti Agung Hapsah', 'https://www.youtube.com/watch?v=K07N2vzXx44', '<p>&nbsp;</p>\r\n\r\n<p>Masih bingung? Silahkan tulis pertanyaan kalian di kolom komentar dibawah :)<br />\r\n_________________________________________________________________<br />\r\n_________________________________________________________________<br />\r\n<br />\r\n&nbsp;</p>\r\n', 1, 16, 8, '2018-06-30 10:23:52', '2018-06-30 03:23:52'),
(19, 'Mengenal After Effects - Tutorial Dasar After Effects', 'https://www.youtube.com/watch?v=EUiodrDB6qs', '<p>Hai guys, welcome to Riadi Tech Tutorial.<br />\r\nini adalah video pertama gua, dimana di video ini gua bakal ngasih tutorial buat teman teman yang suka mengedit video dan ingin belajar cara edit video dengan after effects.<br />\r\nTutorial ini gua mulai dari dasar banget dengan harapan akan mudah dipahami oleh teman teman pemula yang baru mau belajar after effects dari nol. Semoga bermanfaat.</p>\r\n', 1, 17, 9, '2018-06-30 10:25:37', '2018-06-30 03:25:37'),
(20, 'Dasar After Effect Motion Graphic', 'https://www.youtube.com/watch?v=5_qnNn9zTdU', '<p>ok malah belajar dasar-dasar?<br />\r\nMinggu depan (pasti) Daunnet bakalan upload episode &quot;Membuat Video seperti Kok Bisa&quot;<br />\r\nDaripada nanti banyak yang bingung, jadi gw buat materi pengantarnya.<br />\r\n<br />\r\nBuat kalian yang mau belajar &quot;membuat animasi seperti kok bisa&quot; bisa pelajarin dulu dasar after effectnya.<br />\r\nKalau kalian udah bisa after effect tanggal 10 Daunnet bakalan upload episode special bulan bahasa</p>\r\n', 1, 18, 9, '2018-06-30 10:26:25', '2018-06-30 03:26:25'),
(21, 'Adobe After Effect Tutorial (Efek Sketsa Pada Video)', 'https://www.youtube.com/watch?v=51MEHqVXtgk', '<p>Halo selmat malam, tutorial kali ini membahas bagaimana membuat sebuah adegan berhenti dengan efek freeze time dan membuat efek sketsa sederhana menggunakan adobe after effect.<br />\r\nmohon maaf jika tutorialnya tidak terlalu bagus, admin yakin di channel lain masih banyak yang lebih bagus dari admin.<br />\r\nSo, keep watchind and stay cool.<br />\r\njangan lupa subscribe, share, and like, and also comment.<br />\r\nsee you next time.</p>\r\n', 1, 19, 9, '2018-06-30 10:26:57', '2018-06-30 03:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `class_item`
--

CREATE TABLE `class_item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `kelas_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_item`
--

INSERT INTO `class_item` (`id`, `name`, `order`, `kelas_id`, `created_at`, `updated_at`) VALUES
(1, 'Perkenalan', 1, 1, '2018-06-22 15:06:33', '2018-06-22 22:06:35'),
(2, 'Dasar Dasar', 2, 1, '2018-06-22 15:06:46', '2018-06-22 22:06:47'),
(3, 'Editing Sederhana', 3, 1, '2018-06-22 15:07:19', '2018-06-22 22:07:20'),
(5, 'Perkenalan', 1, 2, '2018-06-30 08:08:13', '2018-06-30 10:08:13'),
(6, 'Dasar Dasar', 2, 2, '2018-06-22 15:36:50', '2018-06-22 22:36:52'),
(7, 'Pekenalan', 1, 3, '2018-06-30 08:08:47', '2018-06-30 10:08:47'),
(8, 'Perkenalan', 1, 4, '2018-06-22 19:32:07', '2018-06-23 02:32:07'),
(9, 'Editing Sederhana', 3, 2, '2018-06-30 03:10:37', '2018-06-30 10:10:37'),
(10, 'Dasar Dasar', 2, 3, '2018-06-30 03:12:50', '2018-06-30 10:12:50'),
(11, 'Editing Sederhana', 3, 3, '2018-06-30 03:13:02', '2018-06-30 10:13:02'),
(12, 'Dasar Dasar', 2, 4, '2018-06-30 03:17:20', '2018-06-30 10:17:20'),
(13, 'Editing Sederhana', 3, 4, '2018-06-30 03:17:28', '2018-06-30 10:17:28'),
(14, 'Perkenalan', 1, 8, '2018-06-30 03:21:20', '2018-06-30 10:21:20'),
(15, 'Dasar Dasar', 2, 8, '2018-06-30 03:21:37', '2018-06-30 10:21:37'),
(16, 'Editing Sederhana', 3, 8, '2018-06-30 03:21:45', '2018-06-30 10:21:45'),
(17, 'Perkenalan', 1, 9, '2018-06-30 03:24:28', '2018-06-30 10:24:28'),
(18, 'Dasar Dasar', 2, 9, '2018-06-30 03:24:36', '2018-06-30 10:24:36'),
(19, 'Editing Sederhana', 3, 9, '2018-06-30 03:24:44', '2018-06-30 10:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `likes` text COMMENT 'total likes disimpan b user yang like',
  `content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `faq_question` varchar(255) DEFAULT NULL,
  `faq_answer` text,
  `updated_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `category_id`, `faq_question`, `faq_answer`, `updated_at`, `created_at`) VALUES
(1, 1, 'Apa itu sekolah desain ?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\\', '2018-06-28 14:47:36', '2018-06-27 12:39:30'),
(2, 1, 'Bagaimana cara mendaftar ?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\\', '2018-06-28 14:46:49', '2018-06-28 07:46:49'),
(3, 2, 'Bagaiaman cara membuat mading ?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\\', '2018-06-28 14:47:28', '2018-06-28 07:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `faq_category`
--

CREATE TABLE `faq_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq_category`
--

INSERT INTO `faq_category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'pertanyaan umum', '2018-06-27 12:37:34', '2018-06-27 19:37:36'),
(2, 'Fitur Fitur', '2018-06-28 07:47:15', '2018-06-28 14:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `mading`
--

CREATE TABLE `mading` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text,
  `author` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `status` enum('approved','rejected','waiting') DEFAULT 'waiting'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mading`
--

INSERT INTO `mading` (`id`, `title`, `content`, `author`, `created_at`, `updated_at`, `status`) VALUES
(7, 'test tittle', '<p><br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 49, '2018-06-30 07:07:54', '2018-06-30 09:07:54', 'approved'),
(9, 'Abdul Rosyid', '<p>PHP adalaha bahasa pemrograman&nbsp;<em>script server-side</em>&nbsp;yang di desain untuk pengembangan web.&nbsp;<strong>Rasmus Lerdorf</strong>, mengembangkan&nbsp;<em>PHP</em>&nbsp;pada tahun 1995 dengan&nbsp;<em>official site</em>:&nbsp;<a href="http://www.php.net/" target="_blank">http://www.php.net</a>. Cukup untuk pengantar sejarahnya, sebab jika kamu sudah tertarik untuk menggunakan Framework maka pasti kamu telah memiliki basic bahasa pemrogramannya, tapi jika belum sebaiknya kamu belajar dulu fundamental dari bahasa pemrograman tersebut, ohya dan&nbsp;<em>jangan lupakan sejarah</em>&nbsp;kata&nbsp;<em>bung karno</em>. Sebab bisa jadi kamu dalam beberapa tahun kedepan memiliki&nbsp;<em>track record</em>&nbsp;yang luar biasa dalam dunia pemrograman dan kamu tidak ingin dilupakan bukan, maka dengan sebab itu kamu berkarya.</p>\r\n\r\n<p>Kembali ketopik pembahasan, mungkin kamu bingung dalam memilih&nbsp;<em>framework PHP</em>&nbsp;yang mana sih yang sebaiknya kamu gunakan? Dalam artikel kali ini saya tidak akan memukul genderang perang antara pegiat masing-masing&nbsp;<em>framework PHP</em>. Akan tetapi mencoba menganalisa berdasarkan tingkat kerumitannnya, dokumentasinya, komunitasnya, dan peruntukannya.</p>\r\n\r\n<p>Baca Juga:&nbsp;<a href="https://www.codepolitan.com/referensi-belajar-framework-vuejs-2-5a123ba594aea" target="_blank">Referensi Belajar Framework VueJS</a></p>\r\n\r\n<h3>Mengapa Harus Menggunakan Framework?</h3>\r\n\r\n<p>Sebelum kita memilih dan mengulas&nbsp;<em>Framework PHP</em>, maka izinkan saya untuk memberikan alasan mengapa harus menggunakan&nbsp;<em>Framework</em>.</p>\r\n\r\n<ol>\r\n	<li>Mempercepat proses&nbsp;<em>development</em></li>\r\n	<li>Code yang terorganisir,&nbsp;<em>reusable</em>&nbsp;(bisa digunakan kembali),&nbsp;<em>maintenable</em>.</li>\r\n	<li>Menghilangkan kekhawatiran anda tentang&nbsp;<em>low-level security</em>, sebab masing-masing&nbsp;<em>framework</em>&nbsp;telah di desain khusus untuk menangani masalah security yang umumnya menjadi masalah.</li>\r\n	<li>Menggunakan pola&nbsp;<em>MVC (model - view - controller)</em>&nbsp;yang memisahkan antara&nbsp;<em>presentation</em>&nbsp;dan&nbsp;<em>logic</em></li>\r\n	<li>Konsep web&nbsp;<em>development</em>&nbsp;<em>modern</em>&nbsp;seperti&nbsp;<em>object oriented programming.</em></li>\r\n</ol>\r\n\r\n<p>Masih banyak lagi keuntungan ketika menggunakan&nbsp;<em>framework</em>, namun kembali lagi,&nbsp;<em>Framework</em>&nbsp;yang mana yang harus saya gunakan? Baiklah mari kita bahas satu persatu.</p>\r\n\r\n<h3>Framework Laravel</h3>\r\n\r\n<p>Meskipun tergolong&nbsp;<em>framework</em>&nbsp;yang relatif baru (dirilis pada tahun 2011), Laravel menurut suvey&nbsp;<a href="https://www.sitepoint.com/best-php-framework-2015-sitepoint-survey-results/" target="_blank">sitepoint</a>&nbsp;pada tahun 2015 dan survey&nbsp;<a href="https://coderseye.com/best-php-frameworks-for-web-developers/" target="_blank">coderseye</a>&nbsp;tahun 2017, ini adalah&nbsp;<em>framework</em>&nbsp;yang paling populer dikalangan&nbsp;<em>developer</em>. Sedangkan di Indonesia, pengguna Laravel yang tergabung di group facebook&nbsp;<a href="https://web.facebook.com/groups/laravel/" target="_blank"><strong>Laravel PHP Indonesia</strong></a>&nbsp;mencapai angka 29.769 orang, fantastis.</p>\r\n\r\n<p>Dari segi dokumentasi, dokumentasi yang ditawarkan oleh Laravel tergolong sangat rapi dan informatif, serta Laravel juga dikenal dengan&nbsp;<em>screencast</em>-nya yang populer yakni&nbsp;<a href="http://laracasts.com/" target="_blank">Laracast.com</a>. Laravel juga dikenal sebagai&nbsp;<em>magic framework</em>dengan&nbsp;<em>tools</em>&nbsp;andalannya yakni&nbsp;<strong>artisan</strong>.</p>\r\n\r\n<p>Laravel sangat cocok untuk berbagai tingkatan ilmu, dari sisi pemula sangat terbantu dengan dukungan dokumentasinya dan hampir setiap versi dari laravel tersedia&nbsp;<em>screencast</em>&nbsp;yang membahas&nbsp;<em>from scratch</em>. Dari sisi&nbsp;<em>intermediate</em>&nbsp;terlebih&nbsp;<em>advanced</em>&nbsp;menjadi primadona karena fitur yang ditawarkannya.&nbsp;<em>Framework</em>Laravel sangat cocok digunakan untuk proyek skala kecil hingga yang paling kompleks.</p>\r\n\r\n<p>Kenapa harus menggunakan Laravel? Berikut alasan mengapa Laravel menyabet kategori&nbsp;<strong>Best Framework PHP 2017</strong>:</p>\r\n\r\n<ol>\r\n	<li>Routing System</li>\r\n	<li>Unit Testing</li>\r\n	<li>Database Query Builder</li>\r\n	<li>Caching</li>\r\n	<li>Artisan Console</li>\r\n	<li>Middleware</li>\r\n</ol>\r\n\r\n<h3>Framework Codeigniter</h3>\r\n\r\n<p>Codeigniter tergolong framework yang berada pada tingkatan &#39;senior&#39; karena memulai debutnya pada tahun 2006. Berdasarkan&nbsp;<em>survey</em>&nbsp;yang dilakukan oleh&nbsp;<a href="https://www.sitepoint.com/the-state-of-php-mvc-frameworks-in-2017/" target="_blank">sitepoint</a>&nbsp;dan&nbsp;<a href="https://coderseye.com/best-php-frameworks-for-web-developers/" target="_blank">coderseye</a>&nbsp;pada tahun 2017, Codeigniter menempati posisi kedua dalam jajaran&nbsp;<em>framework</em>&nbsp;yang paling populer. Karena tergolong framework yang cukup tua dan cukup populer, maka tidak tanggung-tanggung pengguna Codeigniter yang tergabung dalam group facebook&nbsp;<strong><a href="https://web.facebook.com/groups/codeigniter.id/?ref=br_rs" target="_blank">Codeigniter Indonesia</a></strong>mencapai 46.922 orang.</p>\r\n\r\n<p>Dari segi dokumentasi juga cukup lengkap dalam mengulas setiap fitur yang dimilikinya, terlebih di indonesia&nbsp;<em>framework</em>&nbsp;ini juga tergolong banyak digunakan sehingga telah tersedia berbagai macam tutorial dalam bahasa indonesia yang memudahkan bagi yang ingin mencicipi framework ini dengan bahasa yang mudah dicerna.</p>\r\n\r\n<p>Framework ini juga bisa menjadi pilihan yang menarik untuk membuat&nbsp;<em>project</em>dari skala kecil hingga sangat kompleks karena memiliki kapasitas untuk itu, apalagi dukungan komunitas yang besar sehingga dapat membantu anda dalam menyelesaikan problem yang anda temui.</p>\r\n\r\n<p>Kenapa kamu harus menggunakan Codeigniter? Berikut Alasannya:</p>\r\n\r\n<ol>\r\n	<li>Exceution Time</li>\r\n	<li>File Organization</li>\r\n	<li>Configuration</li>\r\n	<li>Security</li>\r\n	<li>Less Code &amp; Faster Development</li>\r\n	<li>Community Support</li>\r\n	<li>Easy Error Handling</li>\r\n	<li>Cache Class</li>\r\n	<li>Remote Code Execution</li>\r\n</ol>\r\n\r\n<p>Baca Juga:&nbsp;<a href="https://www.codepolitan.com/kumpulan-public-api-untuk-aplikasimu-selanjutnya-5a14efcd10704" target="_blank">Kumpulan Public API Untuk Aplikasimu Selanjutnya</a></p>\r\n\r\n<h3>Framework Symfony</h3>\r\n\r\n<p>Komponen dari&nbsp;<em>framework</em>&nbsp;Symfony telah banyak digunakan oleh sistem yang besar seperti&nbsp;<em>Drupal, phpBB, Piwik, dll</em>. Symfony juga memiliki komunitas&nbsp;<em>developer</em>&nbsp;yang besar, di Indonesia pengguna Symfony yang tergabung dalam group facebook&nbsp;<strong><a href="https://web.facebook.com/groups/symfonian.indo/about/" target="_blank">Symfony Framework Indonesia</a></strong>&nbsp;mencapai 1.840 orang.</p>\r\n\r\n<p><a href="https://symfony.com/doc/current/index.html" target="_blank">Dokumentasi Symfony</a>&nbsp;sangat rapi sehingga menyenangkan untuk dibaca ditambahkan lagi dilengkapi dengan&nbsp;<em>best practice</em>&nbsp;yang disediakan dalam bentuk&nbsp;<em>pdf</em>. Kenapa kamu harus menggunakan Symfony? Berikut terdapat 6 alasan yang diklaim pada&nbsp;<a href="https://symfony.com/six-good-reasons" target="_blank">official website Symfony</a>:</p>\r\n\r\n<ol>\r\n	<li>Reputation</li>\r\n	<li>Permanence</li>\r\n	<li>Reference</li>\r\n	<li>Innovation</li>\r\n	<li>Resources</li>\r\n	<li>Interoperability</li>\r\n</ol>\r\n\r\n<h3>Framework YII</h3>\r\n\r\n<p>Ketika anda ingin menjatuhkan pilihan menggunakan Framework YII, maka hal yang mengagumkan dari&nbsp;<em>Framework</em>&nbsp;ini adalah&nbsp;<em>performance</em>&nbsp;yang dimilikinya daripada&nbsp;<em>Framework PHP</em>&nbsp;lainnya, karena secara ekstensif menggunakan teknik&nbsp;<em>lazy loading</em>. YII 2 murni berorientasi objek dengan konsep DRY (Don&#39;t Repeat Yourself).</p>\r\n\r\n<p>Dari segi pengguna dan dukungan komunitas, di Indonesia sendiri pengguna&nbsp;<em>Framework</em>&nbsp;YII yang tergabung dalam group facebook&nbsp;<a href="https://web.facebook.com/groups/yii.indonesia/?ref=br_rs" target="_blank"><strong>Yii PHP Framework Indonesia</strong></a>&nbsp;mencapai 26.969 orang. Sedangkan alasan mengapa kamu harus menggunakan&nbsp;<em>Framework</em>&nbsp;YII adalah karena keunggulan yang dimilikinya sebagai berikut:</p>\r\n\r\n<ol>\r\n	<li>Fast</li>\r\n	<li>Utilizes Moder Technologies - CRUD Feature</li>\r\n	<li>Highly Extensible</li>\r\n	<li>Database Tables as objects</li>\r\n	<li>Easy Form Validation</li>\r\n	<li>Great support for Jquery &amp; Ajax</li>\r\n	<li>Inbuilt Authentication &amp; Atuhorization</li>\r\n	<li>Shorten Development Time</li>\r\n	<li>Easy to Tune for Better Performance</li>\r\n</ol>\r\n', 48, '2018-06-30 07:25:44', '2018-06-30 09:25:44', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `master_kelas`
--

CREATE TABLE `master_kelas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `updated_at` datetime DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_kelas`
--

INSERT INTO `master_kelas` (`id`, `name`, `description`, `updated_at`, `icon`, `created_at`) VALUES
(1, 'Adobe Photoshop', 'Adobe Photoshop, atau biasa disebut Photoshop, adalah perangkat lunak editor citra buatan Adobe Systems yang dikhususkan untuk pengeditan foto/gambar dan pembuatan efek.', '2018-06-30 09:44:38', '5.png', '2018-06-30 07:44:38'),
(2, 'Adobe Illustrator', 'Adobe Illustrator adalah sebuah program perangkat lunak atau program grapic design pengolah image berbasis vector , vector itu sendiri merupakan sekumpulan titik dan garis yang saling terhubung.', '2018-06-30 09:46:13', '4.png', '2018-06-30 07:46:13'),
(3, 'Adobe Lightroom', 'Adobe photoshop lightroom atau lebih populer dengan sebutan lightroom merupakan software konverter, yang secara fundamental mampu mengkonvert file RAW ke dalam suatu gambar. Dengan semakin baru versi lightroom maka semakin banyak pula fitur yang ditawarkan', '2018-06-30 09:47:23', '3.png', '2018-06-30 07:47:23'),
(4, 'Adobe InDesign', 'Adobe InDesign adalah perangkat lunak desktop publishing (DTP) yang diproduksi oleh Adobe Systems yang dapat digunakan untuk membuat poster, brosur, bahkan majalah atau buku.\r\n\r\nDesainer dan artis merupakan salah satu pengguna utama program ini.', '2018-06-30 09:49:29', '6.png', '2018-06-30 07:49:29'),
(8, 'Adobe Premiere Pro', 'Adobe Premiere Pro adalah sebuah program penyunting video berbasis non-linier (non-linear editor / NLE) dari Adobe Systems. Itu adalah salah satu produk software dari Adobe Creative Suite, tetapi juga bisa dibeli sendirian. Bahkan kalau dibeli sendirian, itu termasuk Adobe Encore dan Adobe OnLocation. ', '2018-06-30 09:50:44', '2.png', '2018-06-30 07:50:44'),
(9, 'Adobe After Effect', 'Adobe After Effects adalah produk peranti lunak yang dikembangkan oleh Adobe, digunakan untuk film dan pos produksi pada video. Pada awalnya merupakan sebuah software produk dari Macromedia yang sekarang sudah menjadi salah satu produk Adobe.\r\n\r\nAdobe After Effects adalah sebuah software yang sangat profesional untuk kebutuhan Motion Graphic Design.', '2018-06-30 09:51:19', '1.png', '2018-06-30 07:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `about` text,
  `site_title` varchar(255) DEFAULT NULL,
  `site_desc` text,
  `meta` text,
  `facebook_url` varchar(100) DEFAULT NULL,
  `instagram_url` varchar(100) DEFAULT NULL,
  `twitter_url` varchar(100) DEFAULT NULL,
  `youtube_url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `about`, `site_title`, `site_desc`, `meta`, `facebook_url`, `instagram_url`, `twitter_url`, `youtube_url`) VALUES
(1, '<p>Assalamualaikum, salam! Hi semuanya!&nbsp;<br />\r\n<br />\r\nMakin kesini dunia makin modern, ngga akan nunggu yang ngga mau belajar. Startup digital terus berjamuran, usaha-usaha tradisional mulai bingung dengan kehadiran internet. Kebutuhan desainer makin meningkat, secara kuantitas apalagi kualitas. Indonesia akan duduk di bangku penonton lagi kalau ngga ada yang mulai serius terjun ke dunia desain.&nbsp;<br />\r\n<br />\r\nSaya ngga berharap dalam waktu singkat, mungkin butuh beberapa bulan bahkan tahun untuk ngelihat hasilnya, tapi kalau ngga dimulai, jangan sampai kita hanya menyesal dan mengeluh di bagian akhir. Teman-teman bisa mulai membuat karya yang menyelesaikan berbagai masalah di Indonesia bahkan dunia, atau saling mendukung, bekerja di tempat yang sudah lebih dulu berjuang menyelesaikan masalah tertentu.&nbsp;<br />\r\n<br />\r\nBukan cuman skill desain, saya juga bikin podcast dan nulis di blog, gimana terus jadi lebih baik sebagai manusia yang bisa ngasih manfaat luas, bukan sekedar desainer.&nbsp;<br />\r\n<br />\r\nWalaupun bukan expert, tapi saya akan bantu teman-teman bikin sesuatu yang bermanfaat. Semoga ini bisa berpengaruh positif ke dunia desain dan ekonomi di Indonesia, Mohon doa &amp; dukungan teman-teman biar tujuannya bisa tercapai. Selamat berkarya, nikmati prosesnya!&nbsp;<br />\r\n<br />\r\nMau ngobrol? bisa lewat&nbsp;<a href="https://twitter.com/abdulrosyidit" target="_blank">twitter</a>&nbsp;atau&nbsp;<a href="https://facebook.com" target="_blank">Facebook</a>&nbsp;</p>\r\n', 'Sekolah Desain', 'halo desain adalah kelas belajar desian secara online', 'www.facebook.com', 'www.facebook.com', 'instagram.com', 'twitter.com', 'youtube.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `active` enum('1','0') DEFAULT '0',
  `active_key` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `role` enum('admin','users') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `active`, `active_key`, `photo`, `mobile`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin ', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1', 'wefsdfsdgfsdgs', 'icon copy.png', '087838742516', 'admin', NULL, '2018-06-14 03:35:51'),
(44, 'dwi', 'dwi winarno', 'dwibluefeathers@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1', 'zdcj4^u(1h5gmt0on2ivx7pb%k$yl*8qa6@we!9sf3r)dwi', 'Artboard 1.png', '06456456', 'users', NULL, '2018-06-30 03:55:22'),
(48, 'rosyid', 'Abdul Rosyid', 'abdulrosyidit@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1', '4qiua*61m2oncg)s!yrp90%xl8wd5e7j^($kbh@3ztfvrosyid', 'rosyid.png', '081548576555', 'users', NULL, '2018-06-30 09:20:49'),
(49, 'dinar', 'Dinar', 'dinarabdi21@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1', 'dcosvxwfy91$%trj0z4a36@peh2ngmq^u!k*l)5b87i(dinar', 'IMG_0047.JPG', '08789887', 'users', NULL, '2018-06-30 08:32:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_content`
--
ALTER TABLE `class_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ITEMID` (`item_id`),
  ADD KEY `CATEGORYID` (`kelas_id`),
  ADD KEY `AUTHOR` (`author`);

--
-- Indexes for table `class_item`
--
ALTER TABLE `class_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkategori` (`kelas_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_category`
--
ALTER TABLE `faq_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mading`
--
ALTER TABLE `mading`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`author`);

--
-- Indexes for table `master_kelas`
--
ALTER TABLE `master_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `class_content`
--
ALTER TABLE `class_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `class_item`
--
ALTER TABLE `class_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faq_category`
--
ALTER TABLE `faq_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mading`
--
ALTER TABLE `mading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `master_kelas`
--
ALTER TABLE `master_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_content`
--
ALTER TABLE `class_content`
  ADD CONSTRAINT `AUTHOR` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `CATEGORYID` FOREIGN KEY (`kelas_id`) REFERENCES `master_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ITEMID` FOREIGN KEY (`item_id`) REFERENCES `class_item` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `class_item`
--
ALTER TABLE `class_item`
  ADD CONSTRAINT `idkategori` FOREIGN KEY (`kelas_id`) REFERENCES `master_kelas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mading`
--
ALTER TABLE `mading`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
