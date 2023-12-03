<?php
    session_start();

    session_destroy();

    echo "Session telah dihapus,
    <a href='6_2_session_cek.php'> Cek Session </a>";
?>