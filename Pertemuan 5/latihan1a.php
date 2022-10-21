<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Latihan 1a</title>
    <style>
        th, td {
            font-size: 15pt;
        }
    </style>
</head>
<body>
    <table border="1">
    <tr>
    <td>
    <form action = "latihan1b.php" method="POST">
    <table border="0" >
        <tr>
        <td>NIM:</td>
        <td><input type="text" name="nim" value=""/></td>
        </tr>

        <tr>
        <td>NAMA:</td>
        <td><input type="text" name="nama" value=""/></td>
        </tr>

        <tr>
        <td>STATUS KELULUSAN:</td>
        <td><select id="status" name="status">
        <option value="Memuaskan">Memuaskan</option>
        <option value="Baik">Baik</option>
        <option value="Cukup">Cukup</option>
        <option value="Kurang">Kurang</option></td>
        </tr>

        <tr>
        <td></td>
        <td><input type="submit" value="Submit Data"/></td>
        </tr>
    
    </table>
    </form>
    </td>    
    </tr>
   
    </td>
    </tr>
    </table>
</body>
</html>


