<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengawalan - HSE Tambang</title>
    <style>
        :root {
            font-family: 'Inter', system-ui, sans-serif;
            color: #1d1b16;
            background: #f4f0e6;
        }
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(180deg, #faf7f1 0%, #f0e8d5 100%);
        }
        .shell {
            max-width: 1024px;
            margin: 0 auto;
            padding: 28px 20px 40px;
        }
        .header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 14px;
            background: #fff;
            border-radius: 20px;
            padding: 24px 26px;
            box-shadow: 0 18px 40px rgba(21, 18, 13, 0.09);
            border: 1px solid rgba(133, 102, 52, 0.12);
        }
        .header-left h1 {
            margin: 0 0 8px;
            font-size: clamp(2rem, 2.4vw, 2.6rem);
            color: #2a2316;
        }
        .header-left p {
            margin: 0;
            color: #6f613f;
            line-height: 1.7;
            max-width: 760px;
        }
        .nav-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            align-items: center;
        }
        .nav-link,
        .nav-button {
            width: auto;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 18px;
            border-radius: 12px;
            border: 1px solid rgba(133, 102, 52, 0.14);
            font-weight: 600;
            text-decoration: none;
            color: #3c3322;
            background: #fff;
            transition: transform 0.18s ease, background 0.18s ease;
        }
        .nav-link:hover,
        .nav-button:hover {
            transform: translateY(-1px);
            background: #fbf6e8;
        }
        .overview {
            margin: 26px 0;
            padding: 22px 24px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(133, 102, 52, 0.08);
            color: #5a4d36;
        }
        .overview p {
            margin: 0;
            line-height: 1.8;
        }
        .action-panel {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
            margin-bottom: 16px;
        }
        .action-panel h2 {
            margin: 0;
            font-size: 1.3rem;
            color: #2a2316;
        }
        .button-primary {
            background: #d09a39;
            color: #fff;
            border-color: transparent;
        }
        .button-secondary {
            background: #fff;
            color: #4c412d;
        }
        .button-primary:hover,
        .button-secondary:hover {
            transform: translateY(-1px);
            background: #e1b152;
        }
        .form-panel {
            background: #fff;
            border: 1px solid rgba(133, 102, 52, 0.12);
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(21, 18, 13, 0.08);
            padding: 24px;
        }
        .form-panel.hidden {
            display: none;
        }
        .form-row {
            display: grid;
            gap: 18px;
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
        .form-row.full {
            grid-template-columns: 1fr;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #5f5239;
            font-weight: 600;
        }
        input,
        select,
        textarea {
            width: 100%;
            border: 1px solid rgba(133, 102, 52, 0.16);
            border-radius: 14px;
            background: #fcf7ed;
            color: #3c3322;
            padding: 14px 16px;
            font-size: 0.97rem;
            outline: none;
            transition: border-color 0.18s ease, box-shadow 0.18s ease;
        }
        input:focus,
        select:focus,
        textarea:focus {
            border-color: rgba(208, 154, 57, 0.7);
            box-shadow: 0 0 0 4px rgba(208, 154, 57, 0.12);
        }
        .field-group {
            display: flex;
            flex-direction: column;
        }
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 18px;
            flex-wrap: wrap;
        }
        .history-panel {
            margin-top: 24px;
            padding: 22px 24px;
            border-radius: 20px;
            background: #fff;
            border: 1px solid rgba(133, 102, 52, 0.12);
            box-shadow: 0 12px 35px rgba(21, 18, 13, 0.05);
        }
        .history-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-bottom: 18px;
        }
        .history-header h3 {
            margin: 0;
            font-size: 1.1rem;
            color: #2a2316;
        }
        .history-header span {
            color: #6f613f;
            font-size: 0.95rem;
        }
        .history-empty {
            color: #6f613f;
            padding: 18px 0;
            border-top: 1px solid rgba(133, 102, 52, 0.08);
        }
        .history-table-wrapper {
            overflow-x: auto;
        }
        .history-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 820px;
        }
        .history-table th,
        .history-table td {
            padding: 14px 16px;
            text-align: left;
            border-bottom: 1px solid rgba(133, 102, 52, 0.08);
            color: #55482f;
        }
        .history-table th {
            background: #faf5eb;
            color: #3f3321;
            font-weight: 700;
        }
        .history-table tbody tr:hover {
            background: rgba(208, 154, 57, 0.08);
        }
        .action-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        .table-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 8px 12px;
            border-radius: 10px;
            font-size: 0.92rem;
            text-decoration: none;
            transition: transform 0.15s ease, background 0.15s ease, border-color 0.15s ease;
        }
        .button-edit {
            background: #d09a39;
            color: #fff;
        }
        .button-print {
            background: #fff;
            color: #4c412d;
            border: 1px solid rgba(133, 102, 52, 0.16);
        }
        .table-button:hover {
            transform: translateY(-1px);
        }
        .alert {
            padding: 16px 18px;
            background: #f2e7d6;
            color: #5a4d36;
            border-left: 4px solid #d09a39;
            border-radius: 14px;
            margin-bottom: 22px;
        }
        @media (max-width: 820px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            .history-table {
                min-width: 100%;
            }
            .header {
                flex-direction: column;
                align-items: flex-start;
            }
            .nav-actions {
                justify-content: flex-start;
            }
        }
    </style>
