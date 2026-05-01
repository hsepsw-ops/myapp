<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Laporan Pengawalan</title>
    <style>
        :root {
            font-family: 'Inter', system-ui, sans-serif;
            color: #1d1b16;
            background: #f4f0e6;
        }
        * { box-sizing: border-box; }
        body { margin: 0; min-height: 100vh; background: linear-gradient(180deg, #faf7f1 0%, #f0e8d5 100%); }
        .shell { max-width: 980px; margin: 0 auto; padding: 28px 20px 40px; }
        .panel { background: #fff; border-radius: 20px; padding: 26px; border: 1px solid rgba(133, 102, 52, 0.12); box-shadow: 0 18px 40px rgba(21, 18, 13, 0.09); }
        h1 { margin: 0 0 10px; font-size: clamp(2rem, 2.3vw, 2.4rem); color: #2a2316; }
        p { margin: 0 0 24px; color: #6f613f; line-height: 1.75; }
        .actions { display: flex; flex-wrap: wrap; gap: 12px; margin-bottom: 20px; }
        .button, .link { display: inline-flex; align-items: center; justify-content: center; padding: 12px 18px; border-radius: 12px; text-decoration: none; font-weight: 600; transition: transform 0.15s ease; }
        .link { color: #4c412d; background: #fff; border: 1px solid rgba(133, 102, 52, 0.14); }
        .button { background: #d09a39; color: #fff; border: none; }
        .button:hover, .link:hover { transform: translateY(-1px); }
        .form-row { display: grid; gap: 18px; grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .form-row.full { grid-template-columns: 1fr; }
        label { display: block; margin-bottom: 8px; color: #5f5239; font-weight: 600; }
        input, select { width: 100%; padding: 14px 16px; border-radius: 14px; border: 1px solid rgba(133, 102, 52, 0.16); background: #fcf7ed; color: #3c3322; font-size: 0.97rem; }
        .form-actions { display: flex; justify-content: flex-end; gap: 12px; margin-top: 20px; flex-wrap: wrap; }
        @media (max-width: 820px) { .form-row { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
    <div class="shell">
        <div class="panel">
            <div class="actions">
                <a class="link" href="/hse/pengawalan">Kembali ke History</a>
            </div>
            <h1>Edit Laporan Pengawalan</h1>
            <p>Perbarui data laporan pengawalan lalu simpan untuk memperbaharui history.</p>

            <form method="POST" action="/hse/pengawalan/{{ $index }}/update" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div>
                        <label for="nama">Nama</label>
                        <input id="nama" name="nama" type="text" value="{{ $report['nama'] }}" required>
                    </div>
                    <div>
                        <label for="nik">NIK</label>
                        <input id="nik" name="nik" type="text" value="{{ $report['nik'] }}" required>
                    </div>
                </div>
                <div class="form-row">
                    <div>
                        <label for="grup">Grup</label>
                        <select id="grup" name="grup" required>
                            <option value="Tim A" {{ $report['grup'] === 'Tim A' ? 'selected' : '' }}>Tim A</option>
                            <option value="Tim B" {{ $report['grup'] === 'Tim B' ? 'selected' : '' }}>Tim B</option>
                            <option value="Tim C" {{ $report['grup'] === 'Tim C' ? 'selected' : '' }}>Tim C</option>
                        </select>
                    </div>
                    <div>
                        <label for="tanggal">Tanggal</label>
                        <input id="tanggal" name="tanggal" type="date" value="{{ $report['tanggal'] }}" required>
                    </div>
                </div>
                <div class="form-row">
                    <div>
                        <label for="yang_dikawal">Yang Dikawal</label>
                        <input id="yang_dikawal" name="yang_dikawal" type="text" value="{{ $report['yang_dikawal'] }}" required>
                    </div>
                    <div>
                        <label for="rute_pengawalan">Rute Pengawalan</label>
                        <input id="rute_pengawalan" name="rute_pengawalan" type="text" value="{{ $report['rute_pengawalan'] }}" required>
                    </div>
                </div>
                <div class="form-row full">
                    <div>
                        <label for="evidence">Evidence</label>
                        <input id="evidence" name="evidence" type="file" accept="image/*">
                        <small>File saat ini: {{ $report['evidence'] }}</small>
                    </div>
                </div>
                <div class="form-actions">
                    <a class="link" href="/hse/pengawalan">Batal</a>
                    <button class="button" type="submit">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
