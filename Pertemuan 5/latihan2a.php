<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2a</title>
<style>
    body{
    font-size: 15pt;
    } 
</style>
</head>
<body>
<table border ="1">
    <tr>
    <td>
<h1>FORM BIODATA</h1>
    <form action="latihan2b.php" method="POST">
    <table border ="0" cellspacing ="0">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value=""/></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value=""/></td>
        </tr>

        <tr>
            <td>Umur</td>
            <td><input type="text" name="umur" value=""/></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" name="jenis_kelamin" value="Pria">Pria</input></td>
        </tr>
    
        <tr>
            <td></td>
            <td><input type="radio" name="jenis_kelamin" value="Wanita">Wanita</input></td>
        </tr>

        <tr>
          
            <td>Hobby</td>
            <td><input type="checkbox" name="hobbies[]" value="Music">Music</input></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="checkbox" name="hobbies[]" value="Programming">Programming</input></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="checkbox" name="hobbies[]" value="Game">Game</input></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="checkbox" name="hobbies[]" value="Movies">Movies</input></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="checkbox" name="hobbies[]" value="Travelling">Travelling</input></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="checkbox" name="hobbies[]" value="Sport">Sport</input></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="checkbox" name="hobbies[]" value="Organization">Organization</input></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="checkbox" name="hobbies[]" value="Automotive">Automotive</input></td>
        </tr>

        <tr>
           
            <td><input type="submit" name="submit" value="Submit"/></td>
        </tr>

    </table>
    </td>
    </tr>
</table>
</body>
</html>

