<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        echo "<br>Session telah dihapus<br>";
        echo "username : ".$_SESSION['username'];
        echo ", password: ".$_SESSION['password'];
    ?>
</body>
</html>