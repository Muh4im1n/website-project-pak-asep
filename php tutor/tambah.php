<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data</h2>
    <?php
    include "koneksi.php"; 

    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $password = $_POST['password']; 

        if($email == "" || $password == "") {
            echo'<script>alert("Data tidak boleh kosong")</script>';
        }else{


        $query = mysqli_query($koneksi, "INSERT INTO data_tugas (email, password) VALUES ('$email', '$password')");
        if($query){
            echo'<script>alert("Data berhasil ditambahkan")</script>';    
        }else{
            echo'<script>alert("Data gagal ditambahkan")</script>';
        }
        }
    }
    ?>
    <form method="POST" action="">
        <table>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Simpan</td>
                <td><button type="reset">Reset</td>
                <a href="index.php">Kembali</a>
            </tr>
        </table>
    </form>
</body>
</html>