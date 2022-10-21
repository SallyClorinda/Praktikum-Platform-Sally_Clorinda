<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_POST ["username"] == "admin" and $_POST ["password"] == "admin123"){
        echo "Selamat Datang, anda sukses login";
    }else{
        echo "Mohon maaf, anda gagal login";
    }
    ?>
</body>
</html>