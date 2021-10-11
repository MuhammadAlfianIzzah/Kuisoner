<x-dash-layout>
    <x-slot name="header">
        Detail mahasiswa
    </x-slot>
    <div class="bg-white">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/267885/pexels-photo-267885.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-fluid rounded-start h-100" style="object-fit: cover" alt="...">

                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="card-title text-primary h4">{{$mahasiswa->nm_mhs}} | {{$mahasiswa->nim}} <span class="badge bg-success">{{$mahasiswa->thn_lulus}}</span></div>

                        <h5 class="text-dark m-0">Pendidikan</h5>
                        <p>Kode PTN : {{$mahasiswa->kd_ptn}} | Kode prodi : {{$mahasiswa->kd_prodi}}</p>

                        <h5 class="text-dark m-0">Kontak</h5>

                        <p>E-mail : {{$mahasiswa->email}} | No hp : {{$mahasiswa->no_hp}}</p>

                        <h5 class="text-dark m-0">Data pribadi</h5>

                        <p>Nik : {{$mahasiswa->nik}} | NPWP : {{$mahasiswa->npwp}}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-dash-layout>
