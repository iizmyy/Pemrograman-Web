<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_seminar";

//membuat database
function buatDB($dbhost, $dbuser, $dbpass, $dbname) {
    //Membuat koneksi
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass);
        
    if(mysqli_connect_errno()){
        echo "Koneksi gagal: ".mysqli_connect_error();
    }

    $sql = "CREATE DATABASE $dbname";
    if (mysqli_query($conn, $sql)) {
        echo "Database berhasil dibuat";
    } else {
        echo "Gagal membuat database: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

    //membuat tabel
    function buatTabel($dbhost, $dbuser, $dbpass, $dbname){
        $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(mysqli_connect_errno()){
            echo "Koneksi gagal: ".mysqli_connect_error();
        }

        $sql = "CREATE TABLE Peserta (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(30) NOT NULL,
            noHP VARCHAR(13) NOT NULL,
            email VARCHAR(50)
            )";
            
        if (mysqli_query($conn, $sql)) {
            echo "Table Peserta berhasil dibuat";
        } else {
            echo "Gagal membuat tabel: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }

    //input data
    function inputData($dbhost, $dbuser, $dbpass, $dbname) {
        //Membuat koneksi
        $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(mysqli_connect_errno()){
            echo "Koneksi gagal: ".mysqli_connect_error();
        }

        $sql = "INSERT INTO Peserta (nama, noHP, email)
        VALUES ('Sakinah', '081234567891', 'sakinah@contoh.com')";
        
        if (mysqli_query($conn, $sql)) {
            echo "Data berhasil ditambahkan";
        } else {
            echo "Gagal menambah data: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }

    //tampilData
    function tampilData($dbhost, $dbuser, $dbpass, $dbname) {
        //Membuat koneksi
        $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(mysqli_connect_errno()){
            echo "Koneksi gagal: ".mysqli_connect_error();
        }

        $sql = "SELECT * FROM Peserta";
        $result = mysqli_query($conn, $sql);
        
        //output data
        echo "<table>";
        echo "<tr>";
        echo "<th>Nama Peserta</th>";
        echo "<th>No HP</th>";
        echo "<th>Email</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>$row[nama]</td>";
            echo "<td>$row[noHP]</td>";
            echo "<td>$row[email]</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($conn);
    }

    //memanggil fungsi membuat database
    //buatDB($dbhost, $dbuser, $dbpass, $dbname);

    //memanggil fungsi membuat tabel
    //buatTabel($dbhost, $dbuser, $dbpass, $dbname);

    //memanggil fungsi input data
    //inputData($dbhost, $dbuser, $dbpass, $dbname);

    //menampilkan data
    tampilData($dbhost, $dbuser, $dbpass, $dbname);

?>