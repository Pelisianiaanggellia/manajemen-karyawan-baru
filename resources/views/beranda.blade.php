<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Karyawan - PT MAS</title>
    <!-- Bootstrap untuk tampilan modern -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("{{ asset('images/bg4.jpg') }}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: inherit;
            filter: blur(1px);
            z-index: -1;
            transform: scale(1.05);
        }

        .navbar {
            background: #ffffff;
            border-bottom: 2px solid #28a745;
        }

        .profile-header {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .menu-card {
            border: none;
            border-radius: 15px;
            transition: 0.3s;
            cursor: pointer;
            height: 100%;
        }

        .menu-card:hover {
            background-color: #e8f5e9;
            transform: translateY(-5px);
        }

        .avatar {
            width: 50px;
            height: 50px;
            background: #28a745;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
        }

        .bot-section {
            background: #212529;
            color: white;
            border-radius: 15px;
            padding: 25px;
        }

        /* --- Konfigurasi Dropdown Menu Profil --- */
        .dropdown-menu {
            border-radius: 12px !important;
            /* Membuat sudut kotak menu melengkung halus */
            padding: 8px !important;
            /* Memberi ruang antara tepi kotak dengan isi menu */
            min-width: 180px;
            /* Lebar minimal kotak menu agar tidak terlalu sempit */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
            /* Efek bayangan agar menu terlihat melayang (modern) */
        }

        /* --- Styling Item/Pilihan di Dalam Menu --- */
        .dropdown-item {
            border-radius: 8px;
            /* Sudut melengkung pada highlight saat kursor diarahkan */
            padding: 10px 15px;
            /* Luas area klik menu (Atas-Bawah 10px, Kiri-Kanan 15px) */
            font: 500 14px 'Segoe UI';
            /* Mengatur ketebalan, ukuran, dan jenis font sekaligus */
            color: #444;
            /* Warna teks abu-abu gelap agar tegas dan mudah dibaca */
            transition: 0.2s;
            /* Durasi animasi halus saat kursor menyentuh menu */
        }

        /* --- Efek Interaksi (Hover) --- */
        .dropdown-item:hover {
            background: #f8f9fa;
            /* Warna latar belakang saat kursor menyentuh menu */
            color: #28a745;
            /* Warna teks berubah hijau sesuai identitas Mukti Plantation */
        }

        /* --- Pengaturan Ikon & Tombol Bahaya --- */
        .dropdown-item i {
            width: 20px;
            margin-right: 10px;
            color: #6c757d;
        }

        /* Jarak dan warna ikon */
        .dropdown-item.text-danger:hover {
            background: #fff5f5;
            color: #dc3545 !important;
        }
    </style>
</head>

<body>

    <!-- Navigasi Atas -->
    <!-- Navigasi Atas -->
    <nav class="navbar navbar-expand-lg sticky-top mb-4 py-2">
        <div class="container-fluid px-md-5"> <!-- Pakai container-fluid + padding besar agar seimbang -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" width="40" height="40" class="me-2">
                <span class="fw-bold text-success">MUKTI PLANTATION</span>
            </a>

            <!-- Bagian Bahasa & Profil sekarang didorong maksimal ke kanan -->
            <div class="ms-auto d-flex align-items-center">
                <a href="?lang=id" class="btn btn-sm btn-outline-success me-2">ID</a>
                <a href="?lang=en" class="btn btn-sm btn-outline-secondary me-3">EN</a>

                <!-- Dropdown Profil Andi -->
                <div class="dropdown border-start ps-3">
                    <div class="d-flex align-items-center" id="dropdownProfile" data-bs-toggle="dropdown"
                        aria-expanded="false" style="cursor: pointer;">
                        <div class="text-end me-2">
                            <div class="fw-bold small">Andi Wijaya</div>
                            <div class="text-muted" style="font-size: 10px;">NIK: 2024001</div>
                        </div>
                        <div class="avatar" style="width: 40px; height: 40px; font-size: 16px;">AW</div>
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="dropdownProfile">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <span class="me-2">⚙️</span> Pengaturan Profil
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                <span class="me-2">🚪</span> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    </nav>

    <div class="container">
        <!-- Header Profil -->
        <div class="profile-header mb-4">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="mb-0">Selamat Datang, Andi!</h4>
                    <p class="text-muted mb-0">Staff Operasional - Wilayah Sekucing Labai</p>
                </div>
            </div>
        </div>

        <!-- Grid Menu Utama (Poin 2, 3, 4 dari Sketsa) -->
        <div class="row g-4">
            <!-- Poin 2: Absensi & Kalender -->
            <div class="col-md-4">
                <div class="card p-4 menu-card shadow-sm text-center">
                    <div class="fs-1 mb-2">📅</div>
                    <h5>Absensi & Kalender</h5>
                    <p class="small text-muted">Pantau kehadiranmu. Status: <strong>Hadir</strong>,
                        <strong>Izin</strong>, atau <strong>Alfa</strong>.
                    </p>
                    <button class="btn btn-success w-100 mt-2">Presensi Sekarang</button>
                </div>
            </div>

            <!-- Poin 3: Pengajuan Izin -->
            <div class="col-md-4">
                <div class="card p-4 menu-card shadow-sm text-center">
                    <div class="fs-1 mb-2">📝</div>
                    <h5>Pengajuan Izin</h5>
                    <p class="small text-muted">Ajukan izin kerja dan cek statusnya apakah <strong>Disetujui</strong>
                        atau <strong>Ditolak</strong>.</p>
                    <button class="btn btn-warning w-100 mt-2 text-white">Buat Pengajuan</button>
                </div>
            </div>

            <!-- Poin 4: Aturan Perusahaan -->
            <div class="col-md-4">
                <div class="card p-4 menu-card shadow-sm text-center">
                    <div class="fs-1 mb-2">🏢</div>
                    <h5>Aturan Perusahaan</h5>
                    <p class="small text-muted">Lihat kebijakan perusahaan mengenai operasional kebun dan jam kerja.</p>
                    <button class="btn btn-outline-secondary w-100 mt-2">Lihat Aturan</button>
                </div>
            </div>
        </div>

        <!-- Chatbot AI NLP (Bagian bawah sketsa) -->
        <div class="bot-section mt-5 shadow-lg d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-1">🤖 Asisten AI PT MAS (NLP)</h5>
                <p class="mb-0 small opacity-75">Tanya saya tentang data diri atau info perusahaan.</p>
            </div>
            <button class="btn btn-light px-4 fw-bold">Tanya NLP</button>
        </div>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
