<?php
// Ini adalah bagian PHP. 
// Kita simpan tahun saat ini ke dalam variabel untuk digunakan di Footer nanti.
// Ini membuktikan ke dosen bahwa kamu paham cara kerja variabel dan fungsi PHP.
$tahun_sekarang = date("Y");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyawit Raharja</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <style>
        /* Warna hijau kustom untuk Navbar dan Footer */
        .bg-nyawit {
            background-color: #2F4F2F !important; /* Hijau gelap khas perkebunan */
        }
        
        /* Hero Section dengan Gambar Latar */
        .hero-section {
            /* Ganti 'kebun-sawit.jpg' dengan nama file gambarmu nanti */
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('kebun-sawit.jpg');
            background-size: cover;
            background-position: center;
            height: 80vh; /* Tinggi 80% dari layar */
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        /* Trik membuat gambar menjadi oval (elips) */
        .gambar-oval {
            border-radius: 50%; /* Akan jadi oval jika gambarnya persegi panjang */
            width: 100%;
            height: auto;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        /* Warna latar form hijau sangat muda */
        .bg-form {
            background-color: #F1F8E9;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-nyawit sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">RAHARJA SAWIT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto"> <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#hasil">Hasil Kebun</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-section">
        <div class="container">
            <h1 class="display-3 fw-bold">Nyawit Raharja</h1>
            <p class="lead">Mendedikasikan Hidup untuk Kelapa Sawit yang Berkelanjutan dan Berkualitas.</p>
            <a href="#tentang" class="btn btn-warning btn-lg rounded-pill mt-3 px-5 fw-bold">Kenali Saya Lebih Dekat</a>
        </div>
    </div>

    <div id="tentang" class="container mt-5 pt-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <img src="kebun-atas.jpg" alt="Kebun Sawit" class="gambar-oval">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold text-success mb-4">Siapa Nyawit Raharja?</h2>
                <p>Saya adalah seorang petani kelapa sawit yang telah bergelut di bidang perkebunan selama lebih dari 20 tahun. Berfokus di wilayah Sumatera, saya menerapkan teknik pertanian modern yang ramah lingkungan.</p>
                <p>Misi saya adalah membuktikan bahwa perkebunan sawit rakyat dapat dikelola secara profesional dengan hasil panen kualitas premium.</p>
                
                <div class="row mt-4 text-center text-success fw-bold">
                    <div class="col-4">
                        <h3 class="fw-bold">50+</h3><small class="text-dark">Hektar Lahan</small>
                    </div>
                    <div class="col-4">
                        <h3 class="fw-bold">100%</h3><small class="text-dark">Organik Parsial</small>
                    </div>
                    <div class="col-4">
                        <h3 class="fw-bold">25 thn</h3><small class="text-dark">Pengalaman</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hasil" class="container mt-5 pt-5">
        <h2 class="text-center fw-bold text-success mb-5">Dokumentasi & Hasil Panen</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="bibit.jpg" class="card-img-top" alt="Bibit">
                    <div class="card-body text-center">
                        <h5 class="card-title text-success">Pembibitan Unggul</h5>
                        <p class="card-text text-muted">Seleksi bibit DxP berkualitas tinggi untuk menjamin produktivitas masa depan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="pohon.jpg" class="card-img-top" alt="Pohon">
                    <div class="card-body text-center">
                        <h5 class="card-title text-success">Pemeliharaan Intensif</h5>
                        <p class="card-text text-muted">Manajemen gulma dan pemupukan tepat dosis sesuai analisis daun.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="panen.jpg" class="card-img-top" alt="Panen">
                    <div class="card-body text-center">
                        <h5 class="card-title text-success">Panen Raya TBS</h5>
                        <p class="card-text text-muted">Hasil panen Tandan Buah Segar yang segar dengan rendemen minyak yang tinggi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="kontak" class="container mt-5 pt-5 mb-5">
        <h2 class="text-center fw-bold text-success mb-4">Hubungi Nyawit</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form id="formKontak" class="bg-form p-5 rounded-4 shadow-sm" onsubmit="return validasiForm()">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">Nama Lengkap</label>
                            <input type="text" id="nama" class="form-control" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="nama@email.com">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-muted">Pesan / Kerjasama</label>
                        <textarea id="pesan" class="form-control" rows="4" placeholder="Apa yang ingin Anda diskusikan?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning w-100 fw-bold py-2 rounded-pill">Kirim Pesan Sekarang</button>
                </form>
            </div>
        </div>
    </div>

    <footer class="bg-nyawit text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-1">&copy; <?php echo $tahun_sekarang; ?> Portofolio Nyawit Raharja. Semua Hak Dilindungi.</p>
            <p class="mb-1 text-white-50"><small>Dibuat dengan semangat memajukan pertanian Indonesia.</small></p>
            
            <a href="#" class="text-warning text-decoration-none mt-2 d-inline-block" data-bs-toggle="modal" data-bs-target="#modalTOC">
                <small>Baca Terms of Use (Ketentuan Penggunaan)</small>
            </a>
        </div>
    </footer>

    <div class="modal fade" id="modalTOC" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Terms of Use</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>1. Penerimaan Syarat</strong><br>
                    Dengan mengakses website ini, Anda setuju untuk terikat oleh Ketentuan Penggunaan ini.</p>
                    <p><strong>2. Hak Cipta</strong><br>
                    Semua konten, gambar, dan desain dalam website ini dilindungi oleh undang-undang hak cipta. Pengunjung dilarang keras mereproduksi, mendistribusikan, atau menggunakan materi di situs ini untuk tujuan komersial tanpa izin tertulis dari pemilik (Nyawit Raharja).</p>
                    <p><strong>3. Batasan Penggunaan</strong><br>
                    Pengunjung dapat mengunduh atau menyalin materi dari situs ini hanya untuk penggunaan pribadi dan non-komersial.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Saya Mengerti</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function validasiForm() {
            // Mengambil nilai yang diketik user
            var nama = document.getElementById("nama").value;
            var email = document.getElementById("email").value;
            var pesan = document.getElementById("pesan").value;

            // Cek jika ada yang kosong
            if (nama === "" || email === "" || pesan === "") {
                // Munculkan peringatan
                alert("Mohon maaf, semua kolom (Nama, Email, dan Pesan) wajib diisi sebelum mengirim pesan!");
                return false; // Mencegah form dikirim (halaman tidak me-refresh)
            } else {
                alert("Terima kasih, " + nama + "! Pesan Anda berhasil dikirim.");
                return true;
            }
        }
    </script>

</body>
</html>