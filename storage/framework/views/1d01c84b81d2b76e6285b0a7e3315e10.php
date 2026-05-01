<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Laporan SCI</title>
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
            max-width: 1080px;
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
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }
        .form-row {
            display: grid;
            gap: 10px;
        }
        .label-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
            color: #d5c38c;
            font-size: 0.95rem;
        }
        .label-group input,
        .label-group textarea,
        .label-group select {
            width: 100%;
            padding: 14px 16px;
            border-radius: 14px;
            border: 1px solid rgba(212, 175, 55, 0.18);
            background: rgba(255, 255, 255, 0.06);
            color: #f4ecd8;
            font-family: inherit;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.2);
            transition: border-color 0.2s ease, background 0.2s ease;
        }
        .label-group input:focus,
        .label-group textarea:focus,
        .label-group select:focus {
            outline: none;
            border-color: rgba(212, 175, 55, 0.35);
            background: rgba(255, 255, 255, 0.1);
        }
        .label-group textarea {
            min-height: 72px;
        }
        .detail-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
            margin-bottom: 12px;
        }
        .detail-item {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(212, 175, 55, 0.12);
            border-radius: 16px;
            padding: 16px 18px;
        }
        .detail-item strong {
            display: block;
            margin-bottom: 8px;
            font-size: 0.95rem;
            color: #f4ecd8;
        }
        .table-section-header {
            background: rgba(212, 175, 55, 0.16);
            font-weight: 700;
            text-align: center;
            letter-spacing: 0.02em;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 16px;
            background: rgba(255, 255, 255, 0.04);
            overflow: hidden;
            border-radius: 18px;
        }
        th,
        td {
            border: 1px solid rgba(255, 255, 255, 0.08);
            padding: 14px 16px;
            text-align: left;
            vertical-align: top;
        }
        th {
            background: rgba(212, 175, 55, 0.18);
            color: #f4ecd8;
            font-weight: 700;
            letter-spacing: 0.01em;
        }
        tbody tr:nth-child(even) {
            background: rgba(255, 255, 255, 0.03);
        }
        tbody tr:hover {
            background: rgba(255, 255, 255, 0.06);
        }
        td.center {
            text-align: center;
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
        textarea {
            min-height: 64px;
            resize: vertical;
        }
        .submit-row {
            display: flex;
            justify-content: flex-end;
        }
        .submit-row button {
            cursor: pointer;
            border-radius: 12px;
            padding: 14px 22px;
            border: 1px solid rgba(212, 175, 55, 0.18);
            background: rgba(212, 175, 55, 0.14);
            color: #f4ecd8;
            font-weight: 700;
            transition: transform 0.2s ease, background 0.2s ease;
        }
        .submit-row button:hover {
            transform: translateY(-2px);
            background: rgba(212, 175, 55, 0.24);
        }
        @media (max-width: 860px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }
            .detail-grid {
                grid-template-columns: 1fr;
            }
            .detail-item {
                padding: 14px 16px;
            }
            table {
                display: block;
                overflow-x: auto;
            }
            th,
            td {
                white-space: nowrap;
            }
        }
    </style>
