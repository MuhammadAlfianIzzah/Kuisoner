<style>
    .border {
        border: 2px solid black;
    }

    .red {
        color: red;
    }

</style>
<table>
    <thead>
        <tr>
            @foreach ($columnKuisoner as $clm)

            <th class="">{{$clm}}</th>

            @endforeach
        </tr>
    </thead>
    <tbody>

        @php
        // dd($mahasiswa)

        @endphp
        @foreach ($kuisoner as $ku )
        <tr>
            @foreach ($ku->toArray() as $key => $value)
            <td>{{$value}}</td>
            @endforeach
        </tr>
        @endforeach



    </tbody>
</table>
