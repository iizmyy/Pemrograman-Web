<!DOCTYPE HTML>
<html>
    <head></head>
    <body>
       <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="foto">
        <input type="submit" value="Upload">
       </form> 

       <?php
         if($_SERVER["REQUEST_METHOD"] == "POST"){
            $namafile = $_FILES['foto']['name'];
            $lokasifile = $_FILES['foto']['tmp_name'];

            if($namafile != ""){
                move_uploaded_file($lokasifile, "file/".$namafile);
                echo "<br><img src='file/$namafile' width=' 400'>";
            }
         }
       ?>
    </body>
</html>