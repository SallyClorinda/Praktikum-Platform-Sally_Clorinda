<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-size: 12pt;
        }
    </style>
</head>
<body>
    <table border = "1">
    <tr>
    <td>
    <?php    
    $nilai = $_POST["ipk"];
    if($_POST["ipk"] < 2.76){
        echo "IPK Anda: $nilai<br>";
        echo "Predikat Anda: Tidak Mendapatkan Predikat";
    }elseif(2.76 <= $_POST["ipk"]  and $_POST["ipk"]  <= 3.00){
        echo "IPK Anda: $nilai<br>";
        echo "Predikat Anda: Memuaskan";
    }elseif(3.00 < $_POST["ipk"] and $_POST["ipk"]  <= 3.50){
        echo "IPK Anda: $nilai<br>";
        echo "Predikat Anda: Sangat Memuaskan";
    }elseif($_POST["ipk"]  > 3.50){
        echo "IPK Anda: $nilai<br>";
        echo "Predikat Anda: Dengan Pujian";
    }
    ?>
    </td>
    </tr>
    </table>
</body>
</html>