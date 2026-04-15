<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Pemerintahan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        
        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 28px;
            font-weight: bold;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            transition: 0.3s;
        }
        
        nav a:hover {
            opacity: 0.8;
        }
        
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 60px 20px;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: white;
            color: #667eea;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: 0.3s;
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .services {
            padding: 60px 20px;
            background: #f9f9f9;
        }
        
        .services h2 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 40px;
            color: #667eea;
        }
        
        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
            transition: 0.3s;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }
        
        .service-card h3 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 22px;
        }
        
        .service-card p {
            color: #666;
            line-height: 1.8;
        }
        
        .info-section {
            padding: 60px 20px;
            background: white;
        }
        
        .info-section h2 {
            color: #667eea;
            font-size: 36px;
            margin-bottom: 30px;
            text-align: center;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .info-box {
            background: #f0f4ff;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }
        
        .info-box h4 {
            color: #667eea;
            margin-bottom: 10px;
        }
        
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 30px 20px;
            margin-top: 60px;
        }
        
        footer p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">🏛️ Pemerintahan</div>
            <nav>
                <a href="#home">Beranda</a>
                <a href="#services">Layanan</a>
                <a href="#info">Informasi</a>
                <a href="#contact">Kontak</a>
            </nav>
        </div>
    </header>
    
    <section class="hero" id="home">
        <div class="container">
            <h1>Selamat Datang di Portal Pemerintahan</h1>
            <p>Memberikan pelayanan terbaik untuk masyarakat</p>
            <a href="#services" class="btn">Jelajahi Layanan</a>
        </div>
    </section>
    
    <section class="services" id="services">
        <div class="container">
            <h2>Layanan Kami</h2>
            <div class="service-grid">
                <div class="service-card">
                    <h3>📋 Administrasi</h3>
                    <p>Pelayanan administrasi kependudukan dan arsip digital untuk kemudahan masyarakat.</p>
                </div>
                <div class="service-card">
                    <h3>💼 Izin & Lisensi</h3>
                    <p>Proses perizinan yang cepat dan transparan untuk usaha dan bisnis Anda.</p>
                </div>
                <div class="service-card">
                    <h3>🏗️ Infrastruktur</h3>
                    <p>Program pembangunan infrastruktur untuk meningkatkan kualitas hidup masyarakat.</p>
                </div>
                <div class="service-card">
                    <h3>📚 Pendidikan</h3>
                    <p>Dukungan pendidikan dan beasiswa untuk generasi muda berkualitas.</p>
                </div>
                <div class="service-card">
                    <h3>🏥 Kesehatan</h3>
                    <p>Program kesehatan masyarakat untuk kesejahteraan seluruh penduduk.</p>
                </div>
                <div class="service-card">
                    <h3>💰 Keuangan</h3>
                    <p>Manajemen keuangan publik yang transparan dan akuntabel.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="info-section" id="info">
        <div class="container">
            <h2>Informasi Penting</h2>
            <div class="info-grid">
                <div class="info-box">
                    <h4>Jam Pelayanan</h4>
                    <p>Senin - Jumat: 08:00 - 16:00<br>Sabtu: 08:00 - 12:00</p>
                </div>
                <div class="info-box">
                    <h4>Hubungi Kami</h4>
                    <p>Telepon: (021) 123-4567<br>Email: info@pemerintahan.go.id</p>
                </div>
                <div class="info-box">
                    <h4>Alamat Kantor</h4>
                    <p>Jl. Merdeka No. 1<br>Jakarta Pusat, 12190</p>
                </div>
                <div class="info-box">
                    <h4>Sosial Media</h4>
                    <p>Follow kami di: Facebook, Twitter, Instagram</p>
                </div>
            </div>
        </div>
    </section>
    
    <footer id="contact">
        <div class="container">
            <p>&copy; 2024 Portal Pemerintahan. Hak Cipta Dilindungi.</p>
            <p>Melayani dengan Sepenuh Hati untuk Kemajuan Bersama</p>
        </div>
    </footer>
</body>
</html>