<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_pegawai";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check Connection
    if (!$conn) {
        die("Connection failed : " . mysqli_connect_error());
    }

    $sql = "INSERT INTO departemen (id, nama_departemen)
    VALUES ('1', 'Departemen Pengajar')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>