-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2021 pada 01.08
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `isi` text NOT NULL,
  `organisasi` varchar(128) NOT NULL,
  `dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `foto`, `isi`, `organisasi`, `dibuat`) VALUES
(1, 'Perekrutan Anggota Organisasi', 'halaman.jpg', 'Untuk seluruh siswa kelas 1 diwajibkan untuk memilih organisasi yang ada di smkn 5 ini termasuk organisasi osis juga sedang membuka pendaftaran anggota dengan cara online juga , tinggal mendaftarkan diri di aplikasi ini ke halaman daftar organisai, caranya sangat mudah dan tinggal ikuti saja semua nya ada dihalaman pendaftaran, ini adalah keunggulan di organisasi smk5 ini.', 'Osis', 1624348766),
(2, 'Berita hot Osis', 'depan_smk.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Osis', 1624505309);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `penerima` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `nama` varchar(128) NOT NULL,
  `dibuat` varchar(128) NOT NULL,
  `organisasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `penerima`, `isi`, `nama`, `dibuat`, `organisasi`) VALUES
(3, 'solat jumat', 'seluruh', 'untuk persiapan sholat jumat dimohon untuk seluruh anggota kumpul di masjid untuk membersihkan dan mempersiapkan sholat jumat', 'Faisal', '1624078534', 'Irmas'),
(4, 'Info Persami', 'Seluruh Anggota', 'Besok harus kumpul di aula', 'Irfan Martien', '1624173928', 'Osis'),
(5, 'Info qurban sapi', 'Seluruh Anggota', 'sehubung akan dilaksanakan qurban disekolah seluruh anggota diharuskan kumpul dimesjid sesudah bel istirahat pertama bunyi dan jangan lupa membawa alat tulis untuk melakukan penginfoan yang akan diberikan oleh pembina kita..terima kasih..', 'Faisal', '1624178576', 'Irmas'),
(6, 'Libur Panjang', 'Seluruh Anggota', 'Disebab kan sekolah masih ad renopasi latihan kita liburkan selama 1 minggu info lanjut nya tunggu di pengumuman berikutnya', 'Irfan Martien', '1624504769', 'Osis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker`
--

CREATE TABLE `proker` (
  `id` int(11) NOT NULL,
  `proker` varchar(256) NOT NULL,
  `organisasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `proker`
--

INSERT INTO `proker` (`id`, `proker`, `organisasi`) VALUES
(1, 'mengadakan kemping 1 hari 1x', 'Osis'),
(2, 'setahun sekali akan mendapatkan piala', 'Osis'),
(3, 'akan melakukan maulid nabi di musola kita', 'Irmas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_a_irmas`
--

CREATE TABLE `tbl_a_irmas` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `t_lahir` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `organisasi` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_a_irmas`
--

INSERT INTO `tbl_a_irmas` (`id`, `nama`, `username`, `password`, `t_lahir`, `alamat`, `kelas`, `no_hp`, `organisasi`, `gambar`, `role_id`, `is_active`, `dibuat`) VALUES
(1, 'ali', 'ali', '$2y$10$od6piRMpsYD3doMei8hgi.sw7ThpeAyhEu969G/WyKijY8BvApsfS', 'kuningan-22-maret-2002', 'ciomas', 'TKJ', '082828172121', 'Irmas', 'default.jpg', 2, 2, 1623213625),
(2, 'Faisal', 'aku', '$2y$10$tsq8l8Q70LsqMBOJuZyHRe6ED7SGIYdyovAhM1PFXby6BK5vy76lW', 'kuningan-22-maret-1990', 'gersik', 'ATPH', '02837384233', 'Irmas', 'default.jpg', 1, 1, 1623418955),
(5, 'kakang', 'kaka', '$2y$10$ZeWTRgvA6j8ALOsmt/yutuoV4IbY744Zh7VyooMxKRk3yw585TUB6', '18-mei-2001', 'cinuhun', 'BDPn', '082738172381', 'Irmas', 'default.jpg', 2, 1, 1624073450);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_a_osis`
--

CREATE TABLE `tbl_a_osis` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `t_lahir` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `organisasi` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_a_osis`
--

INSERT INTO `tbl_a_osis` (`id`, `nama`, `username`, `password`, `t_lahir`, `alamat`, `kelas`, `no_hp`, `organisasi`, `gambar`, `role_id`, `is_active`, `dibuat`) VALUES
(1, 'Irfan Martien', 'irfan', '$2y$10$74gj2kyLUZ5w4WG6lRjIz.PF.P27pakQ/oCTGTE99p6qeABeE4AJa', 'kuningan-26-maret-2000', 'ciawi', 'TKJ', '083823032071', 'Osis', 'default.jpg', 1, 1, 1623050504),
(3, 'Ainun', 'ainun', '$2y$10$KC8a6ZRD.Szuqeh3hOT/fO0H3D81w9zP.9Kyfj/A2IM1J.qZzE/Ue', 'kuningan-26-maret-2005', 'maleber', 'TBSM', '0288371829', 'Osis', 'default.jpg', 2, 1, 1623067854),
(4, 'saya', 'saya', '$2y$10$tsvPbnC.U2dHqVektaR8KOtcLHhY0hZ03R6O2vn7wDnzN8JETT49a', 'kuningan-26-maret-2003', 'taraju', 'ATPH', '02837384233', 'Osis', 'default.jpg', 2, 1, 1623069012),
(5, 'aku', 'aku', '$2y$10$Dausn7ZseiVErX146mqrwOw1l.TEd1e.hdRsQD7nuMdeb6dxCNm7u', 'kuningan-22-maret-2002', 'cihaur', 'Ak LK', '02837384233', 'Osis', 'default.jpg', 2, 1, 1623107007),
(6, 'kita', 'kita', '$2y$10$fi.ySoQ2upl1I4.ozLEutufsAYPH4eEkoxFl35iv/STXxDwfhU7bi', 'kuningan-22-maret-2002', 'karangkamulyan', 'TKJ', '082828172000', 'Osis', 'default.jpg', 2, 1, 1623107576),
(7, 'kami', 'kami', '$2y$10$LQU6VwUW4tS75UzPjq7IfuN/jrqpGWNS2AzAymRyby50t5eWY.ee.', 'kuningan-26-maret-2000', 'mekarjaya', 'BDPn', '02837384233', 'Osis', 'default.jpg', 2, 1, 1623159936),
(8, 'muhamad miftahunnaja', 'miftah', '$2y$10$2AFhWimoiH7RMzCmofl8e.S5T508R610uVNcCClCw.1wWzY/203K6', '04-november-1999', 'sidaraja', 'TKRO', '089657533739', 'Osis', 'default.jpg', 2, 1, 1623906939);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_a_paskibra`
--

CREATE TABLE `tbl_a_paskibra` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `t_lahir` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `organisasi` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_a_paskibra`
--

INSERT INTO `tbl_a_paskibra` (`id`, `nama`, `username`, `password`, `t_lahir`, `alamat`, `kelas`, `no_hp`, `organisasi`, `gambar`, `role_id`, `is_active`, `dibuat`) VALUES
(1, 'anis', 'saya', '$2y$10$dx45WmZoyTghpQP8eDQtLu0HR4XWalWD6pmXHeAWZv4a5Bc/VSHYe', 'kuningan-26-maret-2000', 'cigarukgak', 'TKJ', '0288371829', 'Paskibra', 'default.jpg', 2, 1, 1623211915);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_a_pmr`
--

CREATE TABLE `tbl_a_pmr` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `t_lahir` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `organisasi` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_a_pmr`
--

INSERT INTO `tbl_a_pmr` (`id`, `nama`, `username`, `password`, `t_lahir`, `alamat`, `kelas`, `no_hp`, `organisasi`, `gambar`, `role_id`, `is_active`, `dibuat`) VALUES
(1, 'nahru', 'nahru', '$2y$10$K5oDRst7oTfBue0lQ327BOeO4WHwOn8A7sQZW9.OjnVBsYO1um79W', 'kuningan-01-maret-2000', 'cihaur', 'TKJ', '02837384233', 'Pmr', 'default.jpg', 2, 1, 1623212956),
(2, 'miftah', 'mif', '$2y$10$Sb9g5ZgNADaWIBWjYZmPYeBxbb7OHsBEKgOOGTmUO2/OoKSI6d01K', '21-april-1999', 'sidaraja', 'ATPH', '082828172121', 'Pmr', 'default.jpg', 2, 1, 1623635299),
(3, 'lala', 'lala', '$2y$10$WR4I0YqELwjT4V5ZwkIpoOr6WWW470sF3H1IUnqxYsjwXFDi1wDqa', '28-oktober-2000', 'ciwawi', 'Ak LK', '089765675456', 'Pmr', 'default.jpg', 2, 2, 1624505758);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_a_pramuka`
--

CREATE TABLE `tbl_a_pramuka` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `t_lahir` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `organisasi` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_a_pramuka`
--

INSERT INTO `tbl_a_pramuka` (`id`, `nama`, `username`, `password`, `t_lahir`, `alamat`, `kelas`, `no_hp`, `organisasi`, `gambar`, `role_id`, `is_active`, `dibuat`) VALUES
(1, 'martien', 'martien', '$2y$10$QYiVYzWwTM4Rm6CZrJWw.ukh2ZGPBWZV4sPtDDsi/WBMmdlMA0f8m', 'kuningan-26-maret-2005', 'ciawilor', 'TKJ', '082828172121', 'Pramuka', 'default.jpg', 1, 1, 1623210742),
(2, 'tien', 'tien', '$2y$10$bLHAEQAmykoeYEyNSLquvOLe7SZrIoxx3k8qiGvRNRX8qO16dZOs.', '26-maret-2001', 'Ciawigebang', 'TKRO', '083823032071', 'Pramuka', 'default.jpg', 2, 2, 1623820202),
(3, 'faisal.mubarrok', 'faisal.m', '$2y$10$0p7WDS0FEFop2vgFWKr/g.gy1SneEBcPtgljMAcwLKnz1nTwGJ0xu', '29-07-1998', 'ds.geresik/kec.ciawigebang', 'TKRO', '081213290941', 'Pramuka', 'default.jpg', 2, 1, 1624626157);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto`
--

CREATE TABLE `tbl_foto` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `organisasi` varchar(128) NOT NULL,
  `dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_foto`
--

INSERT INTO `tbl_foto` (`id`, `judul`, `foto`, `organisasi`, `dibuat`) VALUES
(2, 'didepan masjid', 'elang.jpg', 'Irmas', 1624412446),
(3, 'Lapangan', 'login.jpg', 'Osis', 1624503904),
(4, 'Alumni', 'alumni.png', 'Osis', 1624504668);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `ket` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id`, `kelas`, `ket`) VALUES
(1, 'ATPH', 'Agribisnis Tanaman Pangan Holtikultura'),
(2, 'TKJ', 'Teknik Komputer dan Jaringan'),
(3, 'Ak LK', 'Akuntansi dan Lembaga Keuangan'),
(4, 'TKRO', 'Teknik Kendaraan Ringan Otomotif'),
(5, 'TBSM', 'Teknik dan Bisnis Sepeda Motor'),
(6, 'BDPn', 'Bisnis Daring dan Pemasaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_misi`
--

CREATE TABLE `tbl_misi` (
  `id` int(11) NOT NULL,
  `misi` varchar(256) NOT NULL,
  `organisasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_misi`
--

INSERT INTO `tbl_misi` (`id`, `misi`, `organisasi`) VALUES
(2, 'membersihkan musola setiap hari', 'Irmas'),
(3, 'Melakukan penghormatan kepada sesama teman setiap berjumpa dan bersalam kode rahasia', 'Osis'),
(4, 'mengadakan latihan setiap hari selepas pulang sekolah dan paling sedikit latihan sampai jam magrib tiba dan tidak akan pulang sebelum mendapatkan sesuatu', 'Osis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_visi`
--

CREATE TABLE `tbl_visi` (
  `id` int(11) NOT NULL,
  `ketua_l` varchar(128) NOT NULL,
  `ketua_p` varchar(128) NOT NULL,
  `visi` text NOT NULL,
  `periode` varchar(128) NOT NULL,
  `organisasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_visi`
--

INSERT INTO `tbl_visi` (`id`, `ketua_l`, `ketua_p`, `visi`, `periode`, `organisasi`) VALUES
(5, 'nana', 'nini', 'saya akan menjadi ketua yang sangat amanah', '2019-2020', 'Irmas'),
(6, 'Irfan', 'Ainun', 'menjadikan wadah sangku menjadi barang berguna', '2020-2021', 'Osis');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_a_irmas`
--
ALTER TABLE `tbl_a_irmas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_a_osis`
--
ALTER TABLE `tbl_a_osis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_a_paskibra`
--
ALTER TABLE `tbl_a_paskibra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_a_pmr`
--
ALTER TABLE `tbl_a_pmr`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_a_pramuka`
--
ALTER TABLE `tbl_a_pramuka`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_misi`
--
ALTER TABLE `tbl_misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_visi`
--
ALTER TABLE `tbl_visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `proker`
--
ALTER TABLE `proker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_a_irmas`
--
ALTER TABLE `tbl_a_irmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_a_osis`
--
ALTER TABLE `tbl_a_osis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_a_paskibra`
--
ALTER TABLE `tbl_a_paskibra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_a_pmr`
--
ALTER TABLE `tbl_a_pmr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_a_pramuka`
--
ALTER TABLE `tbl_a_pramuka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto`
--
ALTER TABLE `tbl_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_misi`
--
ALTER TABLE `tbl_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_visi`
--
ALTER TABLE `tbl_visi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
