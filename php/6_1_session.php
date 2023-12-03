<?php
    session_start();
    $_SESSION['username'] = "Admin";
    $_SESSION['password'] = "Rahasia";

    echo "Session telah di buat, 
    <a href='6_2_session_cek.php'> Cek Session </a>";
?>