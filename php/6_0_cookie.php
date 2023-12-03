<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + 30, "/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name]."<br>";
}
?>

</body>
</html>


<?php
    /*$batas = time() + 30;
    setcookie("kunjunganTerakhir", date('H:i:s'), $batas);
    echo "COOKIE telah dibuat, buka file 6_5_cookie_cek.php
    sebelum dan setelah 30 detik";
?>

<?php
    if (isset($_COOKIE['kunjunganTerakhir'])) {
        echo "Anda terakhir membuka file 6_4_cookie.php
         jam ".$_COOKIE['kunjunganTerakhir'];
    } else {
        echo "Anda terakhir membuka file 6_4_cookie.php
         lebih dari 30 detik yang lalu".$_COOKIE['kunjunganTerakhir'];
    }
?>*/

