<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/admin')->group(function(){
    Route::get('/EduFun/IteractiveMultimedia', [MahasiswaController::class, 'Category']);
    Route::get('/EduFun/ISoftwareEngineering', [MahasiswaController::class, 'Category']);

    // Route::get('/dosen/{dosen}', function($dosen){
    //     $arrMahasiswa = ['Risa Lestari', 'Rudi Hermawan','Bambang Kusumo','Lisa Permata'];
    //     return view('universitas.dosen')
    //     ->with('daftarmahasiswa',$arrMahasiswa)
    //     ->with('jur','Teknik Informatika')
    //     ->with('dosen',$dosen);
    // })->name('admin.dosen');

    // Route::get('/karyawan', function(){
    //     return view('universitas.karyawan');
    // })->name('admin.karyawan');
});

//cara melempar data/value ke view , ada 2 cara:
//1. Argument kedua dari view
//2. Method with()
