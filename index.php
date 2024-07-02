<?php 
    $mahasiswa =[
         [
                "nama" => "faisal yulianto",
                "nim" => "312210646",
                "email" =>"faisaljulio11@gmai.com",
                "image" => "produk1.JPG"
         ],
         [
                "nama" => "dodo",
                "nim" => "212345",
                "email" => "paijo@gmail.com",
                "image" => "produk2.JPG"
         ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) { ?>
        <li><a href="index2.php?nama=<?php echo $mhs["nama"] ?>&nim=<?php echo$mhs["nim"] ?>&email=<?php echo$mhs["email"] ?>&image=<?php echo$mhs["image"] ?>">    <?php echo $mhs["nama"]; ?></a> </li>
        <?php } ?>
    </ul>
</body>
</html>

