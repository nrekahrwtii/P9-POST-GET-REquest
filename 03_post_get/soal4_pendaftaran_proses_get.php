<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pendaftaran (GET)</title>
</head>
<body>

    <h1>Data Pendaftaran Mahasiswa Baru (Hasil GET)</h1>
    <p>Berikut adalah data yang telah Anda masukkan:</p>
    
    <?php
    // --- Perubahan Kunci: Menggunakan $_GET untuk membaca input ---
    
    $nama = $_GET['nama_lengkap'];
    $tempatLahir = $_GET['tempat_lahir'];
    $tgl = $_GET['tgl_lahir'];
    $bln = $_GET['bln_lahir'];
    $thn = $_GET['thn_lahir'];
    $tanggalLahirLengkap = $tgl . "/" . $bln . "/" . $thn;
    $alamat = $_GET['alamat'];
    $jenisKelamin = $_GET['jenis_kelamin'];
    $asalSekolah = $_GET['asal_sekolah'];
    $nilaiUAN = $_GET['nilai_uan'];
    
    // --- Menampilkan Data ---
    echo "<table>";
    echo "<tr><td>Nama Lengkap</td><td>:</td><td>$nama</td></tr>";
    echo "<tr><td>Tempat Lahir</td><td>:</td><td>$tempatLahir</td></tr>";
    echo "<tr><td>Tanggal Lahir</td><td>:</td><td>$tanggalLahirLengkap</td></tr>";
    echo "<tr><td>Alamat Rumah</td><td>:</td><td>$alamat</td></tr>";
    echo "<tr><td>Jenis Kelamin</td><td>:</td><td>$jenisKelamin</td></tr>";
    echo "<tr><td>Asal Sekolah</td><td>:</td><td>$asalSekolah</td></tr>";
    echo "<tr><td>Nilai UAN</td><td>:</td><td>$nilaiUAN</td></tr>";
    echo "</table>";
    
    echo "<h2>Pendaftaran Berhasil! (Menggunakan GET)</h2>";
    ?>

</body>
</html>