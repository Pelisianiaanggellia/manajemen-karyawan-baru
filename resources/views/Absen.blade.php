<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

<div class="container py-4" style="background-color: #f8f9fa; min-height: 100vh;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Detail Kehadiran</h4>
            <small class="text-muted">Pantau jadwal dan riwayat absen kamu</small>
        </div>
        <a href="{{ url('/') }}" class="btn btn-white shadow-sm border-0 rounded-pill px-4">
            <i class="bi bi-house-door me-2"></i>Beranda
        </a>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 p-3">
                <div id="calendar"></div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-body">
                    <h6 class="fw-bold mb-3">Ringkasan April 2026</h6>
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-success-subtle p-2 me-3">
                            <i class="bi bi-check-circle text-success"></i>
                        </div>
                        <div>
                            <p class="mb-0 small text-muted">Hadir</p>
                            <span class="fw-bold">28 Hari</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-warning-subtle p-2 me-3">
                            <i class="bi bi-exclamation-triangle text-warning"></i>
                        </div>
                        <div>
                            <p class="mb-0 small text-muted">Izin/Sakit</p>
                            <span class="fw-bold">2 Hari</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h6 class="fw-bold mb-3 text-danger">Catatan Ketidakhadiran</h6>
                    <div class="border-start border-3 border-warning ps-3">
                        <p class="mb-1 fw-bold small">05 - 06 April 2026</p>
                        <p class="text-muted small mb-0">Izin Sakit (Gejala Typus).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/locales/id.global.min.js"></script>

<style>
    body {
        background-color: #f8f9fa;
        overflow-x: hidden;
    }

    /* 1. Perbaikan Kotak Putih (Card) */
    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        background: #fff;
    }

    /* 2. Mengecilkan ukuran teks hari agar tidak meluber */
    .fc-col-header-cell-cushion {
        padding: 10px 2px !important;
        font-size: 0.75rem;
        /* Ukuran teks hari dikecilkan sedikit */
        font-weight: 700;
        color: #444;
        text-transform: uppercase;
        text-decoration: none !important;
    }

    /* 3. Menyesuaikan tinggi kotak tanggal */
    .fc-daygrid-day-frame {
        min-height: 85px !important;
    }

    /* 4. Menghilangkan garis bawah pada angka */
    .fc-daygrid-day-number {
        text-decoration: none !important;
        font-size: 0.85rem;
        padding: 8px !important;
        color: #888;
    }

    /* Agar kalender pas dengan lebar card */
    #calendar {
        max-width: 100%;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'id',
            height: 'auto', // Ini wajib biar kotak putihnya narik ke bawah mengikuti isi
            contentHeight: 'auto',
            dayHeaderFormat: {
                weekday: 'long'
            },

            // Pengaturan header agar lebih rapi
            headerToolbar: {
                left: 'title',
                center: '',
                right: 'today prev,next'
            },

            events: [{
                    title: 'Hadir',
                    start: '2026-05-01',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-04',
                    color: '#198754'
                },
                {
                    title: 'Sakit',
                    start: '2026-04-05',
                    end: '2026-04-07',
                    color: '#ffc107',
                    textColor: '#000'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-07',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-08',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-09',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-10',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-11',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-12',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-13',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-14',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-15',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-16',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-17',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-18',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-19',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-20',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-21',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-22',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-23',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-24',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-25',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-26',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-27',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-28',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-29',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-30',
                    color: '#198754'
                }
            ]
        });
        calendar.render();
    });
</script>

<style>
    /* Agar header hari tidak terlalu sempit karena namanya panjang */
    .fc-col-header-cell-cushion {
        text-transform: capitalize;
        padding: 10px 0 !important;
        font-size: 0.9rem;
        text-decoration: none !important;
        color: #444;
    }

    /* Biar angka tanggal tetap bersih tanpa garis bawah */
    .fc-daygrid-day-number {
        text-decoration: none !important;
        padding: 5px 10px !important;
    }
</style>
