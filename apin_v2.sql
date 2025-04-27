-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2025 at 06:44 PM
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
-- Database: `apin_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `category_order` varchar(255) NOT NULL,
  `show_on_menu` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_02_25_063743_create_pages_table', 2),
(6, '2025_03_06_015040_create_page_items_table', 3),
(7, '2025_04_27_065604_create_categories_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `type`, `title`, `slug`, `description`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(10, 'About', 'Tentang', 'tentang', '<?xml encoding=\"utf-8\" ?><?xml encoding=\"utf-8\" ?><?xml encoding=\"utf-8\" ?><?xml encoding=\"utf-8\" ?><?xml encoding=\"utf-8\" ?><?xml encoding=\"utf-8\" ?><!--?xml encoding=\"utf-8\" ?--><!--?xml encoding=\"utf-8\" ?--><!--?xml encoding=\"utf-8\" ?--><h2 class=\"\" style=\"text-align: center; \">Sejarah Berdirinya Perusahaan</h2><p style=\"text-align: justify; \">Asosiasi Peneliti dan Inovasi Nusantara (APIN) didirikan sebagai wadah kolaboratif yang bertujuan untuk mendukung publikasi ilmiah serta pengembangan kapasitas akademik di Indonesia. Dengan meningkatnya kebutuhan akan publikasi berkualitas di tingkat nasional dan internasional, APIN hadir untuk menjembatani akademisi, peneliti, dan mahasiswa dalam menghasilkan serta mengelola karya ilmiah yang bermutu tinggi. Selain itu, APIN juga membuka peluang kerjasama dalam tata kelola jurnal akademik dan pendampingan indeksasi jurnal guna membantu institusi akademik mencapai standar yang lebih tinggi dalam publikasi ilmiah.</p><h2 class=\"\" style=\"text-align: center; \">Visi dan Misi Perusahaan</h2><p style=\"text-align: center; \"><b>Visi</b><span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><br></span></p><p style=\"text-align: justify; \"><span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Menjadi pusat unggulan dalam pengelolaan dan publikasi ilmiah yang berkontribusi pada kemajuan ilmu pengetahuan serta inovasi di Indonesia.</span></p><p style=\"text-align: center; \"><span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><b>Misi</b></span></p><p style=\"text-align: center; \">Memfasilitasi dosen dan mahasiswa dalam menghasilkan karya ilmiah berkualitas.</p><p style=\"text-align: center;\">Meningkatkan kualitas jurnal dan reputasi akademik para penulis.</p><p style=\"text-align: center;\">Memberikan kontribusi nyata terhadap pengembangan ilmu pengetahuan.</p><p style=\"text-align: center;\">Memperluas akses terhadap hasil penelitian yang memiliki nilai akademik dan aplikatif tinggi.</p><p style=\"text-align: center;\">Menyediakan layanan konsultasi dan pendampingan untuk akreditasi jurnal.</p><p style=\"text-align: center;\">Membuka peluang kerjasama untuk tata kelola jurnal akademik dan pendampingan indeksasi jurnal.</p>\n', '/uploads/images/1745683124_680d02b4678ae.jpg', 1, '2025-03-06 19:23:36', '2025-04-26 08:58:44'),
(12, 'About', 'Layanan', 'layanan', '<?xml encoding=\"utf-8\" ?><!--?xml encoding=\"utf-8\" ?--><h2 class=\"\" style=\"text-align: center; \">Layanan yang Ditawarkan</h2><p style=\"text-align: center; \">APIN menyediakan berbagai layanan yang berfokus pada pengelolaan dan publikasi jurnal ilmiah, antara lain:</p>\n', NULL, 1, '2025-03-06 20:34:29', '2025-03-06 21:07:52'),
(13, 'Services', 'Faq', 'faq', '<?xml encoding=\"utf-8\" ?><div class=\"accordion accordion-flush\" id=\"accordionFlushExample\">\r\n    <!-- Item 1 -->\r\n    <div class=\"accordion-item\">\r\n        <h2 class=\"accordion-header\" id=\"flush-headingOne\">\r\n            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseOne\" aria-expanded=\"false\" aria-controls=\"flush-collapseOne\">\r\n                Apa itu APIN?\r\n            </button>\r\n        </h2>\r\n        <div id=\"flush-collapseOne\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-headingOne\" data-bs-parent=\"#accordionFlushExample\">\r\n            <div class=\"accordion-body\">\r\n                APIN (Asosiasi Peneliti dan Inovasi Nusantara) adalah organisasi yang bergerak dalam mendukung penelitian dan inovasi di Indonesia melalui pengelolaan jurnal ilmiah, publikasi, dan pengembangan jaringan kerja sama dengan institusi akademik.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <!-- Item 2 -->\r\n    <div class=\"accordion-item\">\r\n        <h2 class=\"accordion-header\" id=\"flush-headingTwo\">\r\n            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseTwo\" aria-expanded=\"false\" aria-controls=\"flush-collapseTwo\">\r\n                Apa tujuan APIN?\r\n            </button>\r\n        </h2>\r\n        <div id=\"flush-collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-headingTwo\" data-bs-parent=\"#accordionFlushExample\">\r\n            <div class=\"accordion-body\">\r\n                APIN bertujuan untuk memajukan kualitas penelitian dan inovasi di Indonesia dengan menyediakan platform publikasi ilmiah yang kredibel serta memperluas kolaborasi antar peneliti dan institusi.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <!-- Item 3 -->\r\n    <div class=\"accordion-item\">\r\n        <h2 class=\"accordion-header\" id=\"flush-headingThree\">\r\n            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseThree\" aria-expanded=\"false\" aria-controls=\"flush-collapseThree\">\r\n                Siapa yang dapat bergabung dengan APIN?\r\n            </button>\r\n        </h2>\r\n        <div id=\"flush-collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-headingThree\" data-bs-parent=\"#accordionFlushExample\">\r\n            <div class=\"accordion-body\">\r\n                Peneliti, akademisi, mahasiswa, dan institusi akademik yang memiliki minat dalam pengembangan ilmu pengetahuan dan inovasi dapat bergabung atau bekerja sama dengan APIN.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <!-- Item 4 -->\r\n    <div class=\"accordion-item\">\r\n        <h2 class=\"accordion-header\" id=\"flush-headingFour\">\r\n            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseFour\" aria-expanded=\"false\" aria-controls=\"flush-collapseFour\">\r\n                Bagaimana cara mengirimkan artikel ke jurnal APIN?\r\n            </button>\r\n        </h2>\r\n        <div id=\"flush-collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-headingFour\" data-bs-parent=\"#accordionFlushExample\">\r\n            <div class=\"accordion-body\">\r\n                Anda dapat mengunjungi halaman \"Panduan Penulis\" di website kami untuk informasi lebih lanjut mengenai proses pengiriman artikel, format, dan persyaratan lainnya.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <!-- Item 5 -->\r\n    <div class=\"accordion-item\">\r\n        <h2 class=\"accordion-header\" id=\"flush-headingFive\">\r\n            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseFive\" aria-expanded=\"false\" aria-controls=\"flush-collapseFive\">\r\n                Apakah ada biaya untuk publikasi?\r\n            </button>\r\n        </h2>\r\n        <div id=\"flush-collapseFive\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-headingFive\" data-bs-parent=\"#accordionFlushExample\">\r\n            <div class=\"accordion-body\">\r\n                Kebijakan biaya publikasi tergantung pada jurnal tertentu yang dikelola APIN. Silakan lihat informasi detail pada masing-masing jurnal di website kami.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <!-- Item 6 -->\r\n    <div class=\"accordion-item\">\r\n        <h2 class=\"accordion-header\" id=\"flush-headingSix\">\r\n            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseSix\" aria-expanded=\"false\" aria-controls=\"flush-collapseSix\">\r\n                Bagaimana cara menghubungi APIN?\r\n            </button>\r\n        </h2>\r\n        <div id=\"flush-collapseSix\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-headingSix\" data-bs-parent=\"#accordionFlushExample\">\r\n            <div class=\"accordion-body\">\r\n                Anda dapat menghubungi kami melalui email di [apin.offcl@gmail.com] atau melalui formulir kontak yang tersedia di website.\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>\n', NULL, 1, '2025-03-06 23:56:24', '2025-03-07 19:11:47'),
(14, 'Services', 'Terms & Conditionals', 'terms-conditionals', '<?xml encoding=\"utf-8\" ?><!--?xml encoding=\"utf-8\" ?--><div><h2 style=\"text-align: center; white-space-collapse: preserve;\" class=\"\"><strong>Syarat dan Ketentuan Penggunaan Website APIN</strong></h2>\r\n<p class=\"break-words\" style=\"text-align: center; white-space-collapse: preserve;\">Dengan mengakses dan menggunakan website APIN (Asosiasi Peneliti dan Inovasi Nusantara), Anda setuju untuk mematuhi syarat dan ketentuan berikut:</p>\r\n<ol class=\"marker:text-secondary\">\r\n<li class=\"break-words\"><div style=\"text-align: justify;\"><strong style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\">Penggunaan Konten</strong></div><div style=\"text-align: justify;\"><span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Konten yang tersedia di website ini, termasuk artikel, jurnal, dan informasi lainnya, hanya boleh digunakan untuk keperluan non-komersial, pendidikan, atau penelitian dengan mencantumkan sumber yang sesuai.</span></div></li>\r\n<li class=\"break-words\"><div style=\"text-align: justify;\"><strong style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\">Hak Kekayaan Intelektual</strong></div><div style=\"text-align: justify;\"><span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Seluruh materi yang dipublikasikan di website APIN dilindungi oleh hak cipta. Pengguna dilarang menyalin, mendistribusikan, atau memodifikasi konten tanpa izin tertulis dari APIN atau pemilik hak cipta.</span></div></li>\r\n<li class=\"break-words\"><div style=\"text-align: justify;\"><strong style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\">Pengiriman Karya</strong></div><div style=\"text-align: justify;\"><span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Penulis yang mengirimkan artikel atau karya ilmiah ke APIN setuju untuk memberikan hak publikasi kepada APIN sesuai dengan kebijakan yang berlaku pada jurnal terkait.</span></div></li>\r\n<li class=\"break-words\"><div style=\"text-align: justify;\"><strong style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\">Tanggung Jawab Pengguna</strong></div><div style=\"text-align: justify;\"><span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Pengguna bertanggung jawab atas keakuratan data yang diberikan saat mendaftar atau mengirimkan karya melalui website ini.</span></div></li>\r\n<li class=\"break-words\"><div style=\"text-align: justify;\"><strong style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\">Perubahan Ketentuan</strong></div><div style=\"text-align: justify;\"><span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">APIN berhak mengubah syarat dan ketentuan ini kapan saja tanpa pemberitahuan sebelumnya. Perubahan akan berlaku sejak dipublikasikan di website.</span></div></li></ol></div>\n', NULL, 1, '2025-03-07 00:34:18', '2025-03-07 00:35:53'),
(15, 'Services', 'Privacy Policy', 'privacy-policy', '<?xml encoding=\"utf-8\" ?><h2 style=\"text-align: center; white-space-collapse: preserve;\" class=\"\"><strong>Kebijakan Privasi APIN</strong></h2><p class=\"break-words\" style=\"text-align: center; white-space-collapse: preserve;\">APIN berkomitmen untuk melindungi privasi pengguna website kami. Berikut adalah kebijakan privasi yang berlaku:</p><ol class=\"marker:text-secondary\">\r\n<li class=\"break-words\"><strong>Pengumpulan Data</strong><br>\r\nKami mengumpulkan informasi pribadi seperti nama, alamat email, dan afiliasi institusi saat Anda mendaftar, mengirimkan karya, atau menghubungi kami melalui website. Data ini hanya digunakan untuk keperluan administrasi, komunikasi, dan pengelolaan publikasi.</li>\r\n<li class=\"break-words\"><strong>Penggunaan Data</strong><br>\r\nData yang dikumpulkan akan digunakan untuk:\r\n<ul class=\"marker:text-secondary\">\r\n<li class=\"break-words\">Memproses pengiriman artikel atau karya ilmiah.</li>\r\n<li class=\"break-words\">Mengirimkan pemberitahuan terkait publikasi atau kegiatan APIN.</li>\r\n<li class=\"break-words\">Meningkatkan layanan website kami.</li>\r\n</ul>\r\n</li>\r\n<li class=\"break-words\"><strong>Keamanan Data</strong><br>\r\nKami menerapkan langkah-langkah keamanan untuk melindungi data Anda dari akses yang tidak sah. Namun, tidak ada sistem yang sepenuhnya kebal terhadap risiko keamanan.</li>\r\n<li class=\"break-words\"><strong>Pembagian Data</strong><br>\r\nData pribadi Anda tidak akan dijual atau dibagikan kepada pihak ketiga tanpa persetujuan Anda, kecuali diwajibkan oleh hukum atau untuk keperluan kerja sama dengan institusi akademik yang relevan.</li>\r\n<li class=\"break-words\"><strong>Hak Pengguna</strong><br>\r\nAnda berhak meminta akses, koreksi, atau penghapusan data pribadi Anda dengan menghubungi kami di [<a href=\"mailto://apin.offcl@gmail.com\" target=\"_blank\">apin.offcl@gmail.com</a>]</li>\r\n<li class=\"break-words\"><strong>Perubahan Kebijakan</strong><br>\r\nKebijakan privasi ini dapat diperbarui sewaktu-waktu. Versi terbaru akan selalu tersedia di website APIN.</li></ol>\n', NULL, 1, '2025-03-07 00:42:15', '2025-03-07 00:42:15'),
(16, 'Services', 'Disclaimer', 'disclaimer', '<?xml encoding=\"utf-8\" ?><h2 style=\"text-align: center; white-space-collapse: preserve;\" class=\"\"><strong>Pernyataan Penyangkalan</strong></h2><ol class=\"marker:text-secondary\">\r\n<li class=\"break-words\"><strong>Keakuratan Informasi</strong><br>\r\nAPIN berupaya menyediakan informasi yang akurat dan terkini di website ini. Namun, kami tidak menjamin bahwa semua konten bebas dari kesalahan atau sesuai dengan kebutuhan spesifik pengguna.</li>\r\n<li class=\"break-words\"><strong>Tanggung Jawab Pengguna</strong><br>\r\nPenggunaan informasi dari website ini merupakan tanggung jawab pengguna sepenuhnya. APIN tidak bertanggung jawab atas kerugian atau dampak yang timbul akibat penggunaan informasi dari website kami.</li>\r\n<li class=\"break-words\"><strong>Tautan Eksternal</strong><br>\r\nWebsite APIN mungkin berisi tautan ke situs eksternal yang tidak dikelola oleh kami. APIN tidak bertanggung jawab atas isi, keakuratan, atau kebijakan dari situs tersebut.</li>\r\n<li class=\"break-words\"><strong>Publikasi Ilmiah</strong><br>\r\nArtikel dan karya ilmiah yang dipublikasikan melalui APIN adalah tanggung jawab penulis. APIN tidak bertanggung jawab atas opini atau temuan yang terkandung dalam publikasi tersebut.</li>\r\n</ol>\n', NULL, 1, '2025-03-07 00:43:49', '2025-03-07 00:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `page_items`
--

CREATE TABLE `page_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_items`
--

INSERT INTO `page_items` (`id`, `page_id`, `title`, `slug`, `description`, `image`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 12, 'Publikasi Artikel Ilmiah', 'publikasi-artikel-ilmiah', '<?xml encoding=\"utf-8\" ?><!--?xml encoding=\"utf-8\" ?--><h2 class=\"\" style=\"text-align: center; \">Publikasi Artikel Ilmiah di Jurnal Nasional dan Internasional</h2><p style=\"text-align: center; \">APIN memfasilitasi peneliti dan akademisi untuk mempublikasikan karya ilmiah mereka di jurnal-jurnal terpercaya, baik nasional maupun internasional. Kami membantu proses pengiriman, penyuntingan, dan penyesuaian artikel agar memenuhi standar publikasi yang dituju, sehingga karya Anda dapat diakui secara luas.</p>\n', NULL, 1, 1, '2025-03-06 20:36:01', '2025-03-07 18:20:07'),
(4, 12, 'Pembuatan dan Pengelolaan OJS', 'pembuatan-dan-pengelolaan-ojs', '<?xml encoding=\"utf-8\" ?><?xml encoding=\"utf-8\" ?><h2 style=\"text-align: center; \" class=\"\">Pembuatan dan Pengelolaan OJS (Open Journal System) untuk Institusi Akademik</h2><p style=\"text-align: center; \">Kami menawarkan layanan pembuatan dan pengelolaan platform Open Journal System (OJS) yang profesional dan user-friendly untuk institusi akademik. Layanan ini mencakup instalasi, konfigurasi, serta dukungan teknis berkelanjutan agar institusi dapat mengelola jurnal secara mandiri dan efisien.</p>\n', NULL, 2, 1, '2025-03-06 20:36:27', '2025-03-07 18:37:21'),
(5, 12, 'Pendampingan Akreditasi Jurnal', 'pendampingan-akreditasi-jurnal', '<?xml encoding=\"utf-8\" ?><h2 style=\"text-align: center; \" class=\"\">Pendampingan Akreditasi Jurnal</h2><p style=\"text-align: center; \">APIN memberikan pendampingan khusus dalam proses akreditasi jurnal ilmiah, mulai dari pengurusan ISSN, indeksasi di platform internasional seperti Copernicus, hingga pencapaian akreditasi SINTA dan indeksasi lainnya. Tim kami akan memandu Anda langkah demi langkah untuk memenuhi standar yang ditetapkan oleh lembaga akreditasi.</p>\n', NULL, 3, 1, '2025-03-06 20:36:48', '2025-03-07 18:22:24'),
(6, 12, 'Pelatihan dan Workshop', 'pelatihan-dan-workshop', '<?xml encoding=\"utf-8\" ?><h2 style=\"text-align: center; \" class=\"\">Pelatihan dan Workshop tentang Publikasi Ilmiah dan Tata Kelola Jurnal</h2><div style=\"text-align: center; \">Kami menyelenggarakan pelatihan dan workshop interaktif yang mencakup berbagai topik, seperti penulisan artikel ilmiah, tata cara peer-review, etika publikasi, dan pengelolaan jurnal berbasis digital. Program ini dirancang untuk meningkatkan kompetensi peneliti dan pengelola jurnal dalam menghadapi dinamika dunia akademik.</div>\n', NULL, 4, 1, '2025-03-06 20:37:09', '2025-03-07 18:23:14'),
(7, 12, 'Konsultasi dan Strategi Publikasi', 'konsultasi-dan-strategi-publikasi', '<?xml encoding=\"utf-8\" ?><h2 style=\"text-align: center; \" class=\"\">Konsultasi dan Strategi Publikasi untuk Meningkatkan Reputasi Akademik</h2><p style=\"text-align: center; \">APIN menyediakan layanan konsultasi yang membantu individu dan institusi merancang strategi publikasi yang efektif. Mulai dari pemilihan jurnal yang tepat hingga pengembangan portofolio akademik, kami mendampingi Anda untuk membangun reputasi yang kuat di komunitas ilmiah.</p>\n', NULL, 5, 1, '2025-03-06 20:37:50', '2025-03-07 18:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_slug_unique` (`category_slug`);

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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `page_items`
--
ALTER TABLE `page_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_items_slug_unique` (`slug`),
  ADD KEY `page_items_page_id_foreign` (`page_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `page_items`
--
ALTER TABLE `page_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `page_items`
--
ALTER TABLE `page_items`
  ADD CONSTRAINT `page_items_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
