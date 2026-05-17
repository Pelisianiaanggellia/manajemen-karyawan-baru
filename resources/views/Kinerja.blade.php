<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    body {
        background-color: #f0f2f5;
        font-family: 'Segoe UI', sans-serif;
        color: #333;
    }

    .card-main {
        border-radius: 20px;
        border: none;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
        background: #fff;
    }

    .header-gradient {
        background: linear-gradient(135deg, #198754 0%, #146c43 100%);
        color: white;
        border-radius: 20px 20px 0 0;
        padding: 30px;
    }

    .stat-card {
        background: #f8f9fa;
        border-radius: 15px;
        padding: 15px;
        border-left: 5px solid #198754;
    }

    .table-absensi thead {
        background-color: #f8f9fa;
    }

    .badge-ontime {
        background-color: #d1e7dd;
        color: #0f5132;
        font-size: 10px;
    }

    .badge-late {
        background-color: #fff3cd;
        color: #664d03;
        font-size: 10px;
    }

    .ai-glow {
        box-shadow: 0 0 15px rgba(25, 135, 84, 0.2);
        border: 1px solid rgba(25, 135, 84, 0.3);
    }
</style>
</head>

<body>

    <div class="container py-5">
        <div class="card card-main">
            <div class="header-gradient d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="fw-bold mb-1">Laporan Kinerja Bulanan</h2>
                    <p class="mb-0 opacity-75">ID Karyawan: #2024001 • Mei 2026</p>
                </div>
                <div class="text-end">
                    <span class="badge bg-white text-success px-3 py-2 rounded-pill fw-bold">
                        <i class="bi bi-robot me-1"></i> MUKTI AI Verified
                    </span>
                </div>
            </div>

            <div class="card-body p-4">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <h6 class="fw-bold mb-3">Radar Kompetensi</h6>
                        <div class="mb-4">
                            <canvas id="performanceChart" width="100" height="100"></canvas>
                        </div>

                        <div class="stat-card mb-3">
                            <p class="small text-muted mb-1">Total Jam Kerja</p>
                            <h4 class="fw-bold">168.5 <small class="text-muted" style="font-size: 14px;">Jam</small>
                            </h4>
                        </div>
                        <div class="stat-card mb-3" style="border-left-color: #0d6efd;">
                            <p class="small text-muted mb-1">Target Produksi</p>
                            <h4 class="fw-bold text-primary">85.2%</h4>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="fw-bold m-0">Log Absensi Terakhir</h6>
                            <button class="btn btn-sm btn-link text-success text-decoration-none p-0">Lihat
                                Semua</button>
                        </div>

                        <div class="table-responsive mb-4">
                            <table class="table table-absensi align-middle" style="font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Jam Masuk</th>
                                        <th>Jam Pulang</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>15 Mei 2026</td>
                                        <td>06:55</td>
                                        <td>16:05</td>
                                        <td><span class="badge badge-ontime">TEPAT WAKTU</span></td>
                                    </tr>
                                    <tr>
                                        <td>14 Mei 2026</td>
                                        <td>07:05</td>
                                        <td>16:00</td>
                                        <td><span class="badge badge-late">TERLAMBAT 5M</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="p-4 rounded-4 ai-glow" style="background: #fdfdfd;">
                            <h6 class="fw-bold text-success mb-3"><i class="bi bi-chat-left-dots-fill me-2"></i>Analisis
                                Prediktif AI</h6>
                            <p class="small text-muted mb-3" style="line-height: 1.7;">
                                Hai Andi, berdasarkan data <strong>Log Absensi</strong> dan <strong>Input
                                    Tonase</strong> minggu ini:
                            </p>
                            <ul class="small text-muted ps-3">
                                <li class="mb-2">Konsistensi kehadiran Anda (98%) berada di atas rata-rata divisi
                                    lapangan.</li>
                                <li class="mb-2">Terdapat pola keterlambatan rata-rata 5 menit pada hari Kamis,
                                    disarankan evaluasi waktu perjalanan.</li>
                                <li><strong>Proyeksi Karir:</strong> Dengan tren ini, Anda memenuhi kriteria "Loyalty
                                    Score" untuk pengajuan status Karyawan Tetap (SKU) lebih awal dari jadwal normal.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer bg-light border-0 p-3 text-center">
                <button class="btn btn-success px-5 fw-bold rounded-pill shadow-sm" disabled>
                    <i class="bi bi-file-earmark-pdf me-2"></i> Download Laporan Resmi (.PDF)
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('performanceChart').getContext('2d');
        new Chart(ctx, {
            type: 'radar',
            data: {
                labels: ['Absensi', 'Target', 'SOP', 'Kerjasama', 'Sikap'],
                datasets: [{
                    label: 'Skor Kinerja',
                    data: [98, 85, 90, 75, 95],
                    fill: true,
                    backgroundColor: 'rgba(25, 135, 84, 0.2)',
                    borderColor: '#198754',
                    pointBackgroundColor: '#198754',
                }]
            },
            options: {
                elements: {
                    line: {
                        borderWidth: 2
                    }
                }
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
