<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-size: 15pt;
        }
    </style>
</head>
<body>
    <table border = "1">
    <tr>
    <td>
    <form action = "login.php" method="POST">
        <table border = "0">
        <tr>

        <tr>
        <td><pre>Username :</pre></td>
        <td><pre><input type="text" name="username" value=""/></pre></td>
        </tr>

        <tr>
        <td><pre>Password :</pre></td>
        <td><pre><input type="password" name="password" value=""/></pre></td>
        </tr>

        <tr>
        <td></td>
        <td><input type="submit" name="login" value="Login"/></td>
        </tr>

        </tr>
    </form>
    </td>
    </tr>
    </table>
</body>
</html>