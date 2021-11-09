<?php

    include("koneksi.php");

    $id_identitas = $_POST['id_identitas'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $umur = $_POST['umur'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $query = "update identitas set nim = '$nim', nama = '$nama', jeniskelamin = '$jeniskelamin', umur = '$umur', jurusan = '$jurusan', alamat = '$alamat' where id_identitas = $id_identitas";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id_identitas=$id_identitas");
    }

?>