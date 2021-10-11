<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\KodeProdi;
use App\Models\Mahasiswa;
use App\Models\TKuisoner;
use Livewire\Component;

class FormWizard extends Component
{

    public $nm_company;
    public $posisi;
    public $jalan_company;
    public $kota_company;
    public $provinsi_company;
    public $email_company;

    // page 1
    public $nim;
    public $kd_ptn = 1029;
    public $thn_lulus;
    public $kd_prodi;
    public $no_hp;
    public $nik;
    public $npwp;
    public $nm_mhs;
    public $email;
    public $user_id;
    // page 2
    public $f5_01;
    public $f5_02;
    public $f5_03;
    public $f5_04;
    public $f504_02;
    public $f5_05;
    public $f5_06;
    public $f12_01;
    public $f12_02;
    public $f8;
    public $f14;
    public $f14a;
    public $f15;
    public $f13_01;
    public $f13_02;
    public $f13_03;
    public $f21;
    public $f22;
    public $f23;
    public $f24;
    public $f25;
    public $f26;
    public $f27;

    // page 3
    public $f3_01;
    public $f3_02;
    public $f3_03;
    public $f3_04;
    public $f4 = [];
    // public $f4_01;
    // public $f4_02;
    // public $f4_03;
    // public $f4_04;
    // public $f4_05;
    // public $f4_06;
    // public $f4_07;
    // public $f4_08;
    // public $f4_09;
    // public $f4_10;
    // public $f4_11;

    public $f4_12;
    public $f4_13;
    public $f4_14;
    public $f4_15;
    public $f4_16;
    public $f6;
    public $f7;
    public $f7a;
    public $f9 = [];
    // public $f9_01;
    // public $f9_02;
    // public $f9_03;
    // public $f9_04;
    // public $f9_05;

    public $f9_06;
    public $f10_01;
    public $f10_02;
    public $f11_01;
    public $f11_02;
    public $f11a;
    public $f11a_01;
    public $f16;
    // public $f16_01;
    // public $f16_02;
    // public $f16_03;
    // public $f16_04;
    // public $f16_05;
    // public $f16_06;
    // public $f16_07;
    // public $f16_08;
    // public $f16_09;
    // public $f16_10;
    // public $f16_11;
    // public $f16_12;
    // public $f16_13;
    public $f16_14;

    // page 4
    public $f17_1;
    public $f17_2b;
    public $f17_3;
    public $f17_4b;
    public $f17_5;
    public $f17_6b;
    public $f17_5a;
    public $f17_6ba;
    public $f17_7;
    public $f17_8b;
    public $f17_9;
    public $f17_10b;
    public $f17_11;
    public $f17_12b;
    public $f17_13;
    public $f17_14b;
    public $f17_15;
    public $f17_16b;
    public $f17_17;
    public $f17_18b;
    public $f17_19;
    public $f17_20b;
    public $f17_21;
    public $f17_22b;
    public $f17_23;
    public $f17_24b;
    public $f17_25;
    public $f17_26b;
    public $f17_27;
    public $f17_28b;
    public $f17_29;
    public $f17_30b;
    public $f17_31;
    public $f17_32b;
    public $f17_33;
    public $f17_34b;
    public $f17_35;
    public $f17_36b;
    public $f17_37;
    public $f17_38b;
    public $f17_37a;
    public $f17_38ba;
    public $f17_39;
    public $f17_40b;
    public $f17_41;
    public $f17_42b;
    public $f17_43;
    public $f17_44b;
    public $f17_45;
    public $f17_46b;
    public $f17_47;
    public $f17_48b;
    public $f17_49;
    public $f17_50b;
    public $f17_51;
    public $f17_52b;
    public $f17_53;
    public $f17_54b;


