<?php

    include("koneksi.php");

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $umur = $_POST['umur'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $id_user = $_POST['id_user'];

    $query = "insert into identitas values ('', '$nim', '$nama', '$jeniskelamin', '$umur', '$jurusan', '$alamat', $id_user)";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id_identitas=$id_identitas");
    }

?>