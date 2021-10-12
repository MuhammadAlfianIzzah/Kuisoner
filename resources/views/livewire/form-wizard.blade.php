<div class="container mt-4">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>


    <div class="row text-center">
        <h1>Kuisoner Alumni UHO</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem expedita ad soluta optio cupiditate minima quisquam minus harum sint ab.</p>
    </div>

    {{-- <h3>Data Mahasiswa</h3> --}}
    <div class="container justify-content-center d-flex">
        <div class="btn-group mb-2 gap-1" role="group">
            <button type="button" class="btn btn-{{$currentStep>=1?"primary":"light"}}" style="border-right: 2px solid rgb(202, 199, 199)">Data Mahasiswa


            </button>

            <button type="button" class="btn btn-{{$currentStep>=2?"primary":"light"}}">Kuisoner <span class="badge bg-primary border border-light">1</span>


            </button>

            <button type="button" class="btn btn-{{$currentStep>=3?"primary":"light"}}">Kuisoner <span class="badge bg-primary border border-light">2</span>


            </button>

            <button type="button" class="btn btn-{{$currentStep>=4?"primary":"light"}}">Kuisoner <span class="badge bg-primary border border-light">3</span>


            </button>

        </div>
    </div>
    <hr>


    @if($errors->any())
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
            <use xlink:href="#exclamation-triangle-fill" /></svg>

        <strong>Hallo guys</strong> Silahkan lengkapi semua data yang dibutuhkan!!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif
    <form class="row g-3 px-3 py-2" method="POST" wire:submit.prevent="register">
        @csrf
        @method("POST")

        @if ($currentStep == 1)
        {{-- data diri --}}
        <div class="col-md-6 p-3 border_custom3">

            <label for="nim" class="form-label h6">Nomor Mahasiswa</label>
            <input type="text" wire:model="nim" name="nim" class="form-control" id="nim" value="{{old("nim")}}">
            @error("nim")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="col-md-6 p-3 border_custom3">
            <label for="kd_ptn" class="form-label h6">Kode Ptn</label>

            <input type="text" wire:model.lazy="kd_ptn" name="kd_ptn" class="form-control" id="kd_ptn">
            @error("kd_ptn")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="col-md-6 p-3 border_custom3">

            <label for="thn_lulus" class="form-label h6">Tahun Lulus</label>

            <input type="number" wire:model="thn_lulus" name="thn_lulus" class="form-control" id="thn_lulus" value="{{old("thn_lulus")}}">
            @error("thn_lulus")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="col-md-6 p-3 border_custom3">

            <label for="kd_prodi" class="form-label h6">Kode Prodi</label>

            <select class="form-select" name="kd_prodi" id="kd_prodi" wire:model="kd_prodi">
                <option selected>Pilih Kode Program studi...</option>
                @foreach ($prodi as $prodi)
                <option value="{{$prodi->Kode}}"> {{$prodi->Nama_Program_Studi}} [{{$prodi->Kode}}]</option>


                @endforeach
            </select>

            {{-- <input type="text" wire:model="kd_prodi" name="kd_prodi" class="form-control" id="kd_prodi" value="{{old("kd_prodi")}}"> --}}

            @error("kd_prodi")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror

        </div>
        <div class="col-md-12 p-3 border_custom3">

            <label for="nm_mhs" class="form-label h6">Nama Mahasiswa</label>


            <input type="text" name="nm_mhs" wire:model="nm_mhs" class="form-control" id="nm_mhs" value="{{old("nm_mhs")}}">

            @error("nm_mhs")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="col-md-12 p-3 border_custom3">

            <label for="no_hp" class="form-label h6">Nomor Telpon</label>



            <input type="number" wire:model="no_hp" name="no_hp" class="form-control" id="no_hp" value="{{old("no_hp")}}">

            @error("no_hp")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="col-md-12 p-3 border_custom3">
            <label for="email" class="form-label h6">Alamat Email</label>

            <input type="email" wire:model="email" name="email" class="form-control" id="email" value="{{old("email")}}">

            @error("email")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="col-md-6 p-3 border_custom3">

            <label for="nik" class="form-label h6">NIK</label>

            <input type="text" wire:model="nik" name="nik" class="form-control" id="nik" value="{{old("nik")}}">

            @error("nik")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror

        </div>
        <div class="col-md-6 p-3 border_custom3">
            <label for="npwp" class="form-label h6">NPWP</label>

            <input type="text" wire:model="npwp" name="npwp" class="form-control" id="npwp" value="{{old("npwp")}}">
            @error("npwp")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror
        </div>
        {{-- data diri --}}
        @endif
        @if ($currentStep == 2)

        {{-- f5-01 - f5-02 --}}
        <div class="row mt-2">
            <div class="col-md-12 h6 border_custom">

                {{"Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama?" }}
            </div>
            <div class="col ">
                <div class="row mb-1 align-items-center">
                    <div class="col d-flex align-items-center gap-1">
                         <input class="form-check-input input-d-disable" value="1" type="radio" name="f5_01" id="f5_01a" data-target="f5_02" data-target2="f5_03" wire:model="f5_01">
                        <label class="form-check-label" for="f5_01a">
                            Kira-kira  
                        </label>
                        <input type="number" style="width: 70px" name="f5_02" wire:model="f5_02" class="form-control" id="f5_02" value="{{old("f5_02")}}" {{$f5_01 ==1 ?"":"disabled"}}>
                        bulan sebelum lulus ujian
                        @error("f5_01")
                        <div class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-1 align-items-center">
                    <div class="col d-flex align-items-center gap-1">
                         <input class="form-check-input input-d-disable" value="2" type="radio" name="f5_01" id="f5_01b" data-target="f5_03" data-target2="f5_02" wire:model="f5_01">
                        <label class="form-check-label " for="f5_01b">
                            Kira-kira  
                        </label>
                        <input type="number" style="width: 70px" name="f5_03" class="form-control" id="f5_03" value="{{old("f5_03")}}" {{$f5_01 ==2 ?"":"disabled"}} wire:model="f5_03">
                        bulan setelah lulus ujian   
                        @error("f5_03")
                        <div class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        {{-- /f5-01 - f5-02 --}}
        {{-- f5_04* - f5_06 --}}
        <div class="row mt-2">
            <div class="col-md-12 h6 border_custom">

                {{"Apakah anda telah mendapatkan pekerjaan <= 6 bulan / termasuk bekerja sebelum lulus ?"}}
            </div>

            <div class="col mt-2 ms-3">
                <div class="row mb-1 align-items-center">
                    <div class="form-check">
                        <input class="form-check-input input-d-disable" value="1" type="radio" name="f5_04" id="f5_041" {{ old("f5_04") == '1' ? 'checked' : '' }} data-target="f504_02" data-target2="f5_06" data-target4="f5_05" wire:model="f5_04">
                        <label class="form-check-label" for="f5_041">
                            [1] Ya
                        </label>
                        <div class="mb-3">
                            <label for="f504_02" class="form-label">Dalam berapa bulan anda mendapatkan pekerjaan ? </label>
                            <input type="number" name="f504_02" class="form-control" id="f504_02" value="{{old("f504_02")}}" wire:model="f504_02" {{$f5_04 ==1 ?"":"disabled"}}>
                        </div>
                        <div class="mb-3">
                            <label for="f5_05" class="form-label">Berapa rata-rata pendapatan anda per bulan ? (take home pay)?</label>
                            <input type="number" class="form-control" id="f5_05" name="f5_05" value="{{old("f5_05")}}" {{$f5_04 ==1 ?"":"disabled"}} wire:model="f5_05">

                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input input-d-disable" value="2" type="radio" name="f5_04" id="f5_042" {{ old("f5_04") == '2' ? 'checked' : '' }} data-target="f5_06" data-target2="f504_02" data-target3="f5_05" wire:model="f5_04">

                        <label class="form-check-label" for="f5_042">
                            [2] Tidak
                        </label>
                        <div class="mb-3">
                            <label for="f5_06" class="form-label">Dalam berapa bulan anda mendapatkan pekerjaan ? </label>
                            <input type="number" wire:model="f5_06" value="{{old("f5_06")}}" class="form-control" id="f5_06" name="f5_06" {{$f5_04 ==2 ?"":"disabled"}}>
                        </div>
                    </div>
                </div>
            </div>
            @error("f5_04")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror

        </div>
        {{-- f5_04 f5_06 --}}
        {{-- f12_01 - f12-02 --}}
        <div class="col-md-12  ">
            <label for="f12_01" class="form-label h6 w-100 border_custom">Sebutkan sumber dana dalam pembiayaan kuliah</label>

            <select class="form-select form-select-sm w-100 mt-2" name="f12_01" id="f12_01" wire:model="f12_01">
                <option selected>Pilih biaya kuliah...</option>
                <option value="1" {{ old('f12_01') == '1' ? 'selected' : '' }}>[1] Biaya Sendiri/Keluarga</option>
                <option value="2" {{ old('f12_01') == '2' ? 'selected' : '' }}>[2] Beasiswa ADIK</option>
                <option value="3" {{ old('f12_01') == '3' ? 'selected' : '' }}>[3] Beasiswa BIDIKMISI</option>
                <option value="4" {{ old('f12_01') == '4' ? 'selected' : '' }}>[4] Beasiswa PPA</option>
                <option value="5" {{ old('f12_01') == '5' ? 'selected' : '' }}>[5] Beasiswa AFIRMASI</option>
                <option value="6" {{ old('f12_01') == '6' ? 'selected' : '' }}>[6] Beasiswa Perusahaan/Swasta</option>
                <option value="7" {{ old('f12_01') == '7' ? 'selected' : '' }}>[7] Lainnya, tuliskan</option>
            </select>
            <div class="mt-2">
                <input type="text" wire:model="f12_02" value="{{old("f12_02")}}" class="form-control {{$f12_02==null && $f12_01 == 7?"border border-danger":""}} " id="f12_02" name="f12_02 " {{$f12_01 == 7 ?"":"disabled"}}>

            </div>

            @error("f12_01")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror


        </div>
        {{-- // f12_01 - f12-02 --}}

        {{-- F8 --}}
        <div class="col-md-12">
            <label for="f8" class="form-label h6 w-100 border_custom">Apakah Anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?</label>


            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="f8" id="f8a" value="1" {{ old("f8") == '1' ? 'checked' : '' }} wire:model="f8">

                <label class="form-check-label" for="f8a">[1] Ya</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" {{ old("f8") == '2' ? 'checked' : '' }} name="f8" id="f8b" value="2" wire:model="f8">


                <label class="form-check-label" for="f8b">[2] Tidak</label>
            </div>
            @error("f8")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror
        </div>
        {{-- // F8 --}}

        {{-- f14 --}}
        <div class="col-md-12">
            <label for="f14" class="form-label w-100  h6 pb-2 border_custom">Seberapa erat hubungan antara bidang studi dengan pekerjaan Anda?</label>


            <div class="d-flex gap-2">
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="f14" id="f141ax" {{ old("f14") == '1' ? 'checked' : '' }} wire:model="f14">
                    <label class="form-check-label" for="f141ax">
                        [1] Sangat Erat
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="2" type="radio" name="f14" id="f141bx" {{ old("f14") == '2' ? 'checked' : '' }} wire:model="f14">

                    <label class="form-check-label" for="f141bx">
                        [2] Erat
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="3" type="radio" name="f14" id="f141cx" {{ old("f14") == '3' ? 'checked' : '' }} wire:model="f14">

                    <label class="form-check-label" for="f141cx">
                        [3] Cukup Erat
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="4" type="radio" name="f14" id="f141dx" {{ old("f14") == '4' ? 'checked' : '' }} wire:model="f14">
                    <label class="form-check-label" for="f141dx">
                        [4] Kurang Erat
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="5" name="f14" id="f141ex" {{ old("f14") == '5' ? 'checked' : '' }} wire:model="f14">
                    <label class="form-check-label" for="f141ex">
                        [5] Tidak Sama Sekali
                    </label>
                </div>
            </div>
            @error("f14")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror

        </div>
        {{-- f14 --}}

        {{-- f14a --}}
        <div class="col-md-12">
            <label for="f14a" class="form-label w-100  h6 border_custom">Kesesuaian bidang ilmu dengan pekerjaan yang Anda geluti saat ini?</label>



            <div class="d-flex gap-2">
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="f14a" id="f14a1" {{ old("f14a") == '1' ? 'checked' : '' }} wire:model="f14a">
                    <label class="form-check-label" for="f14a1">
                        Sesuai
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="2" type="radio" name="f14a" id="f14a2" {{ old("f14a") == '2' ? 'checked' : '' }} wire:model="f14a">
                    <label class="form-check-label" for="f14a2">
                        Tidak Sesuai
                    </label>
                </div>

            </div>
            @error("f14a")

            <div class="form-text text-danger">{{$message}}</div>
            @enderror

        </div>
        {{-- f14a --}}

        {{-- f15 --}}
        <div class="col-md-12">
            <label for="f15" class="form-label h6 w-100 border_custom">Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan Anda saat ini?</label>



            <div class="d-flex gap-2">
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="f15" id="f151" {{ old("f15") == '1' ? 'checked' : '' }} wire:model="f15">
                    <label class="form-check-label" for="f151">
                         [1] Setingkat Lebih Tinggi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="2" type="radio" name="f15" id="f152" {{ old("f15") == '2' ? 'checked' : '' }} wire:model="f15">
                    <label class="form-check-label" for="f152">
                         [2] Tingkat yang Sama
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="3" type="radio" name="f15" id="f153" {{ old("f15") == '3' ? 'checked' : '' }} wire:model="f15">

                    <label class="form-check-label" for="f153">
                          [3] Setingkat Lebih Rendah
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="4" type="radio" name="f15" id="f154" {{ old("f15") == '4' ? 'checked' : '' }} wire:model="f15">

                    <label class="form-check-label" for="f154">
                          [4] Tidak Perlu Pendidikan Tinggi
                    </label>
                </div>
            </div>

            @error("f15")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror
        </div>
        {{-- f15 --}}

        {{-- f13 --}}
        <div class="col-md-12">
            <div class="form-label h6 pb-2 border_custom">Kira-kira berapa pendapatan Anda setiap bulannya?</div>

            <div class="d-flex w-100 gap-2">
                <div class="form-floating mb-3 w-100">
                    <input type="text" name="f13_01" class="form-control" id="f13_01" placeholder="[1] Dari Pekerjaan Pertamaaa" wire:model="f13_01">


                    <label for="f13_01">[1] Dari Pekerjaan Pertama</label>
                    @error("f13_01")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3 w-100">
                    <input type="text" name="f13_02" class="form-control" id="f13_02" placeholder="[2] Dari Lembur dan Tips" wire:model="f13_02">


                    <label for="f13_02">[2] Dari Lembur dan Tips</label>
                    @error("f13_02")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                <div class="form-floating mb-3 w-100">
                    <input type="text" name="f13_03" class="form-control" id="f13_03" placeholder="[3] Dari Pekerjaan Lainnya" wire:model="f13_03">

                    <label for="f13_03">[3] Dari Pekerjaan Lainnya</label>
                    @error("f13_03")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>
        {{-- / f13 --}}
        {{-- f2 --}}
        <div class="col-md-12">
            <div class="form-label h6 pb-2 border_custom">Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?</div>

            <div class="row">
                <div class="col-md-6 mb-1">
                    <label for="f21" class="form-label">Perkuliahan</label>
                    <select class="form-select" name="f21" id="f21" wire:model="f21">
                        <option selected>Perkuliahan...</option>
                        <option value="1">[1] Sangat Besar</option>
                        <option value="2">[2] Besar</option>
                        <option value="3">[3] Cukup Besar</option>
                        <option value="3">[4] Kurang</option>
                        <option value="3">[5] Tidak Sama Sekali</option>
                    </select>
                    @error("f21")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-1">
                    <label for="f22" class="form-label">Demonstrasi</label>
                    <select class="form-select" name="f22" id="f22" wire:model="f22">
                        <option selected>Demonstrasi...</option>
                        <option value="1">[1] Sangat Besar</option>
                        <option value="2">[2] Besar</option>
                        <option value="3">[3] Cukup Besar</option>
                        <option value="3">[4] Kurang</option>
                        <option value="3">[5] Tidak Sama Sekali</option>
                    </select>
                    @error("f22")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-1">
                    <label for="f23" class="form-label">Partisipasi dalam Proyek Riset</label>
                    <select class="form-select" name="f23" id="f23" wire:model="f23">
                        <option selected>Partisipasi dalam Proyek Riset...</option>
                        <option value="1">[1] Sangat Besar</option>
                        <option value="2">[2] Besar</option>
                        <option value="3">[3] Cukup Besar</option>
                        <option value="3">[4] Kurang</option>
                        <option value="3">[5] Tidak Sama Sekali</option>
                    </select>
                    @error("f23")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-1">
                    <label for="f24" class="form-label">Magang</label>

                    <select class="form-select" name="f24" id="f24" wire:model="f24">
                        <option selected>Magang...</option>

                        <option value="1">[1] Sangat Besar</option>
                        <option value="2">[2] Besar</option>
                        <option value="3">[3] Cukup Besar</option>
                        <option value="3">[4] Kurang</option>
                        <option value="3">[5] Tidak Sama Sekali</option>
                    </select>
                    @error("f24")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-1">
                    <label for="f25" class="form-label">Praktikum</label>

                    <select class="form-select" name="f25" id="f25" wire:model="f25">
                        <option selected>Praktikum...</option>

                        <option value="1">[1] Sangat Besar</option>
                        <option value="2">[2] Besar</option>
                        <option value="3">[3] Cukup Besar</option>
                        <option value="3">[4] Kurang</option>
                        <option value="3">[5] Tidak Sama Sekali</option>
                    </select>
                    @error("f25")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-1">
                    <label for="f26" class="form-label">Kerja Lapangan:</label>
                    <select class="form-select" name="f26" id="f26" wire:model="f26">
                        <option selected>Kerja Lapangan:...</option>
                        <option value="1">[1] Sangat Besar</option>
                        <option value="2">[2] Besar</option>
                        <option value="3">[3] Cukup Besar</option>
                        <option value="3">[4] Kurang</option>
                        <option value="3">[5] Tidak Sama Sekali</option>
                    </select>
                    @error("f26")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-1">
                    <label for="f27" class="form-label">Diskusi:</label>
                    <select class="form-select" name="f27" id="f27" wire:model="f27">
                        <option selected>Diskusi:...</option>
                        <option value="1">[1] Sangat Besar</option>
                        <option value="2">[2] Besar</option>
                        <option value="3">[3] Cukup Besar</option>
                        <option value="3">[4] Kurang</option>
                        <option value="3">[5] Tidak Sama Sekali</option>
                    </select>
                    @error("f27")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>
        {{-- f2 --}}
        <script>
            var inputs1 = document.querySelectorAll('input.input-d-disable');

            inputs1.forEach((input) => {
                // if (input.checked) {
                //     document.getElementById(e.target.dataset.target).disabled = false;
                //     document.getElementById(e.target.dataset.target2).disabled = true;

                // }
                input.addEventListener("click", function(e) {
                    // document.getElementById(e.target.dataset.target).disabled = false;
                    // document.getElementById(e.target.dataset.target2).disabled = true;

                    // var checked_gender = document.querySelector('input[name = "f5_01"]:checked');
                    if (e.target.value == 1 | e.target.value == 2) {
                        document.getElementById(e.target.dataset.target).disabled = false;
                        document.getElementById(e.target.dataset.target2).disabled = true;


                        if (e.target.dataset.target3) {
                            console.log("disable")
                            // disable
                            document.getElementById(e.target.dataset.target3).disabled = true;
                            // active
                        } else if (e.target.dataset.target4) {
                            console.log("enable ")

                            document.getElementById(e.target.dataset.target4).disabled = false;
                        }
                    } else {
                        console.log("elseee");
                        document.getElementById(e.target.dataset.target).disabled = false;
                        document.getElementById(e.target.dataset.target2).disabled = true;
                        if (e.target.dataset.target3) {
                            // disable
                            document.getElementById(e.target.dataset.target3).disabled = true;
                            // active
                        } else if (e.target.dataset.target4) {
                            document.getElementById(e.target.dataset.target4).disabled = false;
                        }
                        // document.getElementById(e.target.dataset.tactive).disabled = false;

                    }
                })
            })


            // var inputs = document.querySelectorAll('input[name = "f5_04"]');
            // inputs.forEach((input) => {
            //     input.addEventListener("click", function(e) {
            //         var checked_gender = document.querySelector('input[name = "f5_04"]:checked');
            //         if (document.querySelector('input[name = "f5_04"]:checked').value == 1) {
            //             // console.log(e.target.dataset.target);
            //             document.getElementById(e.target.dataset.target).disabled = false;
            //             document.getElementById(e.target.dataset.target2).disabled = false;
            //             document.getElementById("f5_06").disabled = true;
            //             // document.getElementById("f5_06").value = "";
            //         } else {
            //             document.getElementById(e.target.dataset.target).disabled = false;
            //             document.getElementById("f504_02").disabled = true;
            //             document.getElementById("f5_05").disabled = true;
            //             // document.getElementById("f504_02").value = "";
            //             // document.getElementById("f5_05").value = "";
            //         }
            //     })
            // })

        </script>
        @endif
        @if ($currentStep == 3)


        {{-- f3 --}}
        <div class="row mt-2">
            <div class="col-md-12 h6 border_custom">
                {{"Kapan Anda mulai mencari pekerjaan?Mohon pekerjaan sambilan tidak dimasukkan" }}

            </div>
            <div class="col">
                <div class="row mb-1 align-items-center">
                    <div class="col d-flex align-items-center gap-1">
                         <input class="form-check-input input-d-disable" value="1" type="radio" name="f3_01" id="f3_01a" data-target="f3_02" data-target2="f3_03" wire:model="f3_01">
                        <label class="form-check-label" for="f3_01a">
                            Kira-kira  
                        </label>
                        <input type="number" style="width: 70px" name="f3_02" class="form-control" id="f3_02" value="{{old("f3_02")}}" {{$f3_01 ==1 ?"":"disabled"}} wire:model="f3_02" required>
                        bulan sebelum lulus ujian
                    </div>
                </div>
                <div class="row mb-1 align-items-center">
                    <div class="col d-flex align-items-center gap-1">
                         <input class="form-check-input input-d-disable" value="2" type="radio" name="f3_01" id="f3_01b" data-target="f3_03" data-target2="f3_02" wire:model="f3_01">
                        <label class="form-check-label" for="f3_01b">
                            Kira-kira  
                        </label>
                        <input type="number" style="width: 70px" name="f3_03" class="form-control" id="f3_03" value="{{old("f3_03")}}" {{$f3_01 ==2 ?"":"disabled"}} wire:model="f3_03">

                        bulan setelah lulus ujian   
                    </div>
                </div>
            </div>
            @error("f3_01")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror

        </div>

        {{-- f3 --}}

        {{-- f4 --}}
        <div class="col-md-12">
            <div class="form-label h6 pb-2 border_custom mb-3">Bagaimana anda mencari pekerjaan tersebut? Jawaban bisa lebih dari satu</div>
            <div class="d-flex gap-2">
                <select class="form-select form-select-sm w-100 selectActive" name="f4" wire:model="f4" id="f4" multiple data-target="f4_16" data-isactive="f4_15">
                    <option selected>...</option>
                    <option value="f4_01" {{ old('f4_01') == 'f4_01' ? 'selected' : '' }}>[1] Melalui iklan di koran/majalah, brosur  </option>
                    <option value="f4_02" {{ old('f4_02') == 'f4_02' ? 'selected' : '' }}>[1] Melamar ke perusahaan tanpa mengetahui lowongan yang ada  </option>
                    <option value="f4_03" {{ old('f4_03') == 'f4_03' ? 'selected' : '' }}>[1] Pergi ke bursa/pameran kerja  </option>
                    <option value="f4_04" {{ old('f4_04') == 'f4_04' ? 'selected' : '' }}>[1] Mencari lewat internet/iklan online/milis   </option>

                    <option value="f4_05" {{ old('f4_05') == 'f4_05' ? 'selected' : '' }}>[1] Dihubungi oleh perusahaan </option>

                    <option value="f4_06" {{ old('f4_06') == 'f4_06' ? 'selected' : '' }}>[1] Menghubungi Kemenakertrans </option>

                    <option value="f4_07" {{ old('f4_07') == 'f4_07' ? 'selected' : '' }}>[1] Menghubungi agen tenaga kerja komersial/swasta  </option>

                    <option value="f4_08" {{ old('f4_08') == 'f4_08' ? 'selected' : '' }}>[1] Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas  </option>
                    <option value="f4_09" {{ old('f4_09') == 'f4_09' ? 'selected' : '' }}>[1] Menghubungi kantor kemahasiswaan/hubungan alumni  </option>

                    <option value="f4_10" {{ old('f4_10') == 'f4_10' ? 'selected' : '' }}>[1] Membangun jejaring (network) sejak masih kuliah   </option>

                    <option value="f4_11" {{ old('f4_11') == 'f4_11' ? 'selected' : '' }}>[1] Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.) </option>

                    <option value="f4_12" {{ old('f4_12') == 'f4_12' ? 'selected' : '' }}>[1] Membangun bisnis sendiri  </option>

                    <option value="f4_13" {{ old('f4_13') == 'f4_13' ? 'selected' : '' }}>[1] Melalui penempatan kerja atau magang  </option>
                    <option value="f4_14" {{ old('f4_14') == 'f4_14' ? 'selected' : '' }}>[1] Bekerja di tempat yang sama dengan tempat kerja semasa kuliah   </option>
                    <option value="f4_14" {{ old('f4_14') == 'f4_14' ? 'selected' : '' }}>[1] Bekerja di tempat yang sama dengan tempat kerja semasa kuliah   </option>

                    <option value="f4_15" {{ old('f4_15') == 'f4_15' ? 'selected' : '' }}>[1] Lainnya:</option>
                </select>
                <div>
                    <label for="f4_16" class="form-label">Tuliskan</label>
                    @php
                    $cl = collect($f4);
                    @endphp
                    <input type="text" name="f4_16" class="form-control" id="f4_16" value="" required {{$cl->contains("f4_15")?"":"disabled"}} wire:model="f4_16">
                </div>
            </div>
            @error("f4")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror
        </div>
        {{-- // f4 --}}

        {{-- f6 --}}
        <div class="col-md-6">
            <label for="f6" class="form-label h6 border_custom mb-3">Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?</label>

            <input type="number" name="f6" placeholder="perusahaan/instansi/institusi" class="form-control" id="f6" wire:model="f6">
            @error("f6")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror
        </div>
        {{-- f6 --}}
        {{-- f7 --}}
        <div class="col-md-6">
            <label for="f7" class="form-label h6 border_custom mb-3">Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda?</label>

            <input type="number" name="f7" placeholder="perusahaan/instansi/institusi" class="form-control" id="f7" wire:model="f7">
            @error("f7")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror

        </div>
        {{-- f7 --}}
        {{-- f7a--}}
        <div class="col-md-12">
            <label for="f7a" class="form-label h6 border_custom mb-3 w-100">Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?</label>

            <input type="number" name="f7a" placeholder="perusahaan/instansi/institusi" class="form-control" id="f7a" wire:model="f7a">
            @error("f7a")

            <div class="form-text text-danger">{{$message}}</div>
            @enderror

        </div>
        {{-- f7a --}}
        {{-- f9--}}
        <div class="col-md-12">
            <label for="f9" class="form-label h6 border_custom mb-3 w-100">Bagaimana anda menggambarkan situasi anda saat ini? Jawaban bisa lebih dari satu</label>

            <div class="d-flex gap-2">
                <select class="form-select selectActive" name="f9" multiple wire:model="f9" data-target="f9_06" data-isactive="f9_05">
                    <option selected disabled>...</option>
                    <option value="f9_01">[1] Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana</option>
                    <option value="f9_02">[1] Saya menikah</option>
                    <option value="f9_03">[1] Saya sibuk dengan keluarga dan anak-anak </option>
                    <option value="f9_04">[1] Saya sekarang sedang mencari pekerjaan </option>
                    <option value="f9_05">[1] Lainnya</option>
                </select>
                <div>
                    @php
                    $cl = collect($f9);
                    @endphp
                    <label for="f9_06" class="form-label">Tuliskan </label>
                    <input type="text" name="f9_06" class="form-control" id="f9_06" {{$cl->contains("f9_05")?"":"disabled"}} required wire:model="f9_06">
                </div>
            </div>
            @error("f9")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror
        </div>
        {{-- f9 --}}
        {{-- f10 --}}
        <div class="col-md-12 mb-1">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-label h6 border_custom mb-3">Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir? Pilihlah Satu Jawaban. </div>

                    @error("f10_01")

                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>

                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model.lazy="f10_01" name="f10_01" id="f10_011" value="1">
                        <label class="form-check-label" for="f10_011">
                            Tidak
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model.lazy="f10_01" name="f10_01" id="f10_012" value="2">
                        <label class="form-check-label" for="f10_012">
                            Tidak, tapi saya sedang menunggu hasil lamaran kerja
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model.lazy="f10_01" name="f10_01" id="f10_013" value="3">
                        <label class="form-check-label" for="f10_013">
                            Ya, saya akan mulai bekerja dalam 2 minggu ke depan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model.lazy="f10_01" name="f10_01" id="f10_014" value="4">
                        <label class="form-check-label" for="f10_014">
                            Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input radioActive" type="radio" wire:model.lazy="f10_01" name="f10_01" id="f10_015" value="5">
                        <label class="form-check-label" for="f10_015">
                             Lainnya
                        </label>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" wire:model.lazy="f10_02" name="f10_02" {{$f10_01== 5?"":"disabled"}}>

                    </div>

                </div>
            </div>

        </div>

        {{-- f10 --}}
        {{-- f11 --}}
        <div class="col-md-12 mb-1">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-label h6 border_custom mb-3">Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?</div>

                    @error("f11_01")

                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>

                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model.lazy="f11_01" name="f11_01" id="f11_011" value="1">
                        <label class="form-check-label" for="f11_011">
                            Instansi pemerintah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model.lazy="f11_01" name="f11_01" id="f11_012" value="6">
                        <label class="form-check-label" for="f11_012">
                            BUMN/BUMD
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model.lazy="f11_01" name="f11_01" id="f11_013" value="7">
                        <label class="form-check-label" for="f11_013">
                            Institusi/Organisasi Multilateral
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model.lazy="f11_01" name="f11_01" id="f11_014" value="2">
                        <label class="form-check-label" for="f11_014">
                            Organisasi non-profit/Lembaga Swadaya Masyarakat

                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input radioActive" type="radio" wire:model.lazy="f11_01" name="f11_01" id="f11_015" value="3">
                        <label class="form-check-label" for="f11_015">
                            Perusahaan swasta
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input radioActive" type="radio" wire:model.lazy="f11_01" name="f11_01" id="f11_016" value="4">
                        <label class="form-check-label" for="f11_016">
                            Wiraswasta/perusahaan sendiri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input radioActive" type="radio" wire:model.lazy="f11_01" name="f11_01" id="f11_017" value="5">
                        <label class="form-check-label" for="f11_017">
                            [5] Lainnya, tuliskan:
                        </label>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="f11_02" {{$f11_01== 5?"":"disabled"}} wire:model.lazy="f11_02">
                    </div>

                </div>
            </div>

        </div>
        {{-- f11 --}}

        {{-- f11a --}}
        <div class="col-md-12 mb-1">
            <div for="f11a" class="form-label h6 border_custom mb-3 w1-00">Apa tingkat/ukuran tempat anda bekerja/berwirausaha sekarang?</div>


            <select class="form-select" name="f11a" id="f11a" wire:model.lazy="f11a">
                <option selected>...</option>
                <option value="1">[1] Lokal/Wilayah/Berwirausaha tidak Berizin</option>
                <option value="2">[2] Nasional/Berwirausaha yang Berizin</option>
                <option value="3">[3] Multinasiona/Internasional</option>
                <option value="4">[4] Lainnya</option>
            </select>
            <div class="mt-2">
                <input type="text" class="form-control" name="f11a_01" {{$f11a== 4?"":"disabled"}} wire:model.lazy="f11a_01">
            </div>

            @error("f11a")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror

        </div>

        {{-- f11a --}}
        {{-- f16 --}}
        <div class="col-md-12">
            <label for="f16" class="form-label h6 border_custom mb-3">Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? Jawaban bisa lebih dari satu</label>


            <div class="d-flex gap-2">
                <select class="form-select" name="f16" multiple wire:model.lazy="f16">
                    <option disabled>...</option>
                    <option value="f16_01">[1] Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.</option>

                    <option value="f16_02">[1] Saya belum mendapatkan pekerjaan yang lebih sesuai.</option>


                    <option value="f16_03">[1] Di pekerjaan ini saya memeroleh prospek karir yang baik. </option>


                    <option value="f16_04">[1] Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan </option>

                    <option value="f16_05">[1] Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.</option>

                    <option value="f16_06">[1] Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini. </option>

                    <option value="f16_07">[1] Pekerjaan saya saat ini lebih aman/terjamin/secure</option>

                    <option value="f16_08">[1] Pekerjaan saya saat ini lebih menarik </option>

                    <option value="f16_09">[1] Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.</option>

                    <option value="f16_10">[1] Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya. </option>

                    <option value="f16_11">[1] Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.</option>

                    <option value="f16_12">[1] Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.</option>

                    <option value="f16_13">[1] Lainnya: </option>
                </select>
                <div>
                    @php
                    $cl = collect($f16);
                    @endphp
                    <label for="lainnya" class="form-label">Tuliskan </label>
                    <input type="text" name="f16_14" class="form-control" id="lainnya" {{$cl->contains("f16_13")?"":"disabled"}} required="" wire:model.lazy="f16_14">
                </div>

            </div>
            @error("f16")
            <div class="form-text text-danger">{{$message}}</div>
            @enderror

        </div>
        <script>
            var inputs1 = document.querySelectorAll('input.input-d-disable');
            inputs1.forEach((input) => {
                input.addEventListener("click", function(e) {
                    if (e.target.value == 1 | e.target.value == 2) {
                        document.getElementById(e.target.dataset.target).disabled = false;
                        document.getElementById(e.target.dataset.target2).disabled = true;


                        if (e.target.dataset.target3) {
                            console.log("disable")
                            // disable
                            document.getElementById(e.target.dataset.target3).disabled = true;
                            // active
                        } else if (e.target.dataset.target4) {
                            console.log("enable ")

                            document.getElementById(e.target.dataset.target4).disabled = false;
                        }
                    } else {
                        console.log("elseee");
                        document.getElementById(e.target.dataset.target).disabled = false;
                        document.getElementById(e.target.dataset.target2).disabled = true;
                        if (e.target.dataset.target3) {
                            // disable
                            document.getElementById(e.target.dataset.target3).disabled = true;
                            // active
                        } else if (e.target.dataset.target4) {
                            document.getElementById(e.target.dataset.target4).disabled = false;
                        }
                    }
                })
            })

        </script>

        {{-- f16 --}}
        <script>
            let f4 = document.querySelectorAll(".selectActive");
            f4.forEach((child) => {
                child.addEventListener("change", function(e) {
                    const options = e.target.options;
                    const selectedOptions = [];
                    const selectedValues = [];
                    for (let i = 0; i < options.length; i++) {
                        if (options[i].selected) {
                            selectedOptions.push(options[i]);
                            selectedValues.push(options[i].value);
                        }
                    }
                    if (selectedValues.includes(child.dataset.isactive)) {
                        document.getElementById(e.target.dataset.target).disabled = false;
                    } else {
                        document.getElementById(e.target.dataset.target).disabled = true;
                    }
                })

            })

        </script>
        @endif
        @if ($currentStep == 4)

        <div class="row">

            <div class="col-md-6">

                {{-- f17 --}}
                <div class="h4 my-3  border_custom mb-3">Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? (A)</div>

                {{-- f17_1--}}
                <div class="col-md-12 mb-2">
                    <label for="f17_1" class="form-label h6 pb-2 border_custom2 w-100">Pengetahuan di bidang atau disiplin ilmu Anda</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input class="form-check-input" value="1" type="radio" name="f17_1" id="f17_11ax" wire:model.lazy="f17_1" required>
                            <label class="form-check-label" for="f17_11ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="2" type="radio" name="f17_1" id="f17_11bx" wire:model.lazy="f17_1" required>
                            <label class="form-check-label" for="f17_11bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="3" type="radio" name="f17_1" id="f17_11cx" wire:model.lazy="f17_1" required>
                            <label class="form-check-label" for="f17_11cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_1" id="f17_11dx" wire:model.lazy="f17_1">
                            <label class="form-check-label" for="f17_11dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_1" id="f17_11ex" wire:model.lazy="f17_1">
                            <label class="form-check-label" for="f17_11ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_1")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror


                </div>
                {{-- //f17_1 --}}

                {{-- f17_3--}}
                <div class="col-md-12 mb-2">
                    <label for="f17_3" class="form-label h6 pb-2 border_custom2 w-100">Pengetahuan di bidang atau disiplin ilmu Anda</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" name="f17_3" id="f17_31ax" wire:model.lazy="f17_3">
                            <label class="form-check-label" for="f17_31ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_3" id="f17_31bx" wire:model.lazy="f17_3">

                            <label class="form-check-label" for="f17_31bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_3" id="f17_31cx" wire:model.lazy="f17_3">

                            <label class="form-check-label" for="f17_31cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_3" id="f17_31dx" wire:model.lazy="f17_3">

                            <label class="form-check-label" for="f17_31dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_3" id="f17_31ex" wire:model.lazy="f17_3">
                            <label class="form-check-label" for="f17_31ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_3")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_3 --}}

                {{-- f17_5--}}
                <div class="col-md-12">
                    <label for="f17_5" class="form-label h6 pb-2 border_custom2 w-100">Pengetahuan umum</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required wire:model.lazy="f17_5" class="form-check-input" value="1" type="radio" name="f17_5" id="f17_51ax">

                            <label class="form-check-label" for="f17_51ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required wire:model.lazy="f17_5" class="form-check-input" value="2" type="radio" name="f17_5" id="f17_51bx">

                            <label class="form-check-label" for="f17_51bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required wire:model.lazy="f17_5" class="form-check-input" value="3" type="radio" name="f17_5" id="f17_51cx">

                            <label class="form-check-label" for="f17_51cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required wire:model.lazy="f17_5" class="form-check-input" value="4" type="radio" name="f17_5" id="f17_51dx">

                            <label class="form-check-label" for="f17_51dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required wire:model.lazy="f17_5" class="form-check-input" type="radio" value="5" name="f17_5" id="f17_51ex">
                            <label class="form-check-label" for="f17_51ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_5")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_5 --}}

                {{-- f17_5a--}}
                <div class="col-md-12">
                    <label for="f17_5a" class="form-label h6 pb-2 border_custom2 w-100">Bahasa Inggris</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_5a" name="f17_5a" id="f17_5a1ax">


                            <label class="form-check-label" for="f17_5a1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_5a" id="f17_5a1bx" wire:model.lazy="f17_5a">

                            <label class="form-check-label" for="f17_5a1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_5a" id="f17_5a1cx" wire:model.lazy="f17_5a">

                            <label class="form-check-label" for="f17_5a1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_5a" id="f17_5a1dx" wire:model.lazy="f17_5a">

                            <label class="form-check-label" for="f17_5a1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_5a" id="f17_5a1ex" wire:model.lazy="f17_5a">

                            <label class="form-check-label" for="f17_5a1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_5a")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_5a --}}

                {{-- f17_7--}}
                <div class="col-md-12">
                    <label for="f17_7" class="form-label h6 pb-2 border_custom2 w-100">Keterampilan internet</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_7" name="f17_7" id="f17_71ax">
                            <label class="form-check-label" for="f17_71ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_7" id="f17_71bx" wire:model.lazy="f17_7">
                            <label class="form-check-label" for="f17_71bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_7" id="f17_71cx" wire:model.lazy="f17_7">
                            <label class="form-check-label" for="f17_71cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_7" id="f17_71dx" wire:model.lazy="f17_7">
                            <label class="form-check-label" for="f17_71dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_7" id="f17_71ex" wire:model.lazy="f17_7">
                            <label class="form-check-label" for="f17_71ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_7")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_7 --}}

                {{-- f17_9--}}
                <div class="col-md-12">
                    <label for="f17_9" class="form-label h6 pb-2 border_custom2 w-100">Keterampilan Komputer</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_9" name="f17_9" id="f17_91ax">
                            <label class="form-check-label" for="f17_91ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_9" id="f17_91bx" wire:model.lazy="f17_9">
                            <label class="form-check-label" for="f17_91bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_9" id="f17_91cx" wire:model.lazy="f17_9">
                            <label class="form-check-label" for="f17_91cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_9" id="f17_91dx" wire:model.lazy="f17_9">
                            <label class="form-check-label" for="f17_91dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_9" id="f17_91ex" wire:model.lazy="f17_9">
                            <label class="form-check-label" for="f17_91ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_9")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_9 --}}
                {{-- f17_11--}}
                <div class="col-md-12">
                    <label for="f17_11" class="form-label h6 pb-2 border_custom2 w-100">Berpikir kritis</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_11" name="f17_11" id="f17_111ax">
                            <label class="form-check-label" for="f17_111ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_11" id="f17_111bx" wire:model.lazy="f17_11">
                            <label class="form-check-label" for="f17_111bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_11" id="f17_111cx" wire:model.lazy="f17_11">
                            <label class="form-check-label" for="f17_111cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_11" id="f17_111dx" wire:model.lazy="f17_11">
                            <label class="form-check-label" for="f17_111dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_11" id="f17_111ex" wire:model.lazy="f17_11">
                            <label class="form-check-label" for="f17_111ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_11")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_11 --}}

                {{-- f17_13--}}
                <div class="col-md-12">
                    <label for="f17_13" class="form-label h6 pb-2 border_custom2 w-100">Keterampilan riset</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_13" name="f17_13" id="f17_131ax">
                            <label class="form-check-label" for="f17_131ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_13" id="f17_131bx" wire:model.lazy="f17_13">
                            <label class="form-check-label" for="f17_131bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_13" id="f17_131cx" wire:model.lazy="f17_13">
                            <label class="form-check-label" for="f17_131cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_13" id="f17_131dx" wire:model.lazy="f17_13">
                            <label class="form-check-label" for="f17_131dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_13" id="f17_131ex" wire:model.lazy="f17_13">
                            <label class="form-check-label" for="f17_131ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_13")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_13--}}
                {{-- f17_15--}}
                <div class="col-md-12">
                    <label for="f17_15" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan belajar</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_15" name="f17_15" id="f17_151ax">
                            <label class="form-check-label" for="f17_151ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_15" id="f17_151bx" wire:model.lazy="f17_15">
                            <label class="form-check-label" for="f17_151bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_15" id="f17_151cx" wire:model.lazy="f17_15">
                            <label class="form-check-label" for="f17_151cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_15" id="f17_151dx" wire:model.lazy="f17_15">
                            <label class="form-check-label" for="f17_151dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_15" id="f17_151ex" wire:model.lazy="f17_15">
                            <label class="form-check-label" for="f17_151ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_15")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_15--}}
                {{-- f17_17--}}
                <div class="col-md-12">
                    <label for="f17_17" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan berkomunikasi</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_17" name="f17_17" id="f17_171ax">
                            <label class="form-check-label" for="f17_171ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_17" id="f17_171bx" wire:model.lazy="f17_17">
                            <label class="form-check-label" for="f17_171bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_17" id="f17_171cx" wire:model.lazy="f17_17">
                            <label class="form-check-label" for="f17_171cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_17" id="f17_171dx" wire:model.lazy="f17_17">
                            <label class="form-check-label" for="f17_171dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_17" id="f17_171ex" wire:model.lazy="f17_17">
                            <label class="form-check-label" for="f17_171ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_17")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_17--}}
                {{-- f17_19--}}
                <div class="col-md-12">
                    <label for="f17_19" class="form-label h6 pb-2 border_custom2 w-100">Bekerja di bawah tekanan</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_19" name="f17_19" id="f17_191ax">
                            <label class="form-check-label" for="f17_191ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_19" id="f17_191bx" wire:model.lazy="f17_19">
                            <label class="form-check-label" for="f17_191bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_19" id="f17_191cx" wire:model.lazy="f17_19">
                            <label class="form-check-label" for="f17_191cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_19" id="f17_191dx" wire:model.lazy="f17_19">
                            <label class="form-check-label" for="f17_191dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_19" id="f17_191ex" wire:model.lazy="f17_19">
                            <label class="form-check-label" for="f17_191ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_19")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_19--}}
                {{-- f17_21--}}
                <div class="col-md-12">
                    <label for="f17_21" class="form-label h6 pb-2 border_custom2 w-100">Manajemen waktu</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_21" name="f17_21" id="f17_211ax">
                            <label class="form-check-label" for="f17_211ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_21" id="f17_211bx" wire:model.lazy="f17_21">
                            <label class="form-check-label" for="f17_211bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_21" id="f17_211cx" wire:model.lazy="f17_21">
                            <label class="form-check-label" for="f17_211cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_21" id="f17_211dx" wire:model.lazy="f17_21">
                            <label class="form-check-label" for="f17_211dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_21" id="f17_211ex" wire:model.lazy="f17_21">
                            <label class="form-check-label" for="f17_211ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_21")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_21--}}
                {{-- f17_23--}}
                <div class="col-md-12">
                    <label for="f17_23" class="form-label h6 pb-2 border_custom2 w-100">Bekerja secara mandiri</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_23" name="f17_23" id="f17_231ax">
                            <label class="form-check-label" for="f17_231ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_23" id="f17_231bx" wire:model.lazy="f17_23">
                            <label class="form-check-label" for="f17_231bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_23" id="f17_231cx" wire:model.lazy="f17_23">
                            <label class="form-check-label" for="f17_231cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_23" id="f17_231dx" wire:model.lazy="f17_23">
                            <label class="form-check-label" for="f17_231dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_23" id="f17_231ex" wire:model.lazy="f17_23">
                            <label class="form-check-label" for="f17_231ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_23")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_23--}}
                {{-- f17_25--}}
                <div class="col-md-12">
                    <label for="f17_25" class="form-label h6 pb-2 border_custom2 w-100">Bekerja dalam tim/bekerja sama dengan orang lain</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_25" name="f17_25" id="f17_251ax">
                            <label class="form-check-label" for="f17_251ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_25" id="f17_251bx" wire:model.lazy="f17_25">
                            <label class="form-check-label" for="f17_251bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_25" id="f17_251cx" wire:model.lazy="f17_25">
                            <label class="form-check-label" for="f17_251cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_25" id="f17_251dx" wire:model.lazy="f17_25">
                            <label class="form-check-label" for="f17_251dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_25" id="f17_251ex" wire:model.lazy="f17_25">
                            <label class="form-check-label" for="f17_251ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_25")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_25--}}
                {{-- f17_27--}}
                <div class="col-md-12">
                    <label for="f17_27" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan dalam memecahkan masalah</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_27" name="f17_27" id="f17_271ax">
                            <label class="form-check-label" for="f17_271ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_27" id="f17_271bx" wire:model.lazy="f17_27">
                            <label class="form-check-label" for="f17_271bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_27" id="f17_271cx" wire:model.lazy="f17_27">
                            <label class="form-check-label" for="f17_271cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_27" id="f17_271dx" wire:model.lazy="f17_27">
                            <label class="form-check-label" for="f17_271dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_27" id="f17_271ex" wire:model.lazy="f17_27">
                            <label class="form-check-label" for="f17_271ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_27")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_27 --}}
                {{-- f17_29--}}
                <div class="col-md-12">
                    <label for="f17_29" class="form-label h6 pb-2 border_custom2 w-100">Negosiasi</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_29" name="f17_29" id="f17_291ax">
                            <label class="form-check-label" for="f17_291ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_29" id="f17_291bx" wire:model.lazy="f17_29">
                            <label class="form-check-label" for="f17_291bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_29" id="f17_291cx" wire:model.lazy="f17_29">
                            <label class="form-check-label" for="f17_291cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_29" id="f17_291dx" wire:model.lazy="f17_29">
                            <label class="form-check-label" for="f17_291dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_29" id="f17_291ex" wire:model.lazy="f17_29">
                            <label class="form-check-label" for="f17_291ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_29")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_29 --}}
                {{-- f17_31--}}
                <div class="col-md-12">
                    <label for="f17_31" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan analisis</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_31" name="f17_31" id="f17_311ax">
                            <label class="form-check-label" for="f17_311ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_31" id="f17_311bx" wire:model.lazy="f17_31">
                            <label class="form-check-label" for="f17_311bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_31" id="f17_311cx" wire:model.lazy="f17_31">
                            <label class="form-check-label" for="f17_311cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_31" id="f17_311dx" wire:model.lazy="f17_31">
                            <label class="form-check-label" for="f17_311dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_31" id="f17_311ex" wire:model.lazy="f17_31">
                            <label class="form-check-label" for="f17_311ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_31")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_31 --}}
                {{-- f17_33--}}
                <div class="col-md-12">
                    <label for="f17_33" class="form-label h6 pb-2 border_custom2 w-100">Toleransi</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_33" name="f17_33" id="f17_331ax">
                            <label class="form-check-label" for="f17_331ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_33" id="f17_331bx" wire:model.lazy="f17_33">
                            <label class="form-check-label" for="f17_331bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_33" id="f17_331cx" wire:model.lazy="f17_33">
                            <label class="form-check-label" for="f17_331cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_33" id="f17_331dx" wire:model.lazy="f17_33">
                            <label class="form-check-label" for="f17_331dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_33" id="f17_331ex" wire:model.lazy="f17_33">
                            <label class="form-check-label" for="f17_331ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_33")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_33 --}}
                {{-- f17_35--}}
                <div class="col-md-12">
                    <label for="f17_35" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan adaptasi</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_35" name="f17_35" id="f17_351ax">
                            <label class="form-check-label" for="f17_351ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_35" id="f17_351bx" wire:model.lazy="f17_35">
                            <label class="form-check-label" for="f17_351bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_35" id="f17_351cx" wire:model.lazy="f17_35">
                            <label class="form-check-label" for="f17_351cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_35" id="f17_351dx" wire:model.lazy="f17_35">
                            <label class="form-check-label" for="f17_351dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_35" id="f17_351ex" wire:model.lazy="f17_35">
                            <label class="form-check-label" for="f17_351ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_35")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_35 --}}
                {{-- f17_37--}}
                <div class="col-md-12">
                    <label for="f17_37" class="form-label h6 pb-2 border_custom2 w-100">Loyalitas</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_37" name="f17_37" id="f17_371ax">
                            <label class="form-check-label" for="f17_371ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_37" id="f17_371bx" wire:model.lazy="f17_37">
                            <label class="form-check-label" for="f17_371bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_37" id="f17_371cx" wire:model.lazy="f17_37">
                            <label class="form-check-label" for="f17_371cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_37" id="f17_371dx" wire:model.lazy="f17_37">
                            <label class="form-check-label" for="f17_371dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_37" id="f17_371ex" wire:model.lazy="f17_37">
                            <label class="form-check-label" for="f17_371ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_37")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_37 --}}
                {{-- f17_37a--}}
                <div class="col-md-12">
                    <label for="f17_37a" class="form-label h6 pb-2 border_custom2 w-100">Integritas</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_37a" name="f17_37a" id="f17_37a1ax">
                            <label class="form-check-label" for="f17_37a1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_37a" id="f17_37a1bx" wire:model.lazy="f17_37a">
                            <label class="form-check-label" for="f17_37a1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_37a" id="f17_37a1cx" wire:model.lazy="f17_37a">
                            <label class="form-check-label" for="f17_37a1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_37a" id="f17_37a1dx" wire:model.lazy="f17_37a">
                            <label class="form-check-label" for="f17_37a1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_37a" id="f17_37a1ex" wire:model.lazy="f17_37a">
                            <label class="form-check-label" for="f17_37a1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_37a")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_37a --}}
                {{-- f17_39--}}
                <div class="col-md-12">
                    <label for="f17_39" class="form-label h6 pb-2 border_custom2 w-100">Bekerja dengan orang yang berbeda budaya maupun latar belakang</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_39" name="f17_39" id="f17_391ax">
                            <label class="form-check-label" for="f17_391ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_39" id="f17_391bx" wire:model.lazy="f17_39">
                            <label class="form-check-label" for="f17_391bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_39" id="f17_391cx" wire:model.lazy="f17_39">
                            <label class="form-check-label" for="f17_391cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_39" id="f17_391dx" wire:model.lazy="f17_39">
                            <label class="form-check-label" for="f17_391dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_39" id="f17_391ex" wire:model.lazy="f17_39">
                            <label class="form-check-label" for="f17_391ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_39")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_39 --}}
                {{-- f17_41--}}
                <div class="col-md-12">
                    <label for="f17_41" class="form-label h6 pb-2 border_custom2 w-100">Kepemimpinan</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_41" name="f17_41" id="f17_411ax">
                            <label class="form-check-label" for="f17_411ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_41" id="f17_411bx" wire:model.lazy="f17_41">
                            <label class="form-check-label" for="f17_411bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_41" id="f17_411cx" wire:model.lazy="f17_41">
                            <label class="form-check-label" for="f17_411cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_41" id="f17_411dx" wire:model.lazy="f17_41">
                            <label class="form-check-label" for="f17_411dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_41" id="f17_411ex" wire:model.lazy="f17_41">
                            <label class="form-check-label" for="f17_411ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_41")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_41 --}}
                {{-- f17_43--}}
                <div class="col-md-12">
                    <label for="f17_43" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan dalam memegang tanggung jawab</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_43" name="f17_43" id="f17_431ax">
                            <label class="form-check-label" for="f17_431ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_43" id="f17_431bx" wire:model.lazy="f17_43">
                            <label class="form-check-label" for="f17_431bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_43" id="f17_431cx" wire:model.lazy="f17_43">
                            <label class="form-check-label" for="f17_431cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_43" id="f17_431dx" wire:model.lazy="f17_43">
                            <label class="form-check-label" for="f17_431dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_43" id="f17_431ex" wire:model.lazy="f17_43">
                            <label class="form-check-label" for="f17_431ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_43")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_43 --}}
                {{-- f17_45--}}
                <div class="col-md-12">
                    <label for="f17_45" class="form-label h6 pb-2 border_custom2 w-100">Inisiatif</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_45" name="f17_45" id="f17_451ax">
                            <label class="form-check-label" for="f17_451ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_45" id="f17_451bx" wire:model.lazy="f17_45">
                            <label class="form-check-label" for="f17_451bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_45" id="f17_451cx" wire:model.lazy="f17_45">
                            <label class="form-check-label" for="f17_451cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_45" id="f17_451dx" wire:model.lazy="f17_45">
                            <label class="form-check-label" for="f17_451dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_45" id="f17_451ex" wire:model.lazy="f17_45">
                            <label class="form-check-label" for="f17_451ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_45")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_45 --}}
                {{-- f17_47--}}
                <div class="col-md-12">
                    <label for="f17_47" class="form-label h6 pb-2 border_custom2 w-100">Manajemen proyek/program</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_47" name="f17_47" id="f17_471ax">
                            <label class="form-check-label" for="f17_471ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_47" id="f17_471bx" wire:model.lazy="f17_47">
                            <label class="form-check-label" for="f17_471bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_47" id="f17_471cx" wire:model.lazy="f17_47">
                            <label class="form-check-label" for="f17_471cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_47" id="f17_471dx" wire:model.lazy="f17_47">
                            <label class="form-check-label" for="f17_471dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_47" id="f17_471ex" wire:model.lazy="f17_47">
                            <label class="form-check-label" for="f17_471ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_47")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_47 --}}
                {{-- f17_49--}}
                <div class="col-md-12">
                    <label for="f17_49" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan untuk mempresentasikan ide/produk/laporan</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_49" name="f17_49" id="f17_491ax">
                            <label class="form-check-label" for="f17_491ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_49" id="f17_491bx" wire:model.lazy="f17_49">
                            <label class="form-check-label" for="f17_491bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_49" id="f17_491cx" wire:model.lazy="f17_49">
                            <label class="form-check-label" for="f17_491cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_49" id="f17_491dx" wire:model.lazy="f17_49">
                            <label class="form-check-label" for="f17_491dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_49" id="f17_491ex" wire:model.lazy="f17_49">
                            <label class="form-check-label" for="f17_491ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_49")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_49 --}}
                {{-- f17_51--}}
                <div class="col-md-12">
                    <label for="f17_51" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan dalam menulis laporan, memo dan dokumen</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_51" name="f17_51" id="f17_511ax">
                            <label class="form-check-label" for="f17_511ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_51" id="f17_511bx" wire:model.lazy="f17_51">
                            <label class="form-check-label" for="f17_511bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_51" id="f17_511cx" wire:model.lazy="f17_51">
                            <label class="form-check-label" for="f17_511cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_51" id="f17_511dx" wire:model.lazy="f17_51">
                            <label class="form-check-label" for="f17_511dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_51" id="f17_511ex" wire:model.lazy="f17_51">
                            <label class="form-check-label" for="f17_511ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_51")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_51 --}}
                {{-- f17_53--}}
                <div class="col-md-12">
                    <label for="f17_53" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan untuk terus belajar sepanjang hayat</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_53" name="f17_53" id="f17_531ax">
                            <label class="form-check-label" for="f17_531ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_53" id="f17_531bx" wire:model.lazy="f17_53">
                            <label class="form-check-label" for="f17_531bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_53" id="f17_531cx" wire:model.lazy="f17_53">
                            <label class="form-check-label" for="f17_531cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_53" id="f17_531dx" wire:model.lazy="f17_53">
                            <label class="form-check-label" for="f17_531dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_53" id="f17_531ex" wire:model.lazy="f17_53">
                            <label class="form-check-label" for="f17_531ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_53")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_53 --}}
                {{-- //f17 --}}

            </div>
            <div class="col-md-6">

                {{-- f17 --}}
                <div class="h5 my-3  border_custom mb-3">Pada saat lulus, bagaimana kontribusi perguruan tinggi dalam hal kompetensi di bawah ini? (B)</div>


                {{-- f17_2b--}}
                <div class="col-md-12 mb-2">
                    <label for="f17_2b" class="form-label h6 pb-2 border_custom2 w-100">Pengetahuan di bidang atau disiplin ilmu Anda</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" name="f17_2b" id="f17_2b1ax" wire:model.lazy="f17_2b">
                            <label class="form-check-label" for="f17_2b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_2b" id="f17_2b1bx" wire:model.lazy="f17_2b">

                            <label class="form-check-label" for="f17_2b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_2b" id="f17_2b1cx" wire:model.lazy="f17_2b">

                            <label class="form-check-label" for="f17_2b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_2b" id="f17_2b1dx" wire:model.lazy="f17_2b">

                            <label class="form-check-label" for="f17_2b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_2b" id="f17_2b1ex" wire:model.lazy="f17_2b">
                            <label class="form-check-label" for="f17_2b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_2b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_2b --}}

                {{-- f17_4b--}}
                <div class="col-md-12 mb-2">
                    <label for="f17_4b" class="form-label h6 pb-2 border_custom2 w-100">Pengetahuan di bidang atau disiplin ilmu Anda</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" name="f17_4b" id="f17_4b1ax" wire:model.lazy="f17_4b">
                            <label class="form-check-label" for="f17_4b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_4b" id="f17_4b1bx" wire:model.lazy="f17_4b">

                            <label class="form-check-label" for="f17_4b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_4b" id="f17_4b1cx" wire:model.lazy="f17_4b">

                            <label class="form-check-label" for="f17_4b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_4b" id="f17_4b1dx" wire:model.lazy="f17_4b">

                            <label class="form-check-label" for="f17_4b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_4b" id="f17_4b1ex" wire:model.lazy="f17_4b">
                            <label class="form-check-label" for="f17_4b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_4b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_4b --}}

                {{-- f17_6b--}}
                <div class="col-md-12">
                    <label for="f17_6b" class="form-label h6 pb-2 border_custom2 w-100">Pengetahuan umum</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required wire:model.lazy="f17_6b" class="form-check-input" value="1" type="radio" name="f17_6b" id="f17_6b1ax">

                            <label class="form-check-label" for="f17_6b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required wire:model.lazy="f17_6b" class="form-check-input" value="2" type="radio" name="f17_6b" id="f17_6b1bx">

                            <label class="form-check-label" for="f17_6b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required wire:model.lazy="f17_6b" class="form-check-input" value="3" type="radio" name="f17_6b" id="f17_6b1cx">

                            <label class="form-check-label" for="f17_6b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required wire:model.lazy="f17_6b" class="form-check-input" value="4" type="radio" name="f17_6b" id="f17_6b1dx">

                            <label class="form-check-label" for="f17_6b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required wire:model.lazy="f17_6b" class="form-check-input" type="radio" value="5" name="f17_6b" id="f17_6b1ex">
                            <label class="form-check-label" for="f17_6b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_6b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_6b --}}

                {{-- f17_6ba--}}
                <div class="col-md-12">
                    <label for="f17_6ba" class="form-label h6 pb-2 border_custom2 w-100">Bahasa Inggris</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_6ba" name="f17_6ba" id="f17_6ba1ax">


                            <label class="form-check-label" for="f17_6ba1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_6ba" id="f17_6ba1bx" wire:model.lazy="f17_6ba">

                            <label class="form-check-label" for="f17_6ba1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_6ba" id="f17_6ba1cx" wire:model.lazy="f17_6ba">

                            <label class="form-check-label" for="f17_6ba1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_6ba" id="f17_6ba1dx" wire:model.lazy="f17_6ba">

                            <label class="form-check-label" for="f17_6ba1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_6ba" id="f17_6ba1ex" wire:model.lazy="f17_6ba">

                            <label class="form-check-label" for="f17_6ba1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_6ba")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_6ba --}}

                {{-- f17_8b--}}
                <div class="col-md-12">
                    <label for="f17_8b" class="form-label h6 pb-2 border_custom2 w-100">Keterampilan internet</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_8b" name="f17_8b" id="f17_8b1ax">
                            <label class="form-check-label" for="f17_8b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_8b" id="f17_8b1bx" wire:model.lazy="f17_8b">
                            <label class="form-check-label" for="f17_8b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_8b" id="f17_8b1cx" wire:model.lazy="f17_8b">
                            <label class="form-check-label" for="f17_8b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_8b" id="f17_8b1dx" wire:model.lazy="f17_8b">
                            <label class="form-check-label" for="f17_8b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_8b" id="f17_8b1ex" wire:model.lazy="f17_8b">
                            <label class="form-check-label" for="f17_8b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_8b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_8b --}}

                {{-- f17_10b--}}
                <div class="col-md-12">
                    <label for="f17_10b" class="form-label h6 pb-2 border_custom2 w-100">Keterampilan Komputer</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_10b" name="f17_10b" id="f17_10b1ax">
                            <label class="form-check-label" for="f17_10b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_10b" id="f17_10b1bx" wire:model.lazy="f17_10b">
                            <label class="form-check-label" for="f17_10b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_10b" id="f17_10b1cx" wire:model.lazy="f17_10b">
                            <label class="form-check-label" for="f17_10b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_10b" id="f17_10b1dx" wire:model.lazy="f17_10b">
                            <label class="form-check-label" for="f17_10b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_10b" id="f17_10b1ex" wire:model.lazy="f17_10b">
                            <label class="form-check-label" for="f17_10b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_10b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_10b --}}
                {{-- f17_12b--}}
                <div class="col-md-12">
                    <label for="f17_12b" class="form-label h6 pb-2 border_custom2 w-100">Berpikir kritis</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_12b" name="f17_12b" id="f17_12b1ax">
                            <label class="form-check-label" for="f17_12b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_12b" id="f17_12b1bx" wire:model.lazy="f17_12b">
                            <label class="form-check-label" for="f17_12b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_12b" id="f17_12b1cx" wire:model.lazy="f17_12b">
                            <label class="form-check-label" for="f17_12b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_12b" id="f17_12b1dx" wire:model.lazy="f17_12b">
                            <label class="form-check-label" for="f17_12b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_12b" id="f17_12b1ex" wire:model.lazy="f17_12b">
                            <label class="form-check-label" for="f17_12b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_12b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_12b --}}

                {{-- f17_14b--}}
                <div class="col-md-12">
                    <label for="f17_14b" class="form-label h6 pb-2 border_custom2 w-100">Keterampilan riset</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_14b" name="f17_14b" id="f17_14b1ax">
                            <label class="form-check-label" for="f17_14b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_14b" id="f17_14b1bx" wire:model.lazy="f17_14b">
                            <label class="form-check-label" for="f17_14b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_14b" id="f17_14b1cx" wire:model.lazy="f17_14b">
                            <label class="form-check-label" for="f17_14b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_14b" id="f17_14b1dx" wire:model.lazy="f17_14b">
                            <label class="form-check-label" for="f17_14b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_14b" id="f17_14b1ex" wire:model.lazy="f17_14b">
                            <label class="form-check-label" for="f17_14b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_14b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_14b--}}

                {{-- f17_16b--}}
                <div class="col-md-12">
                    <label for="f17_16b" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan belajar</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_16b" name="f17_16b" id="f17_16b1ax">
                            <label class="form-check-label" for="f17_16b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_16b" id="f17_16b1bx" wire:model.lazy="f17_16b">
                            <label class="form-check-label" for="f17_16b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_16b" id="f17_16b1cx" wire:model.lazy="f17_16b">
                            <label class="form-check-label" for="f17_16b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_16b" id="f17_16b1dx" wire:model.lazy="f17_16b">
                            <label class="form-check-label" for="f17_16b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_16b" id="f17_16b1ex" wire:model.lazy="f17_16b">
                            <label class="form-check-label" for="f17_16b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_16b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_16b--}}

                {{-- f17_18b--}}
                <div class="col-md-12">
                    <label for="f17_18b" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan berkomunikasi</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_18b" name="f17_18b" id="f17_18b1ax">
                            <label class="form-check-label" for="f17_18b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_18b" id="f17_18b1bx" wire:model.lazy="f17_18b">
                            <label class="form-check-label" for="f17_18b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_18b" id="f17_18b1cx" wire:model.lazy="f17_18b">
                            <label class="form-check-label" for="f17_18b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_18b" id="f17_18b1dx" wire:model.lazy="f17_18b">
                            <label class="form-check-label" for="f17_18b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_18b" id="f17_18b1ex" wire:model.lazy="f17_18b">
                            <label class="form-check-label" for="f17_18b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_18b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_18b--}}

                {{-- f17_20b--}}
                <div class="col-md-12">
                    <label for="f17_20b" class="form-label h6 pb-2 border_custom2 w-100">Bekerja di bawah tekanan</label>

                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_20b" name="f17_20b" id="f17_20b1ax">
                            <label class="form-check-label" for="f17_20b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_20b" id="f17_20b1bx" wire:model.lazy="f17_20b">
                            <label class="form-check-label" for="f17_20b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_20b" id="f17_20b1cx" wire:model.lazy="f17_20b">
                            <label class="form-check-label" for="f17_20b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_20b" id="f17_20b1dx" wire:model.lazy="f17_20b">
                            <label class="form-check-label" for="f17_20b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_20b" id="f17_20b1ex" wire:model.lazy="f17_20b">
                            <label class="form-check-label" for="f17_20b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_20b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_20b--}}

                {{-- f17_22b--}}
                <div class="col-md-12">
                    <label for="f17_22b" class="form-label h6 pb-2 border_custom2 w-100">Manajemen waktu</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_22b" name="f17_22b" id="f17_22b1ax">
                            <label class="form-check-label" for="f17_22b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_22b" id="f17_22b1bx" wire:model.lazy="f17_22b">
                            <label class="form-check-label" for="f17_22b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_22b" id="f17_22b1cx" wire:model.lazy="f17_22b">
                            <label class="form-check-label" for="f17_22b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_22b" id="f17_22b1dx" wire:model.lazy="f17_22b">
                            <label class="form-check-label" for="f17_22b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_22b" id="f17_22b1ex" wire:model.lazy="f17_22b">
                            <label class="form-check-label" for="f17_22b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_22b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_22b--}}

                {{-- f17_24b--}}
                <div class="col-md-12">
                    <label for="f17_24b" class="form-label h6 pb-2 border_custom2 w-100">Bekerja secara mandiri</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_24b" name="f17_24b" id="f17_24b1ax">
                            <label class="form-check-label" for="f17_24b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_24b" id="f17_24b1bx" wire:model.lazy="f17_24b">
                            <label class="form-check-label" for="f17_24b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_24b" id="f17_24b1cx" wire:model.lazy="f17_24b">
                            <label class="form-check-label" for="f17_24b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_24b" id="f17_24b1dx" wire:model.lazy="f17_24b">
                            <label class="form-check-label" for="f17_24b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_24b" id="f17_24b1ex" wire:model.lazy="f17_24b">
                            <label class="form-check-label" for="f17_24b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_24b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_24b--}}

                {{-- f17_26b--}}
                <div class="col-md-12">
                    <label for="f17_26b" class="form-label h6 pb-2 border_custom2 w-100">Bekerja dalam tim/bekerja sama dengan orang lain</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_26b" name="f17_26b" id="f17_26b1ax">
                            <label class="form-check-label" for="f17_26b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_26b" id="f17_26b1bx" wire:model.lazy="f17_26b">
                            <label class="form-check-label" for="f17_26b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_26b" id="f17_26b1cx" wire:model.lazy="f17_26b">
                            <label class="form-check-label" for="f17_26b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_26b" id="f17_26b1dx" wire:model.lazy="f17_26b">
                            <label class="form-check-label" for="f17_26b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_26b" id="f17_26b1ex" wire:model.lazy="f17_26b">
                            <label class="form-check-label" for="f17_26b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_26b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_26b--}}

                {{-- f17_28b--}}
                <div class="col-md-12">
                    <label for="f17_28b" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan dalam memecahkan masalah</label>

                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_28b" name="f17_28b" id="f17_28b1ax">
                            <label class="form-check-label" for="f17_28b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_28b" id="f17_28b1bx" wire:model.lazy="f17_28b">
                            <label class="form-check-label" for="f17_28b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_28b" id="f17_28b1cx" wire:model.lazy="f17_28b">
                            <label class="form-check-label" for="f17_28b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_28b" id="f17_28b1dx" wire:model.lazy="f17_28b">
                            <label class="form-check-label" for="f17_28b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_28b" id="f17_28b1ex" wire:model.lazy="f17_28b">
                            <label class="form-check-label" for="f17_28b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_28b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_28b --}}

                {{-- f17_30b--}}
                <div class="col-md-12">
                    <label for="f17_30b" class="form-label h6 pb-2 border_custom2 w-100">Negosiasi</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_30b" name="f17_30b" id="f17_30b1ax">
                            <label class="form-check-label" for="f17_30b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_30b" id="f17_30b1bx" wire:model.lazy="f17_30b">
                            <label class="form-check-label" for="f17_30b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_30b" id="f17_30b1cx" wire:model.lazy="f17_30b">
                            <label class="form-check-label" for="f17_30b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_30b" id="f17_30b1dx" wire:model.lazy="f17_30b">
                            <label class="form-check-label" for="f17_30b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_30b" id="f17_30b1ex" wire:model.lazy="f17_30b">
                            <label class="form-check-label" for="f17_30b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_30b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_30b --}}

                {{-- f17_32b--}}
                <div class="col-md-12">
                    <label for="f17_32b" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan analisis</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_32b" name="f17_32b" id="f17_32b1ax">
                            <label class="form-check-label" for="f17_32b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_32b" id="f17_32b1bx" wire:model.lazy="f17_32b">
                            <label class="form-check-label" for="f17_32b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_32b" id="f17_32b1cx" wire:model.lazy="f17_32b">
                            <label class="form-check-label" for="f17_32b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_32b" id="f17_32b1dx" wire:model.lazy="f17_32b">
                            <label class="form-check-label" for="f17_32b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_32b" id="f17_32b1ex" wire:model.lazy="f17_32b">
                            <label class="form-check-label" for="f17_32b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_32b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_32b --}}

                {{-- f17_34b--}}
                <div class="col-md-12">
                    <label for="f17_34b" class="form-label h6 pb-2 border_custom2 w-100">Toleransi</label>

                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_34b" name="f17_34b" id="f17_34b1ax">
                            <label class="form-check-label" for="f17_34b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_34b" id="f17_34b1bx" wire:model.lazy="f17_34b">
                            <label class="form-check-label" for="f17_34b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_34b" id="f17_34b1cx" wire:model.lazy="f17_34b">
                            <label class="form-check-label" for="f17_34b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_34b" id="f17_34b1dx" wire:model.lazy="f17_34b">
                            <label class="form-check-label" for="f17_34b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_34b" id="f17_34b1ex" wire:model.lazy="f17_34b">
                            <label class="form-check-label" for="f17_34b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_34b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_34b --}}

                {{-- f17_36b--}}
                <div class="col-md-12">
                    <label for="f17_36b" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan adaptasi</label>

                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_36b" name="f17_36b" id="f17_36b1ax">
                            <label class="form-check-label" for="f17_36b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_36b" id="f17_36b1bx" wire:model.lazy="f17_36b">
                            <label class="form-check-label" for="f17_36b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_36b" id="f17_36b1cx" wire:model.lazy="f17_36b">
                            <label class="form-check-label" for="f17_36b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_36b" id="f17_36b1dx" wire:model.lazy="f17_36b">
                            <label class="form-check-label" for="f17_36b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_36b" id="f17_36b1ex" wire:model.lazy="f17_36b">
                            <label class="form-check-label" for="f17_36b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_36b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_36b --}}

                {{-- f17_38b--}}
                <div class="col-md-12">
                    <label for="f17_38b" class="form-label h6 pb-2 border_custom2 w-100">Loyalitas</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_38b" name="f17_38b" id="f17_38b1ax">
                            <label class="form-check-label" for="f17_38b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_38b" id="f17_38b1bx" wire:model.lazy="f17_38b">
                            <label class="form-check-label" for="f17_38b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_38b" id="f17_38b1cx" wire:model.lazy="f17_38b">
                            <label class="form-check-label" for="f17_38b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_38b" id="f17_38b1dx" wire:model.lazy="f17_38b">
                            <label class="form-check-label" for="f17_38b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_38b" id="f17_38b1ex" wire:model.lazy="f17_38b">
                            <label class="form-check-label" for="f17_38b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_38b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_38b --}}

                {{-- f17_38ba--}}
                <div class="col-md-12">
                    <label for="f17_38ba" class="form-label h6 pb-2 border_custom2 w-100">Integritas</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_38ba" name="f17_38ba" id="f17_38ba1ax">
                            <label class="form-check-label" for="f17_38ba1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_38ba" id="f17_38ba1bx" wire:model.lazy="f17_38ba">
                            <label class="form-check-label" for="f17_38ba1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_38ba" id="f17_38ba1cx" wire:model.lazy="f17_38ba">
                            <label class="form-check-label" for="f17_38ba1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_38ba" id="f17_38ba1dx" wire:model.lazy="f17_38ba">
                            <label class="form-check-label" for="f17_38ba1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_38ba" id="f17_38ba1ex" wire:model.lazy="f17_38ba">
                            <label class="form-check-label" for="f17_38ba1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_38ba")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_38ba --}}

                {{-- f17_40b--}}
                <div class="col-md-12">
                    <label for="f17_40b" class="form-label h6 pb-2 border_custom2 w-100">Bekerja dengan orang yang berbeda budaya maupun latar belakang</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_40b" name="f17_40b" id="f17_40b1ax">
                            <label class="form-check-label" for="f17_40b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_40b" id="f17_40b1bx" wire:model.lazy="f17_40b">
                            <label class="form-check-label" for="f17_40b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_40b" id="f17_40b1cx" wire:model.lazy="f17_40b">
                            <label class="form-check-label" for="f17_40b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_40b" id="f17_40b1dx" wire:model.lazy="f17_40b">
                            <label class="form-check-label" for="f17_40b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_40b" id="f17_40b1ex" wire:model.lazy="f17_40b">
                            <label class="form-check-label" for="f17_40b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_40b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_40b --}}

                {{-- f17_42b--}}
                <div class="col-md-12">
                    <label for="f17_42b" class="form-label h6 pb-2 border_custom2 w-100">Kepemimpinan</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_42b" name="f17_42b" id="f17_42b1ax">
                            <label class="form-check-label" for="f17_42b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_42b" id="f17_42b1bx" wire:model.lazy="f17_42b">
                            <label class="form-check-label" for="f17_42b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_42b" id="f17_42b1cx" wire:model.lazy="f17_42b">
                            <label class="form-check-label" for="f17_42b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_42b" id="f17_42b1dx" wire:model.lazy="f17_42b">
                            <label class="form-check-label" for="f17_42b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_42b" id="f17_42b1ex" wire:model.lazy="f17_42b">
                            <label class="form-check-label" for="f17_42b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_42b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_42b --}}

                {{-- f17_44b--}}
                <div class="col-md-12">
                    <label for="f17_44b" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan dalam memegang tanggung jawab</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_44b" name="f17_44b" id="f17_44b1ax">
                            <label class="form-check-label" for="f17_44b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_44b" id="f17_44b1bx" wire:model.lazy="f17_44b">
                            <label class="form-check-label" for="f17_44b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_44b" id="f17_44b1cx" wire:model.lazy="f17_44b">
                            <label class="form-check-label" for="f17_44b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_44b" id="f17_44b1dx" wire:model.lazy="f17_44b">
                            <label class="form-check-label" for="f17_44b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_44b" id="f17_44b1ex" wire:model.lazy="f17_44b">
                            <label class="form-check-label" for="f17_44b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_44b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_44b --}}

                {{-- f17_46b--}}
                <div class="col-md-12">
                    <label for="f17_46b" class="form-label h6 pb-2 border_custom2 w-100">Inisiatif</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_46b" name="f17_46b" id="f17_46b1ax">
                            <label class="form-check-label" for="f17_46b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_46b" id="f17_46b1bx" wire:model.lazy="f17_46b">
                            <label class="form-check-label" for="f17_46b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_46b" id="f17_46b1cx" wire:model.lazy="f17_46b">
                            <label class="form-check-label" for="f17_46b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_46b" id="f17_46b1dx" wire:model.lazy="f17_46b">
                            <label class="form-check-label" for="f17_46b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_46b" id="f17_46b1ex" wire:model.lazy="f17_46b">
                            <label class="form-check-label" for="f17_46b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_46b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_46b --}}

                {{-- f17_48b--}}
                <div class="col-md-12">
                    <label for="f17_48b" class="form-label h6 pb-2 border_custom2 w-100">Manajemen proyek/program</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_48b" name="f17_48b" id="f17_48b1ax">
                            <label class="form-check-label" for="f17_48b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_48b" id="f17_48b1bx" wire:model.lazy="f17_48b">
                            <label class="form-check-label" for="f17_48b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_48b" id="f17_48b1cx" wire:model.lazy="f17_48b">
                            <label class="form-check-label" for="f17_48b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_48b" id="f17_48b1dx" wire:model.lazy="f17_48b">
                            <label class="form-check-label" for="f17_48b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_48b" id="f17_48b1ex" wire:model.lazy="f17_48b">
                            <label class="form-check-label" for="f17_48b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_48b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_48b --}}

                {{-- f17_50b--}}
                <div class="col-md-12">
                    <label for="f17_50b" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan untuk mempresentasikan ide/produk/laporan</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_50b" name="f17_50b" id="f17_50b1ax">
                            <label class="form-check-label" for="f17_50b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_50b" id="f17_50b1bx" wire:model.lazy="f17_50b">
                            <label class="form-check-label" for="f17_50b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_50b" id="f17_50b1cx" wire:model.lazy="f17_50b">
                            <label class="form-check-label" for="f17_50b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_50b" id="f17_50b1dx" wire:model.lazy="f17_50b">
                            <label class="form-check-label" for="f17_50b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_50b" id="f17_50b1ex" wire:model.lazy="f17_50b">
                            <label class="form-check-label" for="f17_50b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_50b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_50b --}}

                {{-- f17_52b--}}
                <div class="col-md-12">
                    <label for="f17_52b" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan dalam menulis laporan, memo dan dokumen</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_52b" name="f17_52b" id="f17_52b1ax">
                            <label class="form-check-label" for="f17_52b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_52b" id="f17_52b1bx" wire:model.lazy="f17_52b">
                            <label class="form-check-label" for="f17_52b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_52b" id="f17_52b1cx" wire:model.lazy="f17_52b">
                            <label class="form-check-label" for="f17_52b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_52b" id="f17_52b1dx" wire:model.lazy="f17_52b">
                            <label class="form-check-label" for="f17_52b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_52b" id="f17_52b1ex" wire:model.lazy="f17_52b">
                            <label class="form-check-label" for="f17_52b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_52b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                {{-- //f17_52b --}}

                {{-- f17_54b--}}
                <div class="col-md-12">
                    <label for="f17_54b" class="form-label h6 pb-2 border_custom2 w-100">Kemampuan untuk terus belajar sepanjang hayat</label>
                    <div class="d-flex gap-2">
                        <div class="form-check">
                            <input required class="form-check-input" value="1" type="radio" wire:model.lazy="f17_54b" name="f17_54b" id="f17_54b1ax">
                            <label class="form-check-label" for="f17_54b1ax">
                                Sangat Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="2" type="radio" name="f17_54b" id="f17_54b1bx" wire:model.lazy="f17_54b">
                            <label class="form-check-label" for="f17_54b1bx">
                                Rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="3" type="radio" name="f17_54b" id="f17_54b1cx" wire:model.lazy="f17_54b">
                            <label class="form-check-label" for="f17_54b1cx">
                                Sedang
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" value="4" type="radio" name="f17_54b" id="f17_54b1dx" wire:model.lazy="f17_54b">
                            <label class="form-check-label" for="f17_54b1dx">
                                Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="5" name="f17_54b" id="f17_54b1ex" wire:model.lazy="f17_54b">
                            <label class="form-check-label" for="f17_54b1ex">
                                Sangat Tinggi
                            </label>
                        </div>
                    </div>
                    @error("f17_54b")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- //f17_54b --}}
                {{-- //f17 --}}

            </div>

        </div>
        @endif
        @if ($currentStep == 5)
        <div class="row">
            <div class="mb-3">
                <label for="nm_company" class="form-label h6 border_custom w-100">Nama Company</label>

                <input type="text" class="form-control" id="nm_company" name="nm_company" wire:model.lazy="nm_company">
                @error("nm_company")
                <div class="form-text text-danger">{{$message}}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="posisi" class="form-label h6 border_custom w-100">Bila berwiraswasta, apa posisi/jabatan Anda saat ini ?</label>


                <select class="form-select" id="posisi" name="posisi" wire:model.lazy="posisi">
                    <option selected>....</option>
                    <option value="1">Founder</option>
                    <option value="2">Co-Founder</option>
                    <option value="3">Staff</option>
                    <option value="4">Freelance/Kerja Lepas</option>
                </select>
                @error("posisi")
                <div class="form-text text-danger">{{$message}}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="jalan_company" class="col-sm-2 form-label h6 border_custom w-100">Alamat Kantor</label>


                <div class="col-sm-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="jalan_company" name="jalan_company" placeholder="jalan..." wire:model.lazy="jalan_company">
                        <label for="jalan">Jalan ...</label>
                    </div>
                    @error("jalan_company")
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input wire:model.lazy="kota_company" type="text" class="form-control" id="kota_company" name="kota_company" placeholder="kota...">
                            <label for="kota_company">Kota ...</label>

                        </div>
                        @error("kota_company")
                        <div class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="provinsi_company" name="provinsi_company" placeholder="provinsi..." wire:model.lazy="provinsi_company">
                            <label for="provinsi_company">Provinsi ...</label>
                            @error("provinsi_company")
                            <div class="form-text text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>
            <div class="mb-3">
                <label for="email_company" class="form-label h6 border_custom w-100">E-mail Company</label>
                <input type="text" class="form-control" wire:model.lazy="email_company" id="email_company" name="email_company">
                @error("email_company")
                <div class="form-text text-danger">{{$message}}</div>
                @enderror

            </div>
            <div class="row">
                <div class="col-4 h6">
                    Pertanyaan studi lanjut
                </div>
                <div class="col-8">
                    <div class="mb-3">
                        <label for="f19_a" class="form-label h6">Sumber Biaya</label>

                        <select class="form-select" name="f19_a" id="f19_a" wire:model="f19_a">
                            <option selected>Sumber biaya kuliah...</option>
                            <option value="1">[1] Biaya Sendiri</option>
                            <option value="2">[2] Beasiswa</option>
                        </select>
                        @error("f19_a")
                        <div class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="f19_b" class="form-label h6">Perguruan Tinggi</label>

                        <input type="text" class="form-control" id="f19_b" name="f19_b" wire:model.lazy="f19_b">

                        @error("f19_b")
                        <div class="form-text text-danger">{{$message}}</div>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="f19_c" class="form-label h6">Program Studi</label>
                        <select class="form-select" name="f19_c" id="f19_c" wire:model="f19_c">
                            <option selected>Pilih Kode Program studi...</option>
                            @foreach ($prodi as $prodi)
                            <option value="{{$prodi->Kode}}">[{{$prodi->Kode}}] {{$prodi->Nama_Program_Studi}}</option>

                            @endforeach
                        </select>
                        @error("f19_c")
                        <div class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="f19_d" class="form-label h6">Tanggal Masuk</label>

                        <input type="date" class="form-control" id="f19_d" name="f19_d" wire:model="f19_d">
                        @error("f19_d")
                        <div class="form-text text-danger">{{$message}}</div>
                        @enderror

                    </div>

                </div>
            </div>
        </div>

        @endif

        <div class="d-flex gap-2">

            @if ($currentStep == 1)
            <div></div>
            @endif
            @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 ||$currentStep == 5)

            <button class="btn btn-warning w-100 shadow-sm" type="button" wire:click="decreaseStep()">Prev</button>

            @endif
            @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3|| $currentStep == 4 )


            <button class="btn btn-primary w-100 shadow-sm" type="button" wire:click="increaseStep()">Next</button>

            @endif
            @if ($currentStep == 5)
            <button class="btn btn-success w-100 shadow-sm" type="submit">Simpan Data</button>
            @endif

        </div>

    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.min.js" integrity="sha512-lKHGXYDfNP56uc6FA3nfxDGypvq4mgYxm67E00HBxjSTCwqN6v5BzwAe3asF8FHMZMZlkGYXF06mKbyAT/imAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{--
<script>
    var inputs = document.querySelectorAll('input[name = "f5-01"]');
    inputs.forEach((input) => {
        input.addEventListener("click", function(e) {
            console.log("ok");
            var checked_gender = document.querySelector('input[name = "f5-01"]:checked');
            if (document.querySelector('input[name = "f5_04"]:checked').value == 1) {
                // console.log(e.target.dataset.target);
                document.getElementById(e.target.dataset.target).disabled = true;
                // document.getElementById("f5_06").value = "";
            } else {
                document.getElementById(e.target.dataset.target).disabled = false;
                document.getElementById("f504_02").disabled = true;
                document.getElementById("f5_05").disabled = true;
                // document.getElementById("f504_02").value = "";
                // document.getElementById("f5_05").value = "";
            }
        })
    })

</script> --}}
