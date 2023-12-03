<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "db_kafebiru";

    //Membuat koneksi
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(mysqli_connect_errno()){
        echo "Koneksi gagal: ".mysqli_connect_error();
    }

    //mengambil data dari database
    $sql = "SELECT * FROM jabatan";
    $result = mysqli_query($conn, $sql);

    //output data
    echo "<ul>";
    while($row = mysqli_fetch_array($result)){
        echo "<li>$row[nama_jabatan]</li>";
    }
    echo "</ul>";

    mysqli_close($conn);
?>