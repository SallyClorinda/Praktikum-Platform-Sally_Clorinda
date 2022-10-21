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
    $angka = [3,2,5,3,7]; 
    $panjangArray = count($angka);
    $total = 0;
   
    
    foreach($angka as $jumlah){
        $total = $total + $jumlah;
       
    }
     $rerata = $total/$panjangArray;
    echo "jumlah : $total<br>";
    echo "rata - rata : $rerata";
    ?>
</body>
</html>
