<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Karyawan - PT MAS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("{{ asset('images/bg1.jpg') }}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
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
            border-bottom: 2px solid #2D6A3E;
        }

        .profile-header {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .menu-card {
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
        }

        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1) !important;
        }

        .avatar {
            width: 40px;
            height: 40px;
            background: #2D6A3E;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        /* --- PENILAIAN KINERJA --- */
        .nav-performance-card:hover {
            background-color: #ffffff !important;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08) !important;
            transform: translateY(-1px);
            border-color: #198754 !important;
        }

        /* --- PROFIL --- */
        .nav-profile-link:hover .profile-avatar {
            transform: scale(1.05);
            box-shadow: 0 0 0 3px rgba(25, 135, 84, 0.1);
        }

        .nav-profile-link:hover h6 {
            color: #198754 !important;
        }

        /* --- CHATBOT AI --- */
        .bot-card-modern {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 20px 30px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
        }

        .bot-card-modern:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
        }

        .bot-icon-wrapper {
            position: relative;
            background: white;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .online-indicator {
            position: absolute;
            bottom: -2px;
            right: -2px;
            width: 15px;
            height: 15px;
            background: #2D6A3E;
            border: 3px solid white;
            border-radius: 50%;
        }

        .btn-ai-action {
            background: linear-gradient(135deg, #2D6A3E);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .btn-ai-action:hover {
            color: white;
            filter: brightness(1.1);
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
        }

        /* --- KALENDER --- */
        .fc-theme-standard .fc-scrollgrid {
            border: 1.5px solid #888888 !important;
        }

        /* garis hanya pada sisi kanan dan bawah setiap kotak */
        .fc .fc-timegrid-slot,
        .fc .fc-daygrid-day,
        .fc .fc-col-header-cell {
            border-right: 1.5px solid #888888 !important;
            border-bottom: 1.5px solid #888888 !important;
        }

        /* Khusus Header (Min, Sen, dsb) */
        .fc .fc-col-header-cell {
            background-color: #f0f0f0 !important;
        }

        /* Ukuran tombol agar tidak kebesaran */
        .fc .fc-button {
            padding: 4px 8px !important;
            font-size: 0.8rem !important;
            text-transform: capitalize !important;
        }

        /* Menghilangkan garis bawah pada angka tanggal */
        .fc .fc-daygrid-day-number {
            text-decoration: none !important;
            border-bottom: none !important;
        }

        /* Memastikan header hari (Minggu, Senin, dst) tidak ada garis bawah */
        .fc .fc-col-header-cell-cushion {
            text-decoration: none !important;
            display: inline-block;
            padding: 5px 0;
        }

        /* Supaya teks hari yang panjang tidak terpotong */
        .fc .fc-col-header-cell {
            font-size: 0.9rem !important;
        }

        /* untuk Info Libur */
        .holiday-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 15px;
        }

        .holiday-item {
            display: flex;
            align-items: center;
            background: rgba(220, 53, 69, 0.05);
            border-left: 4px solid #ff0000;
            padding: 10px 15px;
            border-radius: 8px;
        }

        .holiday-date {
            font-weight: 700;
            color: #ff0000;
            margin-right: 15px;
            min-width: 50px;
        }

        .holiday-name {
            font-size: 0.85rem;
            color: #333;
            font-weight: 500;
        }

        #info-libur {
            background: none !important;
            border: none !important;
            padding: 0 !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top mb-4 py-2">
        <div class="container-fluid px-md-5">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" width="40" height="40" class="me-2">
                <span class="fw-bold text-success">MUKTI PLANTATION</span>

                <div class="d-flex align-items-center justify-content-end">
                    <a href="{{ route('kinerja.index') }}"
                        class="btn d-flex align-items-center px-3 nav-performance-card"
                        style="background: #ffffff; border-radius: 10px; height: 46px; text-decoration: none; border: 1px solid #f0f0f0; transition: all 0.3s ease;">

                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 32px; height: 32px; font-size: 18px; background-color: #f8f9fa !important;">
                            🏅
                        </div>

                        <div class="ms-2 d-flex flex-column align-items-start">
                            <span class="fw-bold" style="color: #2d3436; font-size: 12px; line-height: 1.1;">Penilaian
                                Kinerja</span>
                        </div>
                    </a>

                    <div class="mx-3" style="border-left: 1px solid #dee2e6; height: 45px;"></div>

                    <div class="dropdown">
                        <div class="d-flex align-items-center nav-profile-link" data-bs-toggle="dropdown"
                            aria-expanded="false" style="cursor: pointer; transition: all 0.2s;">
                            <div class="text-end me-2">
                                <h6 class="mb-0 fw-bold" style="font-size: 13px; color: #2d3436;">Andi Wijaya</h6>
                                <small class="text-muted" style="font-size: 11px;">NIK: 2024001</small>
                            </div>
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center fw-bold shadow-sm profile-avatar"
                                style="width: 35px; height: 35px; font-size: 12px; border: 1px solid #fff;">
                                AW
                            </div>
                        </div>

                        <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2 py-1"
                            style="border-radius: 10px; min-width: 160px;">
                            <li>
                                <a class="dropdown-item py-1 px-3" href="#" style="font-size: 14px;">
                                    <i class="bi bi-gear me-2"></i> Pengaturan
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider my-1">
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="m-0">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger py-1 px-3"
                                        style="font-size: 14px;">
                                        <i class="bi bi-box-arrow-right me-2"></i> Keluar
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
    </nav>

    <div class="container">
        <div class="profile-header mb-4 p-4">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="mb-1">Selamat Datang, Andi!</h4>
                    <p class="text-muted mb-0 small">Staff Operasional - Wilayah Sekucing Labai</p>
                </div>
                <button type="button"
                    class="btn btn-light d-flex align-items-center gap-3 px-3 py-2 border-0 shadow-sm rounded-3"
                    data-bs-toggle="modal" data-bs-target="#calendarModal">
                    <div class="text-end">
                        <h6 class="fw-bold mb-0">
                            {{ \Carbon\Carbon::now()->translatedFormat('j F Y') }}
                        </h6>
                        <p class="text-danger small mb-0">
                            Hari Ini
                        </p>
                    </div>
                    <div class="fs-2">📅</div>
                </button>
            </div>
        </div>
        <div class="row g-4 text-center">

            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <a href="{{ route('absensi.riwayat') }}" class="text-decoration-none text-dark">
                        <div class="card p-4 menu-card shadow-sm h-100">
                            <div class="fs-1 mb-2">⏱️</div>
                            <h5 class="fw-bold">Absensi</h5>

                            <div class="text-start mt-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted small">Status Hari Ini:</span>
                                    <span class="badge bg-success">Hadir</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted small">Jam Masuk:</span>
                                    <span class="fw-bold small">07:00 WIB</span>
                                </div>
                            </div>
                            <div class="btn btn-outline-success w-100 mt-3">
                                Lihat Absen
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('izin.index') }}" class="text-decoration-none text-dark">
                        <div class="card p-4 menu-card shadow-sm h-100">
                            <div class="fs-1 mb-2">📝</div>
                            <h5 class="fw-bold">Pengajuan Izin</h5>

                            <div class="text-start mt-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted small">Status Terakhir:</span>
                                    <span class="badge bg-warning text-dark">Menunggu</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted small">Total Izin Bln Ini:</span>
                                    <span class="fw-bold small">1 Kali</span>
                                </div>
                            </div>

                            <div class="btn btn-outline-warning w-100 mt-3">
                                Buat Pengajuan
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <div class="card p-4 menu-card shadow-sm h-100 border-0 rounded-0">
                        <div class="card-body text-center p-0">
                            <div class="fs-1 mb-2">🏢</div>

                            <h5 class="fw-bold">Aturan Perusahaan</h5>

                            <p class="text-muted small mb-4 mt-3">
                                Pedoman resmi mengenai kebijakan operasional, kode etik, dan hak kewajiban karyawan PT
                                MAS.
                            </p>
                        </div>

                        <a href="{{ url('/aturan') }}" class="btn btn-outline-dark w-100  w-100 mt-3">
                            Lihat Aturan
                        </a>
                    </div>
                </div>

                <div class="modal fade" id="calendarModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content border-0 shadow-lg">
                            <div class="modal-header border-0 bg-light">
                                <h5 class="modal-title fw-bold">📅 Kalender Kerja PT MAS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-3">
                                <div id='calendar'></div>
                                <div class="alert alert-info mt-3 small" id="info-libur">
                                    <strong>Info:</strong> Sedang memuat data libur...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-4 mb-5">
                    <div class="bot-card-modern shadow-sm">
                        <div class="d-flex align-items-center gap-4">
                            <div class="bot-icon-wrapper">
                                <span class="fs-2">🤖</span>
                                <div class="online-indicator"></div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fw-bold mb-1 text-dark">Asisten AI MUKTI</h5>
                                <p class="mb-0 text-muted small">Tanyakan data diri, aturan lembur, atau kebijakan
                                    kebun di
                                    sini.
                                </p>
                            </div>
                            <button class="btn btn-ai-action px-4 py-2">
                                Tanya AI
                            </button>
                        </div>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var calendarEl = document.getElementById('calendar');
                        var infoLiburEl = document.getElementById('info-libur');
                        var calendar;

                        calendar = new FullCalendar.Calendar(calendarEl, {
                            initialView: 'dayGridMonth',
                            height: 'auto',
                            locale: 'id',
                            dayHeaderFormat: {
                                weekday: 'long'
                            },
                            headerToolbar: {
                                left: '',
                                center: 'prev,title,next',
                                right: 'today'
                            },
                            locale: 'id',
                            events: [{
                                    start: '2026-05-01',
                                    display: 'background',
                                    backgroundColor: '#ff0000'
                                },
                                {
                                    start: '2026-05-14',
                                    display: 'background',
                                    backgroundColor: '#ff0000'
                                },
                                {
                                    start: '2026-05-15',
                                    display: 'background',
                                    backgroundColor: '#ff0000'
                                },
                                {
                                    start: '2026-05-27',
                                    display: 'background',
                                    backgroundColor: '#ff0000'
                                },
                                {
                                    start: '2026-05-28',
                                    display: 'background',
                                    backgroundColor: '#ff0000'
                                },
                                {
                                    start: '2026-05-31',
                                    display: 'background',
                                    backgroundColor: '#ff0000'
                                },
                                {
                                    start: '2026-06-01',
                                    display: 'background',
                                    backgroundColor: '#ff0000'
                                }
                            ],
                            datesSet: function(info) {
                                var title = calendar.view.title;
                                if (title.includes("Mei")) {
                                    infoLiburEl.innerHTML = `
                            <div class="text-muted small fw-bold mb-2" style="letter-spacing: 1px;">AGENDA LIBUR NASIONAL</div>
                            <div class="holiday-list">
                                <div class="holiday-item">
                                    <div class="holiday-date">01 Mei</div>
                                    <div class="holiday-name">Hari Buruh Internasional</div>
                                </div>
                                <div class="holiday-item">
                                    <div class="holiday-date">14 Mei</div>
                                    <div class="holiday-name">Kenaikan Isa Al Masih</div>
                                </div>
                                <div class="holiday-item">
                                    <div class="holiday-date">15 Mei</div>
                                    <div class="holiday-name">Cuti Bersama Kenaikan Isa Al Masih</div>
                                </div>
                                <div class="holiday-item">
                                    <div class="holiday-date">27 Mei</div>
                                    <div class="holiday-name">Hari Raya Idul Adha (Lebaran Haji)</div>
                                </div>
                                <div class="holiday-item">
                                    <div class="holiday-date">28 Mei</div>
                                    <div class="holiday-name">Idul Adha (Lebaran Haji)</div>
                                </div>
                                <div class="holiday-item">
                                    <div class="holiday-date">31 Mei</div>
                                    <div class="holiday-name">Hari Raya Waisak</div>
                                </div>
                            </div>`;
                                } else {
                                    infoLiburEl.innerHTML = `
                            <div class="text-center py-3 text-muted small">
                                <em>Tidak ada agenda libur untuk bulan ini.</em>
                            </div>`;
                                }
                            }
                        });

                        // Menangani tampilan kalender di dalam modal agar tidak "blank" atau stuck memuat
                        var myModalEl = document.getElementById('calendarModal');
                        myModalEl.addEventListener('shown.bs.modal', function() {
                            setTimeout(function() {
                                calendar.render();
                                calendar.updateSize();
                            }, 10);
                        });
                    });
                </script>
</body>

</html>