</head>
<body>
    <div class="shell">
        <header class="header">
            <div class="header-left">
                <h1>Form Laporan SCI</h1>
                <p>Isi checklist SCI menggunakan jawaban √/X dan tambahkan temuan serta saran tindak perbaikan.</p>
            </div>
            <div class="nav-actions">
                <a class="nav-link" href="/hse/sci">Kembali ke Daftar</a>
                <a class="nav-link" href="/hse">Kembali ke HSE</a>
            </div>
        </header>

        <div class="content">
            <div class="card">
                <h2>Detail Laporan</h2>
                <form method="POST" action="/hse/sci/save">
                    <?php echo csrf_field(); ?>
                    <div class="detail-grid">
                        <div class="detail-item">
                            <strong>Tanggal</strong>
                            <input type="date" name="inspection_date" required>
                        </div>
                        <div class="detail-item">
                            <strong>PIT</strong>
                            <input type="text" name="pit" placeholder="Nama PIT atau lokasi" required>
                        </div>
                        <div class="detail-item">
                            <strong>Hari / Shift</strong>
                            <input type="text" name="shift" placeholder="Contoh: Senin / Shift 1" required>
                        </div>
                        <div class="detail-item">
                            <strong>Inspector</strong>
                            <input type="text" name="inspector" placeholder="Nama inspector" required>
                        </div>
                        <div class="detail-item">
                            <strong>Crew</strong>
                            <input type="text" name="crew" placeholder="Nama crew" required>
                        </div>
                        <div class="detail-item">
                            <strong>SPV HSE</strong>
                            <input type="text" name="spv_hse" placeholder="Nama SPV HSE" required>
                        </div>
                        <div class="detail-item" style="grid-column: span 2;">
                            <strong>Judul Laporan</strong>
                            <input type="text" name="report_title" placeholder="Contoh: SCI Inspeksi Produksi" required>
                        </div>
                    </div>

                    <h2 style="margin-top: 28px;">Checklist Utama</h2>
                    <p>Pilih kondisi pada setiap pertanyaan dengan √ (sesuai) / X (tidak sesuai).</p>
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 6%;">No</th>
                                <th style="width: 42%;">Pertanyaan</th>
                                <th style="width: 20%;">Kondisi</th>
                                <th style="width: 32%;">Catatan Temuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4" class="table-section-header">UNIT YANG DIPERIKSA</td>
                            </tr>
                            <tr>
                                <td class="center">1</td>
                                <td>Apakah Semua Operator/Driver memiliki SIM-DLT sesuai dengan Unit yang digunakan / diizinkan?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_1" value="v" required>√</label>
                                        <label><input type="radio" name="condition_1" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_1" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">2</td>
                                <td>Apakah Operator/Driver menggunakan perlengkapan APD yang sesuai?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_2" value="v" required>√</label>
                                        <label><input type="radio" name="condition_2" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_2" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">3</td>
                                <td>Apakah Operator/Driver melakukan Checklist P2H?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_3" value="v" required>√</label>
                                        <label><input type="radio" name="condition_3" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_3" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">4</td>
                                <td>Apakah Operator/Driver menggunakan Sabuk keselamatan (Safety Belt)?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_4" value="v" required>√</label>
                                        <label><input type="radio" name="condition_4" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_4" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">5</td>
                                <td>Apakah Rem, Kemudi, Safety Belt Berfungsi baik?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_5" value="v" required>√</label>
                                        <label><input type="radio" name="condition_5" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_5" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">6</td>
                                <td>Apakah Lampu dan Rotary berfungsi / menyala?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_6" value="v" required>√</label>
                                        <label><input type="radio" name="condition_6" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_6" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">7</td>
                                <td>Apakah APAR & Kotak P3K tersedia dan siap digunakan?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_7" value="v" required>√</label>
                                        <label><input type="radio" name="condition_7" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_7" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">8</td>
                                <td>Apakah Unit A2B yang Beroperasi di Batubara sudah dilakukan pencucian unit?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_8" value="v" required>√</label>
                                        <label><input type="radio" name="condition_8" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_8" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">9</td>
                                <td>Apakah kabin unit dalam kondisi rapi</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_9" value="v" required>√</label>
                                        <label><input type="radio" name="condition_9" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_9" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="4" style="background: rgba(212, 175, 55, 0.16); font-weight: bold; text-align: center;">HAULING ROAD</td>
                            </tr>
                            <tr>
                                <td class="center">10</td>
                                <td>Apakah Kondisi Jalan Hauling aman dari (debu, becek, rusak,Undulasi)?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_10" value="v" required>√</label>
                                        <label><input type="radio" name="condition_10" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_10" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">11</td>
                                <td>Apakah lebar & grade jalan sudah sesuai ? ( Untuk Lebar Jalan 2 arah : 3.5 X Lebar unit terbesar, Untuk Lebar Jalan 1 arah : 2x lebar unit terbesar (Grader Max: 8%)</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_11" value="v" required>√</label>
                                        <label><input type="radio" name="condition_11" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_11" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">12</td>
                                <td>Apakah Kondisi tebing di setiap jalan standar? (Tidak ada retakan, tidak ada potensi longsor, dll)</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_12" value="v" required>√</label>
                                        <label><input type="radio" name="condition_12" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_12" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">13</td>
                                <td>Apakah Driver / Operator mengoperasikan Unit tidak lebih dari batas kecepatan? (Max : 40 Km/Jam)</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_13" value="v" required>√</label>
                                        <label><input type="radio" name="condition_13" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_13" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">14</td>
                                <td>Apakah Kondisi Safety Berm / Tanggul ada (standar) di setiap jalan hauling? (Tinggi tanggul 1.5 X Tinggi unit terbesar)</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_14" value="v" required>√</label>
                                        <label><input type="radio" name="condition_14" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_14" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">15</td>
                                <td>Apakah Rambu-rambu di jalan hauling memadai & terlihat jelas ?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_15" value="v" required>√</label>
                                        <label><input type="radio" name="condition_15" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_15" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">16</td>
                                <td>Apakah Water Truck melakukan penyiraman secara rutin?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_16" value="v" required>√</label>
                                        <label><input type="radio" name="condition_16" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_16" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">17</td>
                                <td>Apakah Maintenance jalan dilakukan secara rutin?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_17" value="v" required>√</label>
                                        <label><input type="radio" name="condition_17" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_17" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">18</td>
                                <td>Apakah jalan terbebas dari penyempitan yang diakibatkan oleh spoil / Tumpukan material?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_18" value="v" required>√</label>
                                        <label><input type="radio" name="condition_18" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_18" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">19</td>
                                <td>Apakah Unit menjaga jarak aman saat beroperasi? (5 Kali panjang unit / 50 Meter)</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_19" value="v" required>√</label>
                                        <label><input type="radio" name="condition_19" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_19" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">20</td>
                                <td>Apabila jalan blind spot (pada kondisi jalan menikung, tanjakan / turunan) tersedia cermin cembung?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_20" value="v" required>√</label>
                                        <label><input type="radio" name="condition_20" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_20" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">21</td>
                                <td>Apakah kondisi pencahayaan memadai pada malam hari?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_21" value="v" required>√</label>
                                        <label><input type="radio" name="condition_21" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_21" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="4" style="background: rgba(212, 175, 55, 0.16); font-weight: bold; text-align: center;">FRONT LOADING</td>
                            </tr>
                            <tr>
                                <td class="center">22</td>
                                <td>Apakah area Front Loading terbebas dari potensi longsor dari Slope/Bench/Tebing?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_22" value="v" required>√</label>
                                        <label><input type="radio" name="condition_22" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_22" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">23</td>
                                <td>Apakah Kondisi Loading Point aman dari (debu, becek, rusak,Undulasi)?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_23" value="v" required>√</label>
                                        <label><input type="radio" name="condition_23" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_23" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">24</td>
                                <td>Apakah tinggi bench loading poin selevel kabin unit (Untuk metode bottom loading)?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_24" value="v" required>√</label>
                                        <label><input type="radio" name="condition_24" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_24" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">25</td>
                                <td>Apakah terdapat rambu penanda kabel,  tanggul pengaman kabel dan pemandu shovel di area front? (SHOVEL PC 3000)</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_25" value="v" required>√</label>
                                        <label><input type="radio" name="condition_25" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_25" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">26</td>
                                <td>Apakah Pemandu Shovel memiliki APD lengkap, radio komunikasi, dan SIB? (SHOVEL PC 3000)</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_26" value="v" required>√</label>
                                        <label><input type="radio" name="condition_26" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_26" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">27</td>
                                <td>Apakah permukaan loading point cukup rata / tidak miring untuk keamanan unit loader & hauler (Bebas dari potensi genangan)?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_27" value="v" required>√</label>
                                        <label><input type="radio" name="condition_27" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_27" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">28</td>
                                <td>Apakah Kondisi Pencahayaan memadai pada waktu malam hari?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_28" value="v" required>√</label>
                                        <label><input type="radio" name="condition_28" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_28" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">29</td>
                                <td>Apakah Unit menjaga jarak aman saat menunggu antrian loading?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_29" value="v" required>√</label>
                                        <label><input type="radio" name="condition_29" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_29" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">30</td>
                                <td>Apakah Luas area untuk manuver Unit (HD/DT) di Front Loading memadai (standar)? (2 Kali Radius Putar/ 26 Meter)</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_30" value="v" required>√</label>
                                        <label><input type="radio" name="condition_30" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_30" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">31</td>
                                <td>Apakah terdapat pengawasan di area front loading?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_31" value="v" required>√</label>
                                        <label><input type="radio" name="condition_31" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_31" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">32</td>
                                <td>Apakah terdapat area parkir sarana di area Front?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_32" value="v" required>√</label>
                                        <label><input type="radio" name="condition_32" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_32" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="4" style="background: rgba(212, 175, 55, 0.16); font-weight: bold; text-align: center;">DUMPING POINT</td>
                            </tr>
                            <tr>
                                <td class="center">33</td>
                                <td>Apakah Kondisi Dumping Point aman dari (debu, becek, rusak, bergelombang / undulasi)?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_33" value="v" required>√</label>
                                        <label><input type="radio" name="condition_33" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_33" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">34</td>
                                <td>Apakah Semua rambu-rambu petunjuk terlihat jelas?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_34" value="v" required>√</label>
                                        <label><input type="radio" name="condition_34" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_34" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">35</td>
                                <td>Apakah Semua Unit menurunkan Vessel saat selesai melakukan dumping?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_35" value="v" required>√</label>
                                        <label><input type="radio" name="condition_35" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_35" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">36</td>
                                <td>Apakah Kondisi area dumping tidak terlalu padat (crowded)?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_36" value="v" required>√</label>
                                        <label><input type="radio" name="condition_36" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_36" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">37</td>
                                <td>Apakah Penerangan cukup menerangi area dumping pada malam hari?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_37" value="v" required>√</label>
                                        <label><input type="radio" name="condition_37" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_37" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">38</td>
                                <td>Apakah ada tanggul pengaman di ujung dumpingan</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_38" value="v" required>√</label>
                                        <label><input type="radio" name="condition_38" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_38" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">39</td>
                                <td>Apakah tersedia Dumping limit untuk dumping ketinggian/Lumpur?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_39" value="v" required>√</label>
                                        <label><input type="radio" name="condition_39" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_39" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                            <tr>
                                <td class="center">40</td>
                                <td>Apakah tersedia Akses dan Parkir Sarana yang standard di area disposal?</td>
                                <td class="center">
                                    <div class="radio-group">
                                        <label><input type="radio" name="condition_40" value="v" required>√</label>
                                        <label><input type="radio" name="condition_40" value="x">X</label>
                                    </div>
                                </td>
                                <td><textarea name="note_40" placeholder="Tuliskan temuan jika ada"></textarea></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="submit-row">
                        <button type="submit">Simpan Laporan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<?php /**PATH C:\laragon\www\myapp\resources\views/hse_sci_form.blade.php ENDPATH**/ ?>