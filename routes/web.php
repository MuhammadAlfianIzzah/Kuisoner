<?php

use App\Exports\KuisonerReport;
use App\Http\Controllers\KuisonerController;
use App\Http\Controllers\TracerController;
use App\Models\KodeProdi;
use App\Models\Mahasiswa;
use App\Models\TKuisoner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("home");
Route::get("/terima-kasih", function () {
    return view("page.kuisoner.finish");
})->name("finish-kuis");

use Maatwebsite\Excel\Facades\Excel;

Route::get("/kuisoner/mahasiswa", [KuisonerController::class, "mahasiswa"])->name("kuisoner_mhs");
Route::get("/kuisoner/mahasiswa/detail/{mahasiswa:nim}", [KuisonerController::class, "detailMhs"])->name("detail_mhs");
Route::get("/kuisoner/mahasiswa/show-kuisoner/{mahasiswa:nim}", [KuisonerController::class, "kMahasiswa"])->name("sku_mhs");
Route::get("/report", function () {
    return Excel::download(new KuisonerReport, 'users.xlsx');
})->name("reports");

Route::get("/isi-kuisoner", function () {
    return view('page.tracer.isi_kuisoner');
})->name("isi_kuisoner");

Route::get('/dashboard', function () {

    $graduation = Mahasiswa::selectRaw("count(nim) AS jml,thn_lulus")->orderBy("thn_lulus", "asc")->groupBy("thn_lulus")->get();
    return view('dashboard', compact("graduation"));
})->middleware(['auth'])->name('dashboard');
require __DIR__ . '/auth.php';
