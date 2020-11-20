-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 04:10 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rika`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jumlahusaha`
--

CREATE TABLE `jumlahusaha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industri_besar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industri_besar_tk` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industri_kecil` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industri_kecil_tk` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industri_rtangga` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industri_rtangga_tk` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_tk` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rm_makan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rm_makan_tk` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perdagangan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perdagangan_tk` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `angkutan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `angkutan_tk` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lain` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lain_tk` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlahusaha`
--

INSERT INTO `jumlahusaha` (`id`, `user_id`, `periode_id`, `tanggal`, `semester`, `industri_besar`, `industri_besar_tk`, `industri_kecil`, `industri_kecil_tk`, `industri_rtangga`, `industri_rtangga_tk`, `hotel`, `hotel_tk`, `rm_makan`, `rm_makan_tk`, `perdagangan`, `perdagangan_tk`, `angkutan`, `angkutan_tk`, `lain`, `lain_tk`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-09-12', '2', '12 Buah', '757  Orang', '736 Buah', '2.403 Orang', '1.204 Buah', '3.012 Orang', '315 Buah', '1.153 Orang', '96 Buah', '1.034 Orang', '1.295 Buah', '2.214 orang', '125 buah', '251 orang', NULL, NULL, '2020-09-11 02:09:42', '2020-11-19 01:25:59');

-- --------------------------------------------------------

--
-- Table structure for table `kapal`
--

CREATE TABLE `kapal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perahu_motor` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perahu` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keagrariaan`
--

CREATE TABLE `keagrariaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tm_sertifikat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tm_blm_sertifikat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanah_hak_pengelolaan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanah_negara` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanah_bebas` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanah_hak_pakai` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanah_hak_guna_bangunan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanah_hak_guna_usaha` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanah_adat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keagrariaan`
--

INSERT INTO `keagrariaan` (`id`, `user_id`, `periode_id`, `tanggal`, `semester`, `tm_sertifikat`, `tm_blm_sertifikat`, `tanah_hak_pengelolaan`, `tanah_negara`, `tanah_bebas`, `tanah_hak_pakai`, `tanah_hak_guna_bangunan`, `tanah_hak_guna_usaha`, `tanah_adat`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-09-12', '2', NULL, NULL, '85.734 M', NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-12 02:05:25', '2020-11-19 01:22:07');

-- --------------------------------------------------------

--
-- Table structure for table `kependudukan`
--

CREATE TABLE `kependudukan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_kepala_keluarga` int(11) DEFAULT NULL,
  `jml_laki` int(11) DEFAULT NULL,
  `jml_perempuan` int(11) DEFAULT NULL,
  `jml_wni_laki` int(11) DEFAULT NULL,
  `jml_wni_perempuan` int(11) DEFAULT NULL,
  `jml_wna_laki` int(11) DEFAULT NULL,
  `jml_wna_perempuan` int(11) DEFAULT NULL,
  `jml_islam` int(11) DEFAULT NULL,
  `jml_katholik` int(11) DEFAULT NULL,
  `jml_protestan` int(11) DEFAULT NULL,
  `jml_hindu` int(11) DEFAULT NULL,
  `jml_budha` int(11) DEFAULT NULL,
  `jml_penganut_aliran` int(11) DEFAULT NULL,
  `jml_b_0_4` int(11) DEFAULT NULL,
  `jml_b_5_9` int(11) DEFAULT NULL,
  `jml_b_10_14` int(11) DEFAULT NULL,
  `jml_b_15_19` int(11) DEFAULT NULL,
  `jml_b_20_24` int(11) DEFAULT NULL,
  `jml_b_25_29` int(11) DEFAULT NULL,
  `jml_b_30_34` int(11) DEFAULT NULL,
  `jml_b_35_39` int(11) DEFAULT NULL,
  `jml_b_40_up` int(11) DEFAULT NULL,
  `kepadatan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `petani_pemilik` int(11) DEFAULT NULL,
  `petani_penggarap` int(11) DEFAULT NULL,
  `petani_penyekap` int(11) DEFAULT NULL,
  `petani_buruh` int(11) DEFAULT NULL,
  `nelayan` int(11) DEFAULT NULL,
  `pengusaha_sedang` int(11) DEFAULT NULL,
  `pengrajin` int(11) DEFAULT NULL,
  `buruh_industri` int(11) DEFAULT NULL,
  `buruh_bangunan` int(11) DEFAULT NULL,
  `buruh_pertambangan` int(11) DEFAULT NULL,
  `buruh_perkebunan` int(11) DEFAULT NULL,
  `pedagang` int(11) DEFAULT NULL,
  `pengangkutan` int(11) DEFAULT NULL,
  `pns` int(11) DEFAULT NULL,
  `abri` int(11) DEFAULT NULL,
  `pensiun` int(11) DEFAULT NULL,
  `peternak_sapi_perah` int(11) DEFAULT NULL,
  `peternak_sapi_biasa` int(11) DEFAULT NULL,
  `peternak_kerbau` int(11) DEFAULT NULL,
  `peternak_kambing` int(11) DEFAULT NULL,
  `peternak_domba` int(11) DEFAULT NULL,
  `peternak_kuda` int(11) DEFAULT NULL,
  `lain` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kependudukan`
--

INSERT INTO `kependudukan` (`id`, `user_id`, `periode_id`, `tanggal`, `semester`, `jml_kepala_keluarga`, `jml_laki`, `jml_perempuan`, `jml_wni_laki`, `jml_wni_perempuan`, `jml_wna_laki`, `jml_wna_perempuan`, `jml_islam`, `jml_katholik`, `jml_protestan`, `jml_hindu`, `jml_budha`, `jml_penganut_aliran`, `jml_b_0_4`, `jml_b_5_9`, `jml_b_10_14`, `jml_b_15_19`, `jml_b_20_24`, `jml_b_25_29`, `jml_b_30_34`, `jml_b_35_39`, `jml_b_40_up`, `kepadatan`, `petani_pemilik`, `petani_penggarap`, `petani_penyekap`, `petani_buruh`, `nelayan`, `pengusaha_sedang`, `pengrajin`, `buruh_industri`, `buruh_bangunan`, `buruh_pertambangan`, `buruh_perkebunan`, `pedagang`, `pengangkutan`, `pns`, `abri`, `pensiun`, `peternak_sapi_perah`, `peternak_sapi_biasa`, `peternak_kerbau`, `peternak_kambing`, `peternak_domba`, `peternak_kuda`, `lain`, `created_at`, `updated_at`) VALUES
(2, 1, 1, '2020-09-12', '2', 28096, 57233, 57807, 57286, 57757, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, 9830, 10750, 10100, 9080, 8880, 9470, 10030, 11020, NULL, '1403 per Km2', 24, 25, 26, 27, 28, 10, 300, 300, 500, NULL, NULL, 1602, NULL, 3381, 173, 2306, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-11 20:47:51', '2020-11-19 01:22:19'),
(3, 1, 0, '2020-05-08', '1', 11, 22, 33, 44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, 22, 44, 99, 77, 66, 55, 44, 99, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-12 20:53:36', '2020-09-12 21:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `kumum`
--

CREATE TABLE `kumum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggi_pusat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suhu_max_min` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jpp_desa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jpp_kabupaten` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jpp_propinsi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_jumlah_hari` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_banyaknya` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bw_datar_berombak` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bw_berombak_berbukit` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bw_berbukit_bergunung` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kumum`
--

