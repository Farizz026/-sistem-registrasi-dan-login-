<?php
include 'koneksi.php';

$hari = $_POST['hari'];
$nama_mapel = $_POST['nama_mapel'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$guru_pengampu = $_POST['guru_pengampu'];

$query = "INSERT INTO mata_pelajaran (id, hari, nama_mapel, jam_mulai, jam_selesai, guru_pengampu) VALUES (NULL, '$hari', '$nama_mapel', '$jam_mulai', '$jam_selesai', '$guru_pengampu')";
$proses = mysqli_query($koneksi, $query);

if($proses) {
    header("location:tampil_mapel.php");
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
?>