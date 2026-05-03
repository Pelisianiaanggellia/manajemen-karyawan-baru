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
                    <h6 class="fw-bold mb-3" id="ringkasan-title">Ringkasan April 2026</h6>
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-success-subtle p-2 me-3">
                            <i class="bi bi-check-circle text-success"></i>
                        </div>
                        <div>
                            <p class="mb-0 small text-muted">Hadir</p>
                            <span class="fw-bold" id="total-hadir">28 Hari</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-warning-subtle p-2 me-3">
                            <i class="bi bi-exclamation-triangle text-warning"></i>
                        </div>
                        <div>
                            <p class="mb-0 small text-muted">Izin/Sakit</p>
                            <span class="fw-bold" id="total-izin">2 Hari</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h6 class="fw-bold mb-3 text-danger">Catatan Ketidakhadiran</h6>
                    <div id="catatan-list">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/locales/id.global.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var dataEvents = [{
                    title: 'Hadir',
                    start: '2026-04-01',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-02',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-03',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-04',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-05',
                    color: '#198754'
                },
                {
                    title: 'Sakit',
                    start: '2026-04-06',
                    end: '2026-04-08',
                    color: '#ffc107',
                    textColor: '#000',
                    keterangan: 'Izin Sakit (Demam)'
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
                },
                {
                    title: 'Hadir',
                    start: '2026-05-01',
                    color: '#198754'
                },
                {
                    title: 'Hadir',
                    start: '2026-05-02',
                    color: '#198754'
                }
            ];

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'id',
                height: 'auto',
                headerToolbar: {
                    left: 'title',
                    center: '',
                    right: 'today prev,next'
                },
                events: dataEvents,

                datesSet: function(info) {
                    document.getElementById('ringkasan-title').innerText = 'Ringkasan ' + calendar.view
                        .title;

                    var hadirCount = 0;
                    var izinCount = 0;
                    var listCatatanHtml = ''; // Penampung HTML catatan

                    var currentMonth = calendar.getDate().getMonth();
                    var currentYear = calendar.getDate().getFullYear();

                    dataEvents.forEach(function(event) {
                        var eventStart = new Date(event.start);

                        if (eventStart.getMonth() === currentMonth && eventStart
                            .getFullYear() === currentYear) {
                            if (event.title === 'Hadir') {
                                hadirCount++;
                            } else if (event.title === 'Sakit' || event.title === 'Izin') {
                                var durasi = 1;
                                var tglTampil = '';

                                if (event.end) {
                                    var start = new Date(event.start);
                                    var end = new Date(event.end);
                                    durasi = Math.round((end - start) / (1000 * 60 * 60 * 24));

                                    var options = {
                                        day: '2-digit',
                                        month: 'long',
                                        year: 'numeric'
                                    };
                                    var tglAkhir = new Date(event.end);
                                    tglAkhir.setDate(tglAkhir.getDate() -
                                        1);

                                    tglTampil = start.getDate().toString().padStart(2, '0') +
                                        ' - ' + tglAkhir.toLocaleDateString('id-ID', options);
                                } else {
                                    tglTampil = eventStart.toLocaleDateString('id-ID', {
                                        day: '2-digit',
                                        month: 'long',
                                        year: 'numeric'
                                    });
                                }

                                izinCount += durasi;

                                // Tambahkan ke list catatan
                                listCatatanHtml += `
                                <div class="border-start border-3 border-warning ps-3 mb-3">
                                    <p class="mb-1 fw-bold small">${tglTampil}</p>
                                    <p class="text-muted small mb-0">${event.keterangan || event.title}</p>
                                </div>`;
                            }
                        }
                    });

                    // Update Ringkasan Angka
                    document.getElementById('total-hadir').innerText = hadirCount + ' Hari';
                    document.getElementById('total-izin').innerText = izinCount + ' Hari';

                    // Update List Catatan: Jika kosong tampilkan "-"
                    var catatanContainer = document.getElementById('catatan-list');
                    if (catatanContainer) {
                        catatanContainer.innerHTML = listCatatanHtml ||
                            '<p class="text-muted small text-center mb-0">-</p>';
                    }
                }
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