INSERT INTO `kumum` (`id`, `user_id`, `periode_id`, `tanggal`, `semester`, `tinggi_pusat`, `suhu_max_min`, `jpp_desa`, `jpp_kabupaten`, `jpp_propinsi`, `ch_jumlah_hari`, `ch_banyaknya`, `bw_datar_berombak`, `bw_berombak_berbukit`, `bw_berbukit_bergunung`, `created_at`, `updated_at`) VALUES
(18, 1, 3, '2021-01-10', '1', 'aaaasdasadsdsaads', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-09 17:03:53', '2020-11-19 01:03:48'),
(22, 1, 1, '2020-09-16', '2', '183 M. (DPL)', '33 c / 26 c', '14 Km/  1 jam', '07 km/  ¾ jam', '20 Km/  1 jam', '74 hari', '335 mm/ Thn', NULL, NULL, NULL, '2020-09-13 22:41:01', '2020-11-19 01:03:31'),
(25, 1, 6, '2021-09-18', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 00:11:39', '2020-11-19 01:03:41'),
(26, 1, 2, '2020-06-18', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 01:04:02', '2020-11-19 01:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `lain_lain`
--

CREATE TABLE `lain_lain` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lain_lain` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `luas_daerah`
--

CREATE TABLE `luas_daerah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanah_sawah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ts_iteknis` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ts_isteknis` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ts_isederhana` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ts_tadah_hujan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ts_sawah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanah_kering` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tk_pekarangan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tk_tegal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tk_ladang` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tk_penggembalaan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanah_basah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tb_tambak` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tb_rawa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tb_balong` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tb_gambut` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanah_hutan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `th_lebat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `th_belukar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `th_sejenis1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `th_sejenis2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `th_rawa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanah_perkebunan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tp_negara` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tp_swasta` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanah_umum` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tu_lapangan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tu_rekreasi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tu_jalur_hijau` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tu_kuburan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanah_lain_lain` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `luas_daerah`
--

INSERT INTO `luas_daerah` (`id`, `user_id`, `periode_id`, `tanggal`, `semester`, `tanah_sawah`, `ts_iteknis`, `ts_isteknis`, `ts_isederhana`, `ts_tadah_hujan`, `ts_sawah`, `tanah_kering`, `tk_pekarangan`, `tk_tegal`, `tk_ladang`, `tk_penggembalaan`, `tanah_basah`, `tb_tambak`, `tb_rawa`, `tb_balong`, `tb_gambut`, `tanah_hutan`, `th_lebat`, `th_belukar`, `th_sejenis1`, `th_sejenis2`, `th_rawa`, `tanah_perkebunan`, `tp_negara`, `tp_swasta`, `tanah_umum`, `tu_lapangan`, `tu_rekreasi`, `tu_jalur_hijau`, `tu_kuburan`, `tanah_lain_lain`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-09-10', '2', '4558', NULL, '4558', NULL, NULL, NULL, '7220.50', '1886.50', '776.00', '4558.00', NULL, NULL, NULL, NULL, '5,00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15', '5', '275', '10', '3132322', '2020-09-09 18:59:12', '2020-11-19 01:23:17');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_09_08_132523_create_kumum_table', 2),
(6, '2020_09_10_021610_create_luas_daerah_table', 3),
(7, '2020_09_10_071212_create_pemdesa_table', 4),
(8, '2020_09_10_094023_create_prasarana_table', 5),
(9, '2020_09_10_101923_create_pemkec_table', 6),
(11, '2020_09_10_142632_create_pengangkutan_table', 7),
(13, '2020_09_11_072826_create_pjgjalan_table', 8),
(14, '2020_09_11_080818_create_perekonomian_table', 9),
(15, '2020_09_11_095229_create_jumlahusaha_table', 10),
(16, '2020_09_11_103037_create_saranasosbud_table', 11),
(17, '2020_09_12_024543_create_pemkecamatan_table', 12),
(19, '2020_09_12_034407_create_kependudukan_table', 13),
(21, '2020_09_12_100324_create_keagrariaan_table', 14),
(22, '2020_09_12_101942_create_tanaman_table', 15),
(23, '2020_11_19_074215_create_periode_table', 16),
(24, '2020_11_20_020140_create_pengairan_table', 17),
(25, '2020_11_20_020646_create_kapal_table', 17),
(26, '2020_11_20_021134_create_perkreditan_table', 18),
(27, '2020_11_20_021331_create_pembangunan_table', 18),
(28, '2020_11_20_024215_create_pangan_table', 19),
(29, '2020_11_20_024931_create_pertambangan_table', 19),
(30, '2020_11_20_025211_create_perikanan_table', 19),
(31, '2020_11_20_025402_create_transportasi_table', 20),
(32, '2020_11_20_025810_create_polkam_table', 20),
(33, '2020_11_20_030612_create_pemilu_table', 20),
(34, '2020_11_20_030829_create_lain_lain_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `pangan`
--

CREATE TABLE `pangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas_bimas_padi_insus` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_bimas_padi_inmum` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_inmas_padi_insus` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_inmas_padi_inmum` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_padi_intensifikasi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_hama_wereng` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_hama_tikus` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_hama_lainnya` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_puso_wereng` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_puso_tikus` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_puso_banjir` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_puso_kekeringan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyalur_urea` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyalur_tps` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyalur_insektisida` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyalur_rodentisida` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `pembangunan`
--

CREATE TABLE `pembangunan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skt_pertanian` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_industri` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_pertambangan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_perhubungan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_perdagangan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_tenaga_kerja` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_pembangunan_daerah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_agama` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_pendidikan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_kesehatan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_perumahan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_hukum` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_pertahanan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_pers` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_teknologi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_aparatur` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_usaha` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skt_alam` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biaya_pusat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biaya_propinsi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biaya_kota` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swadaya` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biaya_luar_negeri` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biaya_lain` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biaya_jumlah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wajib_pbb` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_pbb` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokok_pbb` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tunggakan_pbb` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `realisasi_pbb` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_bdg_energi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_bdg_pangan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_bdg_pertanian` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_bdg_konstruksi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_bdg_material` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_bdg_kerajinan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemdesa`
--

CREATE TABLE `pemdesa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dusun` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rt` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa_swadaya` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa_swakarya` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa_swasembada` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `juara_lomba_kec_1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `juara_lomba_kec_2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `juara_lomba_kec_3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `juara_lomba_kab_1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `juara_lomba_kab_2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `juara_lomba_kab_3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lkmd_1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lkmd_2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lkmd_3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_kpd` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kpd_aktif` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kpd_taktif` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pembina_kpd_kec` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pembina_kpd_otonom` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pembina_kpd_vertikal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemdesa`
--

INSERT INTO `pemdesa` (`id`, `user_id`, `periode_id`, `tanggal`, `semester`, `desa`, `kelurahan`, `dusun`, `rw`, `rt`, `desa_swadaya`, `desa_swakarya`, `desa_swasembada`, `juara_lomba_kec_1`, `juara_lomba_kec_2`, `juara_lomba_kec_3`, `juara_lomba_kab_1`, `juara_lomba_kab_2`, `juara_lomba_kab_3`, `lkmd_1`, `lkmd_2`, `lkmd_3`, `jumlah_kpd`, `kpd_aktif`, `kpd_taktif`, `pembina_kpd_kec`, `pembina_kpd_otonom`, `pembina_kpd_vertikal`, `created_at`, `updated_at`) VALUES
(2, 1, 0, '2020-01-01', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-09 23:47:32', '2020-09-09 23:53:50'),
(4, 1, 1, '2020-09-11', '2', '15 Buah', '5 Buah', '188 Buah', NULL, NULL, '15 Buah', NULL, NULL, 'Desa Cemagi', NULL, NULL, 'Desa Cemagi', NULL, NULL, NULL, NULL, NULL, '100', '40', '60', NULL, NULL, NULL, '2020-09-09 23:52:25', '2020-11-19 01:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `pemilu`
--

CREATE TABLE `pemilu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemilih_pemula` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemilih_non_pemula` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengguna_pemula` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengguna_non_pemula` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hasil_pemilu` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemilu_ot_a` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemilu_ot_1_a` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemilu_ot_b` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemilu_ot_1_b` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemilu_ot_c` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemilu_ot_1_c` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemilih_ab` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemkec`
--

CREATE TABLE `pemkec` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kp_status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kp_tanah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kp_bangunan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kp_tahun` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kp_sdana` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kp_apbn` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kp_inpres` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kp_apbd1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kp_apbd2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kp_lain` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kp_jumlah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kp_tingkat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rc_status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rc_luas` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rc_tahun` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rc_sdana` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rc_apbn` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rc_apbd1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rc_apbd2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rc_swadaya` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rc_jumlah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rc_kondisi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins_vertikal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins_otonom` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins_bumn` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins_jumlah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pegawai_dpk1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pegawai_dpk2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pegawai_daerah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eselon3a` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eselon3b` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eselon4` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eselon5` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipe_kec` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lomba_kec` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lomba_kec_juara1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lomba_kec_juara2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lomba_kec_juara3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemkec`
--

INSERT INTO `pemkec` (`id`, `user_id`, `periode_id`, `tanggal`, `semester`, `kp_status`, `kp_tanah`, `kp_bangunan`, `kp_tahun`, `kp_sdana`, `kp_apbn`, `kp_inpres`, `kp_apbd1`, `kp_apbd2`, `kp_lain`, `kp_jumlah`, `kp_tingkat`, `rc_status`, `rc_luas`, `rc_tahun`, `rc_sdana`, `rc_apbn`, `rc_apbd1`, `rc_apbd2`, `rc_swadaya`, `rc_jumlah`, `rc_kondisi`, `ins_vertikal`, `ins_otonom`, `ins_bumn`, `ins_jumlah`, `pegawai_dpk1`, `pegawai_dpk2`, `pegawai_daerah`, `eselon3a`, `eselon3b`, `eselon4`, `eselon5`, `tipe_kec`, `lomba_kec`, `lomba_kec_juara1`, `lomba_kec_juara2`, `lomba_kec_juara3`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-09-10', '2', 'Milik Pemerintah', '1000 m2', '600 m2', '2009', NULL, NULL, NULL, NULL, 'Rp 1.841.306.000', NULL, 'Rp 1.841.306.000', 'Ya', 'Milik Pemerintah', '276 m2', '2005', NULL, NULL, NULL, 'Rp. 46.398.562', NULL, 'Rp. 46.398.562', 'Baik', NULL, '6 Unit', NULL, NULL, NULL, NULL, '56 Orang', '1 Pejabat', '1 Pejabat', '8 Pejabat', NULL, 'A', NULL, '1 Kali', '5 Kali', '1 Kali', '2020-09-10 03:02:13', '2020-11-19 01:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `pemkecamatan`
--

CREATE TABLE `pemkecamatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_pegawai_ktr` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_pegawai_ktr_gol4` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_pegawai_ktr_gol3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_pegawai_ktr_gol2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_pegawai_ktr_gol1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_non_pegawai_ktr` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_non_pegawai_ktr_gol4` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_non_pegawai_ktr_gol3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_non_pegawai_ktr_gol2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_non_pegawai_ktr_gol1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radio` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin_tik` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meja_kerja` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kursi_kerja` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meja_kursi_tamu` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lemari` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `r_rapat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `r_data` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serba_guna` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balai_pertemuan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kendaraan_roda2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kendaraan_roda4` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin_hitung` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lain` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemkecamatan`
--

INSERT INTO `pemkecamatan` (`id`, `user_id`, `periode_id`, `tanggal`, `semester`, `jml_pegawai_ktr`, `jml_pegawai_ktr_gol4`, `jml_pegawai_ktr_gol3`, `jml_pegawai_ktr_gol2`, `jml_pegawai_ktr_gol1`, `jml_non_pegawai_ktr`, `jml_non_pegawai_ktr_gol4`, `jml_non_pegawai_ktr_gol3`, `jml_non_pegawai_ktr_gol2`, `jml_non_pegawai_ktr_gol1`, `telepon`, `radio`, `mesin_tik`, `meja_kerja`, `kursi_kerja`, `meja_kursi_tamu`, `lemari`, `r_rapat`, `r_data`, `serba_guna`, `balai_pertemuan`, `kendaraan_roda2`, `kendaraan_roda4`, `mesin_hitung`, `lain`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-09-11', '2', '55 Pegawai', '2 Pegawai', '18 Pegawai', '30 Pegawai', '5 Pegawai', NULL, NULL, NULL, NULL, NULL, '2 Buah', NULL, '2 Buah', '85 Buah', '57 Buah', '4 Buah', '15 Buah', '1 Buah', '1 Buah', NULL, NULL, '14 Buah', '4 Buah', NULL, NULL, '2020-09-11 19:19:19', '2020-11-19 01:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `pengairan`
--

CREATE TABLE `pengairan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waduk_baik` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waduk_rusak_dipakai` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waduk_rusak` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dam` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kincir_air` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pompa_air` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_terjun` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sungai` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengangkutan`
--

CREATE TABLE `pengangkutan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `darat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dermaga` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aspal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diperkeras` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motor_air` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sepeda` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delman` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lain_becak` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengangkutan`
--

INSERT INTO `pengangkutan` (`id`, `user_id`, `periode_id`, `tanggal`, `semester`, `darat`, `air`, `dermaga`, `aspal`, `diperkeras`, `tanah`, `motor_air`, `sepeda`, `delman`, `lain_becak`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-09-03', '2', '100 %', NULL, NULL, '345 Km', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-10 07:22:51', '2020-11-19 01:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `perekonomian`
--

CREATE TABLE `perekonomian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ksp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kud` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bkk` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bpkd` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `badan_kredit` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kop_produksi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kop_konsumsi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kop_lain` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasar_umum` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasar_ikan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasar_hewan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasar_bangunan_permanen` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasar_tanpa_bangunan_permanen` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_toko` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_lumbung_desa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stasiun_udara` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stasiun_laut` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stasiun_kereta` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stasiun_bis` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stasiun_oplet` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_telp_umum` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perekonomian`
--

INSERT INTO `perekonomian` (`id`, `user_id`, `periode_id`, `tanggal`, `semester`, `ksp`, `kud`, `bkk`, `bpkd`, `badan_kredit`, `kop_produksi`, `kop_konsumsi`, `kop_lain`, `pasar_umum`, `pasar_ikan`, `pasar_hewan`, `pasar_bangunan_permanen`, `pasar_tanpa_bangunan_permanen`, `jumlah_toko`, `bank`, `jumlah_lumbung_desa`, `stasiun_udara`, `stasiun_laut`, `stasiun_kereta`, `stasiun_bis`, `stasiun_oplet`, `jumlah_telp_umum`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-09-01', '2', '156 Buah', '3 Buah', '6 Buah', NULL, '36 Buah', NULL, NULL, NULL, '15 Buah', NULL, '1 Buah', '29 Buah', '3 Buah', '600 Buah', '15 Buah', NULL, NULL, NULL, NULL, '1 Buah', NULL, NULL, '2020-09-11 00:29:10', '2020-11-19 01:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `perikanan`
--

CREATE TABLE `perikanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bandeng_luas` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bandeng_hasil` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udang_luas` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udang_hasil` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buaya_luas` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buaya_hasil` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kurakura_luas` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kurakura_hasil` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lainnya_luas` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lainnya_hasil` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `semester` int(11) NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id`, `user_id`, `tanggal_mulai`, `tanggal_selesai`, `semester`, `periode`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-07-01', '2020-12-31', 2, 'July 2020 - December 2020', '2020-11-19 00:05:01', '2020-11-19 01:33:28'),
(2, 1, '2020-01-01', '2020-06-30', 1, 'January 2020 - June 2020', '2020-11-19 00:05:33', '2020-11-19 01:33:30'),
(3, 1, '2021-01-01', '2021-06-30', 1, 'January 2021 - June 2021', '2020-11-19 00:10:27', '2020-11-19 01:33:27'),
(6, 1, '2021-07-01', '2021-12-31', 2, 'July 2021 - December 2021', '2020-11-19 00:46:09', '2020-11-19 01:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `perkreditan`
--

CREATE TABLE `perkreditan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bimas` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bimas_jumlah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kik` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kik_jumlah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kmkp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kmkp_jumlah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candak_kulak` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candak_kulak_jumlah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jps` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jps_jumlah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pertambangan`
--

CREATE TABLE `pertambangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol_a` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gol_b` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gol_c` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pjgjalan`
--

CREATE TABLE `pjgjalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_negara` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_propinsi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_kota` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_desa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_jumlah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_kls1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_kls1_r` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_kls2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_kls2_r` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_kls3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_kls3_r` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_kls3a` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_kls3a_r` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_kls4` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_kls4_r` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_klsdesa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_klsdesa_r` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_kls_jumlah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jembatan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jem_beton` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jem_besi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jem_kayu` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jem_lain` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pjgjalan`
--

INSERT INTO `pjgjalan` (`id`, `user_id`, `periode_id`, `tanggal`, `semester`, `j_negara`, `j_propinsi`, `j_kota`, `j_desa`, `j_jumlah`, `j_kls1`, `j_kls1_r`, `j_kls2`, `j_kls2_r`, `j_kls3`, `j_kls3_r`, `j_kls3a`, `j_kls3a_r`, `j_kls4`, `j_kls4_r`, `j_klsdesa`, `j_klsdesa_r`, `j_kls_jumlah`, `jembatan`, `jem_beton`, `jem_besi`, `jem_kayu`, `jem_lain`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-09-10', '2', '25 Km', '14 Km', '148 Km', '175 Km', '362 Km', '80 Km', NULL, '30 Km', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '175 Km', NULL, '280 Km', '35 Buah', '35 Buah', NULL, NULL, NULL, '2020-09-10 23:49:48', '2020-11-19 01:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `polkam`
--

CREATE TABLE `polkam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pencurian_banyak` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pencurian_kerugian` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perampokan_banyak` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perampokan_kerugian` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pembunuhan_banyak` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pembunuhan_kerugian` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemerkosaan_banyak` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemerkosaan_kerugian` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `narkoba_banyak` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `narkoba_kerugian` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lainnya_banyak` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lainnya_kerugian` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_hansip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_menwa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_kemra` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_pos_kamling` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_wni` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_wni_statar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_wni_btatar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_pns` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_pns_statar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_pns_btatar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_pegawai_daerah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_pegawai_daerah_statar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_pegawai_daerah_btatar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ppp_kecamatan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ppp_desa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ppp_kelurahan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golkar_kecamatan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golkar_desa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golkar_kelurahan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdi_kecamatan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdi_desa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdi_kelurahan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_kegiatan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_profesi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_fungsi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_agama_islam` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_agama_kristenp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_agama_kristenk` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_agama_hindu` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_agama_budha` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_kepercayaan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_massa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kmd` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bekas_g30spki` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wnri_pelintas` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wna_pelintas` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa_pelintas` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prasarana`
--

CREATE TABLE `prasarana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balai_desa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kantor_desa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bengkok_sawah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bengkok_kering` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bengkok_tambak` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bengkok_lain` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kas_sawah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kas_kering` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kas_tambak` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kas_rawa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kas_lain` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prasarana`
--

INSERT INTO `prasarana` (`id`, `user_id`, `periode_id`, `tanggal`, `semester`, `balai_desa`, `kantor_desa`, `bengkok_sawah`, `bengkok_kering`, `bengkok_tambak`, `bengkok_lain`, `kas_sawah`, `kas_kering`, `kas_tambak`, `kas_rawa`, `kas_lain`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-09-10', '2', '202 Buah', '20 Buah', NULL, NULL, NULL, NULL, '2160 Ha', NULL, NULL, NULL, NULL, '2020-09-10 01:58:29', '2020-11-19 01:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `saranasosbud`
--

CREATE TABLE `saranasosbud` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tk_sekolah` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tk_murid` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tk_guru` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tk_prasarana` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tk_perpustakaan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdn_sekolah` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdn_murid` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdn_guru` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdn_prasarana` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdn_perpustakaan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpn_sekolah` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpn_murid` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpn_guru` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpn_prasarana` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpn_perpustakaan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpsu_sekolah` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpsu_murid` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpsu_guru` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpsu_prasarana` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpsu_perpustakaan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtan_sekolah` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtan_murid` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtan_guru` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtan_prasarana` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtan_lab` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtan_perpustakaan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtasu_sekolah` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtasu_murid` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtasu_guru` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtasu_prasarana` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtasu_lab` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtasu_perpustakaan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masjid` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surau` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gereja` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kuil` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taman` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pantai` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permandian` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hutan_lindung` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tradisional` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekreasi_lain` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cinderamata` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_sanggar` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_budayawan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_seniman` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bioskop` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penginapan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `restoran` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rsu_pem` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rsu_pem_pengunjung1` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rsu_pem_pengunjung2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rsu_sw` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rsu_sw_pengunjung1` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rsu_sw_pengunjung2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rskp_pem` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rskp_pem_pengunjung1` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rskp_pem_pengunjung2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rskp_sw` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rskp_sw_pengunjung1` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rskp_sw_pengunjung2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bersalin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bersalin_pem` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bersalin_pem_pengunjung1` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bersalin_pem_pengunjung2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bersalin_poli` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bersalin_poli_pengunjung1` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bersalin_poli_pengunjung2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puskesmas` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puskesmas_pengunjung1` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puskesmas_pengunjung2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puskesmas_pengunjung_dokter` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puskesmas_pengunjung_perawat` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puskesmas_pengunjung_bidan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puskesmas_pembantu` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puskesmas_pembantu_dokter` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puskesmas_pembantu_perawat` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puskesmas_pembantu_bidan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokter_umum` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokter_anak` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokter_kandungan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokter_kulit` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokter_lain` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dukun_khitan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dukun_bayi` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sanatorium` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apotik` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `panti_pijat` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_pos_kb` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_pus` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_pus_kb` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_posyandu` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_akseptor` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_akseptor_pil` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_akseptor_iud` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_akseptor_kondom` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_akseptor_suntik` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_akseptor_mop` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_akseptor_mow` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_akseptor_kbmandiri` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cacat_fisik` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cacat_mental` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `saranasosbud`
--

INSERT INTO `saranasosbud` (`id`, `user_id`, `periode_id`, `tanggal`, `semester`, `tk_sekolah`, `tk_murid`, `tk_guru`, `tk_prasarana`, `tk_perpustakaan`, `sdn_sekolah`, `sdn_murid`, `sdn_guru`, `sdn_prasarana`, `sdn_perpustakaan`, `smtpn_sekolah`, `smtpn_murid`, `smtpn_guru`, `smtpn_prasarana`, `smtpn_perpustakaan`, `smtpsu_sekolah`, `smtpsu_murid`, `smtpsu_guru`, `smtpsu_prasarana`, `smtpsu_perpustakaan`, `smtan_sekolah`, `smtan_murid`, `smtan_guru`, `smtan_prasarana`, `smtan_lab`, `smtan_perpustakaan`, `smtasu_sekolah`, `smtasu_murid`, `smtasu_guru`, `smtasu_prasarana`, `smtasu_lab`, `smtasu_perpustakaan`, `masjid`, `surau`, `gereja`, `kuil`, `taman`, `pantai`, `permandian`, `hutan_lindung`, `tradisional`, `rekreasi_lain`, `cinderamata`, `jml_sanggar`, `jml_budayawan`, `jml_seniman`, `bioskop`, `penginapan`, `restoran`, `rsu_pem`, `rsu_pem_pengunjung1`, `rsu_pem_pengunjung2`, `rsu_sw`, `rsu_sw_pengunjung1`, `rsu_sw_pengunjung2`, `rskp_pem`, `rskp_pem_pengunjung1`, `rskp_pem_pengunjung2`, `rskp_sw`, `rskp_sw_pengunjung1`, `rskp_sw_pengunjung2`, `bersalin`, `bersalin_pem`, `bersalin_pem_pengunjung1`, `bersalin_pem_pengunjung2`, `bersalin_poli`, `bersalin_poli_pengunjung1`, `bersalin_poli_pengunjung2`, `puskesmas`, `puskesmas_pengunjung1`, `puskesmas_pengunjung2`, `puskesmas_pengunjung_dokter`, `puskesmas_pengunjung_perawat`, `puskesmas_pengunjung_bidan`, `puskesmas_pembantu`, `puskesmas_pembantu_dokter`, `puskesmas_pembantu_perawat`, `puskesmas_pembantu_bidan`, `dokter_umum`, `dokter_anak`, `dokter_kandungan`, `dokter_kulit`, `dokter_lain`, `dukun_khitan`, `dukun_bayi`, `sanatorium`, `apotik`, `panti_pijat`, `jumlah_pos_kb`, `jumlah_pus`, `jumlah_pus_kb`, `jumlah_posyandu`, `jumlah_akseptor`, `jumlah_akseptor_pil`, `jumlah_akseptor_iud`, `jumlah_akseptor_kondom`, `jumlah_akseptor_suntik`, `jumlah_akseptor_mop`, `jumlah_akseptor_mow`, `jumlah_akseptor_kbmandiri`, `cacat_fisik`, `cacat_mental`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-09-11', '2', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '2221111', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', '99', '100', '101', '2020-09-11 04:18:50', '2020-11-19 01:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `padi_luas_tanaman` int(11) DEFAULT NULL,
  `padi_luas_panen` int(11) DEFAULT NULL,
  `padi_rata2_produksi` int(11) DEFAULT NULL,
  `padi_jumlah` int(11) DEFAULT NULL,
  `jagung_luas_tanaman` int(11) DEFAULT NULL,
  `jagung_luas_panen` int(11) DEFAULT NULL,
  `jagung_rata2_produksi` int(11) DEFAULT NULL,
  `jagung_jumlah` int(11) DEFAULT NULL,
  `ketela_pohon_luas_tanaman` int(11) DEFAULT NULL,
  `ketela_pohon_luas_panen` int(11) DEFAULT NULL,
  `ketela_pohon_rata2_produksi` int(11) DEFAULT NULL,
  `ketela_pohon_jumlah` int(11) DEFAULT NULL,
  `ketela_rambat_luas_tanaman` int(11) DEFAULT NULL,
  `ketela_rambat_luas_panen` int(11) DEFAULT NULL,
  `ketela_rambat_rata2_produksi` int(11) DEFAULT NULL,
  `ketela_rambat_jumlah` int(11) DEFAULT NULL,
  `kacang_tanah_luas_tanaman` int(11) DEFAULT NULL,
  `kacang_tanah_luas_panen` int(11) DEFAULT NULL,
  `kacang_tanah_rata2_produksi` int(11) DEFAULT NULL,
  `kacang_tanah_jumlah` int(11) DEFAULT NULL,
  `kedelai_luas_tanaman` int(11) DEFAULT NULL,
  `kedelai_luas_panen` int(11) DEFAULT NULL,
  `kedelai_rata2_produksi` int(11) DEFAULT NULL,
  `kedelai_jumlah` int(11) DEFAULT NULL,
  `sayur_luas_tanaman` int(11) DEFAULT NULL,
  `sayur_luas_panen` int(11) DEFAULT NULL,
  `sayur_rata2_produksi` int(11) DEFAULT NULL,
  `sayur_jumlah` int(11) DEFAULT NULL,
  `buah_luas_tanaman` int(11) DEFAULT NULL,
  `buah_luas_panen` int(11) DEFAULT NULL,
  `buah_rata2_produksi` int(11) DEFAULT NULL,
  `buah_jumlah` int(11) DEFAULT NULL,
  `lain_luas_tanaman` int(11) DEFAULT NULL,
  `lain_luas_panen` int(11) DEFAULT NULL,
  `lain_rata2_produksi` int(11) DEFAULT NULL,
  `lain_jumlah` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`id`, `user_id`, `periode_id`, `tanggal`, `semester`, `padi_luas_tanaman`, `padi_luas_panen`, `padi_rata2_produksi`, `padi_jumlah`, `jagung_luas_tanaman`, `jagung_luas_panen`, `jagung_rata2_produksi`, `jagung_jumlah`, `ketela_pohon_luas_tanaman`, `ketela_pohon_luas_panen`, `ketela_pohon_rata2_produksi`, `ketela_pohon_jumlah`, `ketela_rambat_luas_tanaman`, `ketela_rambat_luas_panen`, `ketela_rambat_rata2_produksi`, `ketela_rambat_jumlah`, `kacang_tanah_luas_tanaman`, `kacang_tanah_luas_panen`, `kacang_tanah_rata2_produksi`, `kacang_tanah_jumlah`, `kedelai_luas_tanaman`, `kedelai_luas_panen`, `kedelai_rata2_produksi`, `kedelai_jumlah`, `sayur_luas_tanaman`, `sayur_luas_panen`, `sayur_rata2_produksi`, `sayur_jumlah`, `buah_luas_tanaman`, `buah_luas_panen`, `buah_rata2_produksi`, `buah_jumlah`, `lain_luas_tanaman`, `lain_luas_panen`, `lain_rata2_produksi`, `lain_jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-09-09', '2', 7939, 7997, 53273, NULL, 4, 4, NULL, NULL, 80, 44, 1036, NULL, 2, 1, 20, NULL, 27, 34, 57, NULL, 518, 518, 653, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-12 02:39:42', '2020-11-19 01:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `transportasi`
--

CREATE TABLE `transportasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sepeda` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gerobak` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `becak` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roda3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motor` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oplet` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taksi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobil_dinas` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobil_pribadi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `truck` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bus_umum` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bus_kota` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perahu_dayung` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perahu_motor` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perahu_layar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lainnya` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tv_umum` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp_umum` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kantor_pos` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orari` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemancar_radio` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `listrik_pln` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `listrik_non_pln` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdm` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `badan_pengelola_air` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pompa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sumur` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Petugas', 'Administrator', 'admin@gmail.com', NULL, '$2y$10$ghY4BC4mZr.1L0OiHSUw5./KLtx4R6NkS1cjXl3jBEQghqEDnOX8i', 'Mengwi', 'tOlI9IJVlMiHgqCni6FTAJPMBj2is5e2AVlvqsTCU2sZmHbjzmjKI435RNKO', '2020-09-07 23:57:33', '2020-09-07 23:57:33'),
(2, 'Kadis', 'Kepala Dinas', 'kadis@gmail.com', NULL, '$2y$10$zm6IXOd3zuoQ/f9DusCmr.D.IbksHGlr/pGnpw6pL5JxwjdqiCDcq', 'Mengwi', 'rWX6HnDBL89q4jwDEPsrzsXGs0yHkNNUlPjpeyno9afDiUDmbF6FfJHtD0Uz', '2020-09-13 06:43:35', '2020-09-13 06:43:35'),
(3, 'Masyarakat', 'Masyarakat Umum', 'masumum@gmail.com', NULL, '$2y$10$DBvJ0XfgPoQvPx7Y3aw7i.8F10jSZBFErZRlBuhOYw12arbQCdOVS', 'Mengwi', 'gVvG69S58K0ZTL90CA4SDV2zJx6cR0F0r99vkg6GelKRL21rlnsDuD59riZm', '2020-09-13 06:46:12', '2020-09-13 06:46:12'),
(4, 'Petugas', 'Testing', 'testing@gmail.com', NULL, '$2y$10$VRA.uU44Qan4z.2BVLjkSuHwgWY7xOLDMdIvI8mdbBfrTxqKDy7PK', 'testing alamat', 'WbBK2sl5EDMwENJSVwMJJD2DFNO6JNuDuiZdYNfTUV8qi9HKSMKmBKMbHIGu', '2020-09-13 06:50:04', '2020-09-13 06:50:04'),
(5, 'Masyarakat', 'rikaaaaaa', 'rikaaaaa@gmail.com', NULL, '$2y$10$zgvnTiAn0ItaF2gHgee5O.trqUnnlLVPJCz2qQzDy2zQhrEHI2byG', 'Gianyar', '4uGJHvN0qN1PZ1Nu2B0yNy37w0VFPgCFRU6CJw2tRmI1gtKDHagKYOO854k6', '2020-09-17 19:29:30', '2020-09-17 19:29:30'),
(6, 'Petugas', 'Petugas', 'petugas@gmail.com', NULL, '$2y$10$ak2Me/wg5ZXaa28/kCWheuiEPCD5winj47F3ufGV4LWlUDqvmLRGS', 'fsasdffa', 'CxPe9tGvY0ZI31KhkXy2Qa0TdhjOOLxjziZXqJKf0ValAHStYhcCrGIu5qy0', '2020-10-10 20:20:17', '2020-10-10 20:20:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlahusaha`
--
ALTER TABLE `jumlahusaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kapal`
--
ALTER TABLE `kapal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keagrariaan`
--
ALTER TABLE `keagrariaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kependudukan`
--
ALTER TABLE `kependudukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kumum`
--
ALTER TABLE `kumum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lain_lain`
--
ALTER TABLE `lain_lain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `luas_daerah`
--
ALTER TABLE `luas_daerah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pangan`
--
ALTER TABLE `pangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembangunan`
--
ALTER TABLE `pembangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemdesa`
--
ALTER TABLE `pemdesa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemilu`
--
ALTER TABLE `pemilu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemkec`
--
ALTER TABLE `pemkec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemkecamatan`
--
ALTER TABLE `pemkecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengairan`
--
ALTER TABLE `pengairan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengangkutan`
--
ALTER TABLE `pengangkutan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perekonomian`
--
ALTER TABLE `perekonomian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perikanan`
--
ALTER TABLE `perikanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perkreditan`
--
ALTER TABLE `perkreditan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertambangan`
--
ALTER TABLE `pertambangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pjgjalan`
--
ALTER TABLE `pjgjalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polkam`
--
ALTER TABLE `polkam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prasarana`
--
ALTER TABLE `prasarana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saranasosbud`
--
ALTER TABLE `saranasosbud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportasi`
--
ALTER TABLE `transportasi`
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
-- AUTO_INCREMENT for table `jumlahusaha`
--
ALTER TABLE `jumlahusaha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kapal`
--
ALTER TABLE `kapal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keagrariaan`
--
ALTER TABLE `keagrariaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kependudukan`
--
ALTER TABLE `kependudukan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kumum`
--
ALTER TABLE `kumum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `lain_lain`
--
ALTER TABLE `lain_lain`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `luas_daerah`
--
ALTER TABLE `luas_daerah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pangan`
--
ALTER TABLE `pangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembangunan`
--
ALTER TABLE `pembangunan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemdesa`
--
ALTER TABLE `pemdesa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemilu`
--
ALTER TABLE `pemilu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemkec`
--
ALTER TABLE `pemkec`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemkecamatan`
--
ALTER TABLE `pemkecamatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengairan`
--
ALTER TABLE `pengairan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengangkutan`
--
ALTER TABLE `pengangkutan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perekonomian`
--
ALTER TABLE `perekonomian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perikanan`
--
ALTER TABLE `perikanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `perkreditan`
--
ALTER TABLE `perkreditan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertambangan`
--
ALTER TABLE `pertambangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pjgjalan`
--
ALTER TABLE `pjgjalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `polkam`
--
ALTER TABLE `polkam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prasarana`
--
ALTER TABLE `prasarana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `saranasosbud`
--
ALTER TABLE `saranasosbud`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transportasi`
--
ALTER TABLE `transportasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
