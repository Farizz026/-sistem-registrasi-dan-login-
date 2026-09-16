<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$jurusan = $_POST['jurusan'];

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = "INSERT INTO users (id, nama, email, jurusan, password) VALUES
(NULL, '$nama', '$email', '$jurusan', '$password')";
$proses = mysqli_query($koneksi, $query);

if ($proses) {
    echo "Registrasi berhasil <a href='login.php'>Silahkan Login</a>";
} else {
    echo "Data gagal disimpan : " . mysqli_error($koneksi);
}
?>