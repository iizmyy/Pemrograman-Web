<?php
    $batas = time() + 30;

    setcookie("user", "admin", $batas);

    echo "COOKIE telah dibuat, buka file 6_5_cookie_cek.php
    sebelum dan setelah 30 detik";
    echo "<br><a href='6_5_cookie_cek.php'>cek cookie</a>"
?>