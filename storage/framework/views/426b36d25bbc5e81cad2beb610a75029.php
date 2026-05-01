<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan Pengawalan</title>
    <style>
        body { margin: 0; background: #f4f0e6; font-family: 'Inter', system-ui, sans-serif; color: #1d1b16; }
        .shell { max-width: 820px; margin: 32px auto; padding: 24px; background: #fff; border-radius: 18px; border: 1px solid rgba(133,102,52,0.12); }
        h1 { margin: 0 0 12px; font-size: 2rem; }
        .section { margin-bottom: 22px; }
        .section h2 { margin: 0 0 10px; font-size: 1.05rem; color: #42361f; }
        .field { display: grid; grid-template-columns: 200px 1fr; gap: 8px; margin-bottom: 10px; }
        .field strong { display: block; color: #5b4a33; }
        .field span { color: #3c3322; }
        .print-note { margin-top: 18px; padding: 14px 16px; background: #fbf3e1; border-left: 4px solid #d09a39; border-radius: 12px; color: #6f613f; }
        .evidence-image-wrapper { margin-top: 18px; border: 1px solid rgba(133,102,52,0.18); border-radius: 14px; overflow: hidden; background: #fff; }
        .evidence-image { width: 100%; display: block; max-height: 420px; object-fit: contain; }
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 12px 18px; border-radius: 12px; border: none; background: #d09a39; color: #fff; text-decoration: none; font-weight: 600; margin-top: 16px; }
        @media print { .button { display: none; } }
    </style>
</head>
<body>
    <div class="shell">
        <h1>Laporan Pengawalan</h1>
        <div class="section">
            <div class="field"><strong>Nama</strong><span><?php echo e($report['nama']); ?></span></div>
            <div class="field"><strong>NIK</strong><span><?php echo e($report['nik']); ?></span></div>
            <div class="field"><strong>Grup</strong><span><?php echo e($report['grup']); ?></span></div>
            <div class="field"><strong>Tanggal</strong><span><?php echo e($report['tanggal']); ?></span></div>
        </div>
        <div class="section">
            <div class="field"><strong>Yang Dikawal</strong><span><?php echo e($report['yang_dikawal']); ?></span></div>
            <div class="field"><strong>Rute Pengawalan</strong><span><?php echo e($report['rute_pengawalan']); ?></span></div>
            <div class="field"><strong>Evidence</strong><span><?php echo e($report['evidence'] === '-' ? 'Tidak ada file' : basename($report['evidence'])); ?></span></div>
        </div>
        <?php if($report['evidence'] !== '-' && file_exists(public_path($report['evidence']))): ?>
            <div class="section">
                <h2>Preview Evidence</h2>
                <div class="evidence-image-wrapper">
                    <img class="evidence-image" src="/<?php echo e($report['evidence']); ?>" alt="Evidence Pengawalan">
                </div>
            </div>
        <?php endif; ?>
        <div class="section">
            <div class="field"><strong>Waktu Dibuat</strong><span><?php echo e($report['created_at']); ?></span></div>
        </div>
        <div class="print-note">Gunakan tombol cetak browser untuk menyimpan atau mencetak laporan ini.</div>
        <a class="button" href="#" onclick="window.print();return false;">Cetak Laporan</a>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\myapp\resources\views/hse_pengawalan_print.blade.php ENDPATH**/ ?>