-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 02:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa_dvd`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_02_04_234049_create_sewa_dvd_table', 1),
(11, '2023_02_04_234049_create_sewa_table', 2),
(12, '2023_02_06_113326_create_pesans_table', 3),
(13, '2023_02_06_113326_create_pesan_table', 4),
(14, '2023_02_07_114542_create_pesan_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomer_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dvd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `durasi_sewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `nomer_hp`, `nama_dvd`, `durasi_sewa`, `created_at`, `updated_at`) VALUES
(25, 'fahmi', 'fahmi@gmail.com', '00000', 'kembalinya sang pawang', '1 hari', NULL, NULL),
(26, 'Muhammad Iqbal Raihan', 'miqbalraihan7567@gmail.com', '00000', 'Wakanda Forever', '1 hari', NULL, NULL),
(27, 'Muhammad Iqbal Raihan', 'miqbalraihan7567@gmail.com', '00000', 'Wakanda Forever', '1 hari', NULL, NULL),
(28, 'Gud', 'gud@gmail.com', '081615083169', 'Ant-Man and the Wasp: Quantumania', '2 hari', NULL, NULL),
(29, 'Rehan', 'rehan@gmail.com', 'A08112345678', 'Puss in Boots', '1 hari', NULL, '2023-02-09 05:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dvd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_sewa` int(11) NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `durasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `SU` tinyint(1) NOT NULL,
  `13+` tinyint(1) NOT NULL,
  `17+` tinyint(1) NOT NULL,
  `21+` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id`, `nama_dvd`, `slug`, `harga_sewa`, `gambar`, `tahun`, `genre`, `durasi`, `status`, `deskripsi`, `SU`, `13+`, `17+`, `21+`, `created_at`, `updated_at`) VALUES
(12, 'What to Do with the Dead Kaiju?', 'what-to-do-with-the-dead-kaiju', 198000, 'assets/film/ijUJ5AMz7pseQuTKWXHUZoaNWUv0f1yN5VRmnbk3.jpg', '2022', 'Comedy, Drama, Romance', '1 jam 55 menit', 'tersedia', 'Monster besar menyerang Jepang, tapi mati mendadak. Hanya masalah waktu ledakan gas akan terjadi dari bangkai monster tersebut, yang dapat menyebabkan negara runtuh. Arata Tatewaki (Ryosuke Yamada) ditugaskan memimpin tim pasukan khusus ke area kritis. Yukino Amane (Tao Tsuchiya) muncul di depan Arata Tatewaki. Dia adalah sekretaris menteri lingkungan hidup dan juga mantan tunangan Arata Tatewaki.', 0, 1, 0, 0, '2023-02-08 03:04:55', '2023-02-08 03:04:55'),
(13, 'The Raid: Redemption', 'the-raid-redemption', 90000, 'assets/film/GSdoumMTMMrLQ6A31FQ4SDuqVmlvVql5SyyzKlDd.jpg', '2011', 'Action, Crime, Thriller', '1 jam 51 menit', 'tersedia', 'mengambil latar pada sebuah daerah kumuh di Jakarta. Tepatnya pada sebuah apartemen terbengkalai yang akhirnya dialihfungsikan oleh gembong sindikat narkoba sebagai markas besarnya. Karena berada pada tempat yang tertutup dan terbengkalai membuat segala aktivitas yang ada dalam lingkungan apartemen itu tidak terendus oleh siapapun, bahkan oleh polisi sekalipun. Aksi dimulai saat sekelompok pasukan khusus dari tim kepolisian yang memutuskan untuk menindaklanjuti terkait isu yang beredar. Sebanyak 20 anggota polisi dengan keahlian khusus diperintahkan untuk membongkar sekaligus melenyapkan seluruh kegiatan penjualan obat-obatan terlarang pada bangunan tersebut.\r\n\r\nSersan Saka yang ditunjuk sebagai ketua operasi bersama dengan Rama dan Letnan Wahyu bergerak setelah mendapatkan laporan dari salah satu penghuni apartemen tersebut. Mereka mulai bergerak secara hati-hati dan penuh kewaspadaan, setiap lantai mereka susuri. Malangnya, salah satu penghuni apartemen berteriak untuk memberikan informasi bahwa apartemen tersebut sudah disusupi oleh anggota kepolisian.', 0, 1, 1, 0, '2023-02-08 03:06:20', '2023-02-08 03:06:53'),
(14, 'The Raid 2: Berandal', 'the-raid-2-berandal', 100000, 'assets/film/TcD3xP6cekQqG9Kv7jxgpnp35VVkr5Tpbhw1p1yZ.jpg', '2014', 'Action, Crime, Thriller', '2 jam 30 menit', 'tersedia', 'Rama yang merupakan polisi jujur, akan berusaha semaksimal mungkin untuk menumpas kejahatan termasuk menjadi seorang narapidana yang berusaha untuk membongkar kejahatan sindikat narkoba.\r\n\r\nKesuksesan film pertama Iko Uwais yang menceritakan bagaimana perjuangan 20 orang anggota SWAT yang menjalankan misi gelap untuk bisa memberantas bandar narkoba Tama yang berada pada gedung di sudut kota Jakarta. Kini Rama yang diperankan Iko Uwais tetap harus menjalankan misinya untuk memberantas sindikat narkoba.', 0, 0, 1, 0, '2023-02-08 03:08:50', '2023-02-08 03:08:50'),
(15, 'Minions: The Rise of Gru', 'minions-the-rise-of-gru', 200000, 'assets/film/bsqEOaNGj6RAA1m0SWyhS4e4aRkYFzJfLxL4O7Uv.jpg', '2022', 'Animation, Adventure, Comedy', '1 jam 27 menit', 'tersedia', 'Pada tahun 1970-an, Gru muda mencoba untuk bergabung dengan sekelompok penjahat super bernama Vicious 6 setelah mereka menggulingkan pemimpin mereka -- petarung legendaris Wild Knuckles. Ketika wawancara berubah menjadi malapetaka, Gru dan Minion-nya kabur dengan Vicious 6 di belakang mereka. Untungnya, dia menemukan sumber petunjuk yang tidak terduga -- Wild Knuckles sendiri -- dan segera menemukan bahwa bahkan orang jahat membutuhkan sedikit bantuan dari teman mereka.', 1, 0, 0, 0, '2023-02-08 03:10:15', '2023-02-08 03:10:15'),
(16, 'Avengers: Endgame', 'avengers-endgame', 180000, 'assets/film/ktv3YCwQgxhJ5euPVlNXoXv5F8UchYhHTVVz1N5j.jpg', '2019', 'Action, Adventure, Drama', '3 jam 1 menit', 'tersedia', 'Terombang-ambing di luar angkasa tanpa makanan atau air, Tony Stark mengirim pesan ke Pepper Potts saat suplai oksigennya mulai berkurang. Sementara itu, para Avengers yang tersisa -- Thor, Black Widow, Captain America, dan Bruce Banner -- harus mencari cara untuk mengembalikan sekutu mereka yang ditaklukkan untuk pertarungan epik melawan Thanos -- demigod jahat yang menghancurkan planet dan alam semesta.', 1, 0, 0, 0, '2023-02-08 03:11:28', '2023-02-08 03:11:28'),
(18, 'The Avengers', 'the-avengers', 150000, 'assets/film/PxsesVTDODhcbZobWl6hthoDtWwAoVjDxCatTufR.jpg', '2012', 'Action, Sci-Fi', '2 jam 23 menit', 'tersedia', 'Ketika saudara jahat Thor, Loki (Tom Hiddleston), mendapatkan akses ke kekuatan tak terbatas dari kubus energi yang disebut Tesseract, Nick Fury (Samuel L. Jackson), direktur S.H.I.E.L.D., memulai upaya perekrutan superhero untuk mengalahkan ancaman yang belum pernah terjadi sebelumnya terhadap Bumi. . Bergabung dengan \"tim impian\" Fury adalah Iron Man (Robert Downey Jr.), Captain America (Chris Evans), Hulk (Mark Ruffalo), Thor (Chris Hemsworth), Black Widow (Scarlett Johansson) dan Hawkeye (Jeremy Renner).', 1, 0, 0, 0, '2023-02-08 03:15:15', '2023-02-08 03:15:15'),
(19, 'Avengers: Age of Ultron', 'avengers-age-of-ultron', 150000, 'assets/film/6LiFaYCqDg7bSo8xkuH59Vt83qcgGlLtdvZmLpQF.jpg', '2015', 'Action, Adventure, Sci-Fi', '2 jam 21 menit', 'tersedia', 'Ketika Tony Stark (Robert Downey Jr.) memulai program penjaga perdamaian yang tidak aktif, segalanya menjadi serba salah, memaksanya, Thor (Chris Hemsworth), Incredible Hulk (Mark Ruffalo) dan anggota Avengers lainnya untuk berkumpul kembali. Saat nasib Bumi dipertaruhkan, tim menghadapi ujian terakhir saat mereka melawan Ultron, sebuah teror teknologi yang ditujukan untuk kepunahan manusia. Sepanjang jalan, mereka bertemu dengan dua pendatang baru yang misterius dan kuat, Pietro dan Wanda Maximoff.', 1, 0, 0, 0, '2023-02-08 03:18:00', '2023-02-08 03:36:29'),
(20, 'Spider-Man 3', 'spider-man-3', 700000, 'assets/film/guHeUPMGFIFedPmT8rEv19eeAvNz4FO40FyB1rwU.jpg', '2007', 'Action', '2 jam 19 menit', 'tersedia', 'Peter Parker (Tobey Maguire) dan M.J. (Kirsten Dunst) tampaknya akhirnya berada di jalur yang benar dalam hubungan rumit mereka, tetapi masalah membayangi pahlawan super dan kekasihnya. Setelan Spider-Man Peter berubah menjadi hitam dan mengambil kendali atas dirinya, tidak hanya memberi Peter kekuatan yang ditingkatkan tetapi juga memunculkan sisi gelap dari kepribadiannya. Peter harus mengatasi pengaruh gugatan itu saat dua penjahat super, Sandman dan Venom, bangkit untuk menghancurkannya dan semua orang yang dia sayangi.', 1, 0, 0, 0, '2023-02-08 03:23:02', '2023-02-08 03:23:02'),
(22, 'Weathering with You', 'weathering-with-you', 150000, 'assets/film/JSCe1d91pO71Ex29JYbeVFwAzdz2UWKOprkVijHF.jpg', '2019', 'Animation, Drama, Fantasy', '1 jam 52 menit', 'tersedia', 'Ditetapkan selama periode cuaca yang sangat hujan, anak laki-laki sekolah menengah Hodaka Morishima melarikan diri dari rumahnya yang bermasalah di pedesaan ke Tokyo dan berteman dengan seorang gadis yatim piatu yang dapat memanipulasi cuaca.', 1, 0, 0, 0, '2023-02-08 03:27:33', '2023-02-08 03:27:33'),
(23, 'Your Name', 'your-name', 150000, 'assets/film/N7QbobTW0OUwjOPLezmX6Ars1fSpxfeU80qOiut1.png', '2016', 'Animation, Drama, Fantasy', '1 jam 46 menit', 'tersedia', 'Dua remaja berbagi hubungan yang mendalam dan magis setelah mengetahui bahwa mereka bertukar tubuh. Segalanya menjadi lebih rumit ketika lelaki dan perempuan itu memutuskan untuk bertemu langsung.', 1, 0, 0, 0, '2023-02-08 03:29:04', '2023-02-08 03:29:04'),
(24, 'I Want to Eat Your Pancreas', 'i-want-to-eat-your-pancreas', 170000, 'assets/film/pzqO78xpJFNkIwPNS5qdOU7G9y6k7dsnArL8BuUS.jpg', '2018', 'Animation, Drama, Family', '1 jam 49 menit', 'tersedia', 'Seorang bocah penyendiri menemukan sebuah buku di ruang tunggu rumah sakit. Dia segera menemukan bahwa itu adalah buku harian yang disimpan oleh teman sekelasnya yang sangat populer yang mengungkapkan kepadanya bahwa dia diam-diam menderita penyakit pankreas yang fatal.', 1, 0, 0, 0, '2023-02-08 03:31:23', '2023-02-08 03:31:23'),
(25, '5 Centimeters Per Second', '5-centimeters-per-second', 180000, 'assets/film/eKvEZw8ZM5LAfp0uVl9vAFcRty4lkPteWvc7i4KQ.jpg', '2007', 'Animation, Drama, Family', '1 jam 3 menit', 'tersedia', 'Tiga momen dalam hidup Takaki: hubungannya dengan Akari dan perpisahan paksa mereka; persahabatannya dengan Kanae, yang diam-diam mencintainya; tuntutan dan kekecewaan masa dewasa, kehidupan yang tidak bahagia di kota yang dingin.', 1, 0, 0, 0, '2023-02-08 03:33:07', '2023-02-08 03:33:07'),
(26, 'Spider-Man', 'spider-man', 100000, 'assets/film/eDhN4cotLnkt8Nyk1jO7HtOrm9LlfwkMH1yVP7Qr.jpg', '2002', 'Action, Adventure, Sci-Fi', '2 jam 1 menit', 'tersedia', '\"Spider-Man\" berpusat pada siswa Peter Parker (Tobey Maguire) yang, setelah digigit laba-laba yang diubah secara genetik, memperoleh kekuatan manusia super dan kemampuan seperti laba-laba untuk menempel di permukaan apa pun. Dia bersumpah untuk menggunakan kemampuannya untuk memerangi kejahatan, memahami kata-kata Paman Ben tercinta: \"Dengan kekuatan besar datang tanggung jawab besar.\"', 1, 0, 0, 0, '2023-02-08 03:38:41', '2023-02-08 03:38:41'),
(27, 'Spider-Man 2', 'spider-man-2', 100000, 'assets/film/5QiSDfVfPbCVyf30PBbLdO5WYMfcw7xfl8yHRQ8G.jpg', '2004', 'Action, Adventure, Sci-Fi', '2 jam 7 menit', 'tersedia', 'Ketika percobaan fusi nuklir yang gagal menghasilkan ledakan yang membunuh istrinya, Dr. Otto Octavius ​​(Alfred Molina) diubah menjadi Dr. Octopus, cyborg dengan tentakel logam yang mematikan. Doc Ock menyalahkan Spider-Man (Tobey Maguire) atas kecelakaan itu dan membalas dendam. Sementara itu, alter ego Spidey, Peter Parker, menghadapi kekuatan yang memudar dan keraguan diri. Masalah rumit adalah kebencian sahabatnya (James Franco) terhadap Spider-Man dan pertunangan mendadak cinta sejatinya (Kirsten Dunst) dengan pria lain.', 1, 0, 0, 0, '2023-02-08 03:39:51', '2023-02-08 03:39:51'),
(28, 'Ditto (2022)', 'ditto-2022', 200000, 'assets/film/NF4RBEr4VhBsO54TkyK2Y68tYpxE3630azVn5sMb.jpg', '2022', 'Drama, Fantasy, Romance', '1 jam 40 menit', 'tersedia', 'Pada malam ketika gerhana bulan total terjadi, suara orang asing dari masa depan bergema melalui radio antik di dalam kamar Yong (Yeo Jin-goo). \"Apakah Anda mendengar?\" Radio misterius menghubungkan dua mahasiswa yang hidup terpisah dua puluh tahun. Mereka mengobrol setiap malam, berbagi dan mendukung kisah cinta satu sama lain.', 0, 1, 1, 0, '2023-02-08 03:57:14', '2023-02-08 03:57:14'),
(29, 'Prey For The Devil', 'prey-for-the-devil', 190000, 'assets/film/V4UiqLhZ0TGzsdiahJFuuVOtZOTWpME85hmV3hwB.jpg', '2022', 'Horror, Thriller', '1 jam 33 menit', 'tersedia', 'Seorang biarawati bersiap untuk melakukan pengusiran setan dan berhadapan langsung dengan kekuatan iblis dengan ikatan misterius dengan masa lalunya.', 0, 0, 1, 1, '2023-02-08 04:06:25', '2023-02-08 04:06:43'),
(30, 'Megan', 'megan', 180000, 'assets/film/ZL6isGsfTtOQxnQEU0zM9ErSEjZ4Tz8zqgsjGmqP.jpg', '2022', 'Horror, Sci-fi, Thriller', '1 jam 42 menit', 'tersedia', 'Seorang insinyur robotika di sebuah perusahaan mainan membangun boneka seperti kehidupan yang mulai mengambil kehidupannya sendiri.', 0, 0, 1, 1, '2023-02-08 04:10:34', '2023-02-08 04:10:34'),
(31, 'Encanto', 'encanto', 170000, 'assets/film/KgS7nUJIWnRAM2nrCAelbDJBRlVg0o0Stfz7eyoP.jpg', '2021', 'Animation, Comedy, Drama', '1 jam 42 menit', 'tersedia', 'Encanto menceritakan kisah keluarga yang luar biasa, madrigals, yang hidup tersembunyi di pegunungan Kolombia, di sebuah rumah ajaib, di sebuah kota yang semarak, di tempat yang menakjubkan dan mempesona yang disebut Encanto. Keajaiban Encanto telah memberkati setiap anak dalam keluarga dengan hadiah unik dari kekuatan super untuk kekuatan untuk menyembuhkan setiap anak kecuali satu, Mirabel. Tetapi ketika dia menemukan bahwa sihir di sekitar Encanto dalam bahaya, Mirabel memutuskan bahwa dia, satu-satunya Madrigal biasa, mungkin hanya harapan terakhir keluarganya yang luar biasa. —Walt Disney Animation Studios', 1, 0, 0, 0, '2023-02-08 04:14:41', '2023-02-08 04:14:41'),
(32, 'Ant-Man and the Wasp: Quantumania', 'ant-man-and-the-wasp-quantumania', 250000, 'assets/film/LP1eBsv76ZkRpt1HLr8AikyNSgDbOI7YzkFolcKC.jpg', '2023', 'Adventure, Fiction, Comedy', '2 Jam 5 Menit', 'tidak tersedia', 'Mitra Super-Hero Scott Lang dan Hope van Dyne, bersama dengan orang tua Hope Janet van Dyne dan Hank Pym, dan putri Scott Cassie Lang, menemukan diri mereka menjelajahi Quantum Realm, berinteraksi dengan makhluk baru yang aneh dan memulai petualangan yang akan mendorong mereka melampaui batas dari apa yang mereka pikir mungkin.', 0, 1, 0, 0, '2023-02-08 04:43:48', '2023-02-08 04:44:50'),
(33, 'Puss in Boots: The Last Wish', 'puss-in-boots-the-last-wish', 190000, 'assets/film/4ACDaFgCzxIuII7qyp1suLFvWLrtM6v8Pid6KrFt.jpg', '2022', 'Animation, Adventure, Comedy, Family, Fantasy', '1 jam 42 menit', 'tersedia', 'Puss in Boots menemukan fakta bahwa kecintaannya pada petualangan telah merenggut nyawanya: dia telah menghabiskan delapan dari sembilan nyawanya. Puss kini memulai petualangan epik untuk menemukan harapan terakhir untuk memulihkan sembilan nyawanya.', 1, 0, 0, 0, '2023-02-08 04:47:30', '2023-02-08 04:47:30'),
(34, 'mixue', 'mixue', 1111, 'assets/film/7FlWTXQVqvb258z1VAodqMvwWdP4mRGpbYhFZyKh.jpg', '11111', 'sda', '1jam', 'tersedia', 'asdad', 1, 1, 1, 1, '2023-02-09 03:04:50', '2023-02-09 05:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'miqbalraihan7567@gmail.com', NULL, '$2y$10$d10L7dsMwyeB8cMDOuXox.qEFWqZWhH4iZX/mYh24fKpeNjseKHDa', 1, NULL, '2023-02-05 07:51:36', '2023-02-05 07:51:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
