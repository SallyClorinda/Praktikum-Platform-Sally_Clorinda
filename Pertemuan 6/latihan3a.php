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
    echo "<h1>DAFTAR HOBI YG KUPILIH</h1>";
   
    if(isset($_POST['submit'])){
        if(!empty($_POST['hobi'])){ 
            echo "<ol>";
            foreach($_POST['hobi'] as $value){
                echo "<li>".$value."</li>";
            } 
            echo "</ol>";
        }
    }
    echo "<a href='./latihan3.php'>Kembali</a>";
    ?>
</body>
</html>

