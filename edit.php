<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <?php
        include ("koneksi.php");
        $id_identitas = $_GET['id_identitas'];

        $query = "select * from identitas where id_identitas = $id_identitas";
        $hasil = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($hasil);
    ?>
    <h1>Edit Data</h1>
    <form action="edit_proses.php" method="POST">
        <input type="hidden" name="id_identitas" value="<?php echo $row['id_identitas']; ?>">
        NIM : <input type="text" name="nim" value="<?php echo $row['nim']; ?>"><br/>
        Nama : <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br/>
        Jenis Kelamin : <input type="text" name="jeniskelamin" value="<?php echo $row['jeniskelamin']; ?>"><br/>
        Umur : <input type="text" name="umur" value="<?php echo $row['umur']; ?>"><br/>
        Jurusan : <input type="text" name="jurusan" value="<?php echo $row['jurusan']; ?>"><br/>
        Alamat : <textarea name="alamat"><?php echo $row['alamat']; ?></textarea><br/>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>