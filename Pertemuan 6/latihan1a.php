<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <?php
    $suhu = [23,45,36,27,33,32,30,28,35,32];
    $counter=1;
    echo"<ul>";
    $array = count($suhu);
    while($counter <= $array){
    foreach($suhu as $s){
        echo"<tr>";
        echo "<td>Hari ke-$counter</td> <td>$s</td>";
        echo "</tr>";
        $counter++;
    }
    echo"</ul>";
}
    ?> 
</table>
</body>
</html>