    // page 5
    public $f19_a;
    public $f19_b;
    public $f19_c;
    public $f19_d;
    public $totalSteps = 5;
    public $currentStep = 1;
    public function mount()
    {
        $this->currentStep = 5;
    }
    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }
    public function register()
    {
        $this->resetErrorBag();

        if ($this->currentStep == 5) {
            $data = collect($this->validate([
                "nm_company" => "required",
                "posisi" => "required",
                "jalan_company" => "required",
                "kota_company" => "required",
                "provinsi_company" => "required",
                "email_company" => "required",
                "f19_a" => "required",
                "f19_b" => "required",
                "f19_c" => "required",
                "f19_d" => "required"
            ]));
            $cp = Company::updateOrCreate(["id_mhs" => $this->user_id], $data->toArray());
            $tracer = $data->put("id_company", $cp->id)->toArray();
            TKuisoner::updateOrCreate(["id_mhs" => $this->user_id], $tracer);
            redirect("/terima-kasih");
        }
    }
    public function validateData()
    {

        if ($this->currentStep == 1) {
            $this->validate([
                'nim' => 'required|unique:mahasiswas,nim',
                'nm_mhs' => 'required',
                'kd_ptn' => 'required',
                'thn_lulus' => 'required',
                'kd_prodi' => 'required',
                'email' => 'required|email',
                'no_hp' => 'required',
                'nik' => 'required',
                'npwp' => 'required',
            ]);
            $mhs =  Mahasiswa::create([
                "nim" => $this->nim,
                "nm_mhs" => $this->nm_mhs,
                "kd_ptn" => $this->kd_ptn,
                "thn_lulus" => $this->thn_lulus,
                "kd_prodi" => $this->kd_prodi,
                "email" => $this->email,
                "no_hp" => $this->no_hp,
                "nik" => $this->nik,
                "npwp" => $this->npwp
            ]);
            $this->user_id = $mhs->id;
        } elseif ($this->currentStep == 2) {
            $data =  $this->validate([
                'f5_01' => 'required',
                'f5_02' => 'required_if:f5_01,==,1',
                'f5_03' => 'required_if:f5_01,==,2',
                'f5_04' => 'required',
                'f504_02' => 'required_if:f5_04,==,1',
                'f5_05' => 'required_if:f5_04,==,1',
                'f5_06' => 'required_if:f5_04,==,2',
                'f12_01' => 'required',
                'f12_02' => 'required_if:f12_01,==,7',
                'f8' => 'required',
                'f14' => 'required',
                'f14a' => 'required',
                'f15' => 'required',
                'f13_01' => 'required',
                'f13_02' => 'required',
                'f13_03' => 'required',
                'f21' => 'required',
                'f22' => 'required',
                'f23' => 'required',
                'f24' => 'required',
                'f25' => 'required',
                'f26' => 'required',
                'f27' => 'required',
            ]);
            TKuisoner::updateOrCreate(
                ["id_mhs" => $this->user_id],
                $data
            );
        } elseif ($this->currentStep == 3) {

            $data = collect($this->validate([
                'f3_01' => 'required',
                'f3_02' => 'required_if:f3_01,==,1',
                'f3_03' => 'required_if:f3_01,==,2',
                'f4' => 'required',
                'f6' => 'required',
                'f7' => 'required',
                'f7a' => 'required',
                'f9' => 'required',
                // "f9_06" => 'required_if:f3_01,==,2',
                'f10_01' => 'required',
                'f10_02' => 'required_if:f10_01,==,5',
                'f11_01' => 'required',
                'f11_02' => 'required_if:f11_01,==,4',
                'f11a' => 'required',
                'f11a_01' => 'required_if:f11_01,==,4',
                'f16' => 'required',
            ]));
            // dd("ok");
            // $data->push(["f4" => 1]);
            foreach ($data["f4"] as $key => $value) {
                $data->put($value, "1");
                if ($value == "f4_15") {
                    $data->put("f4_16", $this->f4_16);
                }
            }
            foreach ($data["f9"] as $key => $value) {
                $data->put($value, "1");
                if ($value == "f9_05") {
                    $data->put("f9_06", $this->f9_06);
                }
            }
            foreach ($data["f16"] as $key => $value) {
                $data->put($value, "1");
                if ($value == "f16_13") {
                    $data->put("f16_14", $this->f16_14);
                }
            }
            $filtered = $data->filter(function ($value, $key) {
                return $key != "f4" && $key != "f9" && $key != "f16";
            });

            TKuisoner::updateOrCreate(
                ["id_mhs" => $this->user_id],
                $filtered->toArray()
            );
        } elseif ($this->currentStep == 4) {
            $data =   $this->validate([
                'f17_1' => 'required',
                'f17_2b' => 'required',
                'f17_3' => 'required',
                'f17_4b' => 'required',
                'f17_5' => 'required',
                'f17_6b' => 'required',
                'f17_5a' => 'required',
                'f17_6ba' => 'required',
                'f17_7' => 'required',
                'f17_8b' => 'required',
                'f17_9' => 'required',
                'f17_10b' => 'required',
                'f17_11' => 'required',
                'f17_12b' => 'required',
                'f17_13' => 'required',
                'f17_14b' => 'required',
                'f17_15' => 'required',
                'f17_16b' => 'required',
                'f17_17' => 'required',
                'f17_18b' => 'required',
                'f17_19' => 'required',
                'f17_20b' => 'required',
                'f17_21' => 'required',
                'f17_22b' => 'required',
                'f17_23' => 'required',
                'f17_24b' => 'required',
                'f17_25' => 'required',
                'f17_26b' => 'required',
                'f17_27' => 'required',
                'f17_28b' => 'required',
                'f17_29' => 'required',
                'f17_30b' => 'required',
                'f17_31' => 'required',
                'f17_32b' => 'required',
                'f17_33' => 'required',
                'f17_34b' => 'required',
                'f17_35' => 'required',
                'f17_36b' => 'required',
                'f17_37' => 'required',
                'f17_38b' => 'required',
                'f17_37a' => 'required',
                'f17_38ba' => 'required',
                'f17_39' => 'required',
                'f17_40b' => 'required',
                'f17_41' => 'required',
                'f17_42b' => 'required',
                'f17_43' => 'required',
                'f17_44b' => 'required',
                'f17_45' => 'required',
                'f17_46b' => 'required',
                'f17_47' => 'required',
                'f17_48b' => 'required',
                'f17_49' => 'required',
                'f17_50b' => 'required',
                'f17_51' => 'required',
                'f17_52b' => 'required',
                'f17_53' => 'required',
                'f17_54b' => 'required',
            ]);
            TKuisoner::updateOrCreate(
                ["id_mhs" => $this->user_id],
                $data
            );
        }
    }
    public function render()
    {
        $prodi = KodeProdi::get();
        return view('livewire.form-wizard', compact("prodi"));
    }
}
