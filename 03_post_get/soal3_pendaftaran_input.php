<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Mahasiswa Baru</title>
</head>
<body>

    <h1>Formulir Pendaftaran Mahasiswa Baru Universitas X</h1>
    
    <form method="post" action="soal3_pendaftaran_proses.php">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama_lengkap" size="40"></td>
            </tr>

            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" size="25"></td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <select name="tgl_lahir">
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    
                    <select name="bln_lahir">
                        <?php
                        $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                        for ($i = 0; $i < 12; $i++) {
                            // Value menggunakan angka 1-12, display menggunakan nama bulan
                            echo "<option value='".($i + 1)."'>".$bulan[$i]."</option>";
                        }
                        ?>
                    </select>

                    <select name="thn_lahir">
                        <?php
                        for ($i = 1980; $i <= 2010; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Alamat Rumah</td>
                <td>:</td>
                <td><textarea name="alamat" rows="4" cols="35"></textarea></td>
            </tr>
            
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Pria" checked> Pria
                    <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita
                </td>
            </tr>

            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><input type="text" name="asal_sekolah" size="40"></td>
            </tr>

            <tr>
                <td>Nilai UAN</td>
                <td>:</td>
                <td><input type="text" name="nilai_uan" size="10"></td>
            </tr>
        </table>

        <br>
        <input type="submit" name="submit" value="Daftar Sekarang">
        <input type="reset" name="reset" value="Hapus Data">
    </form>

</body>
</html>