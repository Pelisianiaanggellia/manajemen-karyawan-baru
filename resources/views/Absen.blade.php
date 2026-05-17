<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

<style>
    .btn-custom-efek {
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;
        border-radius: 8px !important;
        background-color: #ffffff !important;
        padding: 10px 25px;
        color: #2D6A3E !important;
    }

    /* Efek saat kursor ke arah tombol: Melayang dan Warna Teks berubah */
    .btn-custom-efek:hover {
        transform: translateY(-5px);
        background-color: #ffffff !important;
        color: #2D6A3E !important;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1) !important;
        border: 1px solid #2D6A3E !important;
    }
</style>

<div class="container py-4" style="background-color: #f8f9fa; min-height: 100vh;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Detail Kehadiran</h4>
            <small class="text-muted">Pantau jadwal dan riwayat absen kamu</small>
        </div>

        <a href="{{ url('/') }}" class="btn btn-white shadow-sm border-0 rounded-pill px-4 btn-custom-efek">
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
                    <h6 class="fw-bold mb-3" id="ringkasan-title">Ringkasan</h6>
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-success-subtle p-2 me-3">
                            <i class="bi bi-check-circle text-success"></i>
                        </div>
                        <div>
                            <p class="mb-0 small text-muted">Hadir</p>
                            <span class="fw-bold" id="total-hadir">0 Hari</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-warning-subtle p-2 me-3">
                            <i class="bi bi-exclamation-triangle text-warning"></i>
                        </div>
                        <div>
                            <p class="mb-0 small text-muted">Izin/Sakit</p>
                            <span class="fw-bold" id="total-izin">0 Hari</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-body">
                    <h6 class="fw-bold mb-3 text-primary">Detail Log Absensi</h6>
                    <div id="detail-log-harian">
                        <p class="text-muted small text-center mb-0">Klik tanggal pada kalender untuk melihat jam masuk
                            & pulang</p>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h6 class="fw-bold mb-3 text-danger">Catatan Ketidakhadiran</h6>
                    <div id="catatan-list">
                        <p class="text-muted small text-center mb-0">-</p>
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

            // DATA STATIS (History April - Mei Awal)
            var staticEvents = [{
                    title: 'Hadir',
                    start: '2026-04-01',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-02',
                    color: '#198754',
                    jamMasuk: '07:25',
                    jamPulang: '15:05'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-03',
                    color: '#198754',
                    jamMasuk: '07:35',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-04',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-05',
                    color: '#198754',
                    jamMasuk: '07:40',
                    jamPulang: '15:10'
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
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-09',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-10',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-11',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-12',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-13',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-14',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-15',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-16',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-17',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-18',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-19',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-20',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-21',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-22',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-23',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-24',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-25',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-26',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-27',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-28',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-29',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-04-30',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-05-01',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-05-02',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-05-03',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                },
                {
                    title: 'Hadir',
                    start: '2026-05-04',
                    color: '#198754',
                    jamMasuk: '07:30',
                    jamPulang: '15:00'
                }
            ];

            // LOGIKA HADIR OTOMATIS (Sampai Hari Ini)
            function generateAutoEvents(existingEvents) {
                let today = new Date();
                today.setHours(0, 0, 0, 0);

                let lastStaticDate = new Date('2026-05-04');
                let iterDate = new Date(lastStaticDate);
                iterDate.setDate(iterDate.getDate() + 1);

                while (iterDate <= today) {
                    let dateStr = iterDate.toISOString().split('T')[0];
                    existingEvents.push({
                        title: 'Hadir',
                        start: dateStr,
                        color: '#198754',
                        jamMasuk: '07:00',
                        jamPulang: '17:00'
                    });
                    iterDate.setDate(iterDate.getDate() + 1);
                }
                return existingEvents;
            }

            var allEvents = generateAutoEvents(staticEvents);

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'id',
                height: 'auto',
                headerToolbar: {
                    left: 'title',
                    center: '',
                    right: 'today prev,next'
                },
                events: allEvents,

                // Fungsi Klik Tanggal untuk Detail Samping
                dateClick: function(info) {
                    let eventFound = allEvents.find(e => e.start === info.dateStr);
                    let logContainer = document.getElementById('detail-log-harian');

                    if (eventFound && eventFound.title === 'Hadir') {
                        logContainer.innerHTML = `
                            <div class="d-flex justify-content-between mb-2">
                                <span class="small text-muted">Tanggal:</span>
                                <span class="small fw-bold text-dark">${info.dateStr}</span>
                            </div>
                            <div class="bg-light p-3 rounded-3 border-start border-3 border-success shadow-sm">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="small text-muted"><i class="bi bi-box-arrow-in-right text-success me-1"></i> Masuk</span>
                                    <span class="fw-bold">${eventFound.jamMasuk}</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="small text-muted"><i class="bi bi-box-arrow-left text-danger me-1"></i> Pulang</span>
                                    <span class="fw-bold">${eventFound.jamPulang}</span>
                                </div>
                            </div>`;
                    } else if (eventFound) {
                        logContainer.innerHTML = `
                            <div class="bg-warning-subtle p-3 rounded-3 border-start border-3 border-warning">
                                <p class="mb-0 small fw-bold">${eventFound.title}</p>
                                <p class="mb-0 small text-muted">${eventFound.keterangan || '-'}</p>
                            </div>`;
                    } else {
                        logContainer.innerHTML =
                            `<p class="text-muted small text-center mb-0">Tidak ada data absensi.</p>`;
                    }
                },

                // Menampilkan teks "Hadir" saja di dalam kotak kalender
                eventContent: function(arg) {
                    let dom = document.createElement('div');
                    dom.classList.add('w-100', 'text-center');
                    dom.innerHTML =
                        `<span style="font-size: 11px; font-weight: bold;">${arg.event.title}</span>`;
                    return {
                        domNodes: [dom]
                    };
                },

                // Update Ringkasan saat ganti bulan
                datesSet: function() {
                    document.getElementById('ringkasan-title').innerText = 'Ringkasan ' + calendar.view
                        .title;

                    let hadir = 0,
                        izin = 0,
                        htmlCatatan = "";
                    let curMonth = calendar.getDate().getMonth();
                    let curYear = calendar.getDate().getFullYear();

                    allEvents.forEach(ev => {
                        let d = new Date(ev.start);
                        if (d.getMonth() === curMonth && d.getFullYear() === curYear) {
                            if (ev.title === 'Hadir') hadir++;
                            else {
                                izin++;
                                htmlCatatan += `
                                <div class="border-start border-3 border-warning ps-3 mb-2">
                                    <p class="mb-0 fw-bold small">${ev.start}</p>
                                    <p class="text-muted small mb-0">${ev.keterangan || ev.title}</p>
                                </div>`;
                            }
                        }
                    });

                    document.getElementById('total-hadir').innerText = hadir + " Hari";
                    document.getElementById('total-izin').innerText = izin + " Hari";
                    document.getElementById('catatan-list').innerHTML = htmlCatatan ||
                        '<p class="text-muted small text-center mb-0">-</p>';
                }
            });

            calendar.render();
        });
    </script>

    <style>
        .fc-col-header-cell-cushion,
        .fc-daygrid-day-number {
            text-decoration: none !important;
            color: #444;
        }

        .fc-event {
            border: none !important;
            cursor: pointer;
        }

        .fc-daygrid-day:hover {
            background-color: #f1f3f5;
            cursor: pointer;
        }
    </style>
</div>
