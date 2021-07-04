<?php
$koneksi     = mysqli_connect("localhost","root","","mqtt");
$waktu       = mysqli_query($koneksi, "SELECT Time FROM tabel1");
$ph = mysqli_query($koneksi, "SELECT pH FROM tabel1");
?>
<html>
    <head>
        <title>Grafik - ChartJS</title>
        <script src="Chart.bundle.js"></script>

        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
            body{
            background-image: url('images/temp.jpg');
        }
        </style>
    </head>
    <body>
        <div class="container">
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php while ($b = mysqli_fetch_array($waktu)) { echo '"' . $b['Time'] . '",';}?>],
                    datasets: [{
                            label: 'Grafik pH Tanah',
                            data: [<?php while ($p = mysqli_fetch_array($ph)) { echo '"' . $p['pH'] . '",';}?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)'
                            ],
                            borderWidth: 2
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
    </body>
</html>