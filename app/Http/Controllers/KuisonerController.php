<?php

namespace App\Http\Controllers;

use App\Models\KodeProdi;
use App\Models\Mahasiswa;
use App\Models\TKuisoner;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class KuisonerController extends Controller
{
    public function mahasiswa()
    {
        $mhs = Mahasiswa::filter(request(["search", "kd_prodi"]))->get();
        $prodi = KodeProdi::get();
        // dd($mhs[0]->thn_lulus);
        return view("page.kuisoner.manage.mahasiswa", compact("mhs", "prodi"));
    }
    public function detailMhs(Mahasiswa $mahasiswa)
    {
        return view("page.kuisoner.manage.mahasiswa.detail", compact("mahasiswa"));
    }
    public function kMahasiswa(Mahasiswa $mahasiswa)

    {
        return view("page.kuisoner.manage.mahasiswa.show_sk", compact("mahasiswa"));
    }
}
