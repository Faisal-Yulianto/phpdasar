<?php 
    if(isset($_POST["submit"])){
        if($_POST["username"] == "admin" && $_POST["password"] == "123"){
            header("Location: admin.php");
            exit;
        }
        else{
            $eror = true;
        }   
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Masukan Akun anda</h1>
    <?php if(isset($eror)){ ?>
    <h1>username/pasword salah</h1>
    <?php } ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username : </label>
                <input type="text" id="username" name="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" id="pasword" name="password">
            </li>
            <button type="submit" name="submit">Login</button>

        </form>

    </ul>
</body>
</html>