</head>
<body>
    <div class="shell">
        <header class="header">
            <div class="header-left">
                <h1>Pengawalan</h1>
                <p>Kelola laporan pengawalan untuk operasi tambang dan catat rute, tanggal, serta evidence dalam satu tampilan.</p>
            </div>
            <div class="nav-actions">
                <a class="nav-link" href="/hse">Kembali ke HSE</a>
                <a class="nav-link" href="/home">Home</a>
            </div>
        </header>

        <?php if(session('success')): ?>
            <div class="alert"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <section class="overview">
            <p>Gunakan tombol Tambah Laporan untuk membuat dokumentasi pengawalan baru. Form akan muncul langsung di bawah untuk memasukkan Nama, NIK, Grup, tanggal, rute pengawalan, dan evidence.</p>
        </section>

        <section class="history-panel">
            <div class="history-header">
                <h3>Historical Pengawalan</h3>
                <span><?php echo e(count($history)); ?> laporan tersimpan</span>
            </div>
            <?php if(count($history) === 0): ?>
                <div class="history-empty">Belum ada laporan pengawalan. Tambahkan laporan untuk melihat history di sini.</div>
            <?php else: ?>
                <div class="history-table-wrapper">
                    <table class="history-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Grup</th>
                                <th>Tanggal</th>
                                <th>Yang Dikawal</th>
                                <th>Rute</th>
                                <th>Evidence</th>
                                <th>Waktu</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($index + 1); ?></td>
                                    <td><?php echo e($report['nama']); ?></td>
                                    <td><?php echo e($report['nik']); ?></td>
                                    <td><?php echo e($report['grup']); ?></td>
                                    <td><?php echo e($report['tanggal']); ?></td>
                                    <td><?php echo e($report['yang_dikawal']); ?></td>
                                    <td><?php echo e($report['rute_pengawalan']); ?></td>
                                    <td><?php echo e($report['evidence']); ?></td>
                                    <td><?php echo e($report['created_at']); ?></td>
                                    <td>
                                        <div class="action-buttons">
                                            <a class="table-button button-edit" href="/hse/pengawalan/<?php echo e($index); ?>/edit">Edit</a>
                                            <a class="table-button button-print" href="/hse/pengawalan/<?php echo e($index); ?>/print" target="_blank">Cetak</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </section>

        <div class="action-panel">
            <h2>Daftar Laporan Pengawalan</h2>
            <button id="toggleForm" class="nav-button button-primary" type="button">Tambah Laporan</button>
        </div>

        <section id="reportForm" class="form-panel hidden">
            <form method="POST" action="/hse/pengawalan/save" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-row">
                    <div class="field-group">
                        <label for="nama">Nama</label>
                        <input id="nama" name="nama" type="text" placeholder="Figo Risky" required>
                    </div>
                    <div class="field-group">
                        <label for="nik">NIK</label>
                        <input id="nik" name="nik" type="text" placeholder="9523131985" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="field-group">
                        <label for="grup">Grup</label>
                        <select id="grup" name="grup" required>
                            <option value="" disabled selected>Pilih grup</option>
                            <option value="Tim A">Tim A</option>
                            <option value="Tim B">Tim B</option>
                            <option value="Tim C">Tim C</option>
                        </select>
                    </div>
                    <div class="field-group">
                        <label for="tanggal">Tanggal</label>
                        <input id="tanggal" name="tanggal" type="date" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="field-group">
                        <label for="yang_dikawal">Yang Dikawal</label>
                        <input id="yang_dikawal" name="yang_dikawal" type="text" placeholder="Nama orang atau aset yang dikawal" required>
                    </div>
                    <div class="field-group">
                        <label for="rute_pengawalan">Rute Pengawalan</label>
                        <input id="rute_pengawalan" name="rute_pengawalan" type="text" placeholder="Rute pengawalan" required>
                    </div>
                </div>
                <div class="form-row full">
                    <div class="field-group">
                        <label for="evidence">Evidence</label>
                        <input id="evidence" name="evidence" type="file" accept="image/*">
                    </div>
                </div>
                <div class="form-actions">
                    <button type="button" id="cancelForm" class="nav-button button-secondary">Batal</button>
                    <button type="submit" class="nav-button button-primary">Simpan</button>
                </div>
            </form>
        </section>
    </div>

    <script>
        const toggleButton = document.getElementById('toggleForm');
        const cancelButton = document.getElementById('cancelForm');
        const reportForm = document.getElementById('reportForm');

        const toggleFormVisibility = () => {
            const isHidden = reportForm.classList.toggle('hidden');
            toggleButton.textContent = isHidden ? 'Tambah Laporan' : 'Tutup Form';
        };

        toggleButton.addEventListener('click', toggleFormVisibility);
        cancelButton.addEventListener('click', () => {
            reportForm.classList.add('hidden');
            toggleButton.textContent = 'Tambah Laporan';
        });
    </script>
</body>
</html>
<?php /**PATH C:\laragon\www\myapp\resources\views/hse_pengawalan.blade.php ENDPATH**/ ?>