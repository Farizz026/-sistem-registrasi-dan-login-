<?php
session_start();
session_destroy(); // Menghapus semua session
header("location:login.php");
?>