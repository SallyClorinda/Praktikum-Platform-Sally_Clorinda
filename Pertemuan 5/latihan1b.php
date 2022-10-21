<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1b</title>
    <style>
    </style>
</head>
<body>
    <table border="1">
        <tr>
        <td>
    <table border="0" cellspacing="0">
    <h1>STATUS KELULUSAN MAHASISWA</h1>
    <br>
    Mahasiswa dengan Nama <?php echo $_POST ["nama"];?> NIM <?php echo $_POST ["nim"];?> 
    <?php echo "berhasil menyelesaikan studi S1 dengan predikat";?> <?php echo strtoupper($_POST ["status"]) ;?>
    </table>
        </td>
        </tr>
    </table>
</body>
</html>

