<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
    include ("koneksi.php");

    $query = "select * from identitas";
    $hasil = mysqli_query($koneksi, $query);
?>
    
    <h1> Tambah Identitas </h1>
    <form action="insert.php" method="POST">
        ID : <input type="text" name="id_user" value=""><br/>
        NIM : <input type="text" name="nim" value=""><br/>
        Nama : <input type="text" name="nama" value=""><br/>
        Jenis Kelamin : <input type="text" name="jeniskelamin" value=""><br/>
        Umur : <input type="text" name="umur" value=""><br/>
        Jurusan : <input type="text" name="jurusan" value=""><br/>
        Alamat : <textarea name="alamat"></textarea><br/>
        <input type="submit" value="Simpan">
    </form>
    
    <h1> Tabel Identitas </h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th colspan="2">Tindakan</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($hasil)){
            echo "<tr>";
            echo "<td>".$row['id_identitas']."</td>";
            echo "<td>".$row['nim']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['jeniskelamin']."</td>";
            echo "<td>".$row['umur']."</td>";
            echo "<td>".$row['jurusan']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td><a href='edit.php?id_identitas=".$row['id_identitas']."'>Ubah</a></td>";
            echo "<td><a href='delete.php?id_identitas=".$row['id_identitas']."'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>  
    </table>

</body>
</html>