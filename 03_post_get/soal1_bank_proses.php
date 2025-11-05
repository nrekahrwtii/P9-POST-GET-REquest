<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Saldo</title>
</head>
<body>

    <h1>Hasil Perhitungan Saldo Akhir</h1>
    
    <?php
    // Ambil data dari form menggunakan metode POST
    $saldoAwal = (float)$_POST['saldo_awal'];
    $bungaPersen = (float)$_POST['bunga_persen'];
    $bulan = (int)$_POST['bulan'];

    // Konversi persen menjadi desimal
    // Contoh: 0.25% menjadi 0.0025
    $bungaDesimal = $bungaPersen / 100;
    
    // Hitung Saldo Akhir menggunakan Rumus Bunga Majemuk
    // $saldoAkhir = SaldoAwal * (1 + Bunga)^Bulan
    $saldoAkhir = $saldoAwal * pow((1 + $bungaDesimal), $bulan);
    
    // Format angka untuk ditampilkan
    $saldoAkhirFormatted = number_format($saldoAkhir, 2, ',', '.');
    $saldoAwalFormatted = number_format($saldoAwal, 2, ',', '.');
    
    echo "<table>";
    echo "<tr><td>Saldo Awal</td><td>:</td><td>Rp. ".$saldoAwalFormatted."</td></tr>";
    echo "<tr><td>Bunga Per Bulan</td><td>:</td><td>".$bungaPersen." %</td></tr>";
    echo "<tr><td>Lama Menabung</td><td>:</td><td>".$bulan." bulan</td></tr>";
    echo "</table>";
    
    echo "<h2>Saldo Akhir setelah $bulan bulan adalah: Rp. ".$saldoAkhirFormatted."</h2>";
    
    // --- Contoh Perhitungan Manual Sesuai Soal Sebelumnya ---
    echo "<h3>Verifikasi Sesuai Soal (dengan data default)</h3>";

    // Data Soal
    $soal_saldoAwal = 1000000;
    $soal_bunga = 0.0025; // 0.25%
    $soal_bulan = 11;
    
    // Perhitungan
    $soal_saldoAkhir = $soal_saldoAwal * pow((1 + $soal_bunga), $soal_bulan);

    // Saldo akhir setelah 11 bulan adalah Rp. 1.027.892,11
    $soal_saldoAkhirFormatted = number_format($soal_saldoAkhir, 2, ',', '.');
    
    echo "<p>Berdasarkan soal dengan Saldo Awal Rp. 1.000.000 dan bunga 0,25% selama 11 bulan:</p>";
    echo "<p>Saldo akhir setelah ".$soal_bulan." bulan adalah : Rp. ".$soal_saldoAkhirFormatted."</p>";
    ?>
    
    <a href="soal1_bank_input.php">Kembali ke Kalkulator</a>

</body>
</html>