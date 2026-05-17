<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

<style>
    :root {
        --palm-green: #2D6A3E;
        --deep-forest: #081c15;
        --fresh-leaf: #2D6A3E;
        --accent-gold: #ffb703;
    }

    body {
        background-color: #f4f7f6;
        font-family: 'Plus Jakarta Sans', sans-serif;
        color: #2d3436;
    }

    .hero-modern {
        background: linear-gradient(rgba(27, 67, 50, 0.85), rgba(27, 67, 50, 0.85)),
            url('https://images.unsplash.com/photo-1542601906990-b4d3fb773b09?auto=format&fit=crop&w=1920&q=80');
        background-attachment: fixed;
        background-size: cover;
        padding: 120px 0;
        color: white;
        border-bottom: 8px solid var(--accent-gold);
    }

    .btn-dashboard {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: white;
        padding: 12px 25px;
        transition: 0.3s;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
    }

    .btn-dashboard:hover {
        background: var(--accent-gold);
        color: var(--palm-green);
        border-color: var(--accent-gold);
    }

    .segment-wrapper {
        padding: 80px 0;
    }

    .img-modern {
        width: 100%;
        height: 550px;
        object-fit: cover;
        box-shadow: 30px 30px 0px rgba(45, 106, 79, 0.1);
        border-radius: 20px;
    }

    .label-category {
        display: inline-block;
        background: var(--accent-gold);
        color: var(--palm-green);
        padding: 5px 20px;
        font-weight: 800;
        font-size: 0.8rem;
        margin-bottom: 20px;
    }

    .title-modern {
        font-weight: 800;
        color: var(--palm-green);
        font-size: 3rem;
        margin-bottom: 30px;
        line-height: 1.1;
    }

    .text-para {
        font-size: 1.1rem;
        line-height: 2.1;
        color: #4a4a4a;
        text-align: justify;
    }

    .narrative-block {
        background: white;
        padding: 50px;
        border-left: 10px solid var(--palm-green);
        border-radius: 0 30px 30px 0;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
        margin-top: 40px;
    }

    .standard-footer {
        background-color: #2D6A3E;
        color: #ffffff;
        padding: 60px 0 30px;
        border-top: 4px solid #ffb703;
    }

    .footer-brand {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 15px;
        display: block;
        letter-spacing: 0.5px;
    }

    .footer-contact-info {
        font-size: 0.9rem;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.8);
    }

    .approval-box-simple {
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 20px;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.03);
    }

    .approval-title {
        font-size: 0.75rem;
        font-weight: 700;
        color: #ffb703;
        text-transform: uppercase;
        margin-bottom: 10px;
        display: block;
    }

    .approval-text {
        font-size: 0.95rem;
        font-weight: 500;
        margin-bottom: 5px;
    }

    .approval-sub {
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.6);
        display: block;
    }

    .copyright-section {
        margin-top: 50px;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.4);
        text-align: center;
    }

    /* Intuk Beranda */
    .btn-custom-efek {
        background-color: #ffffff !important;
        color: #2D6A3E !important;
        border: 1.5px solid transparent !important;
        border-radius: 8px !important;
        font-weight: 600;
        font-size: 0.95rem;
        padding: 10px 25px;
        text-decoration: none !important;
        display: inline-flex;
        align-items: center;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
    }

    .btn-custom-efek:hover {
        transform: translateY(-4px);
        background-color: #ffffff !important;
        border: 1.5px solid #2D6A3E !important;
        color: #2D6A3E !important;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15) !important;
    }

    .btn-custom-efek:active {
        transform: translateY(-1px);
        border-color: #2D6A3E !important;
        background-color: #f8f9fa !important;
    }
</style>

<div class="fixed-top p-4 d-flex justify-content-end" style="pointer-events: none;">
    <a href="{{ url('/') }}" class="btn-custom-efek" style="pointer-events: auto;">
        <i class="bi bi-house-door me-2"></i>Beranda
    </a>
</div>

<section class="hero-modern text-center">
    <div class="container">
        <span class="badge bg-success mb-3 px-3 py-2 text-uppercase" style="letter-spacing: 2px;">Dokumen Regulasi
            Internal v2026</span>
        <h1 class="display-2 fw-bold mb-4">PT Mustika Agung Sentosa</h1>
        <p class="lead opacity-75 mx-auto" style="max-width: 800px; font-size: 1.4rem;">
            Standar Tata Kelola Operasional Perkebunan dan Integritas Karyawan Wilayah Simpang Hulu.
        </p>
    </div>
</section>

