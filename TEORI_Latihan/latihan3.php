<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <Style>
        body{
            font-size: 15pt;
        }
    </Style>   
</head>
<body>
    <table border = "1">
    <tr>
    <td>
    
    <?php
    $IPK = 3.25;

    if($IPK < 2.76){
        echo "IPK Anda: $IPK<br>";
        echo "Predikat Anda: Tidak Mendapatkan Predikat";
    }elseif(2.76 <= $IPK or $IPK <= 3.00 ){
        echo "IPK Anda: $IPK<br>";
        echo "Predikat Anda: Memuaskan";
    }elseif(3.00 < $IPK or $IPK <= 3.50){
        echo "IPK Anda: $IPK<br>";
        echo "Predikat Anda: Sangat Memuaskan";
    }elseif($IPK > 3.50){
        echo "IPK Anda: $IPK<br>";
        echo "Predikat Anda: Dengan Pujian";
    }
    ?>
    </td>
    </tr>
    </table>
</body>
</html>