<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h1> Session </h1>
    <?php
        session_start();
        $_SESSION['username'] = "Admin";
        $_SESSION['password'] = "Rahasia";
        echo "Session telah di buat<br>";
        echo "username : ".$_SESSION['username'];
        echo ", password: ".$_SESSION['password']."<br>";
    ?>
    <a href="6_0_sessionHapus.php">Hapus session</a>
    <?php
    session_destroy();
    ?>
</body>
</html>