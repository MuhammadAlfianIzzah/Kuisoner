<x-dash-layout>
    <x-slot name="header">
        Dashboard
    </x-slot>
    <div class="bg-white px-3 py-2">
        <div style="width: 500px; max-width: 100%;">
            <canvas id="myChart"></canvas>
        </div>
    </div>


    @push("script")
    <script>
        let gradution = @json($graduation);
        let year = [];
        let jYear = [];
        gradution.forEach((e) => {
            year.push(e.thn_lulus);
            jYear.push(e.jml)
        })

        var ctx = document.getElementById('myChart');

        const data = {
            labels: year
            , datasets: [{
                label: 'Kelulusan Mahasiswa Pertahun'
                , data: jYear
                , backgroundColor: [
                    'rgba(255, 99, 132, 0.2)'
                    , 'rgba(255, 159, 64, 0.2)'
                    , 'rgba(255, 205, 86, 0.2)'
                    , 'rgba(75, 192, 192, 0.2)'
                    , 'rgba(54, 162, 235, 0.2)'
                    , 'rgba(153, 102, 255, 0.2)'
                    , 'rgba(201, 203, 207, 0.2)'
                ]
                , borderColor: [
                    'rgb(255, 99, 132)'
                    , 'rgb(255, 159, 64)'
                    , 'rgb(255, 205, 86)'
                    , 'rgb(75, 192, 192)'
                    , 'rgb(54, 162, 235)'
                    , 'rgb(153, 102, 255)'
                    , 'rgb(201, 203, 207)'
                ]
                , borderWidth: 1
            }]
        };

        var myChart = new Chart(ctx, {
            type: 'bar'
            , data: data
            , options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },

        });

    </script>

    @endpush

</x-dash-layout>