<section class="segment-wrapper">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <div class="label-category">OPERASIONAL & KEDISIPLINAN</div>
                <h2 class="title-modern">Protokol Kehadiran dan Manajemen Waktu Lapangan</h2>
                <div class="text-para">
                    <p class="mb-4">
                        Sebagai bagian dari Mukti Plantation Group, PT Mustika Agung Sentosa (PT MAS) menerapkan
                        standar
                        operasional prosedur (SOP) yang sangat ketat di wilayah Simpang Hulu untuk memastikan target
                        produksi TBS (Tandan Buah Segar) tercapai secara optimal. Setiap karyawan, baik staf kantor
                        maupun pengawas lapangan, wajib mematuhi sistem absensi digital berbasis Geo-tagging tepat
                        pada
                        pukul 06:00 WIB. Ketepatan waktu ini sangat krusial mengingat ritme kerja perkebunan sangat
                        bergantung pada kondisi cuaca dan kesiapan logistik transportasi buah menuju pabrik.
                        Perusahaan
                        memberikan batas toleransi keterlambatan maksimal 15 menit, namun konsistensi kehadiran
                        tetap
                        menjadi parameter utama dalam penilaian kinerja tahunan dan penentuan insentif produksi.
                    </p>
                    <p>
                        Kebijakan mengenai jam kerja tambahan atau lembur di PT MAS dirancang untuk mendukung
                        efektivitas operasional, terutama pada masa puncak panen (peak crop). Lembur hanya
                        diperbolehkan
                        apabila terdapat urgensi operasional yang nyata, seperti penanganan kendala teknis di PKS
                        (Pabrik Kelapa Sawit) atau penyelesaian target angkut buah yang tertunda akibat faktor alam.
                        Prosedur lembur wajib didasari oleh instruksi tertulis melalui Surat Perintah Kerja Lembur
                        (SPKL) dari kepala departemen terkait untuk memastikan transparansi dan akuntabilitas beban
                        kerja karyawan sesuai dengan regulasi ketenagakerjaan yang berlaku di lingkungan Mukti
                        Plantation.
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="{{ asset('images/bg2.jpg') }}" class="img-modern" alt="Operasional Panen PT MAS">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="narrative-block">
                    <h3 class="fw-bold mb-4" style="color: var(--palm-green); font-size: 2.2rem;">Integritas Kerja,
                        Keamanan Data, dan Budaya Perusahaan</h3>
                    <div class="text-para">
                        <p class="mb-4">
                            Stabilitas operasional di Simpang Hulu sangat bergantung pada loyalitas tenaga kerjanya.
                            Berdasarkan regulasi internal grup, PT Mustika Agung Sentosa memberlakukan aturan tegas
                            terkait absensi tanpa keterangan atau mangkir. Apabila karyawan tidak hadir selama lima
                            hari
                            kerja berturut-turut tanpa memberikan informasi resmi yang dapat dipertanggungjawabkan
                            melalui dokumen medis atau izin atasan, maka yang bersangkutan dianggap telah
                            mengundurkan
                            diri secara sepihak. Kebijakan ini bertujuan untuk menjaga kesinambungan tim di lapangan
                            dan
                            memastikan tidak ada kekosongan posisi yang dapat menghambat alur kerja produksi harian
                            serta pemeliharaan blok lahan yang telah dijadwalkan secara ketat.
                        </p>
                        <p>
                            Selain aspek kehadiran, perusahaan sangat menekankan pada perlindungan rahasia data
                            operasional dan kepatuhan terhadap standar K3 (Kesehatan dan Keselamatan Kerja).
                            Karyawan
                            dilarang keras membocorkan data produksi, peta lahan digital, atau strategi pemupukan
                            kepada
                            pihak eksternal demi menjaga daya saing Mukti Plantation Group. Sebagai simbol kesatuan
                            visi, penggunaan Seragam Dinas Harian (SDH) wajib dikenakan pada hari Senin hingga
                            Kamis,
                            sedangkan hari Jumat dikhususkan untuk penggunaan Batik perusahaan. Hal ini bukan
                            sekadar
                            aturan berpakaian, melainkan cermin profesionalisme dan kehormatan dalam mewakili
                            identitas
                            PT Mustika Agung Sentosa di tengah masyarakat Simpang Hulu.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pt-4">
            <div class="col-12 text-center">
                <img src="{{ asset('images/bg1.jpg') }}"
                    style="width: 100%; height: 450px; object-fit: cover; border-radius: 40px; filter: contrast(110%);"
                    alt="Bentang Alam Perkebunan Mukti Plantation">
            </div>
        </div>
    </div>
</section>

<footer class="standard-footer">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-7">
                <span class="footer-brand">PT MUSTIKA AGUNG SENTOSA</span>
                <div class="footer-contact-info">
                    <p class="mb-1">Divisi Regional Simpang Hulu — Mukti Plantation Group</p>
                    <p class="mb-1">Kalimantan Barat, Indonesia</p>
                    <p class="mb-0 text-info" style="font-size: 0.8rem;">
                        <i class="bi bi-info-circle me-1"></i> Dokumen Regulasi Internal & Standar Etika
                    </p>
                </div>
            </div>

            <div class="col-md-5 d-flex justify-content-md-end mt-4 mt-md-0">
                <div class="approval-box-simple w-100" style="max-width: 320px;">
                    <span class="approval-title">Status Regulasi</span>
                    <p class="approval-text">Ditetapkan oleh Management PT MAS</p>
                    <span class="approval-sub">Berlaku efektif sejak: 01 Januari 2026</span>
                </div>
            </div>

        </div>

        <div class="copyright-section">
            &copy; 2026 HRD & Operational Division PT Mustika Agung Sentosa. All Rights Reserved.
        </div>
    </div>
</footer>
