<!DOCTYPE>
<html>
    <head>
        <title>Variabel Super Global</title>
    </head>
    <body>
        <h2>Variabel $GLOBALS</h2>
        <?php
            $x = 75;
            $y = 25;

            function tambah(){
                $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            }

            tambah();
            echo "Nilai variabel x = ", $x, " dan y = ", $y;
            echo "<br>Hasil penjumlahan x dan y adalah ", $z;
        ?>
        
        <h2>Variabel $_SERVER</h2>
        <?php
            echo "PHP_SELF : ", $_SERVER['PHP_SELF'];
            echo "<br>";
            echo "SERVER_NAME : ", $_SERVER['SERVER_NAME'];
            echo "<br>";
            echo "HTTP_HOST : ", $_SERVER['HTTP_HOST'];
            echo "<br>";
            echo "HTTP_REFERER : ", $_SERVER['HTTP_REFERER'];
            echo "<br>";
            echo "HTTP_USER_AGENT : ", $_SERVER['HTTP_USER_AGENT'];
            echo "<br>";
            echo "SCRIPT_NAME : ", $_SERVER['SCRIPT_NAME'];
        ?>
    </body>
</html>
