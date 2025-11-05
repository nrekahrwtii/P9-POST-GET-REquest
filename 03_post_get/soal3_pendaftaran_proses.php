<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pendaftaran</title>
</head>
<body>

    <h1>Data Pendaftaran Mahasiswa Baru</h1>
    <p>Berikut adalah data yang telah Anda masukkan:</p>
    
    <?php
    // --- Membaca semua input dari formulir POST ---
    
    // 1. Nama Lengkap
    $nama = $_POST['nama_lengkap'];
    
    // 2. Tempat Lahir
    $tempatLahir = $_POST['tempat_lahir'];
    
    // 3. Tanggal Lahir (Digabungkan)
    $tgl = $_POST['tgl_lahir'];
    $bln = $_POST['bln_lahir'];
    $thn = $_POST['thn_lahir'];
    $tanggalLahirLengkap = $tgl . "/" . $bln . "/" . $thn;

    // 4. Alamat Rumah
    $alamat = $_POST['alamat'];
    
    // 5. Jenis Kelamin
    $jenisKelamin = $_POST['jenis_kelamin'];
    
    // 6. Asal Sekolah
    $asalSekolah = $_POST['asal_sekolah'];
    
    // 7. Nilai UAN
    $nilaiUAN = $_POST['nilai_uan'];
    
    // --- Menampilkan Data dalam Tabel ---
    echo "<table>";
    echo "<tr><td>Nama Lengkap</td><td>:</td><td>$nama</td></tr>";
    echo "<tr><td>Tempat Lahir</td><td>:</td><td>$tempatLahir</td></tr>";
    echo "<tr><td>Tanggal Lahir</td><td>:</td><td>$tanggalLahirLengkap</td></tr>";
    echo "<tr><td>Alamat Rumah</td><td>:</td><td>$alamat</td></tr>";
    echo "<tr><td>Jenis Kelamin</td><td>:</td><td>$jenisKelamin</td></tr>";
    echo "<tr><td>Asal Sekolah</td><td>:</td><td>$asalSekolah</td></tr>";
    echo "<tr><td>Nilai UAN</td><td>:</td><td>$nilaiUAN</td></tr>";
    echo "</table>";
    
    echo "<h2>Pendaftaran Berhasil!</h2>";
    ?>

</body>
</html>