    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        :root {
            --mukti-green: #2D6A3E;
            --mukti-dark: #0b2b0b;
            --mukti-light: #f0f9f0;
        }

        body {
            background-color: #f8faf8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(26, 93, 26, 0.08);
            margin-bottom: 30px;
        }

        .header-card {
            background: #fff;
            border-bottom: 2px solid #eee;
            padding: 25px;
            border-radius: 15px 15px 0 0;
        }

        /* Warna Teks Judul */
        .header-card h5 {
            color: var(--mukti-green);
        }

        .label-input {
            font-weight: 600;
            color: #444;
            font-size: 0.85rem;
            margin-bottom: 5px;
        }

        .form-control-custom {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 12px;
            background-color: #fdfdfd;
            transition: 0.3s;
        }

        /* Warna saat kotak input diklik */
        .form-control-custom:focus {
            border-color: var(--mukti-green);
            box-shadow: 0 0 0 0.2rem rgba(26, 93, 26, 0.1);
            background-color: #fff;
            outline: none;
        }

        /* Tombol Kirim Diubah ke Hijau */
        .btn-kirim {
            background-color: var(--mukti-green);
            border: none;
            border-radius: 8px;
            padding: 15px;
            font-weight: bold;
            color: white;
            transition: 0.3s;
            text-transform: uppercase;
        }

        .btn-kirim:hover {
            background-color: var(--mukti-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(26, 93, 26, 0.3);
            color: white;
        }

        /* Style Tabel & Status */
        .text-primary {
            color: var(--mukti-green) !important;
        }

        .table-light {
            background-color: var(--mukti-light);
        }

        .badge-status {
            padding: 8px 12px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.75rem;
        }

        .status-menunggu {
            background-color: #fff3cd;
            color: #856404;
        }

        .status-disetujui {
            background-color: #d4edda;
            color: #2D6A3E;
        }

        .status-ditolak {
            background-color: #f8d7da;
            color: #721c24;
        }

        /* Warna Tombol Unduh */
        .btn-outline-primary {
            color: var(--mukti-green);
            border-color: var(--mukti-green);
        }

        .btn-outline-primary:hover {
            background-color: var(--mukti-green);
            border-color: var(--mukti-green);
            color: white;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        /* Untuk Tombol Beranda */
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
    </head>

    <div class="container py-4" style="background-color: #f8f9fa; min-height: 100vh;">
        <div class="d-flex justify-content-end align-items-center mb-0">
            <a href="{{ url('/') }}" class="btn btn-white shadow-sm border-0 rounded-pill px-4 btn-custom-efek">
                <i class="bi bi-house-door me-2"></i>Beranda
            </a>
        </div>

        <body>

            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-11">

                        <div class="text-center mb-4">
                            <h4 class="fw-bold mb-1" style="color: var(--mukti-green);">MUKTI PLANTATION</h4>
                            <p class="text-muted small">KEBUN MUKTI AGRO-1 • WILAYAH SEKUCING LABAI</p>
                        </div>

                        <div class="card card-custom">
                            <div class="header-card text-center">
                                <h5 class="fw-bold mb-1 text-uppercase">Form Pengajuan Surat Tugas</h5>
                                <p class="text-muted small mb-0">Lengkapi data untuk pengajuan surat</p>
                            </div>

                            <div class="card-body p-4">
                                <form action="{{ route('izin.store') }}" method="POST">
                                    @csrf

                                    <div class="row mb-4">
                                        <h6 class="text-primary fw-bold mb-3"><i
                                                class="bi bi-person-badge me-2"></i>Data
                                            Pemohon</h6>
                                        <div class="col-md-4">
                                            <label for="nama" class="label-input">Nama Lengkap</label>
                                            <input type="text" id="nama" name="nama"
                                                class="form-control form-control-custom" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="jabatan" class="label-input">Jabatan</label>
                                            <select id="jabatan" name="jabatan"
                                                class="form-control form-control-custom" required>
                                                <option value="" disabled selected>Pilih Jabatan</option>
                                                <option value="Asisten Afdeling">Asisten</option>
                                                <option value="Chief Security">Chief Security</option>
                                                <option value="Estate Manager">Kerani</option>
                                                <option value="Staff">Staff</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="departmen" class="label-input">Departemen</label>
                                            <select id="departmen" name="departmen"
                                                class="form-control form-control-custom" required>
                                                <option value="" disabled selected>Pilih Departemen</option>
                                                <option value="HUKA">HUKA</option>
                                                <option value="Produksi">Produksi</option>
                                                <option value="Teknik">Teknik</option>
                                                <option value="Agronomi">Agronomi</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <div class="row mb-4">
                                        <h6 class="text-primary fw-bold mb-3"><i class="bi bi-geo-alt me-2"></i>Rincian
                                            Tugas &
                                            Perjalanan</h6>
                                        <div class="col-md-6 mb-3">
                                            <label for="tugas" class="label-input">Tugas yang Dilaksanakan</label>
                                            <textarea id="tugas" name="tugas" class="form-control form-control-custom" rows="2" required></textarea>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="tujuan" class="label-input">Kota Tujuan</label>
                                            <input type="text" id="tujuan" name="tujuan"
                                                class="form-control form-control-custom" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="tgl_tugas" class="label-input">Tanggal Tugas</label>
                                            <input type="date" id="tgl_tugas" name="tgl_tugas"
                                                class="form-control form-control-custom" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="jam" class="label-input">Jam Keberangkatan</label>
                                            <input type="time" id="jam" name="jam"
                                                class="form-control form-control-custom" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="transportasi" class="label-input">Transportasi</label>
                                            <select id="transportasi" name="transportasi"
                                                class="form-control form-control-custom" required>
                                                <option value="" disabled selected>Pilih Transportasi</option>
                                                <option value="Kendaraan Dinas">Kendaraan Dinas</option>
                                                <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                                <option value="Umum">Umum</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <div class="row mb-4">
                                        <h6 class="text-primary fw-bold mb-3"><i
                                                class="bi bi-cash-stack me-2"></i>Akomodasi
                                            &
                                            Biaya</h6>
                                        <div class="col-md-6 mb-3">
                                            <label for="penginapan" class="label-input">Penginapan</label>
                                            <select id="penginapan" name="penginapan"
                                                class="form-control form-control-custom" required>
                                                <option value="" disabled selected>Pilih Penginapan</option>
                                                <option value="Mess Perusahaan">Mess Perusahaan</option>
                                                <option value="Umum">Umum</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="uang_muka_display" class="label-input">Uang Muka (Rp)</label>
                                            <input type="text" id="uang_muka_display"
                                                class="form-control form-control-custom" required
                                                placeholder="Contoh: 100.000">
                                            <input type="hidden" id="uang_muka" name="uang_muka">
                                        </div>
                                    </div>

                                    <div class="d-grid mt-4">
                                        <button type="submit" class="btn btn-kirim">
                                            <i class="bi bi-send-fill me-2"></i>Kirim Pengajuan ke HRD
                                        </button>
                                        <small class="text-center text-muted mt-3">
                                            <i class="bi bi-info-circle me-1"></i>
                                            Status pengajuan dapat langsung dipantau pada tabel di bawah ini.
                                        </small>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card card-custom">
                            <div class="header-card bg-light">
                                <h6 class="fw-bold mb-0 text-primary"><i class="bi bi-clock-history me-2"></i>Status
                                    Riwayat
                                    Pengajuan Anda</h6>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0 align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="ps-4 py-3">TANGGAL</th>
                                                <th>TUJUAN</th>
                                                <th>TUGAS</th>
                                                <th class="text-center">STATUS</th>
                                                <th class="text-center">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="ps-4 py-3">
                                                    <span class="fw-bold">18 Apr 2026</span><br>
                                                    <small class="text-muted">08:00 WIB</small>
                                                </td>
                                                <td class="fw-semibold">Sandai</td>
                                                <td class="text-muted small">Mengambil Angkong di PT SMS</td>
                                                <td class="text-center">
                                                    <span class="badge-status status-disetujui">
                                                        <i class="bi bi-check-circle-fill me-1"></i>DISETUJUI
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-outline-primary fw-bold">
                                                        <i class="bi bi-download me-1"></i>Unduh Surat
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="ps-4 py-3">
                                                    <span class="fw-bold">03 Mei 2026</span><br>
                                                    <small class="text-muted">09:00 WIB</small>
                                                </td>
                                                <td class="fw-semibold">Ketapang</td>
                                                <td class="text-muted small">Koordinasi HUKA</td>
                                                <td class="text-center">
                                                    <span class="badge-status status-menunggu">
                                                        <i class="bi bi-hourglass-split me-1"></i>MENUNGGU
                                                    </span>
                                                </td>
                                                <td class="text-center text-muted small italic">
                                                    Belum Tersedia
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <script>
                const displayInput = document.getElementById('uang_muka_display');
                const hiddenInput = document.getElementById('uang_muka');

                displayInput.addEventListener('input', function(e) {
                    let value = this.value.replace(/[^0-9]/g, '');
                    hiddenInput.value = value;

                    if (value !== "") {
                        this.value = parseInt(value).toLocaleString('id-ID');
                    } else {
                        this.value = "";
                    }
                });
            </script>

        </body>

        </html>
