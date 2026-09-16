<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Regristasi Siswa</title>
</head>
<body>
    <h2>Regristasi Akun</h2>
    <form action="proses_register.php" method="POST">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>
                    <input type="text" name="nama" placeholder="Masukkan Nama" required>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" placeholder="Masukkan Email" required>
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan" id="jurusan" required>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Akuntansi">Akuntansi</option>
                        <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" id="password" placeholder="Masukkan Password"  required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Register</button>
                </td>
            </tr>
        </table>
    </form>
    <p>Sudah punya akun? <a href="login.php">Login di sisni</a></p>
</body>
</html>