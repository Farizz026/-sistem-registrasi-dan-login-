<?php
session_start() ;
// Cek apakah user sudah login
if($_SESSION['status'] !="login") {
    HEADER("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siswa</title>
  </head>
  <body>
    <h2>Selamat Datang, <?php echo $_SESSION['nama']; ?>!</h2>
    <p>Kamu terdaftar di jurusan: <b><?php echo $_SESSION['jurusan']; 
    ?></b></p>
    <a href="logout.php">Logout</a>
  </body>
</html>


