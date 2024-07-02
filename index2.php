<?php 
    if(!isset($_GET["nama"])||!isset($_GET["nim"])||!isset($_GET["email"])||!isset($_GET["image"]) ){
     header( "Location:index.php");
     exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detail profile</h1>
    <ul>
        <li><img src="image/<?php echo $_GET["image"] ?>"></li>
        <li>Nama : <?php echo $_GET["nama"] ?></li>
        <li>NIM : <?php echo $_GET["nim"] ?></li>
        <li>Emai : <?php echo $_GET["email"] ?></li>
    </ul>

    <a href="index.php">Back</a>
</body>
</html>