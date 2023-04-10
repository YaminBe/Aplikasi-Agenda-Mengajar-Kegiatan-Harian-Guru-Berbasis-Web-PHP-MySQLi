-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Sep 2018 pada 12.46
-- Versi server: 10.1.28-MariaDB
-- Versi PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jurnal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE `download` (
  `id_perangkat` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id_perangkat`, `id_guru`, `id_mapel`, `ket`, `tanggal_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(1, 7, 18, 'Untuk Bukti Kalau Saya Sudah Wisuda', '2018-05-20', 'Transkip Nilai Terakhir Saya', 'pdf', '296066', '../file/Transkip Nilai Terakhir Saya.pdf'),
(2, 1, 9, 'RPP', '2018-05-22', 'Perangkat Pengajaran 1', 'docx', '20791', '../file/Perangkat Pengajaran 1.docx'),
(3, 1, 9, 'SILABUS', '2018-05-22', 'Perangkat Pengajaran 2', 'docx', '20791', '../file/Perangkat Pengajaran 2.docx'),
(4, 1, 9, 'Program Tahunan', '2018-05-22', 'Perangkat Pengajaran 3', 'docx', '20791', '../file/Perangkat Pengajaran 3.docx'),
(7, 7, 24, 'Hanya Test', '2018-06-11', 'Tes Upload', 'pdf', '296066', '../file/Tes Upload.pdf'),
(6, 1, 21, 'pERANGKAT', '2018-05-24', 'RPP', 'pdf', '278892', '../file/RPP.pdf'),
(8, 1, 19, 'Perangkat', '2018-07-08', 'RPP', 'pdf', '806020', '../file/RPP.pdf'),
(9, 11, 29, 'PERANGKAT', '2018-07-19', 'SILABUS', 'pdf', '484705', '../file/SILABUS.pdf'),
(10, 1, 19, 'Perangkat', '2018-08-02', 'Silabus', 'pdf', '296266', '../file/Silabus.pdf'),
(11, 1, 22, 'Perangkat', '2018-08-02', 'Silabus', 'docx', '37170', '../file/Silabus.docx'),
(12, 1, 34, 'Perangkat', '2018-08-19', 'Silabus', 'pdf', '1708967', '../file/Silabus.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id_agenda` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `jam` varchar(12) NOT NULL,
  `materi` text NOT NULL,
  `absen` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_agenda`
--

INSERT INTO `tb_agenda` (`id_agenda`, `id_guru`, `id_mapel`, `tgl`, `jam`, `materi`, `absen`, `ket`, `status`) VALUES
(17, 7, 18, '2018-05-17', '19:14', '<p>Apa ini</p>\r\n', 'Cukup', 'Cukup melelahkan Logikanya', ''),
(24, 7, 18, '2018-05-22', '19:00', '<p>Tes Hari</p>\r\n', 'pas', 'stop', ''),
(26, 1, 20, '2018-05-23', '21:01', '<p>tes ajo woi</p>\r\n', 'pas bna ko', 'ketttttttt', ''),
(28, 1, 19, '2018-05-25', '22:01', '<p>Admin tees</p>\r\n', 'Admin tees', 'Admin tees', ''),
(29, 1, 19, '2018-05-25', '23:59', '<p>hgk</p>\r\n', 'jgj', 'jgh', ''),
(31, 1, 20, '2016-11-30', '23:57', '<p>isiiiii nyo ko .............</p>\r\n', 'cukup', 'cukop', ''),
(33, 9, 26, '2018-05-27', '14:58', '<p>B J VHJVHJVGHVGH</p>\r\n', 'VVGVG', 'VGVGV', ''),
(34, 9, 27, '2018-05-27', '12:59', '<p>NJBJB</p>\r\n', 'BUUG', 'UUGUG', ''),
(35, 7, 18, '2018-04-13', '01:30', '<p>Mengajra materi lanjutan dari materi kemaren ..</p>\r\n', '2', '2 Orang Siswa Tidak Hadir', ''),
(36, 1, 22, '2018-07-08', '02:58', '<p>cfcfcfcfcfcfcfcf</p>\r\n', 'Cukup', 'Selesai', ''),
(37, 1, 22, '2018-07-08', '03:04', '<p>bgvtftfkljnjknkjnjknjnj</p>\r\n', 'gygyf', 'ffgcfcf', ''),
(38, 11, 29, '2018-07-19', '04:04', '<p>hjvhjg</p>\r\n', 'cukup', 'pas', ''),
(39, 11, 29, '2018-07-20', '08:08', '<p>rf</p>\r\n', 'kurr', 'dsdddd', ''),
(40, 11, 29, '2018-07-19', '06:06', '<p>gggggg</p>\r\n', 'ggg', 'gg', ''),
(41, 11, 30, '2018-07-19', '23:01', '<p>GGF</p>\r\n', 'CCC', 'CC', ''),
(42, 1, 19, '2018-08-02', '22:59', '<p>nhjfwebfkwenjkhwebg</p>\r\n', 'pass', 'Cukup', ''),
(43, 10, 31, '2018-08-03', '23:59', '<p>Form Agenda [&nbsp;<strong>Instalasi SO Berbasis GUI</strong>&nbsp;]</p>\r\n', 'Cukup', 'Form Agenda [ Instalasi SO Berbasis GUI ]', ''),
(44, 1, 33, '2018-08-03', '22:58', '<p>njnjnnknkn</p>\r\n', 'Cukup', 'mjnj', ''),
(45, 1, 19, '2018-08-18', '09:01', '<p>Aku akan pergi ke mana</p>\r\n', 'Cukup', 'Pass', ''),
(46, 8, 25, '2018-08-18', '10:10', '<p>Malakukan Instalasi SO</p>\r\n', 'Pass', 'Cukup', ''),
(47, 9, 27, '2018-08-18', '07:50', '<p>Belajar Bersama</p>\r\n', 'Pass', 'Cukup', ''),
(48, 1, 19, '2018-08-19', '07:30', '<p>mdndfj</p>\r\n', 'nnjn', 'jj', ''),
(49, 8, 25, '2018-08-19', '08:30', '<p>nuhu</p>\r\n', 'uhuhuh', 'uhuhu', ''),
(50, 11, 29, '2018-08-19', '10:30', '<p>FGD</p>\r\n', 'GDG', 'GSDG', ''),
(51, 1, 20, '2018-08-19', '12:30', '<p>njjnj</p>\r\n', 'njnjn', 'njn', ''),
(52, 1, 20, '2018-08-19', '08:00', '<p>FSG</p>\r\n', 'DG', 'GFD', ''),
(53, 1, 33, '2018-08-19', '03:04', '<p>ggyg</p>\r\n', 'ygygy', 'gygy', ''),
(54, 1, 33, '2018-08-19', '06:59', '<p>APA</p>\r\n', 'IYA', 'TIDAK', ''),
(55, 1, 34, '2018-08-19', '05:00', '<p>DF</p>\r\n', 'FESG', 'GDH', ''),
(56, 1, 19, '2018-08-19', '06:40', '<p>GX</p>\r\n', 'GDFG', 'GDG', ''),
(57, 1, 19, '2018-08-19', '06:59', '<p>fgsg</p>\r\n', 'gdf', 'gdf', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agendalain`
--

CREATE TABLE `tb_agendalain` (
  `id_lain` int(10) NOT NULL,
  `id_guru` int(10) NOT NULL,
  `tgl_kgt` date NOT NULL,
  `kegiatan` text NOT NULL,
  `isi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_agendalain`
--

INSERT INTO `tb_agendalain` (`id_lain`, `id_guru`, `tgl_kgt`, `kegiatan`, `isi`, `keterangan`) VALUES
(9, 1, '2018-05-28', 'fsdg', '<p>fsdg</p>\r\n', 'sdg'),
(10, 1, '2018-05-28', 'gfdh', '<p>gfdg</p>\r\n', 'gfdh'),
(11, 7, '2018-06-08', 'tes awe', '<p>terjadi beberapa kesalahan dari banyaknya waktu itu untuk</p>\r\n', 'jnj'),
(12, 7, '2018-06-11', 'Mencari Koncat', '<p><strong>Waktu itu kami berencana Untuk mencari koncat ke sawah</strong></p>\r\n\r\n<p>Tidak Menenmukan binatng lain, tapi kami menemukan beberapa binatang langka , seperti <em><strong>Komodo</strong></em></p>\r\n', 'Terdapat 3 ikur koncet di sawah'),
(13, 11, '2018-07-19', 'TTTT', '<p>GGGG</p>\r\n', 'GGG'),
(14, 1, '2018-08-19', 'Revisi Program', '<p>njjbnhjb</p>\r\n', 'gfdh'),
(15, 1, '2018-08-19', 'Coba Dulu', '<p>fdgfd</p>\r\n', 'gg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(20) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `kelamin` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gelar` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nama_guru`, `nip`, `kelamin`, `alamat`, `telp`, `username`, `password`, `gelar`, `tempat`, `tgl`, `agama`, `email`, `photo`) VALUES
(1, 'Muhammad Abduh', '197409301999', 'Laki-laki', '        Ladang Laweh', '082214609889', 'guru', 'guru', 'M.Ag', 'Padang', '2018-05-28', 'Islam', 'bitras90@gmail.com', 'admin.jpg'),
(8, 'Asri Hidayat', '002897867', 'Laki-laki', 'Tabek Gadang', '7695', 'a', 'a', 'S.Pd', 'Kuansing', '2018-05-26', 'Islam', 'gdg@gmail.cpm', '10304432100006.png'),
(7, 'Abdul Yamin', '001970769769', 'Laki-laki', 'Desa Sibak, Ipuh Muko-muko', '082214607669', 'yamin', 'yamin', 'S.Pd', 'Sibak', '2018-05-17', 'Islam', 'ocikyamin93@gmail.com', 'userk.png'),
(9, 'Revi Sumardi', '000584635654', 'Laki-laki', 'Palambayan', '098089977', 'r', 'r', 'S.Pd', 'Padang', '2018-05-04', 'Kristen', 'revi@gmail.com', 'guruc.png'),
(10, 'Randu Franstio', '900808098079', 'Laki-laki', 'Tabek Gadang', '089797', 'rdn', 'rdn', 'S.Pd', 'Sijunjung', '2018-05-01', 'Kristen', 'randu@gmail.com', '10304432100006.png'),
(11, 'Andro Sudirno', '08808080', 'Laki-laki', 'dff', '6666', 'tes', 'tes', 'spd', 'sss', '2018-07-19', 'Islam', 'ee@gmail.com', 'userk.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `idkelas` int(11) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`idkelas`, `kelas`) VALUES
(1, 'X-TKJ'),
(2, 'XI-TKJ'),
(3, 'XII-RPL'),
(4, 'XII- TKJ'),
(5, 'XI-RPL'),
(6, 'X-RPL'),
(7, 'X-MULTIMEDIA'),
(8, 'XI-MULTIMEDIA'),
(9, 'XII-MULTIMEDIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas_mapel`
--

CREATE TABLE `tb_kelas_mapel` (
  `id_kelas_m` int(11) NOT NULL,
  `idkelas` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kepsek`
--

CREATE TABLE `tb_kepsek` (
  `id_kepsek` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `photok` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kepsek`
--

INSERT INTO `tb_kepsek` (`id_kepsek`, `nama`, `username`, `password`, `photok`) VALUES
(1, 'Aizur Hedi, M.Hum', 'kepsek', 'kepsek', 'userk.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `idkelas` int(11) NOT NULL,
  `nama_mapel` varchar(60) NOT NULL,
  `jurusan` varchar(60) NOT NULL,
  `tingkat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `id_guru`, `idkelas`, `nama_mapel`, `jurusan`, `tingkat`) VALUES
(18, 7, 1, 'Instalasi SO Berbasis GUI', 'TKJ', '1'),
(19, 1, 2, 'KKPI', 'TKJ', '1'),
(20, 1, 3, 'Instalasi SO Berbasis Text', 'TKR', '3'),
(22, 1, 4, 'Bahasa Inggris', 'TKR', '2'),
(23, 7, 1, 'Bahasa Indonesia', 'TKJ', '1'),
(24, 7, 4, 'Bahasa Inggris', 'TKR', '3'),
(25, 8, 1, 'Instalasi SO Berbasis GUI', 'TKJ', '1'),
(26, 9, 1, 'KKPI', 'TKJ', '1'),
(27, 9, 2, 'MIJWAN', 'TKR', '2'),
(28, 9, 3, 'MIS', 'RPL', '3'),
(29, 11, 1, 'KKPI', 'TKJ', '1'),
(30, 11, 2, 'Bahasa Indonesia', 'RPL', '1'),
(31, 10, 1, 'Instalasi SO Berbasis GUI', 'TKJ', '1'),
(32, 10, 2, 'Instalasi SO Berbasis Text', 'TKJ', '1'),
(33, 1, 1, 'Bahasa Indonesia', 'TKJ', '1'),
(34, 1, 1, 'MIJLAN', 'RPL', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mastermapel`
--

CREATE TABLE `tb_mastermapel` (
  `id_mMapel` int(11) NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mastermapel`
--

INSERT INTO `tb_mastermapel` (`id_mMapel`, `mapel`) VALUES
(2, 'Instalasi SO Berbasis GUI'),
(3, 'Instalasi SO Berbasis Text'),
(4, 'Bahasa Indonesia'),
(5, 'Bahasa Inggris'),
(6, 'KKPI'),
(7, 'MISOD'),
(8, 'MIS'),
(9, 'MIJWAN'),
(10, 'MIJLAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tajaran`
--

CREATE TABLE `tb_tajaran` (
  `id_tajaran` int(11) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tajaran`
--

INSERT INTO `tb_tajaran` (`id_tajaran`, `tahun_ajaran`, `status`) VALUES
(1, '2017 / 2018', 'T'),
(2, '2018 -2019', 'Y'),
(3, '2019 / 2020', 'T');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_admin`, `nama`, `username`, `password`, `foto`) VALUES
(2, 'yaminbae.blogspot.com', 'admin', 'admin', 'userk.png'),
(5, '1', '1', '1', 'userk.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_perangkat`);

--
-- Indeks untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id_agenda`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indeks untuk tabel `tb_agendalain`
--
ALTER TABLE `tb_agendalain`
  ADD PRIMARY KEY (`id_lain`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`idkelas`),
  ADD KEY `idkelas` (`idkelas`);

--
-- Indeks untuk tabel `tb_kelas_mapel`
--
ALTER TABLE `tb_kelas_mapel`
  ADD PRIMARY KEY (`id_kelas_m`),
  ADD KEY `idkelas` (`idkelas`);

--
-- Indeks untuk tabel `tb_kepsek`
--
ALTER TABLE `tb_kepsek`
  ADD PRIMARY KEY (`id_kepsek`);

--
-- Indeks untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `idkelas` (`idkelas`);

--
-- Indeks untuk tabel `tb_mastermapel`
--
ALTER TABLE `tb_mastermapel`
  ADD PRIMARY KEY (`id_mMapel`);

--
-- Indeks untuk tabel `tb_tajaran`
--
ALTER TABLE `tb_tajaran`
  ADD PRIMARY KEY (`id_tajaran`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `download`
--
ALTER TABLE `download`
  MODIFY `id_perangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `tb_agendalain`
--
ALTER TABLE `tb_agendalain`
  MODIFY `id_lain` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `idkelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas_mapel`
--
ALTER TABLE `tb_kelas_mapel`
  MODIFY `id_kelas_m` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kepsek`
--
ALTER TABLE `tb_kepsek`
  MODIFY `id_kepsek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tb_mastermapel`
--
ALTER TABLE `tb_mastermapel`
  MODIFY `id_mMapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_tajaran`
--
ALTER TABLE `tb_tajaran`
  MODIFY `id_tajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD CONSTRAINT `tb_agenda_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `tb_mapel` (`id_mapel`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD CONSTRAINT `tb_mapel_ibfk_1` FOREIGN KEY (`idkelas`) REFERENCES `tb_kelas` (`idkelas`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
