<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2b</title>
</head>
<body>   
<table border="1">
    <tr>
    <td>
    <h1>FORM BIODATA-REVIEW</h1>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td><?php echo $_POST ["nama"];?></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><?php echo $_POST ["alamat"];?></td>
        </tr>

        <tr>
            <td>Umur</td>
            <td><?php echo $_POST ["umur"];?></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $_POST ["jenis_kelamin"];?></td>
        </tr>
        
        <tr>
            <td>Hobby</td>
            <td>
            <?php
               if(isset($_POST['submit'])){

                if(!empty($_POST['hobbies'])) {
            
                    foreach($_POST['hobbies'] as $value){
                        echo "".$value.',';
                    }
                }
            }
            ?>
            </td>
        </tr>
    </table>
    </td>
    </tr>
</table>
</body>
</html>


