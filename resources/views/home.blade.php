<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Tambang Mining Portal</title>
    <style>
        :root {
            color-scheme: dark;
            font-family: 'Inter', system-ui, sans-serif;
            color: #f4ecd8;
            background: #121212;
        }
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            min-height: 100vh;
            background: radial-gradient(circle at top left, rgba(212, 175, 55, 0.14), transparent 30%),
                        radial-gradient(circle at bottom right, rgba(255, 183, 0, 0.12), transparent 25%),
                        #141414;
            color: #f4ecd8;
        }
        .page-shell {
            max-width: 1180px;
            margin: 0 auto;
            padding: 24px 20px 40px;
        }
        .topbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            padding: 18px 28px;
            border: 1px solid rgba(212, 175, 55, 0.14);
            border-radius: 18px;
            background: rgba(25, 18, 12, 0.76);
            box-shadow: 0 18px 60px rgba(0, 0, 0, 0.25);
        }
        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .brand-mark {
            width: 44px;
            height: 44px;
            border-radius: 14px;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, #d4af37, #f7d56f);
            color: #1f1306;
            font-weight: 700;
            font-size: 1.2rem;
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.25);
        }
        .brand-text {
            display: grid;
            gap: 4px;
        }
        .brand-text h1 {
            margin: 0;
            font-size: clamp(1.8rem, 2.1vw, 2.6rem);
            letter-spacing: -0.04em;
        }
        .brand-text p {
            margin: 0;
            color: #c6b387;
            opacity: 0.9;
            font-size: 0.95rem;
        }
        .summary {
            margin: 30px 0 24px;
            padding: 24px 26px;
            border-radius: 20px;
            background: rgba(18, 16, 13, 0.76);
            border: 1px solid rgba(212, 175, 55, 0.1);
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.02);
        }
        .summary p {
            margin: 0;
            line-height: 1.8;
            color: #d5c38c;
            font-size: 1rem;
            max-width: 860px;
        }
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
        }
        .menu-card {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 18px;
            align-items: center;
            min-height: 130px;
            padding: 22px;
            border-radius: 20px;
            border: 1px solid rgba(212, 175, 55, 0.15);
            background: rgba(20, 18, 16, 0.88);
            text-decoration: none;
            color: inherit;
            box-shadow: 0 24px 60px rgba(0, 0, 0, 0.18);
            transition: transform 0.24s ease, background 0.24s ease, border-color 0.24s ease;
        }
        .menu-card:hover {
            transform: translateY(-4px);
            background: rgba(35, 28, 15, 0.95);
            border-color: rgba(212, 175, 55, 0.35);
        }
        .menu-icon {
            width: 56px;
            height: 56px;
            border-radius: 18px;
            display: grid;
            place-items: center;
            background: rgba(212, 175, 55, 0.16);
            color: #ffd875;
            font-size: 1.6rem;
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.06);
        }
        .menu-content {
            display: grid;
            gap: 8px;
        }
        .menu-title {
            margin: 0;
            font-size: 1.08rem;
            letter-spacing: -0.02em;
        }
        .menu-description {
            margin: 0;
            color: #c8b980;
            opacity: 0.95;
            line-height: 1.5;
            font-size: 0.95rem;
        }
        .submenu-list {
            margin-top: 16px;
            display: none;
            grid-column: 1 / -1;
            padding: 16px;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(212, 175, 55, 0.12);
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.03);
            gap: 12px;
        }
        .submenu-list.active {
            display: grid;
        }
        .submenu-item {
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 12px 16px;
            border-radius: 14px;
            background: rgba(255, 255, 255, 0.04);
            color: #e7d89e;
            text-decoration: none;
            border: 1px solid rgba(212, 175, 55, 0.1);
            transition: background 0.2s ease, transform 0.2s ease;
        }
        .submenu-item:hover {
            background: rgba(212, 175, 55, 0.12);
            transform: translateX(4px);
        }
        .submenu-item span {
            color: #f4ecd8;
        }
        .submenu-toggle {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            justify-content: space-between;
            width: 100%;
            color: inherit;
            text-decoration: none;
        }
        .submenu-toggle svg {
            width: 20px;
            height: 20px;
            fill: #ffd875;
            transition: transform 0.2s ease;
        }
        .submenu-toggle.open svg {
            transform: rotate(180deg);
        }
        .actions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-top: 32px;
        }
        .button-link,
        .button-logout {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            border-radius: 12px;
            padding: 0 20px;
            font-weight: 600;
            letter-spacing: 0.01em;
            transition: transform 0.2s ease, background 0.2s ease;
            border: 1px solid rgba(212, 175, 55, 0.18);
            text-decoration: none;
            color: #f4ecd8;
            background: rgba(28, 24, 20, 0.88);
        }
        .button-link:hover,
        .button-logout:hover {
            transform: translateY(-2px);
            background: rgba(212, 175, 55, 0.14);
        }
        .button-logout {
            border-color: rgba(255, 97, 66, 0.22);
            color: #ffd6b7;
        }
        .button-logout:hover {
            background: rgba(255, 97, 66, 0.16);
        }
        .footer-note {
            margin-top: 36px;
            text-align: center;
            color: #b7a865;
            opacity: 0.85;
            font-size: 0.92rem;
        }
        @media (max-width: 780px) {
            .menu-grid {
                grid-template-columns: 1fr;
            }
            .topbar {
                flex-direction: column;
                align-items: flex-start;
            }
            .actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="page-shell">
        <header class="topbar">
            <div class="brand">
                <div class="brand-mark">M</div>
                <div class="brand-text">
                    <h1>Mining Dashboard</h1>
                    <p>Portal manajemen tambang dengan akses cepat ke laporan dan data penting.</p>
                </div>
            </div>
            <div class="actions">
                <a class="button-link" href="/profil">Profil</a>
                <form method="POST" action="/logout" style="margin:0;">
                    @csrf
                    <button class="button-logout" type="submit">Logout</button>
                </form>
            </div>
        </header>

        <section class="summary">
            <p>Selamat datang di dashboard utama tambang. Gunakan menu berikut untuk membuka modul utama dan mengelola operasi secara cepat, terstruktur, dan profesional.</p>
        </section>

        <section class="menu-grid">
            <a href="#" class="menu-card">
                <div class="menu-icon">💼</div>
                <div class="menu-content">
                    <h2 class="menu-title">Laporan Mitra</h2>
                    <p class="menu-description">Akses ringkasan mitra kerja dan laporan partner dalam satu tampilan.</p>
                </div>
            </a>
            <a href="/hse" class="menu-card">
                <div class="menu-icon">⚠️</div>
                <div class="menu-content">
                    <h2 class="menu-title">HSE Action</h2>
                    <p class="menu-description">Masuk ke halaman HSE Action untuk melihat daftar submenu keselamatan lengkap.</p>
                </div>
            </a>
            <a href="#" class="menu-card">
                <div class="menu-icon">🛡️</div>
                <div class="menu-content">
                    <h2 class="menu-title">Laporan Bahaya</h2>
                    <p class="menu-description">Catat, pantau, dan tindak lanjuti bahaya di area kerja dengan mudah.</p>
                </div>
            </a>
            <a href="#" class="menu-card">
                <div class="menu-icon">📁</div>
                <div class="menu-content">
                    <h2 class="menu-title">Master Data</h2>
                    <p class="menu-description">Kelola data master untuk kategori, lokasi, dan standar operasional tambang.</p>
                </div>
            </a>
        </section>

        <p class="footer-note">Home ini sudah dirapikan untuk navigasi cepat dan tampilan yang lebih profesional.</p>
    </div>
</body>
</html>