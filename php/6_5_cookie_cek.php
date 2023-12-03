<?php
    if (isset($_COOKIE["user"])) {
        echo "Isi Cookie : ".$_COOKIE["user"];
    } else {
        echo "Cookie berakhir";
    }
?>