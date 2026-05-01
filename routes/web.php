<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    // Simple login logic
    $username = request('username');
    $password = request('password');
    if ($username === 'admin' && $password === 'password') {
        session(['logged_in' => true]);
        return redirect('/home');
    }
    return back()->with('error', 'Invalid credentials');
});

Route::post('/logout', function () {
    session()->forget('logged_in');
    return redirect('/');
});

Route::middleware(['web'])->group(function () {
    Route::get('/home', function () {
        if (!session('logged_in')) {
            return redirect('/login');
        }
        return view('home');
    });

    Route::get('/hse', function () {
        if (!session('logged_in')) {
            return redirect('/login');
        }
        return view('hse');
    });

    Route::get('/hse/pengawalan', function () {
        if (!session('logged_in')) {
            return redirect('/login');
        }

        $history = session('pengawalan_history', []);
        return view('hse_pengawalan', ['history' => $history]);
    });

    Route::get('/hse/sci', function () {
        if (!session('logged_in')) {
            return redirect('/login');
        }

        $reports = session('sci_reports', []);
        return view('hse_sci', ['reports' => $reports]);
    });

    Route::get('/hse/sci/create', function () {
        if (!session('logged_in')) {
            return redirect('/login');
        }

        return view('hse_sci_form');
    });

    Route::post('/hse/sci/save', function () {
        if (!session('logged_in')) {
            return redirect('/login');
        }

        $data = request()->all();
        $data['created_at'] = now()->format('Y-m-d H:i');
        $data['title'] = request('report_title', 'Laporan SCI Baru');

        session()->push('sci_reports', $data);
        return redirect('/hse/sci')->with('success', 'Laporan SCI berhasil disimpan.');
    });

    Route::post('/hse/pengawalan/save', function () {
        if (!session('logged_in')) {
            return redirect('/login');
        }

        $evidencePath = '-';
        if ($file = request()->file('evidence')) {
            if (!file_exists(public_path('uploads'))) {
                mkdir(public_path('uploads'), 0755, true);
            }
            $filename = time() . '_' . preg_replace('/[^A-Za-z0-9\.\-_]/', '_', $file->getClientOriginalName());
            $file->move(public_path('uploads'), $filename);
            $evidencePath = 'uploads/' . $filename;
        }

        $data = [
            'nama' => request('nama'),
            'nik' => request('nik'),
            'grup' => request('grup'),
            'tanggal' => request('tanggal'),
            'yang_dikawal' => request('yang_dikawal'),
            'rute_pengawalan' => request('rute_pengawalan'),
            'evidence' => $evidencePath,
            'created_at' => now()->format('Y-m-d H:i'),
        ];

        session()->push('pengawalan_history', $data);
        return back()->with('success', 'Laporan pengawalan berhasil disimpan.');
    });

    Route::get('/hse/pengawalan/{index}/edit', function ($index) {
        if (!session('logged_in')) {
            return redirect('/login');
        }

        $history = session('pengawalan_history', []);
        if (!isset($history[$index])) {
            return redirect('/hse/pengawalan')->with('success', 'Laporan tidak ditemukan.');
        }

        return view('hse_pengawalan_edit', [
            'report' => $history[$index],
            'index' => $index,
        ]);
    });

    Route::post('/hse/pengawalan/{index}/update', function ($index) {
        if (!session('logged_in')) {
            return redirect('/login');
        }

        $history = session('pengawalan_history', []);
        if (!isset($history[$index])) {
            return redirect('/hse/pengawalan')->with('success', 'Laporan tidak ditemukan.');
        }

        $evidencePath = $history[$index]['evidence'];
        if ($file = request()->file('evidence')) {
            if (!file_exists(public_path('uploads'))) {
                mkdir(public_path('uploads'), 0755, true);
            }
            $filename = time() . '_' . preg_replace('/[^A-Za-z0-9\.\-_]/', '_', $file->getClientOriginalName());
            $file->move(public_path('uploads'), $filename);
            $evidencePath = 'uploads/' . $filename;
        }

        $history[$index] = [
            'nama' => request('nama'),
            'nik' => request('nik'),
            'grup' => request('grup'),
            'tanggal' => request('tanggal'),
            'yang_dikawal' => request('yang_dikawal'),
            'rute_pengawalan' => request('rute_pengawalan'),
            'evidence' => $evidencePath,
            'created_at' => $history[$index]['created_at'],
        ];

        session(['pengawalan_history' => $history]);
        return redirect('/hse/pengawalan')->with('success', 'Laporan pengawalan berhasil diperbarui.');
    });

    Route::get('/hse/pengawalan/{index}/print', function ($index) {
        if (!session('logged_in')) {
            return redirect('/login');
        }

        $history = session('pengawalan_history', []);
        if (!isset($history[$index])) {
            return redirect('/hse/pengawalan')->with('success', 'Laporan tidak ditemukan.');
        }

        return view('hse_pengawalan_print', [
            'report' => $history[$index],
        ]);
    });

    Route::get('/profil', function () {
        if (!session('logged_in')) {
            return redirect('/login');
        }
        return view('profil');
    });
});
