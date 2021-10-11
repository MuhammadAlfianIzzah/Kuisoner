<x-dash-layout>
    <x-slot name="header">
        Show result Kuisoner {{$mahasiswa->nm_mhs }}
    </x-slot>
    <div class="bg-white">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kd kuisoner</th>
                    <th scope="col">Jawaban</th>

                </tr>
            </thead>
            <tbody>


                @php
                $i =1;
                @endphp

                @foreach ($mahasiswa->TKuisoners[0]->toArray() as $key=> $value)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$key}}</td>
                    <td>{{ $value}}</td>
                </tr>
                @php
                $i++;
                @endphp
                @endforeach

            </tbody>
        </table>

    </div>
</x-dash-layout>
