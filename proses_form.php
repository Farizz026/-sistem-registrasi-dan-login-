<?php

include 'koneksi.php';

$nama=$_POST['nama'];
$email=$_POST['email'];
$jurusan=$_POST['jurusan'];

$query = "INSERT INTO users (id,nama,email,jurusan) VALUES (NULL,'$nama','$email','$jurusan')";

$proses = mysqli_query ($koneksi,$query);

if($proses){
    echo "data berhasil disimpan";
}
else {
    echo "data gagal disimpan :" . mysqli_error($koneksi);
}
?>