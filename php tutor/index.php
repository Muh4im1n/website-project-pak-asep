<?php

include 'header.php';
include 'koneksi.php';


?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h2>Data</h2>
    <a href="tambah.php ">+ Tambah Data Baru</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        $i = 1;
        $query = mysqli_query($koneksi, "SELECT*FROM data_tugas");
        while ($data = mysqli_fetch_array($query)) {
        ?>
             <tr>
                <td><?php echo$i; ?></td>
                <td><?php echo$data['email'] ?></td>
                <td><?php echo$data['password'] ?></td>
                <td>
                    <a href="ubah.php?id=<?php echo$data['data_tugas']; ?>">Ubah</a> -
                    <a href="hapus.php?id=<?php echo$data['data_tugas']; ?>">Hapus</a> 
                </td>
             </tr>
             <?php
                $i++;
                  }
            ?>
    </table>
</body>
</html>

<?php
include 'footer.php';
?>