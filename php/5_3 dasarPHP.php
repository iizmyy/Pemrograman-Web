<?php
    echo "<h2> Variabel </h2>";

    $kata = "Kata pertama";
    echo "Isi variabel <b>kata</b> : $kata";

    echo "<h2> Tipe Data </h2>";

    $kata = "Kata pertama";
    $angka = 50;
    var_dump($kata);
    echo "<br>";
    var_dump($angka);

    echo "<h2> Konstanta </h2>";
    define("SAPA", "Selamat belajar PHP!");
    echo SAPA;

    echo "<h2> Array </h2>";
    // Array diakses dengan indeks
    $hari = array("Senin",  "Selasa", "Rabu", "Kamis");
    echo "Hari pertama adalah $hari[0]";

    // Array asosiatif
    $profil = array("nama" => "Ali", "alamat" => "Gowa", "usia" => "20");
    echo '<br> Nama saya ' .$profil['nama']. ' , saya berasal dari '.$profil['alamat']. ', usia saya '.$profil['usia'].' tahun';

    $profil['nama'] = "Yayu";
    $profil['alamat'] = "Makassar";
    $profil['usia'] = 21;
    echo '<br> Nama saya ' .$profil['nama']. ' , saya berasal dari '.$profil['alamat']. ', usia saya '.$profil['usia'].' tahun';

    //Statement Control If
    echo "<h2> Percabangan If </h2>";
    $nilai = 80;
    if($nilai >=80){
        $predikat = "Sangat Baik";
    } elseif($nilai >= 60){
        $predikat = "Cukup Baik";
    } else{
        $predikat = "Tidak Lulus";
    }
    echo 'Nilai anda ' .$nilai .', '. $predikat;

    //Statement Control Switch
    echo "<h2> Percabangan Switch </h2>";
    $kota = "Makassar";
    switch($kota){
        case "Makassar" : echo "$kota Ibukota Sulawesi Selatan"; break;
        case "Surabaya" : echo "$kota Ibukota Jawa Timur"; break;
        case "Manado" : echo "$kota Ibukota Sulawesi Utara"; break;
        default: echo "$kota Ibukota provinsi lain"; break;
    }

    //Perulangan while
    echo "<h2> Perulangan While </h2>";
    $angka = 1;
    while ($angka <=10){
        echo $angka;
        if ($angka <10){
            echo ", ";
        }
        $angka++; 
    }

    //Perulangan Foreach
    echo "<h2> Perulangan Foreach </h2>";
    echo "Nama Hari : ";
    foreach($hari as $h){
        echo "$h ";
    }

    echo "<br><br><b>Foreach pada array assosiatif</b>";
    foreach($profil as $key=>$value){
        echo "<br>$key : $value";
    }

    //Modularitas
    echo "<h2> Modularitas </h2>";
    echo "Skrip dari file 5_2 latihan2.php";
    include("5_2 latihan2.php");    
?>