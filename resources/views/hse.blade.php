<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSE Action - Tambang Portal</title>
    <style>
        :root {
            font-family: 'Inter', system-ui, sans-serif;
            color: #f4ecd8;
            background: #111111;
        }
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            min-height: 100vh;
            background: radial-gradient(circle at top left, rgba(212, 175, 55, 0.14), transparent 28%),
                        radial-gradient(circle at bottom right, rgba(255, 183, 0, 0.1), transparent 20%),
                        #131313;
            color: #f4ecd8;
        }
        .shell {
            max-width: 1080px;
            margin: 0 auto;
            padding: 24px 20px 40px;
        }
        .header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 18px;
            padding: 24px 28px;
            border-radius: 18px;
            background: rgba(24, 20, 16, 0.9);
            border: 1px solid rgba(212, 175, 55, 0.14);
            box-shadow: 0 18px 60px rgba(0, 0, 0, 0.24);
        }
        .header-left {
            display: grid;
            gap: 10px;
        }
        .header-left h1 {
            margin: 0;
            font-size: clamp(2rem, 2.5vw, 2.8rem);
            letter-spacing: -0.04em;
        }
        .header-left p {
            margin: 0;
            color: #d5c38c;
            opacity: 0.95;
            line-height: 1.6;
            max-width: 720px;
        }
        .nav-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        .nav-link,
        .nav-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            padding: 12px 20px;
            border: 1px solid rgba(212, 175, 55, 0.16);
            background: rgba(28, 24, 20, 0.88);
            color: #f4ecd8;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.2s ease, background 0.2s ease;
        }
        .nav-link:hover,
        .nav-button:hover {
            transform: translateY(-2px);
            background: rgba(212, 175, 55, 0.16);
        }
        .overview {
            margin: 28px 0;
            padding: 24px 26px;
            border-radius: 20px;
            background: rgba(24, 20, 16, 0.88);
            border: 1px solid rgba(212, 175, 55, 0.1);
        }
        .overview p {
            margin: 0;
            line-height: 1.8;
            color: #d5c38c;
            font-size: 1rem;
        }
        .submenu-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }
        .submenu-item {
            display: grid;
            grid-template-columns: 52px 1fr;
            gap: 16px;
            align-items: center;
            padding: 20px 22px;
            border-radius: 18px;
            background: rgba(20, 18, 16, 0.92);
            border: 1px solid rgba(212, 175, 55, 0.14);
            text-decoration: none;
            color: inherit;
            transition: transform 0.22s ease, border-color 0.22s ease, background 0.22s ease;
        }
        .submenu-item:hover {
            transform: translateY(-3px);
            background: rgba(212, 175, 55, 0.12);
            border-color: rgba(212, 175, 55, 0.28);
        }
        .submenu-icon {
            width: 52px;
            height: 52px;
            border-radius: 16px;
            display: grid;
            place-items: center;
            background: rgba(212, 175, 55, 0.16);
            color: #ffd875;
            font-size: 1.4rem;
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.05);
        }
        .submenu-item h2 {
            margin: 0 0 8px;
            font-size: 1.04rem;
            letter-spacing: -0.02em;
        }
        .submenu-item p {
            margin: 0;
            color: #c8b980;
            opacity: 0.95;
            line-height: 1.5;
            font-size: 0.95rem;
        }
        .footer {
            margin-top: 32px;
            text-align: center;
            color: #b7a865;
            opacity: 0.84;
            font-size: 0.94rem;
        }
        @media (max-width: 820px) {
            .submenu-grid {
                grid-template-columns: 1fr;
            }
            .header {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <div class="shell">
        <header class="header">
            <div class="header-left">
                <h1>HSE Action</h1>
                <p>Pilih salah satu sub menu di bawah ini untuk mengelola aktivitas keselamatan dan kesehatan kerja secara terstruktur.</p>
            </div>
            <div class="nav-actions">
                <a class="nav-link" href="/home">Kembali ke Home</a>
            </div>
        </header>

        <section class="overview">
            <p>Halaman HSE Action berisi daftar aktivitas safety yang dapat dipilih untuk penanganan cepat. Setiap sub menu menyediakan entry point khusus untuk pencatatan, pengawasan, dan laporan HSE di area tambang.</p>
        </section>

        <section class="submenu-grid">
            <a href="#" class="submenu-item">
                <div class="submenu-icon">✅</div>
                <div>
                    <h2>Sweeping Golden Rules</h2>
                    <p>Pengawasan rutin terhadap aturan keselamatan utama di lokasi kerja.</p>
                </div>
            </a>
            <a href="#" class="submenu-item">
                <div class="submenu-icon">🚦</div>
                <div>
                    <h2>Sidak Kecepatan</h2>
                    <p>Pemeriksaan pelanggaran kecepatan kendaraan lapangan.</p>
                </div>
            </a>
            <a href="#" class="submenu-item">
                <div class="submenu-icon">💡</div>
                <div>
                    <h2>Sidak Pencahayaan</h2>
                    <p>Validasi area kerja memiliki pencahayaan sesuai standar.</p>
                </div>
            </a>
            <a href="#" class="submenu-item">
                <div class="submenu-icon">🧹</div>
                <div>
                    <h2>Housekeeping Kabin</h2>
                    <p>Audit kebersihan dan keteraturan kabin operator.</p>
                </div>
            </a>
            <a href="#" class="submenu-item">
                <div class="submenu-icon">📻</div>
                <div>
                    <h2>Sidak Chanel Radio</h2>
                    <p>Verifikasi kesiapan dan komunikasi kanal radio lapangan.</p>
                </div>
            </a>
            <a href="#" class="submenu-item">
                <div class="submenu-icon">😴</div>
                <div>
                    <h2>Sidak Fatigue</h2>
                    <p>Penilaian kondisi kelelahan pekerja demi keselamatan operasional.</p>
                </div>
            </a>
            <a href="#" class="submenu-item">
                <div class="submenu-icon">🛡️</div>
                <div>
                    <h2>Safety Device</h2>
                    <p>Pemeriksaan fungsi perangkat keselamatan dan proteksi.</p>
                </div>
            </a>
            <a href="#" class="submenu-item">
                <div class="submenu-icon">📋</div>
                <div>
                    <h2>IBPR</h2>
                    <p>Pengisian dan pemantauan laporan inspeksi berbasis risiko.</p>
                </div>
            </a>
            <a href="#" class="submenu-item">
                <div class="submenu-icon">🚧</div>
                <div>
                    <h2>Safety Sign</h2>
                    <p>Audit tanda keselamatan dan rambu di kawasan tambang.</p>
                </div>
            </a>
            <a href="/hse/pengawalan" class="submenu-item">
                <div class="submenu-icon">👮</div>
                <div>
                    <h2>Pengawalan</h2>
                    <p>Koordinasi pengawalan untuk operasi khusus dan kendaraan penting.</p>
                </div>
            </a>
            <a href="#" class="submenu-item">
                <div class="submenu-icon">⚙️</div>
                <div>
                    <h2>Comissioning</h2>
                    <p>Dokumentasi dan review commissioning peralatan baru.</p>
                </div>
            </a>
            <a href="/hse/sci" class="submenu-item">
                <div class="submenu-icon">📑</div>
                <div>
                    <h2>Laporan SCI</h2>
                    <p>Entry point laporan SCI untuk compliance dan inspeksi.</p>
                </div>
            </a>
            <a href="#" class="submenu-item">
                <div class="submenu-icon">📝</div>
                <div>
                    <h2>Risalah Rapat</h2>
                    <p>Catatan hasil rapat HSE dan tindak lanjut keputusan tim.</p>
                </div>
            </a>
        </section>

        <div class="footer">Halaman ini mempermudah akses ke semua kegiatan HSE Action yang penting.</div>
    </div>
</body>
</html>