<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan SCI - HSE Action</title>
    <style>
        :root {
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
            background: radial-gradient(circle at top left, rgba(212, 175, 55, 0.14), transparent 28%),
                        radial-gradient(circle at bottom right, rgba(255, 183, 0, 0.1), transparent 20%),
                        #111111;
        }
        .shell {
            max-width: 1020px;
            margin: 0 auto;
            padding: 28px 22px 36px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 24px 28px;
            border-radius: 18px;
            background: rgba(24, 20, 16, 0.9);
            border: 1px solid rgba(212, 175, 55, 0.18);
            box-shadow: 0 22px 60px rgba(0, 0, 0, 0.24);
            gap: 18px;
        }
        .header-left h1 {
            margin: 0 0 10px;
            font-size: clamp(2rem, 2.4vw, 2.8rem);
        }
        .header-left p {
            margin: 0;
            color: #d5c38c;
            line-height: 1.7;
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
            background: rgba(28, 24, 20, 0.9);
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
        .content {
            margin-top: 30px;
            display: grid;
            gap: 24px;
        }
        .card {
            border-radius: 22px;
            padding: 28px;
            background: rgba(24, 20, 16, 0.92);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: inset 0 0 0 1px rgba(212, 175, 55, 0.08);
        }
        .card h2 {
            margin: 0 0 16px;
            font-size: 1.6rem;
        }
        .card p {
            margin: 0 0 18px;
            color: #d5c38c;
            line-height: 1.8;
        }
        .section-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 12px 0 18px;
            color: #d5c38c;
            font-size: 0.95rem;
        }
        .section-meta strong {
            color: #ffffff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 16px;
            background: rgba(255, 255, 255, 0.04);
        }
        th,
        td {
            border: 1px solid rgba(255, 255, 255, 0.08);
            padding: 12px 14px;
            text-align: left;
            vertical-align: top;
        }
        th {
            background: rgba(212, 175, 55, 0.16);
            color: #f4ecd8;
            font-weight: 700;
        }
        td.question {
            width: 58%;
        }
        td.center {
            text-align: center;
        }
        .section-table {
            margin-bottom: 26px;
        }
        .section-table tr:nth-child(odd) {
            background: rgba(255, 255, 255, 0.02);
        }
        .hidden {
            display: none;
        }
        textarea {
            width: 100%;
            min-height: 64px;
            padding: 10px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.12);
            background: rgba(255, 255, 255, 0.05);
            color: #f4ecd8;
            resize: vertical;
            font-family: inherit;
        }
        .radio-group {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
        }
        .radio-group label {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
            font-size: 0.95rem;
        }
        .radio-group input {
            accent-color: #d4af37;
        }
        .report-summary {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 12px;
        }
        .report-summary li {
            padding: 18px 20px;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(212, 175, 55, 0.12);
        }
        .report-summary li h3 {
            margin: 0 0 8px;
        }
        .report-summary li p {
            margin: 0;
            color: #c8b980;
        }
        @media (max-width: 860px) {
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
                <h1>Laporan SCI</h1>
                <p>Halaman laporan SCI memberikan ringkasan temuan dan daftar pertanyaan inspeksi sesuai lampiran HSE.</p>
            </div>
            <div class="nav-actions">
                <a class="nav-link" href="/hse">Kembali ke HSE</a>
                <a class="nav-link" href="/home">Home</a>
            </div>
        </header>

        <div class="content">
            <?php if(session('success')): ?>
                <div class="card">
                    <h2>Berhasil</h2>
                    <p><?php echo e(session('success')); ?></p>
                </div>
            <?php endif; ?>

            <div class="card">
                <h2>Opsi Laporan SCI</h2>
                <p>Mulai laporan baru dengan menekan tombol di bawah. Formulir laporan akan muncul di halaman terpisah.</p>
                <a href="/hse/sci/create" class="nav-button">Tambah Laporan</a>
            </div>

            <div class="card">
                <h2>Daftar Laporan SCI</h2>
                <p>Ringkasan laporan yang sudah dibuat sebelumnya.</p>
                <ul class="report-summary">
                    <?php if(count($reports) === 0): ?>
                        <li>Tidak ada laporan SCI. Klik Tambah Laporan untuk membuat laporan baru.</li>
                    <?php else: ?>
                        <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <h3><?php echo e($report['title'] ?? 'SCI Report #' . ($index + 1)); ?></h3>
                                <p>Tanggal: <?php echo e($report['created_at'] ?? '-'); ?> • Petugas: <?php echo e($report['inspector'] ?? 'N/A'); ?></p>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </ul>
            </div>

        </div>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\myapp\resources\views/hse_sci.blade.php ENDPATH**/ ?>