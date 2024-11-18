<?php

use Illuminate\Support\Facades\Route;

// ===== Home ===== //
Route::get('/', \App\Livewire\Public\Home::class)->name("home");

// ===== Activity ===== //
Route::prefix('activity')->group(function () {
    Route::get('news', \App\Livewire\Public\Activity\News\Index::class)->name("news");
});

Route::get('/', function () {
    return view('welcome.home-page');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/sejarah', function () {
    return view('history.sejarah-page');
});

Route::get('/anggota', function () {
    return view('member.anggota-page');
});

Route::get('/activity', function () {
    return view('activity.aktivitas-page');
});
Route::get('/berita/semua', function () {
    return view('activity.berita.semua-berita-page');
});


Route::get('/berita/artikel', function () {
    return view('activity.berita.artikel-berita-page');
});

Route::get('/berita/penghargaan', function () {
    return view('activity.berita.penghargaan-berita-page');
});

Route::get('/riset-publikasi/dashboard', function () {
    return view('activity.riset-publikasi.dashboard-page');
});

Route::get('/innovillage/dashboard', function () {
    return view('activity.innovillage.dashboard-page');
});



// Login

Route::get('/login', function () {
    return view('admin.login');
})->middleware('guest')->name('login');

// Memastikan bahwa hanya user yang sudah login yang bisa mengakses route ini
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/project', function () {
        return view('admin.project.project-terkini');
    });
    Route::get('/upload-project', function () {
        return view('admin.project.upload-project');
    });

    Route::get('/aktivitas', function () {
        return view('admin.aktivitas.aktivitas');
    });

    Route::get('/news', function () {
        return view('admin.aktivitas.berita.berita');
    });

    Route::get('/upload-news', function () {
        return view('admin.aktivitas.berita.upload-news');
    });
    Route::get('/upload-news', function () {
        return view('admin.aktivitas.berita.upload-news');
    });

    // b. Riset dan Publikasi
    Route::get('/riset-publikasi', function () {
        return view('admin.aktivitas.riset-publikasi.dashboard');
    });

    Route::get('/innovillage', function () {
        return view('admin.aktivitas.riset-publikasi.innovillage');
    });
    Route::get('/jurnal', function () {
        return view('admin.aktivitas.riset-publikasi.jurnal');
    });
    Route::get('/upload-jurnal', function () {
        return view('admin.aktivitas.riset-publikasi.upload-jurnal');
    });
    Route::get('/upload-innovillage', function () {
        return view('admin.aktivitas.riset-publikasi.upload-innovillage');
    });


    // c. Inovasi
    Route::get('/inovasi', function () {
        return view('admin.aktivitas.inovasi.dashboard');
    });
    Route::get('/upload-inovasi', function () {
        return view('admin.aktivitas.inovasi.upload-inovasi');
    });

    // d. Bisnis
    Route::get('/bisnis', function () {
        return view('admin.aktivitas.bisnis.dashboard');
    });
    Route::get('/pelatihan', function () {
        return view('admin.aktivitas.bisnis.pelatihan');
    });
    Route::get('/kedai', function () {
        return view('admin.aktivitas.bisnis.kedai');
    });
    Route::get('/upload-pelatihan', function () {
        return view('admin.aktivitas.bisnis.upload-pelatihan');
    });
    Route::get('/upload-kedai', function () {
        return view('admin.aktivitas.bisnis.upload-kedai');
    });
    Route::get('/upload-news', function () {
        return view('admin.aktivitas.berita.upload-news');
    });

    // Anggota
    Route::get('/member', function () {
        return view('admin.anggota.anggota');
    });
    Route::get('/upload-member', function () {
        return view('admin.anggota.upload-anggota');
    });

    // Timeline
    Route::get('/timeline', function () {
        return view('admin.timeline.timeline');
    });
    Route::get('/upload-timeline', function () {
        return view('admin.timeline.upload-timeline');
    });

    // Program
    Route::get('/program', function () {
        return view('admin.program.program');
    });

    // a. Magang
    Route::get('/mbkm-magang', function () {
        return view('admin.program.magang.magang');
    });
    Route::get('/upload-mbkm-magang', function () {
        return view('admin.program.magang.upload-magang');
    });

    // b. Kerja sama
    Route::get('/kerja-sama', function () {
        return view('admin.program.kerja-sama.kerja-sama');
    });
    Route::get('/upload-kerja-sama', function () {
        return view('admin.program.kerja-sama.upload-kerja-sama');
    });
});
