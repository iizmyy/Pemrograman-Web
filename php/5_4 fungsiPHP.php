<!DOCTYPE>
<html>
    <head>
        <title>Fungsi PHP</title>
    </head>
    <body>
        <h2>Fungsi Dasar</h2>
        <?php
            function salam() {
                echo " <b>Halo, Apa kabar?</b><br>";    
            }
            salam();
            echo "<p>Salam lagi...</p>";
            salam();
        ?>

        <h2>Fungsi dengan Argumen</h2>
        <?php
            function salamSapa($nama) {
                echo " Halo, Apa kabar? <b>$nama</b>";    
            }
            salamSapa("Maryam");
            echo "<p>Salam lagi...</p>";
            salamSapa("Bayu");
        ?>

        <h2>Fungsi dengan Return</h2>
        <?php
            function hitungLuas($panjang, $lebar=5) {
                $luas = $panjang * $lebar; 
                return $luas;     
            }
            $p = 15;
            $l = 8;
            echo "<p>Luas bangunan adalah ". hitungLuas($p,$l) ." m<sup>2</sup></p>";
        ?>

        <h2>Fungsi Operasi String</h2>
        <?php
            $teks = "Saya sedang belajar fungsi operasi string";
            echo "Hasil substr() : " .substr($teks, 0, 11);

            $kata = explode(' ', $teks);
            echo "<br> Hasil Explode() kata ke-2 dalam teks : ".$kata[1];
        ?>

        <h2>Fungsi Operasi Tanggal</h2>
        <?php
            echo "<b>Fungsi date()</b><br>";
            echo date('d/m/Y');
            echo "<br>";
            echo date('d-m-y H: i: s a');
            echo "<br>";
            echo date('d F Y');

            echo "<br><br>";

            echo "<b>Fungsi mktime()</b>";

            $sekarang = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
            echo "<br>Sekarang tanggal, ".date('d F Y',$sekarang);

            $besok = mktime(0, 0, 0, date('m'), date('d')+1, date('Y'));
            echo "<br>Besok tanggal, ".date('d F Y',$besok);

            $blnLalu = mktime(0, 0, 0, date('m')-1, date('d'), date('Y'));
            echo "<br>Bulan lalu tanggal, ".date('d F Y',$blnLalu);
        ?>

        <h2>Fungsi Operasi Matematika</h2>
        <?php
            echo "Absolut -50 adalah ". abs(-50);
            echo "<br> Nilai terbesar dari (30, 20, 45) adalah ". max(array(30, 20, 45));
            echo "<br> Pembulatan ke bawah 22.65 adalah ". floor(22.65);
            echo "<br> 50 pangkat 2 adalah ". pow(50,2);        
        ?>

        <h2>Fungsi Penanganan File</h2>
        <?php
            $fileku = fopen("sapa.txt", "w");
            $teks1 = "Halo, ";
            fwrite($fileku, $teks1);
            $teks2 = "Apa Kabar? \n";
            fwrite($fileku, $teks2);
            fclose($fileku);   
            echo "Ukuran file sapa.txt " .filesize("sapa.txt"); 
        ?>
    </body>
</html>