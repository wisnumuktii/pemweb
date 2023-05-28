<!DOCTYPE html>
<html>
<head>
  <title>Bar Chart</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <canvas id="barChart"></canvas>

  <?php
  // Fetch data from the database
  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "chart_pemweb";

  $koneksi = mysqli_connect($host, $user, $password, $database);

  if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT country, total_cases, total_deaths, total_recovered, active_cases, total_tests FROM covid_data";
  $result = mysqli_query($koneksi, $sql);

  $labels = [];
  $casesData = [];
  $deathsData = [];
  $recoveredData = [];
  $activeCasesData = [];
  $testsData = [];

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $labels[] = $row["country"];
      $casesData[] = $row["total_cases"];
      $deathsData[] = $row["total_deaths"];
      $recoveredData[] = $row["total_recovered"];
      $activeCasesData[] = $row["active_cases"];
      $testsData[] = $row["total_tests"];
    }
  }

  mysqli_close($koneksi);
  ?>

  <script>
  var ctx = document.getElementById("barChart").getContext("2d");
  var barChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?php echo json_encode($labels); ?>,
      datasets: [{
        label: 'Total Cases',
        data: <?php echo json_encode($casesData); ?>,
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
      }, {
        label: 'Total Deaths',
        data: <?php echo json_encode($deathsData); ?>,
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1
      }, {
        label: 'Total Recovered',
        data: <?php echo json_encode($recoveredData); ?>,
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
      }, {
        label: 'Active Cases',
        data: <?php echo json_encode($activeCasesData); ?>,
        backgroundColor: 'rgba(255, 205, 86, 0.2)',
        borderColor: 'rgba(255, 205, 86, 1)',
        borderWidth: 1
      }, {
        label: 'Total Tests',
        data: <?php echo json_encode($testsData); ?>,
        backgroundColor: 'rgba(153, 102, 255, 0.2)',
        borderColor: 'rgba(153, 102, 255, 1)',
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  </script>
</body>
</html>