<?php 
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "chart_pemweb";
$koneksi    = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Kode untuk mengambil data dari tabel covid_data

// Query SQL untuk mengambil data
$query = "SELECT * FROM covid_data";
$result = mysqli_query($koneksi, $query);

// Mendapatkan data dalam bentuk array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Mengubah data menjadi array terpisah
$labels = array();
$totalCases = array();
$totalDeaths = array();
$totalRecovered = array();
$activeCases = array();
$totalTests = array();

foreach ($data as $row) {
    $labels[] = $row['country'];
    $totalCases[] = $row['total_cases'];
    $totalDeaths[] = $row['total_deaths'];
    $totalRecovered[] = $row['total_recovered'];
    $activeCases[] = $row['active_cases'];
    $totalTests[] = $row['total_tests'];
}

// Menutup koneksi ke database
mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pie dan Doughnut Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #chartContainer {
            width: 400px;
            height: 400px;
        }
    </style>
</head>
<body>
    <div id="chartContainer">
        <canvas id="pieChart"></canvas>
        <canvas id="doughnutChart"></canvas>
    </div>

    <script>
        // Menggambar grafik pie chart
        var pieChart = new Chart(document.getElementById("pieChart"), {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($totalCases); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(255, 159, 64, 0.7)',
                        'rgba(255, 0, 0, 0.7)',
                        'rgba(0, 255, 0, 0.7)',
                        'rgba(0, 0, 255, 0.7)',
                        'rgba(128, 128, 128, 0.7)'
                    ],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // Menggambar grafik doughnut chart
        var doughnutChart = new Chart(document.getElementById("doughnutChart"), {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($totalTests); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(255, 159, 64, 0.7)',
                        'rgba(255, 0, 0, 0.7)',
                        'rgba(0, 255, 0, 0.7)',
                        'rgba(0, 0, 255, 0.7)',
                        'rgba(128, 128, 128, 0.7)'
                    ],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
</body>
</html>