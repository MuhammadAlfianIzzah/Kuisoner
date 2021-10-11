<x-dash-layout>
    <x-slot name="header">
        Show Mahasiswa
    </x-slot>
    <form method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search w-50">
        <div class="input-group">
            <input type="text" class="form-control bg-light small" style="border: 2px solid lightblue" placeholder="Search for Nim|Nama.." style="border: 2px solid lightblue !important" autofocus name="search">

            <select class="form-select" name="kd_prodi">
                <option selected disabled>Pilih jurusan ...</option>
                @foreach ($prodi as $prodi)
                <option value="{{$prodi->Kode}}">{{$prodi->Nama_Program_Studi}} [{{$prodi->Kode}}] </option>
                @endforeach

            </select>

            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>


    <div class="d-flex justify-content-end">
        <a href="{{ route('reports') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm "><i class="fas fa-file-excel"></i> Report</a>
    </div>



    <div class="bg-white px-3 py-2">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mhs as $m)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$m->nim}}</td>
                    <td>{{$m->nm_mhs}}</td>

                    <td>{{$m->email}}</td>

                    <td>
                        <div class="btn-group gap-1" role="group">
                            <a href="{{ route('detail_mhs',$m->nim) }}" class="btn btn-primary kuis" data-toggle="tooltip" data-placement="top" title="Detail">
                                <i class="fas fa-info-circle"></i>
                            </a>

                            <a href="{{ route('sku_mhs',$m->nim) }}" class="btn btn-secondary kuis" data-toggle="tooltip" data-placement="top" title="Kuisoner">
                                <i class="fas fa-clipboard"></i>
                            </a>
                            <a href="{{ route('sku_mhs',$m->nim) }}" class="btn btn-danger kuis" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="fas fa-trash"></i>

                            </a>

                        </div>
                    </td>

                </tr>
                @endforeach

            </tbody>

        </table>

    </div>
    @push('script')
    <script>
        $('.kuis').tooltip({
            boundary: 'window'
        })

    </script>

    @endpush

</x-dash-layout>
