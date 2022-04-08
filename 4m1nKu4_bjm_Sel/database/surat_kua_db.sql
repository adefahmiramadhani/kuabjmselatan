-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Apr 2022 pada 21.20
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `surat_kua_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `user_id` int(2) NOT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text,
  `email` varchar(40) DEFAULT NULL,
  `tlp` varchar(20) NOT NULL,
  `user` varchar(15) DEFAULT NULL,
  `pass` varchar(15) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `status_aktif` varchar(1) DEFAULT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`user_id`, `nik`, `nama`, `alamat`, `email`, `tlp`, `user`, `pass`, `type`, `status_aktif`, `foto`) VALUES
(26, NULL, 'Muhammad Kusasi', NULL, NULL, '', 'admin', 'admin', 'admin', 'Y', 'gambar_admin/1.jpg'),
(27, '6404556600223344', 'User', 'Jl. Kelayan', 'user@gmail.com', '083455653345', 'user', 'user', 'user', 'Y', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_daftar_nikah`
--

CREATE TABLE IF NOT EXISTS `tbl_daftar_nikah` (
  `id_nikah` int(11) NOT NULL,
  `nik_laki` varchar(50) NOT NULL,
  `nama_laki` varchar(100) NOT NULL,
  `ayah_laki` varchar(100) NOT NULL,
  `ibu_laki` varchar(100) NOT NULL,
  `alamat_laki` text NOT NULL,
  `nik_bini` varchar(25) NOT NULL,
  `nama_bini` varchar(100) NOT NULL,
  `ayah_bini` varchar(100) NOT NULL,
  `ibu_bini` varchar(100) NOT NULL,
  `alamat_bini` text NOT NULL,
  `tmpt_nikah` varchar(30) NOT NULL,
  `tgl_nikah` date NOT NULL,
  `jam_nikah` varchar(20) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_daftar_nikah`
--

INSERT INTO `tbl_daftar_nikah` (`id_nikah`, `nik_laki`, `nama_laki`, `ayah_laki`, `ibu_laki`, `alamat_laki`, `nik_bini`, `nama_bini`, `ayah_bini`, `ibu_bini`, `alamat_bini`, `tmpt_nikah`, `tgl_nikah`, `jam_nikah`, `tgl_daftar`, `foto`) VALUES
(2, '634567893023311', 'Dulah', 'Basri', 'minah', 'JL.PANGERAN HIDAYATULLAH KEL.PENGAMBANGAN', '634567893023322', 'Rini', 'Ibnu', 'sanah', 'JL.PANGERAN HIDAYATULLAH KEL.PENGAMBANGAN', 'KUA.Kec Banjarmasin Selatan', '2022-01-13', 'Jam 01:00', '2022-01-12', 'CARA PASANG APLIKASI WEB.pdf'),
(9, '634567893023312', 'Dulaaaa', 'Basriaaaa', 'minah', 'Banjarmasin', '634567893023323', 'Riniaaa', 'Ibnuaaa', 'sanahaaa', 'Banjarmasin', 'KUA.Kec Banjarmasin Selatan', '2022-01-13', 'Jam 02:00', '2022-01-12', '1625128705.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kegiatan`
--

CREATE TABLE IF NOT EXISTS `tbl_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `tgl_up` datetime NOT NULL,
  `foto_kegiatan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kegiatan`
--

INSERT INTO `tbl_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `ket`, `tgl_up`, `foto_kegiatan`) VALUES
(1, 'Kegiatan Magang', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus cumque quibusdam eaque quaerat, sapiente obcaecati! Saepe ea minus vel, dolores ratione nisi pariatur, esse quidem error cumque voluptates, dolorem possimus aperiam autem commodi dolor ipsa! Accusantium facilis recusandae aspernatur perspiciatis distinctio sit, quas temporibus rem doloribus ipsa ratione neque saepe perferendis ex iste nisi expedita adipisci sed tempore laudantium, dolorem quos id. Ipsa, fugiat. Vel inventore nobis voluptates nihil facere, aliquam facilis consequuntur tempora quasi ipsum fugiat eligendi eveniet. Quae et quo necessitatibus sit, facere quod dolor voluptates natus dolores similique error doloribus consectetur, ab praesentium nobis quos velit non hic animi quas omnis magnam unde, eligendi assumenda? Sit saepe, nulla animi quas sed quis. Tenetur hic inventore minus? Consequatur, autem quos unde culpa ut perferendis officia harum ratione aspernatur, vel dignissimos. Accusamus voluptate tempora corporis voluptatibus temporibus, in aliquam quam iste animi ab pariatur vero, nisi nulla mollitia hic inventore voluptatem nobis sunt quod dolorum minus? Nam praesentium nulla quas dicta architecto quos ipsum ullam harum cum est iusto aperiam exercitationem, mollitia culpa perspiciatis possimus quia maiores at. Veniam omnis sed vitae distinctio atque hic. Quisquam porro impedit obcaecati quibusdam ipsam eos nobis. Officiis dolore at soluta asperiores exercitationem!', '2022-04-03 00:00:00', 'WhatsApp Image 2022-03-02 at 10.27.29.jpeg'),
(2, 'Foto Bersama Petugas KUA Banjarmasin Selatan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint dicta id similique aliquam sed expedita nam quis eum quos soluta tempore assumenda beatae sapiente harum velit corrupti aut a consequatur pariatur adipisci, repellat inventore nemo? Minus nesciunt libero natus quas, beatae quo dolore ad asperiores delectus quaerat unde nemo, earum dolorem quisquam. Delectus mollitia est nobis facilis placeat cumque dignissimos, optio, aliquid quo veniam ex doloribus ea, officia temporibus nam aspernatur fugit nemo quod corrupti inventore ad cupiditate harum a eum. Quibusdam, quam id? Cumque, distinctio. Iste voluptates tempore tempora minima sunt molestiae sequi ab, repellendus quia deserunt, praesentium cumque alias non error ratione! Suscipit animi commodi voluptate nobis eveniet. Expedita laboriosam obcaecati, labore maxime eum ipsa non dolor quaerat ad rem veniam, quibusdam facilis fugit, alias ut natus ratione. Possimus placeat dolore minima doloremque, dolorum repellat harum, quasi ullam est recusandae vel! Veritatis id saepe minima quod voluptatum, sed dicta voluptatem sunt, ut dolorum consequatur eaque quo ab aperiam tenetur natus adipisci veniam inventore eius animi, perspiciatis ratione incidunt nesciunt eligendi! Aliquid voluptatum odio, eligendi itaque optio rerum sit atque nobis rem animi repellendus magnam fuga debitis ipsum tenetur. Numquam quibusdam quam nihil debitis veniam, nulla aperiam facilis dolorem.', '2022-04-03 07:44:14', 'WhatsApp Image 2022-03-02 at 11.11.12.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ket_belum_nikah`
--

CREATE TABLE IF NOT EXISTS `tbl_ket_belum_nikah` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(40) NOT NULL,
  `lurah` varchar(40) NOT NULL,
  `no_rujukan` varchar(20) NOT NULL,
  `tgl_rujukan` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bin` varchar(50) NOT NULL,
  `ttl` varchar(40) NOT NULL,
  `warga_agama` varchar(20) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `kerja` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_buat` date NOT NULL,
  `perlu` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ket_belum_nikah`
--

INSERT INTO `tbl_ket_belum_nikah` (`id_surat`, `no_surat`, `lurah`, `no_rujukan`, `tgl_rujukan`, `nama`, `bin`, `ttl`, `warga_agama`, `jk`, `kerja`, `alamat`, `tgl_buat`, `perlu`) VALUES
(1, '20/Kua.17.01-5/PW.01/SKET/08/2021', 'KElayan Tengah', '345.56.KTH/2021', '20 Agustus 2021', 'Sarifudin', 'Jamhari', 'Banjarmasin,10 Juli 1991', 'Indonesia/Islam', 'Laki-Laki', 'Swasta', 'Jl.Kelayan B, Gang Bersama RT.19. RW.02 Kelayan Tengah Kec.Banjarmasin Selatan Kota Banjarmasin ', '2021-09-23', 'MELENGKAPI ADMINISTRASI PERSYARATAN UNTUK MASUK POLRI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar` (
  `id_komen` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `subjek` varchar(40) CHARACTER SET utf8 NOT NULL,
  `date` datetime NOT NULL,
  `pesan` text NOT NULL,
  `stat_aktif` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komen`, `nama`, `email`, `subjek`, `date`, `pesan`, `stat_aktif`) VALUES
(1, 'Duan', 'duan@gmail.com', 'Pelayanan', '2019-03-22 18:57:03', 'pelayanan sangat mantap', 'Y'),
(2, 'Fauzan', 'faujan45@gmail.com', 'Pelayanan', '2019-03-22 18:57:13', 'Oke...', 'Y'),
(5, 'Ilham Sukma', 'user@gmail.com', 'Pelayanan', '2022-04-03 02:06:38', 'asdasdasdasdasdasd', 'Y'),
(33, 'Kurniawan', 'agus@gmail.com', 'Pelayanan', '2022-04-02 08:43:45', 'asdasdasdasd', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rekom_nikah`
--

CREATE TABLE IF NOT EXISTS `tbl_rekom_nikah` (
  `id_rekom` int(11) NOT NULL,
  `no_surat` text NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `tujuan_prov` varchar(30) NOT NULL,
  `tgl_buat` date NOT NULL,
  `nm_p` text NOT NULL,
  `bin_p` text NOT NULL,
  `nik_p` varchar(20) NOT NULL,
  `tmpt_lahir_p` varchar(30) NOT NULL,
  `tgl_lahir_p` date NOT NULL,
  `jk_p` varchar(20) NOT NULL,
  `kerja_p` varchar(20) NOT NULL,
  `alamat_p` text NOT NULL,
  `stat_p` varchar(20) NOT NULL,
  `nm_c` text NOT NULL,
  `bin_c` text NOT NULL,
  `nik_c` varchar(20) NOT NULL,
  `tmpt_lahir_c` varchar(30) NOT NULL,
  `tgl_lahir_c` date NOT NULL,
  `jk_c` varchar(20) NOT NULL,
  `kerja_c` varchar(20) NOT NULL,
  `alamat_c` text NOT NULL,
  `stat_c` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_rekom_nikah`
--

INSERT INTO `tbl_rekom_nikah` (`id_rekom`, `no_surat`, `tujuan`, `tujuan_prov`, `tgl_buat`, `nm_p`, `bin_p`, `nik_p`, `tmpt_lahir_p`, `tgl_lahir_p`, `jk_p`, `kerja_p`, `alamat_p`, `stat_p`, `nm_c`, `bin_c`, `nik_c`, `tmpt_lahir_c`, `tgl_lahir_c`, `jk_c`, `kerja_c`, `alamat_c`, `stat_c`) VALUES
(7, '052', 'BANJARMASIN TIMUR', 'KALIMANTAN SELATAN', '2022-01-20', 'PRIYO WICAKSONO', 'SUPRIYANTO', '6371013003960005', 'BANJARMASIN', '1996-03-30', 'Laki-Laki', 'ANGGOTA POLRI', 'Jl.PRONA Gg.INDRA JAYA IV No.116 RT.15/002 PEMURUS BARU', 'BELUM KAWIN', 'DITHA RAMADHANTY', 'SYAHRIANI', '6371025801970004', 'BANJARBARU', '1997-01-18', 'Perempuan', 'KARYAWAN SWASTA', 'Jl.PUTRI JUNJUNG BUIH No.03 RT.011/002 KARANG MEKAR KEC.BANJARMASIN TIMUR KOTA BANJARMASIN', 'BELUM KAWIN'),
(8, '053', 'LANDASAN ULIN', 'KALIMANTAN SELATAN', '2022-01-20', 'ROMITA JULIA SARI', 'ZAINAL FADLI', '6371015807010008', 'BANJARMASIN', '2001-07-18', 'Perempuan', 'PELAJAR/MAHASISWA', 'Jl.KELAYAN B TIMUR KOMP.AR-RAUDAH RT.006/001', 'BELUM KAWIN', 'M.RIZKY DIMAS A.N', 'SUPRIADI', '6372023004990002', 'BANJARBARU', '1999-04-30', 'Laki-Laki', 'SWASTA', 'ASRAMA DENZIPUR-8 RT.012/002 GUNTUNG MANGGIS KEC.LANDASAN ULIN KOTA BANJARBARU', 'BELUM KAWIN'),
(9, '54', 'BANJARMASIN TIMUR', 'KALIMANTAN SELATAN', '2022-01-20', 'ARMAN', 'ARBAIN', '6371010604940008', 'BANJARMASIN', '1994-04-06', 'Laki-Laki', 'WIRASWASTA', 'Jl.AYANI KM.6 RT.008/001 PEMURUS DALAM', 'BELUM KAWIN', 'ADELIA', 'ARIF', '6371024108010012', 'BANJARMASIN', '2001-08-01', 'Perempuan', 'PELAJAR/MAHASISWA', 'Jl.VETERAN SMPN 7 JALUR UTAMA RT.030/002 SUNGAI BILUKEC.BANJARMASIN TIMUR KOTA BANJARMASIN', 'BELUM KAWIN'),
(10, '57', 'BANJARBARU SELATAN', 'KALIMANTAN SELATAN', '2022-01-24', 'MAHARANI AULIA ARISANTY', 'ARJONI,H', '6371014104960024', 'SUNGAI TABUK', '1996-04-01', 'Perempuan', 'PELAJAR/MAHASISWA', 'Jl.BUMI MAS RAYA KOMP.HANDAYANI II RT30 PEMURUS BARU', 'BELUM KAWIN', 'MUHAMMAD HILMY', 'RUSDI AZIZ,SE,M.AP', '6371011402950005', 'BANJARMASIN', '1995-02-14', 'Laki-Laki', '-', 'JL.BUMI MAS RAYA KOMP.BUMI HANDAYANI XII No.5 RT.31/001 PEMURUS BARU', 'BELUM KAWIN'),
(11, '58', 'BANJARMASIN BARAT', 'KALIMANTAN SELATAN', '2022-01-24', 'KHAIDIR', 'SURI (Alm)', '6371011510000021', 'BANJARMASIN', '2000-10-15', 'Laki-Laki', 'BURUH HARIAN LEPAS', 'Jl.PRONA I KAMPUNG LIMAU RT.029/001 PEMURUS BARU', 'BELUM KAWIN', 'AGUSTINA', 'MUDARI', '6371035408970008', 'BANJARMASIN', '2000-08-14', 'Perempuan', '-', 'Jl.BELITUNG DARAT Gg.AMAL UTARA RT.15/002 BELITUNG UTARA KEC.BANJARMASIN BARAT', 'BELUM KAWIN'),
(12, '59', 'SATUI', 'KALIMANTAN SELATAN', '2022-01-24', 'DIYAN  WAHYU UTOMO', 'NARIS', '3504072303940003', 'TULUNGAGUNG', '1994-03-23', 'Laki-Laki', 'KARYAWAN SWASTA', 'Jl.KELAYAN A Gg.ANTASARI RT.05/001 KELAYAN DALAM', 'CERAI HIDUP', 'SRI WAHYUNI', 'PARNI', '6310046107020006', 'BENGKULU', '2002-07-21', 'Perempuan', 'SWASTA', 'Jl.PLN LAMA RT.06 SUNGAI DANAU KEC.SATUI KAB.TANAH BUMBU', 'BELUM KAWIN'),
(13, '60', 'GAMBUT', 'KALIMANTAN SELATAN', '2022-01-24', 'FAHRURRAJI', 'MASRANI,H', '6371011007940003', 'BANJARMASIN', '1994-07-10', 'Laki-Laki', '-', 'Jl.KELAYAN A II Gg.INDONESIA RT.12/001 MURUNG RAYA', 'BELUM KAWIN', 'SINTIA MULIYANI', 'MUHAMMAD AL-AMIN', '6303036211960005', 'PALAM', '1996-11-22', 'Perempuan', 'PELAJAR/MAHASISWA', 'KEC.GAMBUT KAB.BANJAR', 'BELUM KAWIN'),
(14, '61', 'KERTAK HANYAR', 'KALIMANTAN SELATAN', '2022-01-24', 'HAMIDHAN', 'SYAHGIAN', '6371011707960017', 'BANJARMASIN', '1996-07-17', 'Laki-Laki', 'BURUH HARIAN LEPAS', 'Jl.BASIRIH DALAM RT.25/002 BASIRIH SELATAN', 'BELUM KAWIN', 'MISDA', 'SYARKAWI', '6303025111960003', 'ANJIR', '1997-11-19', 'Perempuan', 'PELAJAR/MAHASISWA', 'KEC.KERTAK HANYAR KAB.BANJAR', 'BELUM KAWIN'),
(15, '68', 'BANJARMASIN TENGAH', 'KALIMANTAN SELATAN', '2022-01-26', 'NOOR ANNISA AULIA', 'RUSLINOOR,SE,M.AP', '6371017004960003', 'BANJARMASIN', '1996-04-30', 'Perempuan', '-', 'Jl.PRONA I KOMP.BUMI PERMAI II No.65 RT.12/001 PEMURUS BARU', 'BELUM KAWIN', 'MUHAMMAD AL KAUTSAR ANSHARI,SE', 'H.MUHAMMAD YAMANI', '6372063107930003', 'BANJARBARU', '1993-07-31', 'Laki-Laki', '-', 'Jl.CHATIB DAYAN No.95 RT.14/003 KEMUNING KEC.BANJARBARU SELATAN KOTA BANJARBARU', 'BELUM KAWIN'),
(16, '69', 'BANJARMASIN TENGAH', 'KALIMANTAN SELATAN', '2022-01-26', 'MUHAMMAD INDRA ', 'ANANG AYIB', '6371011103980009', 'BANJARMASIN', '1998-03-11', 'Laki-Laki', '-', 'Jl.ANTASAN BONDAN RT.01/001 MANTUIL', 'BELUM KAWIN', 'AISYAH', 'ISMAIL FAHMI', '6371054112010011', 'BANJARMASIN', '2001-12-01', '-Pilih-', '-', 'Jl.AIS NASUTION Gg.SAMUDIN RT.011/002 GADANG KEC.BANJARMASIN TENGAH KOTA BANJARMASIN', 'BELUM KAWIN'),
(17, '70', 'BANJARMASIN BARAT', 'KALIMANTAN SELATAN', '2022-01-26', 'NURAHMAN', 'ASLAM (Alm)', '6371010107990533', 'BANJARMASIN', '1999-07-01', 'Laki-Laki', 'BURUH HARIAN LEPAS', 'Jl.BASIRIH DALAM HANDIL PALUNG RT.25/002BASIRIH SELATAN', 'BELUM KAWIN', 'RAHIMAH', 'SARIPUDIN', '6371035212020017', 'BANJARMASIN', '2002-12-12', 'Perempuan', '-', 'Jl.IR.PHM.NOOR RT.56/004 PELAMBUAN KEC.BANJARMASIN BARAT KOTA BANJARMASIN', 'BELUM KAWIN'),
(18, '71', 'BANJARMASIN UTARA', 'KALIMANTAN SELATAN', '2022-01-26', 'SRI WAHYUNI', 'YUSBANI', '6371015003990002', 'BANJARMASIN', '1999-03-10', 'Perempuan', 'SWASTA', 'Jl.KELAYAN A Gg.AKUR No.12 RT.02/001 KELAYAN DALAM', 'BELUM KAWIN', 'MUHAMMAD NOVIAN NOOR ISLAMY', 'BAMBANG PRIATNA MURDJANI,S.Hut', '6372050510990003', 'BANJARBARU', '1999-11-05', 'Laki-Laki', 'SWASTA', 'Jl.MATARAM No.5 KOMP.PINUS BARU RT.002/001 MENTAOS KEC.BANJARBARU UTARA KOTA BANJARBARU', 'BELUM KAWIN'),
(19, '72', 'MARABAHAN', 'KALIMANTAN SELATAN', '2022-01-26', 'ANGGI PUTRA WIGUNA', 'SATIMIN', '6371010104960011', 'BANJARMASIN', '1996-04-01', 'Laki-Laki', '-', 'Jl.PRONA III Gg.MANDALA No.10 RT.26/002 PEMURUS BARU', 'BELUM KAWIN', 'DHIA ZULFA SALSABILA', 'BAHTIAR EFENDI', '6304154810950004', 'BARAMBAI KOLAM KIRI', '1995-10-08', 'Perempuan', '-', 'KEC.MARABAHAN KAB.BARITO KUALA', 'BELUM KAWIN'),
(20, '073', 'KERTAK HANYAR', 'KALIMANTAN SELATAN', '2022-01-26', 'ALI AKHMADI', 'AGUS PRIBADI', '6303023108980001', 'KERTAK HANYAR', '1998-08-31', 'Laki-Laki', 'SWASTA', 'JL.AMD XI KOMP.PEMURUS INDAH RT. 27 RW.03 ', 'BELUM KAWIN', 'RYCA INDRA MAKHROJA', 'AHMAD BUDI HENDRAWAN', '6371045001010008', 'BANJARMASIN', '2001-01-10', 'Perempuan', '-', 'JL.SUNGAI ANDAI KOMP>HERLINA P.BLOK D2/54 RT.45 RW.03 KEL.SUNGAI ANDAI KEC.BANJARMASIN UTARA KOTA BANJARMASIN', 'BELUM KAWIN'),
(21, '74', 'BANJARMASIN TIMUR', 'KALIMANTAN SELATAN', '2022-01-26', 'REIHAN FADILAH', 'SUGIAN NOOR', '6371012106010011', 'BATU LICIN', '2001-06-21', 'Laki-Laki', 'SWASTA', 'JL.KELAYAN B GG. JAIS RT 09/01', 'BELUM KAWIN', 'MARINI', 'ZAINAL ABIDIN', '6371025103010006', 'BANJARMASIN', '2001-03-10', 'Perempuan', 'SWASTA', 'JL.PEKAPURAN RAYA GG.KERAMAT RT.028/02', 'BELUM KAWIN'),
(22, '76', 'BANJARMASIN UTARA', 'KALIMANTAN SELATAN', '2022-01-28', 'AMRULLAH', 'MAJEDI', '6371010403940012', 'BANJARMASIN', '1994-03-04', 'Laki-Laki', '-', 'Jl.SIMP.SUNGAI JELAI RT.20/001 MANTUIL', 'BELUM KAWIN', 'HAFIZAH', 'FITRIA WAHDINI', '6371044808020001', 'BANJARMASIN', '2002-08-08', 'Perempuan', '-', 'Jl.ALALAK TENGAH RT.01/001 KEC.BANJARMASIN UTARA KOTA BANJARMASIN', 'BELUM KAWIN'),
(23, '80', 'KARANG INTAN', 'KALIMANTAN SELATAN', '2022-02-02', 'EDRIAN', 'ARDIANSYAH', '6371011206960009', 'BANJARMASIN', '1995-06-12', 'Laki-Laki', 'WIRASWASTA', 'Jl.9 OKTOBER Gg.JEMAAH II SEI.PAHALAU RT.011/002 PEKAUMAN', 'BELUM KAWIN', 'ISNAWATI', 'NURDIN', '63030513000006', 'MANDIANGIN', '2000-11-10', 'Perempuan', '-', 'Jl.IR.PM.NOOR RT.30/001 MANDIANGIN TIMUR KEC.KARANG INTAN KAB.BANJAR', 'BELUM KAWIN'),
(24, '81', 'BANJARMASIN BARAT', 'KALIMANTAN SELATAN', '2022-02-02', 'ASANAWI', 'BURHAN', '6371011910000056', 'BANJARMASIN', '1998-02-03', 'Laki-Laki', 'SWASTA', 'JL.KELAYAN B GG.GEMBIRA RT.002/003', 'BELUM KAWIN', 'FITRIANI', 'BAHRUL', '6371056405010068', 'BANJARMASIN', '1999-02-03', 'Perempuan', 'SWASTA', 'JL.KELAYAN B GG SEPAKAT RT 0002', 'BELUM KAWIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_daftar_nikah`
--
ALTER TABLE `tbl_daftar_nikah`
  ADD PRIMARY KEY (`id_nikah`);

--
-- Indexes for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tbl_ket_belum_nikah`
--
ALTER TABLE `tbl_ket_belum_nikah`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komen`) USING BTREE;

--
-- Indexes for table `tbl_rekom_nikah`
--
ALTER TABLE `tbl_rekom_nikah`
  ADD PRIMARY KEY (`id_rekom`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_daftar_nikah`
--
ALTER TABLE `tbl_daftar_nikah`
  MODIFY `id_nikah` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_ket_belum_nikah`
--
ALTER TABLE `tbl_ket_belum_nikah`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tbl_rekom_nikah`
--
ALTER TABLE `tbl_rekom_nikah`
  MODIFY `id_rekom` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
