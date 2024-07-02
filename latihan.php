<?php 
$conn = mysqli_connect("localhost","root","","phpdasar");
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");
//while($mhs = mysqli_fetch_assoc($result)){
//var_dump($mhs["nama"]);
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php while($mhs = mysqli_fetch_assoc($result)) : ?> 
        <tr>
            <td><?php echo $mhs["id"] ?></td>
            <td><a href="">Ubah |</a><a href=""> Hapus</a></td>
            <td><img src="image/<?php echo $mhs["gambar"] ?>" width="50"></td>
            <td><?php echo $mhs["nim"] ?></td>
            <td><?php echo $mhs["nama"] ?></td>
            <td><?php echo $mhs["email"] ?></td>
            <td><?php echo $mhs["jurusan"] ?></td>
        </tr>
        <?php endwhile ?>
    </table>
</body>
</html>