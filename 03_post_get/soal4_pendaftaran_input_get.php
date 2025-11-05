<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran (GET Method)</title>
</head>
<body>

    <h1>Formulir Pendaftaran (Menggunakan GET)</h1>
    
    <form method="get" action="soal4_pendaftaran_proses_get.php">
        <table>
            <tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama_lengkap" size="40"></td></tr>
            <tr><td>Tempat Lahir</td><td>:</td><td><input type="text" name="tempat_lahir" size="25"></td></tr>
            <tr><td>Jenis Kelamin</td><td>:</td><td>
                <input type="radio" name="jenis_kelamin" value="Pria" checked> Pria
                <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita
            </td></tr>
            <tr><td>Nilai UAN</td><td>:</td><td><input type="text" name="nilai_uan" size="10"></td></tr>
        </table>

        <br>
        <input type="submit" name="submit" value="Daftar Sekarang (GET)">
        <input type="reset" name="reset" value="Hapus Data">
    </form>

</body>
</html>